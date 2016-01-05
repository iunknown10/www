function createXmlHttpRequest() {
	try {
		return new window.XMLHttpRequest(); 
	} catch (e) {
		try {
			return new window.ActiveXObject("Microsoft.XMLHTTP");
		} catch (e) {
			throw new Error("您的浏览器不支持AJAX！");
		}
	}
}

function Uploader() {
	
	this.options = {
			
		file : null,
		
		identifier : null,
		
		uploadURL : '',
		
		progressNode : null,
		
		progressBarShow : false,
		
		progressTextShow : false,
		
		onloadstart : false,
		
		onload : false,
		
		onloadend : false,
		
		onprogress : false,
		
		oncomplete : false,
		
		onabort : false,
		
		onerror : false
	};
	
	this.sessionId = null;
	
	//XMLHttpRequest
	this.XHR = createXmlHttpRequest();
	
	//已发送位置
	this.position = 0;
	
	//包字节数
	this.packet = 5 * 1024 * 1024;
	
	this.buffer = null;
	
	this.file = function() {
		this.options.file = arguments[0];
		return this;
	};
	
	this.identifier = function() {
		this.options.identifier = arguments[0];
		return this;
	}
	
	this.uploadURL = function() {
		this.options.uploadURL = arguments[0];
		return this;
	};
	
	this.progressNode = function() {
		this.options.progressNode = arguments[0];
		return this;
	}
	
	this.progressTextShow = function() {
		this.options.progressTextShow = arguments[0];
		return this;
	}
	
	this.progressBarShow = function() {
		this.options.progressBarShow = arguments[0];
		return this;
	}

	this.onloadstart = function() {
		this.options.onloadstart = arguments[0];
		return this;
	};
	
	this.onload = function() {
		this.options.onload = arguments[0];
		return this;
	};
	
	this.onloadend = function() {
		this.options.onloadend = arguments[0];
		return this;
	};
	
	this.onprogress = function() {
		this.options.onprogress = arguments[0];
		return this;
	};
	
	this.oncomplete = function() {
		this.options.oncomplete = arguments[0];
		return this;
	};
	
	this.onabort = function() {
		this.options.onabort = arguments[0];
		return this;
	};
	
	this.onerror = function() {
		this.options.onerror = arguments[0];
		return this;
	};
	
};

Uploader.prototype.execute = function() {

	var pairs = this.options.file.name.split('.');
	pairs.length > 1 && pairs.pop();
	
	this.fileName = pairs.join('.');
	this.sessionId = md5(this.options.file.name);
	
	this.packet = (this.options.file.size / 99) > this.packet ? Math.ceil(this.options.file.size / 99) : this.packet;
	
	this.send();
	
	return this;
};

Uploader.prototype.progress = function(byteLength) {
	var progress = (this.position + byteLength) / this.options.file.size * 100;
	progress = progress > 100 ? 100 : progress;
	
	var progressNode = $(this.options.progressNode);
	if(this.options.progressBarShow) {
		progressNode.attr('aria-valuenow', progress.toFixed(2)).css('width', progress.toFixed(2) +'%');	
	}
	if(this.options.progressTextShow) {
		progressNode.html(progress.toFixed(2) +'%');
	}
};

/**
 * 发送
 */
Uploader.prototype.send = function() {
	var instance = this;
	 
	function send(offset) {
		
		instance.XHR.open('POST', instance.options.uploadURL, true);
		
		instance.XHR.setRequestHeader("X-Session-ID", instance.sessionId);
		instance.XHR.setRequestHeader("Content-Type", "application/octet-stream");
		instance.XHR.setRequestHeader("Content-Disposition", "attachment; name=\"file\"; filename=\""+ escape(instance.options.file.name) +"\"");
		instance.XHR.setRequestHeader("data", "{\"identifier\":\""+ instance.options.identifier +"\",\"name\":\""+ escape(instance.options.file.name) +"\",\"size\":"+ instance.options.file.size +"}");
		instance.XHR.setRequestHeader("X-Content-Range", "bytes "+ instance.position +"-"+ (offset - 1) +"/"+ instance.options.file.size);
		
		instance.XHR.onreadystatechange = function() {
			if(instance.XHR.readyState == 4) {
				var status = instance.XHR.status;
				if(status == 200) {
					instance.progress(offset);
					instance.complete();
					return;
				} else if(status == 201) {
					instance.position = offset;
					instance.send();
					return;
				} else {
					throw new Error('服务器异常 status code: ' + status);
					return;
				}
			}
		};
		
		instance.XHR.send(instance.buffer);
		
		instance.XHR.upload.onloadstart = function(event) {
			if(instance.options.onloadstart) {
				eval('instance.options.onloadstart');
			}
		};
		instance.XHR.upload.onload = function(event) {
			instance.progress(event.loaded);
			
			if(instance.options.onload) {
				eval(instance.options.onload+'()');
			}
		};
		instance.XHR.upload.onloadend = function(event) {
			if(instance.options.onloadend) {
				eval(instance.options.onloadend+'()');
			}
		};
		instance.XHR.upload.onabort = function() {
			if(instance.options.onabort) {
				eval(instance.options.onabort+'()');
			}
		};
		instance.XHR.upload.onprogress = function(event) {
			instance.progress(event.loaded);
			
			if(instance.options.onprogress) {
				eval(instance.options.onprogress+'()');
			}
		};
		instance.XHR.upload.onerror = function(event) {
			if(instance.options.onerror) {
				eval(instance.options.onerror+'()');
			}
		};
		instance.XHR.upload.ontimeout = function(event) {
			if(instance.options.ontimeout) {
				eval(instance.options.ontimeout+'()');
			}
		};
	}
	
	function read(offset) {

		var blob = null;
		
		if(instance.options.file.slice){
			blob = instance.options.file.slice(instance.position, offset);
		}
		if(instance.options.file.webkitSlice) {
			blob = instance.options.file.webkitSlice(instance.position, offset);
		}
		if(instance.options.file.mozSlice) {
			blob = instance.options.file.mozSlice(instance.position, offset);
		}
		
		if(blob == null) {
			throw new Error('Slice Blob error.');
		}
		instance.buffer = blob;
		send(offset);
		return;
	};

	var offset = (instance.position + instance.packet) > instance.options.file.size ? instance.options.file.size : (instance.position + instance.packet);

	//开始读数据
	read(instance.options.file.size);
};

Uploader.prototype.complete = function() {
	if(this.options.oncomplete) {
		eval(this.options.oncomplete+'('+ this.XHR.responseText +')');
	}
};

Uploader.prototype.pause = function() {
	this.pausing = true;
	this.XHR.abort();
};

Uploader.prototype.cancel = function() {
	var instance = this;
	this.XHR.abort();
};


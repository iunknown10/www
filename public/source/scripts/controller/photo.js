var Photo = {
	
	bindEvent : function() {
		
	},
	
	upload : function(element) {
		var increment = $('.thumbnail').length + 1;
		for(var i = 0; i < element.files.length; i++) {
			increment += i;
			var nodeDiv = $('<div>').addClass('col-xs-6').addClass('col-md-3');
			var nodeA = $('<a>').addClass('thumbnail');
			var nodeImage = $('<img>').attr('id', 'thumbnail-'+ increment).attr('src', '/source/images/upload_default.jpg');
			var nodeSpan = $('<span>').css('display', 'block').css('width', '0%').css('height', '2px').css('background', '#3ad531');
			
			nodeDiv.appendTo($('#Thumbnail'));
			nodeA.appendTo(nodeDiv);
			nodeImage.appendTo(nodeA);
			nodeSpan.appendTo(nodeA);
			
			var file = element.files[i];
			
			try {
				var uploader = new Uploader()
					.uploadURL('/home/photo/accept')
					.progressNode(nodeSpan.get(0))
					.progressBarShow(true)
					.file(file)
					.identifier(increment)
					.oncomplete('Photo.uploadComplete')
					.execute();
			} catch(e) {
				console.log(e.message);
				new PNotify({
					title: '上传失败，'+ e.message,
					text: file.name,
					type: 'error'
				});
			}
		}
	},
	
	uploadComplete : function() {
		var response = arguments[0];
		var identifier = response.data.identifier;
		var source = '/'+response.data.directory+response.data.small;
		
		$('#thumbnail-'+identifier).attr('src', source);
		$('#thumbnail-'+identifier).next().remove();
	},
	
	updateTitle : function(element) {
		var title = $(element).attr('data-title');
		var photoId = $(element).attr('data-id');
		var createTime = $(element).attr('data-time');
		var input = $('<input date-id="'+ photoId +'" class="photo-input-title" value="'+ title +'" />');
		$(element).replaceWith(input);
		
		function update() {
			title = input.val();
			
			$.ajax({
				type : 'post',
				url : '/home/photo/update',
				data : 'photo_id='+ photoId +'&title='+ title,
				async : false,
				success : function(response) {
					response = eval(response);
					if(!response.code) {
						var textError = '';
						for(var key in response.data) {
							textError += '<span style="color:#F8BB86;">'+response.data[key] +'<span><br/>';
						}
						swal({
							title: '<small>有点错误……</small>',
							type: 'error',
							text: textError,
							html: true,
							timer: 3000
						});
						return;
					}
					var h5 = $('<h5 ondblclick="Photo.updateTitle(this);" data-id="'+ photoId +'" data-title="'+ title +'" data-time="'+ createTime +'">'+ title +' <small>'+ createTime +'</small></h5>');
					input.replaceWith(h5);
				},
				error : function(XMLHttpRequest, textStatus, errorThrown) {
					swal({
						title: '<small>操作失败，服务器出故障了!</small>',
						text: 'Error: <span style="color:#F8BB86;">'+ errorThrown +'</span>',
						html: true,
						timer: 3000
					});
				}
			});
		}
		
		$(document).keypress(function(e){
		    if(e.which==13){
		    	update();
		    }
		});
		
		input.on('blur', function() {
			update();
		});
		
		input.focus();
	},
	
	updateMemo : function(element) {
		var memo = $(element).html();
		var photoId = $(element).attr('data-id');
		var textarea = $('<textarea date-id="'+ photoId +'" class="photo-textarea-memo">'+ memo +'</textarea>');
		$(element).replaceWith(textarea);
		
	},
	
	remove : function(photoId) {
		swal({
				title: '确定删除这个照片吗？',
				text: '删除之后不可恢复!',
				type: 'warning',
				showCancelButton: true,
				cancelButtonText: '取消',
				confirmButtonColor: '#DD6B55',
				confirmButtonText: '删除',
				closeOnConfirm: true
			},
			function(){
				$.ajax({
					type : 'post',
					url : '/home/photo/delete',
					data : 'photo_id='+ photoId,
					async : false,
					success : function(response) {
						response = eval(response);
						if(!response.code) {
							swal({
								title: '<small>有点错误……</small>',
								type: 'error',
								text: response.message,
								html: true,
								timer: 3000
							});
							return;
						}
						$('#Photo-'+ photoId).remove();
					},
					error : function(XMLHttpRequest, textStatus, errorThrown) {
						swal({
							title: '<small>操作失败，服务器出故障了!</small>',
							text: 'Error: <span style="color:#F8BB86;">'+ errorThrown +'</span>',
							html: true,
							timer: 3000
						});
					}
				});
			});
	}
	
};


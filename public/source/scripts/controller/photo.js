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
					.progressNode(nodeSpan)
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
		var source = '/'+response.data.directory+response.data.path;
		
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
					var h3 = $('<h3 ondblclick="Photo.updateTitle(this);" data-id="'+ photoId +'" data-title="'+ title +'" data-time="'+ createTime +'">'+ title +' <small>'+ createTime +'</small></h3>');
					input.replaceWith(h3);
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
	
	
	
	
	
	
	
	submit : function(element) {
		var action = element.form.action;
		var values = $(element.form).serialize();
		
		var title = $('#title').val();
		
		var errors = [];
		if(!title) {
			errors['title'] = '标题不能为空';
		}
		
		if(errors.length > 0) {
			var textError = '';
			for(var key in errors) {
				textError += '<span style="color:#F8BB86;">'+errors[key] +'<span><br/>';
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
		
		$.ajax({
			type : 'post',
			url : '/photo/save',
			data : values,
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
				
				swal({
					title: '日志保存成功',
					text: '',
					type: 'success',
					timer: 3000
				},
				function() {
					setTimeout(function(){location.href = response.data.redirect;}, 100);
				});
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
	},
	
	remove : function(articleId) {
		swal({
			title: '确定删除吗？',
			text: '删除后不可恢复！',
			type: 'warning',
			showCancelButton: true,
			cancelButtonText: '取消',
			confirmButtonColor: '#DD6B55',
			confirmButtonText: '删除',
			closeOnConfirm: false
			},
			function(){
				$.ajax({
					type : 'post',
					url : '/article/delete',
					data : 'article_id='+ articleId,
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
						
						swal({
							title: '操作成功',
							text: '',
							type: 'success',
							timer: 2000
						},
						function() {
							$('#article-'+ articleId).remove();
							swal.close();
						});
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


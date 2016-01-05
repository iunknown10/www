var Article = {
	
	bindEvent : function() {
		
	},
	
	setDefaultOption : function(elementSelect, value) {
		$('#'+elementSelect).val(value);
	},
	
	submit : function(element) {
		
		tinyMCE.triggerSave();
		
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
			url : '/home/article/save',
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
					url : '/home/article/delete',
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


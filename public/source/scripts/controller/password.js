var Password = {
	
	bindEvent : function() {
		$('#email').on('click', function() {
			$(this).val('');
		});
		$('#email').on('blur', function() {
			if($(this).val() == '') {
				$(this).val('注册邮箱');
			}
		});
	},
	
	foo : function() {
		$.ajax({
			type : 'post',
			url : '/article/save',
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
	}
};


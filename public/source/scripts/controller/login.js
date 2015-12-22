var Login = {
	
	bindEvent : function() {
		$('#name').on('click', function() {
			$(this).val('');
		});
		$('#name').on('blur', function() {
			if($(this).val() == '') {
				$(this).val('用户名／邮箱／手机');
			}
		});
		$('#iform').keydown(function(e) {
			if (e.keyCode == 13){
				Login.submit($(this).find('input').get(0));
			}
		});
	},
	
	submit : function(element) {
		var action = element.form.action;
		var values = $(element.form).serialize();
		
		$.ajax({
			type : 'post',
			url : action,
			data : values,
			async : false,
			success : function(response) {
				response = eval("("+ response +")");
				if(!response.code) {
					swal({
						title: '<small>登录失败了……</small>',
						type: 'error',
						text: response.message,
						html: true,
						timer: 3000,
						showConfirmButton: false
					});
					return;
				}
				swal({
					title: '登录成功',
					text: '3秒钟后跳转到 '+ response.data,
					type: 'success',
					timer: 3000,
					showConfirmButton: false
				},
				function() {
					setTimeout(function(){location.href = response.data;}, 100);
				});
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {
				console.log("status:"+ textStatus +"; error:"+ errorThrown +";");
			}
		});
	}
};


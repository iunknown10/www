var Register = {
	
	bindEvent : function() {
		//-----昵称
		$('#nickname').on('focus', function() {
			$(this).removeClass('register-input-error');
			$(this).removeClass('register-input-success');
			$(this).next('span').html('');
		});
		$('#nickname').on('blur', function() {
			if(!$(this).val()) {
				$(this).addClass('register-input-error');
				$(this).next('span').html('昵称不能为空');
				return;
			}
			var regexp = /\w+@\w+\..+?/g;
			var pass = Register.verify(this);
			if(!pass) {
				$(this).addClass('register-input-error');
				$(this).next('span').html('昵称已被占用');
				return;
			}
			$(this).addClass('register-input-success');
		});
		//-----密码
		$('#password').on('focus', function() {
			$(this).removeClass('register-input-error');
			$(this).removeClass('register-input-success');
			$(this).next('span').html('');
		});
		$('#password').on('blur', function() {
			if(!$(this).val()) {
				$(this).addClass('register-input-error');
				$(this).next('span').html('密码不能为空');
				return;
			}
			if($(this).val().length < 6) {
				$(this).addClass('register-input-error');
				$(this).next('span').html('密码长度不能少于6位');
				return;
			}
			$(this).addClass('register-input-success');
		});
		//-----姓名
		$('#name').on('focus', function() {
			$(this).removeClass('register-input-error');
			$(this).removeClass('register-input-success');
			$(this).next('span').html('');
		});
		$('#name').on('blur', function() {
			if($('#name').val().length > 0) {
				$(this).addClass('register-input-success');
			}
		});
		//-----邮箱
		$('#email').on('click', function() {
			$(this).removeClass('register-input-error');
			$(this).removeClass('register-input-success');
			$(this).next('span').html('');
			return;
		});
		$('#email').on('blur', function() {
			var regexp = /\w+@\w+\..+?/g;
			if(!regexp.test($(this).val())) {
				$(this).addClass('register-input-error');
				$(this).next('span').html('邮箱格式不正确');
				return;
			}
			var pass = Register.verify(this);
			if(!pass) {
				$(this).addClass('register-input-error');
				$(this).next('span').html('邮箱已被占用');
				return;
			}
			$(this).addClass('register-input-success');
		});
		//----手机
		$('#mobile').on('focus', function() {
			$(this).removeClass('register-input-error');
			$(this).removeClass('register-input-success');
			$(this).next('span').html('');
			return;
		});
		$('#mobile').on('blur', function() {
			var regexp = /^[0-9]{11}$/g;
			if(!regexp.test($(this).val())) {
				$(this).addClass('register-input-error');
				$(this).next('span').html('手机号必须是11位数字');
				return;
			}
			var pass = Register.verify(this);
			if(!pass) {
				$(this).addClass('register-input-error');
				$(this).next('span').html('手机号已被占用');
				return;
			}
			$(this).addClass('register-input-success');
		});
		//-----身份证
		$('#id_card').on('focus', function() {
			$(this).removeClass('register-input-error');
			$(this).removeClass('register-input-success');
			$(this).next('span').html('');
			return;
		});
		$('#id_card').on('blur', function() {
			if(!isIDCard($(this).val())) {
				$(this).addClass('register-input-error');
				$(this).next('span').html('身份证号格式不正确');
				return;
			}
			$(this).addClass('register-input-success');
		});
		//-----籍贯
		regions.fillSelect('birth_place', regions.PROVINCE);
		//-----居住地
		regions.fillSelect('live_place', regions.PROVINCE);
	},
	
	verify : function(element) {
		var field = $(element).attr('name');
		var value = $(element).val();
		var pass = false;
		$.ajax({
			type : 'post',
			url : '/register/verify',
			data : field +'='+ value,
			async : false,
			success : function(response) {
				response = eval(response);
				if(!response.code) {
					console.log("Server error:"+ response.message);
					pass = false;
				}
				pass = response.data ? false : true;
			}
		});
		return pass;
	},
	
	submit : function(element) {
		var action = element.form.action;
		var values = $('#sform').serialize();
		var result = false;
		
		var nickname= $('#nickname').val();
		var name = $('#name').val();
		var password = $('#password').val();
		var email = $('#email').val();
		var mobile = $('#mobile').val();
//		var wechat = $('#wechat').val();
//		var qq = $('#qq').val();
//		var idCard = $('#id_card').val();
//		var birthPlace = $('#birth_place').val();
//		var livePlace = $('#live_place').val();
		var agreement = $('#agreement').val();
		var code = $('#code').val();
		
		var errorFound = false;
		if(!nickname) {
			$('#nickname').addClass('register-input-error');
			$('#nickname').next('span').html('昵称不能为空');
			errorFound = true;
		}
		if(!password) {
			$('#password').addClass('register-input-error');
			$('#password').next('span').html('密码不能为空');
			errorFound = true;
		}
		if(password.length < 6) {
			$('#password').addClass('register-input-error');
			$('#password').next('span').html('密码不能少于6位');
			errorFound = true;
		}
		if(!email) {
			$('#email').addClass('register-input-error');
			$('#email').next('span').html('邮件不能为空');
			errorFound = true;
		}
		var regexp = /\w+@\w+\..+?/g;
		if(!regexp.test(email)) {
			$('#email').addClass('register-input-error');
			$('#email').next('span').html('邮件格式不正确');
			errorFound = true;
		}
		if(!mobile) {
			$('#mobile').addClass('register-input-error');
			$('#mobile').next('span').html('手机不能为空');
			errorFound = true;
		}
		if(errorFound) {
			return;
		}
		
		$.ajax({
			type : 'post',
			url : '/register/save',
			data : values,
			async : false,
			success : function(response) {
				response = eval(response);
				if(!response.code) {
					var textError = '';
					for(var key in response.data) {
						$('#'+ key).removeClass('register-input-error');
						$('#'+ key).removeClass('register-input-success');
						$('#'+ key).addClass('register-input-error');
						$('#'+ key).next('span').html(response.data[key]);
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
					title: '注册成功',
					text: '加入iRunning，成为真正的跑者！',
					imageUrl: '/source/images/thumbs-up.jpg',
					timer: 3000,
					closeOnConfirm: true
				},
				function() {
					setTimeout(function(){location.href = '/profile';}, 100);
				});
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {
				swal({
					title: '<small>没注册成功，服务器出故障了!</small>',
					text: 'Error: <span style="color:#F8BB86;">'+ errorThrown +'</span>',
					html: true,
					timer: 3000
				});
			}
		});
	}
};


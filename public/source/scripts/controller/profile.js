var Profile = {
	
	bindEvent : function() {
		//-----昵称
		$('#nickname').on('focus', function() {
			$(this).removeClass('profile-input-error');
			$(this).removeClass('profile-input-success');
			$(this).next('span').html('');
		});
		$('#nickname').on('blur', function() {
			if(!$(this).val()) {
				$(this).addClass('profile-input-error');
				$(this).next('span').html('昵称不能为空');
				return;
			}
			var regexp = /\w+@\w+\..+?/g;
			var pass = Profile.verify(this);
			if(!pass) {
				$(this).addClass('profile-input-error');
				$(this).next('span').html('昵称已被占用');
				return;
			}
			$(this).addClass('profile-input-success');
		});
		//-----姓名
		$('#name').on('focus', function() {
			$(this).removeClass('profile-input-error');
			$(this).removeClass('profile-input-success');
			$(this).next('span').html('');
		});
		$('#name').on('blur', function() {
			if($('#name').val().length > 0) {
				$(this).addClass('profile-input-success');
			}
		});
		//-----邮箱
		$('#email').on('focus', function() {
			$(this).removeClass('profile-input-error');
			$(this).removeClass('profile-input-success');
			$(this).next('span').html('');
			return;
		});
		$('#email').on('blur', function() {
			var regexp = /\w+@\w+\..+?/g;
			if(!regexp.test($(this).val())) {
				$(this).addClass('profile-input-error');
				$(this).next('span').html('邮箱格式不正确');
				return;
			}
			var pass = Profile.verify(this);
			if(!pass) {
				$(this).addClass('profile-input-error');
				$(this).next('span').html('邮箱已被使用');
				return;
			}
			$(this).addClass('profile-input-success');
		});
		//----手机
		$('#mobile').on('focus', function() {
			$(this).removeClass('profile-input-error');
			$(this).removeClass('profile-input-success');
			$(this).next('span').html('');
			return;
		});
		$('#mobile').on('blur', function() {
			var regexp = /^[0-9]{11}$/g;
			if(!regexp.test($(this).val())) {
				$(this).addClass('profile-input-error');
				$(this).next('span').html('手机号必须是11位数字');
				return;
			}
			var pass = Profile.verify(this);
			if(!pass) {
				$(this).addClass('profile-input-error');
				$(this).next('span').html('手机号已被使用');
				return;
			}
			$(this).addClass('profile-input-success');
		});
		//-----身份证
		$('#id_card').on('focus', function() {
			$(this).removeClass('profile-input-error');
			$(this).removeClass('profile-input-success');
			$(this).next('span').html('');
			return;
		});
		$('#id_card').on('blur', function() {
			if(!isIDCard($(this).val())) {
				$(this).addClass('profile-input-error');
				$(this).next('span').html('身份证号格式不正确');
				return;
			}
			$(this).addClass('profile-input-success');
		});
		//-----微信
		$('#wechat').on('focus', function() {
			$(this).removeClass('profile-input-error');
			$(this).removeClass('profile-input-success');
			$(this).next('span').html('');
			return;
		});
		$('#wechat').on('blur', function() {
			$(this).addClass('profile-input-success');
		});
		//-----qq
		$('#qq').on('focus', function() {
			$(this).removeClass('profile-input-error');
			$(this).removeClass('profile-input-success');
			$(this).next('span').html('');
			return;
		});
		$('#qq').on('blur', function() {
			var regexp = /^[0-9]+$/g;
			if(!regexp.test($(this).val())) {
				$(this).addClass('profile-input-error');
				$(this).next('span').html('QQ号必须是数字');
				return;
			}
			$(this).addClass('profile-input-success');
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
			url : '/home/profile/verify',
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
	
	setDefaultOption : function(elementSelect, value) {
		$('#'+elementSelect).val(value);
	},
	
	submit : function(element) {
		var action = element.form.action;
		var values = $(element.form).serialize();
		
		var name = $('#name').val();
		var email = $('#email').val();
		var mobile = $('#mobile').val();
		var wechat = $('#wechat').val();
		var qq = $('#qq').val();
		var idCard = $('#id_card').val();
		var birthPlace = $('#birth_place').val();
		var livePlace = $('#live_place').val();
		
		var errorFound = false;
		if(!email) {
			$('#email').addClass('profile-input-error');
			$('#email').next('span').html('邮件不能为空');
			errorFound = true;
		}
		var regexp = /\w+@\w+\..+?/g;
		if(!regexp.test(email)) {
			$('#email').addClass('profile-input-error');
			$('#email').next('span').html('邮件格式不正确');
			errorFound = true;
		}
		if(!mobile) {
			$('#mobile').addClass('profile-input-error');
			$('#mobile').next('span').html('手机不能为空');
			errorFound = true;
		}
		var regexp = /^[0-9]{11}$/;
		if(!regexp.test(mobile)) {
			$('#mobile').addClass('profile-input-error');
			$('#mobile').next('span').html('手机号必须是11位数字');
			errorFound = true;
		}
		
		if(errorFound) {
			return;
		}
		
		$.ajax({
			type : 'post',
			url : '/home/profile/save',
			data : values,
			async : false,
			success : function(response) {
				response = eval(response);
				if(!response.code) {
					console.log("Server error:"+ response.message);
					
					var textError = '';
					for(var key in response.data) {
						$('#'+ key).removeClass('profile-input-error');
						$('#'+ key).removeClass('profile-input-success');
						$('#'+ key).addClass('profile-input-error');
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
					title: '更新成功',
					text: '',
					type: 'success',
					timer: 3000
				});
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {
				swal({
					title: '<small>没更新成功，服务器出故障了!</small>',
					text: 'Error: <span style="color:#F8BB86;">'+ errorThrown +'</span>',
					html: true,
					timer: 3000
				});
			}
		});
	}
};


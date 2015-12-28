var Chaos = {
	
	getNumbers : function() {
		$.ajax({
			type : 'get',
			url : '/home/profile/numbers',
			data : null,
			async : true,
			success : function(response) {
				response = eval(response);
				if(!response.code) {
					console.log(message);
					return;
				}
				var articleCount = response.data.article;
				var photoCount = response.data.photo;
				var routeCount = response.data.route;
				
				$('#article-count').html(articleCount);
				$('#photo-count').html(photoCount);
				$('#route-count').html(routeCount);
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {
				console.log(errorThrown);
			}
		});
	},
	
	foo : function() {
		
	}
};
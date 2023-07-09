function muarandom(id) {
	swal(
	{

	  title: "Bạn chắc chắn muốn mở Hộp Quà Này?",
	  text: "Khi mở phần thưởng ngẫu nhiên xong vui lòng kiểm tra lại lịch sử may mắn để kiểm tra nhân phẩm nhé ^^!",
	  icon: "warning",
	  buttons: "Mở Ngay!",
	  dangerMode: true,
  
	  
	}).then(function() {
		$.ajax({
			url: '/pay_random', // link muốn gửi  request
			type: 'post', // gửi đi bằng method 
			Datatype: 'json',
			data: {
				id: id
			},
			success: function(data){
			data = JSON.parse(data);	
			 if(data.status== "success"){
				swal({   
					title : data.title,
					text: data.message,
					icon: "success",		
				});
			 } else {
				swal({
					title : data.title,
					text: data.message,
					icon: "error",
				});	
			 }	
			}	
		});
	});
}	

function muanick(id) {
	swal(
	{

	  title: "Bạn chắc chắn muốn mua?",
	  text: "Khi Mua Thành công bạn vào danh sách nick đã mua để nhận nhé ^^!",
	  icon: "warning",
	  buttons: "Mở Ngay!",
	  //dangerMode: true,
  
	  
	}).then(function() {
		$.ajax({
			url: '/pay_nick', // link muốn gửi  request
			type: 'post', // gửi đi bằng method 
			Datatype: 'json',
			data: {
				id: id
			},
			success: function(data){
			data = JSON.parse(data);	
			 if(data.status== "success"){
				swal({   
					title : data.title,
					text: data.message,
					icon: "success",		
				});
				window.location = "/user/history-game";
			 } else {
				swal({
					title : data.title,
					text: data.message,
					icon: "error",
				});	
			 }	
			}	
		});
	});
}	


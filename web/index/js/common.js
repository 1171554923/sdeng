//公共类
$(document).ready(function($) {
	//隐藏个人信息
	$('body').click(function(event) {	
		
		if($('#down').attr('data') == '0')
		{
			$('#down').css('border-top','none').css('border-bottom','7px solid #fff');
			$('.profile').css('display','none');
			$('#down').attr('data',"1");
		}
	});

	$('#down').click(function(event) {
		if($('#down').attr('data') == '1')
		{
			$('#down').css('border-bottom','none').css('border-top','7px solid #fff');
			$('.profile').css('display','block');
			$('#down').attr('data',"0");
		}else{
			$('#down').css('border-top','none').css('border-bottom','7px solid #fff');
			$('.profile').css('display','none');
			$('#down').attr('data',"1");
		}
	
		event.stopPropagation(); 

	});
});


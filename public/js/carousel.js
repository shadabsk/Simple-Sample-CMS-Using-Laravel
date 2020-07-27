$(document).ready(function(){
	$('#showResMen').click(function(){
		$('.topnav').slideToggle();
	});

	$('#ctrl1').css(
		'background-color', '#7B51B8'
	);

	if($("#carousButton span:first").length){
		$('#carousButton span:first').addClass('activated');
		$('#carousButton span:first').css(
			'background-color', '#12B4CB'
		);
		$('.maincont div:first').show();
	}

	carousbutleng = $('.dot').length;


	setInterval(function(){
		let x;
		$("#carousButton span").each(function(){
			//console.log( $(this).attr('id') ); 
			if($('#'+($(this).attr('id'))).hasClass('dot activated')){
				let indexinterval = $(this).attr('id').substr(4, );

				//$('#ctrl'+indexinterval).next().trigger('click');
				//$('#ctrl'+indexinterval).trigger('click');

				if($('#ctrl'+indexinterval).next().is('span')){
					$('#ctrl'+indexinterval).next().trigger('click');

				}else{
					$('#carousButton span:first').trigger('click');
				}


				return false;
				
			}
		});

	}, 5000);

	$(document).on('click', '.dot', function(){
		let i;
		let index = this.id.substr(4, );
		

		$('.box').hide();
		$('.dot').removeClass('activated');
		$('.dot').css(
			'background-color', ''
		);
		
		$('#box'+index).show();
		$('#'+this.id).addClass('activated');
		$('#'+this.id).css(
			'background-color', '#7B51B8'
		);
		
		
	});
	
});
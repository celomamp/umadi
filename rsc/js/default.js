$(document).ready(function(){
	$('a').click(function(){
		$('.active').toggleClass('active');
		$(this).parent().toggleClass('active');
	})
})
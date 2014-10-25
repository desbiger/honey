<meta name = 'yandex-verification' content = '7ced4698335de89d'/>
<link href = "/include/css/style.css" type = "text/css" rel = "stylesheet"/>
<link href = "/include/jquery-ui-1.10.4.custom/css/honey-theme/jquery-ui-1.10.4.custom.css" type = "text/css" rel = "stylesheet"/>
<link href = "/include/fancy/jquery.fancybox-1.3.4.css" type = "text/css" rel = "stylesheet"/>
<script type = "text/javascript" src = "/include/js/jquery-1.7.1.min.js"></script>
<script type = "text/javascript" src = "/include/jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.js"></script>
<script type = "text/javascript" src = "/include/fancy/jquery.fancybox-1.3.4.pack.js"></script>
<script type = "text/javascript" src = "/include/js/mobilyslider.js"></script>
<script type = "text/javascript">
	$(function () {
		$('ul.tabs').each(function () {
			$(this).find('li').each(function (i) {
				$(this).click(function () {
					$(this).addClass('current').siblings().removeClass('current')
							.parents('div.section').find('div.box').eq(i).fadeIn(150).siblings('div.box').hide();
				});
			});
		});
//		$('#tabs').tabs();
		$('.fancy').fancybox({
			width:'95%',
			height:'95%'
		});
		$('.slider').mobilyslider({
			content: '.sliderContent',
			children: 'div',
			transition: 'horizontal',
			animationSpeed: 300,
			autoplay: true,
			autoplaySpeed: 7000,
			pauseOnHover: true,
			bullets: false,
			arrows: true,
			arrowsHide: false,
			prev: 'prev',
			next: 'next',
			animationStart: function () {
			},
			animationComplete: function () {
			}
		});
	});
</script>
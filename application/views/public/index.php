<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv = "Content-Type" content = "text/html; charset=utf-8"/>
	<title><?= $title ?></title>
	<meta name="keywords" content="<?=$keywords?>" />
	<meta name="description" content="<?=$description?>" />

	<?= View::factory('global/header') ?>
	<script type="text/javascript" src="/include/js/scripts.js"></script>
</head>
<body>

<div id = "header">
	<div class = "header_center">
		<ul class = "cont">
			<?= View::factory('public/wigets/basket_small') ?>
			<!--			<li class = "phone">8-960-692-59-93</li>-->
			<!--			<li class = "skype">big_pasha</li>-->
			<!--			<li class = "icq">172471526</li>-->
		</ul>

		<img src = "/include/image/biee.png" class = "biee" alt = ""/>

		<h1>
			<a href = "/">
				<img src = "/include/image/logo.png" alt = "">
			</a>
		</h1>

		<div class = "form">
			<?= $login_form ?>
			<br/>

			<form action = "/search" method = "post">
				<?= Form::input('search_text', Arr::get($_REQUEST, 'search_text'), array(
							'placeholder' => "поиск по сайту",
							'class' => 'text'
					))?>

				<div class = "left_sub">
					<input type = "submit" name = "submit" class = "sub" value = ""/>
				</div>
			</form>
		</div>
	</div>
</div>


<div id = "menu_top">
	<?= $top_menu ?>
</div>

<?= $slider ?>

<div id = "content">
	<div class = "wrap_cont">


		<div class = "sidebar_L">
			<?= $left_menu ?>
			<?= $news_list ?>
			<img src = "/include/image/banner_left.jpg" alt = ""/>
		</div>

		<div class = "sidebar_R">
			<?= $content ?>


		</div>


	</div>

</div>

<div class = "clear"></div>

<div id = "footer">
	<div class = "footer_center">
		<div class = "form_fot">
<!--			<form action = "/search" method = "post">-->
<!--				--><?//= Form::input('search_text', Arr::get($_REQUEST, 'search_text'), array(
//							'placeholder' => "поиск по сайту",
//							'class' => 'text'
//					))?>
<!---->
<!--				<div class = "left_sub">-->
<!--					<input type = "submit" name = "submit" class = "sub" value = ""/>-->
<!--				</div>-->
<!--			</form>-->
		</div>
		<?= $menu_bottom ?>
</div>

</body>
</html>

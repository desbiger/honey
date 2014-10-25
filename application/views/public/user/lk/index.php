<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv = "Content-Type" content = "text/html; charset=utf-8"/>
	<title><?= $title ?></title>
	<?= View::factory('global/header') ?>
</head>
<body>

<div id = "header">
	<div class = "header_center">
		<ul class = "cont">
			<li class = "phone">8-960-692-59-93</li>
			<li class = "skype">big_pasha</li>
			<li class = "icq">172471526</li>
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

			<form action = "#" method = "post">
				<input type = "text" name = "text" class = "text" placeholder = "поиск по сайту"/>

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
			<form action = "#" method = "post">
				<input type = "text" name = "text" class = "text" placeholder = "поиск по сайту"/>

				<div class = "left_sub">
					<input type = "submit" name = "submit" class = "sub" value = ""/>
				</div>
			</form>
		</div>
		<?= $menu_bottom ?>
	</div>
</div>

</body>
</html>

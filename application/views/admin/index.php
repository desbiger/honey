<html>
<head>
	<title><?= $title ?></title>
	<?= HTML::style('/include/css/style.css') ?>
	<script type = "text/javascript" src = "/include/js/jquery-1.10.2.js"></script>
	<script type = "text/javascript" src = "/include/js/tinymce/tinymce.min.js"></script>
	<link rel = "stylesheet" type = "text/css" href = "/include/js/tinymce/themes/modern/theme.min.js">
	<link rel = "stylesheet" href = "http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	<script type = "text/javascript">
		$(function () {

			tinymce.init(
					{
						selector: 'textarea',
						plugins: "advlist,autolink,link,image,lists,charmap,print,preview,hr,anchor,pagebreak,spellchecker," +
								"searchreplace," +
								"wordcount,visualblocks,visualchars,code,fullscreen,insertdatetime,media,nonbreaking,save,table,contextmenu,directionality,emoticons,template,paste,textcolor",
						image_advtab: true,
						paste_data_images: true,
						content_css: '/include/css/bootstrap-theme.css, ' +
								'/include/css/bootstrap-theme.min.css, /include/css/bootstrap.css',
						language_url: '/include/js/tinymce/langs/ru.js',
						height: 400,
						width: 700
					});
		});


	</script>
</head>
<body>
<h1><?= $title ?></h1>
<hr style = "margin-bottom: 30px"/>
<div class = "admin_content">
	<div class = "left"><?= $left_menu ?></div>
	<div class = "right"><?= $content ?></div>
</div>
</body>
</html>

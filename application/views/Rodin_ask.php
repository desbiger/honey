
<!doctype html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<h2>Тест друзей на пидарство</h2>
<form action="">
	<table>
		<tr>
			<td>Ведите Имя вашего друга</td>
			<td><?=Form::input('name',Arr::get($_REQUEST,'name'))?></td>
		</tr>
		<tr>
			<td></td>
			<td><?=Form::submit('sub','Проверить')?></td>
		</tr>
	</table>
	<?=$result?>
</form>
</body>
</html>
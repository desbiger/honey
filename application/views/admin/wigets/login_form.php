<form action = "" method="post">
	<table>
		<tr>
			<td>Логин</td>
			<td><?=Form::input('name')?></td>
		</tr>
		<tr>
			<td>Пароль</td>
			<td><?=Form::password('pass')?></td>
		</tr>
		<tr>
			<td><?=Form::submit('sub',"Войти")?></td>
		</tr>
	</table>
</form>
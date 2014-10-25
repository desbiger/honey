<h2>Обращение в техническую поддержку</h2>
<form action = "" method="post">
	<table>
		<tr>
			<td>Тема сообщения</td>
			<td><?=Form::input('title')?></td>
		</tr>
		<tr>
			<td>Текст сообщения</td>
			<td><?=Form::textarea('text')?></td>
		</tr>
		<tr>
			<td></td>
			<td><?=Form::submit('sub','Отправить сообщение')?></td>
		</tr>
	</table>
</form>
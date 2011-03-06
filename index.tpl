<html>
	<body>
		<table id="student" border="1">
		{foreach from=$student_data item=data}
		<tr>
			<td>{$data['id']}</td><td>{$data['post_code']}</td>
			<td>{$data['name']}</td><td>{$data['address']}</td>
			<td>{$data['phone_number']}</td><td>{$data['email']}</td>
			<td><a href="./index.php?p=2&id={$data['id']}">edit</td>
			<td><a href="./index.php?p=3&id={$data['id']}">delete</td>
		</tr>
		{/foreach}
		</table>
	</body>
</html>

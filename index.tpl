<html>
	<body>
		<table id="student" border="1">
		{foreach from=$student_data item=data}
		<tr>
			<td>{$data['id']}</td><td>{$data['post_code']}</td>
			<td>{$data['name']}</td><td>{$data['address']}</td>
			<td>{$data['phone_number']}</td><td>{$data['email']}</td>
			<td><input type="button" value="edit"></td>
			<td><input type="button" value="delete"></td>
		</tr>
		{/foreach}
		</table>
	</body>
</html>

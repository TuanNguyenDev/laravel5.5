<form action="tuannguyen" method="post" accept-charset="utf-8">
	{{csrf_field()}}
	<input type="text" name="user_name" value="tuannguyen">
	<button type="submit">Send</button>
</form>
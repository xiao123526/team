<form action="{{url('/brand/store')}}" method="post" enctype="multipart/form-data">
@csrf
	<table border="1">
		<tr>
			<td>分类名称</td>
			<td><input type="text" name="brand_name"></td>
		</tr>
		<tr>
			<td>分类logo</td>
			<td><input type="file" name="brand_logo"></td>
		</tr>
		<tr>
			<td>网址</td>
			<td><input type="text" name="brand_url"></td>
		</tr>
		<tr>
			<td><input type="submit" value="添加"></td>
			<td></td>
		</tr>
	</table>
</form>
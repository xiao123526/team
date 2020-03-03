<form action="{{url('/brand/update/'.$res->brand_id)}}" method="post" enctype="multipart/form-data">
@csrf
	<table border="1">
		<tr>
			<td>分类名称</td>
			<td><input type="text" name="brand_name" value="{{$res->brand_name}}"></td>
		</tr>
		<tr>
			<td>分类logo</td>
			<td>
				<img src="{{env('UPLOAD_URL')}}{{$res->brand_logo}}" width="50" height="50">
				<input type="file" name="brand_logo"></td>
		</tr>
		<tr>
			<td>网址</td>
			<td><input type="text" name="brand_url" value="{{$res->brand_url}}"></td>
		</tr>
		<tr>
			<td><input type="submit" value="修改"></td>
			<td></td>
		</tr>
	</table>
</form>
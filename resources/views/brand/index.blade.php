<table border="1">
	<tr>
		<td>品牌id</td>
		<td>品牌名称</td>
		<td>品牌logo</td>
		<td>品牌网址</td>
		<td>操作</td>
	</tr>
	@foreach($res as $k=>$v)
	<tr>
		<td>{{$v->brand_id}}</td>
		<td>{{$v->brand_name}}</td>
		<td><img src="{{env('UPLOAD_URL')}}{{$v->brand_logo}}" width="60" height="60"></td>
		<td>{{$v->brand_url}}</td>
		<td><a href="{{url('/brand/edit/'.$v->brand_id)}}" >修改</a>|  
			<a href="{{url('/brand/destroy/'.$v->brand_id)}}" >删除</a>
		</td>
	</tr>
	@endforeach
</table>
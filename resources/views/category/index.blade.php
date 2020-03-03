<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
   <style>
       ul li{
           list-style:none;
           color:red;
           float:left;
           margin-left:10px;
       }
   </style>
</head>
<body>
    <center>
    <h2>分类列表</h2>
    <table border="1">
      <tr>
          <td>分类id</td>
          <td>分类名称</td>
          <td>操作</td>
      </tr>
      @foreach($cate_data as $v)
      <tr>
            <td>{{$v->cate_id}}</td>
            <td>{!! str_repeat('&nbsp;&nbsp;',$v['level']*3) !!}{{$v->cate_name}}</td>
            <td>
                <a href="{{url('/category/edit/'.$v->cate_id)}}">编辑</a>
                <a href="{{url('category/destroy/'.$v->cate_id)}}">删除</a>
            </td>
        </tr>
    @endforeach
    </table>
</center>
</body>
</html>
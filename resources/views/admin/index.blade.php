<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
</head>
<body>
   <center>
   <h2>管理员的列表展示</h2>
       <table border=1>
           <tr>
               <td>管理员名称</td>
               <td>管理员头像</td>
               <td>管理员手机号</td>
               <td>管理员邮箱</td>
               <td>操作</td>
           </tr>
           @foreach($data as $v)
           <tr>
               <td>{{$v->admin_name}}</td>
               <td><img src="{{env('UPLOAD_URL')}}{{$v->admin_head}}" width=100 height=50></td>
               <td>{{$v->admin_tel}}</td>
               <td>{{$v->admin_email}}</td>
               <td>
                   <a href="{{url('/admin/edit/'.$v->admin_id)}}">编辑</a>
                   <a href="{{url('admin/destroy/'.$v->admin_id)}}">删除</a>
               </td>
           </tr>
           @endforeach
       </table>
   </center>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>管理员编辑</title>
</head>
<body>
    <center>
    <h2>管理员编辑</h2>
    <form action="{{url('admin/update/'.$data->admin_id)}}" method="post" enctype='multipart/form-data'>
    @csrf
        <table border=1>
            <tr>
                <td>管理员名称</td>
                <td><input type='text' name='admin_name' placeholder="请输入管理员名称" value="{{$data->admin_name}}"></td>
            </tr>

            <tr>
                <td>管理员头像</td>
                <td>
                <img src="{{env('UPLOAD_URL')}}{{$data->admin_head}}" width=100 height=50>
                    <input type='file' name='admin_head'>
                </td>
            </tr>
            <tr>
                <td>管理员手机号</td>
                <td><input type='text' name='admin_tel' placeholder="请输入管理员手机号" value="{{$data->admin_tel}}"></td>
            </tr>
            <tr>
                <td>管理员邮箱</td>
                <td>
                    <input type='text' name='admin_email' placeholder="请输入管理员邮箱" value='{{$data->admin_email}}'>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type='submit' value='修改'></td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>
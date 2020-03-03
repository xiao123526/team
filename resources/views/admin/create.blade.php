<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>管理员添加</title>
</head>
<body>
    <center>
    <h2>管理员添加</h2>
    <form action="{{url('admin/store')}}" method="post" enctype='multipart/form-data'>
    @csrf
        <table border=1>
            <tr>
                <td>管理员名称</td>
                <td><input type='text' name='admin_name' placeholder="请输入管理员名称"></td>
            </tr>
            <tr>
                <td>密码</td>
                <td>
                    <input type='password' name='password' placeholder="请输入密码">
                </td>
            </tr>
            <tr>
                <td>管理员头像</td>
                <td>
                    <input type='file' name='admin_head'>
                </td>
            </tr>
            <tr>
                <td>管理员手机号</td>
                <td><input type='text' name='admin_tel' placeholder="请输入管理员手机号"></td>
            </tr>
            <tr>
                <td>管理员邮箱</td>
                <td>
                    <input type='text' name='admin_email' placeholder="请输入管理员邮箱">
                </td>
            </tr>
            <tr>
                <td><input type='reset' value='重置'></td>
                <td><input type='submit' value='添加'></td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>
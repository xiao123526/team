<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
</head>
<body>
    <center>
    <h2>管理员登录</h2>
        <form action="{{url('login/store')}}" method='post'>
        @csrf
            <table border=1>
                <tr>
                    <td>管理员账号</td>
                    <td>
                        <input type='text' name='admin_name'>
                    </td>
                </tr>
                <tr>
                    <td>密码</td>
                    <td>
                        <input type='password' name='password'>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type='submit' value='登录'>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
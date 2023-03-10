<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Node Login Test</title>
    <style>
        /* Internal css*/
         .login-form{
            width: 300px;
            margin: 0 auto;
            font-family: Arial, Helvetica, sans-serif;
        }
        .login-form h1{
            text-align: center;
            color: black;
            font-size: 24px;
            padding: 20px 0 20px 0;
        }
        .login-form input[type="password"],
        .login-form input[type="text"]{
            width:  100%;
            padding: 15px;
            border: solid #ddd;
            margin-bottom: 15px;
            box-sizing: border-box;
        }
        .login-form input[type="submit"]{
            width:  100%;
            padding: 15px;
            background-color: #535b63;
            border: 0;
            box-sizing: border-box;
            cursor: pointer;
            font-weight: bold;
            color: #ffff;

        }
        .login-form input[type="button"]{
            width:  100%;
            padding: 15px;
            background-color: #535b63;
            border: 0;
            box-sizing: border-box;
            cursor: pointer;
            font-weight: bold;
            color: #ffff;
        }

    </style>
</head>
<body>
    <div class="login-form">
        <h1>Login Form</h1>
        <form action="check_login.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit">
        </form>
    </div>

</body>
</html>
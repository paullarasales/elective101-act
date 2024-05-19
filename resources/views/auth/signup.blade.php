<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,500;1,600&family=Rubik+Broken+Fax&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Poppins;
            background-color: #f4f4f4e0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            height: 350px;
            display: flex;
            align-items: start;
            justify-content: space-around;
            flex-direction: column;
        }

        .login-container .top {
            height: 10%;
            width: 100%;
            display: flex;
            align-items: start;
            justify-content: center;
            flex-direction: column;
        }

        .top h2 {
            font-size: 20px;
            margin-bottom: 0;
        }

        .top h3 {
            margin-top: 0;
            font-size: 15px;
            font-weight: 500;
        }

        .login-container .form {
            height: 40%;
            width: 100%;
            margin-top: 20px;
            margin-bottom: 30px;
        }

        .login-form {
            display: flex;
            flex-direction: column;
        }

        .login-form p {
            text-align: end;
            font-size: 10px;
            font-weight: 500;
        }

        .login-form input {
            margin-bottom: 10px;
            padding: 10px;
            border: 0;
            outline: none;
            border-radius: 3px;
            background-color: rgba(211, 211, 211, 0.534);
        }

        .login-form input[type="submit"] {
            background-color: #000;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .login-form input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .login-container .others {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            margin-top: 50px;
        }

        .others div {
            flex: 1;
            height: 1px;
            background-color: #000;
        }

        .others p {
            margin: 0 10px;
            font-size: 12px;
            white-space: nowrap;
        }

        .google {
            height: 40px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid #D3D3D3;
            border-radius: 5px;
        }

        .google h1 {
            font-size: 13px;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="top">
            <h2>Welcome Back!</h2>
            <h3>To get started, create your account.</h3>
        </div>
        <div class="form">
            <form class="login-form" action="{{ route('signup') }}" method="post">
                @csrf
                <input type="text" name="firstname" placeholder="Enter your Firstname" required>
                <input type="text" name="lastname" placeholder="Enter your Lastname" required>
                <input type="text" name="username" placeholder="Enter your username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" value="Sign up">
            </form>
        </div>
        <div class="others">
            <div class="line"></div>
            <p>Or sign up with</p>
            <div class="line"></div>
        </div>
        <div class="google">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                </svg>
            <h1>Sign up with Google</h1>
        </div>
    </div>
</body>
</html>

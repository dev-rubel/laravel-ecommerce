<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <script src="{{asset('js/lib/jquery.js')}}"></script>
        <script src="{{asset('js/dist/jquery.validate.js')}}"></script>
        <title>@yield('title', 'Admin Login')</title>
    </head>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        .login-page {
            width: 360px;
            padding: 8% 0 0;
            margin: auto;
        }
        .form {
            position: relative;
            z-index: 1;
            background: #ffffff;
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        .form input {
            font-family: "Roboto", sans-serif;
            outline: 0;
            background: #f2f2f2;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
        }
        .form button {
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            outline: 0;
            background: #4caf50;
            width: 100%;
            border: 0;
            padding: 15px;
            color: #ffffff;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
        }
        .form button:hover,
        .form button:active,
        .form button:focus {
            background: #43a047;
        }
        .form .message {
            margin: 15px 0 0;
            color: #b3b3b3;
            font-size: 12px;
        }
        .form .message a {
            color: #4caf50;
            text-decoration: none;
        }
        .form .register-form {
            display: none;
        }
        .container {
            position: relative;
            z-index: 1;
            max-width: 300px;
            margin: 0 auto;
        }
        .container:before,
        .container:after {
            content: "";
            display: block;
            clear: both;
        }
        .container .info {
            margin: 50px auto;
            text-align: center;
        }
        .container .info h1 {
            margin: 0 0 15px;
            padding: 0;
            font-size: 36px;
            font-weight: 300;
            color: #1a1a1a;
        }
        .container .info span {
            color: #4d4d4d;
            font-size: 12px;
        }
        .container .info span a {
            color: #000000;
            text-decoration: none;
        }
        .container .info span .fa {
            color: #ef3b3a;
        }
        body {
            background: #76b852; /* fallback for old browsers */
            background: -webkit-linear-gradient(right, #76b852, #8dc26f);
            background: -moz-linear-gradient(right, #76b852, #8dc26f);
            background: -o-linear-gradient(right, #76b852, #8dc26f);
            background: linear-gradient(to left, #76b852, #8dc26f);
            font-family: "Roboto", sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        label.error {
            color: #a94442;
            background-color: #f2dede;
        }
    </style>
    <body>
        <div class="login-page">
            <div class="form">
                <form class="login-form" id="loginForm" method="post">
                    {{csrf_field()}}
                    <input type="text" name="Username" id="Username" placeholder="username" value="admin" />
                    <input type="password" name="Password" id="Password" placeholder="password" value="12345" />
                    <input type="submit" name="loginButton" id="loginButton" value="LOGIN" />
                </form>
            </div>
        </div>
    </body>
</html>

<!--JQUERY Validation-->
<script>
    $(document).ready(function () {
        // validate signup form on keyup and submit
        $("#loginForm").validate({
            rules: {
                Username: "required",
                Password: "required",
            },
            messages: {
                Username: "No Input Entered",
                Password: "No Input Entered",
            },
        });
    });
</script>
<!--/JQUERY Validation-->

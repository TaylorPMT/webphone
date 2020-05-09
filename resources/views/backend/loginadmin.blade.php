<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
    <script src="{{ asset('backend/js/bootstrap.min.js') }}">

    </script>
    <script src="{{ asset('backend/js/jquery-3.4.1.slim.min.js') }}">

    </script>
    <script src="{{ asset('backend/js/popper.min.js') }}">

    </script>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #17a2b8;
            height: 100vh;
          }
          #login .container #login-row #login-column #login-box {
            margin-top: 120px;
            max-width: 600px;
            height: 320px;
            border: 1px solid #9C9C9C;
            background-color: #EAEAEA;
          }
          #login .container #login-row #login-column #login-box #login-form {
            padding: 20px;
          }
          #login .container #login-row #login-column #login-box #login-form #register-link {
            margin-top: -85px;
          }
    </style>
<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">@includeIf('backend.modules.message') </h3>
        
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{ Route('postloginAdmin') }}" method="POST">
                            @csrf
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                        
                            <div class="form-group text-center">
                             
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
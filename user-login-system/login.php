


<!DOCTYPE html>
<html>
    <head>
        <title>user login system</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="login-box">
                <div class="row">
                <div class="col-md-6 login-left">
                    <h2> Login here</h2>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <label>username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div><br>
                        <button type="submit" class="btn btn-primary">Login</button>

                    </form>
                </div>
                <div class="col-md-6 login-right">
                    <h2> Register here</h2>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <label>username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div><br>
                        <button type="submit" class="btn btn-primary">register</button>

                    </form>
                </div>
            </div>
            </div>
        </div>




    </body>
</html>
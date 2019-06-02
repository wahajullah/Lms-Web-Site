<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="blabla2.css" rel="stylesheet">
</head>
<body>
        <div class="container-fluid">
                <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
                <h3 class="login-heading mb-4">Welcome back!</h3>
                <form id="login-form" method="post" action="authen_login.php" >
                  <div class="form-label-group">
                    <input type="text" name="user_id" id="user_id" class="form-control" placeholder="User Name" required autofocus>
                    <label for="inputEmail">Email address</label>
                  </div>
  
                  <div class="form-label-group">
                    <input type="password" name="user_pass" id="user_pass" class="form-control" placeholder="Password" required>
                    <label for="inputPassword">Password</label>
                  </div>
  
                  <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" value="Submit"  type="submit">Log in</button>
                  <div class="text-center">            
                      <p class="font-weight-normal">Dont have an account yet? <a href="signin.php">Create account</a></p>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
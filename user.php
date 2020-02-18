<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User Login</title>
  <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
  <div class="limiter">
    <div class="container-login100" style="background-image:url(/images/skynews.jpg)">
      <div class="wrap-login100 p-t-30 p-b-50">
        <span class="login100-form-title p-b-41">
                            User Login
                        </span>
        <form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="adduser.php">
        <div class="wrap-input100 validate-input" data-validate="Enter username">
            <input class="input100" type="text" name="userid" placeholder="Enter unique User id">
            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter username">
            <input class="input100" type="text" name="username" placeholder="Enter User name">
            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
          </div>

          <div class="container-login100-form-btn m-t-32">
            <button class="login100-form-btn" type="submit">
                                    Enter Quiz
                                </button>
          </div>

        </form>
      </div>
    </div>
  </div>

  <div id="dropDownSelect1"></div>

  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

  <script src="js/main.js"></script>
</body>

</html>
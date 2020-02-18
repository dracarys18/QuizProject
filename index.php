<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Quiz</title>
  <link rel="stylesheet" href="/css/style.css">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  
 <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
  <div class="ct" id="t1">
    <div class="ct" id="t2">
      <div class="ct" id="t3">
        <div class="ct" id="t4">
          <div class="ct" id="t5">
            <ul id="menu">
              <a href="#t1">
                <li class="icon fa fa-home" id="uno" style="font-size:30px "></li>
              </a><br>
              <a href="#t2">
                <li class="icon fa fa-user-circle" id="dos" style="font-size:24px"></li>
              </a><br>

              <a href="#t3">
                <li class="icon fa fa-file-text" id="tres" style="font-size:28px"></li>
              </a>

            </ul>

            <div class="page" id="p1">
              <section class="icon fas fa-book-open"><span class="title">Welcome To Quiz</span><span class="hint"><br><a href="user.php"> Click here to begin! </a> </span></section>
            </div>

            <div class="page" id="p3">
              <!--Table -->
              <div class="limiter">
                <div class="container-table100">
                  <div class="wrap-table100">
                    <div class="table">

                      <div class="row header">

                        <div class="cell">
                          Position
                        </div>
                        <div class="cell">
                          Username
                        </div>
                        <div class="cell">
                          Result
                        </div>
                      </div>

                      <div class="row">

                        <div class="cell" data-title="Age">
                          31
                        </div>
                        <div class="cell" data-title="Job Title">
                          iOS Developer
                        </div>
                        <div class="cell" data-title="Location">
                          Washington
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="page" id="p2">
              <section>
                <span class="title">
                              <!---admin login -->
                              <div class="limiter">
                                    <div class="container-login100" style="background-color:#663399;">
                                        <div class="wrap-login100 p-t-30 p-b-50">
                                            <span class="login100-form-title p-b-41">
                                                Admin Login
                                            </span>
                <form class="login100-form validate-form p-b-33 p-t-5" method="post" action="adminlogin.php">

                  <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input class="input100" type="text" name="username" placeholder="User name">
                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                  </div>

                  <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="pass" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                  </div>

                  <div class="container-login100-form-btn m-t-32">
                    <button class="login100-form-btn" type="submit">Login
                                                    </button>

                  </div>
                  

                </form>
            </div>
          </div>
        </div>
        

        <div id="dropDownSelect1"></div>

        </span>
        </section>
      </div>

    </div>
  </div>
  </div>
  </div>
  </div>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>

</html>
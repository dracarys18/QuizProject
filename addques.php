
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<meta http-equiv="X-UA-Compatible" content="ie=edge">-->
    <title>Add Questions</title>

    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

    
    <link rel="stylesheet" type="text/css" href="css/mainques.css">

  </head>

  <body>
    <div class="container-contact100">
      <div class="wrap-contact100">
        <form class="contact100-form validate-form" action="add_ques.php" method="POST">
          <span class="contact100-form-title">
                            Add Questions
                        </span>
                     <div class="wrap-input100 validate-input bg1" data-validate="Please Type question">
            <span class="label-input100">Question no.</span>
            <input class="input100" type="number" name="quesid" placeholder="Enter Qued id">
            </div>
          <div class="wrap-input100 validate-input bg1" data-validate="Please Type question">
            <span class="label-input100">Question </span>
            <input class="input100" type="text" name="name" placeholder="Enter Question">

          </div>
          <div class="contact100-form-radio m-t-15">
            <input class="input-radio100" id="radio1" type="radio" name="type-product" value="ans1">
            <label class="label-radio100" for="radio1">
                                            <div class="wrap-input100 validate-input bg1" data-validate="">
                                        <span class="label-input100">First option</span>
                                        <input type="text" class="input100" name="answer1" >
                                            </div>
                                    </label>
          </div>

          <div class="contact100-form-radio">
            <input class="input-radio100" id="radio2" type="radio" name="type-product" value="ans2">
            <label class="label-radio100" for="radio2">
                                            <div class="wrap-input100 validate-input bg1" data-validate="">
                                            <span class="label-input100">Second option</span>
                                        <input type="text" class="input100" name="answer2" >
                                            </div>
                                    </label>
          </div>
          <div class="contact100-form-radio m-t-15">
            <input class="input-radio100" id="radio3" type="radio" name="type-product" value="ans3">
            <label class="label-radio100" for="radio3">
                                            <div class="wrap-input100 validate-input bg1" data-validate="">
                                            <span class="label-input100">Third option</span>
                                        <input type="text" class="input100" name="answer3" >
                                            </div>
                                    </label>
          </div>

          <div class="contact100-form-radio">
            <input class="input-radio100" id="radio4" type="radio" name="type-product" value="ans4">
            <label class="label-radio100" for="radio4">
                                            <div class="wrap-input100 validate-input bg1" data-validate="">
                                        <span class="label-input100">Fourth option</span>
                                        <input type="text" class="input100" name="answer4" >
                                            </div>
                                    </label>
          </div>

          <div class="container-contact100-form-btn">
            <button class="contact100-form-btn" type="submit">
                                
                                    Add
                                    
                                
                            </button>
          </div>
        </form>
      </div>
    </div>

  </body>

  </html>
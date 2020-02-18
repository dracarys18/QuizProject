<?php
    //$page = $_SERVER['PHP_SELF'];
    //$sec = "10";
    //header("Refresh: $sec; url=$page");
 
 ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Questions</title>

    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

   
    <link rel="stylesheet" type="text/css" href="css/mainques.css">

  </head>

  <body>
    <div class="container-contact100">
      <div class="wrap-contact100">
        <form class="contact100-form validate-form">
          <div id="element1"><span class="contact100-form-title">
                            Questions
                        </span></div>
              

          <label id="seconds">00 </label>
         <?php
		 $sql = "select question from questions";
         $result = mysqli_query($connection,$sql);
		 for($i=0;$i<=$result->num_rows;$i++)
		 {	 
         echo '<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">';
         echo  '<span class="label-input100">Question </span>';
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    $output[] = $row;
                                }
                                $qu = json_encode($output[$i]["question"]);
                                $qu = str_replace('"','',$qu);
                            }			
           echo'<input class="input100" type="text" name="name" placeholder="Display Question" value="<?php echo $qu ?>">';
           echo'</div>';
           echo'<div class="contact100-form-radio m-t-15">';
		   $sql1="select ans1 from Answers";
		   $result1 = mysqli_query($connection,$sql1);
		   if ($result1->num_rows > 0) {
                                while($row1 = $result1->fetch_assoc()) {
                                    $output1[] = $row1;
                                }
                                $ans1 = json_encode($output1[$i]["answer1"]);
                                $ans1 = str_replace('"','',$ans1);
                            }			
           echo'<input class="input-radio100" id="radio1" type="radio" name="type-product" value="physical">;
            <label class="label-radio100" for="radio1">
                                            <div class="wrap-input100 validate-input bg1" data-validate="">
                                        <span class="label-input100">First option</span>
                                        <input type="text" class="input100" name="answer" value="<?php echo $ans1 ?>">
                                            </div>
                                    </label>
          </div>';
		  $sql2="select ans2 from Answers";
		   $result2 = mysqli_query($connection,$sql2);
		   if ($result2->num_rows > 0) {
                                while($row2 = $result2->fetch_assoc()) {
                                    $output2[] = $row2;
                                }
                                $ans2 = json_encode($output2[$i]["answer2"]);
                                $ans2 = str_replace('"','',$ans2);
                            }			
          echo'<div class="contact100-form-radio">
            <input class="input-radio100" id="radio2" type="radio" name="type-product" value="digital">
            <label class="label-radio100" for="radio2">
                                            <div class="wrap-input100 validate-input bg1" data-validate="">
                                            <span class="label-input100">Second option</span>
                                        <input type="text" class="input100" name="answer" value="<?php echo $ans2 ?>" >
                                            </div>
                                    </label>
          </div>';
		  $sql3="select ans3 from Answers";
		   $result3 = mysqli_query($connection,$sql3);
		   if ($result3->num_rows > 0) {
                                while($row3 = $result3->fetch_assoc()) {
                                    $output3[] = $row3;
                                }
                                $ans3 = json_encode($output3[$i]["answer3"]);
                                $ans3 = str_replace('"','',$ans3);
                            }			
          echo '<div class="contact100-form-radio m-t-15">
            <input class="input-radio100" id="radio3" type="radio" name="type-product" value="physical">
            <label class="label-radio100" for="radio3">
                                            <div class="wrap-input100 validate-input bg1" data-validate="">
                                            <span class="label-input100">Third option</span>
                                        <input type="text" class="input100" name="answer" value="<?php echo $ans3 ?>" >
                                            </div>
                                    </label>
          </div>';
		 $sql4="select ans4 from Answers";
		 $result4 = mysqli_query($connection,$sql4);
		   if ($result4->num_rows > 0) {
                                while($row4 = $result4->fetch_assoc()) {
                                    $output4[] = $row4;
                                }
                                $ans4 = json_encode($output4[$i]["answer4"]);
                                $ans4 = str_replace('"','',$ans4);
                            }			 
         echo '<div class="contact100-form-radio">
            <input class="input-radio100" id="radio4" type="radio" name="type-product" value="digital">
            <label class="label-radio100" for="radio4">
                                            <div class="wrap-input100 validate-input bg1" data-validate="">
                                        <span class="label-input100">Fourth option</span>
                                        <input type="text" class="input100" name="answer" value="<?php echo $ans4 ?>" >
                                            </div>
                                    </label>
          </div>';
		 }
		 ?>
          <div class="container-contact100-form-btn">
            <button class="contact100-form-btn">
                                <span>
                                    Submit
                                    <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                </span>
                            </button>
          </div>
        </form>
      </div>
    </div>

    <script>
      var minutesLabel = document.getElementById("minutes");
      var secondsLabel = document.getElementById("seconds");
      var totalSeconds = 0;
      setInterval(setTime, 1000);

      function setTime() {
        ++totalSeconds;
        secondsLabel.innerHTML = pad(totalSeconds % 60);
        minutesLabel.innerHTML = pad(parseInt(totalSeconds / 60));
      }

      function pad(val) {
        var valString = val + "";
        if (valString.length < 2) {
          return "0" + valString;
        } else {
          return valString;
        }
      }
    </script>


  </body>

  </html>
<?php
require('connect_db.php');

if(isset($_POST['name']) and isset($_POST['answer1']) and isset($_POST['answer2']) and isset($_POST['answer3']) and isset($_POST['answer4'])and isset($_POST['type-product'])and isset($_POST['quesid']))
{
  $question=$_POST['name'];
  $ques_id=$_POST['quesid'];
  $answer1=$_POST['answer1'];
  $answer2=$_POST['answer2'];
  $answer3=$_POST['answer3'];
  $answer4=$_POST['answer4'];
  $correct_ans=$_POST['type-product'];
  if(!$question||!$answer1||!$answer2||!$answer3||!$answer4)
  {
    echo ("Values must be filled in not empty");
    exit();
  }
  //$hash="thisishash";
  //$ques_id= sha1($question,$hash);
  $ques_ins= "INSERT into Question values ('$question',$ques_id)";
  
  mysqli_query($connection,$ques_ins) or die(mysqli_error($connection));
  
  if($correct_ans=="ans1")
  {
    $correct="INSERT into Answers values ('$ques_id','$answer1','1')";
    mysqli_query($connection,$correct)or die(mysqli_error($connection));
    mysqli_query($connection,"INSERT into Answers values('$ques_id','$answer2','0')")or die(mysqli_error($connection));
    mysqli_query($connection,"INSERT into Answers values('$ques_id','$answer3','0')")or die(mysqli_error($connection));
    mysqli_query($connection,"INSERT into Answers values('$ques_id','$answer4','0')")or die(mysqli_error($connection));           
  }
  if($correct_ans=="ans2")
  {
    $correct="INSERT into Answers values ('$ques_id','$answer2','1')";
    mysqli_query($connection,$correct)or die(mysqli_error($connection));
    mysqli_query($connection,"INSERT into Answers values('$ques_id','$answer1','0')")or die(mysqli_error($connection));
    mysqli_query($connection,"INSERT into Answers values('$ques_id','$answer3','0')")or die(mysqli_error($connection));
    mysqli_query($connection,"INSERT into Answers values('$ques_id','$answer4','0')")or die(mysqli_error($connection));    
  }
  if($correct_ans=="ans3")
  {
    $correct="INSERT into Answers values ('$ques_id','$answer3','1')";
    mysqli_query($connection,$correct)or die(mysqli_error($connection));
    mysqli_query($connection,"INSERT into Answers values('$ques_id','$answer1','0')")or die(mysqli_error($connection));
    mysqli_query($connection,"INSERT into Answers values('$ques_id','$answer2','0')")or die(mysqli_error($connection));
    mysqli_query($connection,"INSERT into Answers values('$ques_id','$answer4','0')")or die(mysqli_error($connection));    
  }
  if($correct_ans=="ans4")
  {
    $correct="INSERT into Answers values ('$ques_id','$answer4','1')";
    mysqli_query($connection,$correct)or die(mysqli_error($connection));
    mysqli_query($connection,"INSERT into Answers values('$ques_id','$answer1','0')")or die(mysqli_error($connection));
    mysqli_query($connection,"INSERT into Answers values('$ques_id','$answer3','0')")or die(mysqli_error($connection));
    mysqli_query($connection,"INSERT into Answers values('$ques_id','$answer4','0')")or die(mysqli_error($connection));    
  }

  

  $message = "Question added successfully";
  echo "<script type='text/javascript'>alert('$message');</script>";
header("Location:addques.php");
}
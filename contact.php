<link rel='stylesheet' href='style.css' media='screen'/>


<?php
include "top2.php";
?>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = $phoneErr = $check_listErr = "";
$name = $email = $gender = $comment = $website = $phone = $check_list = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "";

  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
    elseif ($name < 3) {
        $nameErr = "Your name is too short";

}

    }
  }


  if (empty($_POST["phone"])) {
    $phoneErr = "";
  } else {
    $phone = test_input($_POST["phone"]);

    if(!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone)) {
      $phoneErr = "Invalid phone number format";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }


  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if(empty($_POST["check_list"])){
        $check_listErr = "";
        }

 elseif (!empty($_POST["submit"])) {
     for( $i = 0; $checklist, $i++;){

       if ($checklist < 1){
        $check_listErr = "";}

        elseif($checklist >= 1){
        $check_list = test_input($_POST["check_list"]);
      }
 }
 }



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<html>
    <head>
        <link rel="stylesheet" href="/css/style.css" media="screen"/>
        <meta charaset="UTF-8">
        <style type="text/css"> </style>
    </head>

    <body>

<h2>CONTACT US</h2>
<div class ="container">
<!--<p><span class="error">* required field</span></p>-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <input type="text" id="name" name="name" placeholder="Jane Doe" value="<?php echo $name;?>">
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>
  Phone: <input type="text" id="phone" name="phone" placeholder="xxx-xxx-xxxx" value="<?php echo $phone;?>">
  <span class="error"> <?php echo $phoneErr;?></span>
  <br><br>
  E-mail: <input type="text" id="email" name="email" placeholder="xxx@xxxxx.com" value="<?php echo $email;?>">
  <span class="error"> <?php echo $emailErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="10" cols="70"><?php echo $comment;?></textarea>
  <br><br>
  <br><br>
  Gender:
  <input type="radio" name="gender" id="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" id="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" id="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
  <span class="error"> <?php echo $genderErr;?></span>
  <br><br>

  How helpful was this website?<br>
  Please check one box.
 <br><br>
 <input type="checkbox" name="check_list[]" id="checkbox" <?php if (isset($check_list) && $check_list =="Very Helpful") echo "checked ";?> value="very helpful" >Very Helpful<br>
 <input type="checkbox" name="check_list[]" id="checkbox" <?php if (isset($check_list) && $check_list =="Somewhat Helpful") echo "checked ";?> value="somewhat helpful" >Somewhat Helpful<br>
 <input type="checkbox" name="checl_list[]" id="checkbox" <?php if (isset($check_list) && $check_list =="Not Helpful") echo "checked ";?> value="not helpful" >Not Helpful<br>

 <?php echo $check_listErr; ?></span>
  <br><br>

  <input type="submit" id="submit" name="submit" value="Submit">
</form>
</div>

<?php

include "bottom.php";
?>

</body>
</html>

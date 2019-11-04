<!DOCTYPE html>
<!Michele MacKinnnon>
<!Assignment 4>
<!CS321>


<html>
    <head> 
    <meta charset="UTF-8">
      <style type="text/css">
      </style>  
    </head>  
    
    <body>
        <form action='<?php echo$action_location;?>'>
      
      

<?php
$action_location_filter_input(INPUT_SERVER, 'PHP.SELF')

$name_error=$phone_error="";
$name=filter_input(INPUT_POST, 'name');
$email=filter_input(INPUT_POST, 'email');
$phone=filter_input(INPUT_POST, 'phone');
$submit=filter_input(INPUT_POST, 'submit');

if(!empty($submit)) {
if(empty($name)){
$name_error="Please enter your name.";
else{
    if(strlen($name) <2)){
        $name_error="Your name is too short.";
        }
    if(empty($name)){
$name_error="Please enter your name.";
else{
if(empty($email)){
$email_error="Please enter your email.";
}
else{
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo("Enter a valid email.")}
if(empty($phone)){
$phone_error="Please enter your phone.";
}
else {
if(!strlen($phone))=10){
echo("Enter a valid phone number.")
}
$phone = '000-0000-0000';
if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone)) 
}	
function IsChecked($chkname,$value)
{
if(empty($_POST[$chkname]))
{
foreach($_POST[$chkname] as $chkval)
{
if ($chkvl !=$value)
{
return false;
$chkname_error="Please select one checkbox.";
}        
else{
        if(IsChecked('checkbox','vuseful'))
        {
            echo ' Very helpful is checked. ';
        }
        if(IsChecked('checkbox','someuseful'))
        {
            echo ' Somewhat helpful is checked. ';
        }
        if(IsChecked('checkbox','notuseful'))
        {
            echo ' Not helpful is checked. ';
	}
function Isset($chkoption,$value)
{
    if(empty($_POST[$chkoption]))
    {
    $chkoption_error="Please select an option.";
    }
else{
       if(isset('option','To request additional information.'))
       {
            echo 'To request additional information.';
       }
       if(isset('option','To offer positive feedback.'))
       {
            echo 'To offer positive feedback.';
       }
       if(isset('option','To offer constructive criticism.'))
       {
            echo 'To offer constructive criticism.';
       }
 }
 }
?>
      <div id="glob_content">
        
        <div id="title">Contact Us</div>
        
        <div id="form_content">
          
          <form>
            
            <input type="text" name="name" placeholder="Name"/><br>
            <input type="email" name="email" placeholder="Email"/><br>
            <input type="text" name="phone" placeholder="Phone Number"/><br>
       <h2>How helpful was this website?</h2>
        <input type="checkbox" name="useful1" value="vuseful">Very Helpful<br>
      <input type="checkbox" name="useful2" value="someuseful">Somewhat Helpful<br>
      <input type="checkbox" name="useful3" value="notuseful">Not Helpful<br>
            <h2>What is your reason for contacting us?</h2>
     
             <select> 
              <option>To request additional information.</option>
              <option>To offer positive feedback.</option>
              <option>To offer constructive criticism.</option>
          
        
        <label for="Message">Subject</label>
        <textarea id="message" name="message" placeholder="Write something.." 
                  style="height:170px"></textarea>
           </select> <br>        
                  
            
            <input type="submit" name="send" value="Submit">
            
          </form>
        
        </div>
      </div>
    </body>   
</html>

<?php
$fname_message = $email_message = "";
$fname_error = $email_error = "";

$display_form = True;//turn form on
if(isset($_POST['SubmitButton'])){ //check if form was submitted
  $display_form = False;//if submit turn form off
  echo "<h1>Your info is:</h1><br>";
  $fname_input = $_POST['fname']; //get input text
  if (!preg_match("/^[a-zA-Z-' ]*$/",$fname_input)) {
    $fname_error = "Only letters and white space allowed <br>";
    echo $fname_error;
  }else{
    $fname_message = "Your name is: ".$fname_input."<br>";
    echo $fname_message;
}
  

  $email_input = $_POST['email']; //get input text
  if (!filter_var($email_input, FILTER_VALIDATE_EMAIL)) {
    $email_error = "Invalid email format <br>";
    echo $email_error;
  }else{
    $email_message = "Your email is: ".$email_input."<br>";
    echo $email_message;
}
?>
  <html>
    <body>
    <form>
        <input type="button" value="Go back!" onclick="history.back()">
    </form>
  </body>
  </html>
<?php 

}    
if ($display_form){
    ?>
    <html>
        <head><script>
        function enableSubmit(){
        let inputs = document.getElementsByClassName('required');
        let btn = document.querySelector('input[type="submit"]');
        let isValid = true;
        for (var i = 0; i < inputs.length; i++){
        let changedInput = inputs[i];
        if (changedInput.value.trim() === "" || changedInput.value === null){
        isValid = false;
        break;
        }
        }
        btn.disabled = !isValid;
        }
        </script></head>
    <body>    
    <form action="" method="post">

        Name:<font color=red>*</font><input type="text" class="required" onkeyup="enableSubmit()" name="fname" /><br>
        Email:<font color=red>*</font><input type="text" class="required" onkeyup="enableSubmit()" name="email"/><br>
        <input type="submit" name="SubmitButton" disabled/>
    </form>    
    </body>
    </html>
<?php
}
?>






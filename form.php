<?php
// Define variables for user input and error messages
$fname_message = $email_message = "";
$fname_error = $email_error = "";
$display_form = True;


function error($value){
    if(isset($_POST['SubmitButton'])){
        if($value == "name"){
            if (!preg_match("/^[a-zA-Z-' ]$/",$_POST['fname'])) {
                $fname_error = "Only letters and white space allowed <br>";
                echo $fname_error;
            }
        }else{
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $email_error = "Invalid email format <br>";
                echo $email_error;
            }
        }
    }
}
function check(){
    if(isset($_POST['SubmitButton'])){
        $fname_input = $_POST['fname'];
        $email_input = $_POST['email'];    
        if (!preg_match ("/^[a-zA-Z\s]+$/",$fname_input)){
          
        }
        elseif (!filter_var($email_input, FILTER_VALIDATE_EMAIL)) {
            return false;
        }else{
            return true;
        }
    }
}
// Set initial value for displaying the form

// Check if the form was submitted
if(isset($_POST['SubmitButton'])){ 
  // If the form was submitted, turn off display_form and display user input
  if(check()){
      $display_form = False;
      echo "<h1>Your info is:</h1><br>";
    
    //   Check and display the user's name
        $fname_input = $_POST['fname'];
        $fname_message = "Your name is: ".$fname_input."<br>";
        echo $fname_message;
    
      // Check and display the user's email
        $email_input = $_POST['email'];
        $email_message = "Your email is: ".$email_input."<br>";
        echo $email_message;
    ?>
        <!-- HTML form for going back to the previous page -->
        <html>
            <body>
            <form>
                <input type="button" value="Go back!" onclick="history.back()">
            </form>
            </body>
        </html>
    <?php 
  }
}


// If display_form is still True, show the input form
if ($display_form){
?>
  <!-- HTML form for user input -->
  <html>
    <body>
      <form action="" method="post">
        <!-- Input fields for name and email with required class for validation -->
        Name:<font color=red>*</font><input type="text" class="required" name="fname" /><br>
        <div id="fnameError"><?error('name')?></div>
        Email:<font color=red>*</font><input type="text" class="required" name="email"/><br>
        <div id="emailError"><?error('email')?></div>
        <input type="submit" name="SubmitButton" onclick= "<?php ?>"/>
      </form>
    </body>
  </html>
<?php
}
?>
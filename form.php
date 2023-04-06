<?php
$fname_message = $email_message = "";
$fname_error = $email_error = "";

$display_form = True;//turn form on
if(isset($_POST['SubmitButton'])){ //check if form was submitted
  $display_form = False;//if submit turn form off
  echo "<h1>De ingevulde gegevens zijn:</h1><br>";
  $fname_input = $_POST['fname']; //get input text
  if(empty($fname_input)){
    echo "Input your name. <br>";
  }else{
    $fname_message = "Your name is: ".$fname_input."<br>";
    echo $fname_message;
  }
  

  $email_input = $_POST['email']; //get input text
  $email_message = "Your email is: ".$email_input."<br>";

  
//   echo $fname_message;
  echo $email_message;
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






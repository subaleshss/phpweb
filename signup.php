<?php
  include('connecttodb.php');
  $name=$password=$email='';
  $ermsg = array('name'=>'','mail'=>'','pass'=>''); #error messages list
  if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['user_name']);
    if (filter_var(htmlspecialchars($_POST['user_email']),FILTER_VALIDATE_EMAIL)){ #checking validity of email 
      $email =  htmlspecialchars($_POST['user_email']);
    }
    else{
      $ermsg['mail'] = 'Enter valid email';
    }
    $password = htmlspecialchars($_POST['user_password1']);
    if (!array_filter($ermsg)) { 
      header("Location: home.php?user=".$name);
    }
    
  }
?>

<html>
 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="signup.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="signup.css">
    </head>
    <body>

      <form action="signup.php" method="post" name="sform" id="sform" onSubmit="return validate()" >
      
        <h1>Sign Up</h1>
        
        <fieldset>
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name" value="<?php echo $name;?>" required>
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email" value="<?php echo $email;?>" required>
          <div class="red"><?php echo $ermsg['mail'];?></div>
          
          <label for="password">Password:</label>
          <input type="password" id="password1" name="user_password1" value="<?php echo $password;?>" required>
          <div id="error" class="red"></div>

          <label for="password">Enter password again:</label>
          <input type="password" id="password2" name="user_password2" value="<?php echo $password;?>" required>

        </fieldset>
        <button type="submit" name="submit">Sign Up</button>
      </form>
      <script>
        function validate() { //validating password
          var pass1 = document.getElementById('password1').value;
          var pass2 = document.getElementById('password2').value;
          if (pass1 == pass2) {
            min = 6;
            regex = /^(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[A-Z])[a-zA-Z0-9!@#$%^&*]{6,}$/; //regular expression for password
            //regular expression defines how the password should be
            if (!regex.test(pass1)) { //checking password with regular expression
              document.getElementById("error").innerHTML = "Password must contain atleast one specail character,number and uppercase letter(mininum length must be 6)";
              return false;
            }
            else{
              return true;
            }
          } 
          else{
            alert("Passwords doesn't match");
            return false;
            
          }         
        }
      </script>
      
    </body>
</html>

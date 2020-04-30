<?php
  /*if(isset($_POST['user_email'])){
    $email_1 = $_POST['user_email']; 
  }
  else{
    $email_1 = "Email not set in GET Method";
  }
  if(isset($_POST['user_password'])){
            $password_1 = $_POST['user_password']; 
  }
  else{
          $password_1 = "<br>password not set in GET Method";
    echo $password_1;
  }
  echo $email;*/
  if(isset($_POST['submit'])){
    $email = htmlspecialchars($_POST['user_email']);
    $pass = htmlspecialchars($_POST['user_password');
    echo $email;
    echo $pass;
  }

?>
 <html>
 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Form</title>
        <link rel="stylesheet" href="login.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>

      <form action="login.php" method="post">
      
        <h1>Login</h1>
        
        <fieldset>
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email">
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="user_password">

        </fieldset>
        <button type="submit" name="submit">Login</button>
        or sign up
        <a href="E:/web%20tech/signup.html" id="signup">here</a>

      </form>
      <script>
        id = document.getElementById('signup')
        id.addEventListener('click',function(){
          document.location.href = 'signup.php'
        })
      </script>
    </body>
</html>

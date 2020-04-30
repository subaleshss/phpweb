<?php
  if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['user_name']);
    $email =  htmlspecialchars($_POST['user_email']);
    $password = htmlspecialchars($_POST['user_password1']);
    echo $name;
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

      <form action="signup.php" method="post">
      
        <h1>Sign Up</h1>
        
        <fieldset>
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name">
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email">
          
          <label for="password">Password:</label>
          <input type="password" id="password1" name="user_password1">

          <label for="password">Enter password again:</label>
          <input type="password" id="password2" name="user_password2">

        </fieldset>
        <button type="submit" name='submit'>Sign Up</button>
      </form>
      
    </body>
</html>
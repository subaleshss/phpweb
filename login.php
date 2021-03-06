<?php
  include('connecttodb.php');
  $sql = 'SELECT name, email, password from users '; 

  $result = mysqli_query($conn, $sql); 

  $users = mysqli_fetch_all($result, MYSQLI_ASSOC); #stores the results in the form of an array 

  mysqli_free_result($result);

  mysqli_close($conn);
 

  $err='';
  if (isset($_POST['submit'])) {
    $email = htmlspecialchars($_POST['user_email']); #getting all data entered using form
    $password = htmlspecialchars($_POST['user_password']);
    foreach ($users as $user){ #validating if such an user exist in db using the array 
      if (htmlspecialchars($user['email'] == $email)) {
        if (htmlspecialchars($user['password'] == $password)) {
          $name = $user['name'];
          header("Location: home.php?user=".$name);  
        }
        else{
          $err = "Invalid credentials";
        }
      }
      else{
        $err = "Invalid credentials";
      }
    }
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

      <form action="login.php" method="post" id="fo" name="fo" >
      
        <h1>Login</h1>
        
        <fieldset>
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email" required>
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="user_password" required>
          <div class="red"><?php echo $err;?></div> <!--printing error message-->

        </fieldset>
        <button type="submit" name="submit">Login</button>
        or sign up
        <a href="signup.php" >here</a>

      </form>
    </body>
</html>

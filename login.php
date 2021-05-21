<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="assets/css/login.css">
    
</head>

<body>
  <div class="login">
  <h4>Login</h4>
   <form action="./loginAction.php" method='POST'>
       <label for="username">
           <input type="text" name="username" id="username" placeholder="username">
       </label>
       <label for="password">
           <input type="password" name="password" id="password" placeholder="password">
       </label>
       <button type="submit">Let's GO</button>
   </form>
   </div>
   
     <div class="register">
  <h4>Registration</h4>
   <form action="./register.php" method="POST">
        <label for="r_firstname">
           <input type="text" name="r_firstname" id="r_firstname" placeholder="First name">
       </label>
       <label for="r_lastname">
           <input type="text" name="r_lastname" id="r_lastname" placeholder="Last name">
       </label>
      <label for="r_username">
           <input type="text" name="r_username" id="r_username" placeholder="select username">
       </label>
       <label for="email">
           <input type="email" name="email" id="email" placeholder="your email">
       </label>
       <label for="r_password">
           <input type="password" name="r_password" id="r_password" placeholder="password">
       </label>
       <label for="r_password_rep">
           <input type="password" name="r_password_rep" id="r_password_rep" placeholder="password again">
       </label>
  
       <button type="submit">Join</button>

     
   </form>
   </div>
   
   
   
</body>
</html>

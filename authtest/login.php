
<?php
     
     if (isset($_POST["login"]))
     {
         $email = $_POST["email"];
         $password = $_POST["password"];
  
         // connect with database
         $conn = mysqli_connect("localhost", "auth", "yoyo27653152", "Auth");
  
         // check if credentials are okay, and email is verified
         $sql = "SELECT * FROM users WHERE email = '" . $email . "'";
         $result = mysqli_query($conn, $sql);
  
         if (mysqli_num_rows($result) == 0)
         {
             die("Email not found.");
         }
  
         $user = mysqli_fetch_object($result);
  
         if (!password_verify($password, $user->password))
         {
             die("Password is not correct");
         }
  
         if ($user->email_verified_at == null)
         {
             die("Please verify your email <a href='email-verification.php?email=" . $email . "'>from here</a>");
         }
  

         

         echo "<p>Login successfully click <a href='index_afterLogin.php'>click here to go back to main page</a></p>";
         exit();
     }
 ?>
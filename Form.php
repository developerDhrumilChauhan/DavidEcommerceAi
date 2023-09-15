<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Title Here -->
  <title>Login</title>

  <!-- Css Here -->
  <link rel="stylesheet" href="Form.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>

<body>


  <div class="login-page">
    <div class="form">


      <!-- Register Form Start  -->

      <form class="register-form" action="register.php" method="POST">

        <h1 class="title">Register</h1>

        <label for="username">User Name:</label>
        <input type="text" name="username" placeholder="Enter your Name" required="" />

        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Enter Your Email" required="" />

        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Enter your password" required="" />
        <!-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> -->

        <button type="submit">Register</button>

        <p class="message">Already Registered? <a href="#">Login</a></p>

      </form>

      <!-- Register Form End  -->


      <!-- Login Form Start  -->

      <form class="login-form" action="login.php" method="POST">

        <h1 class="title">Login</h1>

        <label for="username">User Name:</label>
        <input type="text" name="username" placeholder="Enter your Name" required="" />

        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Enter your password" id="password-field" value=""
          required="" />
        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>


        <button type="submit">Login</button>

        <p class="message">Not Registered? <a href="#">Create An Account</a></p>

      </form>

      <!-- Login Form End  -->


    </div>
  </div>

  <!-- Javascript Here -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

  <script src="script.js"></script>

</body>

</html>
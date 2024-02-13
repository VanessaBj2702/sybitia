<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserve</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="login.css">
  
  </head>
<body>
  <div class="wrapper" >
    <span class="icon-close">
      <ion-icon name="close">
      </ion-icon>
    </span>

    <span class="icon-home">
      <a href="homepage.html"><ion-icon name="home">
      </ion-icon></a>
      
    </span>
    <div class="form-box login">
      <h2>Login</h2>
      <form action="#">

        <div class="input-box">
          <span class="icon">
             <ion-icon name="mail"></ion-icon>
          </span>
             <input type="email"  required>
            <label>Email</label>
        </div>

        <div class="input-box">
          <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
          <input type="password"required>
          <label>Password</label>
        </div>
        <div class="remember-forgot">
          <label><input type="checkbox">
          Remember me</label>
          <a href="#">Forgot Password</a>
        </div>
        <button type="submit" class="btn">Login</button>
        <div class="login-register">
          <p>Don't have an account? 
            <a href="#" class="register-link">Register</a>
          </p>
        </div>

      </form>
    </div>


    <div class="form-box register">
      <h2>Registration</h2>
      <form action="#">

        <div class="input-box">
          <span class="icon">
            <ion-icon name="person"></ion-icon>
          </span>
             <input type="text" name="name" required>
            <label>Username</label>
        </div>

        <div class="input-box">
          <span class="icon">
             <ion-icon name="mail"></ion-icon>
          </span>
             <input type="email" name="email" required>
            <label>Email</label>
        </div>

        <div class="input-box">
          <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
          <input type="password" name="password" required>
          <label>Password</label>
        </div>

        <div class="remember-forgot">
          <label><input type="checkbox">
          I agree to the terms & conditions</label>
         
        </div>

        <button type="submit" name="submit" class="btn">Register</button>
        <div class="login-register">
          <p>Already have an account? 
            <a href="#" class="login-link">Login</a>
          </p>
        </div>

      </form>
      
    </div>
  </div>

  <script src="script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  
</body>
</html>
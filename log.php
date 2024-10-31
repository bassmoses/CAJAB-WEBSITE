<!DOCTYPE html>
<!-- Coding by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Login and Registration Form in HTML & CSS | CodingLab </title>
    <link rel="stylesheet" href="log.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="responsive-full-background-image.css">
    <script src="chkRegisPassword.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
   </head>
<body>
  <?php
    
  require_once "navigation.html";
  ?>
  <br>
  <br>

  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="images/frontImg.jpg" alt="">
        <div class="text">
          <span class="text-1">Every new friend is a <br> new adventure</span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="images/backImg.jpg" alt="">
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form action="#">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" required>
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" value="Sumbit">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
        </form>
      </div>


      <!--   SIGN UP FORM ---------------------------------------------- -->
        <div class="signup-form">
          <div class="title">Signup</div>
        <form id="form" action="users.js" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Enter your full name"  name="name"
                 required>
              
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input onkeyup="check()"  id="email" type="text" name-="email" placeholder="Enter your email" required>
              <div class="icons">
                <span class="icon1 fas fa-exclamation"> </span>
                <span class="icon2 fas fa-check"> </span>


              </div>
              
              
              </div>

              <div class="error-text">Please Enter Valid Email Address</div>

          
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input id="password" type="password" placeholder="Enter your password" name="password" required>
                
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input id="cnfrm-password" onkeyup="checkPassword()"  type="password" placeholder="Retype your password" required>
                <p id="message"> </p>
              </div>
              
              <label for="birthday" style="text-decoration: none; pointer-events: none;">
              Date Of Birth
              </label>
              <div class="input-box">
                <i class="far fa-calendar-alt"></i>
                <input type="date"  name="date_of_birth" required> 
              </div>

              
              
              


              <label for="Gender" style="text-decoration: none; pointer-events: none;">
              Gender
              </label>
              <div class="input-box">
               <!-- <i class="fas fa-transgender"></i> -->
               <input  type="radio" name="gender" value="male" name="gender" required> Male<br>
                <input type="radio" name="gender" value="female" name= "gender" required> Female<br>
                
              </div>

              <div class="input-box">
                <i class="fa fa-mobile-phone"></i>
                <input type="tel" placeholder="Phone Number" name="number" required>
                
              </div>
              


              
              <div class="button input-box">
                <input  type="submit" value="Sumbit">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>

  <script type="text/javascript">
  const email = document.querySelector("#email");
  const icon1 = document.querySelector(".icon1");
  const icon2 = document.querySelector(".icon2");
  const error = document.querySelector(".error-text");
  const btn = document.querySelector("button input-box");
  let regExp= /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    function check() {
      if (email.value.match(regExp)) {
        email.style.borderColor= "27ae60";
        icon1.style.display="none";
        icon2.style.display="block";
        error.style.display="none"; 
      }else{
        email.style.borderColor= "#e74c3c";
        icon1.style.display="block";
        icon2.style.display="none";
        error.style.display="block";
      }
      if (email.value=="") {
        email.style.borderColor= "lightgrey";
        icon1.style.display="none";
        icon2.style.display="none";
        error.style.display="none";
      }
    }


  </script>
</body>
</html>

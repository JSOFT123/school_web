<!DOCTYPE html>
<html lang="en">

   <head>
      <title>Login Page</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="fontawesome-web/css/all.min.css">
      <link href="css/login.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/all.min.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   </head>

   <body>
      <img src="img/jsoft_logo.jpg" alt="jsoft academy">
      <h5>JSOFT ACADEMY</h5>

      <main>
         <div class="form-content">
            <form>
               <div class="logo">
                  <img src="img/jsoft_logo.jpg" alt="jsoft-academy">
                  <h4>JSOFT ACADEMY</h4>
               </div>

               <h4 class="mb-2">Login</h4>
               <label for="user">Fullname</label>
               <input type="text" name="user" id="user" placeholder="full-name"> <!--disabled-->

               <label for="pwd">password</label>
               <input type="password" id="pwd" name="pwd" maxlength="8" required> <!--disabled-->

               <input type="button" value="Login" class="login_btn">
            </form>

            <p><a href="#">Forgot password</a></p>
         </div>

         <!---------------------- CONTAINER ---------------------------->
         <div class="container">
            <div class="signs fa fa-warning">
               <h5 class="error-message">password does not match!</h5>
            </div>

            <div class="content">
               <h2>Jsoft Academy</h2>
               <p>To register with us, kindly call or chat (whatsapp) the school admin to make entry enquiries</p>
            </div>
         </div>
      </main>
      
      <script src="js/main.js"></script>
   </body>

</html>
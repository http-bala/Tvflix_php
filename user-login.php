<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tvflix user-page</title>
    <link rel="stylesheet" href="./assets/user-css/user-login.css">
    <style>
      div#msg-error{
        width: 500px;
    background: red;
    padding: 14px;
    position: absolute;
    top: 20px;
    right: 20px;
    color: white;
    display: none;
      }
      div#msg-success{
        width: 500px;
    background: green;
    padding: 14px;
    position: absolute;
    top: 20px;
    right: 20px;
    color: white;
    display: none;
      }
    </style>
</head>

<body>
<div class="alert alert-danger alert-dismissable" id="msg-error">
jdhdhdh
</div>

<div class="alert alert-success alert-dismissable" id="msg-success">

</div>
  <!-- messsage end -->
    <div class="form-wrapper">
        <h2>sign in</h2>
        <form id="login">
           <div class="form-control">
            <input type="text" name="email-number" required>
            <label>email or phone number</label>
           </div>
           <div class="form-control">
            <input type="password" name="password" required>
            <label>password</label>
           </div>
           <button type="submit">sign in</button>
           <div class="form-help">
            <div class="remember-me">
                <input type="checkbox" id="remember-me">
                <label for="remember-me">remember me</label>
            </div>
            <a href="#">need help?</a>
           </div>
        </form>
        <p>new to Tvflix? <a href="">sign up now</a></p>
        <small>
            this page is protected by google reCAPTCHA to ensure you're not a bot.
            <a href="#">learn more</a>
        </small>
    </div>
    <script src="./admin/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <script>
        $("#login").submit(function (e) { 
        e.preventDefault();

        let loginData = $(this).serialize();

        console.log(loginData);

        function message(message, status) {
        if (status == true) {
          $("#msg-success").html(message).fadeIn();
          $("#msg-error").html(message).fadeOut();
          setTimeout(function() {
            $("#msg-success").fadeOut();
          }, 2000);
        } else if (status == false) {
          $("#msg-error").html(message).fadeIn();
          $("#msg-success").html(message).fadeOut();
          setTimeout(function() {
            $("#msg-error").fadeOut();
          }, 2000);
        }
      }

        
        $.ajax({
          type: "POST",
          url: "controls/user-login.php",
          data: loginData,
          success: function (data) {
            if (data == 0) {
              message("logged in successfully !",true);
              setTimeout(()=>{
                window.location.href = "index.php";
              },2000)
             }else if(data == 1){ 
              message("Incorrect Username and password ",false);
             }
             else if(data == 2 ){ 
              message("fill the all fields",false);
             }
          }
        });
      });
    </script>
</body>
</html>
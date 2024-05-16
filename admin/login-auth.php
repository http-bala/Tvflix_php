<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin-login</title>
  <link rel="stylesheet" href="dist/css/admin-login.css">
  <style>
    #msg-success{
      width: 25rem;
      height: 3rem;
      text-align: center;
      line-height: 3rem;
      background-color: green;
      color: white;
      position: absolute;
      right: 20px;
      top:20px;
      display: none;
    }
    #msg-error{
      width: 25rem;
      height: 3rem;
      text-align: center;
      line-height: 3rem;
      background-color: red;
      color: white;
      position: absolute;
      right: 20px;
      top:20px;
      display: none;
    }
  </style>
</head>
<body>

<div id="msg-success">
    success
</div>
<div id="msg-error">
    success
</div>
  
  <div class="container">
    <div class="myform">
      <form id="login">
        <h2>ADMIN LOGIN</h2>
        <input type="text" placeholder="Admin Name" name="adminName">
        <input type="password" placeholder="Password"  name="password">
        <button type="submit">LOGIN</button>
      </form>
    </div>
  </div>
  <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
  <script>

    // message function .....
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
   
      $("#login").submit(function (e) { 
        e.preventDefault();

        let loginData = $(this).serialize();
        console.log(loginData);
        
        $.ajax({
          type: "POST",
          url: "controls/adminlogin.php",
          data: loginData,
          success: function (response) {
              if (response == 0) {
                message("login successful . ",true);
                setTimeout(()=>{
                  window.location = "./index.php";
                },2000);
              }else if(response == 1){
                message("incorrect username and password . ",false);
              }else if (response == 2) {
                message("please enter the username and password . ",false);
              }
          }
        });
      });

   
  </script>


</body>
</html>
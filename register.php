<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Responsive Registration Form</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="style2.css" />
  </head>
  <body>
    <div class="container">
      <h1 class="form-title">Registration</h1>
      <form action="register2.php" method="post" autocomplete="off">
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="fullName">Name</label>
            <input type="text" id="fullName" name="Name" placeholder="Enter Full Name" required value=""/>
          </div>
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter Email" required value=""/>
          </div>
          <div class="user-input-box">
            <label for="phoneNumber">Phone Number</label>
            <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Enter Phone Number" required value=""/>
          </div>
          <div class="user-input-box">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter Password" required value=""/>
        </div>
        <div class="gender-details-box">
          <span class="gender-title">Gender</span>
          <div class="gender-category">
            <input type="radio"  name="gender" value="Male" required> Male
            <input type="radio"  name="gender" value="Female"> Female
            <input type="radio"  name="gender" value="Other"> Other
          </div>
        </div>
        <div class="form-submit-btn">
          <input type="submit" name="submit" value="Register" onclick="jsa()">
        </div>
      </form>
    </div>
    <script>
    function jsa(){
      alert("Registration Done");
    }
    </script>
  </body>
  
</html>
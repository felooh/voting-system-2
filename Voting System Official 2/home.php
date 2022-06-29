<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Online Voting System</title>
</head>

<header>

    <div class="navbar_heading">
      <a href="home.php">
        <div class="logo">
          <img src="images/logo.avif">
        </div>
      </a>
      <h1>Online Voting System</h1>
      <nav class="navbar_links">
        <ul>
            <li><a href="adminlogin.html">ADMIN</a></li>
            <li><a href="logout.html">LOGOUT</a></li>
        </ul>
     </nav>
    </div>

   
  
</header>
<body>
  <div class="background">
    <h1 class="background_heading">Welcome Voter!</h1>
    <div class="form">
   <form action="color: grey;">
    <fieldset>
      <legend>LOGIN DETAILS</legend>
      <label for="reg_no">Registration number: </label>
      <input type="text"  placeholder="Enter regitration number" name="reg_no"><br><br><br>
      <label for="voter_id">Voter ID: </label>
      <input type="text" placeholder="Enter voter id" name="voter_id" required><br><br><br>
      <label for="password">Password: </label>
      <input type="password" placeholder="Enter password" name="password" required><br><br><br>
      <button type="submit">Login</button>
    </fieldset>
    </form>
    </div>
    <p style="color: black;">Have you registered? <a href="register.php">Register</a>
    </p>
  </div>
</body>
</html>
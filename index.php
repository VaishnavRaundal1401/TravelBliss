<!-- <?php
    session_start();
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">

        <?php
        include("php/config.php");
        if(isset($_POST['submit'])){
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $password = mysqli_real_escape_string($con, $_POST['password']);

            $result = mysqli_query($con, " SELECT * FROM users WHERE Email = '$email' AND Password = '$password' ") or die("Some Error Occured, Login with correct credentials");
            $row = mysqli_fetch_assoc($result);
            if(is_array($row) && !empty($row)){
                $_SESSION['valid'] = $row['Email'];
                $_SESSION['username'] = $row['Username'];
                $_SESSION['age'] = $row['Age'];
                $_SESSION['id'] = $row['Id'];
            }else{
                echo "<div class='message'>
                  <p>Wrong Username or Password</p>
                   </div> <br>";
               echo "<a href='index.php'><button class='btn'>Go Back</button>";
     
            }
            if(isset($_SESSION['valid'])){
                header("Location: ./home.php");
            }
          }else{

        
        ?>
        <form action="" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name="email" id="email" placeholder="Email" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="remember-forgot">
                <label> <input type="checkbox"> Remember me</label>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit" name="submit" value="Login" class="btn">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="register.php">Register</a></p>
            </div>
        </form>
        <?php } ?>
    </div>
</body>
</html>
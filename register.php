<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <div class="wrapper">

        <?php
        include("php/config.php");
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $password = $_POST['password'];

            //verifying the unique email

            $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email = '$email'");
            if(mysqli_num_rows($verify_query)!=0){
                echo "<div class = 'message'>
                    <p>This email is used, Try another one please!</p>
                    </div> <br>";

                echo "<a href = 'javascript:self.history.back()'><button class= 'btn'>Go Back</button>";
            }
            else{
                mysqli_query($con, "INSERT INTO users(Username, Email, Age, Password) VALUES ('$username', '$email', '$age', '$password')" ) or die("Error Occured !");
                echo "<div class = 'message'>
                    <p>Registration Successful!</p>
                    </div> <br>";

                echo "<a href = 'index.php'><button class= 'btn'>Login Now</button>";
            }
        }else{
        ?>

        <form action="" method="post">
            <h1>Sign Up</h1>
            <div class="input-box">
                <input type="text" name="username" id="username" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="text" name="email" id="email" placeholder="Email" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="text" name="age" id="age" placeholder="Age" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <!-- <div class="remember-forgot">
                <label> <input type="checkbox"> Remember me</label>
                <a href="#">Forgot password?</a>
            </div> -->

            <button type="submit" name="submit" value="Register" class="btn" required>Sign Up</button>

            <div class="register-link">
                <p>Already a member? <a href="index.php">Sign In</a></p>
            </div>
        </form>
        <?php } ?>
    </div>
</body>
</html>
<?php

if (isset($_POST['admin-login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $conn = mysqli_connect("localhost", "root", "", "naturaverde_db");

    if (empty($username) || empty($password)) {
        echo "<script>alert('Please fill up all fields')</script>";
    } else {
        // Prepare the SQL query to fetch the admin by username
        $queryValidate = "SELECT * FROM admin WHERE username = '$username' AND password = '".md5($password)."'";
        $sqlValidate = mysqli_query($conn, $queryValidate);

        if (mysqli_num_rows($sqlValidate) == 0) {
            // Username not found
            echo "<script>alert('Username not found!')</script>";
        } else {
            // Fetch the user data
            $user = mysqli_fetch_assoc($sqlValidate);

            // Verify the password
            if ($user['password'] != md5($password)) {
                // Password is incorrect
                echo "<script>alert('Password is incorrect!')</script>";
            } else {
                // User is verified and password is correct; redirect to admin_home.php
                header("Location: admin_home.php");
                exit();
            }
        }
    }
}
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../assets/logo/logo.png" type="image/x-icon">
    <title>Natura Verde Farm and Private Resort</title>
    <link rel="stylesheet" href="./admin-login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
    *{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: Arial, Helvetica, sans-serif
}

body{  
    width: 100%;
    background-color: #ffffff00;
    overflow-y: hidden;
}

::-webkit-scrollbar {
    width: 8px; 
    
    }

::-webkit-scrollbar-thumb {
background: #A9A9A9; 
border-radius: 10px;
}

::-webkit-scrollbar-track {
background: #f1f1f1; 
}

header{
    width: 100%;
    height: 12vh;
    background: transparent;
    z-index: 1;
}

#navbar{
    background-color: #1fc724; 
    /* background: #FBF4E9; */
    padding: 5px 40px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    /* z-index: 2; */
}

#navbar ul{
    list-style: none;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
}

#navbar ul li{
    text-transform: uppercase ;
    padding: 15px 0;
    font-weight: 500;
}

#navbar ul li.natura-title{
    color: white;
    flex: 1;
    font-size: 1.7em;
    font-weight: 600;
    user-select: none;
    margin-left: 10px;
    text-align: center;
}

#navbar ul li a{
    font-size: 18px;
    font-style: bold;
    text-decoration: none;
    transition: .4s;
}

.natura-logo{
    width: 90px;
    height: 90px;
    cursor: pointer;
    margin-left: 430%;
}

.admin-login-sec{
    width: 100%;
    height: 90vh;
    display: grid;
    place-items: center;
}

.admin-login-sec img{
    width: 100%;
    height: auto;
}

.admin-login-container{
    width: 350px;
    height: auto;
    border-radius: 12px;
    border: solid #36f90f ;     
} 

i{
    color: white;
}

.title{
    height: 5rem;
    width: 100%;
    display: grid;
    place-items: center;
    background-color:#1fc724; 
    border-radius:10px 10px 0px 0px;
}

.title h3{ 
    color: white;
    text-transform: uppercase;
    font-size: 1.5em;
} 

.details{
    margin: auto;
    height: 27%;
    width: 85%;
}

.input-container{
    display: flex;
    background-color: #37d047;
    border-radius: 10px;
    margin-top: 15px;
}

.input-container i{
    /* border: 3px solid red; */
    width: 50px;
    height: 45px;
    display: grid;
    place-items: center;
}

input[type="text"], input[type="password"]{
    border-radius: 0 10px 10px 0px;
    height: 45px;
    width: 100%;
    outline: none;
    font-size: 16px;
    padding-left: 15px;
    border: 1px solid #37d047;
    transition: all 0.3s ease;
}

.btn-pos{
    width: 100%;
    display: grid;
    place-items: center;
}

.login-btn{
    width: 80%;
    background-color:#1fc724; 
    color:white; 
    font-family: Arial, sans-serif;
    text-transform: uppercase;
    font-size: 20px;
    font-weight: bold;
    padding: 10px 20px; 
    border:none;  
    cursor:pointer; 
    border-radius: 10px; 
    margin-bottom: 15px;
}

.login-btn:hover{
    background: radial-gradient(circle at -1% 57.5%, rgb(19, 170, 82) 0%, rgb(0, 102, 43) 90%);
}

</style>
<body>

    <header>
        <div id="navbar">
            <ul>
            <a href="./index.php"><img src="../assets/logo/NaturaVerdeLogo.png" alt="" class="natura-logo"></a>
                <li class="natura-title">&ensp;&ensp;&ensp;&ensp;&ensp;Natura Verde Farm and Private Resort</li>
            </ul>
        </div>
    </header>

<section class="admin-login-sec">
    <div class="admin-login-container">
        <div class="title">
            <h3> Administrator Log In</h3>
        </div> <br>
        <div class="details">
            <form method="POST">
                    <h5>Username</h5>
                    <div class="input-container">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Enter your username" required>
                       
                    <br>
                    </div>
                    <?php if (isset($usernameError)) { ?>
                        <div class="error"><?php echo $usernameError; ?></div>
                        <?php } ?><br>

                    <h5> Password</h5> 
                    <div class="input-container">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Enter your Password" required>
                        <!-- <img src="icons/eye-close.png" onclick="pass()" class="pass-icon" id="pass-icon">
                      -->
                    </div>
                    <?php if (isset($passwordError)) { ?>
                        <div class="error"><?php echo $passwordError; ?></div>
                        <?php } ?>
                        <br>  <br>
                    <div class="btn-pos">
                        <input type="submit" class="login-btn" name="admin-login" value="Log In">
                    </div> 

            </form>
     </div><br>
    </div>
</section>
</body>
<script src="./javascript/showandhidepassword.js"> </script>
<script>
    window.onload = function() {
            if (/Mobi|Android/i.test(navigator.userAgent)) {
                // The user is using a mobile device
                alert("I'm sorry, but this page is only available for the desktop version. Please use a laptop or desktop to access this page.");
            }
        };
</script>
</html>

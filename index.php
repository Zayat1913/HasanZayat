<?php
session_start();
if (isset($_SESSION["email"])) {
    header("location:index.php");
    exit();
}
?>
<html>

<head>
    <link rel="stylesheet" href="inStyle.css">
    <link rel="stylesheet" href="mForm.css">
    <script>
        // alert("my first javascript!"); 
    </script>
    <title>
        Login
    </title>
</head>

<body style="background-color: #9BBEC8;">
    <!-- <div class="row header " >
            
        </div> -->
    <div style="margin-top: 18%; margin-left: 47.2%; margin-bottom: 2%; font-weight: bold;" class="title">
        <span style="font-size:xx-large">Login</h1>
    </div>


    <div style="margin-left: 45%;" class="paragraph">
        <form action="login.php" method="POST" id="login-form">
            <label for="un">User Name</label>
            <br>
            <input type="text" name="email" id="un">
            <br><br>
            <label for="pass">Password</label>
            <br>
            <input type="password" name="password" id="pass">
            <br>
            <br>
            <input style="margin-right: 3%; margin-left: 1%;" type="button" value="Login" class="mbutton"
                onclick="login()">
            <input type="button" value="Cancel" class="mbutton" onclick="ClearForm()">
        </form>
        <span style="font-size: 16px;
                color: #146780; margin-left: -5%;">Don't have an account?</span> <a style="font-size: 16px;
                color: #146780;" href="signup.html">Sign Up...</a>
    </div>

    <script>
        function login() {
            var un = document.getElementById("un").value;
            var pass = document.getElementById("pass").value;
            if ((un == "") || (pass == "")) {
                alert("You must fill in the username and the password!");
            } else {
                document.getElementById("login-form").submit();
            }

        }

        function ClearForm() {
            document.getElementById("un").value = "";
            document.getElementById("pass").value = "";
        }
    </script>

</body>

</html>
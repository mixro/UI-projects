<?php

?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Registration on PHP | icxep studio</title>
        <link rel="stylesheet" type="text/css" media="screen" href="registration.css" />
        <link href="" rel="shortcut icon" type="image/x-icon">
    </head>

    <style>
        * {
    box-sizing: border-box;
}
html body {
    padding: 0;
    margin: 0;
    color: white;
}
input[type=text],
input[type=password] {
    width: 100%;
    margin: 16px auto;
    padding-top: 13px;
    padding-bottom: 9px;
    border-radius: 3px;
    border: none;
}
.container {
    background-position: center;
    background-size: cover;
    background: linear-gradient(rgb(19, 3, 255), rgb(212, 0, 255));
    height: 100vh;
    width: 100%;
    overflow: hidden;
}
.row {
    display: flex;
    width: 100%;
    height: 85vh;
    justify-content: center;
}
#column {
    padding-top: 10px;
    border: 1px solid white;
    margin: 120px 30px auto 30px;
    border-radius: 9px;
    padding: 12px 12px;
}
h2 {
    color: white;
    text-align: center;
}
#specialbtn {
    padding: 8px 23px;
}
button {
    border-radius: 20px;
    background-color: rgb(0, 183, 255);
    text-align: center;
    font-size: 21px;
    border: 1px solid white;
    padding: 10px 23px 10px 23px;
    color: white;
}
.loginbtn {
    text-align: center;
    margin: 29px auto 8px auto;
}
.footer {
    text-align: center;
    font-size: 27px;;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.registration {
    background: rgba(0,0,0,0.3);
}
    </style>

    <body>


        <div class="container">
            <div class="row">
                
                 <!--LOGIN FORM-->
                <div class="login" id="column">
                    <h2> Login Here </h2>
                    <form action="http://localhost/chongprograms/registration/validation.php" method="post">
    
                        <div class="loginInput"> 
                            <label><b>Username</b></label>
                            <input type="text" name="user" placeholder="Enter Username" class="inputs" required/>
                        </div>
                        <div class="loginInput"> 
                            <label><b>Password</b></label>
                            <input type="password" name="password" placeholder="Enter password" class="inputs" required/>
                        </div>
                        <div class="loginbtn">
                            <button type="submit" id="specialbtn">Login</button>
                        </div>
                    </form>
                </div>

                <!--REGISTRATION PART-->
                <div class="registration" id="column">
                    <h2> Register Here </h2>
                    <form action="http://localhost/chongprograms/registration/registration.php" method="post">
    
                        <div class="loginInput"> 
                            <label><b>Username</b></label>
                            <input type="text" name="user" placeholder="Enter Username" class="inputs"  required/>
                        </div>
                        <div class="loginInput"> 
                            <label><b>Password</b></label>
                            <input type="password" name="password" placeholder="Enter password" class="inputs" required/>
                        </div>
                        <div class="loginbtn">
                            <button type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="footer">
                <p>Welcome To MiCEP</p>
            </div>
        </div>
    </body>
</html>
<?php

if(isset($_POST['login']))
    {
        $username = htmlspecialchars(mysqli_real_escape_string($_POST['username']));
        $password = htmlspecialchars(mysqli_real_escape_string($_POST['password']));
        $con = new mysqli('localhost','root','password','sample') or die("Connection failed.");
        $stmt = $con->prepare("SELECT user-id FROM `users` WHERE username=? AND password=?") or die("Error");
        $stmt->bind_param("ss", $username, $password) or die("Binding Error");
        $stmt->execute() or die("Execution Error");
        $stmt->bind_result($id);
        $stmt->fetch();
        if(!isset($id))
            echo 'Invalid username or password';
        else
            echo '<h1>Logged in</h1><p>'.$username.'</p>';
    }
    else
    {
     echo '<html>

           <head>
             <title>Professionals challenges | Web Application</title>
           </head>

           <body>
             <h1 style="text-align:center;">Low level - 1st challenge</h1>
             <hr>
             <center>
                 <form action="" method="post" style="margin-top: 60px;">
                     <label>Username:<label><input type="text" name="username" />
                     <br /> <label>Password:<label><input type="password" name="password" />
                     <br />
                     <br>
                     <input type="submit" name="login" value="Login" />
                 </form>
             </center>
                 <hr>

                 <h2 style="text-align:center;"><a href="https://fb.me/xc0d3rz">xC0d3rZ</h2> 
           </body>
           </html>';
    }
?>

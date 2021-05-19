<!DOCTYPE html>
<html lang="en">

<head>
    <title>Team Calico Login</title>
</head>

<body>
    <!-- PHP -->
    <?php
        $error = '';
        
        if(isset($_POST["submit"]))
        {
            $usr = 'inte';
            $pwd = '2047';
            $username = $_POST['uname'];
            $password = $_POST['pword'];

            if ($username == $usr && $password == $pwd)
            {
                session_start();
                $_SESSION['username'] = $username;
                header('Location: index.php');
                $error = '';
            }
            else
            {
                $error = 'Wrong login details. Try again';
            }
        }
    ?>

    <h2>Team Calico</h2>

    <!-- Form -->
    <form method="POST">
        <input type="text" name="uname" id="uname" placeholder="Username">
        <input type="password" name="pword" id="pword" placeholder="Password">
        <input type="submit" name="submit" value="Login"></input>
        <br><br>
        <span style="color:red;">* <?php echo $error; ?></span>
    </form>
    <br>
    This is a team project not a real site. Login to view the site.

</body>

</html>
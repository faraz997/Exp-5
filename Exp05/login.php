<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<title>
   
    Login

</title>
<style type="text/css">
        #status{

        }
</style>
<link rel="stylesheet" href="CSS/index.css">
<script type="text/javascript" src="jquery-3.4.1.min.js">
</script>
</head>
<body>
<header>
    
    <h2 class="center"> Railway Management System</h2>
        <nav>
            <ul class="nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="aboutus.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="res.html">Register</a></li>
                <li><a href="login.html">Login</a></li>
                
            </ul>
        </nav>
</header>
<article class="login">
	<div class='card'>
        <h2>Login</h2>
        <?php
        if(isset($_POST['btnlogin']))
        {
            $username=$_POST['uname'];
            $pass=$_POST['pwd'];
            include("checkdb.php");
            $sql="select * from User where Username='$username' and password='$pass'";
            //echo $sql;
            $result = $conn->query($sql);

            if($result->num_rows==1)
            {
            ?>
            <script>
            $(function()
            {
                $('#status').css('background-color','lightgreen');
                $('#status').html('<center>Login Succesfully !!</br> Redirecting to home page</center>').fadeIn().delay(2000).fadeout();
            });
            </script>
            <?php
            $_SESSION['user']=$username;
            header("Refresh:1,url=home.php");
            }
        }
        else{
            ?>
            <script>
            $(function()
            {
                $('#status').css('background-color','red');
                $('#status').css('color','white');
                $('#status').html('<center>Incorrect username or password !!</br> Please try again</center>').fadeIn().delay(2000).fadeout();
            });
            </script>
            <?php
            }
        
        ?>
		<form action="login.php" method="post">
			<p>Username<br>
			<input type="text" id="uname" name="uname" required><br>
			Password<br>
			<input type="password" name="pwd" id="pwd" required></p>
            <input type="submit" name="btnlogin" value="Login"></p>
                <div id='status'>
             </div>
		</form>
	</div>
</article>
</body>

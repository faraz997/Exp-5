
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Look&booK</title>
</head>
<body>
    <article class="login" >
        <div class="card" >
            <?php
                if($_POST){
                    echo "<p> Welcome :<b>".$_POST['fname']."</b>";
                    echo "</p>";
                    echo "<p> Last Name :<b>".$_POST['lname']."</b>";
                    echo "</p>";
                    echo "<p> DOB :<b>".$_POST['dob']."</b>";
                    echo "</p>";
                    echo "<p> Address : <b>".$_POST['address']."</b>";
                    echo "</p>";
                    echo "<p> E-mail : <b>".$_POST['email']."</b>";
                    echo "</p>";
                    echo "<p> Gender : <b>".$_POST['gender']."</b>";
                    echo "</p>";
                    echo "<p> Contact : <b>".$_POST['phone']."</b>";
                    echo "</p>";
                    echo "<p> Username :<b>".$_POST['username']."</b>";
                    echo "</p>";
                    echo "<p> password : <b>".$_POST['pwd']."</b>";
                    echo "</p>";
                    echo "<p> Confirm password : <b>".$_POST['cpwd']."</b>";
                    echo "</p>";
                }
                else{
                    echo "You are not logged in ! Please login to your account";
                    echo "<a href='login.php'>Click here</a>";
                }
            ?>
        </div>
    </article>
</body>
</html>
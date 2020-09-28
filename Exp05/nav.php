 <?php if($_SESSION['user']==NULL){ ?>
<nav>
        <ul class="nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="aboutus.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="res.html">Register</a></li>
            <li><a href="login.html">Login</a></li>
            <!-- <!-- <li><a href="viewusers.php">View User</a></li> -->
            <!-- <li><a href="logout.html?logout=yes">Logout</a></li> -->
        </ul>
    </nav>
<?php
    }
else
{   ?>
    <nav>
        <ul class="nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="aboutus.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="res.html">Register</a></li>
            <li><a href="login.php">Login</a></li>
            <!-- <li><a href="viewusers.php">View User</a></li>
            <li><a href="logout.html?logout=yes">Logout</a></li> -->
        </ul>
    </nav>
<?php }
?>
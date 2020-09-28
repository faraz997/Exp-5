<?php include("header.php");
include("nav.php");
?>
<section>
    <h2>Users<h2>
<article class="col-1">
	<div class="card">
		<?php
        if(!$_SESSION['user'])
        {
            include("checkdb.php");
            $sql = "select First Name,Last Name,Address,email,Phone from User";
            $result = $conn->query($sql);
            echo "<table>";
            echo "<tr>";
            echo "<th>Name</th>";
            echo "<th>Action</th>";
            echo "</tr>";

            if($result->num_rows > 0){
                $count=1;
              

                while($row=$result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$row['First Name']."<td>";
                    echo "<td>".$row['Last Name']."<td>";
                    echo "<td>".$row[' Address']."<td>";
                    echo "<td>".$row['email']."<td>";
                    echo "<td>".$row['Phone']."<td>";
                    // echo "<td><a href='profile.php?rollno=".$row['Roll_no']."'>Edit</a><td>";
                    // echo "<td><a href='delete.php?rollno=".$row['Roll_no']."'>Delete</a><td>";
                    echo "</tr>";
                    $count++;
                }
                echo "</table>";
            }
        }
        else{
            header("Refresh:0,url=login.php");
        }
    
		?>
	</div>
</article>
</body>
</html>
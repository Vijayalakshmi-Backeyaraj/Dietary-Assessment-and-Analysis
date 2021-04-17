<?php
  
 include('db_connect.php');


// Attempt select query execution
$sql = "SELECT * FROM food";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                
                echo "<th>title</th>";
                echo "<th>ingredients</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                
                echo "<td>" . $row['titlle'] . "</td>";
                echo "<td>" . $row['ingredients'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>

<!DOCTYPE html>
<html>

	<?php include('header.php'); ?>
    
	<?php include('footer.php'); ?>

</html> 
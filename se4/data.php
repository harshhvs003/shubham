
<?php

function get_age($name, $age)
{
        /* Database INFO */
	$servername = "localhost";
	$username = "maddines1";
	$password = "50jnmj";
	$dbname = "maddines1_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
       }

       $sql = "SELECT age FROM items1 WHERE name = '$name'";
       $result = $conn->query($sql);

        if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
                      $p = $row["age"];
      }
    } else {
                     $p = null;
        }

    $conn->close();

if ($p == $age) 
  {
    return "true";
  }
else 
 {
  return "false";

 }

}

?>


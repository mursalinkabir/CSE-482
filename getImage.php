<?php

	//session_start();

				$server = "localhost";
				$username = "root";
				$pass = "";
				$db = "cse482project";
				$conn = new mysqli($server,$username,$pass,$db);
				$userId = $_REQUEST['userId'];


				$sql = "SELECT * FROM images WHERE user_id='$userId'";

				$result = $conn->query($sql);		

				// Extracting associative arrays from result
				while($row = $result->fetch_assoc())
				{

					$image = $row['image'];					
					header("Content-type: image/jpeg");
					echo $image;


				}


?>
<?php
	session_start();
?>

<!doctype html>
<html>
	<head>

		<title>Quick-UpLoad</title>

	</head>

	<body>

		<form method="POST" action="photosharing-qupload.php" enctype="multipart/form-data">

			<h2>Select An Image To Upload</h2><br>

			<b>Image:&nbsp</b><input type="file" name="image" id="image"><br><br>
			<input type="submit" value="ClickToUpload">&nbsp
			<input type="reset" value="Cancel">

		</form>

		<?php		

			if($_SERVER['REQUEST_METHOD']=='POST') // If the form has been submitted
			{

				// Connecting to database

				$server = "localhost";
				$username = "root";
				$pass = "";
				$db = "cse482project";
				$conn = new mysqli($server,$username,$pass,$db);

				



				// Accessing file contents

				$file = $_FILES['image']['tmp_name'];

				if(!isset($file)) // if the $file variable is set
				{
					echo "Please Select An Image.";
				}


				$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
				$image_name = addslashes($_FILES['image']['name']);
				$image_size = getimagesize($_FILES['image']['tmp_name']);
				$userId = $_SESSION["userId"];
				$dateTime = addslashes(date("d/m/Y/h:i:sa"));

				if($image_size==FALSE) // It's something other than image
				{
					echo "That's not a valid image";
				}

				else // Insert Image into the database
				{
					$sql = "INSERT INTO images (user_id,image_content,image_upload_date) VALUES ('$userId','$image','$dateTime')";

					if(!$conn->query($sql))
					{

						echo "Problem Uploading Image";
					}

					else
					{

						echo "Image Inserted Into Database";

						//echo "<a href=\"photosharing-home.php\"><input type=\"button\" value=\"GoToHomePage\"></a>";
					}




				}
				


			}
			


		?>






	</body>


</html>
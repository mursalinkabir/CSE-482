<!doctype html>
<html>
	<head>

	</head>

	<body>

		<?php

				// It's assumed, all variables are set with nonempty value;

				//-------------------- All posted variables accessed here ---------------------------
		if($_SERVER['REQUEST_METHOD']=='POST')
		{	
				$fname = $_POST["firstName"];
				$mname = $_POST["middleName"];
				$lname = $_POST["lastName"];
				$gender = $_POST["gender"];
				$dob = $_POST["dob"];
				$passWord = $_POST["passWord"];
				$repassWord = $_POST["repassWord"];
				$role = $_POST["userRole"];
				$email = $_POST["email"];


				//--------------------------------------------------------------------------------------


				// ----------------------------- Sanitizing inputs---------------------------


				$fname = filter_var($fname, FILTER_SANITIZE_STRING);
				$mname = filter_var($mname, FILTER_SANITIZE_STRING);
				$lname = filter_var($lname, FILTER_SANITIZE_STRING);
				$gender = filter_var($gender, FILTER_SANITIZE_STRING);
				$dob = filter_var($dob, FILTER_SANITIZE_STRING);
				$passWord = filter_var($passWord, FILTER_SANITIZE_STRING);
				$repassWord = filter_var($repassWord, FILTER_SANITIZE_STRING);
				$role = filter_var($role, FILTER_SANITIZE_STRING);
				$email = filter_var($email, FILTER_SANITIZE_EMAIL);

				// validating email addres:

				if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) 
				{
    				$email = $email;
    			}
    	   	    else 
    	   	    {
    				$email = "invalid email";
				}

				//----------------------------------------------------------------------------------

				if($passWord===$repassWord)
				{
					// Insert all user data into database

					//echo "Passwords matched"."<br>"."Inserting Info into database."."<br>";


					$server = "localhost";
					$username = "root";
					$passwd = "";
					$db = "cse482project";

					$conn = new mysqli($server,$username,$passwd,$db);


					if(!$conn)
					{

						die ("Connection Error: ". $conn->connect_error());
					}


					//echo "Connection Successful!!!"."<br>";


					//---------------- Insert data into registered_user table------------------------------

					$insertQuery = "INSERT INTO registered_user (fname,mname,lname,dob,gender,type,email,password)
					VALUES ('$fname','$mname','$lname','$dob','$gender','$role','$email','$passWord')";


					if($conn->query($insertQuery)===true)
					{
						echo "Data inserted into registered_user"."<br>";
						echo "Your User-Id is: ". $email."<br>";

						echo "<a href=\"photosharing-login.php\"><input type=\"button\" value=\"Login\"></a>";

					}
				}

				else //passwords not match
				{

					echo "Password and re-typed Password don't match. Try Again"."<br>";

				}


			





	}


		?>

	</body>




</html>
<?php
							$servername="localhost";
							$username="root";
							$password="";
							$database="travel";
							$con=mysqli_connect($servername,$username,$password,$database);
							if(!$con)
							{
							die("Connection Failed:".mysqli_connect_error());
							}
							
							
								
							
								
							$sql2 = "DELETE FROM temp_user";

									if ($con->query($sql2) === TRUE) 
									{
										
									} 
									else 
									{
										echo "" . $con->error;
									} 
							$con->close();
			?>
						<?php
							$servername="localhost";
							$username="root";
							$password="";
							$database="travel";
							$con=mysqli_connect($servername,$username,$password,$database);
							if(!$con)
							{
							die("Connection Failed:".mysqli_connect_error());
							}
							
							
								
							$sql4 = "DELETE FROM temp;";

									if ($con->query($sql4) === TRUE) 
									{
										
									} 
									else 
									{
										echo "" . $con->error;
									} 
							$con->close();
						
						?>
						
						
						<?php
							$servername="localhost";
							$username="root";
							$password="";
							$database="travel";
							$con=mysqli_connect($servername,$username,$password,$database);
							if(!$con)
							{
							die("Connection Failed:".mysqli_connect_error());
							}
							
							
								
							$sql4 = "DELETE FROM temp_desc;";

									if ($con->query($sql4) === TRUE) 
									{
										
									} 
									else 
									{
										echo "" . $con->error;
									} 
							$con->close();
						
						?>
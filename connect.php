<?php
						// Error reporting
						error_reporting(E_ALL);

										// Connect database
								$db = mysqli_connect("localhost", "root","", "cell tech");	
								
								// Check connection
								if (!$db) 
									{
										die("Connection failed: " . mysqli_connect_error());
									}
								$sql="SELECT id,image1,image2,phone,storage,ram,android_version,back_camera,front_camera,price FROM image";
								$result= $db ->query($sql);
								
                
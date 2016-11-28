<?php
session_start();


if(isset($_POST["type"])) {  //check if type is set or not


	if(strcmp($_POST["type"],"login") ==0) { //to check if type equals to login
			if(isset($_POST["user"]) && isset($_POST["pass"]) && isset($_POST["type"])) { //save data from login form to var
				$user1 = $_POST["user"];
				$pass1 = $_POST["pass"];
				$type1 = $_POST["type"];
				
				
				//SQL---------------------------------------------
				$servername = "localhost";
				$username = "root";
				$password = "";
				   define('DB_SERVER', 'localhost:3306');
   				   define('DB_USERNAME', 'root');
   				   define('DB_PASSWORD', '');
   				   define('DB_DATABASE', 'foodrecipe');
   				$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

				// Create connection
				
				$sql = "SELECT * FROM `user` WHERE `user` = '".$user1."' AND `pass` = '".$pass1."'";
				
      			$result = mysqli_query($db,$sql);
      			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      			$active = $row['active'];
      			$count = mysqli_num_rows($result);
				if($count == 1) {
         		
         		$_SESSION['login_user'] = $user1;
         
        		 header("location:login.php?msg=Successfully Logged In!");
      }else {
         header("location:login.php?msg=Error! Wrong ID or Password");
      }
				
				
				}
	}
	if(strcmp($_POST["type"],"register")==0) {
			if(isset($_POST["user"]) && isset($_POST["pass"]) 
			&& isset($_POST["type"]) && isset($_POST["email"]) 
			&& isset($_POST["tel"])) { //save data from login form to var
				$user2 = $_POST["user"];
				$pass2 = $_POST["pass"];
				$type2 = $_POST["type"];
				$email2 = $_POST["email"];
				$tel2 = $_POST["tel"];
				
				
				
				//-----------------------

				//SQL for login 
				$servername = "localhost";
				$username = "root";
				$password = "";

				// Create connection
				$conn = new mysqli($servername, $username, $password);

				if ($conn->connect_error) {
    				die("Connection failed: " . $conn->connect_error);
				} 

				$sql = "INSERT INTO `foodrecipe`.`user` (`id`, `user`, `pass`, `tel`, `email`) VALUES (NULL, '".$user2."', '".$pass2."', '".$tel2."', '".$email2."')";

				if ($conn->query($sql) === TRUE) {
					
					
					// Store Session Data
					$_SESSION['login_user']= $user2;  // Initializing Session with value of PHP Variable
   					echo '<script type="text/javascript">
           			window.location = "login.php?msg=Account Successfully Created!"
      				</script>';
				} else {
   					 echo "Error: " . $sql . "<br>" . $conn->error;
				}

				$conn->close();

				//-----------------------
				
			}
	}

}







?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  
 
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style.css">

<style>
#bg {
	background:url(../../Users/ACER/Documents/project/images/orange.jpg)
  position: fixed; 
  top: 0; 
  left: 0; 
	
  /* Preserve aspet ratio */
  min-width: 100%;
  min-height: 100%;
}
</style>  
</head>
  
<!-- Form Mixin-->
<!
-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
 
  <img src="images/lll.png" width="253" height="258" alt=""/>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">Register</div>
  </div>
  <div class="form">
  <?php
  if (!isset($_GET["msg"])) {
	  

	  if(isset($_SESSION['login_user'])){
	echo '<script type="text/javascript">window.location = "index.php"</script>'; }
  
  ?>
    <h2>Login to your account</h2>
    <form method="post" action="login.php">
      <input name="user" type="text" placeholder="Username"/>
      <input name="pass" type="password" placeholder="Password"/>
      <input name="type" type="hidden" value="login">
      <button>Login</button>
    </form>
  </div>
  <div class="form">
    <h2>Create an account</h2>
    <form method="post" action="login.php">
      <input name="user" type="text" placeholder="Username"/>
      <input name="pass" type="password" placeholder="Password"/>
      <input name="email" type="email" placeholder="Email Address"/>
      <input name="tel" type="tel" placeholder="Phone Number"/>
      <input name="type" type="hidden" value="register">
      <button>Register</button>
    </form>
  
  <?php
	
  } else {  ?>
  
  <h2><center><?php echo $_GET["msg"]; ?></center></h2><br><center><a href="login.php">Click Here To Continue</a><center>
  
	<?php  

  }
  
  ?>
  
<!-------- PEN LIKE ICON ---------->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='js/edited.js'></script>

    <script src="js/index.js"></script>

</body>
</html>

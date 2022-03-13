<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact form</title>
   <style>
h2 {text-align: center;}
p {text-align: center;}
div {text-align: center;}
</style>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <div class="container">
        <h2>CONTACTS FORM</h2>
		<form action="" method="POST" class="login-email">
			<div class="input-group">
                <label for="fname">Enter Name:</label>
                <input type="text" id="fname" name="fname" required>
				
			</div>
                        <div class="input-group">
                            <label for="email">Enter mobile number:</label>
				<input type="number" placeholder="number" name="phone number" value="<?php echo $_POST['number']; ?>" required>
            </div>
			<div class="input-group">
				<label for="email">Enter email address:</label>
                <input type="email" id="email" name="email" required>
			</div>
            
			<div class="input-group">
				<button name="save" class="btn">SAVE</button>
			</div>
			
           
            
            
            
            
		</form>
	</div>
    <a href="logout.php">Logout</a>
</body>
</html>
    
    
    <?php
include 'config1.php';
error_reporting(0);
    
    ?>
    
    
    
    
    
    
    
    
    

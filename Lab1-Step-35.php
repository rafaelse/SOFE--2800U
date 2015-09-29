<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <hr color="darkblue" size="20">
    <h1 align="center">Welcome to UOIT</h1>
    <hr color="darkblue" size="20">
    
    <?php
      $xyz = new DateTime("now", new DateTimeZone('America/Toronto'));
      echo $xyz -> format('m/d/Y, H:i:s');
    ?>
    
    <form action="datastore.php" method="post">
		<p>
			<label for="strFirstName">First Name:</label>
			<input type="text" name="a" id="strFirstName">
		</p>
		<p>
			<label for="strLastName">Last Name:</label>
			<input type="text" name="b" id="strLastName">
		</p>
		<p>
			<label for="strUserName">User Name:</label>
			<input type="text" name="c" id="strUserName">
		</p>
		<p>
			<label for="strPassword">Password:</label>
			<input type="password" name="d" id="strPassword">
		</p>
		<p>
			<label  for="strCellphone">Cellphone Number</label>
			<input type="text" name="e" id="strCellphone">
		</p>
		<p> <input type="submit" value="Register"></p>
    </form>
  </body>
</html>

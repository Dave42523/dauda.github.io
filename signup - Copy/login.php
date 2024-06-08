<!DOCTYPE html>
<html>
  <body>
	<h1>Login</h1>
	<form method="post" action="processs.php">
    <?php if (isset($_GET['error'])) { ?>

<p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>
		First name:<br>
		<input type="text" name="first_name">
		<br>
		Last name:<br>
		<input type="text" name="last_name">
		<br><br>
		<input type="submit" name="save" value="submit"> <a href="insert.php">signup</a>
	</form>
  </body>
</html>
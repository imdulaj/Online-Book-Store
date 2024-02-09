<?php
	include_once 'header.php';
?>

	<div>
<form  class="forml" action="includes/login_inc.php" method="POST" onsubmit="return checkPassword()">
 <fieldset>
  <legend>Customer Login</legend><br>
  <label for="email">Email</label><br><br>
  <input type="email" id="email" name="mail" placeholder="Enter E-mail"  required><br><br><br>
  <label for="pwd">Password</label><br><br>
  <input type="password" id="pwd" name="pwd" placeholder="Enter Password"  required><br><br><br>
  <br/><button name="submit" type="submit"  class="loginbtn">Login</button>
 </fieldset>
</form>
	<?php
		if(isset($_GET["error"]))
		{
			if($_GET["error"] == "emptyinput")
			{
				echo '<div class="error1">Incomplete Field Available</div>';
			}
			else if($_GET["error"] == "invalidemail")
			{
				echo '<div class="error1">Invalid E-Mail</div>';
			}
			else if($_GET["error"] == "wronglogin2")
			{
				echo '<div class="error1">Incorrect Password</div>';
			}
			else if($_GET["error"] == "wronglogin1")
			{
				echo '<div class="error">Invalid E-Mail</div>';
			}
		}
	?>
</div>
<div class="sin">
<p>If you still don't have a account</p><br>
<button><a href="signup.php">Sign Up</a></button>
</div>

<?php
	include_once 'footer.php';
?>
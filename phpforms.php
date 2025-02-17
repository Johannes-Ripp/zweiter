<h1>By post method:</h1>
<form action="welcome_post.php" method="post">
Name: <input type="text" name="username"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

<h1>By get method:</h1>
<form action="welcome_get.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
<button type="reset" value="Reset">Reset as button</button>
<input type="reset" value="ResetAsInput">
</form>

<?php
function test(){
    echo($_POST["username"]);
};

?>

<h1>Post method which stays on THIS page:</h1>
<?php
  if(isset($_REQUEST["username_samePage"]) && $_REQUEST["username_samePage"]!="") {
     echo "Logged in as: ".$_REQUEST["username_samePage"].
          " with e-mail: " . $_REQUEST["email_samePage"]. "<br>";
  }
?>
<form action="phpforms.php" method="post">
Name: <input type="text" name="username_samePage"><br>
E-mail: <input type="text" name="email_samePage"><br>
<input type="submit" value="Log In">
</form>
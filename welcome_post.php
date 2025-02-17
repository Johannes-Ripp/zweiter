<html>
<body>
Welcome <?php echo $_POST["username"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
</body>
<form action="phpforms.php" method="get">
    <button type="submit">zurück</button>
</form>

</html>
<!doctype html>
<?php?>
<body>
  
  <form action"index.php" method="post">
        Name <input type="text" name ="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
      </form>
<body>
   Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
</body>

  </body>

</body>
</html>









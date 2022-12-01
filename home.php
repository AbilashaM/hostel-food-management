<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<header>
        <h1> FOOD REPARATORY</h1>
  </header>
  <div class="box">
    <div class="form">
      <form action='details.php' method="post"><br><br>

      
        <label for="date">DATE:</label>
        <input type="date" id="date" name="date" placeholder="DD/MM/YYYY" ><br><br><br>

<label for="bf">BREAKFAST:</label>

<select name="bf" id="bf">
  <option value="nf ">NORTH INDIAN</option>
  <option value="sf ">SOUTH INDIAN</option>
  <option value=" nd">NOT NEEDED</option>
</select><br><br>
<label for="ln">LUNCH:</label>

<select name="ln" id="ln">
  <option value="nf ">NORTH INDIAN</option>
  <option value="sf ">SOUTH INDIAN</option>
  <option value="nd ">NOT NEEDED</option>
</select><br><br>
<label for="dn">DINNER:</label>

<select name="dn" id="dn">
  <option value=" nf">NORTH INDIAN</option>
  <option value="sf ">SOUTH INDIAN</option>
  <option value="nd ">NOT NEEDED</option>
</select><br><br>
<input type="submit" id="submit"value="Submit">


     <a href="logout.php">Logout</a>
     </form>
</div>
</div>

</body>

</html>

<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>
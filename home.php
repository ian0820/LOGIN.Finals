<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])){

?>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
    <a href="logout.php">Logout</a>
</body>
</html>

<?php
}else{
    header("Location: Cabarrubias.php?");
    exit();
}
?>
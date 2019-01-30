<?php
session_start();
if($_SESSION['user']){
  header('Location: index.php');   
}

require_once 'bdd.php';

if(isset($_POST['username'])){
  if(!empty($_POST['username']) && !empty($_POST['password'])){

    $username = strip_tags($_POST['username']);
    $password = sha1(strip_tags($_POST['password']));
    
    $query = 'SELECT id, username from User where username=:username AND password=:password';
  
    $statement = $pdo->prepare($query);
    $statement->execute(['username' => $username, 'password' => $password]);
    $status = $statement->fetch();

    if ($status === false) {
      echo 'Incorrect informations';
    } else {
      $_SESSION['user'] = ['id' => $status['id'], 'username' => $status['username']];
      header('Location: index.php'); 
    }
  
  } else {
    echo "All field are required !";
  }
}

  require_once 'part/header.php';
?>

<h1>Connexion:</h1>
<form action ="login.php" method="post">
  User: <input type="text" name ="username" class="form-control">
  Password :<input type="password" name ="password" class="form-control">
  <button type="submit" class="btn btn-primary">Login</button>
  </form>


<?php 
require_once 'part/footer.php';
?>

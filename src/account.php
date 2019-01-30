<?php
if($_SESSION['user']){
  header('Location: index.php');   
}

require_once 'bdd.php';

if (!empty($_POST['username']) && !empty($_POST['password'])) {
  $username = strip_tags($_POST['username']);
  $password = sha1(strip_tags($_POST['password']));

  $query = 'INSERT INTO User(username,password) VALUES (:username, :password)';

  $statement = $pdo->prepare($query);
  $status = $statement->execute([':username' => $username, ':password' => $password]);


  if ($status === false) {
    echo 'ECHEC';
  } else {
    header('Location: login.php');
  }
}
require_once 'part/header.php';
?>

  <h1>New account:</h1>
  <form action ="account.php" method="post">
    <label for="username">Username : </label><input class="form-control" type="text" id='username' name="username">
    <label for="password">Password : </label><input class="form-control" type="password" id="password" name="password">
    <button type ="submit" class="btn btn-primary">Add acount</button>
  </form>

<?php 
require_once 'part/footer.php';
?>

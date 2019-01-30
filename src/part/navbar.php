
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <?php if(isset($_SESSION['user'])){ ?>
            <a class="nav-link" href="#">Gerer mes articles</a> 
        <?php } ?>
      </li>
      
    </ul>
    <ul class="navbar-nav my-2 my-lg-0">
        <li class="nav-item">
            <?php if(isset($_SESSION['user'])){ ?>
                <li class="nav-link"><?= $_SESSION['user']['username'] ?></li> 
                <li><a class="nav-link" href="disconnect.php">Disconnect</a></li>
            <?php } else { ?>
                <li><a class="nav-link" href="login.php">Login</a></li>
                <li><a class="nav-link" href="account.php">New Account</a></li>                
            <?php } ?>
        </li>
    </ul>
  </div>
</nav>

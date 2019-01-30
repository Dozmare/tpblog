<?php 
session_start();
require_once 'bdd.php';
require_once 'part/header.php';

function getArticles($pdo, int $numPage)
{
  $limit = ($numPage * 5) - 5;
  $query = 'select a.id, a.title, a.content, u.username as author from Article a, User u where a.author = u.id LIMIT 5 OFFSET :limit';
  $statement = $pdo->prepare($query);
  $statement->bindParam('limit', $limit, PDO::PARAM_INT);
  $statement->execute();
  return $statement->fetchAll();
}

function getNumberPage($pdo)
{
  $limit = ($numPage * 5) - 5;
  $query = 'select count(*) as numberOfArticle from Article';
  $statement = $pdo->prepare($query);
  $statement->execute();
  $result = $statement->fetch();

  return $result['numberOfArticle'] / 5;
}
$numPage = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$articles = getArticles($pdo, $numPage);

$nbPages = ceil(getNumberPage($pdo));

?>

  <?php foreach ($articles as $article) { ?>
    <div class="jumbotron">
      <h1 class="display-4"><?= $article['title'] ?></h1>
      <hr class="my-4">
      <p><?= $article['content'] ?></p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Comments</a>
    </div>
  <?php } ?>


  <nav aria-label="Page navigation example">
    <ul class="pagination">
    <?php for ($i = 1; $i <= $nbPages; $i++) { ?>
      <li class="page-item"><a class="page-link" href="index.php?page=<?= $i ?>"><?= $i ?></a></li>

    <?php } ?>
    </ul>
  </nav>
<?php 
require_once 'part/footer.php';
?>

<?php require_once('./includes/header.php'); ?>

<div class="fluid-container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-md-5 p-3">
    <?php require_once('./includes/navigation.php'); ?>
  </nav> <!--End nav-->
  <?php
  // get the search keyword
  if (isset($_POST['val'])) {
    $key = $_POST['val'];
    $url = 'http://localhost:8080/blog/search.php?key=' . $key;
    header("Location: {$url}");
  }
  ?>

  <section id="main" class="mx-5">
    <h2 class="my-3">Search Result for: <?php echo isset($_GET['key']) ? $_GET['key'] : '' ?></h2>
    <?php
    $status = "Published";
    $sql = "SELECT * FROM posts WHERE post_status = :status AND post_title LIKE :title ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
      ':status' => $status,
      ':title' => '%' . $_GET['key'] . '%'
    ]);

    $count = $stmt->rowCount();
    if ($count == 0) {
      echo "<div class='alert alert-danger'>No post found!</div>";
    } else {
      while ($post = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $post_id = $post['post_id'];
        $post_title = $post['post_title'];
        $post_des = substr($post['post_des'], 0, 250);
        $post_image = $post['post_image'];
        $post_date = $post['post_date'];
        $post_author = $post['post_author'];
        $post_cat_id = $post['post_cat_id'];
        $post_status = $post['post_status']; ?>
        <div class="row my-4 single-post">
          <img class="col col-lg-4 col-md-12" src="./img/<?php echo $post_image; ?>" alt="Image">
          <div class="media-body col col-lg-8 col-md-12">
            <h5 class="mt-0"><a href="single.php?id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h5>
            <span class="posted"><a href="http://localhost:8080/blog/categories.php?id=<?php echo $post_cat_id; ?>" class="category">
                <?php
                $sql1 = "SELECT * FROM categories WHERE cat_id = :id";
                $stmt1 = $pdo->prepare($sql1);
                $stmt1->execute([':id' => $post_cat_id]);
                while ($cat = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                  $cat_title = $cat['cat_title'];
                }
                echo $cat_title;
                ?>
              </a> Posted by <?php echo $post_author; ?> at <?php echo $post_date; ?></span>
            <p>
              <?php echo $post_des; ?>
            </p>
            <span><a href="single.php?id=<?php echo $post_id; ?>" class="d-block">See more &rarr;</a></span>
          </div>
        </div>
    <?php }
    }
    ?>
  </section>


  <!-- <ul class="pagination px-5">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active">
      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul> -->

  <?php require_once("./includes/footer.php"); ?>
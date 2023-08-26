<?php require_once("./includes/header.php"); ?>

<div class="fluid-container">
  <?php
  // get category id
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM categories WHERE cat_id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $id]);
    $count = $stmt->rowCount();
    if ($count == 0) {
      $error = true;
    }
    while ($cat = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $cat_t = $cat['cat_title'];
    }
  }
  ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-md-5 p-3">
    <?php require_once('./includes/navigation.php'); ?>
  </nav> <!--End nav-->

  <?php
  if (isset($error)) {
    echo "<div class='alert alert-danger'>Page not found!</div>";
    exit;
  }
  ?>

  <section id="main" class="mx-5">
    <h2 class="my-3">Category: <?php echo $cat_t; ?></h2>
    <?php
    $sql1 = "SELECT * FROM posts WHERE post_cat_id = :post_cat_id ";
    $stmt1 = $pdo->prepare($sql1);
    $stmt1->execute([':post_cat_id' => $id]);
    while ($post = $stmt1->fetch(PDO::FETCH_ASSOC)) {
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
          <h5 class="mt-0"><a href="http://localhost:8080/blog/single.php?id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h5>
          <span class="posted"><a href="http://localhost:8080/blog/categories.php?id=<?php echo $post_cat_id; ?>" class="category">
              <?php echo $cat_t; ?>
            </a> Posted by <?php echo $post_author; ?> at <?php echo $post_date; ?></span>
          <p>
            <?php echo $post_des; ?>
          </p>
          <span><a href="http://localhost:8080/blog/single.php?id=<?php echo $post_id; ?>" class="d-block">See more &rarr;</a></span>
        </div>
      </div>
    <?php } ?>
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

  <?php require_once('./includes/footer.php'); ?>
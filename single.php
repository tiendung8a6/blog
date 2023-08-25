<?php require_once('./includes/header.php'); ?>

<div class="fluid-container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-md-5 p-3">
    <?php require_once('./includes/navigation.php'); ?>
  </nav> <!--End nav-->

  <section id="main">
    <div class="post-single-information">
      <?php
      if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM posts WHERE post_id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        $count = $stmt->rowCount();
        if ($count == 1) {
          while ($post = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $post_title = $post['post_title'];
            $post_des = $post['post_des'];
            $post_image = $post['post_image'];
            $post_cat_id = $post['post_cat_id'];
            $post_date = $post['post_date'];
            $post_author = $post['post_author']; ?>
            <div class="post-single-info">
              <div class="post-single-80">
                <h1 class="category-title">Category:
                  <?php
                  $sql1 = "SELECT * FROM categories WHERE cat_id = :cat_id";
                  $stmt1 = $pdo->prepare($sql1);
                  $stmt1->execute([':cat_id' => $post_cat_id]);
                  while ($cat = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                    $cat_title = $cat['cat_title'];
                  }
                  echo $cat_title;
                  ?>
                </h1>
                <h2 class="post-single-title">Title: <?php echo $post_title; ?></h2>
                <div class="post-single-box">
                  Posted by <?php echo $post_author; ?> at <?php echo $post_date; ?>
                </div>
              </div>
            </div>
            <div class="post-main">
              <img class="d-block" style="width:100%;height:400px" src="./img/<?php echo $post_image; ?>" alt="<?php echo $post_tilte; ?>" />
              <p class="mt-4">
                <?php echo $post_des; ?>
              </p>
            </div>
    </div>
<?php
          }
        } else {
          echo "<p class='alert alert-danger pl-4'>No page found!</p>";
        }
      }
?>



<div class="comments">
  <h2 class="comment-count">3 Comments</h2>
  <div class="comment-box">
    <img src="./img/js.png" style="width:88px;height:88px;border-radius:50%" alt="Author photo" class="comment-photo">
    <div class="comment-content">
      <span class="comment-author"><b>Md. A. Barik</b></span>
      <span class="comment-date">14 Dec 2018, 12:00PM</span>
      <p class="comment-text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aliquid doloremque repellendus aliquam sint saepe molestiae. Voluptas animi ut maiores quos amet tempora officia! Laboriosam nemo laborum enim vel provident?
      </p>
    </div>
  </div>
  <div class="comment-box">
    <img src="./img/pdo.jpg" style="max-width:88px;max-height:88px;border-radius:50%" alt="Author photo" />
    <div class="comment-content">
      <span class="comment-author"><b>John Doe</b></span>
      <span class="comment-date">14 Dec 2018, 12:00PM</span>
      <p class="comment-text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aliquid doloremque repellendus aliquam sint saepe molestiae. Voluptas animi ut maiores quos amet tempora officia! Laboriosam nemo laborum enim vel provident?
      </p>
    </div>
  </div>
  <h3 class="leave-comment">Leave a comment</h3>
  <div class="comment-submit">
    <form action="#" class="comment-form">
      <input class="input" type="text" placeholder="Enter Full Name">
      <input class="input" type="email" placeholder="Enter valid email">
      <textarea name="comment" id="" cols="20" rows="5" placeholder="Comment text"></textarea>
      <input type="submit" value="Submit" class="comment-btn">
    </form>
  </div>
</div>
  </section>

  <?php require_once('./includes/footer.php'); ?>
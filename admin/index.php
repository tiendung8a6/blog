<?php require_once('./includes/header.php'); ?>

<?php
if (!isset($_COOKIE['_ua_'])) {
  header("Location: sign-in.php");
}
?>

<div class="fluid-container">
  <?php require_once('./includes/navigation.php'); ?>

  <section id="main" class="mx-lg-5 mx-md-2 mx-sm-2">
    <div class="d-flex flex-row justify-content-between">
      <h2 class="my-3">All Posts</h2>
      <a class="btn btn-secondary align-self-center d-block" href="new-post.php">Add New Post</a>
    </div>

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Post Title</th>
          <th scope="col">Post Category</th>
          <th scope="col">Post Status</th>
          <th scope="col" class="d-none d-md-table-cell">Comments</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      
      <tbody>
        <?php
        $sql = "SELECT * FROM posts";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $count = $stmt->rowCount();
        if ($count == 0) {
          echo "Not posts found!";
        } else {
          while ($post = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $post_id = $post['post_id'];
            $post_title = $post['post_title'];
            $post_cat_id = $post['post_cat_id'];
            $post_status = $post['post_status'];
            $post_comment = $post['post_comment']; ?>
            <tr>
              <td><?php echo $post_id; ?></td>
              <td><?php echo $post_title; ?></td>
              <td>
                <?php
                $sql1 = "SELECT * FROM categories WHERE cat_id = :id";
                $stmt1 = $pdo->prepare($sql1);
                $stmt1->execute([':id' => $post_cat_id]);
                while ($cat = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                  $cat_title = $cat['cat_title'];
                }
                echo $cat_title;
                ?>
              </td>
              <td><?php echo $post_status; ?></td>
              <td class="d-none d-md-table-cell">
                <a href="comments.php?id=<?php echo $post_id; ?>"><?php echo $post_comment; ?></a>
              </td>
              <td>
                <form action="edit-post.php" method="POST">
                  <input type="hidden" value="<?php echo $post_id; ?>" name="val" />
                  <input type="submit" name="delete-post" class="btn btn-link" value="Edit" />
                </form>
              </td>
              <td>
                <form action="index.php" method="POST">
                  <input type="hidden" value="<?php echo $post_id; ?>" name="val" />
                  <input type="submit" name="delete-post" value="Delete" class="btn btn-link" />
                </form>
              </td>
            </tr>
        <?php }
        }
        ?>

        <?php
        if (isset($_POST['delete-post'])) {
          $pid = $_POST['val'];
          $sql3 = "DELETE FROM posts WHERE post_id = :pid";
          $stmt = $pdo->prepare($sql3);
          $stmt->execute([
            ':pid' => $pid
          ]);
          header("Location: index.php");
        }
        ?>

      </tbody>
    </table>

  </section>
</div>

<?php require_once('./includes/footer.php'); ?>
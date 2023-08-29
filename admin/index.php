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
      <a class="btn btn-secondary align-self-center d-block" href="#">Add New Post</a>
    </div>

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Post Title</th>
          <th scope="col">Post Category</th>
          <th scope="col">Post Status</th>
          <th scope="col" class="d-none d-md-table-cell">Post Tags</th>
          <th scope="col" class="d-none d-md-table-cell">Comments</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>1</th>
          <td>How does it works?</td>
          <td>PHP</td>
          <td>Published</td>
          <td class="d-none d-md-table-cell">works, php</td>
          <td class="d-none d-md-table-cell">
            <a href="comments.html">2</a>
          </td>
          <td>
            <form action="#" method="POST">
              <button>Edit</button>
            </form>
          </td>
          <td>
            <form action="#">
              <button>Delete</button>
            </form>
          </td>
        </tr>
        <tr>
          <th>2</th>
          <td>Is NodeJS killing PHP?</td>
          <td>JavaScript</td>
          <td>Published</td>
          <td class="d-none d-md-table-cell">nodejs, php</td>
          <td class="d-none d-md-table-cell">
            <a href="#">1</a>
          </td>
          <td>
            <button>Edit</button>
          </td>
          <td>
            <button>Delete</button>
          </td>
        </tr>
      </tbody>
    </table>

  </section>

  <ul class="pagination px-lg-5">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>

</div>

<?php require_once('./includes/footer.php'); ?>
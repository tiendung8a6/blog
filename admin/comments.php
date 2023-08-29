<?php require_once('./includes/header.php'); ?>

<?php
  if(!isset($_COOKIE['_ua_'])){
    header("Location: sign-in.php");
  }
?>

<div class="fluid-container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-md-5">
    <a class="navbar-brand" href="./index.html">Admin</a>
    <ul class="navbar-nav d-flex flex-row">
      <li class="nav-item mr-2 active">
        <a class="nav-link" href="./index.html">Posts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./categories.html">Categories</a>
      </li>
    </ul>
  </nav> <!--End nav-->

  <section id="main" class="mx-lg-5 mx-md-2 mx-sm-2">
    <div class="d-flex flex-row justify-content-between">
      <h2 class="my-3">All Comments</h2>
    </div>

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">User name</th>
          <th scope="col">Comment</th>
          <th scope="col" class="d-none d-md-table-cell">In response to</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>Fine post! Keep posting like so.</td>
          <td class="d-none d-md-table-cell">
            <a href="posts.html">Post Title</a>
          </td>
          <td>
            <form action="comments.html" method="POST">
              <button>Delete</button>
            </form>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>MD. A. Barik + Tamanna Rahman</td>
          <td>Great post. so much helpful</td>
          <td class="d-none d-md-table-cell">
            <a href="posts.html">Post Title</a>
          </td>
          <td>
            <form action="comments.html" method="POST">
              <button>Delete</button>
            </form>
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
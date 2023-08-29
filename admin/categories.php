<?php require_once('./includes/header.php'); ?>

<?php
  if(!isset($_COOKIE['_ua_'])){
    header("Location: sign-in.php");
  }
?>

<div class="fluid-container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-md-5">
        <a class="navbar-brand" href="#">Admin</a>
        <ul class="navbar-nav d-flex flex-row">
            <li class="nav-item mr-2 active">
                <a class="nav-link" href="#">Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Categories</a>
            </li>
        </ul>
    </nav> <!--End nav-->

    <section id="main" class="mx-lg-5 mx-md-2 mx-sm-2">
        <form class="py-4">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Enter category name">
                </div>
                <div class="col">
                    <input type="submit" class="form-control btn btn-secondary" value="Add New Category">
                </div>
            </div>
        </form>
        <h2>All Categories</h2>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Category name</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>Mark</td>
                    <td><a href="#">Edit</a></td>
                    <td><a href="#">Delete</a></td>
                </tr>
                <tr>
                    <th>2</th>
                    <td>John</td>
                    <td><a href="#">Edit</a></td>
                    <td><a href="#">Delete</a></td>
                </tr>
            </tbody>
        </table>
    </section>

</div>
<?php require_once('./includes/footer.php'); ?>
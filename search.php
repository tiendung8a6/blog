<?php require_once('./includes/header.php'); ?>

<div class="fluid-container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-md-5 p-3">
    <?php require_once('./includes/navigation.php'); ?>
  </nav> <!--End nav-->

  <section id="main" class="mx-5">
    <h2 class="my-3">Search Result: Search Keyword</h2>
    <div class="row my-4 single-post">
      <img class="col col-lg-4 col-md-12" src="./img/php.png" alt="Image">
      <div class="media-body col col-lg-8 col-md-12">
        <h5 class="mt-0"><a href="#">Should I learn PHP in 2019? </a></h5>
        <span class="posted"><a href="categories.html" class="category">PHP</a> Posted by John at 12, SEP 2019</span>
        <p>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        </p>
        <span><a href="#" class="d-block">See more &rarr;</a></span>
      </div>
    </div>
    <div class="row my-4 single-post">
      <img class="col col-lg-4 col-md-12" src="./img/nodejs.png" alt="Image">
      <div class="col col-lg-8 col-md-12">
        <h5 class="mt-0"><a href="#">Is NodeJS killing PHP?</a></h5>
        <span class="posted"><a href="categories.html" class="category">Laravel</a> Posted by John at 12, SEP 2019</span>
        <p>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        </p>
        <span><a href="#" class="d-block">See more &rarr;</a></span>
      </div>
    </div>
    <div class="row my-4 single-post">
      <img class="col col-lg-4 col-md-12" src="./img/jquery.png" alt="Image">
      <div class="col col-lg-8 col-md-12">
        <h5 class="mt-0"><a href="#">Is jQuery still worth learning?</a></h5>
        <span class="posted"><a href="categories.html" class="category">NOdeJS</a> Posted by John at 12, SEP 2019</span>
        <p>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        </p>
        <span><a href="#" class="d-block">See more &rarr;</a></span>
      </div>
    </div>
  </section>

  <ul class="pagination px-5">
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
  </ul>

  <?php require_once("./includes/footer.php"); ?>
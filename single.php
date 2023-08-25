<?php require_once('./includes/header.php'); ?>

<div class="fluid-container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-md-5 p-3">
    <?php require_once('./includes/navigation.php'); ?>
  </nav> <!--End nav-->

  <section id="main">
    <div class="post-single-information">
      <div class="post-single-info">
        <div class="post-single-80">
          <h1 class="category-title">Category: JavaScript</h1>
          <h2 class="post-single-title">Title: Does anybody still use jQuery</h2>
          <div class="post-single-box">
            Posted by Brad 17 Dec, 12:00PM
          </div>
        </div>
      </div>
      <div class="post-main">
        <img class="d-block" style="width:100%;height:400px" src="./img//security.png" alt="photo" />
        <p class="mt-4">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta distinctio unde eligendi nostrum voluptate laudantium expedita, rem error consectetur aperiam. Iusto nesciunt assumenda quibusdam exercitationem rem harum possimus vitae. Excepturi?Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut aliquam natus deleniti perspiciatis, rerum suscipit impedit est neque vitae, voluptatem minus aspernatur temporibus cupiditate minima molestias fugiat dolorem omnis placeat?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa nostrum aperiam ipsam asperiores iusto, numquam distinctio perferendis laborum reiciendis nihil provident veritatis! Ut aliquid assumenda officia impedit corporis, eius deserunt?
        </p>
      </div>
    </div>
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
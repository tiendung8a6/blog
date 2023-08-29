<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-md-5">
    <?php $filename = basename($_SERVER["SCRIPT_FILENAME"]); ?>
    <a class="navbar-brand" href="index.php">Admin</a>
    <ul class="navbar-nav d-flex flex-row">
        <li class="nav-item mr-2 <?php echo $filename == 'index.php' ? 'active' : '' ?>">
            <a class="nav-link" href="index.php">Posts</a>
        </li>
        <li class="nav-item <?php echo $filename == 'categories.php' ? 'active' : '' ?>">
            <a class="nav-link" href="categories.php">Categories</a>
        </li>
    </ul>
</nav> <!--End nav-->
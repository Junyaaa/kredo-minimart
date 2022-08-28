<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a href="" class="navbar-brand">
        <h1 class="h4">Minimart-Catalog</h1>
    </a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#main-menu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="main-menu">
        <ul class="navbar-nav">
            <li class="nav-item">
                    <a href="products.php" class="nav-link">Products</a>
            </li>
            <li class="nav-item">
                    <a href="sections.php" class="nav-link">Sections</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                    <a href="profile.php" class="nav-link font-weight-bold"><?= $_SESSION['full_name'] ?></a>
            </li>
            <li class="nav-item">
                    <a href="logout.php" class="nav-link">Logout</a>
            </li>
        </ul>
    </div>
</nav>
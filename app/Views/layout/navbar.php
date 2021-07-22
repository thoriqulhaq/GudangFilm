<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        if (is_array($category) || is_object($category)) {
                            foreach ($category as $genre => $value) : ?>
                                <li><a class="dropdown-item" href="/Genre/<?= $value; ?>"><?= $value; ?></a></li>
                        <?php
                            endforeach;
                        } ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Developer</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
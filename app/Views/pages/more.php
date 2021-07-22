<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card m-4 shadow mt-5">
                <div class="row g-0 m-4">
                    <div class="col-md-2">
                        <img src="<?= $film['cover']; ?>" class="img-fluid rounded border shadow" alt="<?= $film['slug']; ?>">
                    </div>
                    <div class="col-md-9 ms-2 me-2">
                        <div class="card-body">
                            <h5 class="card-title"><?= $film['title']; ?> (<?= $film['year']; ?>)</h5>
                            <p class="text-muted"><?= $film['duration']; ?> mins | <?= $film['genre']; ?> | <a href=" <?= $film['source']; ?>" class="text-decoration-none text-muted">IMBD</a> </p>
                            <p class="card-text"><?= $film['description']; ?></p>
                            <p class="card-text position-absolute bottom-0 end-0 p-4"><small class="text-muted"><?= $film['created_at']; ?></small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown m-4 mt-5">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Download
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Google Drive</a></li>
                    <li><a class="dropdown-item" href="#">Mega</a></li>
                    <li><a class="dropdown-item" href="#">UpToBox</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
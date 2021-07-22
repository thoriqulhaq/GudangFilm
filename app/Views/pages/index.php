<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-2 mb-5">
        <?php foreach ($film as $f) : ?>
            <div class="col d-flex justify-content-center">
                <div class="card mt-4 mb-4 ms-2 me-2 shadow text-center" style="width: 20rem;">
                    <div class="p-3">
                        <img src="<?= $f['cover']; ?>" class="card-img-top rounded border cover" alt="<?= $f['slug']; ?>">
                    </div>
                    <div class="card-body">
                        <p class="text-muted"><?= $f['genre']; ?></p>
                        <h5 class="card-title"> <?= $f['title']; ?> (<?= $f['year']; ?>) </h5>
                        <a href="/Movie/<?= $f['slug']; ?>" class="btn btn-dark mt-4">More</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection(); ?>
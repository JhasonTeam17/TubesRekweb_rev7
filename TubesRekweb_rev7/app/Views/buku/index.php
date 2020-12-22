<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-4 text-gray-800 text-center">Daftar Buku</h1>
                <div class="row">
                    <div class="card">
                        <img src="/img/boruto.jpg" width="125" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Boruto</h5>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <?= $this->endSection(); ?>
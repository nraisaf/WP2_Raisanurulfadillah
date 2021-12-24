    <div class="bg">
        <h1>Selamat Datang di Website<br>Pariwisata Kota Bogor</h1>
    </div>
    <div class="container-fluid mt-3">
        <div class="wisata" id="wisata">
            <h1 class="text-center">Wisata Kota Bogor</h1>
            <?php
            foreach ($wisata as $w) { ?>
                <div class="row mt-5">
                    <div class="col-sm-3">
                        <img src="<?php echo base_url() ?>assets/img/upload/<?= $w['gambar']; ?>" alt="..." class="img-thumbnail">
                    </div>
                    <div class="col-sm-9">
                        <h4><?= $w['nama_wisata']; ?></h4>
                        <p><?= $w['keterangan']; ?></p>
                        <a href="" class="btn btn-success">Lihat Selengkapnya</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    
<div class="row">
        <div class="col-sm-4 offset-1">
            <img src=" <?= base_url('assets/'); ?>img/2.jpg" class="img-thumbnail" alt="...">
        </div>
        <div class="col-sm-7">
            <?php
            foreach ($wisata as $w) { ?>
                <h4><?= $w['nama_wisata']; ?></h4>
                <p><strong><?= $w['kategori']; ?></strong></p>
                <p><?= $w['alamat']; ?></p>
                <p><?= $w['keterangan']; ?></p>
                <a href="" class="btn btn-success"></a>
            <?php } ?>
        </div>
    </div>
<h3 class="mb-4">Dashboard Admin</h3>
<?php 
    $sql="SELECT * FROM barang WHERE stok <= 3";
    $row = $config->prepare($sql);
    $row->execute();
    $r = $row->rowCount();
    if($r > 0){
        echo "
        <div class='alert alert-warning d-flex align-items-center' role='alert'>
            <i class='bi bi-info-circle-fill me-2'></i>
            Ada <span class='fw-bold text-danger'>$r</span> barang yang stoknya kurang dari 3. Silahkan pesan lagi!
            <a href='index.php?page=barang&stok=yes' class='ms-auto text-decoration-none'>Tabel Barang <i class='bi bi-arrow-right'></i></a>
        </div>";
    }
?>
<?php $hasil_barang = $lihat->barang_row(); ?>
<?php $hasil_kategori = $lihat->kategori_row(); ?>
<?php $stok = $lihat->barang_stok_row(); ?>
<?php $jual = $lihat->jual_row(); ?>

<div class="row g-4">
    <!-- Card Barang -->
    <div class="col-md-3">
        <div class="card shadow border-0">
            <div class="card-header bg-primary text-white text-center">
                <h6><i class="fas fa-cubes me-2"></i>Nama Barang</h6>
            </div>
            <div class="card-body text-center">
                <h1 class="display-4"><?php echo number_format($hasil_barang); ?></h1>
            </div>
            <div class="card-footer text-center">
                <a href='index.php?page=barang' class="text-decoration-none">Tabel Barang <i class='bi bi-arrow-right'></i></a>
            </div>
        </div>
    </div>

    <!-- Card Stok -->
    <div class="col-md-3">
        <div class="card shadow border-0">
            <div class="card-header bg-primary text-white text-center">
                <h6><i class="fas fa-chart-bar me-2"></i>Stok Barang</h6>
            </div>
            <div class="card-body text-center">
                <h1 class="display-4"><?php echo number_format($stok['jml']); ?></h1>
            </div>
            <div class="card-footer text-center">
                <a href='index.php?page=barang' class="text-decoration-none">Tabel Barang <i class='bi bi-arrow-right'></i></a>
            </div>
        </div>
    </div>

    <!-- Card Terjual -->
    <div class="col-md-3">
        <div class="card shadow border-0">
            <div class="card-header bg-primary text-white text-center">
                <h6><i class="fas fa-upload me-2"></i>Telah Terjual</h6>
            </div>
            <div class="card-body text-center">
                <h1 class="display-4"><?php echo number_format($jual['stok']); ?></h1>
            </div>
            <div class="card-footer text-center">
                <a href='index.php?page=laporan' class="text-decoration-none">Tabel Laporan <i class='bi bi-arrow-right'></i></a>
            </div>
        </div>
    </div>

    <!-- Card Kategori -->
    <div class="col-md-3">
        <div class="card shadow border-0">
            <div class="card-header bg-primary text-white text-center">
                <h6><i class="fa fa-bookmark me-2"></i>Kategori Barang</h6>
            </div>
            <div class="card-body text-center">
                <h1 class="display-4"><?php echo number_format($hasil_kategori); ?></h1>
            </div>
            <div class="card-footer text-center">
                <a href='index.php?page=kategori' class="text-decoration-none">Tabel Kategori <i class='bi bi-arrow-right'></i></a>
            </div>
        </div>
    </div>
</div>

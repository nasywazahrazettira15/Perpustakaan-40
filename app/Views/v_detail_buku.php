<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><?= $judul ?></h3>
        </div>

        <div class="card-body">
 
        <div class="row">
            <div class="col-sm-4">
                <img class="img-fluid" src="<?= base_url('cover/' . $buku['cover']) ?>" width="800px" height="1000px">
            </div>
            <div class="col-sm-8">
                <table class="table">
                    <tr>
                        <th>Kode</th>
                        <th>:</th>
                        <td><h5><?= $buku['kode_buku'] ?></h5></td>
                    </tr>
                    <tr>
                        <th width="150px">Judul Buku </th>
                        <th  width="20px">:</th>
                        <td>
                            <h5 class="text-primary"><?= $buku['judul_buku'] ?></h5>
                        </td>
                    </tr>
                    <tr>
                        <th>Kategori</th>
                        <th>:</th>
                        <td><h5><?= $buku['nama_kategori'] ?></h5></td>
                    </tr>
                    <tr>
                        <th>Penulis</th>
                        <th>:</th>
                        <td><h5><?= $buku['nama_penulis'] ?></h5></td>
                    </tr>
                    <tr>
                        <th>Penerbit</th>
                        <th>:</th>
                        <td><h5><?= $buku['nama_penerbit'] ?></h5></td>
                    </tr>
                    <tr>
                        <th>Tahun</th>
                        <th>:</th>
                        <td><h5><?= $buku['tahun'] ?></h5></td>
                    </tr>
                    <tr>
                        <th>ISBN</th>
                        <th>:</th>
                        <td><h5><?= $buku['isbn'] ?></h5></td>
                    </tr>
                    <tr>
                        <th>Bahasa</th>
                        <th>:</th>
                        <td><h5><?= $buku['bahasa'] ?></h5></td>
                    </tr>
                    <tr>
                        <th>Halaman</th>
                        <th>:</th>
                        <td><h5><?= $buku['halaman'] ?></h5></td>
                    </tr>
                    <tr>
                        <th>Lokasi</th>
                        <th>:</th>
                        <td><h5><?= $buku['nama_rak'] ?> Lantai <?= $buku['lantai_rak']?></h5></td>
                    </tr>
                    <tr>
                        <th>Jumlah</th>
                        <th>:</th>
                        <td><span class="badge badge-success"><?= $buku['jumlah'] ?></td></span></td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-12">
                <?= $buku['deskripsi'] ?>
            </div>   
        </div>


        </div>

    </div>
</div>
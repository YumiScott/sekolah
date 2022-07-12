<?php 

if(isset($_POST['edit'])) {
    if( editBerita($_POST) > 0 ) {
        echo "
        <script>
            alert('Data berhasil diubah');
            document.location.href = '?hal=berita';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal diubah');
            document.location.href = '?hal=edit-berita';
        </script>
        ";
    }
}


$id = $_GET['idb'];
$edit = query("SELECT * FROM berita WHERE id_berita = $id")[0];
?>

<div class="section-header">
    <div class="section-header-back">
        <a href="?hal=berita" class="btn btn-icon btn-outline-dark"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Buat Berita</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="?hal=">Home</a></div>
        <div class="breadcrumb-item"><a href="?hal=berita">Semua Berita</a></div>
        <div class="breadcrumb-item">Edit Berita</div>
    </div>
</div>
<div class="section-body">
    <h2 class="section-title">Edit berita</h2>
    <p class="section-lead">
        Dihalaman ini kamu dapat mengedit berita <br>
        NB : Edit status menjadi publish agar tampil di halaman utama
    </p>

    <form action="" method="post" enctype="multipart/form-data">
    <div class="row">
        
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-dark">Buat Berita</h4>
                    </div>
                    <div class="card-body">
                        <input type="hidden" name="id" value="<?= $edit['id_berita'] ?>">
                        <input type="hidden" name="gambarLama" value="<?= $edit['gambar'] ?>">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="judul" class="form-control" value="<?= $edit['judul'] ?>">
                            </div>
                        </div>
                        <!-- <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Penulis</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="penulis" class="form-control inputtags">
                            </div>
                        </div> -->
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Konten</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea name="konten" class="summernote-simple"><?= $edit['konten'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar</label>
                            <div class="col-sm-12 col-md-7">
                                <div id="image-preview" class="image-preview">
                                    <img src="../assets/img/berita/<?= $edit['gambar'] ?>" alt="" class="image-preview" width="100%">
                                    <label for="image-upload" id="image-label">Choose File</label>
                                    <input type="file" name="gambar" id="image-upload" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                            <div class="col-sm-12 col-md-7">
                                <select name="status" class="form-control selectric">
                                    <option selected="<?= $edit['status'] ?>" disabled><?= $edit['status'] ?> (Saat ini)</option>
                                    <option>Pending</option>
                                    <option>Publish</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button type="submit" name="edit" class="btn btn-outline-dark">Edit Berita</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
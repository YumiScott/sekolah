<?php 
if( isset($_POST['submit']) ) {

    if( regisGuru($_POST) > 0 ) {
        echo "<script>
                    alert('Berhasil membuat akun');
                    document.location.href = '?hal=guru';
                </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>
<div class="section-header">
    <div class="section-header-back">
        <a href="?hal=admin" class="btn btn-icon btn-outline-dark"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Tambah Guru</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="?hal=">Home</a></div>
        <div class="breadcrumb-item"><a href="?hal=admin">Guru</a></div>
        <div class="breadcrumb-item">Tambah Guru</div>
    </div>
</div>
<div class="section-body">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="nama" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Username</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="uname" class="form-control inputtags" required>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Kelamin</label>
                            <div class="col-sm-12 col-md-7">
                                <select name="jk" class="form-control selectric">
                                    <option>Laki - Laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="password" name="pass" class="form-control inputtags" required>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Konfirmasi Password</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="password" name="pass2" class="form-control inputtags" required>
                            </div>
                        </div>
                        
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button type="submit" name="submit" class="btn btn-outline-dark">Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
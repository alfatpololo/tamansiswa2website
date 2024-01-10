<?php

require_once "../config.php";

$title = "Tambah User - SMK Tamansiswa 2";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah User</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a class="link-primary text-decoration-none" href="../index.php">Home</a></li>
                <li class="breadcrumb-item active">Tambah User</li>
            </ol>
            <div class="card">
                <div class="card-header">
                    <span class="h5"><i class="fa-solid fa-circle-plus"></i> Tambah User</span>
                    <button type="submit" name="simpan" class="btn btn-primary float-end"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                    <button type="reset" name="reset" class="btn btn-danger float-end me-3"><i class="fa-solid fa-arrows-rotate"></i> Reset</button>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <div class="mb-3 row">
                                <label for="username" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input pattern="[A-Za-z0-9]{3,}" title="Minimal 3 karakter, Kombinasi Huruf besar, kecil dan angka !" type="text" class="form-control border-0 border-bottom" id="username" name="username" maxlength="20" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control border-0 border-bottom" id="nama" name="nama" maxlength="20" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                                <div class="col-sm-10">
                                    <select name="jabatan" id="jabatan" class="form-select border-0 border-bottom" required>
                                        <option value="" selected>--Pilih Jabatan--</option>
                                        <option value="Kepsek" selected>Kepsek</option>
                                        <option value="Staff TU" selected>Staff TU</option>
                                        <option value="Guru" selected>Guru Mata Pelajaran</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control border-0 border-bottom" placeholder="Domisili" required></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="col-4 text-center px-5 mt-4">
                            <img src="../asset/image/default.png" alt="gambar user" width="40%" class="mb-3">
                            <input type="file" name="image" class="form-control form-control-sm">
                            <small class="text-secondary">.jpg.jpeg.png | Max 1MB</small>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </main>

    <?php

    require_once "../template/footer.php";

    ?>

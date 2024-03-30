<?php
require_once "./class-nilai-mahasiswa.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center mb-4">Form Nilai Ujian</h2>
                <form method="post" action="">
                    <div class="form-group row">
                        <label for="nim" class="col-sm-3 col-form-label">NIM</label>
                        <div class="col-sm-9">
                            <input id="nim" name="nim" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="matkul" class="col-sm-3 col-form-label">Pilih MK</label>
                        <div class="col-sm-9">
                            <select id="matkul" name="matkul" class="custom-select" required="required">
                                <option>Data Warehouse</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai" class="col-sm-3 col-form-label">Nilai</label>
                        <div class="col-sm-9">
                            <input id="nilai" name="nilai" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-3 col-sm-9">
                            <input type="submit" name="proses" class="btn btn-success" value="Simpan">
                        </div>
                    </div>
                </form>
                <hr>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $mahasiswa = new NilaiMahasiswa($_POST['nim'], $_POST['matkul'], $_POST['nilai']);
                    echo "<br> NIM: " . $mahasiswa->nim;
                    echo "<br> Mata Kuliah: " . $mahasiswa->matkul;
                    echo "<br> Nilai: " . $mahasiswa->nilai;
                    echo "<br> Hasil Ujian: " . $mahasiswa->hasil();
                    echo "<br> Grade: " . $mahasiswa->kelulusan();
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>

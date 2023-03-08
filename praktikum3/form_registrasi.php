<?php require_once "proses_registrasi.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h2 class="text-center" style="margin-bottom: 5%; margin-top: 5%;">Form Registrasi</h2>
        <form action="form_registrasi.php" method="POST">
        <div class="form-group row">
            <label for="nim" class="col-4 col-form-label">NIM</label> 
            <div class="col-8">
            <input id="nim" name="nim" placeholder="Masukkan NIM" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label> 
            <div class="col-8">
            <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label> 
            <div class="col-8">
            <input id="email" name="email" placeholder="Masukkan Email" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label> 
            <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="jenkel" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="Pria" required="required"> 
                <label for="jenis_kelamin_0" class="custom-control-label">Pria</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="jenkel" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="Wanita" required="required"> 
                <label for="jenis_kelamin_1" class="custom-control-label">Wanita</label>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="domisili" class="col-4 col-form-label">Domisili</label> 
            <div class="col-8">
            <select id="domisili" name="domisili" class="custom-select" required="required">
                <?php foreach($domisili as $dom) { ?>
                <option value="<?= $dom; ?>"><?= $dom; ?></option>
                <?php } ?>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="program_studi" class="col-4 col-form-label">Program Studi</label> 
            <div class="col-8">
            <select id="program_studi" name="program_studi" class="custom-select" required="required">
            <?php foreach($prodi as $key => $value) { ?>
                <option value="<?= $key; ?>"><?= $value; ?></option>
                <?php } ?>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Skill Programming</label> 
            <div class="col-8">
            <?php foreach($skills as $key => $value) { ?> 
            <div class="custom-control custom-checkbox custom-control-inline">
                <input name="skill[]" id="<?= $key; ?>" type="checkbox" class="custom-control-input" value="<?= $key; ?>">
                <label for="<?= $key; ?>" class="custom-control-label"><?= $key; ?></label>
            </div>
            <?php } ?>
            </div>
        </div> 
        <div class="form-group row mt-5 text-center">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary col-md-4">Submit</button>
            </div>
        </div>
        </form>
    <div class="row" style="margin-top: 10%; ">
		<div class="col-md-12">
			<table class="table table-bordered">
				<tr class="text-center bg-primary text-light">
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jenis Kelamin</th>
                    <th>Domisili</th>
                    <th>Program Studi</th>
                    <th>ٍSkill Programing</th>
                </tr>
                <?php
                    if(isset($_POST['submit'])){
                    $nim = $_POST['nim'];
                    $nama = $_POST['nama'];
                    $email = $_POST['email'];
                    $jenis_kelamin = $_POST['jenkel'];
                    $domisili = $_POST['domisili'];
                    $prodi = $_POST['program_studi'];
                    $skill_user = $_POST['skill'];
                ?>
                <tr class="text-center">
                <td><?= $nim; ?></td>
                <td><?= $nama; ?></td>
                <td><?= $email; ?></td>
                <td><?= $jenis_kelamin; ?></td>
                <td><?= $domisili; ?></td>
                <td><?= $prodi; ?></td>
                <td>
                    <?php foreach($skill_user as $skill){
                        echo $skill . ", ";
                    } ?>
                </td>
                </tr>
                <?php } ?>
			</table>
		</div>
	</div>
</div>
</body>
</html>
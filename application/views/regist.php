
<!DOCTYPE html>
<html lang="en">
<head>
<title>Register Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?= base_url('assets/favicon.ico')?>" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>">

<link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">

<link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/iconic/css/material-design-iconic-font.min.css')?>">

<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/animate/animate.css')?>">

<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/css-hamburgers/hamburgers.min.css')?>">

<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/animsition/css/animsition.min.css')?>">

<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/select2/select2.min.css')?>">

<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/daterangepicker/daterangepicker.css')?>">

<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/util.css')?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css')?>">

<meta name="robots" content="noindex, follow">
<body style="background-color: #666666;">
<div class="limiter">
<div class="container-login100">
    
<div class="wrap-login100">
    
<form class="login100-form validate-form"  action="<?= base_url('register/cek')?>" method="post">

<span class="login100-form-title p-b-43">
Register
</span>
<?php  
        if(!empty($_SESSION['error'])){
            echo '
            <div  style="text-align:center; color:#FFFFFF">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="icofont icofont-close-line-circled"></i>
            </button>
            <strong style="color:red">Login Failled</strong> <br>Wrong username and password 
        </div>  
        <br>
            ';
        }   
        ?>  
<div class="wrap-input100 validate-input" data-validate = "Enter Nama" >
<input class="input100" type="text" placeholder="Nama" name="nama">
</div>

<div class="wrap-input100 validate-input" data-validate="Username is required">
<input class="input100" type="username" placeholder="Username" name="username">
</div>

<div class="wrap-input100 validate-input" data-validate="Password is required">
<input class="input100" type="password" placeholder="Password" name="password">
</div>

<div class="wrap-input100 validate-input" data-validate = "Enter Asal sekolah required" >
<input class="input100" type="text" placeholder="Asal sekolah" name="asal_sekolah">
</div>

<div class="wrap-input100 validate-input" data-validate = "Jurusan yang di pilih required" >
    <select class="input100" name="Jurusan_yang_di_pilih">
        <?php foreach($data as $d){?>
        
        <option value="<?= $d->nama?>"><?= $d->nama?></option>
        <?php } ?>
    </select>
<!-- <input class="input100" type="text" placeholder="Asal Jurusan yang di pilih" name="Jurusan_yang_di_pilih"> -->
</div>

<div class="wrap-input100 validate-input" data-validate="Alamat is required">
<input class="input100" placeholder="alamat" name="alamat">
</div>

<div class="wrap-input100 validate-input" data-validate="No HP is required">
<input class="input100" placeholder="No Hp" name="no_hp">
</div>

<div class="flex-sb-m w-full p-t-3 p-b-32">


</div>
<div class="container-login100-form-btn">
<button class="login100-form-btn"  type="submit" >
Register
</button>

</div>

</form>
<div class="login100-more" style="background-image: url('<?= base_url('assets/images/bg.png')?>');">
</div>
<div class="text-center p-t-90">
						<a class="txt1" href="/pandora">
                        have account? Login
						</a>
					</div>
</div>
</div>
</div>

<script src="<?= base_url('assets/vendor/jquery/jquery-3.2.1.min.js')?>"></script>

<script src="<?= base_url('assets/vendor/animsition/js/animsition.min.js')?>"></script>

<script src="<?= base_url('assets/vendor/bootstrap/js/popper.js')?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js')?>"></script>

<script src="<?= base_url('assets/vendor/select2/select2.min.js')?>"></script>

<script src="<?= base_url('assets/vendor/daterangepicker/moment.min.js')?>"></script>
<script src="<?= base_url('assets/vendor/daterangepicker/daterangepicker.js')?>"></script>

<script src="<?= base_url('assets/vendor/countdowntime/countdowntime.js')?>"></script>

<script src="<?= base_url('assets/js/main.js')?>"></script>
</body>
</html>

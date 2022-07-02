
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

<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.css')?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/dataTables.bootstrap4.min.css')?>">




<meta name="robots" content="noindex, follow">
<body style="background-color: #666666;">
<div class="limiter">
<div class="container-login100">
    
<div class="wrap-login100">
    
<form class="login100-form validate-form" >
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No Hp</th>
                <th>Nama</th>
                <th>Status</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $d){?>
            <tr>
                <td><?= $d->no_hp?></td>
                <td><?= $d->nama?></td>
                <td><?php if($d->status == 1){ echo "Belum Dikonfirmasi Admin"; }else{ echo "Data sudah di acc admin, Silahkan Login <a href=".base_url('').">login</a>"; } ?></td>
             </tr>
             <?php } ?>
</tbody>
    </table>

</form>


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

<script src="<?= base_url('assets/js/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('assets/js/jquery.dataTables.min.js')?>"></script>
</body>

<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
    </script>
</html>

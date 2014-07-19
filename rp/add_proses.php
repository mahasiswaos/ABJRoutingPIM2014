<link href="assets/css/bootstrap.css" 
      rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap-theme.css" 
      rel="stylesheet" type="text/css">

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
<style type="text/css">
    body {
    padding-left: 1em;
    font-family: Georgia, "Times New Roman",
    Times, serif;
    color: black;
    background-color: black }
</style>

<br/>
<?php
require './init_routeros.php';

$addr = $_POST['address'];
$grp = $_POST['group'];
$prty = $_POST['priority'];

$API->write("/routing/pim/rp/add", false);
$API->write("=address=" . $addr, false);
$API->write("=group=" . $grp, false);
$API->write("=priority=" . $prty);
$var = $API->read();
?>

<div class="container">
    <div class="panel panel-danger">
        <div class="panel-heading">
            Informasi Penambahan Address pada Routing PIM RP!
        </div>
        <div class="panel-body">
            Address Routing PIM RP dengan ID <?php echo $addr; ?>
            telah berhasil di tambahkan pada Mikrotik.
            <br/>
            <br/>
            <a class="btn btn-info" href="view.php">
                <i class="glyphicon glyphicon-backward"></i>
                Kembali
            </a>
        </div>
    </div>
</div>

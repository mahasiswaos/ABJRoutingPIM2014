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

<?php
require './init_routeros.php';
//
$id = $_GET['id'];
//
$API->write("/routing/pim/mrib/remove", false);
$API->write("=.id=" . $id); 
$del = $API->read();
?>

<br/>
<div class="container">
    <div class="panel panel-danger">
        <div class="panel-heading">
            Informasi Penghapusan routing mrib!
        </div>
        <div class="panel-body">
            Address dengan ID <strong><?php echo $id ?></strong> 
            telah dihapus pada Mikrotik.
            <br/>
            <br/>
            <a class="btn btn-info" href="view.php">
                <i class="glyphicon glyphicon-backward"></i>
                Kembali
            </a>
        </div>
    </div>
</div>

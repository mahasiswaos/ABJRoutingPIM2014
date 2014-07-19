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

$scopezone = $_POST['scope-zone'];
$int = $_POST['interface'];
$prty = $_POST['priority'];

$API->write("/routing/pim/bsr-candidates/add", false);
$API->write("=scope-zone=$scopezone", false);
$API->write("=interface=$int", false);
$API->write("=priority=$prty");
$var = $API->read();
?>

<div class="container">
    <div class="panel panel-danger">
        <div class="panel-heading">
            Informasi Penambahan Routing PIM!
        </div>
        <div class="panel-body">
            Routing PIM dengan ID <?php echo $scopezone; ?>
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

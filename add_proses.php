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
if (isset($_POST['submit']))
{
require './init_routeros.php';

$Dst = $_POST['Destination'];
$Gtw = $_POST['Gateway'];
$Mtc = $_POST['Matric'];

$API->write("/routing/pim/mrib/add", false);
$API->write("=destination=$Dst", false);
$API->write("=gateway=$Gtw", false);
$API->write("=metric=$Mtc");
$var = $API->read();
}
?>
 
<div class="container">
    <div class="panel panel-danger">
        <div class="panel-heading">
            Informasi Penambahan Address!
        </div>
        <div class="panel-body">
            Address dengan ID <?php echo $Dst; ?>
            telah berhasil di tambahkan pada Mikrotik cok.
            <br/>
            <br/>
            <a class="btn btn-info" href="view.php">
                <i class="glyphicon glyphicon-backward"></i>
                come back
            </a>
        </div>
    </div>
</div>

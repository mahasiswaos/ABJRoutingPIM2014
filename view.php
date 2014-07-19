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
    color: yellow;
    background-color: black }
</style>

<?php
require './init_routeros.php';
$API->write("/routing/pim/mrib/getall");
$hasil = $API->read();
//echo "<pre>";
//print_r($hasil);
//echo "</pre>";
?>

<div class="container">
    <br/>
    <a class="btn btn-info" href="add.php">Tambah</a>
    <a class="btn btn-info" href="home.php">
	<i class="glyphicon glyphicon-backward"></i>Kembali</a>
	
	<br/> 
	<br/>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Destination</th>
                <th>Gateway</th>
                <th>Matric</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hasil as $val) { ?>
                <tr>
                    <td><?php echo $val['.id'] ?></td>
                    <td><?php echo $val['destination'] ?></td>
                    <td><?php echo $val['gateway'] ?></td>
                    <td><?php echo $val['metric'] ?></td>
                    
					<td>
                        <a href="edit.php?id=<?php echo $val['.id'] ?>" class="btn btn-info">
                            <i class="glyphicon glyphicon-cog"></i>
                            Edit
                        </a>
						<a href="delete.php?id=<?php echo $val['.id'] ?>" class="btn btn-info">
                            <i class="glyphicon glyphicon-trash"></i>
                            Delete
                        </a>
					</td>
                </tr>
			
            <?php 
            } 
            ?>
        </tbody>
    </table>
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

<br/>
<div class="container">

    <?php
    require './init_routeros.php';

    $id = $_GET['id'];

    $API->write("/routing/pim/mrib/print", false);
    $API->write("?.id=" . $id);
    $var = $API->read();
    ?>
    <form  class="form-horizontal" method="POST" action="edit_proses.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>"/>

        <div class="form-group">
            <label>destination</label>
            <input type="text" name="destination" class="form-control"
                   value="<?php echo $var[0]['destination'] ?>">
        </div>

		<div class="form-group">
            <label>gateway</label>
            <input type="text" name="gateway" class="form-control"
                  value="<?php echo $var[0]['gateway'] ?>">
        </div> 
		<div class="form-group">
            <label>metric</label>
            <input type="text" name="metric" class="form-control"
                  value="<?php echo $var[0]['metric'] ?>">
        </div> 

        <div class="form-group">
            <button class="btn btn-default" 
                    type="submit" name="submit">
                <i class="glyphicon glyphicon-floppy-saved"></i>
                Ubah
            </button>
        </div>
    </form>
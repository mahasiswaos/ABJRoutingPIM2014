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

    $API->write("/routing/pim/rp/print", false);
    $API->write("?.id=" . $id);
    $var = $API->read();
    ?>
    <form  class="form-horizontal" method="POST" action="edit_proses.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
		
		<div class="form-group">
            <label>Address</label>
            <input type="text" name="address" class="form-control"
                   value="<?php echo $var[0]['address'] ?>">
        </div>

        <div class="form-group">
            <label>Group</label>
            <?php $grp = $var[0]['group']; ?>
             <input type="text" name="group" class="form-control"
                   value="<?php echo $var[0]['group'] ?>">
        </div>
		
		<div class="form-group">
            <label>Priority</label>
            <input type="text" name="priority" class="form-control"
                   value="<?php echo $var[0]['priority'] ?>">
        </div>

        <div class="form-group">
            <button class="btn btn-default" 
                    type="submit" name="submit">
                <i class="glyphicon glyphicon-floppy-saved"></i>
                Ubah
            </button>
        </div>
    </form>
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
    <?php
    require './init_routeros.php';

    $id = $_GET['id'];

    $API->write("/routing/pim/bsr-candidates/print", false);
    $API->write("?.id=" . $id);
    $var = $API->read();
    ?>
<div class="container">
    <form  class="form-horizontal" method="POST" action="edit_proses.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
        
        <div class="form-group">
            <label>Scope Zone</label>
            <input type="text" name="scopezone" class="form-control"
                   value="<?php echo $var[0]['scope-zone'] ?>">
        </div>

        <div class="form-group">
            <label>Interface</label>
            <?php $int = $var[0]['interface']; ?>
            <select name="interface" class="form-control">
                <option value="ether1"<?php if ($int="ether1")echo "selected"; ?>>ether1</option>   
                <option value="ether2"<?php if ($int="ether2")echo "selected"; ?>>ether2</option>
            </select>
        </div>
		<div class="form-group">
            <label>Priority</label>
            <input type="text" name="priority" class="form-control"
                   value="<?php echo $var[0]['priority']; ?>">
        </div>

        <div class="form-group">
            <button class="btn btn-default" 
                    type="submit" name="submit">
                <i class="glyphicon glyphicon-floppy-saved"></i>
                Ubah
            </button>
        </div>
    </form>
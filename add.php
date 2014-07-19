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
    <form  class="form-horizontal" method="post" action="add_proses.php">
        <div class="form-group">
            <label>Destination</label>
            <input type="text" name="Destination" class="form-control" >
        </div>
        <div class="form-group">
            <label>Gateway</label>
            <input name="Gateway" class="form-control">
        </div>
		<div class="form-group">
            <label>Matric</label>
            <input type="text" name="Matric" class="form-control">
        </div>

        <div class="form-group">
            <button class="btn btn-default" 
                    type="submit" name="submit">
                <i class="glyphicon glyphicon-floppy-saved"></i>
                Simpan
            </button>
        </div>
    </form>

    
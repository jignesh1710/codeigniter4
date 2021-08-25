<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<div style="color:red;"><?= \Config\Services::validation()->listErrors(); ?></div>
<form action="<?php echo base_url();?>/hello/imagecodemove" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input type="file" class="form-control" name="image">
  </div>
  <input type="submit" class="btn btn-primary" name="submit">
</form>
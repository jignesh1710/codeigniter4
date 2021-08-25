<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<br>
<a style="float:right;width:200px;" href="<?php echo base_url();?>/hello/insert"  class="btn btn-primary">Add</a>
<br>
<br>
<?php $session=session(); echo "Welcome ".$session->get("user");?>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
      <th scope="col">Phone No</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $i=1;foreach($ftc as $row){?>
    <tr>
      <th scope="row"><?php echo $i++;?></th>
      <td><?php echo $row['fname'];?></td>
      <td><?php echo $row['lname'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['pno'];?></td>
      <td><a href="<?php echo base_url();?>/hello/edit/<?php echo $row['id']?>" class="btn btn-success">Edit</a>&nbsp;&nbsp;<a href="<?php echo base_url();?>/hello/delete/<?php echo $row['id']?>" class="btn btn-danger"  onclick='confirm("Press a button!");'>Delete</a></td>
    </tr>
   <?php } ?> 
  </tbody>
</table>

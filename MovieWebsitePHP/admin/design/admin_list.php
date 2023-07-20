
  <!-- admin table -->

<div class="container">
  <div class="head" style="text-align: center; ">
    <h1>Admins of MyCima</h1>
    <hr>
  </div>
  <a href="?action=registeradmin" class="btn btn-success">new admin</a>
  <br>
  <br>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">Curd</th>
    </tr>
  </thead>
  <tbody>
    <?php 

          $select_admin = "SELECT * FROM admin";
          $query = $conn -> query($select_admin);
          $id = 0;
          foreach ($query as $admin) {
            
          

           ?> 
    <tr>
      <th scope="row"><?= ++$id ?></th>
      <td><?= $admin['username'] ?></td>
      <td><p>password encrypted</p></td>
      <td><a href="functions/delete_admin.php?id=<?php echo $admin['id'] ?>" class="btn btn-danger">Delete</a></td>
    </tr>

    <?php } ?>
  </tbody>
</table>
</div>



  <!-- admin table end -->





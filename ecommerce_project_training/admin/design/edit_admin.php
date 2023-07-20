

<?php 


include 'function/connect.php';

$id = $_GET['id'];

$select_admin_edit = "SELECT * FROM admin WHERE id = '$id' ";

$query = $conn -> query($select_admin_edit);

$admin = $query -> fetch_assoc();

?>



<form method="post" action="function/edit_admin.php">
  <div class="form-group">
    <input type="hidden" name="id" value="<?= $admin['id']?>">
    <label for="exampleInputEmail1">name</label>
    <input type="text" name="name" value="<?= $admin['name'] ?>" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">password</label>
    <input type="password" name="password"  class="form-control" id="exampleInputEmail1" placeholder="Edit password">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" value="<?= $admin['email'] ?>" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">address</label>
    <input type="text" name="address" value="<?= $admin['address'] ?>" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">phone</label>
    <input type="text" name="phone" value="<?= $admin['phone'] ?>" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio"  name="gender" id="inlineRadio1" value="0" <?= $admin['gender'] == 0 ? 'checked' : '' ?> >
    <label class="form-check-label" for="inlineRadio1">Male</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1"  <?= $admin['gender'] == 1 ? 'checked' : '' ?> >
    <label class="form-check-label" for="inlineRadio2">Female</label>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Privliges</label>
    <select name="priv" class="form-control" id="exampleFormControlSelect1">
      <option value="0"  <?= $admin['priv_id'] == 1 ? 'selected' : '' ?> >Admin</option>
      <option value="1"  <?= $admin['priv_id'] == 2 ? 'selected' : '' ?> >supervisor</option>
    </select>
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>




















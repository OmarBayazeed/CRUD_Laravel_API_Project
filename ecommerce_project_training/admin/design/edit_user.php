

<?php 


include 'function/connect.php';

$id = $_GET['id'];

$select_user_edit = "SELECT * FROM user WHERE id = '$id' ";

$query = $conn -> query($select_user_edit);

$user = $query -> fetch_assoc();

?>



<form method="post" action="function/edit_user.php">
  <div class="form-group">
    <input type="hidden" name="id" value="<?= $user['id']?>">
    <label for="exampleInputEmail1">name</label>
    <input type="text" name="name" value="<?= $user['name'] ?>" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">password</label>
    <input type="password" name="password"  class="form-control" id="exampleInputEmail1" placeholder="Edit password">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" value="<?= $user['email'] ?>" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">address</label>
    <input type="text" name="address" value="<?= $user['address'] ?>" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">phone</label>
    <input type="text" name="phone" value="<?= $user['phone'] ?>" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio"  name="gender" id="inlineRadio1" value="0" <?= $user['gender'] == 0 ? 'checked' : '' ?> >
    <label class="form-check-label" for="inlineRadio1">Male</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1"  <?= $user['gender'] == 1 ? 'checked' : '' ?> >
    <label class="form-check-label" for="inlineRadio2">Female</label>
  </div>
  <br>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>




















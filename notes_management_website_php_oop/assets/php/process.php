<?php 


require_once "session.php";


// handle add new note

if (isset($_POST['action']) && $_POST['action'] == "add_note") {
	$title = $current_user->test_input($_POST['title']);
	$note = $current_user->test_input($_POST['note']);

	$current_user->add_new_note($cid,$title,$note);
}



// display user notes


if (isset($_POST['action']) && $_POST['action'] == "display_notes") {
	$output = '';

	$notes = $current_user->get_notes($cid);

	if ($notes) {
		$output .= '<table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Note</th>
                            <th width="100px">Action</th>
                        </tr>
                    </thead>
                    <tbody>';

    foreach ($notes as $row) {
   	 	$output .= '<tr>
                            <td>'.$row['id'].'</td>
                            <td>'.substr($row['title'],0,24).'...</td>
                            <td>'.substr($row['note'],0,75).'...</td>
                            <td>
                                <a href="#" id="'.$row['id'].'" title="View Details" class="text-success infoBtn"><i class="fas fa-info-circle fa-lg"></i></a>&nbsp;

                                <a href="#" id="'.$row['id'].'" title="Edit Note" class="text-primary editBtn" data-toggle="modal" data-target="#editNoteModal"><i class="fas fa-edit fa-lg" ></i></a>&nbsp;

                                <a href="#" id="'.$row['id'].'" title="Delete Note" class="text-danger deleteBtn"><i class="fas fa-trash-alt fa-lg"></i></a>
                            </td>
                        </tr>
                        ';
   	 }

   	 	$output .= '</tbody>
                		</table>';
		echo $output;


	}
	else{
		echo "<h3 class='text-center text-secondary'>You Have Not Written any Note Yet!</h3>";
	}
}




// edit note 


if (isset($_POST['edit_id'])) {
	$id = $_POST['edit_id'];

	$row = $current_user->edit_note($id);

	echo json_encode($row);
}


// update note


if (isset($_POST['action']) && $_POST['action'] == "update_note") {
	$title = $current_user->test_input($_POST['title']);
    $note = $current_user->test_input($_POST['note']);
    $id = $current_user->test_input($_POST['id']);

    $current_user->update_note($id,$title,$note);
}



// delete Note 

if (isset($_POST['del_id'])) {
    $id = $_POST['del_id'];

    $current_user->delete_note($id);


}


// display details of note


if (isset($_POST['info_id'])) {
    $id = $_POST['info_id'];

    $row = $current_user->edit_note($id);

    echo json_encode($row);
}



// handle update profile ajax request


if (isset($_FILES['image'])) {
    $name = $current_user->test_input($_POST['name']);
    $gender = $current_user->test_input($_POST['gender']);
    $dob = $current_user->test_input($_POST['dob']);
    $phone = $current_user->test_input($_POST['phone']);
    $oldImage = $_POST['oldimage'];
    $folder = 'uploads/';

    if (isset($_FILES['image']['name']) && ($_FILES['image']['name'] != "")) {
        $newImage = $folder.$_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], $newImage);

        if ($oldImage != null) {
            unlink($oldImage);
        }
    }
    else{
        $newImage = $oldImage;
    }
    $current_user->update_profile($name,$gender,$dob,$phone,$newImage,$cid);
}






 ?>
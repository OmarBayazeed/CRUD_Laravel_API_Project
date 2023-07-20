<?php 

include "assets/include/header.php";

 ?>



<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <?php if ($verified == "Not Verified!") : ?>
                <div class="alert alert-danger alert-dismissible text-center mt-2 m-0 " >
                    <button class="close text-dark" type="button" data-dismiss="alert">&times;</button>
                    <strong >Your E-mail is not Verified! We've Sent You an E-mail verification link on your E-mail,check and verify Now</strong>
                </div>
            <?php endif; ?> 
            <h4 class="text-center text-primary mt-4">Write Your Notes Here And Access Anywhere Anytime! </h4>  
        </div>
    </div>
    <div class="card border-primary">
        <h5 class="card-header bg-primary d-flex justify-content-between">
            <span class="text-light lead align-self-center">All Notes</span>
            <a href="#" class="btn btn-light" data-toggle="modal" data-target="#addNoteModal"><i class="fas fa-plus-circle fa-lg"></i> Add New Note</a>
        </h5>
        <div class="card-body">
            <div class="table-responsive" id="showNote">
                
                        
                    
            </div>
        </div>
    </div>
</div>


<!-- add new note modal -->

<div class="modal fade" id="addNoteModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-light">Add New Note</h4>
                <button class="close text-light" type="button" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="add-note-form" class="px-3">

                    <div class="form-group">
                        <input type="text" name="title" class="form-control form-control-lg" placeholder="Enter Title" required>
                    </div>
                    <div class="form-group">
                        <textarea name="note" class="form-control form-control-lg"  rows="6" placeholder="Enter Your Note"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="addNote" id="addNoteBtn" value="Add Note" class="btn btn-success btn-block btn-lg">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- end new note modal -->


<!-- edit note modal -->

<div class="modal fade" id="editNoteModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-light">Edit Note</h4>
                <button class="close text-light" type="button" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="edit-note-form" class="px-3">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <input type="text" name="title" id="title" class="form-control form-control-lg" placeholder="Enter Title" required>
                    </div>
                    <div class="form-group">
                        <textarea name="note" id="note" class="form-control form-control-lg"  rows="6" placeholder="Enter Your Note"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="editNote" id="editNoteBtn" value="Edit Note" class="btn btn-info btn-block btn-lg">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- end edit note modal -->




<?php 

include "assets/include/footer.php";

 ?>

<script>
    
    $(document).ready(function(){

        // add new note ajax request

        $("#addNoteBtn").click(function(e){
           if ($("#add-note-form")[0].checkValidity()) {
                e.preventDefault();

                $("#addNoteBtn").val("Please Wait...");

                $.ajax({
                   url: "assets/php/process.php",
                   method: "post",
                   data: $("#add-note-form").serialize()+"&action=add_note",
                   success:function(response){
                        $("#addNoteBtn").val("Add Note");
                        $("#add-note-form")[0].reset();
                        $("#addNoteModal").modal('hide');
                        Swal.fire({
                            title: "Note Added Successfully",
                            type: "success"
                        });
                        displayAllNotes();
                   } 
                });
            } 
        });


        // display user notes

        displayAllNotes();

        function displayAllNotes() {
            $.ajax({
               url: 'assets/php/process.php',
               method: 'post',
               data: {action : "display_notes"} ,
               success:function(response){
                $("#showNote").html(response);
                $('table').DataTable({
                    order: [0,'desc']
                });
               }
            });
        }

        // edit note ajax request

        $("body").on("click",".editBtn", function(e){
           e.preventDefault();
           
           edit_id = $(this).attr('id'); 

           $.ajax({
            url: 'assets/php/process.php',
            method: 'post',
            data: {edit_id},
            success:function (response) {
                data1 = JSON.parse(response);

                $("#id").val(data1[0].id);
                $("#title").val(data1[0].title);
                $("#note").val(data1[0].note);
            }
           });
        });


        // update note ajax request

        $("#editNoteBtn").click(function(e){
           if ($("#edit-note-form")[0].checkValidity()) {
                e.preventDefault();

                $.ajax({
                   url: "assets/php/process.php",
                   method: "post",
                   data: $("#edit-note-form").serialize()+"&action=update_note",
                   success:function(response){
                    console.log(response);
                        $("#editNoteBtn").val("Edit Note");
                        $("#edit-note-form")[0].reset();
                        $("#editNoteModal").modal('hide');
                        Swal.fire({
                            title: "Note has been edited Successfully",
                            type: "success"
                        });
                        displayAllNotes();
                   } 
                });
            }
        });    

        // delete note ajax request

        $("body").on("click",".deleteBtn", function(e){
           e.preventDefault();
           
           del_id = $(this).attr('id'); 

           Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
              if (result.value) {
                $.ajax({
                    url: 'assets/php/process.php',
                    method: 'post',
                    data: {del_id},
                    success:function (response) {
                        Swal.fire(
                          'Deleted!',
                          'Your Note has been deleted.',
                          'success'
                        )
                        displayAllNotes();
                    }
                });
              }
            })
        });




        // display details of Note

        $("body").on("click",".infoBtn", function(e){
           e.preventDefault();
           
           info_id = $(this).attr('id'); 

           $.ajax({
            url: 'assets/php/process.php',
            method: 'post',
            data: {info_id},
            success:function (response) {

                data1 = JSON.parse(response);

                Swal.fire({
                    title: '<strong>Note: ID('+data1[0].id+')</strong>',
                    type: 'info',
                    html: '<b>Title: </b>'+data1[0].title+'<br><br><b>Note: </b>'+data1[0].note+'<br><br><b>Updated at: </b>'+data1[0].updated_at+'<br><br><b>Created at: </b>'+data1[0].created_at
                })
            }
           });
        });





    });


</script>


</body>
</html>

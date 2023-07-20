<?php 

                if ($_SESSION['priv'] < 300) {

                   echo "<script>alert('you dont have the authority');window.location.href='index.php'</script>";

                   exit();
                    
                }

             ?>


                <!-- table -->


                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>statue</th>
                                            <th>Controls</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>statue</th>
                                            <th>Controls</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 

                                            include 'function/connect.php';

                                            $select_messages = "SELECT * FROM messages";

                                            $query = $conn -> query($select_messages);

                                            foreach ($query as $messages) {
                                                
                                            


                                         ?>
                                        <tr>
                                            <td><?php echo $messages['id'] ?></td>
                                            <td><?php echo $messages['name'] ?></td>
                                            <td><?php echo $messages['email'] ?></td>
                                            <td><?php echo $messages['phone'] ?></td>
                                            <td><?php echo $messages['statue'] ?></td>
                                            <td>
                            

                            <!-- read Button trigger modal -->
                                                <button type="button" class="btn btn-primary readmessage" message_id = "<?php echo $messages['id'] ?>" data-toggle="modal" data-target="#e<?php echo $messages['id'] ?>">
                                                  Read
                                                </button>

                             <!-- Modal -->
                                                <div class="modal fade" id="e<?php echo $messages['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                      </div>
                                                      <div class="modal-body">


                                                            <?php echo $messages['content']; ?>

                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ok</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>


                            <!-- delete Button trigger modal -->
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#s<?php echo $messages['id'] ?>">
                                                  delete
                                                </button>

                             <!-- Modal -->
                                                <div class="modal fade" id="s<?php echo $messages['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                      </div>
                                                      <div class="modal-body">


                                                            are you sure?

                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                        <a  class="btn btn-danger" href="function/delete_message.php?id=<?php echo $messages['id'] ?>">yes</a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>


                                                                                                     
                                             
                                             </td>

                                        </tr>

                                        <?php 

                                            }

                                         ?>
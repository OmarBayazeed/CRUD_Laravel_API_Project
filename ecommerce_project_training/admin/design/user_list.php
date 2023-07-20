

                                 <!-- add Button trigger modal -->
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add_user">
                                                  add user
                                                </button>
                                                <br>
                                                <br>

                        <!-- Modal -->
                                                <div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                      </div>
                                                      <div class="modal-body">
                                                        <?php if ($_SESSION['priv'] == 300) {  ?>

                                                            you have the authority

                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <a  class="btn btn-primary" href="?action=adduser">accept</a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>

                                            <?php } ?>

                                                    <?php if ($_SESSION['priv'] < 300) {  ?>

                                                            you don't have the authority

                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>

                                            <?php } ?>


                <!-- table -->
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Gender</th>
                                            <th>Controls</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Gender</th>
                                            <th>Controls</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 

                                            include 'function/connect.php';

                                            $select_user = "SELECT * FROM user";

                                            $query = $conn -> query($select_user);

                                            foreach ($query as $user) {
                                                
                                            


                                         ?>
                                        <tr>
                                            <td><?php echo $user['id'] ?></td>
                                            <td><?php echo $user['name'] ?></td>
                                            <td><?php echo $user['email'] ?></td>
                                            <td><?php echo $user['address'] ?></td>
                                            <td><?php echo $user['phone'] ?></td>
                                            <td><?php echo $user['gender'] == 0 ? 'male' : 'female' ?></td>
                                            <td>
                            <!-- edit Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#e<?php echo $user['id'] ?>">
                                                  edit
                                                </button>

                             <!-- Modal -->
                                                <div class="modal fade" id="e<?php echo $user['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                      </div>
                                                      <div class="modal-body">
                                                        <?php if ($_SESSION['priv'] == 300) {  ?>

                                                            you have the authority

                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <a  class="btn btn-primary" href="?action=edituser&id=<?php echo $user['id'] ?>">accept</a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>

                                            <?php } ?>

                                                    <?php if ($_SESSION['priv'] < 300) {  ?>

                                                            you don't have the authority

                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>

                                            <?php } ?>
                                            

                            <!-- delete Button trigger modal -->
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#b<?php echo $user['id'] ?>">
                                                  delete
                                                </button>

                            <!-- Modal -->
                                                <div class="modal fade" id="b<?php echo $user['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                      </div>
                                                      <div class="modal-body">
                                                       <?php if ($_SESSION['priv'] == 300) {  ?>

                                                            you have the authority,
                                                            are you sure !!!.

                                                            the name : <?php echo $user['name'] ?>

                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <a  class="btn btn-primary" href="function/delete_user.php?id=<?php echo $user['id'] ?>">yes</a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>

                                            <?php } ?>

                                                    <?php if ($_SESSION['priv'] < 300) {  ?>

                                                            you don't have the authority

                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>

                                            <?php } ?>
                                             </td>
                                            
                                        </tr>

                                        <?php 

                                            }

                                         ?>
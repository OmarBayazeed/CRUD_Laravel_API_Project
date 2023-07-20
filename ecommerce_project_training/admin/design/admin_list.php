
                                
                        <!-- add Button trigger modal -->
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add_admin">
                                                  add admin
                                                </button>
                                                <br>
                                                <br>

                        <!-- Modal -->
                                                <div class="modal fade" id="add_admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                        <a  class="btn btn-primary" href="?action=addadmin">accept</a>
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
                                            <th>priv</th>
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
                                            <th>priv</th>
                                            <th>Controls</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 

                                            include 'function/connect.php';

                                            $select_admin = "SELECT * FROM admin";

                                            $query = $conn -> query($select_admin);

                                            foreach ($query as $admin) {
                                                
                                            


                                         ?>
                                        <tr>
                                            <td><?php echo $admin['id'] ?></td>
                                            <td><?php echo $admin['name'] ?></td>
                                            <td><?php echo $admin['email'] ?></td>
                                            <td><?php echo $admin['address'] ?></td>
                                            <td><?php echo $admin['phone'] ?></td>
                                            <td><?php echo $admin['gender'] == 0 ? 'male' : 'female' ?></td>
                                            <td><?= $admin['priv_id'] == 1 ? "admin" : "supervisor" ?></td>
                                            <td>
                            

                            <!-- edit Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#e<?php echo $admin['id'] ?>">
                                                  edit
                                                </button>

                             <!-- Modal -->
                                                <div class="modal fade" id="e<?php echo $admin['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                        <a  class="btn btn-primary" href="?action=editadmin&id=<?php echo $admin['id'] ?>">accept</a>
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
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#b<?php echo $admin['id'] ?>">
                                                  delete
                                                </button>

                            <!-- Modal -->
                                                <div class="modal fade" id="b<?php echo $admin['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                                                            the name : <?php echo $admin['name'] ?>

                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <a  class="btn btn-primary" href="function/delete_admin.php?id=<?php echo $admin['id'] ?>">yes</a>
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
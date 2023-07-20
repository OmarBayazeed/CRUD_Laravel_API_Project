
<a class="btn btn-info" href="?action=addproduct">Add product</a>
<a class="btn btn-success" href="?action=addcategory">Add category</a>
				<br>
				<br>
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>id</th>
						<th>name</th>
						<th>price</th>
						<th>sale</th>
						<th>img</th>
						<th>category</th>
						<th>controls</th>
					</tr>
				</thead>
				<tfoot>
            		<tr>
                		<th>id</th>
						<th>name</th>
						<th>price</th>
						<th>sale</th>
						<th>img</th>
						<th>category</th>
						<th>controls</th>
            		</tr>
                </tfoot>
				<tbody>

					<?php 

					include 'function/connect.php';
					$select_product = "SELECT * FROM product";
					$query = $conn -> query($select_product);
					$id = 0;
					foreach ($query as $product) {
					
					$x = explode(",", $product['img'])	
					

					 ?>	

					<tr>
						<td><?= ++$id ?></td>
						<td><?= $product['name'] ?></td>
						<td><?= $product['price'] ?></td>
						<td><?= $product['sale'] ?></td>
						<td><img src="images/<?= $x[0] ?>" alt="" style="width: 50px ; height: 50px ;border-radius: 50%;"	></td>
						<td><?php

						$cat_id = $product['cat_id'];
						$select_category = "SELECT name FROM category WHERE id = $cat_id ";
						$category = $conn -> query($select_category) -> fetch_assoc();

						echo $category['name'];








					?></td>
						<td>
							<a class="btn btn-primary" href="?action=editproduct&id=<?php echo $product['id'] ?>">edit</a>

                            <a class="btn btn-danger"  href="function/delete_product.php?id=<?php echo $product['id'] ?>">Delete</a>
						</td>						
					</tr>

					<?php } ?>
				</tbody>
			</table>




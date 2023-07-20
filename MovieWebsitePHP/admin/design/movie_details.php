<?php 

        
    $id = $_GET['id']; 
    $select_movie = "SELECT * FROM movie WHERE id = $id";
    $query = $conn -> query($select_movie);
    $id = 0;
    foreach ($query as $movie) {
            
          

?> 



<div class="container">
    <div class="row">
        <div class="col-4">
            <?php echo "<img class='card-img-top' src='images/".$movie['image']."' alt='Card image cap' height='400px' width='auto' >"; ?>
        </div>
        <div class="col">
            <h1 style="text-align: center; "><?php echo $movie['name'] ?></h1>
            <br><br>
            <?php echo $movie['tag'] ?>
            <br><br>
            <?php echo $movie['the_date'] ?>
            <br><br>
            <?php echo $movie['director'] ?>
            <br><br>
            <?php echo $movie['language'] ?>
            <br><br>
        </div>
    </div>
    <div>
        <br><br>
        <a class="btn btn-info" href="<?php $movie['link1'] ?>">Download 1</a>
        <a class="btn btn-success" href="<?php $movie['link2'] ?>">Download 2</a>
        <br><br>
        <?php echo $movie['meta_description']; ?>
        <br><br>
        <div class="jumbotron">
            <?php echo $movie['description']; ?>
        </div>           
    </div>
</div>











<?php } ?>
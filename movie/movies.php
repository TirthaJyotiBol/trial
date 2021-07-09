
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> 
    <style><?php include 'moviestyle.css' ?></style>
     <?php include'apiMovie.php'?>
    <title>Movie</title>
  </head>

  <body>

  <div id="topimage">
  <span>
  <h2><i class="fas fa-couch"></i>  FlixZone</h2>
  <button class="btn btn-outline-danger" type="submit"><a href="">HOME</a> </button>
  </span>
    <h1 >Your Free Movie Website , Enjoy chill Relax </h1>
    <h3>Watch Anywhere , Anytime </h3>
  <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search Your Movie Name" aria-label="Search"> 
        <button class="btn btn-outline" type="submit">Search</button>
      </form>
  </div>

<?php 
$image_base_url = 'https://image.tmdb.org/t/p/w500/';    //base url for the images
?>


<!-- <div data-aos="fade-up" data-aos-duration="5000"> -->

<section class="popular"> 
<h1 id="upcomming_movies"> UPCOMMING MOVIES </h1>
<div class="scroll">
<?php $i=0;  while($i<19){?>         

  <!-- while loop for displaying the movie card multiple times   -->
<!-- upcomming movies -->
<span id="one">
<div class="card" style="width: 18rem; height:13cm">
<img id="movieimage" src= "<?php  echo $image_base_url.$data['results'][$i]['poster_path'] ?>" alt="one.jpg"> 
<p id="movie_name" class="card-text"><?php echo"Movie : ". $data['results'][$i]['original_title'] ?></p>  <br>
<p id="moviedescription" class="card-text"> <?php echo $data['results'][$i]['overview']?></p>
</div>
</span>
<?php $i++; } ?>
</section>
<br>

<!-- popular movies -->



<section class="popular" data-aos="fade-up" data-aos-duration="5000"> 
<h1 id="upcomming_movies"> POPULAR MOVIES </h1>
<div class="scroll">
<?php $i=0; while($i<19){?>         
<span id="one">
<div class="card" style="width: 18rem; height:13cm">
<img id="movieimage" src= "<?php  echo $image_base_url.$popular['results'][$i]['poster_path'] ?>" alt="one.jpg"> 
<p id="movie_name" class="card-text"><?php echo"Movie : ". $popular['results'][$i]['original_title'] ?></p>  <br>
<p id="moviedescription" class="card-text"> <?php echo $popular['results'][$i]['overview']?></p>
</div>
</span>
<?php $i++; } ?>
</section>


<section class="popular" data-aos="fade-up" delay="800" data-aos-duration="5000"> 
<h1 id="upcomming_movies"> TRENDINGS </h1>
<div class="scroll">
<?php $i=0; while($i<19){?>         
<span id="one">
<div class="card" style="width: 18rem; height:13cm">
<img id="movieimage" src= "<?php  echo $image_base_url.$trending['results'][$i]['poster_path'] ?>" alt="one.jpg"> 
<p id="movie_name" class="card-text"><?php echo"Movie : ". $trending['results'][$i]['original_title'] ?></p>  <br>
<p id="moviedescription" class="card-text"> <?php echo $trending['results'][$i]['overview']?></p>
</div>
</span>
<?php $i++; } ?>
</section>
</div>

  <script src="https://kit.fontawesome.com/98be8a5830.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script> AOS.init({ offset: 100,duration: 500}); </script>    
    <!-- above script for scroll animation purpose -->
 
  </body>
</html>


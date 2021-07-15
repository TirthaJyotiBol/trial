
<!doctype html>
<html lang="en">
<!-- base url for the images -->
<?php $image_base_url = 'https://image.tmdb.org/t/p/w500/'; ?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> 
    <style><?php include 'moviestyle.css' ?></style>
     <?php include 'apiMovie.php'?>
    <title>Movie</title>
  </head>

  <body>
  <div id="topimage">
  <span>
  <h2><i class="fas fa-couch"></i>  Flix</h2>
  <button class="btn btn-outline-danger" type="submit"><a href="">HOME</a> </button>
  </span>
    <h1 >Your Free Movie Website , Enjoy chill Relax </h1>
    <h3>Watch Anywhere , Anytime </h3>

  <form method="post" class="d-flex" >
        <input class="form-control me-2" name="query" type="search" placeholder="Search Your Movie Name" aria-label="Search" required/>  
        <button class="btn btn-outline" name="submit" type="submit" value="redirect" >Search</button>
      </form>
  </div>


  <?php 
  if (isset($_POST["submit"]))       
  {  ?>   <?php
     // query is the one which is being searched in
    $search = file_get_contents('https://api.themoviedb.org/3/search/movie?api_key=121637e27fe7c108abef3b18d97cb40f&query='. $_POST['query']);
    $search = json_decode($search,true);
     ?>  <h1 id="upcomming_movies">SEARCH RESULTS</h1>
     <div class="trial">
     <?php 
    $i=0;
    while($i<20){
   ?> 
                     <!-- search results -->

 <section>
<img id="movieimage_trial" src= "<?php  echo $image_base_url.$search['results'][$i]['poster_path'] ?>" alt="one.jpg"> 
<?php if($search['results'][$i]['vote_average'] >8) { ?>
<p id="vote">  <?php echo $search['results'][$i]['vote_average']  ?>  </p>
<?php
 } 
  else
{  ?>
  <p id="vote_green">  <?php echo $search['results'][$i]['vote_average']  ?>  </p>
  <?php  }?>

<p id="movie_name_trial" class="card-text"><?php echo $search['results'][$i]['original_title'] ?></p>
<p id="release_date"> <?php echo  $search['results'][$i]['release_date'] ?>    </p>
</section>  
<?php  $i++; }
  }
  ?>
</div>





<h1 id="upcomming_movies"> UPCOMMINGS </h1>
<div class="trial"  data-aos="fade-up" delay="800" data-aos-duration="5000" >
<?php $i=0; while($i<20){?>       
  <section>
<img id="movieimage_trial" src= "<?php  echo $image_base_url.$data['results'][$i]['poster_path'] ?>" alt="one.jpg"> 

<?php if($data['results'][$i]['vote_average'] >8) { ?>
<p id="vote">  <?php echo $data['results'][$i]['vote_average']  ?>  </p>
<?php
 } 
  else
{  ?>
  <p id="vote_green">  <?php echo $data['results'][$i]['vote_average']  ?>  </p>
  <?php  }?>

<p id="movie_name_trial" class="card-text"><?php echo $data['results'][$i]['original_title'] ?></p>
<p id="release_date"> <?php echo  $data['results'][$i]['release_date'] ?>    </p>
</section>  
<?php $i++; } ?>
</div>
<br>

<!-- popular movies -->



<h1 id="upcomming_movies"> POPULAR </h1>
<div class="trial"  data-aos="fade-up" delay="800" data-aos-duration="5000">
<?php $i=0; while($i<20){?>       
  <section>
<img id="movieimage_trial" src= "<?php  echo $image_base_url.$popular['results'][$i]['poster_path'] ?>" alt="one.jpg"> 

<?php if($popular['results'][$i]['vote_average'] >8) { ?>
<p id="vote">  <?php echo $popular['results'][$i]['vote_average']  ?>  </p>
<?php
 } 
  else
{  ?>
  <p id="vote_green">  <?php echo $popular['results'][$i]['vote_average']  ?>  </p>
  <?php  }?>

<p id="movie_name_trial" class="card-text"><?php echo $popular['results'][$i]['original_title'] ?></p>
<p id="release_date"> <?php echo  $popular['results'][$i]['release_date'] ?>    </p>
</section>  
<?php $i++; } ?>
</div>


<!-- trendings-->
<h1 id="upcomming_movies"> TRENDINGS </h1>
<div class="trial"  data-aos="fade-up" delay="800" data-aos-duration="5000">
<?php $i=0; while($i<20){?>       
  <section>
<img id="movieimage_trial" src= "<?php  echo $image_base_url.$trending['results'][$i]['poster_path'] ?>" alt="one.jpg"> 

<?php if($trending['results'][$i]['vote_average'] >8) { ?>
<p id="vote">  <?php echo $trending['results'][$i]['vote_average']  ?>  </p>
<?php
 } 
  else
{  ?>
  <p id="vote_green">  <?php echo $trending['results'][$i]['vote_average']  ?>  </p>
  <?php  }?>

<p id="movie_name_trial" class="card-text"><?php echo $trending['results'][$i]['original_title'] ?></p>
<p id="release_date"> <?php echo  $trending['results'][$i]['release_date'] ?>    </p>
</section>  
<?php $i++; } ?>
</div>




<!-- Now Playing -->
<h1 id="upcomming_movies">NOW PLAYING</h1>
<div class="trial"  data-aos="fade-up" delay="800" data-aos-duration="5000">
<?php $i=0; while($i<20){?>       
  <section>
<img id="movieimage_trial" src= "<?php  echo $image_base_url.$now_playing['results'][$i]['poster_path']?>" alt="one.jpg"> 

<?php if($now_playing['results'][$i]['vote_average'] >8) { ?>
<p id="vote">  <?php echo $now_playing['results'][$i]['vote_average']  ?>  </p>
<?php
 } 
  else
{  ?>
  <p id="vote_green">  <?php echo $now_playing['results'][$i]['vote_average']  ?>  </p>
  <?php  }?>

<p id="movie_name_trial" class="card-text"><?php echo $now_playing['results'][$i]['original_title'] ?></p>
<p id="release_date"> <?php echo  $now_playing['results'][$i]['release_date'] ?>    </p>
</section>  
<?php $i++; } ?>
</div>



<!-- top-rated-->
<h1 id="upcomming_movies">TOP RATED</h1>
<div class="trial"  data-aos="fade-up" delay="800" data-aos-duration="5000">
<?php $i=0; while($i<20){?>       
  <section>
<img id="movieimage_trial" src= "<?php  echo $image_base_url.$top_rated['results'][$i]['poster_path']?>" alt="one.jpg"> 

<?php if($top_rated['results'][$i]['vote_average'] >8) { ?>
<p id="vote">  <?php echo $top_rated['results'][$i]['vote_average']  ?>  </p>
<?php
 } 
  else
{  ?>
  <p id="vote_green">  <?php echo $top_rated['results'][$i]['vote_average']  ?>  </p>
  <?php  }?>

<p id="movie_name_trial" class="card-text"><?php echo $top_rated['results'][$i]['original_title'] ?></p>
<p id="release_date"> <?php echo  $top_rated['results'][$i]['release_date'] ?>    </p>
</section>  
<?php $i++; } ?>
</div>

  <script src="https://kit.fontawesome.com/98be8a5830.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script> AOS.init({ offset: 100,duration: 500}); </script>    
    <!-- above script for scroll animation purpose -->
 
   
<div class="footer">
<h3 id="h2" > FLIX </h3>
</div>

<div class="flex">
    <a href="movies.php"> Terms and conditions </a>
    <a href="movies.php">help</a>
    <a href="movies.php">feedback</a>
</div>


</html>


<?php
require_once 'config.php';

if(isset($_POST["now_Showing"])){ 
    // Fetch movies data 
 	$fetch_movies_details = mysqli_query($mysqli, "select * from movie where movie_case = 'now showing' ");
 	
 	while ($fetch_movies = mysqli_fetch_assoc($fetch_movies_details)){
 		  
         echo "<li class='nav2'> <a href='movieInfo1.php?id=".$fetch_movies['movie_id']."'><img src='../admin/images/".$fetch_movies['movie_poster']."' alt='p1' style='width:300px; height:250px;'> <figcaption>".$fetch_movies['movie_name']."</figcaption> </a> </li>";
 	}
}

if(isset($_POST["coming_Soon"])){ 
    // Fetch movies data 
    $fetch_movies_details = mysqli_query($mysqli, "select * from movie where movie_case = 'coming soon' ");
    
    while ($fetch_movies = mysqli_fetch_assoc($fetch_movies_details)){
          
         echo "<li class='nav2'> <a href='movieInfo1.php?id=".$fetch_movies['movie_id']."'><img src='../admin/images/".$fetch_movies['movie_poster']."' alt='p1' style='width:300px; height:250px;'> <figcaption>".$fetch_movies['movie_name']."</figcaption> </a> </li>";
    }
}

?>
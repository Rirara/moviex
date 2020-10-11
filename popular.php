<?php
  $title="Popular Movies";
  include("includes/header.php");
  include("functions/info.php");
  include("functions/db.php");
  include("api/api_popular.php");
 ?>

 <div id="hot"><!-- #hot Begin -->

     <div class="box"><!-- box Begin -->

         <div class="container"><!-- container Begin -->

             <div class="col-md-12"><!-- col-md-12 Begin -->

               <h2>
                   Popular Movies All the Time!
               </h2>

             </div><!-- col-md-12 Finish -->

         </div><!-- container Finish -->

     </div><!-- box Finish -->

 </div><!-- #hot Finish -->

 <div class="col-md-12"><!-- col-md-12 Begin -->

     <ul class="breadcrumb"><!-- breadcrumb Begin -->
         <li>
             <a href="index.php">Home</a>
         </li>
         <li>
             Popular Movies
         </li>
     </ul><!-- breadcrumb Finish -->

 </div><!-- col-md-12 Finish -->

 <?php
 foreach($popular->results as $p){
  echo
  '<div id="content">
      <div class="same-height-row">
          <div class="col-sm-4 col-sm-6 single">
              <div class="product">
                  <a href="movie.php?id=' . $p->id . '">
                  <img class="img-responsive" src="'.$imgurl_1.''. $p->poster_path . '">
                  <div class="text"><h5>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h5>
                  <h6><em>Rate : " . $p->vote_average . " |  Vote : " . $p->vote_count . " | Popularity : " . round($p->popularity) . "</em></h6></div>
                  </a>
              </div>
          </div>
      </div>
  </div>";
}
 ?>

 <center>
     <ul class="pagination">
         <li class="active;"><a href="#">First Page</a></li>
         <li><a href="#">1</a></li>
         <li><a href="#">2</a></li>
         <li><a href="#">3</a></li>
         <li><a href="#">4</a></li>
         <li><a href="#">5</a></li>
         <li><a href="#">Last Page</a></li>
     </ul>
 </center>

 <?php

  include("includes/footer.php");

  ?>

  <script src="js/jquery-331.min.js"></script>
  <script src="js/bootstrap-337.min.js"></script>


</body>
</html>

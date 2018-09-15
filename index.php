<?php  include('confs/config.php'); ?>
<?php  include('header.php'); ?>
    <style type="text/css">
    .blog .carousel-indicators {
    left: 0;
    top: auto;
    bottom: -40px;

}

/* The colour of the indicators */
.blog .carousel-indicators li {
    background: #a3a3a3;
    border-radius: 2px;
    width: 25px;
    height: 2px;
}

.blog .carousel-indicators .active {
background: teal;
}
.ftr2{
  background-color: #fff;
  height: 450px;

}
.ftr2 p{
    font-size: 12px;
    color: #7F8C8D;
}

.ftr2 p strong {
    color: #2E405E;
    font-size: 12px;
}
</style>
<script type="text/javascript">
    // optional
        $('#blogCarousel').carousel({
                interval: 3000
        });
</script>

<?php

    include('confs/config.php');
    $result = mysqli_query($conn,"SELECT * FROM product ORDER BY id DESC LIMIT 0,4");
    
?>
<br>

<div class="ftr2">
  <h2 style="text-align: center; color: #5d6d7e; font-weight: bold; font-size: 19px;">Latest Product</h2>
  <br>
<div class="container">
            <div class="row blog">
                <div class="col-md-12">
                    <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#blogCarousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="row">
                                  <?php while($row = mysqli_fetch_assoc($result)):?>
                                    <div class="col-md-3">
                                        <a href="detail.php?id=<?php echo $row['id']; ?>">
                                            <img src="image/<?php echo $row['image'] ?>" alt="Image" style="width: 250px; height:250px;">
                                            
                                        </a>
                                        <p><?php echo $row['name']; ?></p>
                                        <p><strong>US$<?php echo $row['price']; ?></strong></p>
                                    </div>
                                  <?php endwhile; ?>
                             
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                            <div class="carousel-item">
                                <div class="row">
                  <?php

                  include('confs/config.php');
                  $result = mysqli_query($conn,"SELECT * FROM product ORDER BY id DESC LIMIT 4,4");
                  while($row = mysqli_fetch_assoc($result)):
                  ?>
          
                                    <div class="col-md-3">
                                        <a href="detail.php?id=<?php echo $row['id']; ?>">
                                           <img src="image/<?php echo $row['image'] ?>" alt="Image" style="width: 250px; height:250px;">
                                        </a>
                                         <p><?php echo $row['name']; ?></p>
                                        <p><strong>US$<?php echo $row['price']; ?></strong></p>
                                    </div>
                                    <?php endwhile; ?>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                        </div>
                        <!--.carousel-inner-->
                         <a class="carousel-control-prev" href="#blogCarousel" role="button" data-slide="prev" style="margin-bottom: 100px; font-size: 10px;">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#blogCarousel" role="button" data-slide="next" style="margin-bottom: 100px; font-size: 10px;">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
                    </div>
                    <!--.Carousel-->

                </div>
            </div>
</div>
</div> <!-- ftr2 end -->

        </body></html>

        <?php  include('footer.php'); ?>
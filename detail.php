<?php
   
   include('confs/config.php');
   $id = $_GET['id'];
   $result = mysqli_query($conn,"SELECT * FROM product WHERE id=$id");
   $row = mysqli_fetch_assoc($result);
  
 	
 ?>
 <?php  include('header.php'); ?>
 <style type="text/css">
 	.title p {
    font-family: "Times New Roman",Times,serif;
    color: #273746;
    font-size: 20px;
}
/*bootstrap4 */
 .badge {
    display: inline-block;
    padding: 0.25em 0.4em;
    font-size: 60%;
    font-weight: 550;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25rem;
}
/*available color*/
    .input-hidden {
  position: absolute;
  left: -9999px;
}
label{
	font-size: 13px; color: #273746;
}

input[type=radio]:checked + label>img {
  border: 1px solid #48c9b0;
  box-shadow: 0 0 2px 0px #48c9b0;
}

/* Stuff after this is only to make things more pretty */
input[type=radio] + label>img {
  border: 1px solid #000;
  width: 45px;
  height: 45px;
  border-radius: 2px;
/*  transition: 500ms all;*/
}

 </style>

<script type="text/javascript">
      $("a").click(function() {
    $(this).next().prop("checked", "checked");
});

  $('a').click(function() {
        $('li:has(input:radio:checked)').addClass('active');
        $('li:has(input:radio:not(:checked))').removeClass('active');
    });
    </script>
<br>
 <div class="container">
	<div class="row">
	<div class="col-md-6">
		<img src="image/<?php echo $row['image'] ?>" width="350" height="400">
	</div><!--  col-md-4 end -->
	<div class="col-md-6">
		<div class="title">
		<p><?php echo $row['name'] ?></p>
		<p>US$<?php echo $row['price'] ?></p>
		</div>
			<span class="badge badge-warning">Low In Stock</span>
		     <form class="needs-validation" novalidate>
        	      <!-- available color start -->
                 
              <div class="row">  
                <div class="col-md-6 mb-3">
                 <label for="zip">Available Color</label>
             
              
       <div class="form-group">
      
     
       <input type="radio" name="rdocolor" value=""
  id="happy_1" class="custom-control-input" id="zip" required>
       <label for="happy_1">
       <img src="image/color (2).PNG" alt="" />
       </label>

       <input type="radio" name="rdocolor" value=""
  id="happy_2" class="custom-control-input"id="zip" required>
       <label for="happy_2">
       <img src="image/color (1).PNG" alt="" />
       </label>

       <input type="radio" name="rdocolor" value=""
  id="happy_3" class="custom-control-input"id="zip" required>
       <label for="happy_3">
       <img src="image/color (3).PNG" alt="" />
       </label>

       <input type="radio" name="rdocolor" value=""
  id="happy_4" class="custom-control-input" id="zip" required>
       <label for="happy_4">
       <img src="image/color (4).PNG" alt="" />
       </label>

       <input type="radio" name="rdocolor" value=""
  id="happy_5" class="custom-control-input" id="zip" required>
       <label for="happy_5">
       <img src="image/color (5).PNG" alt="" />
       </label>
         <div class="invalid-feedback">
                  Please choose a color.
                </div>

                          </div>
                            </div>
                          </div>  
                          <!-- Available Size start -->
            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="country">Available Size</label>
                <select class="custom-select d-block w-100" id="country" required>
                  <option value="">Choose...</option>
                  <option>XS</option>
                  <option>S</option>
                  <option>M</option>
                  <option>L</option>
                  <option>XL</option>
                  <option>XXL</option>
                </select>
                <div class="invalid-feedback">
                  Please select a size.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="state">Qty</label>
                <select class="custom-select d-block w-100" id="state" required>
                  <option value="">Choose...</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>

                </select>
                <div class="invalid-feedback">
                  Please select qty.
                </div>
              </div>
           
            </div>
           

           
           
            
          
               <input type="submit" name="" value="Add To Cart" style="clear:both; background: #48c9b0; border: none; color: #fff; font-size: 1em; padding: 10px; cursor: pointer; font-size: 13px;" class="btn btn-default" />
          </form>

<script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
		
	</div><!--  col-md-4 end -->
	</div><!--  row end -->
</div><!--  container end -->
<br>
 <?php  include('footer.php'); ?>

 
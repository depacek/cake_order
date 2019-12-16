<?php 
 $title = "Home page";
require_once "header.php";
$products = $product->lists ();
// print_r($products);
?>
<section class="food-menu-area section-padding" id="food-menu">
    <div class="container">
            <div class="col-md-12">
            <div class="section-top text-center"><h2>our menu</h2></div>
            </div>
           <div class="container">
            <div class="row">
                        <?php foreach ($products as $pro){ ?>
<!-- <div class="food-menu-image"><img src="assets/images/food-menu-1.png" alt="food"></div> -->
             <div class="col-sm-6" style="background-color:pink; border-style: solid; border-color: white;"><br>
                            <?php echo $pro->name;?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.<?php echo $pro->price;?>
                           <br><span> <?php echo $pro->description;?></span>
                    </div>
                    <?php } ?>
                        </div>
                        </div>
                        </div>
</section>

<?php require_once"footer.php"; ?>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/vendor/jquery.downCount.js"></script>
<script src="assets/js/vendor/jquery.sticky.js"></script>
<script src="assets/js/vendor/jquery-easing.js"></script>
<script src="assets/js/vendor/owl.carousel.min.js"></script>
<script src="assets/js/vendor/skrollr.min.js"></script>
<script src="assets/js/vendor/wow.min.js"></script>
<script src="assets/js/main.js"></script>
</div>
</section>
</body>    
</html>

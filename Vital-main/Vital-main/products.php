<?php 
    include "navbar.php";
    require 'connect.php';

  




   

    

   



    $myquery = "SELECT * FROM produit " ;
    
    $outcome = mysqli_query($connection, $myquery) ;
    $row = mysqli_num_rows($outcome) ;
    // $idProduit =  $_POST['idProduit'];
    
    

    ?>
<div class="container" id="frstrow">
    <div class="row">

        <?php 
    $result=$connection-> query($myquery);
    while ($finalResult = mysqli_fetch_assoc($outcome))
    {
        


    ?>
        <div class="col-sm-3">
            <form method="post" id="myform" action="products.php<?php echo'?idproduct='.$finalResult['idProduit'] 
                   ; ?>" >
                <input hidden name="id-product" value="<?php echo $finalResult['idProduit']; ?>" />
                
                <a href="details.php?productId= <?php echo $finalResult['idProduit'];?>"> <img 
                        class="prodImg" src="<?php echo $finalResult['image']; ?>" alt="" value="<?php echo $finalResult['image']; ?>"/></a>



                <h6  value="<?php echo $finalResult['libelle']; ?>"><?php echo $finalResult['libelle']; ?><h6  value="<?php echo $finalResult['prix']; ?>">
                        $<?php echo number_format( $finalResult['prix'],2) ; ?></h6>
                </h6>
                <p hidden name="stock">Sock: <?php echo $finalResult['stock']; ?></p>
                <input  name="quantity" class="form-control" type="number" value="" min=" 0" max="1000"  />
                <div>
                    <button type="button"  class="btn" id="addToCart">SHOP</button>
                    <input type="submit" name="addToCart" value=" ADD TO CART">
                    <a ></a>
                    <input hidden name="id-product" value="<?php echo $finalResult['idProduit']; ?>" />
                    <input hidden name="name" value="<?php echo $finalResult['libelle']; ?>" />
                    <input hidden name="price" value="<?php echo $finalResult['prix']; ?>" />
                    <input hidden name="image" value="<?php echo $finalResult['image']; ?>" />
                    <input hidden name="stock" value="<?php echo $finalResult['stock']; ?>"/>
                    <!-- <a href="#" name="addToCart" > ADD TO CART</a> -->
                    <?php  
                    if ($_POST['stock'] = 0) {
                        echo "<P> out of stock</P>";
                    }
                    
                    ?>


            </form>
           
        </div>
    </div>
    <?php }
 



 if (isset($_POST['addToCart'])) {
        
    if (isset($_SESSION['shop-cart'])) {
        
        $item_array_id = array_column($_SESSION['shop-cart'],'product_id');

        if(!in_array($_POST['id-product'],$item_array_id)){
            $count = count($_SESSION['shop-cart']);
            $item_array = array(
                'product_id' => $_POST['id-product'],
            'name' => $_POST['name'],
            'quantity' => $_POST['quantity'],
            'price' => $_POST['price'],
            'image' => $_POST['image'],
            'stock' => $_POST['stock']
            );
            $_SESSION['shop-cart'][$count] = $item_array;
        }else{
            echo  ' <script>alert("Item Already Added")</script>';
            echo  ' <script>window.location="products.php"</script>';
           
        }
        // $item_array = array(
        //     'product_id' => $_POST['id-product'],
        //     'name' => $_POST['name'],
        //     'quantity' => $_POST['quantity'],
        //     'price' => $_POST['price'],
        //     'image' => $_POST['image']
        // );
        // $_SESSION['shop-cart'][]= $item_array;
        
    }else{
        // $item_array = array(
        //     'idProduit' => $_POST['id-product']
        // );
        // $_SESSION['shop-cart'][0] = $item_array;
        // print_r($_SESSION['shop-cart']);
        $item_array = array(
                    'product_id' => $_POST['id-product'],
                    'name' => $_POST['name'],
                    'quantity' => $_POST['quantity'],
                    'price' => $_POST['peice'],
                    'image' => $_POST['image'],
                    'stock' => $_POST['stock']
                );
                $_SESSION['shop-cart'][]= $item_array;

    }
    
}
    
?>
    <!-- <div class=" col">
                        <img class="prodImg"
                            src="https://cdn.shopify.com/s/files/1/0305/4770/5995/products/violet-visage-01_1440x_9263fab2-1c5b-41c5-952a-bab5d5e2260c_590x.jpg?v=1614259154"
                            alt="">
                        <h6>Violet Visage Face Cream <span>$24.00</span></h6>
                        <p>Stock</p>
                        <div>
                            <button type="button" class="btn btn-primary">SHOP</button>
                            <button type="button" class="btn btn-primary">ADD TO CART</button>
                        </div>
                </div>
                <div class="col">
                    <img class="prodImg"
                        src="https://cdn.shopify.com/s/files/1/0305/4770/5995/products/sugar-face-01_590x.jpg?v=1614685878"
                        alt="">
                    <h6>Sugar Face Hydrating Mist <span>$20.00</span></h6>
                    <p>Stock</p>
                    <div>
                        <button type="button" class="btn btn-primary">SHOP</button>
                        <button type="button" class="btn btn-primary">ADD TO CART</button>
                    </div>
                </div>
                <div class="col">
                    <img class="prodImg"
                        src="https://cdn.shopify.com/s/files/1/0305/4770/5995/products/love-mist-01_590x.jpg?v=1614685398"
                        alt="">
                    <h6>Love in the Mist Perfume <span>$80.00</span></h6>
                    <p>Stock</p>
                    <div>
                        <button type="button" class="btn btn-primary">SHOP</button>
                        <button type="button" class="btn btn-primary">ADD TO CART</button>
                    </div>
                </div>
        </div> -->

    
</div>
</div>
<!-- <?php
var_dump($_SESSION['shop-cart'])
?> -->
<!-- Footer -->
<footer class=" text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div id="getConnected" class="me-5 d-none d-lg-block">
            <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div id="socialMedia">
            <a href="" class="me-4 text-reset">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-github"></i>
            </a>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <img class="logo" src="logo/logo.png" alt="">
                    </h6>
                    <p>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        About us
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Recycling </a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Sustaunability</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Ingredients </a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Careers </a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Shop
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">New arrivals</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Bestsellers</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">On Sale </a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Git Cart </a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Aider
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Shipping </a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Payment</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Return</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset"> Contact </a>
                    </p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2022 Copyright:
        <a id="vitalCom" class="text-reset fw-bold" href="https://mdbootstrap.com/">VITAL.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>
<?php 
    // $DBserver = "localhost" ;
    // $username = "root" ;
    // $password = "" ;
    // $DBname = "cosmitic-shopping" ;

    // $connection = mysqli_connect($DBserver, $username, $password, $DBname) ;

    // if($connection){
    //     echo "connection is successful" ;
    // }else{
    //     echo "connection is failed".mysqli_connect_error() ;
    // }
    // $myquery = "SELECT * FROM produit" ;
    
    // $outcome = mysqli_query($connection, $myquery) ;
    // $row = mysqli_num_rows($outcome) ;
    // echo "<pre>" ;
    //     echo $row ;
    // echo "</pre>" ;
    
    // // $finalResult = mysqli_fetch_assoc($outcome) ;

    // if($row >0){
    //     while($finalResult = mysqli_fetch_assoc($outcome)){
    //         echo "<pre>" ;
    //             print_r($finalResult) ;
    //      echo "</pre>" ;
    //     }
    // }
    function component($productName, $descriptions, $price, $stock, $image){
        
   
    $elements = '
    <div class="container columnss" id="frstrow">
        <div class="row">
            <div class="col">
                <img class="prodImg"
                    src="$image"
                    alt="">
                <h6>$productName<span>$price</span></h6>
                <p>Stock."".$stock</p>
                <div>
                    <button type="button" class="btn" class="shop">SHOP</button>
                    <button type="button" class="btn" id="addToCart">ADD TO CART</button>
                </div>
            </div>
            <div class="col">
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
        </div>
    </div>

     '
    }

?>



<!-- <main>
        <div id="shopingP">
            <h1>Shop Everything</h1>
            <p>We bring you truly natural, cruelty-free skincare that delivers results you can see and feel. We also
                believe that skincare should smell and feel amazing and add fun to your daily routine.</p>
        </div>


        <div class="container columnss" id="frstrow">
            <div class="row">
                <div class="col">
                    <img class="prodImg"
                        src="https://cdn.shopify.com/s/files/1/0305/4770/5995/products/wild-violet-01_590x.jpg?v=1579184203"
                        alt="">
                    <h6>Wild Violet Perfume <span>$60.00</span></h6>
                    <p>Stock</p>
                    <div>
                        <button type="button" class="btn" class="shop">SHOP</button>
                        <button type="button" class="btn" id="addToCart">ADD TO CART</button>
                    </div>
                </div>
                <div class="col">
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
            </div>
        </div>


        <!-- 2eme row -->
<div class="container">
    <div class="row">
        <div class="col" id="col1">
            <img class="prodImg"
                src="https://cdn.shopify.com/s/files/1/0305/4770/5995/products/goodmorning-moonflower-01_590x.jpg?v=1579182633"
                alt="">
            <h6>Good Morning <br> Moonflower Cleanser<span>$30.00</span></h6>
            <p>Stock</p>
            <div>
                <button type="button" class="btn btn-primary">SHOP</button>
                <button type="button" class="btn btn-primary">ADD TO CART</button>
            </div>
        </div>
        <div class="col-6" id="shopFace">
            <!-- <img src="https://cdn.shopify.com/s/files/1/0305/4770/5995/files/4060302_3cd40397-9764-4048-b258-ccd2a0fc69cd_700x.jpg?v=1631615545" alt=""> -->
            <div id="contents">
                <p>EDIT</p>
                <h6>ALL BASES COVERED</h6>
                <a href="">SHOP FACE</a>
            </div>
        </div>
        <div class="col" id="col2">
            <img class="prodImg"
                src="https://cdn.shopify.com/s/files/1/0305/4770/5995/products/day-after-dark-03_22af2d73-f96d-4edb-971c-65f6b7c8af42_590x.jpg?v=1580316333"
                alt="">
            <h6>Day After Dark Body Balm <span>$12.00</span></h6>

            <small><s>$24.00</s> </small>
            <p>Stock</p>
            <div>
                <button type="button" class="btn btn-primary">SHOP</button>
                <button type="button" class="btn btn-primary">ADD TO CART</button>
            </div>
        </div>
    </div>
</div>


<!-- 3eme row -->

<div class="container " id="thrtrow">
    <div class="row">
        <div class="col">
            <img class="prodImg"
                src="https://cdn.shopify.com/s/files/1/0305/4770/5995/products/blue-water-serum-01_590x.jpg?v=1579181909"
                alt="">
            <h6>Blue Water Botanical Serum<span>$36.00</span></h6>
            <p>Stock</p>
            <small><s> $45.00 </s></small>
            <div>
                <button type="button" class="btn btn-primary">SHOP</button>
                <button type="button" class="btn btn-primary">ADD TO CART</button>
            </div>
        </div>
        <div class="col">
            <img class="prodImg"
                src="https://cdn.shopify.com/s/files/1/0305/4770/5995/products/bleeding-heart-01_590x.jpg?v=1579182319"
                alt="">
            <h6>Bed of Roses Face Cream<span>$45.00</span></h6>
            <p>Stock</p>
            <div>
                <button type="button" class="btn btn-primary">SHOP</button>
                <button type="button" class="btn btn-primary">ADD TO CART</button>
            </div>
        </div>
        <div class="col">
            <img class="prodImg"
                src="https://cdn.shopify.com/s/files/1/0305/4770/5995/products/baltic-birch-01_590x.jpg?v=1641899017"
                alt="">
            <h6>Baltic Birch Face Daily Mask <span>$18.00</span></h6>
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
    </div>
</div>

<!-- row 4 -->
<div class="container" id="mask">
    <div class="row">
        <div class="col" id="videoRow">
            <video controls autoplay>
                <source src="https://cdn.shopify.com/s/files/1/0880/2126/files/smol-pink.mp4?v=1625468296"
                    type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="col" id="loveTHYSELF">
            <div class="brick__product is-selected">
                <h5>LOVE THYSELF</h5>
                <div class="cart">
                    <a><img src="https://cdn.shopify.com/s/files/1/0880/2126/products/honey-default_1100x.jpg?v=1625688785"
                            alt=""></a>
                    <div id="cartInfo">
                        <p>Realignment Serum </p>
                        <p>$25.00</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col" id="refresh">
                <div class="brick__product is-selected">
                    <h5>REFRESH & REJUVENATE</h5>
                    <div class="cart">
                        <img src="https://cdn.shopify.com/s/files/1/0880/2126/products/honey-default_1100x.jpg?v=1625688785"
                            alt=""><a></a>
                        <div id="cartInfo2">
                            <p>Realignment Serum </p>
                            <p>$25.00</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col" id="imageRow">
                <a><img src="https://cdn.shopify.com/s/files/1/0880/2126/files/smudge-flipped_1080x.jpg?v=1631231766"
                        alt=""></a>
            </div>
        </div>
    </div>
</div>
<h2 id="bestSell">OUR BEST SELLERS</h2>

<div class="container " id="thrtrow">
    <div class="row">
        <div class="col">
            <img class="prodImg"
                src="https://cdn.shopify.com/s/files/1/0880/2126/products/black-oil-default_1100x.jpg?v=1625688647"
                alt="">
            <h6>Antioxidant Detox Serum<span>$25.00</span></h6>
            <p>Stock</p>
            <div>
                <button type="button" class="btn btn-primary">SHOP</button>
                <button type="button" class="btn btn-primary">ADD TO CART</button>
            </div>
        </div>
        <div class="col">
            <img class="prodImg"
                src="https://cdn.shopify.com/s/files/1/0880/2126/products/bottle_1100x.jpg?v=1625688716" alt="">
            <h6>Immunity Serum <span>$25.00</span></h6>
            <p>Stock</p>
            <div>
                <button type="button" class="btn btn-primary">SHOP</button>
                <button type="button" class="btn btn-primary">ADD TO CART</button>
            </div>
        </div>
        <div class="col">
            <img class="prodImg"
                src="https://cdn.shopify.com/s/files/1/0880/2126/products/dropper-square-deafault_1100x.jpg?v=1625688827"
                alt="">
            <h6>Balance Serum<span>$25.00</span></h6>
            <p>Stock</p>
            <div>
                <button type="button" class="btn btn-primary">SHOP</button>
                <button type="button" class="btn btn-primary">ADD TO CART</button>
            </div>
        </div>
        <div class="col">
            <img class="prodImg"
                src="https://cdn.shopify.com/s/files/1/0880/2126/products/pump-default_1100x.jpg?v=1625688738" alt="">
            <h6>Hyaluronic Moisturizer <span>$25.00</span></h6>
            <p>Stock</p>
            <div>
                <button type="button" class="btn btn-primary">SHOP</button>
                <button type="button" class="btn btn-primary">ADD TO CART</button>
            </div>
        </div>
    </div>
</div>
<div class="container " id="thrtrow">
    <div class="row">
        <div class="col">
            <img class="prodImg"
                src="https://cdn.shopify.com/s/files/1/0880/2126/products/cream-psd_1100x.jpg?v=1625688796" alt="">
            <h6>Renew Toner<span>$25.00</span></h6>
            <p>Stock</p>
            <div>
                <button type="button" class="btn btn-primary">SHOP</button>
                <button type="button" class="btn btn-primary">ADD TO CART</button>
            </div>
        </div>
        <div class="col">
            <img class="prodImg"
                src="https://cdn.shopify.com/s/files/1/0880/2126/products/clear-drop-default_1100x.jpg?v=1625688807"
                alt="">
            <h6>Resurfacing Serum<span>$25.00</span></h6>
            <p>Stock</p>
            <div>
                <button type="button" class="btn btn-primary">SHOP</button>
                <button type="button" class="btn btn-primary">ADD TO CART</button>
            </div>
        </div>
        <div class="col">
            <img class="prodImg"
                src="https://cdn.shopify.com/s/files/1/0880/2126/products/tall-bottle-default_1100x.jpg?v=1625688791"
                alt="">
            <h6>Recovery Serum<span>$25.00</span></h6>
            <p>Stock</p>
            <div>
                <button type="button" class="btn btn-primary">SHOP</button>
                <button type="button" class="btn btn-primary">ADD TO CART</button>
            </div>
        </div>
        <div class="col">
            <img class="prodImg"
                src="https://cdn.shopify.com/s/files/1/0880/2126/products/black-pump-default_1100x.jpg?v=1625688754"
                alt="">
            <h6>Nourishing Cleanser <span>$25.00</span></h6>
            <p>Stock</p>
            <div>
                <button type="button" class="btn btn-primary">SHOP</button>
                <button type="button" class="btn btn-primary">ADD TO CART</button>
            </div>
        </div>
    </div>
</div>
<div class="container" id="lastRow">
    <div class="row">
        <div class="col">
            <img src="https://cdn.shopify.com/s/files/1/0880/2126/files/self_150x.png?v=1625471236" alt="">
        </div>
        <div class="col">
            <img src="https://cdn.shopify.com/s/files/1/0880/2126/files/vanfair_213x.png?v=1625471236" alt="">
        </div>
        <div class="col">
            <img src="https://cdn.shopify.com/s/files/1/0880/2126/files/people_117x.png?v=1625471236" alt="">
        </div>
        <div class="col">
            <img src="https://cdn.shopify.com/s/files/1/0880/2126/files/bustle_165x.png?v=1631232176" alt="">
        </div>
    </div>
</div>
</main> -->
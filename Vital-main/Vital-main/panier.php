
<table class="table">
            <thead>
              <tr>
                <th scope="col" class="h5">PRODUCT</th>
                <th scope="col">NAME</th>
                <th scope="col">PRICE</th>
                <th scope="col">Quantity</th>
                <th scope="col">TOTAL</th>
                <th scope="col"></th>
              </tr>
            </thead>
                                    <tbody>
<?php 

include "navbar.php";
    require 'connect.php';

                                    if (!empty($_SESSION['shop-cart'])) {
                                        $total = 0;
                                        foreach($_SESSION['shop-cart'] as $key => $value){
                                        ?>
                                        
                <th scope="row">
                  
                    <img src="<?php echo $value["image"];?>" class="img-fluid rounded-3" style="width: 120px;" alt="Book">
                
                </th>
                <th class="align-middle">
                  <div class="d-flex align-items-center">
                    <div class="flex-column ms-4">
                      <p class="mb-2"><?php echo $value["name"];?></p>
                    </div>
                  </div>
                </th>
                <td class="align-middle">
                  <p class="mb-0" style="font-weight: 500;">$<?php echo $value["price"];?>,00</p>
                </td>
                <td class="align-middle">
                  <div class="d-flex flex-row">
                    <button class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <i class="fas fa-minus"></i>
                    </button>

                    <input class="form-control" type="number"  min="0" max="1000" value="<?php echo $value["quantity"];?>">
                    <button class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                </td>
                <td class="align-middle"> <a href="#!" name="remove" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a></td>
                
              </tr>

                                <?php
                                        }
                                    }
                                ?>
                                </tbody>
 </table>


    



   

    <footer class="text-center text-lg-start bg-light text-muted">
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
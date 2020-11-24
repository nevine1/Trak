<?php
include "includes/db.php";
include "includes/header.php";

?>

<!--starting of banner-->
<div class="menu-intro d-flex flex-column text-center">

    <h2>Trak's Burger's Menu</h3>

</div>

<!--ending of banner-->

<!-- starting of menu items -->
<div class="menu_all">
    <nav class="menu_nav" id="my-tabs">
        <ul class="list-unstyled">
            <li id="burger">Burgers</li>
            <li id="grilled" class="inactive">Grilled & Gyro</li>
            <!-- <li id="gryo" class="inactive">Gyro</li> -->
            <li id="pizza" class="inactive">Pizza</li>
            <li id="chicken" class="inactive">Chicken & Panini</li>
            <li id="dinner" class="inactive">Italian Dinner</li>
            <!-- <li id="panini" class="inactive">Panini</li> -->
            <!-- <li id="sides" class="inactive">Sides</li>
            <li id="fries" class="inactive">Fries & Drinks</li>
            <li id="cakes" class="inactive">Cakes</li> -->


        </ul>
    </nav>

    <!-- ending of menu items  -->


    <div class=" menu_content">
        <div id="burger-content" class="content">
            <div class="menu-m">
                <div class="container">
                    <h2 class="text-center">Trak's burger menu</h2>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="">
                                <h3 style="font-size:23px;">Cheese Burger <span class="price_p float-right" style="font-size:18px;">5.99$</span></h3>
                                <p>Lorem ipsum dolor sit am Optio minima cumque sed commodi quaerat aliquid, amet iste reprehenderit cupiditate saepe!
                            </div>
                            </p>
                            <!-- <div class="price ">
                                <div class="col-md-4 col-sm-4">
                                    <p> <span class="price_p">5.99$</span></p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <hr/>
                    <div class="col-md-12 col-sm-12">
                        <div class="">
                            <h3 style="font-size:23px;">Cheese Burger <span class="price_p float-right" style="font-size:18px;">5.99$</span></h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi, voluptatem.</p>
                            <!-- <div class="price ">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <p> <span class="price_p">5.99$</span></p>
                                    </div>

                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---------------------------- starting of pizza menu ------------------------------>
        <div id="pizza-content" class="content">
            <div class="menu-m">
                <div class="container">
                    <h2 class="text-center">Best Ever Pizzaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</h2>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="menu_items">
                                <h3>Cheese Pizza</h3>
                                <p>Mozzerlla cheese, cheddar cheed ......</p>
                                <div class="price ">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <p><span class="type">S:</span> <span class="price_p">5.99$</span></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <p><span class="type">M:</span> <span class="price_p">5.99$</span></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <p><span class="type">L:</span> <span class="price_p">5.99$</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="menu_items">
                                <h3>Pepperoni Pizza</h3>
                                <p>Pepperoni, Sausage, G.Beef, Ham, Cheese.</p>
                                <div class="price ">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <p><span class="type">S:</span> <span class="price_p">5.99$</span></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <p><span class="type">M:</span> <span class="price_p">5.99$</span></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <p><span class="type">L:</span> <span class="price_p">5.99$</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="menu_items">
                                <h3>Veggie Pizza</h3>
                                <p>Onion, G.Pepper, Mushroom, Black Olive, Banana Pepper, Cheese.</p>
                                <div class="price ">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <p><span class="type">S:</span> <span class="price_p">5.99$</span></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <p><span class="type">M:</span> <span class="price_p">5.99$</span></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <p><span class="type">L:</span> <span class="price_p">5.99$</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="menu_items">
                                <h3>Suppreme Pizza</h3>
                                <p>3 Choice Meat & 3 Choice Veggie.</p>
                                <div class="price ">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <p><span class="type">S:</span> <span class="price_p">5.99$</span></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <p><span class="type">M:</span> <span class="price_p">5.99$</span></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <p><span class="type">L:</span> <span class="price_p">5.99$</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="menu_items">
                                <h3>Steak & Cheese Pizza</h3>
                                <p>Mozzerlla cheese, ...... ......</p>
                                <div class="price ">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <p><span class="type">S:</span> <span class="price_p">5.99$</span></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <p><span class="type">M:</span> <span class="price_p">5.99$</span></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <p><span class="type">L:</span> <span class="price_p">5.99$</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="menu_items">
                                <h3>Chicken Pizza</h3>
                                <p>Mozzerlla cheese, cheddar cheed ......</p>
                                <div class="price ">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <p><span class="type">S:</span> <span class="price_p">5.99$</span></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <p><span class="type">M:</span> <span class="price_p">5.99$</span></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <p><span class="type">L:</span> <span class="price_p">5.99$</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="menu_items">
                                <h3>Calzone</h3>
                                <p>Mozzerlla cheese, cheddar cheed ......</p>
                                <div class="price ">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <p><span class="type">S:</span> <span class="price_p">5.99$</span></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <p><span class="type">M:</span> <span class="price_p">5.99$</span></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <p><span class="type">L:</span> <span class="price_p">5.99$</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!-------------------------- ending of pizza menu -------------------------------->
        <div id="grilled-content" class="content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio minima cumque sed commodi quaerat aliquid, amet iste reprehenderit cupiditate saepe!
        </div>

        <!---------------------------- starting of pizza menu ------------------------------>
        <div id="gyro-content" class="content">
            <div class="menu-m">
                <div class="container">
                    <h2 class="text-center">Best Ever Pizza</h2>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="menu_items">
                                <h3>Cheese Pizza</h3>
                                <p>Mozzerlla cheese, cheddar cheed ......</p>
                                <div class="price ">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <p><span class="type">S:</span> <span class="price_p">5.99$</span></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <p><span class="type">M:</span> <span class="price_p">5.99$</span></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <p><span class="type">L:</span> <span class="price_p">5.99$</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="menu_items">
                                <h3>Pepperoni Pizza</h3>
                                <p>Pepperoni, Sausage, G.Beef, Ham, Cheese.</p>
                                <div class="price ">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <p><span class="type">S:</span> <span class="price_p">5.99$</span></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <p><span class="type">M:</span> <span class="price_p">5.99$</span></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <p><span class="type">L:</span> <span class="price_p">5.99$</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
        <!-------------------------- ending of pizza menu -------------------------------->
    </div>

</div>



<?php

include "includes/footer.php";
?>


<script>
   // $(function() {
       // $('.menu_nav ul li').click(function() {
       //    // var myID = $(this).attr('id');

            // remove class inactive when clicking on this li 
           // $(this).removeClass('inactive').siblings().addClass('inactive');

            //hid all div content when clicking on li
            //$('.menu_content .content').hide();

            //get the id from the same Li , and add -content to open its content 
            //$('#' + myID + '-content').fadeIn(400);

        //});
  //  });
</script>
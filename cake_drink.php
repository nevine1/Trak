<?php
include "includes/db.php";
include "includes/header.php";

?>

<!--starting of banner-->
<div class="menu-intro d-flex flex-column text-center">

    <h2> Pizza & Italian Dinner</h3>

</div>

<!--ending of banner-->

<!-- starting of menu items -->
<div class="menu_all">
    <!-- starting of nav tab items  -->
    <nav class="menu_nav" id="my-tabs">
        <ul class="list-unstyled">
            <li id="cake">Cakes</li>
            <li id="drink" class="inactive">Drinks </li>
            <li id="fries" class="inactive">Fries</li>

        </ul>
    </nav>

    <!-- ending of nav tab items  -->

    <div class=" menu_content">
        <div class="container my-container">
            <div id="cake-content" class="content">
                <div class="menu-m">
                    <h2 class="text-center">Trak's <span class="heading-span">Cake's</span> Menu </h2>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">

                            <div class="top_item">
                                <div class="row">
                                    <div class="col-md-10 col-sm-10 col-10">
                                        <!-- <p class=" ">All served with May, Lettuce, Tomato and Cheese </p> -->
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right  top_span1 ">1pc</span></div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <div class="menu-item menu_item-1">
                                <div class="row">
                                    <div class="col-md-10 col-sm-10 col-10">
                                        <h3> Chocolate Cake </h3>
                                        <!-- <p>Grilled Steak, Onion, G.Pepper, Provolone</p> -->
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right   ">2.99</span></div>

                                </div>
                            </div>
                        </div>

                        <hr class="hr menu_item-1" />

                        <div class="col-md-12 col-sm-12">
                            <div class="menu-item menu_item-2">
                                <div class="row">
                                    <div class="col-md-10 col-sm-10 col-10">
                                        <h3>Raspberry Cake </h3>
                                        <!-- <p>Grilled Steak, Onion, G.Pepper, Swiss</p> -->
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right   " style="padding:  2px;">2.99 </span></div>

                                </div>
                            </div>
                        </div>

                        <hr class="hr menu_item-2" />

                        <div class="col-md-12 col-sm-12">
                            <div class="menu-item menu_item-3">
                                <div class="row">
                                    <div class="col-md-10 col-sm-10 col-10">
                                        <h3>Carrot Cake </h3>

                                    </div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right   ">2.99 </span></div>

                                </div>
                            </div>
                        </div>

                        <hr class="hr menu_item-3" />

                        <div class="col-md-12 col-sm-12">
                            <div class="menu-item menu_item-4">
                                <div class="row">
                                    <div class="col-md-10 col-sm-10 col-10">
                                        <h3>CheeseCake </h3>

                                    </div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right   ">2.99 </span></div>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!---------------------------- ending of pizza menu ------------------------------>

            <!---------------------------- starting of italian dinner menu ------------------------------>

            <div id="drink-content" class="content">
                <div class="menu-m">
                    <h2 class="text-center">Trak's <span class="heading-span">Drinks' </span> Menu </h2>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">

                            <div class="top_item">
                                <div class="row">
                                    <div class="col-md-9 col-sm-9 col-9">
                                        <!-- <p class=" ">All served with May, Lettuce, Tomato and Cheese </p> -->
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-1"><span class="float-right   top_span1">REG.</span></div>

                                    <div class="col-md-1 col-sm-1 col-1"><span class="float-right   top_span1">LRG</span></div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <div class="menu-item menu_item-1">
                                <div class="row">
                                    <div class="col-md-9 col-sm-9 col-9">
                                        <h3>Lemonade</h3>
                                        <p>Regular, Strawberry, Raspberry</p>
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-1"><span class="float-right  pizza_span ">1.99 </span></div>

                                    <div class="col-md-1 col-sm-1 col-1"><span class="float-right   pizza_span ">2.69 </span></div>
                                </div>
                            </div>
                        </div>

                        <hr class="hr" />

                        <div class="col-md-12 col-sm-12">
                            <div class="menu-item menu_item-2">
                                <div class="row">
                                    <div class="col-md-9 col-sm-9 col-9">
                                        <h3>Kool-Aid</h3>
                                        <p>Hawailan Punch, Berry Blue</p>
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-1"><span class="float-right  pizza_span  ">1.99 </span></div>

                                    <div class="col-md-1  col-sm-1 col-1"><span class=" pizza_span ">2.69 </span></div>
                                </div>
                            </div>
                        </div>

                        <hr class="hr" />

                        <div class="col-md-12 col-sm-12">
                            <div class="menu-item menu_item-2">
                                <div class="row">
                                    <div class="col-md-9 col-sm-9 col-9">
                                        <h3>20 OZ Soda </h3>
                                        <!-- <p>Grilled Steak, Onion, G.Pepper, Swiss</p> -->
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-1"><span class="float-right  pizza_span  ">1.79 </span></div>

                                    <div class="col-md-1  col-sm-1 col-1"><span class=" "></span></div>
                                </div>
                            </div>
                        </div>


                        <hr class="hr" />

                        <div class="col-md-12 col-sm-12">
                            <div class="menu-item menu_item-2">
                                <div class="row">
                                    <div class="col-md-9 col-sm-9 col-9">
                                        <h3>2 Liter Soda </h3>
                                        <!-- <p>Grilled Steak, Onion, G.Pepper, Swiss</p> -->
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-1"><span class="float-right   pizza_span ">2.99 </span></div>

                                    <div class="col-md-1  col-sm-1 col-1"><span class=" "></span></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-------------------------- ending of italian dinner menu -------------------------------->


            <!-------------------------- starting of gyro menu -------------------------------->
            <div id="fries-content" class="content">
                <div class="menu-m">
                    <h2 class="text-center">Trak's Fries'<span class="heading-span">Fries' </span> Menu </h2>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">

                            <div class="top_item">
                                <div class="row">
                                    <div class="col-md-9 col-sm-9 col-9">
                                        <!-- <p class=" ">All served with May, Lettuce, Tomato and Cheese </p> -->
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-1"><span class="float-right   top_span1 ">REG.</span></div>

                                    <div class="col-md-1 col-sm-1 col-1"><span class="float-right   top_span1 ">LRG</span></div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <div class="menu-item menu_item-1">
                                <div class="row">
                                    <div class="col-md-9 col-sm-9 col-9">
                                        <h3>Fries</h3>
                                        <!-- <p>Grilled Steak, Onion, G.Pepper, Provolone</p> -->
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-1"><span class="float-right   pizza_span">2.29 </span></div>

                                    <div class="col-md-1 col-sm-1 col-1"><span class="float-right  pizza_span ">2.99 </span></div>
                                </div>
                            </div>
                        </div>

                        <hr class="hr" />

                        <div class="col-md-12 col-sm-12">
                            <div class="menu-item menu_item-2">
                                <div class="row">
                                    <div class="col-md-9 col-sm-9 col-9">
                                        <h3>Cheese Fries </h3>
                                        <!-- <p>Grilled Steak, Onion, G.Pepper, Swiss</p> -->
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-1"><span class="float-right   pizza_span">2.69 </span></div>

                                    <div class="col-md-1  col-sm-1 col-1"><span class="pizza_span ">3.99 </span></div>
                                </div>
                            </div>
                        </div>

                        <hr class="hr" />

                        <div class="col-md-12 col-sm-12">
                            <div class="menu-item menu_item-2">
                                <div class="row">
                                    <div class="col-md-9 col-sm-9 col-9">
                                        <h3>Chili Fries </h3>
                                        <!-- <p>Grilled Steak, Onion, G.Pepper, Swiss</p> -->
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-1"><span class="float-right   pizza_span">2.69 </span></div>

                                    <div class="col-md-1  col-sm-1 col-1"><span class=" pizza_span">3.99 </span></div>
                                </div>
                            </div>
                        </div>


                        <hr class="hr" />

                        <div class="col-md-12 col-sm-12">
                            <div class="menu-item menu_item-2">
                                <div class="row">
                                    <div class="col-md-9 col-sm-9 col-9">
                                        <h3>Chili Cheese Fries </h3>
                                        <!-- <p>Grilled Steak, Onion, G.Pepper, Swiss</p> -->
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-1"><span class="float-right   pizza_span">2.99 </span></div>

                                    <div class="col-md-1  col-sm-1 col-1"><span class=" pizza_span">4.99 </span></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-------------------------- ending of gyro menu -------------------------------->


        </div>

    </div>

</div> <!-- ending of menu items -->



<?php

include "includes/footer.php";

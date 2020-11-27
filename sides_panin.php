<?php
include "includes/db.php";
include "includes/header.php";

?>

<!--starting of banner-->
<div class="menu-intro d-flex flex-column text-center">

    <h2> Sides & Panin & Subs</h3>

</div>

<!--ending of banner-->

<!-- starting of menu items -->
<div class="menu_all">
    <!-- starting of nav tab items  -->
    <nav class="menu_nav" id="my-tabs">
        <ul class="list-unstyled">
            <li id="sides">Sides</li>
            <li id="panin" class="inactive">Panin </li>
            <li id="subs" class="inactive">SUBS</li>

        </ul>
    </nav>

    <!-- ending of nav tab items  -->

    <div class=" menu_content">
        <div class="container my-container">
            <div id="sides-content" class="content">
                <div class="menu-m">
                    <h2 class="text-center">Trak's <span class="heading-span">Sides' </span> Menu </h2>
                    <div class="row">


                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="menu-item menu_item-1">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-8">
                                        <h3>Cheese Sticks </h3>

                                    </div>
                                    <div class="col-md-2 col-sm-2 col-2 "><span class="float-right side_second">3.99</span></div>
                                    <div class="col-md-2 col-sm-2 col-2 "><span class="num_span float-right   ">6pcs</span></div>

                                </div>
                            </div>
                        </div>

                        <hr class="hr menu_item-1" />

                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="menu-item menu_item-2">
                                <div class="row">
                                    <div class=" col-md-8 col-sm-8 col-8">
                                        <h3>Oninon Rings </h3>

                                    </div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right  side_second">2.99</span></div>
                                    <div class="col-md-2 col-sm-2 col-2 "><span class="float-right "></span></div>

                                </div>
                            </div>
                        </div>

                        <hr class="hr menu_item-2" />

                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="menu-item menu_item-3">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-8">
                                        <h3>Chicken Strips </h3>

                                    </div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right   side_second">4.99</span></div>
                                    <div class="col-md-2 col-sm-2 col-2 "><span class="num_span float-right ">4pcs</span></div>
                                </div>
                            </div>
                        </div>

                        <hr class="hr menu_item-3" />

                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="menu-item menu_item-4">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-8">
                                        <h3>Chicken Nuggets </h3>

                                    </div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right   side_second">3.99</span></div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right   num_span  ">6pcs</span></div>
                                </div>
                            </div>
                        </div>

                        <hr class="hr menu_item-4" />

                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="menu-item menu_item-5">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-8">
                                        <h3>Potato Wedges </h3>

                                    </div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right side_second ">2.99</span></div>
                                    <div class="col-md-2 col-sm-2 col-2 "><span class="float-right "></span></div>
                                </div>
                            </div>
                        </div>

                        <hr class="hr menu_item-5" />

                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="menu-item menu_item-6">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-8">
                                        <h3>Chicken Wing Ding </h3>

                                    </div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right   side_second">4.99</span></div>
                                    <div class="col-md-2 col-sm-2 col-2 "><span class="num_span  float-right">6pcs</span></div>
                                </div>
                            </div>
                        </div>

                        <hr class="hr menu_item-6" />

                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="menu-item menu_item-7">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-8">
                                        <h3>Fried Shrimp </h3>

                                    </div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right   side_second">4.99 </span> </div>
                                    <div class="col-md-2 col-sm-2 col-2 "><span class="num_span float-right "> 10pcs</span></div>
                                </div>
                            </div>
                        </div>

                        <hr class="hr menu_item-7" />


                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="menu-item menu_item-8">
                                <div class="row">
                                    <div class="col-md-7 col-sm-7 col-7">
                                        <h3>Fried Fish </h3>

                                    </div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right  side_span1 ">3.99 </span> </div>
                                    <div class="col-md-2 col-sm-2 col-2 "> <span class="float-right  num_span side_span2 ">1pc</span> </div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right  side_span1 ">3.99 </span> </div>
                                    <div class="col-md-2 col-sm-2 col-2 side_span3 "><span class="float-right num_span side_span2 "> 2pcs </span></div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <!---------------------------- ending of sides menu ------------------------------>

            <!---------------------------- starting of subs menu ------------------------------>

            <div id="subs-content" class="content">
                <div class="menu-m">
                    <h2 class="text-center">Trak's <span class="heading-span">Subs'  </span>  Menu </h2>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">

                            <div class="top_item">
                                <div class="row">
                                    <div class=" col-md-8 col-sm-8 col-8">

                                    </div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right   sub_second">6"</span></div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right   ">12"</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="menu-item menu_item-1">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-8">
                                        <h3>Italian </h3>

                                    </div>
                                    <div class="col-md-2 col-sm-2 col-2 "><span class="float-right  sub_second2">4.29</span></div>
                                    <div class="col-md-2 col-sm-2 col-2 "><span class="float-right  ">6.89</span></div>

                                </div>
                            </div>
                        </div>

                        <hr class="hr menu_item-1" />

                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="menu-item menu_item-2">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-8">
                                        <h3>Club </h3>

                                    </div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right   sub_second2">4.29</span></div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right   ">7.89</span></div>

                                </div>
                            </div>
                        </div>

                        <hr class="hr menu_item-2" />

                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="menu-item menu_item-3">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-8">
                                        <h3>Turkey </h3>

                                    </div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right  sub_second2 ">4.29</span></div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right   ">6.89</span></div>
                                </div>
                            </div>
                        </div>

                        <hr class="hr menu_item-3" />

                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="menu-item menu_item-4">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-8">
                                        <h3>MeatBall Marinara </h3>

                                    </div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right sub_second2">4.29</span></div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right  ">6.89</span></div>
                                </div>
                            </div>
                        </div>

                        <hr class="hr menu_item-4" />

                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="menu-item menu_item-5">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-8">
                                        <h3>Falafel Sandwich </h3>

                                    </div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right sub_second2">4.29</span></div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right  ">6.89</span></div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <!-------------------------- ending of subs  menu -------------------------------->


            <!-------------------------- starting of panin menu -------------------------------->
            <div id="panin-content" class="content">
                <div class="menu-m">
                    <h2 class="text-center">Trak's <span class="heading-span">Panini's </span> Menu </h2>
                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="menu-item menu_item-1">
                                <div class="row">
                                    <div class="col-md-10 col-sm-10 col-10">
                                        <h3>Chicken Pesto </h3>
                                        <!-- <p>Grilled Steak, Onion, G.Pepper, Provolone</p> -->
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right  ">4.95</span></div>
                                </div>
                            </div>
                        </div>

                        <hr class="hr menu_item-1" />

                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="menu-item menu_item-2">
                                <div class="row">
                                    <div class="col-md-10 col-sm-10 col-10">
                                        <h3>Ham & 2 Cheese </h3>
                                        <!-- <p>Grilled Steak, Onion, G.Pepper, Swiss</p> -->
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right  ">4.95</span></div>
                                </div>
                            </div>
                        </div>

                        <hr class="hr menu_item-2" />

                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="menu-item menu_item-3">
                                <div class="row">
                                    <div class="col-md-10 col-sm-10 col-10">
                                        <h3>Chicken Bacon Ranch</h3>

                                    </div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right  ">4.95</span></div>

                                </div>
                            </div>
                        </div>

                        <hr class="hr menu_item-3" />

                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="menu-item menu_item-4">
                                <div class="row">
                                    <div class="col-md-10 col-sm-10 col-10">
                                        <h3>Club</h3>

                                    </div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right  ">4.95</span></div>

                                </div>
                            </div>
                        </div>

                        <hr class="hr menu_item-4" />

                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="menu-item menu_item-5">
                                <div class="row">
                                    <div class="col-md-10 col-sm-10 col-10">
                                        <h3>Rubeun </h3>

                                    </div>
                                    <div class="col-md-2 col-sm-2 col-2"><span class="float-right  ">4.95</span></div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <!-------------------------- ending of panin menu -------------------------------->


        </div>

    </div>

</div> <!-- ending of menu items -->



<?php

include "includes/footer.php";

<?php
include "includes/db.php";
include "includes/header.php";

?>

<!--starting of banner-->
<div class="burg-intro d-flex flex-column text-center">

  <h2>Trak's Burger's Menu</h3>

</div>

<!--ending of banner-->

<!-- starting of menu items -->
<div class="menu_all">
  <!-- starting of nav tab items  -->
  <nav class="menu_nav" id="my-tabs">
    <ul class="list-unstyled">
      <li id="burger">Burgers</li>
      <li id="grilled" class="inactive">Grilled </li>
      <li id="gyro" class="inactive">Gyro</li>
    </ul>
  </nav>

  <!-- ending of nav tab items  -->


  <div class=" menu_content">
    <div class="container my-container">

      <div id="burger-content" class="content">
        <div class="menu-m">
          <h2 class="text-center">Trak's <span class="heading-span">Burger's</span> Menu </h2>
          <div class="row">

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-1">
                <div class="row">
                  <div class="col-md-10 col-sm-10 col-10">
                    <h3>Cheese Burger </h3>
                    <!-- <p>Grilled Steak, Onion, G.Pepper, Provolone</p> -->
                  </div>
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right  ">4.29</span></div>
                </div>
              </div>
            </div>

            <hr class="hr menu_item-1" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-2">
                <div class="row">
                  <div class="col-md-10 col-sm-10 col-10">
                    <h3>T.R. Double </h3>
                    <!-- <p>Grilled Steak, Onion, G.Pepper, Swiss</p> -->
                  </div>
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right  ">5.29</span></div>
                </div>
              </div>
            </div>

            <hr class="hr menu_item-2" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-3">
                <div class="row">
                  <div class="col-md-10 col-sm-10 col-10">
                    <h3>T.R. Bacon </h3>

                  </div>
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right  ">4.99</span></div>

                </div>
              </div>
            </div>

            <hr class="hr menu_item-3" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-4">
                <div class="row">
                  <div class="col-md-10 col-sm-10 col-10">
                    <h3>T.R. Bologna</h3>

                  </div>
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right  ">3.99</span></div>

                </div>
              </div>
            </div>

            <hr class="hr menu_item-4" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-5">
                <div class="row">
                  <div class="col-md-10 col-sm-10 col-10">
                    <h3>T.R. Halapeno </h3>

                  </div>
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right  ">4.29</span></div>
                </div>
              </div>
            </div>

            <hr class="hr menu_item-5" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-6">
                <div class="row">
                  <div class="col-md-10 col-sm-10 col-10">
                    <h3>T.R. Turkey </h3>
                    <!-- <p>Grilled Turkey, Onion, G.Pepper, Swiss</p> -->
                  </div>
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right  ">3.99</span></div>

                </div>
              </div>
            </div>

            <hr class="hr menu_item-6" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-7">
                <div class="row">
                  <div class="col-md-10 col-sm-10 col-10">
                    <h3>T.R. Chicken </h3>
                    <!-- <p>Grilled Onion, Bacon, G.Pepper, Black Olive, Swiss </p> -->
                  </div>
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right  ">3.99</span></div>
                </div>
              </div>
            </div>

            <hr class="hr menu_item-7" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-8">
                <div class="row">
                  <div class="col-md-10 col-sm-10 col-10">
                    <h3>T.R. Fish </h3>
                    <!-- <p>Grilled Turkey, Onion, G.Pepper, Swiss</p> -->
                  </div>
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right  ">3.99</span></div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div> <!-- ending of burger content div -->
      <!---------------------------- ending of burger menu ------------------------------>

      <!---------------------------- starting of grilled Philly menu ------------------------------>

      <div id="grilled-content" class="content">
        <div class="menu-m">
          <h2 class="text-center">Trak's <span class="heading-span">Grilled Philly's </span> Menu </h2>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-12">

              <div class="top_item">
                <div class="row">
                  <div class=" col-md-8 col-sm-8 col-8">
                    <p class=" ">All served with May, Lettuce, Tomato and Cheese </p>
                  </div>
                  <div class="col-md-2 col-sm-2 col-2 grill "><span class="float-right  grill_span grill_second">6"</span></div>
                  <div class="col-md-2 col-sm-2 col-2 grill"><span class="float-right  grill_span">12"</span></div>
                </div>
              </div>
            </div>

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-1">
                <div class="row">
                  <div class="col-md-8 col-sm-8 col-8">
                    <h3>Steak Philly </h3>
                    <p>Grilled Steak, Onion, G.Pepper, Provolone</p>
                  </div>
                  <div class="col-md-2 col-sm-2 col-2 grill2"><span class="float-right grill_span2  grill_second2">4.69</span></div>
                  <div class="col-md-2 col-sm-2 col-2 grill2"><span class="float-right grill_span2 ">7.99</span></div>

                </div>
              </div>
            </div>

            <hr class="hr menu_item-1" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-2">
                <div class="row">
                  <div class=" col-md-8 col-sm-8 col-8">
                    <h3>Steak Philly </h3>
                    <p>Grilled Steak, Onion, G.Pepper, Swiss</p>
                  </div>
                  <div class="col-md-2 col-sm-2 col-2 grill2"><span class="float-right grill_span2  grill_second2">4.69</span></div>
                  <div class="col-md-2 col-sm-2 col-2 grill2"><span class="float-right grill_span2  ">4.69</span></div>

                </div>
              </div>
            </div>

            <hr class="hr menu_item-2" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-3">
                <div class="row">
                  <div class="col-md-8 col-sm-8 col-8">
                    <h3>Chicken Teriyake </h3>
                    <p>Grilled Chicken, Onion, G.Pepper, Swiss</p>
                  </div>
                  <div class="col-md-2 col-sm-2 col-2 grill2"><span class="float-right grill_span2 grill_second2">4.69</span></div>
                  <div class="col-md-2 col-sm-2 col-2 grill2"><span class="float-right grill_span2 ">7.99</span></div>
                </div>
              </div>
            </div>

            <hr class="hr menu_item-3" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-4">
                <div class="row">
                  <div class="col-md-8 col-sm-8 col-8">
                    <h3>Chicken Buffalo </h3>
                    <p>Grilled Chicken, Onion, G.Pepper, Swiss</p>
                  </div>
                  <div class="col-md-2 col-sm-2 col-2 grill2"><span class="float-right grill_span2 grill_second2">4.69</span></div>
                  <div class="col-md-2 col-sm-2 col-2 grill2"><span class="float-right  grill_span2 ">7.99</span></div>
                </div>
              </div>
            </div>

            <hr class="hr menu_item-4" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-5">
                <div class="row">
                  <div class="col-md-8 col-sm-8 col-8">
                    <h3>Chicken Bacon Ranch </h3>
                    <p>Grilled Chicken, Bacon, Onion, G.Pepper, Swiss</p>
                  </div>
                  <div class="col-md-2 col-sm-2 col-2 grill2"><span class="float-right grill_span2 grill_second2">4.69</span></div>
                  <div class="col-md-2 col-sm-2 col-2 grill2"><span class="float-right grill_span2 ">7.99</span></div>
                </div>
              </div>
            </div>

            <hr class="hr menu_item-5" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-6">
                <div class="row">
                  <div class="col-md-8 col-sm-8 col-8">
                    <h3>Turkey Philly </h3>
                    <p>Grilled Turkey, Onion, G.Pepper, Swiss</p>
                  </div>
                  <div class="col-md-2 col-sm-2 col-2 grill2"><span class="float-right  grill_span2 grill_second2">4.69</span></div>
                  <div class="col-md-2 col-sm-2 col-2 grill2"><span class="float-right grill_span2 ">7.99</span></div>
                </div>
              </div>
            </div>

            <hr class="hr menu_item-6" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-7">
                <div class="row">
                  <div class="col-md-8 col-sm-8 col-8">
                    <h3>Grilled Veggie </h3>
                    <p>Grilled Onion, Bacon, G.Pepper, Black Olive, Swiss </p>
                  </div>
                  <div class="col-md-2 col-sm-2 col-2 grill2 "><span class="float-right grill_span2 grill_second2">4.69</span></div>
                  <div class="col-md-2 col-sm-2 col-2 grill2 "><span class="float-right grill_span2 ">7.99</span></div>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>

      <!-------------------------- ending of grilled Philly menu -------------------------------->


      <!-------------------------- starting of gyro menu -------------------------------->
      <div id="gyro-content" class="content">
        <div class="menu-m">
          <h2 class="text-center">Trak's <span class="heading-span">Gyro's</span> Menu </h2>
          <div class="row">


            <div class="col-md-12 col-sm-12">
              <div class="menu-item menu_item-1">
                <div class="row">
                  <div class="col-md-10 col-sm-10 col-10">
                    <h3>Lamp Gyros </h3>
                    <!-- <p>Grilled Steak, Onion, G.Pepper, Provolone</p> -->
                  </div>
                  <!-- <div class="col-md-1"><span class=" ">4.69</span></div> -->
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right   ">5.99</span></div>
                </div>
              </div>
            </div>

            <hr class="hr menu_item-1" />

            <div class="col-md-12 col-sm-12">
              <div class="menu-item menu_item-2">
                <div class="row">
                  <div class="col-md-10 col-sm-10 col-10">
                    <h3>Chicken Gyros </h3>
                    <!-- <p>Grilled Steak, Onion, G.Pepper, Provolone</p> -->
                  </div>
                  <!-- <div class="col-md-1"><span class=" ">4.69</span></div> -->
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right   ">5.99</span></div>
                </div>
              </div>
            </div>

            <hr class="hr menu_item-2" />

            <div class="col-md-12 col-sm-12">
              <div class="menu-item menu_item-3">
                <div class="row">
                  <div class="col-md-10 col-sm-10 col-10">
                    <h3>Quesadillas Gyros </h3>
                    <!-- <p>Grilled Steak, Onion, G.Pepper, Provolone</p> -->
                  </div>
                  <!-- <div class="col-md-1"><span class=" ">4.69</span></div> -->
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right   ">5.99</span></div>
                </div>
              </div>
            </div>

            <hr class="hr menu_item-3" />

            <div class="col-md-12 col-sm-12">
              <div class="menu-item menu_item-4">
                <div class="row">
                  <div class="col-md-10 col-sm-10 col-10">
                    <h3>Greek Salad </h3>
                    <!-- <p>Grilled Steak, Onion, G.Pepper, Provolone</p> -->
                  </div>
                  <!-- <div class="col-md-1"><span class=" ">4.69</span></div> -->
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right   ">6.49</span></div>
                </div>
              </div>
            </div>

            <hr class="hr menu_item-4" />

            <div class="col-md-12 col-sm-12">
              <div class="menu-item menu_item-5">
                <div class="row">
                  <div class="col-md-10 col-sm-10 col-10">
                    <h3>Chicken Salad </h3>
                    <!-- <p>Grilled Steak, Onion, G.Pepper, Provolone</p> -->
                  </div>
                  <!-- <div class="col-md-1"><span class=" ">4.69</span></div> -->
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right   ">6.99</span></div>
                </div>
              </div>
            </div>

            <hr class="hr menu_item-5" />

            <div class="col-md-12 col-sm-12">
              <div class="menu-item menu_item-6">
                <div class="row">
                  <div class="col-md-10 col-sm-10 col-10">
                    <h3>Garden Salad </h3>
                    <!-- <p>Grilled Steak, Onion, G.Pepper, Provolone</p> -->
                  </div>
                  <!-- <div class="col-md-1"><span class=" ">4.69</span></div> -->
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right   ">5.49</span></div>
                </div>
              </div>
            </div>

            <hr class="hr menu_item-6" />

            <div class="col-md-12 col-sm-12">
              <div class="menu-item menu_item-7">
                <div class="row">
                  <div class="col-md-10 col-sm-10 col-10">
                    <h3>Chef Salad </h3>
                    <!-- <p>Grilled Steak, Onion, G.Pepper, Provolone</p> -->
                  </div>
                  <!-- <div class="col-md-1"><span class=" ">4.69</span></div> -->
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right   ">6.49</span></div>
                </div>
              </div>
            </div>

            <hr class="hr menu_item-7" />

            <div class="col-md-12 col-sm-12">
              <div class="menu-item menu_item-8">
                <div class="row">
                  <div class="col-md-10 col-sm-10 col-10">
                    <h3>Gyro Salad </h3>
                    <!-- <p>Grilled Steak, Onion, G.Pepper, Provolone</p> -->
                  </div>
                  <!-- <div class="col-md-1"><span class=" ">4.69</span></div> -->
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right   ">6.99</span></div>
                </div>
              </div>
            </div>

            <hr class="hr menu_item-8" />

            <div class="col-md-12 col-sm-12">
              <div class="menu-item">
                <div class="row">
                  <div class="col-md-10 col-sm-10 col-10">
                    <h3>Chicken Ceasar Sala </h3>
                    <!-- <p>Grilled Steak, Onion, G.Pepper, Provolone</p> -->
                  </div>
                  <!-- <div class="col-md-1"><span class=" ">4.69</span></div> -->
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right   ">6.99</span></div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-------------------------- ending of gyro menu -------------------------------->


    </div><!-- ending of container -->
  </div> <!-- ending of menu items -->
</div> <!-- ending ofmenu_all -->



<?php

include "includes/footer.php";
?>
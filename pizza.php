<?php
include "includes/db.php";
include "includes/header.php";

?>

<!--starting of banner-->
<div class="pizza-intro d-flex flex-column text-center">

  <h2> Pizza & Italian Dinner</h3>

</div>

<!--ending of banner-->

<!-- starting of menu items -->
<div class="menu_all">
  <!-- starting of nav tab items  -->
  <nav class="menu_nav" id="my-tabs">
    <ul class="list-unstyled">
      <li id="pizza">Pizza</li>
      <li id="dinner" class="inactive">Italian Dinner </li>
      <!--  <li id="subs" class="inactive">SUBS</li> -->

    </ul>
  </nav>

  <!-- ending of nav tab items  -->

  <div class=" menu_content">
    <div class="container my-container">
      <div id="pizza-content" class="content">
        <div class="menu-m">
          <h2 class="text-center">Trak's <span class="heading-span">Pizza's</span> Menu </h2>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-12">

              <div class="top_item">
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-6">
                    <!-- <p class=" ">All served with May, Lettuce, Tomato and Cheese </p> -->
                  </div>
                  <div class="col-md-2 col-sm-2 col-2"><span class=" pizza_span pizza_top_second float-right">S</span></div>
                  <div class="col-md-2 col-sm-2 col-2"><span class=" pizza_span pizza_second float-right">M</span></div>
                  <div class="col-md-2 col-sm-2 col-2"><span class=" pizza_span float-right">L</span></div>
                </div>
              </div>
            </div>

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-1">
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-6">
                    <h3>Cheese Pizza </h3>
                    <!-- <p>Grilled Steak, Onion, G.Pepper, Provolone</p> -->
                  </div>
                  <div class="col-md-2 col-sm-2 col-2 "><span class="float-right pizza_second2_2">4.99</span></div>
                  <div class="col-md-2 col-sm-2 col-2 "><span class=" float-right pizza_second2">5.99</span></div>
                  <div class="col-md-2 col-sm-2 col-2 "><span class=" float-right">6.99</span></div>
                </div>
              </div>
            </div>

            <hr class="hr menu_item-1" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-2">
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-6">
                    <h3>Pepperoni Pizza </h3>
                    <!-- <p>Grilled Steak, Onion, G.Pepper, Swiss</p> -->
                  </div>
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right pizza_second2_2">6.99</span></div>
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right  pizza_second2">7.99</span></div>
                  <div class="col-md-2 col-sm-2 col-2 "><span class="float-right  ">8.99</span></div>
                </div>
              </div>
            </div>

            <hr class="hr menu_item-2" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-3">
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-6">
                    <h3>Meat Lover Pizza </h3>
                    <p>Pepperoni, Sausge, G.Geef, Ham, Cheese.</p>
                  </div>
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right pizza_second2_2">7.99</span></div>
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right pizza_second2">8.99</span></div>
                  <div class="col-md-2 col-sm-2 col-2 "><span class="float-right ">9.99</span></div>
                </div>
              </div>
            </div>

            <hr class="hr menu_item-3" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-4">
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-6">
                    <h3>Veggie Pizza </h3>
                    <p>Onion, G.Pepper, Mushroom, Black Olive, Banana Pepper, Cheese.</p>
                  </div>
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right pizza_second2_2">5.99</span></div>
                  <div class="col-md-2 col-sm-2 col-2 "><span class="float-right pizza_second2">6.99</span></div>
                  <div class="col-md-2 col-sm-2 col-2 "><span class="float-right ">7.99</span></div>
                </div>
              </div>
            </div>

            <hr class="hr menu_item-4" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-5">
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-6">
                    <h3>Supreme Pizza </h3>
                    <p>3 Choice Meat & 3 Choice Veggie</p>
                  </div>
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right pizza_second2_2">8.99</span></div>
                  <div class="col-md-2 col-sm-2 col-2 "><span class="float-right pizza_second2">9.99</span></div>
                  <div class="col-md-2 col-sm-2 col-2 "><span class="float-right">10.99</span></div>
                </div>
              </div>
            </div>

            <hr class="h menu_item-5" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-6">
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-6">
                    <h3>Steak & Cheese Pizza </h3>
                    <!-- <p>Grilled Turkey, Onion, G.Pepper, Swiss</p> -->
                  </div>
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right pizza_second2_2">8.99</span></div>
                  <div class="col-md-2 col-sm-2 col-2 "><span class="float-right pizza_second2">9.99</span></div>
                  <div class="col-md-2 col-sm-2 col-2 "><span class="float-right">  10.99</span></div>
                </div>
              </div>
            </div>

            <hr class="hr menu_item-6" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-7">
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-6">
                    <h3>Chicken Pizza </h3>
                    <!-- <p>Grilled Onion, Bacon, G.Pepper, Black Olive, Swiss </p> -->
                  </div>
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right pizza_second2_2">8.99</span></div>
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right pizza_second2">9.99</span></div>
                  <div class="col-md-2 col-sm-2 col-2 "><span class="float-right"> 10.99</span></div>
                </div>
              </div>
            </div>
            <hr class="hr menu_item-7" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-8">
                <div class="row">
                  <div class="col-md-7 col-sm-7 col-7">
                    <h3>Calzone </h3>
                    <!-- <p>Grilled Turkey, Onion, G.Pepper, Swiss</p> -->
                  </div>
                  <div class="col-md-2 col-sm-2 col-2"><span class=" float-right "></span></div>
                  <div class="col-md-2 col-sm-2 col-2 "><span class="float-right ">7.99</span></div>
                  <div class="col-md-2 col-sm-2 col-2 "><span class="float-right"></span></div>
                </div>
              </div>
            </div>



          </div>
        </div>
      </div>
      <!---------------------------- ending of pizza menu ------------------------------>

      <!---------------------------- starting of italian dinner menu ------------------------------>

      <div id="dinner-content" class="content">
        <div class="menu-m">
          <h2 class="text-center">Trak's <span class="heading-span">Italian Dinner's </span> Menu</h2>
          <div class="row">

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-1">
                <div class="row">
                  <div class="col-md-10 col-sm-10 col-10">
                    <h3>Spaghetti </h3>
                    <p>This pasta noodles mixed with meat sause or marinara sauce. VEG Add meatballs or italian sausage or have it backed with mozzarella for 1.99 </p>
                  </div>
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right  italian_span1 ">15.95</span></div>
                </div>
              </div>
            </div>

            <hr class="hr menu_item-1" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-1">
                <div class="row">
                  <div class="col-md-10 col-sm-10 col-10">
                    <h3> Vegetarian Spaghetti </h3>
                    <p>Pasta, Mushrooms, onion, green peppers and marinara sauce backed width Mozzarella cheese. VEG</p>
                  </div>
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right  italian_span1 ">12.95</span></div>
                </div>
              </div>
            </div>

            <hr class="hr" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-2">
                <div class="row">
                  <div class="col-md-10 col-sm-10 col-10">
                    <h3> Grecian Style Spaghetti </h3>
                    <p>Pasta filled with feta cheese and marinara sauce topped with mozzarella Cheese. </p>
                  </div>
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right  italian_span1 ">15.95</span></div>
                </div>
              </div>
            </div>

            <hr class="hr menu_item-2" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-3">
                <div class="row">
                  <div class="col-md-10 col-sm-10 col-10">
                    <h3> Spaghetti Supreme </h3>
                    <p>Pasta, sausage, meatballs, pepperoni and meast sause toped with Mozzarella cheese.</p>
                  </div>
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right  italian_span1 ">17.95</span></div>
                </div>
              </div>
            </div>

            <hr class="hr menu_item-3" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-4">
                <div class="row">
                  <div class="col-md-10 col-sm-10 col-10">
                    <h3> Chicken or Shrimp Alfredo </h3>
                    <p>Grilled chicken and pasta smeared in our special white sause.</p>
                  </div>
                  <div class="col-md-2 col-sm-2 col-2"><span class="float-right  italian_span1 ">16.95-19.95 </span></div>
                </div>
              </div>
            </div>

            <hr class="hr menu_item-4" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-5">
                <div class="row">
                  <div class="col-md-10 col-sm-10 col-10">
                    <h3> Helen's ala Greek </h3>
                    <p>Marinated grilled chicken, olive oil, fresh garlic, pasta, mozzarella and feta cheese. </p>
                  </div>
                  <div class="col-md-2 col-sm-2 col-2"><span class=" float-right  italian_span1">17.95</span></div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-------------------------- ending of italian dinner menu -------------------------------->


      <!-------------------------- starting of subs menu -------------------------------->
      <!-- <div id="subs-content" class="content">
        <div class="menu-m">
          <h2 class="text-center">Trak's <span class="heading-span">Subs'</span> Menu </h2>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-12">

              <div class="top_item">
                <div class="row">
                  <div class=" col-md-10 col-sm-10 col-9">

                  </div>
                  <div class="col-md-1 col-sm-1 col-1"><span class=" top_span ">6"REG.</span></div>
                  <div class="col-md-1 col-sm-1 col-1"><span class=" ">12"LAR.</span></div>
                </div>
              </div>
            </div>

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-1">
                <div class="row">
                  <div class="col-md-10 col-md-10 col-sm-10 col-9">
                    <h3>Italian </h3>

                  </div>
                  <div class="col-md-1 col-sm-1 col-1 "><span class=" ">4.29</span></div>
                  <div class="col-md-1 col-sm-1 col-1 "><span class="  right_span">6.89</span></div>

                </div>
              </div>
            </div>

            <hr class="hr menu_item-1" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-2">
                <div class="row">
                  <div class=" col-md-10 col-sm-10 col-9">
                    <h3>Club </h3>

                  </div>
                  <div class="col-md-1 col-sm-1 col-1"><span class=" ">4.29</span></div>
                  <div class="col-md-1 col-sm-1 col-1"><span class="right_span ">7.89</span></div>

                </div>
              </div>
            </div>

            <hr class="hr menu_item-2" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-3">
                <div class="row">
                  <div class="col-md-10 col-sm-10 col-9">
                    <h3>Turkey </h3>

                  </div>
                  <div class="col-md-1 col-sm-1 col-1"><span class=" ">4.29</span></div>
                  <div class="col-md-1 col-sm-1 col-1"><span class="right_span ">6.89</span></div>
                </div>
              </div>
            </div>

            <hr class="hr menu_item-3" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-4">
                <div class="row">
                  <div class="col-md-10 col-sm-10 col-9">
                    <h3>MeatBall Marinara </h3>

                  </div>
                  <div class="col-md-1 col-sm-1 col-1"><span class=" ">4.29</span></div>
                  <div class="col-md-1 col-sm-1 col-1"><span class="right_span ">6.89</span></div>
                </div>
              </div>
            </div>

            <hr class="hr menu_item-4" />

            <div class="col-md-12 col-sm-12 col-12">
              <div class="menu-item menu_item-5">
                <div class="row">
                  <div class="col-md-10 col-sm-10 col-9">
                    <h3>Falafel Sandwich </h3>

                  </div>
                  <div class="col-md-1 col-sm-1 col-1"><span class=" ">4.29</span></div>
                  <div class="col-md-1 col-sm-1 col-1"><span class="right_span ">6.89</span></div>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div> -->
      <!-------------------------- ending of subs menu -------------------------------->


    </div> <!-- ending of container -->

  </div><!-- ending of menu items -->

</div> <!-- ending of menu_all -->



<?php

include "includes/footer.php";

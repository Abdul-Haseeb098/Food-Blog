<?php
    include("components/navbar.php");
?>
  <div class="wraper">
    <div class="container">
      <div class="banner  my-10 ">

        <div class="banner-text ">

          <div class="bg-white w-32 rounded-2xl p-2  "><img class="img" src="assets/images/image 14.png" alt=""><span
              class="text-xs"> Hot Recipes</span></div>
          <div class="mt-4 mb-6">
            <h2 class="title">Spicy delicious <br>chicken wings</h2>
          </div>
          <div class="text-para">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
              fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
              mollit anim id est laborum. </p>
          </div>
          <div class="font-medium mt-4">
            <div class="carousel-icon px-4 py-2 ">
              <span><i class="fa-solid fa-stopwatch"></i></span>
              <span class="ml-2">25 minutes</span>
            </div>
            <div class="carousel-icon px-4 py-2  ">
              <span><i class="fa-solid fa-utensils"></i></span>
              <span class="pl-2">lunch</span>
            </div>
          </div>
          <div class="Author">
            <div class="d-flex">
              <div><img class="chef" src="assets/images/chef-2.png" alt="chefs"></div>

              <div class="ml-2">
                <span class="chef_txt">John Smith</span>
                <span class="date">
                  5 March 2022
                </span>
              </div>
            </div>
            <a href="#">
              <div class="cursor-pointer">
                <span class="view-recipe">View Recipes</span>
                <!-- <span class="ml-1"> add video </span> -->
              </div>
            </a>
          </div>
        </div>

        <div class="banner-img">
          <a href="#">
            <div class="image-recipe"></div>
          </a>
        </div>
      </div>
      <section>
        <div class="catogories">
          <div class="d-flex flex-row justify-between px-7 text-center">
            <div class="ctgry sm-12">
              <h1 class="font ">Catogories</h1>
            </div>
            <div class="sm-12"><button class="view-btn">View All Catogories</button></div>
          </div>
          <div class="ctgry-menue">
            <div class="breakfast sm-12 md-12">
              <div>
                <img class="breakfast-img" src="assets/images/breakfast.png" alt="breakfast">
              </div>
              <div class="breakfast-text">
                <span class="capitalize">breakfast</span>
              </div>
            </div>
            <div class="vegan sm-12 md-12">
              <div><img class="vegan-img" src="assets/images/vegan.png" alt="vegan"></div>
              <div class="vegan-text"><span class="capitalize">vegan</span>
              </div>
            </div>
            <div class="meat sm-12 md-12">
              <div><img src="assets/images/meat.png" alt="meat" class="meat-img"></div>
              <div class="meat-text"><span class="capitalize">meat</span>
              </div>
            </div>
            <div class="Dessert sm-12 md-12">
              <div><img class="Dessert-img" src="assets/images/dessert.png" alt="Dessert"></div>
              <div class="Dessert-text"><span class="capitalize">Dessert</span>
              </div>
            </div>
            <div class="lunch sm-12 md-12">
              <div><img class="lunch-img" src="assets/images/lunch.png" alt="lunch"></div>
              <div class="lunch-text"><span class="capitalize">lunch</span>
              </div>
            </div>
            <div class="chocolate sm-12 md-12">
              <div><img class="chocolate-img" src="assets/images/chocolate.png" alt="chocolate"></div>
              <div class="lunch-text"><span class="capitalize">chocolate</span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="tasty-recipies">
        <div class="more-recipes">
          <h2 class="recipe-header">Simple and tasty recipes</h2>
          <p class="recipe-para">Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqut enim ad minim </p>
        </div>
        <div class="favourite-recipes">
          <div class="card">
            <a href="#">
              <div class="card-img">
                <img src="assets/images/food-13.png" alt="" class="card-img">

              </div>
            </a>
            <!-- insert heart shape image -->
            <!-- <div class="fav-icon"><span>fav-icon</span></div> -->
            <a href="#">
              <p class="card-text">Big and Juicy Wagyu Beef Cheeseburger</p>
            </a>
            <div class="card-icon">
              <div class="text-icon">
                <p class="duration">30 Minutes</p>
                <span class="time"><i class="fa-solid fa-clock"></i></span>
              </div>
              <div class="text-icon">
                <p class="duration">Snack</p>
                <span class="time"><i class="fa-solid fa-utensils"></i></span>
              </div>
            </div>
          </div>

          <div class="card">
            <a href="#">
              <div class="card-img">
                <img src="assets/images/food-14.png" alt="" class="card-img">

              </div>
            </a>
            <!-- insert heart shape image -->
            <!-- <div class="fav-icon"><span>fav-icon</span></div> -->
            <a href="#">
              <p class="card-text">Fresh Lime Roasted Salmon with Ginger Sauce</p>
            </a>
            <div class="card-icon">
              <div class="text-icon">
                <p class="duration">30 Minutes</p>
                <span class="time"><i class="fa-solid fa-clock"></i></span>
              </div>
              <div class="text-icon">
                <p class="duration">Fish</p>
                <span class="time"><i class="fa-solid fa-utensils"></i></span>
              </div>
            </div>
          </div>

          <div class="card">
            <a href="#">
              <div class="card-img">
                <img src="assets/images/food-15.png" alt="" class="card-img">

              </div>
            </a>
            <!-- insert heart shape image -->
            <!-- <div class="fav-icon"><span>fav-icon</span></div> -->
            <a href="#">
              <p class="card-text">Strawberry Oatmeal Pancake with Honey Syrup</p>
            </a>
            <div class="card-icon">
              <div class="text-icon">
                <p class="duration">30 Minutes</p>
                <span class="time"><i class="fa-solid fa-clock"></i></span>
              </div>
              <div class="text-icon">
                <p class="duration">breakfast</p>
                <span class="time"><i class="fa-solid fa-utensils"></i></span>
              </div>
            </div>
          </div>

          <div class="card">
            <a href="#">
              <div class="card-img">
                <img src="assets/images/food-16.png" alt="" class="card-img">

              </div>
            </a>
            <!-- insert heart shape image -->
            <!-- <div class="fav-icon"><span>fav-icon</span></div> -->
            <a href="#">
              <p class="card-text">Fresh and Healthy Mixed Mayonnaise Salad</p>
            </a>
            <div class="card-icon">
              <div class="text-icon">
                <p class="duration">30 Minutes</p>
                <span class="time"><i class="fa-solid fa-clock"></i></span>
              </div>
              <div class="text-icon">
                <p class="duration">Healthy</p>
                <span class="time"><i class="fa-solid fa-utensils"></i></span>
              </div>
            </div>
          </div>

          <div class="card">
            <a href="#">
              <div class="card-img">
                <img src="assets/images/food-17.png" alt="" class="card-img">

              </div>
            </a>
            <!-- insert heart shape image -->
            <!-- <div class="fav-icon"><span>fav-icon</span></div> -->
            <a href="#">
              <p class="card-text">Chicken Meatballs with Cream Cheese</p>
            </a>
            <div class="card-icon">
              <div class="text-icon">
                <p class="duration">30 Minutes</p>
                <span class="time"><i class="fa-solid fa-clock"></i></span>
              </div>
              <div class="text-icon">
                <p class="duration">meat</p>
                <span class="time"><i class="fa-solid fa-utensils"></i></span>
              </div>
            </div>
          </div>

          <div class="square-card">
            <a href="#">
              <div>
                <p class="sq-text">Don’t forget to eat
                  healthy food</p>
              </div>
              <div class="sq-img">
                <img src="assets/images/food-4.png" alt="" class="sq-img">

              </div>
            </a>
            <!-- insert heart shape image -->
            <!-- <div class="fav-icon"><span>fav-icon</span></div> -->

          </div>

          <div class="card">
            <a href="#">
              <div class="card-img">
                <img src="assets/images/food-18.png" alt="" class="card-img">

              </div>
            </a>
            <!-- insert heart shape image -->
            <!-- <div class="fav-icon"><span>fav-icon</span></div> -->
            <a href="#">
              <p class="card-text">Fruity Pancake with Orange & Blueberry</p>
            </a>
            <div class="card-icon">
              <div class="text-icon">
                <p class="duration">30 Minutes</p>
                <span class="time"><i class="fa-solid fa-clock"></i></span>
              </div>
              <div class="text-icon">
                <p class="duration">Sweet</p>
                <span class="time"><i class="fa-solid fa-utensils"></i></span>
              </div>
            </div>
          </div>

          <div class="card">
            <a href="#">
              <div class="card-img">
                <img src="assets/images/food-19.png" alt="" class="card-img">

              </div>
            </a>
            <!-- insert heart shape image -->
            <!-- <div class="fav-icon"><span>fav-icon</span></div> -->
            <a href="#">
              <p class="card-text">The Best Easy One Pot Chicken and Rice</p>
            </a>
            <div class="card-icon">
              <div class="text-icon">
                <p class="duration">30 Minutes</p>
                <span class="time"><i class="fa-solid fa-clock"></i></span>
              </div>
              <div class="text-icon">
                <p class="duration">Snack</p>
                <span class="time"><i class="fa-solid fa-utensils"></i></span>
              </div>
            </div>
          </div>

          <div class="card">
            <a href="#">
              <div class="card-img">
                <img src="assets/images/food-20.png" alt="" class="card-img">

              </div>
            </a>
            <!-- insert heart shape image -->
            <!-- <div class="fav-icon"><span>fav-icon</span></div> -->
            <a href="#">
              <p class="card-text">The Creamiest Creamy Chicken and Bacon Pasta</p>
            </a>
            <div class="card-icon">
              <div class="text-icon">
                <p class="duration">30 Minutes</p>
                <span class="time"><i class="fa-solid fa-clock"></i></span>
              </div>
              <div class="text-icon">
                <p class="duration">Noodles</p>
                <span class="time"><i class="fa-solid fa-utensils"></i></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="be-chef">
        <div class="chef-description">
          <h1 class="chef-title">Everyone can be a chef in their own Kitchen</h1>
          <p class="cheft-txt">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis atque ipsum quisquam officia beatae
            dignissimos, laboriosam aut doloribus accusamus repudiandae?
          </p>
          <button class="chef-btn">Learn More</button>
        </div>
        <div class="chef-img"><img src="assets/images/image-220.png" class="chef-image" alt="chef image">
          <img src="assets/images/image-27.png" alt="tomato" class="tomato">
          <img src="assets/images/image-20.png" alt="vegan" class="lettuce">
          <img src="assets/images/image-21.png" alt="meat" class="meat-piece">
          <img src="assets/images/image-28.png" alt="onion" class="onion">
        </div>
      </div>

      <section class="instagram-link">
        <div class="instagram-page">
          <div class="instagram-page-title">
            <div class="istagram-page-sub_title">
              <h2 class="insta-title">Check out @foodieland on Instagram</h2>
            </div>
            <div>
              <p class="insta-page-txt">Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqut enim ad minim</p>
            </div>
          </div>
          <div class="insta-image-gallery">

            <div class="img-gallery">
              <div class="insta-image">
                <div class="insta-icon d-flex">
                  <div><img src="assets/images/instagram-img.png" alt="insta">
                  </div>
                  <div class="insta-profile">
                    <span class="insta-profile-subtxt">Foodieland</span>
                    <span class="profile-place">
                      tokyo,japan
                    </span>
                  </div>
                </div>
                <div>
                  <span><i class="fa-solid fa-ellipsis"></i></span>
                </div>
              </div>
              <div><img src="assets/images/food-12.png" alt="instagram-food" class="w-full">
              </div>
              <div class="insta-blog-description">
                <a href=" #" class="mr-2">
                  <span><i class="fa-regular fa-heart"></i></span>
                </a>
                <a href="#" class="mr-2">
                  <span><i class="fa-regular fa-comment"></i></span>
                </a>
                <a href="#" class="mr-2">
                  <span><i class="fa-brands fa-telegram"></i></span>
                </a>
                <a href="#" class="bookmark">
                  <span><i class="fa-regular fa-bookmark"></i></span>
                </a>
              </div>
              <div class="insta-description">
                <span class="font-semibold">Foodieland:</span>
                <span>Foodieland. The vegetables dishes need to have certain vitamin for those people</span>
              </div>
              <div class="insta-date">September 13</div>
            </div>


            <div class="img-gallery">
              <div class="insta-image">
                <div class="insta-icon d-flex">
                  <div><img src="assets/images/instagram-img.png" alt="insta">
                  </div>
                  <div class="insta-profile">
                    <span class="insta-profile-subtxt">Foodieland</span>
                    <span class="profile-place">
                      tokyo,japan
                    </span>
                  </div>
                </div>
                <div>
                  <span><i class="fa-solid fa-ellipsis"></i></span>
                </div>
              </div>
              <div><img src="assets/images/food-9.png" alt="instagram-food" class="w-full">
              </div>
              <div class="insta-blog-description">
                <a href=" #" class="mr-2">
                  <span><i class="fa-regular fa-heart"></i></span>
                </a>
                <a href="#" class="mr-2">
                  <span><i class="fa-regular fa-comment"></i></span>
                </a>
                <a href="#" class="mr-2">
                  <span><i class="fa-brands fa-telegram"></i></span>
                </a>
                <a href="#" class="bookmark">
                  <span><i class="fa-regular fa-bookmark"></i></span>
                </a>
              </div>
              <div class="insta-description">
                <span class="font-semibold">Foodieland:</span>
                <span>Sweet food can bring someon into happiness as long as they don’t eat to much</span>
              </div>
              <div class="insta-date">September 13</div>
            </div>


            <div class="img-gallery">
              <div class="insta-image">
                <div class="insta-icon d-flex">
                  <div><img src="assets/images/instagram-img.png" alt="insta">
                  </div>
                  <div class="insta-profile">
                    <span class="insta-profile-subtxt">Foodieland</span>
                    <span class="profile-place">
                      tokyo,japan
                    </span>
                  </div>
                </div>
                <div>
                  <span><i class="fa-solid fa-ellipsis"></i></span>
                </div>
              </div>
              <div><img src="assets/images/food-10.png" alt="instagram-food" class="w-full">
              </div>
              <div class="insta-blog-description">
                <a href=" #" class="mr-2">
                  <span><i class="fa-regular fa-heart"></i></span>
                </a>
                <a href="#" class="mr-2">
                  <span><i class="fa-regular fa-comment"></i></span>
                </a>
                <a href="#" class="mr-2">
                  <span><i class="fa-brands fa-telegram"></i></span>
                </a>
                <a href="#" class="bookmark">
                  <span><i class="fa-regular fa-bookmark"></i></span>
                </a>
              </div>
              <div class="insta-description">
                <span class="font-semibold">Foodieland:</span>
                <span>What are you doing before start cooking? prepare the tools or ingredients?</span>
              </div>
              <div class="insta-date">September 13</div>
            </div>

            <div class="img-gallery">
              <div class="insta-image">
                <div class="insta-icon d-flex">
                  <div><img src="assets/images/instagram-img.png" alt="insta">
                  </div>
                  <div class="insta-profile">
                    <span class="insta-profile-subtxt">Foodieland</span>
                    <span class="profile-place">
                      tokyo,japan
                    </span>
                  </div>
                </div>
                <div>
                  <span><i class="fa-solid fa-ellipsis"></i></span>
                </div>
              </div>
              <div><img src="assets/images/food-11.png" alt="instagram-food" class="w-full">
              </div>
              <div class="insta-blog-description">
                <a href=" #" class="mr-2">
                  <span><i class="fa-regular fa-heart"></i></span>
                </a>
                <a href="#" class="mr-2">
                  <span><i class="fa-regular fa-comment"></i></span>
                </a>
                <a href="#" class="mr-2">
                  <span><i class="fa-brands fa-telegram"></i></span>
                </a>
                <a href="#" class="bookmark">
                  <span><i class="fa-regular fa-bookmark"></i></span>
                </a>
              </div>
              <div class="insta-description">
                <span class="font-semibold">Foodieland:</span>
                <span> Steak never be wrong, it’s suitable for you who want romantic dinner</span>
              </div>
              <div class="insta-date">September 13</div>
            </div>
          </div>

          <div class="btn-insta">
            <button class="instagram-btn"><span>Visit Our Instagram</span>
              <span><i class="fa-brands fa-instagram"></i></span></button>
          </div>



        </div>
      </section>

      <div class="more-recipies">
        <div class="more-recipes-titile">
          <div class="more-recipies-heading">
            <h1 class="more-recipies-head">Try this delicious recipe to make your day</h1>
          </div>
          <div class="more-recipies-text">
            <p class="more-recipies-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, aut!</p>
          </div>
        </div>
        <div class="more-recipies-template">
          <div class="Recipie-card">
            <a href="recipie.php">
              <div class="recipe-card-img">
                <img src="assets/images/recipes/food-1.png" alt="" class="recipe-card-image">
              </div>
            </a>
            <!-- <div class="heart-shape"><span>favourite-recipes</span></div> -->
            <a href="recipie.php">
              <div>
                <h2 class="recipe-card-title">Mixed Tropical Fruit Salad with Superfood Boost</h2>
              </div>
            </a>
            <div class="card-icon">
              <div class="text-icon">
                <p class="duration">30 Minutes</p>
                <span class="time"><i class="fa-solid fa-clock"></i></span>
              </div>
              <div class="text-icon">
                <p class="duration">Healthy</p>
                <span class="time"><i class="fa-solid fa-utensils"></i></span>
              </div>
            </div>
          </div>

          <div class="Recipie-card">
            <a href="recipie.php">
              <div class="recipe-card-img">
                <img src="assets/images/recipes/food-2.png" alt="" class="recipe-card-image">
              </div>
            </a>
            <!-- <div class="heart-shape"><span>favourite-recipes</span></div> -->
            <a href="recipie.php">
              <div>
                <h2 class="recipe-card-title">Big and Juicy Wagyu Beef Cheeseburger</h2>
              </div>
            </a>
            <div class="card-icon">
              <div class="text-icon">
                <p class="duration">30 Minutes</p>
                <span class="time"><i class="fa-solid fa-clock"></i></span>
              </div>
              <div class="text-icon">
                <p class="duration">Western</p>
                <span class="time"><i class="fa-solid fa-utensils"></i></span>
              </div>
            </div>
          </div>

          <div class="Recipie-card">
            <a href="recipie.php">
              <div class="recipe-card-img">
                <img src="assets/images/recipes/food-3.png" alt="" class="recipe-card-image">
              </div>
            </a>
            <!-- <div class="heart-shape"><span>favourite-recipes</span></div> -->
            <a href="recipie.php">
              <div>
                <h2 class="recipe-card-title">Healthy Japanese Fried Rice with Asparagus</h2>
              </div>
            </a>
            <div class="card-icon">
              <div class="text-icon">
                <p class="duration">30 Minutes</p>
                <span class="time"><i class="fa-solid fa-clock"></i></span>
              </div>
              <div class="text-icon">
                <p class="duration">Healthy</p>
                <span class="time"><i class="fa-solid fa-utensils"></i></span>
              </div>
            </div>
          </div>

          <div class="Recipie-card">
            <a href="recipie.php">
              <div class="recipe-card-img">
                <img src="assets/images/recipes/food-4.png" alt="" class="recipe-card-image">
              </div>
            </a>
            <!-- <div class="heart-shape"><span>favourite-recipes</span></div> -->
            <a href="recipie.php">
              <div>
                <h2 class="recipe-card-title">Cauliflower Walnut Vegetarian Taco Meat</h2>
              </div>
            </a>
            <div class="card-icon">
              <div class="text-icon">
                <p class="duration">30 Minutes</p>
                <span class="time"><i class="fa-solid fa-clock"></i></span>
              </div>
              <div class="text-icon">
                <p class="duration">Western</p>
                <span class="time"><i class="fa-solid fa-utensils"></i></span>
              </div>
            </div>
          </div>

          <div class="Recipie-card">
            <a href="recipie.php">
              <div class="recipe-card-img">
                <img src="assets/images/recipes/food-5.png" alt="" class="recipe-card-image">
              </div>
            </a>
            <!-- <div class="heart-shape"><span>favourite-recipes</span></div> -->
            <a href="recipie.php">
              <div>
                <h2 class="recipe-card-title">Rainbow Chicken Salad with Almond Honey Mustard Dressing</h2>
              </div>
            </a>
            <div class="card-icon">
              <div class="text-icon">
                <p class="duration">30 Minutes</p>
                <span class="time"><i class="fa-solid fa-clock"></i></span>
              </div>
              <div class="text-icon">
                <p class="duration">Healthy</p>
                <span class="time"><i class="fa-solid fa-utensils"></i></span>
              </div>
            </div>
          </div>

          <div class="Recipie-card">
            <a href="recipie.php">
              <div class="recipe-card-img">
                <img src="assets/images/recipes/food-6.png" alt="" class="recipe-card-image">
              </div>
            </a>
            <!-- <div class="heart-shape"><span>favourite-recipes</span></div> -->
            <a href="recipie.php">
              <div>
                <h2 class="recipe-card-title">Barbeque Spicy Sandwiches with Chips </h2>
              </div>
            </a>
            <div class="card-icon">
              <div class="text-icon">
                <p class="duration">30 Minutes</p>
                <span class="time"><i class="fa-solid fa-clock"></i></span>
              </div>
              <div class="text-icon">
                <p class="duration">Snake</p>
                <span class="time"><i class="fa-solid fa-utensils"></i></span>
              </div>
            </div>
          </div>

          <div class="Recipie-card">
            <a href="recipie.php">
              <div class="recipe-card-img">
                <img src="assets/images/recipes/food-7.png" alt="" class="recipe-card-image">
              </div>
            </a>
            <!-- <div class="heart-shape"><span>favourite-recipes</span></div> -->
            <a href="recipie.php">
              <div>
                <h2 class="recipe-card-title">Firecracker Vegan Lettuce Wraps - Spicy! </h2>
              </div>
            </a>
            <div class="card-icon">
              <div class="text-icon">
                <p class="duration">30 Minutes</p>
                <span class="time"><i class="fa-solid fa-clock"></i></span>
              </div>
              <div class="text-icon">
                <p class="duration">Seafood</p>
                <span class="time"><i class="fa-solid fa-utensils"></i></span>
              </div>
            </div>
          </div>

          <div class="Recipie-card">
            <a href="recipie.php">
              <div class="recipe-card-img">
                <img src="assets/images/recipes/food-11.png" alt="" class="recipe-card-image">
              </div>
            </a>
            <!-- <div class="heart-shape"><span>favourite-recipes</span></div> -->
            <a href="recipie.php">
              <div>
                <h2 class="recipe-card-title">Chicken Ramen Soup with Mushroom </h2>
              </div>
            </a>
            <div class="card-icon">
              <div class="text-icon">
                <p class="duration">30 Minutes</p>
                <span class="time"><i class="fa-solid fa-clock"></i></span>
              </div>
              <div class="text-icon">
                <p class="duration">Japanese</p>
                <span class="time"><i class="fa-solid fa-utensils"></i></span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!--inbox-->
  <div class="inbox_box">
    <div class="container">
      <div class="inbox_content">
        <div class="inbox_content_1">
          <h1>Deliciousness to your inbox</h1>
          <p>Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor <br> incididunt ut labore et
            dolore magna aliqut enim ad minim </p>
          <div class="search_box_1">
            <input type="text" placeholder="Your email address...">
            <button class="search_btn">Search</button>
          </div>
          <div class="inbox_img">
            <img src="assets/images/inbox2.png" alt="" class="inbox_img_1">
            <img src="assets/images/inbox1.png" alt="" class="inbox_img_2">
            <img src="assets/images/inbox3.png" alt="" class="inbox_img_3">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--footer-->
 
  <?php
    include("components/footer.php");
  ?>
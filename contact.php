<?php
    include("components/navbar.php");
?>
    <!--img-->
<section id="form">
    <div class="form-heading">
<h1>Contact us</h1>
    </div>
<div class="form-box" style="display: flex;align-items: center;flex-wrap: wrap;">
    <div class="form-container" style="display: flex; justify-content: space-between; align-items: flex-start;">
        <!-- Image Section -->
        <div class="form-img">
            <img src="assets/images/image.png" alt="">
        </div>
        
        <!-- Form Section -->
        <form action="" style="flex-basis: 48%; margin-top: 80px; margin-left: 30px;">
            <div class="form_box" style="width: 100%; display: flex; flex-wrap: wrap; justify-content: space-between;">
                <!-- First Row -->
                <div style="flex-basis: 48%; margin-bottom: 10px; border-radius: 10px;">
                    <label for="">NAME</label>
                    <input type="text" placeholder="Enter your name...." style="width: 100%; padding-bottom: 30px; border-radius: 10px;border: 1px solid #0000001A;padding: 10px;font-size: 14px;">
                </div>
                
                <div style="flex-basis: 48%; margin-bottom: 10px;">
                    <label for="">EMAIL ADDRESS</label>
                    <input type="text" placeholder="Your eail address...." style="width: 100%; padding-bottom: 30px; border-radius: 10px;border: 1px solid #0000001A;padding: 10px;font-size: 14px;">
                </div>
                <!-- Second Row -->
                <div style="flex-basis: 48%; margin-bottom: 10px;">
                    <label for="">SUBJECTS</label>
                    <input type="text" placeholder="Enter subjects...." style="width: 100%; padding-bottom: 30px; border-radius: 10px;border: 1px solid #0000001A;padding: 10px;font-size: 14px;">
                </div>
                <div style="flex-basis: 48%; margin-bottom: 10px;">
                    <label for="">ENQUERY TYPE</label>
                    <select name="" id="" style="width: 100%; padding-bottom: 30px; border-radius: 10px;border: 1px solid #0000001A;padding: 10px;font-size: 14px;">
                        <option value="name">Advertising</option>
                        <option value="name">Advertising</option>
                        <option value="name">Advertising</option>
                    </select>
                </div>
                <div style="flex-basis: 48%; margin-bottom: 10px;">
                    <label for="">MESSAGES</label>
                    <input type="text"  placeholder="Enter your messages.... " style="width: 100%; padding-bottom: 215px; padding-left: 640px; border-radius: 10px; border: 1px solid #0000001A;">
                </div>
            </div>
        </form>
        
    </div>
    </div>
    <button class="submit_btn" >Submit</button>
</section>
 <!--inbox-->
 <?php
    include("components/inbox.php");
  ?>
<!-- recipe -->
<section id="recipe">
    <div class="recipe_logo">
        <h1>Check out the delicious recipe</h1>
    </div>
    <div class="recipe_box">
        <div class="container">
        <div class="box_1">
            <img src="assets/images/recipe1.png" alt="">
            <div class="heart">
                <i class="fa-solid fa-heart"></i>
            </div>
            <h1>Mixed Tropical Fruit Salad with Superfood Boosts </h1>
            <div class="icons">
                <div style="margin-right: 20px;">
                    <i class="fa-solid fa-clock"></i>
                    <span style="font-size: 14px;color: #00000099;">30 Minutes</span>
                </div>
                <div>
                    <i class="fa-solid fa-utensils"></i>
                    <span style="font-size: 14px;color: #00000099;">Healthy</span>
                </div>
            </div>
        </div>
        <div class="box_1">
            <img src="assets/images/recipe2.png" alt="">
            <div class="heart">
                <i class="fa-solid fa-heart"style="color: #DBE2E5;"></i>
            </div>
            <h1>Big and Juicy Wagyu Beef Cheeseburger </h1>
            <div class="icons">
                <div style="margin-right: 20px;">
                    <i class="fa-solid fa-clock"></i>
                    <span style="font-size: 14px;color: #00000099;">30 Minutes</span>
                </div>
                <div>
                    <i class="fa-solid fa-utensils"></i>
                    <span style="font-size: 14px;color: #00000099;">Healthy</span>
                </div>
            </div>
        </div>
        <div class="box_1">
            <img src="assets/images/recipe3.png" alt="">
            <div class="heart">
                <i class="fa-solid fa-heart"></i>
            </div>
            <h1>Healthy Japanese Fried Rice with Asparagus</h1>
            <div class="icons">
                <div style="margin-right: 20px;">
                    <i class="fa-solid fa-clock"></i>
                    <span style="font-size: 14px;color: #00000099;">30 Minutes</span>
                </div>
                <div>
                    <i class="fa-solid fa-utensils"></i>
                    <span style="font-size: 14px;color: #00000099;">Healthy</span>
                </div>
            </div>
        </div>
        <div class="box_1">
            <img src="assets/images/recipe4.png" alt="">
            <div class="heart">
                <i class="fa-solid fa-heart" style="color: #DBE2E5;"></i>
            </div>
            <h1>Cauliflower Walnut Vegetarian Taco Meat</h1>
            <div class="icons">
                <div style="margin-right: 20px;">
                    <i class="fa-solid fa-clock"></i>
                    <span style="font-size: 14px;color: #00000099;">30 Minutes</span>
                </div>
                <div>
                    <i class="fa-solid fa-utensils"></i>
                    <span style="font-size: 14px;color: #00000099;">Healthy</span>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!--footer-->

<?php
    include("components/footer.php");
  ?>
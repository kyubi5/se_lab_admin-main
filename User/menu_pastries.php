<?php
    session_start();
    include 'dbConnection.php';

    if(!empty($_GET['status'])){
        session_destroy();
        unset($_SESSION['email']);
        header('Location: index.php');
    }
    
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Marhey:wght@300;400&display=swap" rel="stylesheet">
    <script src="js/menu.js"></script>
    <title>Helf Coffee Official Website</title>
</head>
<body>
    <div class="nav_bar">
        <div class="logo">
            <a href="index.php"><img src="images/helf_coffee_logo.png" alt="Helf Coffee Logo" style="width: 130px" href="index.html"></a>
        </div>

        <?php if(!isset($_SESSION['logged_in'])) : ?>
        <a href="user_login.php" class="login">Login</a>
        <?php endif ?>

        <?php if(isset($_SESSION['logged_in'])) : ?>
        <a href="index.php?status=loggedout " class="login">Logout</a>
        <a href="profile.php" class="login">Profile</a> 
        <?php endif ?>

        <nav class="pages">
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a class="active" href="menu_best_seller.php">Menu</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>        
    </div>
    <div class="menu_bar" id="scroll">
        <img src="images/pastries_bg.png" alt="Best Seller Bg">

        <ul>
            <li><a class="unactive" href="menu_best_seller.php">Best Seller</a></li>
            <li><a class="active2" href="menu_pastries.php">Pastries</a></li>
            <li><a class="unactive" href="menu_beverages.php">Beverages</a></li>
            <li><a class="unactive" href="menu_desserts.php">Desserts</a></li>
            <li><a class="unactive" href="menu_set.php">Set</a></li>
        </ul>
    </div>

    <div class="item_container">
        <div class="item">
            <div class="item_pic">
                <img src="images/Gu_Mor_Kak.jpg" style="bottom: 220px;">
            </div>
            <div class="description">
                <div class="item_name"><center>Gu Mor Kak</center></div>
                <div class="price">
                    <center>RM8.90</center>
                    <div class="sub_price"><center>for 2 pcs</center></div>
                </div>
                <div class="order_btn" onclick="togglePopup_1()"><center>Order Now</center></div>
            </div>
        </div>
        <div class="item">
            <div class="item_pic">
                <img src="images/Geh_Bo_Gok_Tat.jpg" style="bottom: 150px;">
            </div>
            <div class="description">
                <div class="item_name"><center>Geh Bo Gok Tat</center></div>
                <div class="price">
                    <center>RM6.90</center>
                    <div class="sub_price"><center>per piece</center></div>
                </div>
                <div class="order_btn" onclick="togglePopup_2()"><center>Order Now</center></div>
            </div>
        </div>
        <div class="item">
            <div class="item_pic">
                <img src="images/portuguese_tart.jpg" style="bottom: 150px;">
            </div>
            <div class="description">
                <div class="item_name"><center>Portuguese Tart</center></div>
                <div class="price">
                    <center>RM9.90</center>
                    <div class="sub_price"><center>for 3 pcs</center></div>
                </div>
                <div class="order_btn" onclick="togglePopup_3()"><center>Order Now</center></div>
            </div>
        </div>
        <div class="item">
            <div class="item_pic">
                <img src="images/Pandan_Portuguese_Tart.jpg" style="bottom: 154px;">
            </div>
            <div class="description">
                <div class="item_name"><center>Pandan Portuguese Tart</center></div>
                <div class="price">
                    <center>RM9.90</center>
                    <div class="sub_price"><center>for 3 pcs</center></div>
                </div>
                <div class="order_btn" onclick="togglePopup_4()"><center>Order Now</center></div>
            </div>
        </div>
    </div>
    
    <div class="popup" id="popup-1">
        <div class="overlay"></div>
        <div class="content">
            <img src="images/Gu_Mor_Kak.jpg">
            <div class="description_container">
                <div class="description2">
                    <div class="item_name2">Gu Mor Kak</div>
                    <P>???Gu Mor Kak??? or Demon Cow???s Horn Biscuit is a chinese homemade traditional biscuit that is packed with savory rosated chicken fillings, with a thin layered crust wrapped around it. It???s crunchy textute and salty with a hint a sweetness flavour is exactly why Gu Mor Kak is one of our cafe???s signature pastries and best seller.
                    </P>
                    <div class="deco">
                        <div class="deco_dot"></div>
                        <div class="deco_dot"></div>
                        <div class="deco_bar"></div>
                    </div>
                    <div class="price_quantity_container">
                        <div class="price2">
                            <center>RM8.90</center>
                            <div class="sub_price2"><center>for 2 pcs</center></div>
                        </div>
                        <div class="quantity">
                            <span class="minus" id="minus">-</span>
                            <span class="num" id="num">01</span>
                            <span class="plus" id="plus">+</span>
                        </div>
                    </div>
                    <div class="add_to_cart_btn">Add To Cart</div>
                </div>
            </div>
            <div class="close_btn" onclick="togglePopup_1()">Close</div>
        </div>
    </div>

    <div class="popup" id="popup-2">
        <div class="overlay"></div>
        <div class="content">
            <img src="images/Geh_Bo_Gok_Tat.jpg">
            <div class="description_container">
                <div class="description2">
                    <div class="item_name2">Geh Bo Gok Tat</div>
                    <P>???Gu Mor Kak??? or Demon Cow???s Horn Biscuit is a chinese homemade traditional biscuit that is packed with savory rosated chicken fillings, with a thin layered crust wrapped around it. It???s crunchy textute and salty with a hint a sweetness flavour is exactly why Gu Mor Kak is one of our cafe???s signature pastries and best seller.
                    </P>
                    <div class="deco">
                        <div class="deco_dot"></div>
                        <div class="deco_dot"></div>
                        <div class="deco_bar"></div>
                    </div>
                    <div class="price_quantity_container">
                        <div class="price2">
                            <center>RM6.90</center>
                            <div class="sub_price2"><center>per piece</center></div>
                        </div>
                        <div class="quantity">
                            <span class="minus"id="minus-2">-</span>
                            <span class="num"id="num-2">01</span>
                            <span class="plus" id="plus-2">+</span>
                        </div>
                    </div>
                    <div class="add_to_cart_btn">Add To Cart</div>
                </div>
            </div>
            <div class="close_btn" onclick="togglePopup_2()">Close</div>
        </div>
    </div>

    <div class="popup" id="popup-3">
        <div class="overlay"></div>
        <div class="content">
            <img src="images/portuguese_tart.jpg">
            <div class="description_container">
                <div class="description2">
                    <div class="item_name2">Portuguese Tart</div>
                    <P>Homemade Portuguese style egg tart baked with an outer layer of crust, fragant egg fillings and a layer of burnt cheese on top. It???s aromatic, sweet and satly fillings combined with the crusty outer layer is definately a must try.
                    </P>
                    <div class="deco">
                        <div class="deco_dot"></div>
                        <div class="deco_dot"></div>
                        <div class="deco_bar"></div>
                    </div>
                    <div class="price_quantity_container">
                        <div class="price2">
                            <center>RM9.90</center>
                            <div class="sub_price2"><center>for 3 pcs</center></div>
                        </div>
                        <div class="quantity">
                            <span class="minus"id="minus-3">-</span>
                            <span class="num"id="num-3">01</span>
                            <span class="plus" id="plus-3">+</span>
                        </div>
                    </div>
                    <div class="add_to_cart_btn">Add To Cart</div>
                </div>
            </div>
            <div class="close_btn" onclick="togglePopup_3()">Close</div>
        </div>
    </div>

    <div class="popup" id="popup-4">
        <div class="overlay"></div>
        <div class="content">
            <img src="images/Pandan_Portuguese_Tart.jpg">
            <div class="description_container">
                <div class="description2">
                    <div class="item_name2">Pandan Portuguese Tart</div>
                    <P>Served fresh of the fridge with butter and oreo crumps as the base, special homemade cream cheese and milk recipe as the middle layer and top it off with oreo poweder sprinkles and a piece of oreo biscuit. Oreo lovers what are you waiting for? Try it now.
                    </P>
                    <div class="deco">
                        <div class="deco_dot"></div>
                        <div class="deco_dot"></div>
                        <div class="deco_bar"></div>
                    </div>
                    <div class="price_quantity_container">
                        <div class="price2">
                            <center>RM9.90</center>
                            <div class="sub_price2"><center>for 3 pcs</center></div>
                        </div>
                        <div class="quantity">
                            <span class="minus"id="minus-4">-</span>
                            <span class="num"id="num-4">01</span>
                            <span class="plus" id="plus-4">+</span>
                        </div>
                    </div>
                    <div class="add_to_cart_btn">Add To Cart</div>
                </div>
            </div>
            <div class="close_btn" onclick="togglePopup_4()">Close</div>
        </div>
    </div>

</body>
</html>

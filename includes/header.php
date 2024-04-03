<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsiveNavBar.css">
    <title>RICCAC | <?php echo $title?></title>
</head>

<body>
    <div class="site-container">
    <header>
        <nav class="navbar hide">
            <div id="top-line-bg">
                <div class="top-line justify adjust">
                    <p>If you suspect possible child abuse, contact the Department of Children and Family Services (DCFS) at 1-800-252-2873</p>
                    <!--<p>734 20th St Rock Island, IL, 61201</p>
                    <p><a href="tel:3097946451">309-794-6451</a></p>-->
                </div>
            </div>
            <div class="navcontent justify">
                <a href="" class="nav-logo">
                    <img src="images/logo.png" alt="logo">
                </a>
                <!--Burger Menu for Mobile, resize the screen to see it works-->
                <div class="burger navbar-toggle" id="js-navbar-toggle">
                    <div class="l1"></div>
                    <div class="l2"></div>
                    <div class="l3"></div>
                </div>

                <!--This where the nav bar menu list is -->
                <ul class="mainnav list-style-remove" id="menu">
                    <?php include'nav.html'?>
                </ul>
            </div>
        </nav>
        <div class="banner">
            <img src="images/banner2.jpg" alt="Closeup of a painting of the Children's Advocacy Center featuring a sun and a rendition of the house">
            <!--<div class="donate-button">
                
            </div>-->
        </div>
    </header>
    <div class="main-grid justify adjust">
        <div class="wishlist-box">
            <div class="wishlist">
                <h3>Wish List</h3>
                <ul>
                    <li>Bottle Water</li>
                    <li>Paper towels</li>
                    <li>Batteries</li>
                    <li>Garbage bags</li>
                    <li>Forever stamps</li>
                    <!--<li>Copier paper</li>-->
                    <li>Monetary donations</li>
                    <li>Snacks (Goldfish, animal crackers, granola bars, crackers and cheese, string cheese</li>
                    <li>Gift cards for needed supplies for the families (McDonalds, Hungry Hobo, Subway, Hy-Vee,
                        Wal-Mart,
                        Shell, Amoco, Menards, Lowes</li>
                </ul>
                <!--<div>-->
                <!--    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="text-align: center;">-->
                <!--    <input type="hidden" name="cmd" value="_s-xclick">-->
                <!--    <input type="hidden" name="hosted_button_id" value="BLZWJUNCWXPY2">-->
                <!--    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">-->
                <!--    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">-->
                <!--    </form>-->
                <!--</div>-->
            </div>
        </div>
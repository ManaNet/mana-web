<?php

use Dotenv\Dotenv;

require_once('vendor/autoload.php');
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

define('ACCESS_POINT', '%s/%s');

function getServerCount(): int
{
    return json_decode(file_get_contents(sprintf(ACCESS_POINT, $_ENV['CONNECTION_ADDRESS'], 'bot/servers')), true)['response'];
}

function getUserCount(): int
{
    return json_decode(file_get_contents(sprintf(ACCESS_POINT, $_ENV['CONNECTION_ADDRESS'], 'bot/users')), true)['response'];
}

function beautify($n)
{
    if ($n > 1000000000000)
        return round(($n / 1000000000000), 1) . 'T';
    else if ($n > 1000000000)
        return round(($n / 1000000000), 1) . 'B';
    else if ($n > 1000000)
        return round(($n / 1000000), 1) . 'M';
    else if ($n > 1000)
        return round(($n / 1000), 1) . 'K';

    return number_format($n);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mana by Shindou Mihou.</title>
        <meta name="description" content="Mana is an anime Discord bot that aims to bring liveliness to your anime community by bringing plenty of waifu and yuri images at a frequency while also adding plentiful of anime commands!" />
        <link rel="canonical" href="https://manabot.fun/" />
        <meta property="og:site_name" content="Mana" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="What is Mana?" />
        <meta name="theme-color" content="#5dbfff" />
        <meta property="og:image" content="https://cdn.manabot.fun/images/Mana.webp">
        <meta property="og:description" content="Mana is an anime Discord bot that aims to bring liveliness to your anime community by bringing plenty of waifu and yuri images at a frequency while also adding plentiful of anime commands!" />
        <meta property="og:url" content="https://manabot.fun/" />
        <link rel="icon" href="https://cdn.manabot.fun/icon.ico">
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:domain" content="manabot.fun" />
        <meta name="twitter:title" content="Mana - The only Yuri or Waifu Discord bot you will need." />
        <meta name="twitter:description" content="Mana is a Discord bot that brings plenty anime to your servers from hourly waifu/yuri images to anime action commands (hug, etc).." />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- main minimized css -->
        <link rel="stylesheet" href="style/main.min.css" />
        <!-- swiper js -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    </head>

<body>
    <div class="container-one">
        <div class="header">
            <a href="/" class="head__logo font-lato regular">MANA</a>
            <div class="inner_header">
                <a href="/" class="head__item font-overpass regular">Home</a>
                <a href="/support" class="head__item font-overpass regular">Discord</a>
                <a href="/plans" class="head__item font-overpass regular">Premium</a>
                <a href="/wiki" class="head__item font-overpass regular">Wiki</a>
                <a href="/invite" class="head__item font-overpass regular">Invite now</a>
            </div>
        </div>
        <div class="section-one">
            <div class="inner-section" style="flex-direction: column;">
                <div class="text-section">
                    <h1 class="font-lato bold size-120">Your hourly dose <br>of Waifu-Yuri.</h1>
                    <p class="font-lato regular size-30">Fulfill the needs of your anime community <br class="hide-on-mobile">by bringing a
                        stable hourly
                        dose of both
                        Yuri<br class="hide-on-mobile"> and Waifu images.
                    </p>
                </div>
                <div class="main-preview-images">
                    <div class="preview-l">
                        <img src="new-images/new-yuri.webp" alt="Preview Yuri Image" class="new-preview">
                    </div>
                    <div class="preview-r">
                        <img src="new-images/new-waifu.webp" alt="Preview Waifu Image" class="new-preview">
                    </div>
                </div>
                <div class="text-section">
                    <p class="font-lato size-18" style="margin-bottom: 0px;">The images above belong to their creators:</p>
                    <div class="flex-row" style="margin-top: 0px;">
                        <a href="https://twitter.com/un_eta" class="font-lato size-18" style="color: white; text-decoration: none;">@un_eta</a>
                        <a href="https://twitter.com/maccormick_4_4" class="font-lato size-18" style="color: white; text-decoration: none;">@maccormick_4_4</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </style>
    <div class="container-normal" style="padding-top: 150px; padding-bottom: 250px;">
        <div class="section-one">
            <div class="text-section" style="padding-right: 0px; padding-bottom: 0px;">
                <h1 class="font-lato bold size-60" style="text-align: center; padding-bottom: 0px; margin-bottom: 0px;">Why Mana?
                </h1>
                <h4 class="font-lato regular size-30" style="color: #8D8D8D; text-align: center; padding-top: 0px; margin-top: 0px;">The reasons why
                    you should use Mana.
                </h4>
            </div>
            <!-- Slider main container -->
            <div class="swiper-container" style="margin-top: 0px;">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="inner-section">
                            <img src="new-images/waifu2.webp" alt="Preview Waifu Image" class="preview-image">
                            <div class="text-section">
                                <h1 class="font-lato bold size-60">Waifu-dose!</h1>
                                <p class="font-lato light size-25">Build a strong gallery of waifu images by enabling Mana's Waifu World<br class="hide-on-mobile"> which allows you to receive waifu images every single hour!</p>
                                <div class="invite-button-outer">
                                    <a href="https://manabot.fun/invite" class="invite-button font-lato bold">Invite
                                        Now</a>
                                    <span class="invite-button-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="inner-section">
                            <img src="new-images/Yuri2.webp" alt="Preview Yuri Image" class="preview-image">
                            <div class="text-section">
                                <h1 class="font-lato bold size-60">Yuriiification!</h1>
                                <p class="font-lato light size-25">Travel to a universe filled with Yuri by enabling Yuriverse <br class="hide-on-mobile"> which allows you to receive yuri images every hour!</p>
                                <div class="invite-button-outer">
                                    <a href="https://manabot.fun/invite" class="invite-button font-lato bold">Invite
                                        Now</a>
                                    <span class="invite-button-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="inner-section">
                            <img src="new-images/mimi.webp" alt="Preview Mimi Image" class="preview-image">
                            <div class="text-section">
                                <h1 class="font-lato bold size-60">Kitsu-nyaaa!</h1>
                                <p class="font-lato light size-25">Experience the library of anime images of Mana <br class="hide-on-mobile">that ranges from kitsunes, nekos to even usagis!</p>
                                <div class="invite-button-outer">
                                    <a href="https://manabot.fun/invite" class="invite-button font-lato bold">Invite
                                        Now</a>
                                    <span class="invite-button-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="inner-section">
                        <img src="new-images/gifs.webp" alt="Preview GIFs Image" class="preview-image">
                            <div class="text-section">
                                <h1 class="font-lato bold size-60">Be More Expressive!</h1>
                                <p class="font-lato light size-25">Be bolder. Be louder. Express yourself better to
                                    others, <br class="hide-on-mobile">show them that you enjoy talking with them.
                                </p>
                                <div class="invite-button-outer">
                                    <a href="https://manabot.fun/invite" class="invite-button font-lato bold">Invite
                                        Now</a>
                                    <span class="invite-button-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
                <script>
                    const swiper = new Swiper('.swiper-container', {
                        // Optional parameters
                        direction: 'horizontal',
                        loop: true,
                        centeredSlides: true,
                        slidesPerView: 1,
                        centeredSlidesBounds: true,

                        // If we need pagination
                        pagination: {
                            el: '.swiper-pagination',
                        },

                        autoplay: {
                            delay: 3000,
                        },
                    });
                </script>
            </div>
        </div>
    </div>
    <div class="container-two">
        <div class="centered inner-container">
            <h1 class="font-lato bold size-60 spacing-bottom-0">Meet Mana. Your Partner in Crime.</h1>
            <p class="font-lato regular size-30 spacing-top-0">a discord bot that is used constantly by <?php echo beautify(getServerCount()) ?> servers and
                <?php echo beautify(getUserCount()) ?>+ users!</p>
            <div class="invite-button-outer">
                <a href="https://manabot.fun/invite" class="invite-button font-lato bold">Invite Now</a>
                <span class="invite-button-bottom"></span>
            </div>
            <div class="love">
                <h3><i class="fas fa-heart" style="color: #FE6F6F;"></i> Made with love by <a href="https://patreon.com/mihou" style="color: #FE6F6F; text-decoration: none;">Shindou Mihou</a></h3>
            </div>
        </div>
    </div>
    <!-- Font styles -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&family=Overpass:wght@100;200;300;400;600;700&family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/solid.min.css" integrity="sha512-jQqzj2vHVxA/yCojT8pVZjKGOe9UmoYvnOuM/2sQ110vxiajBU+4WkyRs1ODMmd4AfntwUEV4J+VfM6DkfjLRg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script async src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/solid.min.js" integrity="sha512-Qc+cBMt/4/KXJ1F6nNQahXIsgPygHM4S2XWChoumV8qkpZ9oO+gBDBEpOxgbkQQ/6DlHx6cUxa5nBhEbuiR8xw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css" integrity="sha512-OdEXQYCOldjqUEsuMKsZRj93Ht23QRlhIb8E/X0sbwZhme8eUw6g8q7AdxGJKakcBbv7+/PX0Gc2btf7Ru8cZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanveer - Final Project</title>

    <!-- cdn slick -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
        integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@200;300;400;500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans:wght@400;500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption&display=swap" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,100;1,300;1,400&display=swap"
        rel="stylesheet">

    <?php wp_head(); ?>

</head>

<header>
    <div class="container">
        <div class="header-flex">
            <div class="logo">
                <?php the_custom_logo(); ?>
            </div>
            <nav>
                <ul class="nav-list">
                    <li><a href="home">Home</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="">Classes</a></li>
                    <li><a href="">Pricing</a></li>
                    <li><a href="">Services</a></li>
                </ul>
            </nav>
        </div><!-- header-flex end -->
    </div><!-- container end -->
</header>

<body>
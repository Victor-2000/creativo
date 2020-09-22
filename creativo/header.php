<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Creativo | About</title>

    <!-- GOOD FOR SEO -->
    <meta name="description" content="The about page of creativo company." />

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" />

    <!-- FONTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>
      WebFont.load({
        google: {
          families: [
            "Playfair Display", //bold(700) title
            "Roboto: 400,500,700", //bold(700) // regular(400) - default // medium(500) - buttons,menu,small headings
          ],
        },
      });
    </script>

</head>
<body>

<div class="main-background">
      <!-- HEADER -->
      <header>
        <div class="container">
          <div class="row display-flex">
            <div class="col-xs-3">
              <h1 class="logo">
                <a href="./blog.html">Creativo.</a>
              </h1>
            </div>

            <div class="col-lg-7 col-xs-6 navigation-menu">
              <?php wp_nav_menu(
						  array(
							  'menu' => 'primary',
							  'container' => '',
							  'theme_location' =>'primary',
							  //%3$s is the content which will be filled
							  'items_wrap' => '<ul>%3$s</ul>',
						  )
					);?>
            </div>

            <div class="col-lg-2 col-xs-3" id="nav-action-pannel">
              <div class="button top-menu-button">
                <a href="./contact_us.html">Contact us</a>
              </div>
              <span
                class="mobile-hamburger-button"
                onclick="openSidebar()"
              ></span>
            </div>
            <div class="sidebar lite">
              <span
                class="side-menu-hamburger-button"
                onclick="closeSidebar()"
              ></span>
              <ul>
                <li><a href="./blog.html">Home</a></li>
                <hr />
                <li><a href="./about.html" class="nav-selected">About</a></li>
                <hr />
                <li><a href="./works.html">Works</a></li>
                <hr />
                <li><a href="./services.html">Services</a></li>
                <hr />
                <li><a href="./blog.html">Blog</a></li>
                <hr />
              </ul>
              <div class="button" id="contact-slidebar-button">
                <a href="./contact_us.html">Contact us</a>
              </div>
            </div>
          </div>
        </div>
      </header>
<?php
function creativo_menus(){

// Name and description array for our nav menus
$locations = array(
   'primary'=>"Desktop Primary Menu"
);

// Added the array to our menus  
register_nav_menus($locations);

}

add_action('init','creativo_menus');

?>
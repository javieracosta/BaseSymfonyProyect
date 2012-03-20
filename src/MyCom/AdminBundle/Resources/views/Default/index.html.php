<?php


// Retrieves an item by its path in the main menu
$item = $view['knp_menu']->get('AcmeDemoBundle:Builder:main');

// Render an item
echo $view['knp_menu']->render($item, array(), 'list');
?>

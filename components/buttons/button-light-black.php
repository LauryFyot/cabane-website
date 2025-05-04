<?php
$text = isset($text) ? $text : "Button";
$link = isset($link) ? $link : "#";
include 'config/routes.php';
?>
<a href="<?php echo $routes[$link]; ?>" 
   class="inline-block py-2 px-6 w-fit bg-transparent text-black text-xs border border-black text-center transition-all duration-300 ease-in-out hover:bg-black hover:text-white">
    <?php echo $text; ?>
</a>

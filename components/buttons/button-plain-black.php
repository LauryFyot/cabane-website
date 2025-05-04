<?php
$text = isset($text) ? $text : "Button";
$link = isset($link) ? $link : "#";
?>
<a href="<?php echo $link; ?>" 
   class="inline-block py-2 px-6 w-fit bg-black text-xs border border-black text-white text-center transition-all duration-300 ease-in-out hover:bg-white hover:text-black hover:border-black">
    <?php echo $text; ?>
</a>

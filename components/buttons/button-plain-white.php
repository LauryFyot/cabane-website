<?php
$text = isset($text) ? $text : "Button";
$link = isset($link) ? $link : "#";
?>
<a href="<?php echo $link; ?>" 
   class="inline-block py-2 px-6 w-fit bg-white text-black text-xs border border-white text-center transition-all duration-300 ease-in-out hover:bg-[#1a261c] hover:text-white">
    <?php echo $text; ?>
</a>

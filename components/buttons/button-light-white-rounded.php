<?php
    // Check if the text parameter is set, otherwise set a default value
    $text = isset($text) ? $text : "Button";
    ?>
    <button class="py-2 px-6 w-fit bg-transparent rounded-full text-white border text-xs border-white"><?php echo $text; ?></button>
</body>
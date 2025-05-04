<article class="flex bg-white transition shadow-lg hover:shadow-2xl rounded-lg overflow-hidden cursor-pointer" onclick="window.open('<?php echo $page_link; ?>','mywindow');">

    <!-- Vertical banner -->
    <div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
        <time datetime="2022-10-10" class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900">
            <span><?php echo $is_outdoor; ?></span>
            <span class="w-px flex-1 bg-gray-900/10"></span>
            <span><?php echo $type; ?></span>
        </time>
    </div>

    <!-- Image -->
    <div class="hidden sm:block sm:basis-56 aspect-square">
        <img src="<?php echo $img_link; ?>" class="aspect-square h-full w-full object-cover" />
    </div>

    <div class="flex flex-1 flex-col justify-between">
        <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
            
        <!-- Main Infos -->
            <div class="flex flex-row w-fit gap-4 items-center">
                <div class="sm:hidden h-12 w-12 aspect-square rounded-full">
                    <img src="img/vauxlevicomte.webp" class="aspect-square h-full w-full object-cover rounded-full" />
                </div>
                <div class="flex flex-col gap-2">
                    <!-- Title -->
                    <a href="<?php echo $page_link; ?>" >
                        <h3 class="font-bold uppercase text-gray-900"><?php echo $title; ?></h3>
                        <!-- <h3 class="font-abril text-xl text-gray-900"><?php echo $title; ?></h3> -->
                    </a>
                    <!-- Infos -->
                    <div class="flex flex-row gap-4">
                        <a class="flex flex-row gap-2" href="#">
                            <i class="fa-solid fa-location-dot"></i>
                            <p class="text-xs hidden md:block"><?php echo $address; ?></p>
                        </a>

                        <a class="flex flex-row gap-2" href="<?php echo $website; ?>" target="_blank">
                            <i class="fa-solid fa-laptop"></i>
                            <p class="text-xs hidden md:block"><?php echo $website; ?></p>
                        </a>

                        <a class="flex flex-row gap-2" href="#">
                            <i class="fa-solid fa-phone"></i>
                            <p class="text-xs hidden md:block"><?php echo $phone; ?></p>
                        </a>
                    </div>
                </div>

            </div>


            <!-- Text -->
            <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700">
                <?php echo $description; ?>
            </p>
        </div>

        <div class="sm:flex sm:items-end sm:justify-end">
            <a href="<?php echo $page_link; ?>" class="block bg-[#415641] px-5 py-3 text-center text-xs font-bold uppercase text-white transition hover:bg-[#1a261c]">En voir plus !</a>
        </div>
    </div>
</article>
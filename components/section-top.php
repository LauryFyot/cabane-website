<!-- Container (row and col for mobile version) -->
<div class="w-10/12 flex flex-col gap-4 lg:gap-0 lg:flex-row justify-start items-center max-w-[1200px]">

    <!-- Left part -->
    <div class="w-full lg:w-1/4">
        <h1 class="font-abril text-4xl"><?php echo $title; ?></h1>
    </div>

    <!-- Right part -->
    <div class="w-full lg:w-3/4 lg:border-l-2 lg:border-black lg:pl-14">
        <p class="text-sm font-semibold"><?php echo $text; ?></p>
        <p class="text-sm text-gray-500"><?php echo $subtext; ?></p>
    </div>
</div>
<div class="w-full flex-grow flex justify-center items-center bg-[#415641] text-white">
    <div class="w-10/12 flex flex-col gap-4 py-4 sm:gap-10 sm:flex-row justify-center items-center max-w-[1200px]">

        <div class="flex flex-col gap-4 md:grid md:grid-cols-3 md:divide-x">
            <!-- Where -->
            <div class="col-span-1 flex flex-col justify-between items-center gap-2 p-4">
                <!-- icon -->
                <div class="flex flex-row items-center gap-2 justify-center w-full">
                    <i class="fa-solid fa-location-dot text-xl"></i>
                    <p class="text-xs uppercase font-bold">Où ?</p>
                </div>
                <!-- text -->
                <p class="text-sm opacity-60 text-center"><?= $location['text'] ?></p>
                <!-- button -->
                <?php
                $text = $location['display'];
                $link = $location['link'];
                include 'components/buttons/button-light-white-rounded.php'; ?>
            </div>

            <!-- Website -->
            <div class="col-span-1 flex flex-col justify-between items-center gap-2 p-4">
                <!-- icon -->
                <div class="flex flex-row items-center gap-2 justify-center w-full">
                    <i class="fa-solid fa-laptop text-xl"></i>
                    <p class="text-xs uppercase font-bold">Site Internet</p>
                </div>
                <!-- text -->
                <p class="text-sm opacity-60 text-center"><?= $website['text'] ?></p>
                <!-- button -->
                <?php
                $text = $website['display'];
                $link = $website['link'];
                include 'components/buttons/button-light-white-rounded.php'; ?>
            </div>

            <!-- Phone -->
            <div class="col-span-1 flex flex-col justify-between items-center gap-2 p-4">
                <!-- icon -->
                <div class="flex flex-row items-center gap-2 justify-center w-full">
                    <i class="fa-solid fa-phone text-xl"></i>
                    <p class="text-xs uppercase font-bold">Téléphone</p>
                </div>
                <!-- text -->
                <p class="text-sm opacity-60 text-center"><?= $phone['text'] ?></p>
                <!-- button -->
                <?php
                $text = $phone['display'];
                $link = $phone['link'];
                include 'components/buttons/button-light-white-rounded.php'; ?>
            </div>
        </div>


    </div>
</div>
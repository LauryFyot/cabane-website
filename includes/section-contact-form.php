<!-- Header -->
<?php $title="Nous contacter !"; include 'components/header-small.php'; ?>

<!-- Form card -->
<div class="w-11/12 lg:w-9/12 bg-white shadow-xl mx-auto z-20 transform -translate-y-[50px] flex flex-col lg:flex-row">

    <!-- Left -->
    <div class="w-full lg:w-1/2 p-6">

        <p class="font-abril text-xl mb-4">Contactez-nous pour réserver!</p>

        <!-- Via phone & mail -->
        <p class="uppercase text-xs font-bold text-[#6c8b6c] mb-4">Par téléphone ou mail</p>
        <div class="mb-4 flex flex-wrap gap-2">
            <a class="bg-gray-200 shadow-sm text-gray-600 text-xs font-medium me-2 px-3 py-0.5 rounded-full cursor-pointer hover:bg-gray-700 hover:text-white"><i class="fa-solid fa-envelope mr-2"></i>test@cabaneperchee.com</a>
            <a class="bg-gray-200 shadow-sm text-gray-600 text-xs font-medium me-2 px-3 py-0.5 rounded-full cursor-pointer hover:bg-gray-700 hover:text-white"><i class="fa-solid fa-phone mr-2"></i>0651320118</a>
        </div>


        <!-- Via Form -->
        <p class="uppercase text-xs font-bold text-[#6c8b6c] mt-6 mb-2">Via le formulaire de contact</p>
        <form action="../config/process_booking.php" method="POST" id="form_request">

            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="name" id="name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-[#415641] peer" placeholder=" " required />
                    <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-[#415641] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Prénom NOM</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="phone" name="phone" id="phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-[#415641] peer" placeholder=" " />
                    <label for="phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-[#415641] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Téléphone</label>
                </div>
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <input type="email" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-[#415641] peer" placeholder=" " required />
                <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#415641] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <textarea type="text" name="message" id="message" class="block py-2.5 px-0 w-full min-h-24 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-[#415641] peer" placeholder=" " required></textarea>
                <label for="message" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#415641] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Message</label>
            </div>

            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <select id="persons" name="persons" class="text-xs block py-2.5 px-0 w-full text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-[#415641] peer">
                        <option class="option-nb" value="1">1</option>
                        <option class="option-nb" value="2">2</option>
                        <option class="option-nb" value="3">3</option>
                        <option class="option-nb" value="4">4</option>
                    </select>
                    <label for="persons" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-[#415641] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nb personnes</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="daterange" id="daterange" class="text-xs block py-2.5 px-0 w-full text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-[#415641] peer" placeholder=" " />
                    <label for="daterange" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-[#415641] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Dates</label>
                </div>
            </div>

            <?php $text = "Réserver !"; $link = "contact";
            include 'components/buttons/button-plain-black.php'; ?>
        </form>

    </div>


    <!-- Right -->
    <div class="w-full lg:w-1/2">
        <iframe id="map" class="w-full h-full" frameborder="0" loading="lazy" src="https://www.google.com/maps/embed/v1/place?&q=Cabane+Perchée+de+Chambonnière&zoom=8&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
    </div>
</div>





<!-- Confirmation Modal -->
<div id="confirmationModal" class="hidden fixed z-50 inset-0 overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
            <div>
                <div class="mt-3 text-center sm:mt-5">
                    <h3 class="font-abril text-lg leading-6 font-medium text-gray-900" id="modal-title">C'est tout bon ?</h3>
                    <div class="mt-2">
                        <p class="text-sm text-gray-500">Merci de confirmer vos informations !</p>
                    </div>
                    <div class="mt-4 text-left">
                        <p class="text-sm text-gray-700"><strong>Name:</strong> <span id="confirmName"></span></p>
                        <p class="text-sm text-gray-700"><strong>Email:</strong> <span id="confirmEmail"></span></p>
                        <p class="text-sm text-gray-700"><strong>Phone:</strong> <span id="confirmPhone"></span></p>
                        <p class="text-sm text-gray-700"><strong>Message:</strong> <span id="confirmMessage"></span></p>
                        <p class="text-sm text-gray-700"><strong>Persons:</strong> <span id="confirmPersons"></span></p>
                        <p class="text-sm text-gray-700"><strong>Date Range:</strong> <span id="confirmDaterange"></span></p>
                    </div>
                </div>
            </div>
            <div class="flex mt-5 sm:mt-6 gap-4">
                <button id="confirmButton" class="w-full inline-flex justify-center border border-transparent shadow-sm px-4 py-2 bg-[#415641] text-base font-medium text-white hover:bg-[#1a261c] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#415641] sm:text-sm">Je confirme !</button>
                <button id="editButton" class="mt-3 w-full inline-flex justify-center border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:text-sm">Oups, modifier !</button>
            </div>
        </div>
    </div>
</div>


<!-- Confirmation Modal -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('form_request');
        const modal = document.getElementById('confirmationModal');
        const confirmButton = document.getElementById('confirmButton');
        const editButton = document.getElementById('editButton');

        form.addEventListener('submit', function (event) {
            event.preventDefault();
            // Fill the modal with form data
            document.getElementById('confirmName').textContent = form.name.value;
            document.getElementById('confirmEmail').textContent = form.email.value;
            document.getElementById('confirmPhone').textContent = form.phone.value;
            document.getElementById('confirmMessage').textContent = form.message.value;
            document.getElementById('confirmPersons').textContent = form.persons.value;
            document.getElementById('confirmDaterange').textContent = form.daterange.value;
            // Show the modal
            modal.classList.remove('hidden');
        });

        confirmButton.addEventListener('click', function () {
            modal.classList.add('hidden');
            form.submit();
        });

        editButton.addEventListener('click', function () {
            modal.classList.add('hidden');
        });
    });
</script>

<!-- Daterange script -->
<script>
    $(function () {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function (start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });
    });
</script>
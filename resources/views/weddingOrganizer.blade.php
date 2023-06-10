<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <title>UMKM Banyumasan</title>
    @vite('resources/css/app.css')

</head>

<body>
    <livewire:navbar.index />
    <div class="md:px-24 mt-5 py-32">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-montserrat font-semibold">Wedding Organizer</h1>
            <button data-dropdown-toggle="dropdownFilter" class="px-4 py-3 flex items-center gap-4 rounded-xl bg-[#2AA345] text-white"> Filter<svg
                    width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11 18C10.7167 18 10.479 17.904 10.287 17.712C10.095 17.52 9.99934 17.2827 10 17C10 16.7167 10.096 16.479 10.288 16.287C10.48 16.095 10.7173 15.9993 11 16H13C13.2833 16 13.521 16.096 13.713 16.288C13.905 16.48 14.0007 16.7173 14 17C14 17.2833 13.904 17.521 13.712 17.713C13.52 17.905 13.2827 18.0007 13 18H11ZM4 8C3.71667 8 3.479 7.904 3.287 7.712C3.095 7.52 2.99934 7.28267 3 7C3 6.71667 3.096 6.479 3.288 6.287C3.48 6.095 3.71734 5.99934 4 6H20C20.2833 6 20.521 6.096 20.713 6.288C20.905 6.48 21.0007 6.71734 21 7C21 7.28334 20.904 7.521 20.712 7.713C20.52 7.905 20.2827 8.00067 20 8H4ZM7 13C6.71667 13 6.479 12.904 6.287 12.712C6.095 12.52 5.99934 12.2827 6 12C6 11.7167 6.096 11.479 6.288 11.287C6.48 11.095 6.71734 10.9993 7 11H17C17.2833 11 17.521 11.096 17.713 11.288C17.905 11.48 18.0007 11.7173 18 12C18 12.2833 17.904 12.521 17.712 12.713C17.52 12.905 17.2827 13.0007 17 13H7Z"
                        fill="#FAFAFA" />
                </svg>
            </button>
            <div id="dropdownFilter"
                class="z-10 hidden text-monttserat bg-white divide-y divide-black-100 rounded-lg shadow w-32">
                <ul class="py-2 text-sm text-gray-700" montserrat="dropdownInformdropdownAvatarNameButtonationButton">
                    <li>
                        <button class="block px-4 py-2 hover:bg-gray-100 border-b w-full text-center">Termurah</button>
                    </li>
                    <li>
                        <button class="block px-4 py-2 hover:bg-gray-100 border-b w-full text-center">Termahal</button>
                    </li>
                    <li>
                </ul>
            </div>
        </div>
        <div class="grid grid-cols-4 gap-y-5 mt-7">
            <livewire:card.produck.index />
            <livewire:card.produck.index />
            <livewire:card.produck.index />
            <livewire:card.produck.index />
            <livewire:card.produck.index />
            <livewire:card.produck.index />
            <livewire:card.produck.index />
            <livewire:card.produck.index />
        </div>
    </div>
    </div>
    <livewire:footer.index />
    <livewire:modal.tambah-keranjang />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script>
        var mainNav = document.getElementById("main-nav");
        var toggleMenuIcon = document.getElementById("toggle-menu-icon");

        function toggleMenu() {
            mainNav.classList.toggle('hidden');

            // change the icon when the menu is shown/closed
            toggleMenuIcon.classList.toggle('fa-bars');
            toggleMenuIcon.classList.toggle('fa-times');
        }
    </script>
    <script>
        var btnCounter = document.querySelectorAll('.btn-counter');
        var totalItem = document.querySelector('.total-item');


        function countItems() {

            for (var i = 0; i < btnCounter.length; i++) {

                btnCounter[i].addEventListener('click', function() {
                    var oldValue = totalItem.value;

                    // console.log(_this);

                    if (this.value === '+') {
                        // let string convert to integer
                        var newValue = parseInt(oldValue, 10) + 1;
                    } else {
                        // Don't allow decrementing below 1
                        if (oldValue > 1) {
                            var newValue = parseInt(oldValue, 10) - 1;
                        } else {
                            newValue = 1;
                        }
                    }

                    // check if value is a number
                    newValue = isNaN(newValue) ? 1 : newValue;
                    totalItem.value = newValue;

                });
            }

        }

        countItems();
    </script>
</body>

</html>

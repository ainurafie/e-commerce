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
    <livewire:navbar.index :index="Auth::user()->id"/>
    <div class="md:px-24 my-[200px]">
            <h1 class="text-2xl font-montserrat font-semibold">Fashion
            </h1>
            <div class="grid grid-cols-4 gap-y-5 mt-7">
                <livewire:card.produck.index :kategori="$data"/>
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
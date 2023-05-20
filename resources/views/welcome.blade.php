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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <title>Beranda</title>
    @vite('resources/css/app.css')
</head>

<body>
    <livewire:navbar.index />
    <div class="md:px-24 mt-50">
        <div class="mt-50 bg-no-repeat bg-center bg-cover h-[402px] md:px-24 rounded-2xl lg:w-full "
            style="background-image: url('../assets/images/banner.svg');">
            <div class="flex flex-col justify-center h-full">
                <h1 class="text-[32px] text-[#004E11] font-montserrat font-semibold w-1/2">Padukan gaya mu dengan
                    aksesoris terkini</h1>
                <button class="rounded-2xl px-4 py-3 w-max text-white bg-[#004E11] mt-5">Telusuri Lainnya</button>
                <button></button>
            </div>
        </div>
        <div class="py-7">
            <h1 class="text-2xl font-montserrat font-semibold">Terbaru</h1>
            <div class="mt-7 h-[500px] w-full overflow-x-auto">
                <div class="flex gap-5 w-full">
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
        
        <div class="py-7">
            <h1 class="text-2xl font-montserrat font-semibold">Kategori</h1>
            <div class="mt-7 h-[50px] w-full overflow-x-auto grid grid-cols-6 gap-y-5 mt-7">
            <a href="/wedding-organizer" class="relative hover:brightness-75 mb-[8px]">
                <div class="bg-no-repeat bg-center bg-cover flex items-center lg:h-[53px] lg:w-[px] rounded-lg lg:mt-0 mt-5 px-12"
                    style="background:#B4CF90;">
                    <h1 class=" text-white font-montserrat lg:text-[12px]  text-xl">Wedding Organizer </h1>
                </div>
            </a>

            <a href="/makanan-minuman" class="relative hover:brightness-75 mb-[8px]">
                <div class=" bg-center bg-cover flex items-center lg:h-[53px] lg:w-[px] rounded-lg lg:mt-0 mt-5 px-12"
                    style="background:#6D9D6F;">
                    <h1 class=" text-white font-montserrat lg:text-[12px]  text-xl">Makanan & Minuman
                    </h1>
                </div>
            </a>
            <a href="/fashion" class="relative hover:brightness-75 mb-[8px]">
                <div class="bg-no-repeat bg-center bg-cover flex items-center lg:h-[53px] lg:w-[px] rounded-lg lg:mt-0 mt-5 px-12"
                    style="background:#7ABDB7;">
                    <h1 class=" text-white font-montserrat lg:text-[12px] flex items-center  text-xl">Fashion
                    </h1>
                </div>
            </a>
            <a href="/" class="relative hover:brightness-75 mb-[8px]">
                <div class="bg-no-repeat bg-center bg-cover flex items-center lg:h-[53px] lg:w-[px] rounded-lg lg:mt-0 mt-5 px-12"
                    style="background:#3A959E;">
                    <h1 class=" text-white font-montserrat lg:text-[12px]  text-xl">Accesories
                    </h1>
                </div>
            </a>
            <a href="/" class="relative hover:brightness-75 mb-[12px]">
                <div class="bg-no-repeat bg-center bg-cover flex items-center lg:h-[53px] lg:w-[px] rounded-lg lg:mt-0 mt-5 px-12"
                    style="background:#4895A6;">
                    <h1 class=" text-white font-montserrat lg:text-[12px]  text-xl">Kerajinan
                    </h1>
                </div>
            </a>
            <a href="/" class="relative hover:brightness-75 mb-[8px]">
                <div class="bg-no-repeat bg-center bg-cover flex items-center lg:h-[53px] lg:w-[px] rounded-lg lg:mt-0 mt-5 px-12"
                    style="background:#678FA8;">
                    <h1 class=" text-white font-montserrat lg:text-[12px]  text-xl">Pertanian
                    </h1>
                </div>
            </a>
            </div>

            <div class="py-7">
            <h1 class="text-2xl font-montserrat font-semibold">Paling banyak dikunjungi</h1>
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


        <div class="grid grid-cols-2 w-full py-16 justify-items-center">
            <a href="/wedding-organizer" class="relative hover:brightness-75 mb-[14px]">
                <div class="bg-no-repeat bg-center bg-cover flex items-center lg:h-[237px] lg:w-[504px] rounded-lg lg:mt-0 mt-5 px-12"
                    style="background-image: url('../assets/images/sehat.svg');">
                    <h1 class=" text-white font-montserrat lg:text-[32px] font-bold text-xl">Sehat <br /> Untuk Tubuh
                    </h1>
                </div>
            </a>
            <a href="/" class="relative hover:brightness-75 mb-[14px]">
                <div class="bg-no-repeat bg-center bg-cover flex items-center lg:h-[237px] lg:w-[504px] rounded-lg lg:mt-0 mt-5 px-12"
                    style="background-image: url('../assets/images/hand.svg');">
                    <h1 class=" text-white font-montserrat lg:text-[32px] font-bold text-xl">Hand Craft</h1>
                </div>
            </a>
            <a href="/" class="relative hover:brightness-75">
                <div class="bg-no-repeat bg-center bg-cover flex items-center lg:h-[237px] lg:w-[504px] rounded-lg lg:mt-0 mt-5 px-12"
                    style="background-image: url('../assets/images/kopi.svg');">
                    <h1 class=" text-white font-montserrat lg:text-[32px] font-bold text-xl">Kopi</h1>
                </div>
            </a>
            <a href="/" class="relative hover:brightness-75">
                <div class="bg-no-repeat bg-center bg-cover flex items-center lg:h-[237px] lg:w-[504px] rounded-lg lg:mt-0 mt-5 px-12"
                    style="background-image: url('../assets/images/khas.svg');">
                    <h1 class=" text-white font-montserrat lg:text-[32px] font-bold text-xl">Khas <br /> Purwokerto</h1>
                </div>
            </a>
        </div>
    </div>
    <livewire:footer.index />
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

        function redirectToDetail(productId) {
        window.location.href = '/detailProduct/' + productId;
    }
    </script>
</body>

</html>

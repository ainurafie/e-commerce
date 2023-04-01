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
    <title>Landing</title>
    @vite('resources/css/app.css')
</head>

<body>
    <livewire:navbar.index />
    <div class="md:px-24 mt-1">
        <div class="bg-no-repeat bg-center bg-cover h-[402px] md:px-24 rounded-2xl lg:w-full "
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
            <div class="mt-7 h-[500px]  overflow-x-auto">
                <div class="flex gap-5" style="width: 1286px">
                    <livewire:card.produck.index />
                    <livewire:card.produck.index />
                    <livewire:card.produck.index />
                    <livewire:card.produck.index />
                    <livewire:card.produck.index />
                </div>
            </div>
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
            <a href="/" class="relative hover:brightness-75 mb-[14px]">
                <div class="">
                    <img src="../assets/images/sehat.svg" alt=""
                        class="lg:h-[237px] lg:w-[504px] rounded-lg">
                </div>
                <div class="absolute lg:top-[75px] lg:left-5 top-[60px] left-5">
                    <h1 class=" text-white font-aileron-bold lg:text-5xl text-xl">Baca Artikel</h1>

                </div>
            </a>
            <a href="/museum" class="relative hover:brightness-75 mb-[14px]">
                <div class="">
                    <img src="../assets/images/hand.svg" alt=""
                        class="lg:h-[237px] lg:w-[504px] rounded-lg lg:mt-0 mt-5">
                </div>
                <div class="absolute lg:top-[60px] lg:left-5 top-[78px] left-5">
                    <h1 class=" text-white font-aileron-bold lg:text-5xl text-xl">Kunjungi
                        e-museum</h1>
                </div>
            </a>
            <a href="/team" class="relative hover:brightness-75">
                <div class="">
                    <img src="../assets/images/kopi.svg" alt=""
                        class="lg:h-[237px] lg:w-[504px] rounded-lg">
                </div>
                <div class="absolute lg:top-[75px] lg:left-5 top-[60px] left-5">
                    <h1 class=" text-white font-aileron-bold lg:text-5xl text-xl">Tim ABAD</h1>

                </div>
            </a>
            <a href="/kontak" class="relative hover:brightness-75">
                <div class="">
                    <img src="../assets/images/khas.svg" alt=""
                        class="lg:h-[237px] lg:w-[504px] rounded-lg lg:mt-0 mt-5">
                </div>
                <div class="absolute lg:top-[75px] lg:left-5 top-[75px] left-5">
                    <h1 class=" text-white font-aileron-bold lg:text-5xl text-xl">Hubungi kami</h1>

                </div>
            </a>
        </div>
    </div>
    <livewire:footer.index/>    
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
</body>

</html>

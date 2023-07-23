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
    <title>Login</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="">
        <div class="bg-[#F3FFF2] py-32">
            <div class="flex flex-wrap gap-16 justify-center">
                <img src="../assets/images/login.svg" alt="" class="md:h-[412px] h-[206px]">
                <div class="bg-white py-9 rounded-xl px-14 w-[480px]">
                <form method="POST" action="{{ route('login.store') }}">
                @csrf
                    <div class="flex h-full flex-col justify-center">
                        <h1 class="text-sm font-montserrat text-[#0C0C0C] text-center font-semibold mb-3">Login</h1>
                        <div class="relative mb-5">
                            <h1 class="text-xs font-montserrat text-[#858585] mb-2.5">
                                E-mail
                            </h1>
                            <input type="text" id="email" name="email"
                                class="bg-white border border-[#004E11] text-[#004E11] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required>
                        </div>
                        <div class="relative mb-5">
                            <h1 class="text-xs font-montserrat text-[#858585] mb-2.5">
                                Password
                            </h1>
                            <input type="password" id="password" name="password"
                                class="bg-white border border-[#004E11] text-[#004E11] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required>
                        </div>
                        <div class="w-full">
                            <button type="submit" class="p-[10px] text-white bg-[#004E11] font-semibold rounded-lg w-full mb-4">Masuk</button>
                            <h1 class="text-xs font-montserrat text-[#000000] text-center">Belum punya akun?<a href="/register" class="text-xs font-montserrat text-[#004E11] "> Daftar disini</a></h1>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>

    </div>
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

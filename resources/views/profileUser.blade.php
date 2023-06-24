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
    <div class="md:px-24 mt-48">
        <h1 class="text-xl font-montserrat font-semibold px-6 mb-12">Profile</h1>
        <div class="bg-white rounded-xl py-[17px] px-6 ">
            <div class="flex justify-center">
                <div class="flex gap-5 justify-center">
                    <div class="relative">
                        <label type="file" name="image-product" id="image-product" required>
                            <span class="">
                                <img class="img-preview w-32 h-32 border-2 rounded-full hover:bg-slate-200 cursor-pointer"
                                    alt="">
                            </span>
                            <input class="hidden" type="file" name="images" id="image"
                                onchange="previewImage()">
                        </label>
                    </div>
                    <div class="w-3/4">
                        <div class="py-4 bg-white shadow drop-shadow-lg rounded-[8px] mb-6">
                            <div class="px-6">
                                <h1 class="font-semibold text-sm font-montserrat text-black mb-5">Informasi Pribadi</h1>
                            </div>
                            <table>
                                <tbody>
                                    <tr class="">
                                        <td class="px-6 py-4 truncate">
                                            Nama
                                        </td>
                                        <td class="px-6 py-4 ">
                                            {{ Auth::user()->name }}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="px-6 py-4 truncate">
                                            Tanggal Lahir
                                        </td>
                                        <td class="px-6 py-4 ">
                                            {{ Auth::user()->ttl }}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="px-6 py-4 truncate">
                                            Jenis Kelamin
                                        </td>
                                        <td class="px-6 py-4 ">
                                            {{ Auth::user()->kelamin }}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="px-6 py-4 truncate">
                                            Alamat
                                        </td>
                                        <td class="px-6 py-4 ">{{ Auth::user()->alamat }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="py-4 bg-white shadow drop-shadow-lg rounded-[8px] mb-6">
                            <div class="px-6">
                                <h1 class="font-semibold text-sm font-montserrat text-black mb-5">Akun</h1>
                            </div>
                            <table>
                                <tbody>
                                    <tr class="">
                                        <td class="px-6 py-4 truncate">
                                            Username
                                        </td>
                                        <td class="px-6 py-4 truncate">
                                            {{ Auth::user()->username }}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="px-6 py-4 truncate">
                                            Email
                                        </td>
                                        <td class="px-6 py-4 truncate">
                                            {{ Auth::user()->email }}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="px-6 py-4 truncate">
                                            Email
                                        </td>
                                        <td class="px-6 py-4 truncate">
                                            {{ Auth::user()->role }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <livewire:footer.index />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
        function previewImage() {

            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();

            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
</body>

</html>

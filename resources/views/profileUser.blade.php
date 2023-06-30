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
    @if (Auth::user()->role == "penjual")
        <livewire:sidebar.penjual/>
        <div class="flex justify-end border-b px-12 py-5 mb-2 border-[#D4EDDA]">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16.0002 29.3335C17.4668 29.3335 18.6668 28.1335 18.6668 26.6668H13.3335C13.3335 27.3741 13.6144 28.0524 14.1145 28.5524C14.6146 29.0525 15.2929 29.3335 16.0002 29.3335ZM24.0002 21.3335V14.6668C24.0002 10.5735 21.8135 7.14683 18.0002 6.24016V5.3335C18.0002 4.22683 17.1068 3.3335 16.0002 3.3335C14.8935 3.3335 14.0002 4.22683 14.0002 5.3335V6.24016C10.1735 7.14683 8.00016 10.5602 8.00016 14.6668V21.3335L5.3335 24.0002V25.3335H26.6668V24.0002L24.0002 21.3335Z"
                    fill="#8D8B8B" />
            </svg>
        </div>
    @elseif(Auth::user()->role == "admin")
        <livewire:sidebar.super-admin />
    @else
    <livewire:navbar.index :index="Auth::user()->id"/>
    @endif
    <div class="md:px-24 {{ (Auth::user()->role == "penjual" || Auth::user()->role == "admin") ? 'mt-0' : 'mt-48' }}">
        <h1 class="text-xl font-montserrat font-semibold px-6 mb-12">Profile</h1>
        <div class="bg-white rounded-xl py-[17px] px-6 ">
            <div class="flex justify-center">
                <div class="flex gap-5 justify-center">
                    <div class="relative">
                        <img src="{{ Storage::url(Auth::user()->image) }}" class="w-32 h-32 rounded-full" alt="">
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
                                            Nama / Nama Toko
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
                                            Role
                                        </td>
                                        <td class="px-6 py-4 truncate">
                                            {{ Auth::user()->role }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="/profile-setting">
                            <button type="button"
                    class="text-[#E7E7E7] font-montserrat font-semibold text-sm bg-[#2AA345] rounded-lg py-2.5 px-6">Edit Profile</button>
                        </a>
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

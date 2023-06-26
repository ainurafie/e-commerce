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
    <div class="md:px-24 mt-48 w-2/3 block mx-auto">
        <h1 class="text-xl font-montserrat font-semibold px-6 mb-12">Profile</h1>
        <div class="bg-white rounded-xl py-[17px] px-6 ">
        <div class="p-10 bg-white shadow drop-shadow-lg rounded-[8px] mb-6">
            <form method="POST" action="{{ route('profile-setting.update', $data->id) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="flex h-full flex-col justify-center">
                    <h1 class="text-sm font-montserrat text-[#0C0C0C] text-center font-semibold mb-3">Edit Profile</h1>
                    <div class="relative mb-5">
                        <h1 class="text-xs font-montserrat text-[#858585] mb-2.5">
                            Nama / Nama Toko<label class="text-[#CB3A26]">*</label>
                        </h1>
                        <input type="text" id="nama" name="name" value="{{ $data->name }}"
                            class="bg-white border border-[#004E11] text-[#004E11] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            required>
                    </div>
                    <div class="relative mb-5">
                        <h1 class="text-xs font-montserrat text-[#858585] mb-2.5">
                            Username<label class="text-[#CB3A26]">*</label>
                        </h1>
                        <input type="text" id="username" name="username" value="{{ $data->username }}"
                            class="bg-white border border-[#004E11] text-[#004E11] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            required>
                    </div>
                    <div class="relative mb-5">
                        <h1 class="text-xs font-montserrat text-[#858585] mb-2.5">
                            Tanggal Lahir<label class="text-[#CB3A26]">*</label>
                        </h1>
                        <input type="date" id="username" name="ttl" value="{{ $data->ttl }}"
                            class="bg-white border border-[#004E11] text-[#004E11] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            required>
                    </div>
                    <div class="relative mb-5">
                        <h1 class="text-xs font-montserrat text-[#858585] mb-2.5">
                            Gender<label class="text-[#CB3A26]">*</label>
                        </h1>
                        <select name="gender"
                        class="bg-white border border-[#D4EDDA] text-black font-light text-sm rounded-lg block w-full p-2.5">
                        @if ($data->kelamin)
                        <option value="{{ $data->kelamin }}">{{ $data->kelamin }}</option>
                        @endif
                        <option value="" selected>Pilih Gender</option>
                        <option value="laki-laki">Laki - Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    </div>
                    <div class="relative mb-5">
                        <h1 class="text-xs font-montserrat text-[#858585] mb-2.5">
                            No Handphone<label class="text-[#CB3A26]">*</label>
                        </h1>
                        <input type="number" id="username" name="noHp" value="{{ $data->noHp }}"
                            class="bg-white border border-[#004E11] text-[#004E11] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            required>
                    </div>
                    <div class="relative mb-5">
                        <h1 class="text-xs font-montserrat text-[#858585] mb-2.5">
                            Alamat<label class="text-[#CB3A26]">*</label>
                        </h1>
                        <textarea rows="2" name="alamat" value="{{ $data->alamat }}"
                            class="bg-white border border-[#D4EDDA] text-black font-light text-sm rounded-lg block w-full p-2.5"
                            placeholder="Tuliskan deskripsi produk">
                        </textarea>
                    </div>
                    <div class="relative mb-5">
                        <h1 class="text-sm font-medium font-montserrat text-black mb-2.5">
                            Gambar<label class="text-[#CB3A26]">*</label>
                        </h1>
                        <div id="repeater-container">
                            <div class="repeater">
                                <label type="file" name="image-product" required>
                                    <span class="">
                                        <img class="img-preview w-24 h-24 border-2 rounded-2xl hover:bg-slate-200 cursor-pointer" 
                                            alt="">
                                    </span>
                                    <input class="hidden" type="file" name="images" onchange="previewImage(this)">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <button type="submit" class="p-[10px] text-white bg-[#004E11] font-semibold rounded-lg w-full mb-4">Simpan Perubahan</button>
                    </div>
                </div>
            </form>
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
        function previewImage(input) {
        const imgPreview = input.parentNode.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();

        oFReader.readAsDataURL(input.files[0]);
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        };
    }
    </script>
</body>

</html>

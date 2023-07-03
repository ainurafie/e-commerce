<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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
    <title>Detail Toko</title>
    @vite('resources/css/app.css')

</head>

<body>
    <livewire:navbar.index :index="Auth::user()->id"/>
    <div class="md:px-24 mt-48">
        <h1 class="text-xl font-montserrat font-semibold">Detail Toko</h1>
        <div class="bg-[#D4EDDA] px-24 py-11 rounded-lg">
            <div class="bg-white px-[52px] py-[10px] grid grid-cols-12 rounded-lg">
                <div class="col-span-4 border-r ">
                    <div class="flex gap-5 items-center ">
                        <img src="{{ Storage::url($data->image) }}" alt="" class="w-20 h-20 rounded-full">
                        <div class="container mx-auto ">
                            <h1 class="text-xl font-montserrat font-semibold text-black mb-2">{{ $data->toko }}</h1>
                            <div class="flex gap-[14px]">
                                <h1 class="text-sm font-montserrat font-medium text-[#C2C0C0] mb-2">{{ $data->alamat }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-5 border-r ">
                    <div class=" px-8">
                        <h1 class="text-[#C2C0C0] text-sm font-medium font-montserrat line-clamp-5">Lorem ipsum dolor sit amet consectetur. Faucibus consectetur gravida aenean viverra eget. Turpis enim mauris quam egestas id dolor eros. Gravida adipiscing nunc quis nec consequat.</h1>
                    </div>
                </div>
                <div class="col-span-3 flex items-center justify-center">
                    <div class="flex gap-2">
                        @php
                            $ulasan = App\Models\Ulasan::where('penjual_id', $data->id)->count();
                        @endphp
                        <h1 class="text-sm font-montserrat mb-[14px]">{{ $ulasan }} ulasan</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-7">
            <div class="justify-end w-full gap-3 flex">
                <div class="flex items-center ">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="simple-search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[358px] pl-10 p-2.5"
                            placeholder="Cari produk di toko" required>
                    </div>
                </div>
                <button class="flex gap-1 text-sm bg-[#F4F4F4] items-center rounded-lg p-3 text-[#C2C0C0]">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.5625 3.75H13.3125M10.3125 2.25V5.25M10.3125 3.75H2.0625M5.0625 8H2.0625M8.0625 6.5C8.0625 6.5 8.0625 7.9379 8.0625 9.5M16.3125 8H8.0625M15.5625 13.25C14.6838 13.25 14.1912 13.25 13.3125 13.25M10.3125 11.75V14.75M10.3125 13.25H2.0625" stroke="#C2C0C0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Filter                        
                </button>
            </div>
            <h1 class="text-2xl font-montserrat font-semibold">Semua Produk</h1>
            <div class="mt-7 h-[500px] w-full overflow-x-auto">
                <div class="flex gap-5 w-full">
                    <livewire:card.produck.index :index="$data->id"/>
                </div>
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
        <div class="bg-gray-200">
    <div class="container mx-auto p-4">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="bg-white p-4">
          <h1 class="text-lg font-bold mb-2">Konten 1</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec est vel arcu varius pellentesque.</p>
        </div>
        <div class="bg-white p-4">
          <h1 class="text-lg font-bold mb-2">Konten 2</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec est vel arcu varius pellentesque.</p>
        </div>
        <div class="bg-white p-4">
          <h1 class="text-lg font-bold mb-2">Konten 3</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec est vel arcu varius pellentesque.</p>
        </div>
        <div class="bg-white p-4">
          <h1 class="text-lg font-bold mb-2">Konten 4</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec est vel arcu varius pellentesque.</p>
        </div>
        <div class="bg-white p-4">
          <h1 class="text-lg font-bold mb-2">Konten 5</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec est vel arcu varius pellentesque.</p>
        </div>
        <div class="bg-white p-4">
          <h1 class="text-lg font-bold mb-2">Konten 6</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec est vel arcu varius pellentesque.</p>
        </div>
      </div>
    </div>
  </div>
</body>
        countItems();
    </script>
</body>

</html>
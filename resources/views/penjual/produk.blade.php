<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.tailwindcss.com"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <title>UMKM Banyumasan</title>
    @vite('resources/css/app.css')
    <style>
        .chart-container {
            width: 400px;
            height: 400px;
        }

        .chart {
            display: flex
        }
    </style>
</head>

<body>
    <livewire:sidebar.penjual />
    <div class="p-4 sm:ml-52">
        <h1 class="text-xl font-montserrat font-semibold">Detail Produk</h1>
        <div class="bg-[#D4EDDA] px-24 py-11 rounded-lg">
            <div class="bg-white px-[52px] py-[10px] grid grid-cols-12 rounded-lg">
                <div class="col-span-4 border-r ">
                    <div class="flex gap-5 items-center ">
                        <img src="{{ Storage::url(Auth::user()->image) }}" alt="" class="w-24 h-24 rounded-full">
                        <div class="">
                            <h1 class="text-xl font-montserrat font-semibold text-black mb-2">{{ Auth::user()->toko }}</h1>
                            <h1 class="text-sm font-montserrat font-medium text-[#C2C0C0] mb-2">{{ Auth::user()->alamat }}</h1>
                            <div class="flex gap-[14px]">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-8 flex items-center justify-center">
                    <div class="ps-3">
                        @php
                            $ulasan = App\Models\Ulasan::where('penjual_id', Auth::user()->id)->count();
                        @endphp
                        <h1 class="text-sm font-montserrat mb-[14px] font-semibold">Penjual ini medapatkan {{ $ulasan }} Ulasan</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-7">
            <div class="justify-end w-full gap-3 flex">
                <button data-modal-toggle="add-produk"
                    class="text-white flex gap-3 items-center font-montserrat font-semibold text-sm bg-[#2AA345] rounded-lg py-2.5 px-4"><svg
                        width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.8332 10.8332H10.8332V15.8332H9.1665V10.8332H4.1665V9.1665H9.1665V4.1665H10.8332V9.1665H15.8332V10.8332Z"
                            fill="#FAFAFA" />
                    </svg>
                    Tambah Produk
                </button>
            </div>
            <h1 class="text-2xl font-montserrat font-semibold">Semua Produk</h1>
            <div class="flex gap-5 flex-wrap">
                <livewire:card.produck.index />
            </div>
        </div>
    </div>
    <div class="mt-80">
        <livewire:footer.index />
    </div>
    <livewire:modal.add-produk/>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>

</html>

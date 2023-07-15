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
    <livewire:sidebar.super-admin />
@php
    $user = App\Models\User::findOrFail($data->user_id);
    $produk = App\Models\Produk::findOrFail($data->produk_id);
    $penjual = App\Models\User::findOrFail($produk->user_id);
@endphp

<div class="flex justify-center py-[90px] overflow-y-auto sm:ml-64 h-full">
    <div class="p-4 w-full max-w-md h-full md:h-auto">
        <div class="relative rounded-lg px-5 py-8 shadow max-h-[400px] overflow-y-auto bg-white">
            <div class="">
                <div class="">
                    <div class="flex gap-24 mb-8">
                        <div class="">
                            <h1 class="text-xs text-black font-semibold font-montserrat mb-2">Pemesan</h1>
                            <h1 class="text-xs text-[#919191] font-montserrat mb-2">{{ $user->name }}</h1>
                        </div>
                        <div class="">
                            <h1 class="text-xs text-black font-semibold font-montserrat mb-2">Tanggal Pembelian</h1>
                            <h1 class="text-xs text-[#919191] font-montserrat">{{ $data->created_at }}</h1>
                        </div>
                    </div>
                    <div class="flex gap-24 mb-8">
                        <div class="">
                            <h1 class="text-xs text-black font-semibold font-montserrat mb-2">Nama Produk</h1>
                            <h1 class="text-xs text-[#919191] font-montserrat mb-2">{{ $produk->nama }}</h1>
                        </div>
                        <div class="">
                            <h1 class="text-xs text-black font-semibold font-montserrat mb-2">Transaksi</h1>
                            <h1 class="text-xs text-[#919191] font-montserrat ">{{ $data->metode_pembayaran }}</h1>
                        </div>
                    </div>
                    <div class="flex gap-24 mb-8">
                        <div class="">
                            <h1 class="text-xs text-black font-semibold font-montserrat mb-2">Jumlah Pembelian</h1>
                            <h1 class="text-xs text-[#919191] font-montserrat mb-2">{{ $data->jumlah }} produk</h1>
                        </div>
                        <div>
                            @php
                                $rekening = App\Models\User::where('id', $data->penjual_id)->first()
                            @endphp
                            <h1 class="text-xs text-black font-semibold font-montserrat mb-2">Rekening</h1>
                            <h1 class="text-xs text-[#919191] font-montserrat mb-2">{{ $rekening->norek }}</h1>
                        </div>
                    </div>
                    <div class="flex gap-24 mb-8">
                        <div class="">
                            <h1 class="text-xs text-black font-semibold font-montserrat mb-2">Alamat Pengantaran</h1>
                            <h1 class="text-xs text-[#919191] font-montserrat mb-2">{{$data->alamat}}</h1>
                        </div>
                        <div class="">
                            <h1 class="text-xs text-black font-semibold font-montserrat mb-2">Bukti Pengiriman</h1>
                            <a data-modal-toggle="staticModal"><img src="{{ Storage::url($data->bukti_pengiriman) }}" alt="" width="50px"></a>
                            
                        </div>
                    </div>
                    
            <form method="POST" action="{{ route('pesananAdmin.update', $data->id) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                    <div class="flex gap-3 items-center mb-7">
                        <input type="checkbox" id="pengantaranSelesai" name="status_pemesanan"
                            class="form-checkbox h-5 w-5 text-[#BA2B60] rounded" value="Selesai">
                        <label for="pengantaranSelesai"
                            class="cursor-pointer text-xs font-medium text-[#919191]">Pesanan Selesai</label>
                    </div>
                    <div class="relative mb-7">
                        <h1 class="text-xs text-black font-semibold font-montserrat mb-2">Upload Bukti Pesanan Selesai</h1>
                        <label type="file" name="image-product" id="image-product" required>
                            <span class="">
                                <img class="img-preview w-24 h-24 border-2 rounded-2xl hover:bg-slate-200 cursor-pointer"
                                    alt="">
                            </span>
                            <input class="hidden" type="file" name="bukti_pesanan_selesai" id="image"
                                onchange="previewImage(this)">
                        </label>
                    </div>
                    
                </div>
                <div class="flex justify-center gap-[14px]">
                    <button type="submit"
                        class="text-[#E7E7E7] font-montserrat font-semibold text-sm bg-[#2AA345] rounded-lg py-2.5 px-6">Setujui Pesanan Selesai</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

<div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Static modal
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                </p>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="staticModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                <button data-modal-hide="staticModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
            </div>
        </div>
    </div>
</div>
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

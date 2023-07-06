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
    {{-- <style>
        .chart-container {
            width: 400px;
            height: 400px;
        }

        .chart {
            display: flex
        }
    </style> --}}
</head>

<body>
    <livewire:sidebar.penjual />
<div class=" overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
<div class=" d-block my-auto mx-auto p-4 w-full max-w-md h-full md:h-auto">
    <!-- Modal content -->
    <div class="relative rounded-lg px-5 py-8 shadow max-h-[400px] overflow-y-auto bg-white">
        <div class="">
            <div class="">
                <div class="flex gap-24 mb-8">
                    @php
                        $user = App\Models\User::where('id', $data->user_id)->first();
                        $produk = App\Models\Produk::where('id', $data->produk_id)->first();
                    @endphp
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
                        <h1 class="text-xs text-[#919191] font-montserrat mb-2">{{ $data->jumlah }}</h1>
                    </div>
                    <div>
                    </div>
                </div>
                <div class="mb-7">
                    <h1 class="text-xs text-black font-semibold font-montserrat mb-2">Alamat Pengantaran</h1>
                    <h1 class="text-xs text-[#919191] font-montserrat mb-2">{{$data->alamat}}</h1>
                </div>
            <form method="POST" action="{{ route('pesanan.update', $data->id) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="flex gap-3 items-center mb-7">
                    <input type="checkbox" id="pengantaranSelesai" name="status_pengiriman"
                        class="form-checkbox h-5 w-5 text-[#BA2B60] rounded" value="Terkirim">
                    <label for="pengantaranSelesai"
                        class="cursor-pointer text-xs font-medium text-[#919191]">Pengantaran Selesai</label>
                </div>

                <div class="relative mb-7">
                    <h1 class="text-xs text-black font-semibold font-montserrat mb-2">Upload Bukti Pesanan Diantar</h1>
                    <label type="file" name="image-product" id="image-product" required>
                        <span class="">
                            <img class="img-preview w-24 h-24 border-2 rounded-2xl hover:bg-slate-200 cursor-pointer"
                                alt="">
                        </span>
                        <input class="hidden" type="file" name="bukti_pengiriman" id="image"
                            onchange="previewImage(this)">
                    </label>
                </div>
            
            </div>
            <div class="flex justify-center gap-[14px]">
                <button type="submit"
                    class="text-[#E7E7E7] font-montserrat font-semibold text-sm bg-[#2AA345] rounded-lg py-2.5 px-6">Update Pesanan</button>
            </div>
        </form>
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
{{-- <livewire:footer.index /> --}}
</html>

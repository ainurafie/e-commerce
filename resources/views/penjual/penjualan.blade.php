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
    <livewire:sidebar.penjual />
    <div class="p-4 sm:ml-52">

        <div class="flex justify-end border-b px-12 py-5 mb-2 border-[#D4EDDA]">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16.0002 29.3335C17.4668 29.3335 18.6668 28.1335 18.6668 26.6668H13.3335C13.3335 27.3741 13.6144 28.0524 14.1145 28.5524C14.6146 29.0525 15.2929 29.3335 16.0002 29.3335ZM24.0002 21.3335V14.6668C24.0002 10.5735 21.8135 7.14683 18.0002 6.24016V5.3335C18.0002 4.22683 17.1068 3.3335 16.0002 3.3335C14.8935 3.3335 14.0002 4.22683 14.0002 5.3335V6.24016C10.1735 7.14683 8.00016 10.5602 8.00016 14.6668V21.3335L5.3335 24.0002V25.3335H26.6668V24.0002L24.0002 21.3335Z"
                    fill="#8D8B8B" />
            </svg>
        </div>
        <div class="">
            <h1 class="text-xl text-black font-montserrat font-semibold mt-2 mb-7">Penjualan</h1>
            <div class="mb-9">
                <div class="py-3 px-9 bg-[#F2FCF4] rounded-[8px] w-max">
                    <div class="flex gap-11">
                        <div class="flex gap-6 items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 7L12 2L2 7V17L12 22L22 17V7Z" stroke="url(#paint0_linear_244_1013)"
                                    stroke-width="2" stroke-linejoin="round" />
                                <path d="M2 7L12 12" stroke="url(#paint1_linear_244_1013)" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 22V12" stroke="url(#paint2_linear_244_1013)" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M22 7L12 12" stroke="url(#paint3_linear_244_1013)" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17 4.5L7 9.5" stroke="url(#paint4_linear_244_1013)" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <defs>
                                    <linearGradient id="paint0_linear_244_1013" x1="12" y1="2"
                                        x2="12" y2="22" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#004E11" />
                                        <stop offset="1" stop-color="#34AC4F" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_244_1013" x1="7" y1="7"
                                        x2="7" y2="12" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#004E11" />
                                        <stop offset="1" stop-color="#34AC4F" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_244_1013" x1="12.5" y1="12"
                                        x2="12.5" y2="22" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#004E11" />
                                        <stop offset="1" stop-color="#34AC4F" />
                                    </linearGradient>
                                    <linearGradient id="paint3_linear_244_1013" x1="17" y1="7"
                                        x2="17" y2="12" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#004E11" />
                                        <stop offset="1" stop-color="#34AC4F" />
                                    </linearGradient>
                                    <linearGradient id="paint4_linear_244_1013" x1="12" y1="4.5"
                                        x2="12" y2="9.5" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#004E11" />
                                        <stop offset="1" stop-color="#34AC4F" />
                                    </linearGradient>
                                </defs>
                            </svg>

                            <div class="">
                                <h1 class="text-[#CDCDCD] font-montserrat text-xs">Produk Terjual</h1>
                                <h1 class="text-black font-montserrat font-medium text-lg">{{ $data->count() }} Produk</h1>
                            </div>
                        </div>
                        <div class="flex gap-6 items-center border-l border-r px-[30px] border-[#1A5427]">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 7L12 2L2 7V17L12 22L22 17V7Z" stroke="url(#paint0_linear_244_1013)"
                                    stroke-width="2" stroke-linejoin="round" />
                                <path d="M2 7L12 12" stroke="url(#paint1_linear_244_1013)" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 22V12" stroke="url(#paint2_linear_244_1013)" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M22 7L12 12" stroke="url(#paint3_linear_244_1013)" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17 4.5L7 9.5" stroke="url(#paint4_linear_244_1013)" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <defs>
                                    <linearGradient id="paint0_linear_244_1013" x1="12" y1="2"
                                        x2="12" y2="22" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#004E11" />
                                        <stop offset="1" stop-color="#34AC4F" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_244_1013" x1="7" y1="7"
                                        x2="7" y2="12" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#004E11" />
                                        <stop offset="1" stop-color="#34AC4F" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_244_1013" x1="12.5" y1="12"
                                        x2="12.5" y2="22" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#004E11" />
                                        <stop offset="1" stop-color="#34AC4F" />
                                    </linearGradient>
                                    <linearGradient id="paint3_linear_244_1013" x1="17" y1="7"
                                        x2="17" y2="12" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#004E11" />
                                        <stop offset="1" stop-color="#34AC4F" />
                                    </linearGradient>
                                    <linearGradient id="paint4_linear_244_1013" x1="12" y1="4.5"
                                        x2="12" y2="9.5" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#004E11" />
                                        <stop offset="1" stop-color="#34AC4F" />
                                    </linearGradient>
                                </defs>
                            </svg>

                            <div class="">
                                <h1 class="text-[#CDCDCD] font-montserrat text-xs">Penjualan bulan ini</h1>
                                <div class="flex gap-1 items-center">
                                    <h1 class="text-black font-montserrat font-medium text-lg">Rp. {{ number_format($data->sum('harga'), 0) }}</h1>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 4.5L13.7175 6.2175L10.0575 9.8775L7.0575 6.8775L1.5 12.4425L2.5575 13.5L7.0575 9L10.0575 12L14.7825 7.2825L16.5 9V4.5H12Z"
                                            fill="url(#paint0_linear_244_1044)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_244_1044" x1="9" y1="4.5"
                                                x2="9" y2="13.5" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#004E11" />
                                                <stop offset="1" stop-color="#34AC4F" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-6 items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 7L12 2L2 7V17L12 22L22 17V7Z" stroke="url(#paint0_linear_244_1013)"
                                    stroke-width="2" stroke-linejoin="round" />
                                <path d="M2 7L12 12" stroke="url(#paint1_linear_244_1013)" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 22V12" stroke="url(#paint2_linear_244_1013)" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M22 7L12 12" stroke="url(#paint3_linear_244_1013)" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17 4.5L7 9.5" stroke="url(#paint4_linear_244_1013)" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <defs>
                                    <linearGradient id="paint0_linear_244_1013" x1="12" y1="2"
                                        x2="12" y2="22" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#004E11" />
                                        <stop offset="1" stop-color="#34AC4F" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_244_1013" x1="7" y1="7"
                                        x2="7" y2="12" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#004E11" />
                                        <stop offset="1" stop-color="#34AC4F" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_244_1013" x1="12.5" y1="12"
                                        x2="12.5" y2="22" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#004E11" />
                                        <stop offset="1" stop-color="#34AC4F" />
                                    </linearGradient>
                                    <linearGradient id="paint3_linear_244_1013" x1="17" y1="7"
                                        x2="17" y2="12" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#004E11" />
                                        <stop offset="1" stop-color="#34AC4F" />
                                    </linearGradient>
                                    <linearGradient id="paint4_linear_244_1013" x1="12" y1="4.5"
                                        x2="12" y2="9.5" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#004E11" />
                                        <stop offset="1" stop-color="#34AC4F" />
                                    </linearGradient>
                                </defs>
                            </svg>

                            <div class="">
                                <h1 class="text-[#CDCDCD] font-montserrat text-xs">Jumlah Konsumen</h1>
                                <h1 class="text-black font-montserrat font-medium text-lg">{{ $user }}</h1>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="relative  overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-[#ECFFEC]">
                        <tr>
                            <th scope="col" class="px-6 py-3 truncate">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3 truncate">
                                Produk
                            </th>
                            <th scope="col" class="px-6 py-3 truncate">
                                No telp
                            </th>
                            <th scope="col" class="px-6 py-3 truncate">
                                tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jumlah
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Alamat
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Transaksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                            <tr class="bg-white border-b"> 
                                @php
                                    $user = App\Models\User::where('id', $d->user_id)->first();
                                    $produk = App\Models\Produk::where('id', $d->produk_id)->first();
                                @endphp
                            <td class="px-6 py-4 truncate">
                               
                                {{ $user->name }}
                            </td>
                            <td class="px-6 py-4 truncate">
                                <a href="{{ route('pesanan.show', $d->id) }}">
                                <button >
                                    {{ $produk->nama }}
                                </button>
                                </a>
                            </td>
                            <td class="px-6 py-4 truncate">
                                {{ $d->no }}
                            </td>
                            <td class="px-6 py-4 truncate">
                               {{$d->created_at}}
                            </td>
                            <td class="px-6 py-4">
                                {{ $d->jumlah }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $d->alamat }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $d->metode_pembayaran }}
                            </td>
                        </tr>
                        {{-- <livewire:modal.pesanan-penjual :index="$d->id"/> --}}
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <div class="mt-80">
        <livewire:footer.index />
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>

</html>

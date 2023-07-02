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
            <h1 class="text-xl text-black font-montserrat font-semibold mt-2 mb-7">Keranjang</h1>
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
                                Harga
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                        @php
                            $user = App\Models\User::where('id', $d->user_id)->first();
                            $produk = App\Models\Produk::where('id', $d->produk_id)->first();
                        @endphp
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 truncate">
                                {{ $user->name }}
                            </td>
                            <td class="px-6 py-4 truncate">
                                {{ $produk->nama }}
                            </td>
                            <td class="px-6 py-4 truncate">
                                {{ $user->noHp }}
                            </td>
                            <td class="px-6 py-4 truncate">
                                {{ $d->created_at }}
                            </td>
                            <td class="px-6 py-4 truncate">
                                {{ $d->jumlah }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->alamat }}
                            </td>
                            <td class="px-6 py-4">
                                {{$produk->harga * $d->jumlah}}
                            </td>
                        </tr>
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

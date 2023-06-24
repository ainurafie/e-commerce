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
    <div class="p-4 px-12 py-[97px] sm:ml-64 h-full">
        <h1 class="text-black text-xl font-montserrat font-semibold mb-6">Pesanan</h1>
        <div class="relative  overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-[#ECFFEC]">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Penjual
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pembeli
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Produk
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pembayaran
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                    @php
                        $user = App\Models\User::findOrFail($d->user_id);
                        $produk = App\Models\Produk::findOrFail($d->produk_id);
                        $penjual = App\Models\User::findOrFail($produk->user_id);
                    @endphp
                    <tr class="bg-white border-b">
                        <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap">
                            <div class="pl-3">
                                <div class="text-base font-semibold">{{ $d->id }}</div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            {{$penjual->name}}
                        </td>
                        <td class="px-6 py-4">
                            {{$user->name}}
                        </td>
                        <td class="px-6 py-4">
                            {{$produk->nama}}
                        </td>
                        <td class="px-6 py-4">
                            {{$d->jumlah}}
                        </td>
                        <td class="px-6 py-4">
                            {{$d->harga}}
                        </td>
                        <td class="px-6 py-4">
                            {{$d->metode_pembayaran}}
                        </td>
                        <td class="px-6 py-4 truncate">
                            <div
                                class="py-2 px-2.5 text-center rounded-[8px] {{ ($d->status_pemesanan) ? 'bg-[#D4EDDA] text-[#004E11]' : 'bg-[#FF000] text-[red]' }} text-xs font-semibold font-montserrat">
                                {{ $d->status_pemesanan ? $d->status_pemesanan : 'belum Disetujui' }}</div>
                        </td>
                        <td class="px-6 py-4">
                            @if ($d->status_pemesanan != 'Selesai')
                            <a href="{{ route('pesananAdmin.show', $d->id) }}">
                                <button>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.3835 7.35762C14.3636 7.31191 13.8761 6.23086 12.7874 5.14219C11.7773 4.1332 10.0417 2.92969 7.49991 2.92969C4.95812 2.92969 3.22257 4.1332 2.21241 5.14219C1.12374 6.23086 0.636243 7.31016 0.616321 7.35762C0.596289 7.40262 0.585938 7.45133 0.585938 7.50059C0.585938 7.54984 0.596289 7.59855 0.616321 7.64355C0.636243 7.68867 1.12374 8.76973 2.21241 9.8584C3.22257 10.8674 4.95812 12.0703 7.49991 12.0703C10.0417 12.0703 11.7773 10.8674 12.7874 9.8584C13.8761 8.76973 14.3636 7.69043 14.3835 7.64355C14.4035 7.59855 14.4139 7.54984 14.4139 7.50059C14.4139 7.45133 14.4035 7.40262 14.3835 7.35762ZM7.49991 11.3672C5.66124 11.3672 4.05577 10.698 2.72745 9.3791C2.17062 8.82571 1.69943 8.19238 1.32941 7.5C1.69932 6.80773 2.17053 6.17458 2.72745 5.62148C4.05577 4.30195 5.66124 3.63281 7.49991 3.63281C9.33859 3.63281 10.9441 4.30195 12.2724 5.62148C12.8293 6.17458 13.3005 6.80773 13.6704 7.5C13.2972 8.21543 11.4257 11.3672 7.49991 11.3672ZM7.49991 4.80469C6.96683 4.80469 6.44572 4.96276 6.00248 5.25893C5.55924 5.55509 5.21377 5.97604 5.00977 6.46855C4.80577 6.96105 4.75239 7.50299 4.85639 8.02583C4.96039 8.54867 5.21709 9.02893 5.59404 9.40587C5.97099 9.78282 6.45125 10.0395 6.97409 10.1435C7.49692 10.2475 8.03886 10.1941 8.53137 9.99014C9.02387 9.78614 9.44482 9.44068 9.74098 8.99744C10.0371 8.55419 10.1952 8.03308 10.1952 7.5C10.1943 6.78544 9.91003 6.10042 9.40476 5.59515C8.89949 5.08989 8.21447 4.80562 7.49991 4.80469ZM7.49991 9.49219C7.1059 9.49219 6.72073 9.37535 6.39311 9.15644C6.0655 8.93754 5.81016 8.6264 5.65937 8.26238C5.50859 7.89835 5.46914 7.49779 5.54601 7.11134C5.62288 6.7249 5.81261 6.36992 6.09123 6.09131C6.36984 5.8127 6.72481 5.62296 7.11126 5.54609C7.4977 5.46922 7.89827 5.50867 8.26229 5.65946C8.62632 5.81024 8.93745 6.06559 9.15636 6.3932C9.37526 6.72081 9.4921 7.10598 9.4921 7.5C9.4921 8.02836 9.28221 8.53508 8.9086 8.90869C8.535 9.2823 8.02828 9.49219 7.49991 9.49219Z"
                                            fill="#8D8B8B" />
                                    </svg> 
                                </button>
                            </a>
                            @endif
                        </td> 
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    <div class="mt-80">
        <livewire:footer.index />
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="../assets/js/chart/superadmin.js"></script>
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

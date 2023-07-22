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
    <input type="text" name="cod" id="cod" value="{{ $cod }}" hidden>
    <input type="text" name="bca" id="bca" value="{{ $bca }}" hidden>
    <div class="p-4 sm:ml-52">

        <div class="flex justify-end border-b px-12 py-5 mb-2 border-[#D4EDDA]">
            <button class="mx-4" data-dropdown-toggle="list-notifikasi" type="button">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M16.0002 29.3335C17.4668 29.3335 18.6668 28.1335 18.6668 26.6668H13.3335C13.3335 27.3741 13.6144 28.0524 14.1145 28.5524C14.6146 29.0525 15.2929 29.3335 16.0002 29.3335ZM24.0002 21.3335V14.6668C24.0002 10.5735 21.8135 7.14683 18.0002 6.24016V5.3335C18.0002 4.22683 17.1068 3.3335 16.0002 3.3335C14.8935 3.3335 14.0002 4.22683 14.0002 5.3335V6.24016C10.1735 7.14683 8.00016 10.5602 8.00016 14.6668V21.3335L5.3335 24.0002V25.3335H26.6668V24.0002L24.0002 21.3335Z"
                        fill="#8D8B8B" />
                </svg>
            </button>
        </div>

        {{-- popover list notifikasi --}}
        <div id="list-notifikasi" class="pb-24 z-10 hidden bg-white divide-y rounded-lg shadow w-80">
            <ul class="py-2 text-sm text-black dark:text-gray-200" aria-labelledby="multiLevelDropdownButton">
            @foreach ($notifikasi as $notif)
            @php
                $checkout = App\Models\Checkout::where('id', $notif->checkout_id)->first();
                $produkNotif = App\Models\Produk::where('id', $checkout->produk_id)->first();
                $penjual = App\Models\User::where('id', $checkout->penjual_id)->first();
            @endphp
            <li>
                <button id="notif{{ $notif->id }}" data-dropdown-toggle="detail-notifikasi{{ $notif->id }}" data-dropdown-placement="left-start" type="button" class="font-medium text-left w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                    {{ $notif->pesan }} <br>
                    <div class="flex justify-between">
                    <small class="text-gray">{{ $penjual->toko }} : {{ $produkNotif->nama }} ({{ $checkout->jumlah }})</small>
                    <small>{{ $checkout->created_at }}</small>
                    </div>
                </button>
                <hr class="mt-1">


                    {{-- popover detail notifikasi  --}}
                    @php
                        $pesan = App\Models\Notifikasi::where('id', $notif->id)->first();
                        $dataNotif = App\Models\Checkout::where('id', $pesan->checkout_id)->first();
                        $produkNotif = App\Models\Produk::where('id', $dataNotif->produk_id)->first();
                        $penjual = App\Models\User::where('id', $dataNotif->penjual_id)->first();
                    @endphp
                    <livewire:modal.laporkan :index="$dataNotif->id" :penjual="$penjual->id"/>
                    <div id="detail-notifikasi{{ $notif->id }}"
                        class="z-10 hidden text-monttserat bg-white divide-y rounded-lg shadow w-100">
                        <div class="p-3">
                        <strong class="mx-4">{{ $pesan->pesan }}</strong>
                        <hr class="mt-4">
                        <div class="grid grid-cols-2 gap-4 p-3">
                                <div class="...">
                                    <p class="font-medium">Nama Toko</p>
                                    <p>{{ $penjual->toko }}</p>
                                </div>
                                <div class="...">
                                    <p class="font-medium">Tanggal Pembelian</p>
                                    <p>{{ $dataNotif->created_at }}</p>
                                </div>
                                <div class="...">
                                    <p class="font-medium">Nama Produk</p>
                                    <p>{{ $produkNotif->nama }}</p>
                                </div>
                                <div class="...">
                                    <p class="font-medium">Transaksi</p>
                                    <p>{{ $dataNotif->metode_pembayaran }}</p>
                                </div>
                                <div class="...">
                                    <p class="font-medium">Jumlah Pembelian</p>
                                    <p>{{ $dataNotif->jumlah }} Produk</p>
                                </div>
                                <div class="...">
                                    <p class="font-medium">No Telepon</p>
                                    <p>{{ $dataNotif->no }}</p>
                                </div>
                                <div class="col-span-2 ...">
                                    <p class="font-medium">Alamat</p>
                                    <p>{{ $dataNotif->alamat }}</p>
                                </div>
                                @if ($dataNotif->status_pemesanan == "Selesai")
                                <div class="col-span-2 ...">
                                    <form method="POST" action="{{ route('ulasan.store') }}">
                                        @csrf
                                        <h1 class="font-medium mb-2.5">
                                            Ulasan<label class="text-[#CB3A26]">*</label>
                                        </h1>
                                        <input type="text" name="produk_id" value="{{ $produkNotif->id }}" hidden>
                                        <input type="text" name="penjual_id" value="{{ $produkNotif->user_id }}" hidden>
                                        <textarea rows="2" name="pesan" value=""
                                            class="bg-white border border-[#D4EDDA] text-black font-light text-sm rounded-lg block w-full p-2.5"
                                            placeholder="Tuliskan Ulasan Ada tentang produk ini">
                                        </textarea>
                                        <button type="submit" class="text-[#E7E7E7] font-montserrat font-semibold text-sm bg-[#2AA345] rounded-lg py-2.5 px-6 mt-4">Kirim Ulasan</button>
                                    </form>
                                </div>
                                <div class="flex flex-wrap">
                                    <h1 class="text-[10px] text-[#919191] font-montserrat font-semibold">Apakah produk ini ada masalah?</h1>
                                    <button data-modal-toggle="lapor" class="flex items-left gap-1">
                                        <h1 class="text-[10px] text-[#931E1E] font-montserrat font-semibold">Laporkan</h1>
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.22931 5.59828V3.62195M8.88622 9.22953C8.98347 9.22972 9.07915 9.20509 9.16423 9.15798C9.2493 9.11088 9.32095 9.04284 9.3724 8.96033C9.42385 8.87781 9.4534 8.78353 9.45826 8.6864C9.46311 8.58928 9.44311 8.49252 9.40014 8.40528L5.83889 1.15037C5.78296 1.03638 5.6962 0.940358 5.58845 0.873202C5.4807 0.806046 5.35627 0.770447 5.22931 0.770447C5.10234 0.770447 4.97792 0.806046 4.87017 0.873202C4.76241 0.940358 4.67565 1.03638 4.61972 1.15037L1.05847 8.40528C1.01568 8.49254 0.995807 8.58926 1.00074 8.68632C1.00567 8.78338 1.03524 8.87758 1.08665 8.96005C1.13807 9.04252 1.20965 9.11053 1.29463 9.15768C1.37961 9.20483 1.4752 9.22956 1.57239 9.22953H8.88622Z"
                                                stroke="#7B0E0E" stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M5.22949 7.55243C5.17148 7.55243 5.11584 7.52938 5.07481 7.48836C5.03379 7.44734 5.01074 7.3917 5.01074 7.33368C5.01074 7.27566 5.03379 7.22002 5.07481 7.179C5.11584 7.13798 5.17148 7.11493 5.22949 7.11493M5.22949 7.55243C5.28751 7.55243 5.34315 7.52938 5.38417 7.48836C5.4252 7.44734 5.44824 7.3917 5.44824 7.33368C5.44824 7.27566 5.4252 7.22002 5.38417 7.179C5.34315 7.13798 5.28751 7.11493 5.22949 7.11493"
                                                stroke="#7B0E0E" stroke-width="1.5" />
                                        </svg>
                                    </button>
                                </div>
                                
                                @endif
                            </div>
                        </div>
                        <div data-popper-arrow></div>
                    </div>


            </li>
            @endforeach
            </ul>
        </div>
        <div class="">
            <h1 class="text-xl text-black font-montserrat font-semibold">Rekap</h1>
            <div class="grid grid-cols-3 gap-5">
                <div class="col-span-2">
                    <div class="flex justify-end gap-5 mb-6">
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
                    <div class="flex gap-5 w-full">
                        <livewire:card.terjual />
                        <livewire:card.pendapatan />
                        <livewire:card.pengunjung />
                    </div>
                    <h1 class="text-xl text-black font-montserrat font-semibold mb-5 mt-12">Grafik Penjualan</h1>
                    <canvas id="lineChart"></canvas>
                </div>
                <div class="col-span-1">
                    <div class="px-5 py-5 border border-[#CDCDCD] rounded-[6px] w-full h-auto mb-2.5 shadow">
                        <div class="border-b border-[#CDCDCD]">
                            <h1 class="text-sm font-montserrat font-medium text-[#7D8E7C] mb-5">Grafik Pengguna</h1>
                        </div>
                        <canvas id="chart1" class=></canvas>
                    </div>
                    <div class="px-5 py-5 border border-[#CDCDCD] rounded-[6px] w-full h-auto shadow">
                        <div class="border-b border-[#CDCDCD]">
                            <h1 class="text-sm font-montserrat font-medium text-[#7D8E7C] mb-5">Paling banyak Terjual
                            </h1>
                        </div>
                        <div class="py-6">
                            {{-- @dd($produk) --}}
                            @foreach ($produk as $p)
                            <div class="flex gap-2.5 items-center mb-3">
                                <img src="{{ Storage::url($p->gambar) }}" alt="" class="w-10 h-10 rounded-[8px]">
                                <div class="">
                                    <h1 class="text-xs font-montserrat font-semibold text-black mb-1.5">{{ $p->nama }}</h1>
                                    <h1 class="text-[10px] font-montserrat text-[#CDCDCD]">{{ $p->terjual }} produk terjual</h1>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        {{ $produk->links() }}
                    </div>
                </div>
            </div>
            <h1 class="text-xl text-black font-montserrat font-semibold mb-5 mt-7">Pesanan</h1>
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
                                No Telp
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
                        @php
                            $user = App\Models\User::where('id', $d->user_id)->first();
                            $produk = App\Models\Produk::where('id', $d->produk_id)->first();
                        @endphp
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 truncate">
                                {{ $user->name }}
                            </td>
                            <td>
                            <a href="{{ route('pesanan.show', $d->id) }}">
                                <button >{{ $produk->nama }} </button>
                            </a>
                            </td>
                            <td class="px-6 py-4">
                                {{ $d->no }}
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
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <div class="mt-40">
        <livewire:footer.index />
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script>
        let cod = document.getElementById('cod');
        let bca = document.getElementById('bca');
        // Data untuk grafik pie pertama
        var data1 = {
            labels: ['COD', 'Transfer'],
            datasets: [{
                data: [cod.value, bca.value],
                backgroundColor: ['#F765A3', '#16BFD6']
            }]
        };
        
        // Opsi global untuk legenda
        Chart.defaults.plugins.legend.position = 'right';

        // Membuat grafik pie pertama
        var ctx1 = document.getElementById('chart1').getContext('2d');
        ctx1.canvas.width = 200;
        ctx1.canvas.height = 200;
        var chart1 = new Chart(ctx1, {
            type: 'pie',
            data: data1
        });
    </script>
    <script>
        // Mendapatkan referensi ke elemen canvas
        var ctx = document.getElementById('lineChart').getContext('2d');

        // Data yang akan ditampilkan pada chart
        var data = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Example Dataset',
                data: [10, 20, 15, 25, 30, 35],
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        };

        // Konfigurasi chart
        var options = {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        };

        // Membuat line chart
        var lineChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: options
        });
    </script>
</body>

</html>

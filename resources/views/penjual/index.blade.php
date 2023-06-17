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
            <h1 class="text-xl text-black font-montserrat font-semibold">Rekap</h1>
            <div class="grid grid-cols-3 gap-5">
                <div class="col-span-2">
                    <div class="flex justify-end gap-5 mb-6">
                        <select name="category"
                            class="bg-white w-max border border-[#CDCDCD] text-[#CDCDCD] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
                            <option value="" selected>Bulan ini</option>
                            <option value=""></option>
                        </select>
                        <button data-modal-toggle="pesanan"
                            class="text-[#E7E7E7] flex gap-3 items-center font-montserrat font-semibold text-sm bg-[#2AA345] rounded-lg py-2.5 px-4"><svg
                                width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.8332 10.8332H10.8332V15.8332H9.1665V10.8332H4.1665V9.1665H9.1665V4.1665H10.8332V9.1665H15.8332V10.8332Z"
                                    fill="#FAFAFA" />
                            </svg>
                            Tambah
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
                            <h1 class="text-sm font-montserrat font-medium text-[#7D8E7C] mb-5">Paling sering dilihat
                            </h1>
                        </div>
                        <div class="py-6">
                            <div class="flex gap-2.5 items-center mb-3">
                                <img src="../assets/images/produk.png" alt="" class="w-10 h-10 rounded-[8px]">
                                <div class="">
                                    <h1 class="text-xs font-montserrat font-semibold text-black mb-1.5">Nama Produk</h1>
                                    <h1 class="text-[10px] font-montserrat text-[#CDCDCD]">23 kali dilihat</h1>
                                </div>
                            </div>
                            <div class="flex gap-2.5 items-center mb-3">
                                <img src="../assets/images/produk.png" alt="" class="w-10 h-10 rounded-[8px]">
                                <div class="">
                                    <h1 class="text-xs font-montserrat font-semibold text-black mb-1.5">Nama Produk</h1>
                                    <h1 class="text-[10px] font-montserrat text-[#CDCDCD]">23 kali dilihat</h1>
                                </div>
                            </div>
                            <div class="flex gap-2.5 items-center mb-3">
                                <img src="../assets/images/produk.png" alt="" class="w-10 h-10 rounded-[8px]">
                                <div class="">
                                    <h1 class="text-xs font-montserrat font-semibold text-black mb-1.5">Nama Produk</h1>
                                    <h1 class="text-[10px] font-montserrat text-[#CDCDCD]">23 kali dilihat</h1>
                                </div>
                            </div>
                        </div>
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
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 truncate">
                                Jennie Rubyjane
                            </td>
                            <td class="px-6 py-4 truncate">
                                Manik Manik Imut
                            </td>
                            <td class="px-6 py-4">
                                2
                            </td>
                            <td class="px-6 py-4">
                                Komplek PJKA 386-388, JL. Jend. Sudirman, Purwokerto Lor, Purwokerto, Sokanegara, Kec. Purwokerto Tim., Kabupaten Banyumas, Jawa Tengah 53115
                            </td>
                            <td class="px-6 py-4">
                                COD
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 truncate">
                                Jennie Rubyjane
                            </td>
                            <td class="px-6 py-4 truncate">
                                Manik Manik Imut
                            </td>
                            <td class="px-6 py-4">
                                2
                            </td>
                            <td class="px-6 py-4">
                                Komplek PJKA 386-388, JL. Jend. Sudirman, Purwokerto Lor, Purwokerto, Sokanegara, Kec. Purwokerto Tim., Kabupaten Banyumas, Jawa Tengah 53115
                            </td>
                            <td class="px-6 py-4">
                                Transfer
                            </td>
                        </tr>
                       
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
        // Data untuk grafik pie pertama
        var data1 = {
            labels: ['COD', 'Transfer'],
            datasets: [{
                data: [30, 40],
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

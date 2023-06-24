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
    <div class="p-4 sm:ml-64">
        <h1 class="py-11 text-xs text-black font-montserrat font-semibold">Hallo, Superadmin</h1>
        <div class="flex flex-row gap-4">
            <div class="px-10 py-5 border border-[#CDCDCD] rounded-[6px] w-full h-auto">
                <div class="border-b border-[#CDCDCD]">
                    <h1 class="text-sm font-montserrat font-medium text-[#7D8E7C] mb-5">Grafik Pengguna</h1>
                    <input type="text" name="penjual" id="penjual" value="{{ $penjual }}" hidden>
                    <input type="text" name="pembeli" id="pembeli" value="{{ $pembeli }}" hidden>
                </div>
                <canvas id="chart1" class=></canvas>
                <div class="flex justify-end">
                    <a href="" class="text-[10px] font-montserrat font-semibold text-[#004E11]">Lihat semua</a>
                </div>
            </div>
            <div class="px-10 py-5 border border-[#CDCDCD] rounded-[6px] w-full h-auto">
                <div class="border-b border-[#CDCDCD]">
                    <h1 class="text-sm font-montserrat font-medium text-[#7D8E7C] mb-5">Grafik Pesanan</h1>
                    <input type="text" name="selesai" id="selesai" value="{{ $selesai }}" hidden>
                    <input type="text" name="belumSelesai" id="belumSelesai" value="{{ $belumSelesai }}" hidden>
                </div>
                <canvas id="chart2" class=></canvas>
                <div class="flex justify-end">
                    <a href="/super-admin/pesanan" class="text-[10px] font-montserrat font-semibold text-[#004E11]">Lihat semua</a>
                </div>
            </div>
            <div class="px-10 py-5 border border-[#CDCDCD] rounded-[6px] w-full h-auto">
                <div class="border-b border-[#CDCDCD]">
                    <h1 class="text-sm font-montserrat font-medium text-[#7D8E7C] mb-5">Grafik Laporan</h1>
                </div>
                <canvas id="chart3" class=></canvas>
                <div class="flex justify-end">
                    <a href="/super-admin/laporan" class="text-[10px] font-montserrat font-semibold text-[#004E11]">Lihat semua</a>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-40">
        <livewire:footer.index />
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="../assets/js/chart/superadmin.js"></script>
</body>

</html>

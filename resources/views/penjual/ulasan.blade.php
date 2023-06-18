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
    <div class="p-4 px-12 py-[97px] sm:ml-64 h-full">
        <h1 class="text-black text-xl font-montserrat font-semibold mb-6">Ulasan</h1>
        <div class="relative  overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-[#ECFFEC]">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Produk
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ulasan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Rating
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b">

                        <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap">
                            <img class="w-[59px] h-[59px] rounded-[8px]" src="/assets/images/produk.png"
                                alt="Jese image">
                            <div class="pl-3">
                                <div class="text-base font-semibold">Manik manik</div>
                            </div>
                        </th>
                        <td class="px-6 py-4 truncate">
                            Jennie Rubyjane
                        </td>
                        <td class="px-6 py-4">
                            Komplek PJKA 386-388, JL. Jend. Sudirman, Purwokerto Lor, Purwokerto, Sokanegara, Kec.
                            Purwokerto Tim., Kabupaten Banyumas, Jawa Tengah 53115
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex gap-1 items-center">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.6775 13.3L3.815 8.3825L0 5.075L5.04 4.6375L7 0L8.96 4.6375L14 5.075L10.185 8.3825L11.3225 13.3L7 10.6925L2.6775 13.3Z"
                                        fill="#FFDD2A" />
                                </svg>
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.6775 13.3L3.815 8.3825L0 5.075L5.04 4.6375L7 0L8.96 4.6375L14 5.075L10.185 8.3825L11.3225 13.3L7 10.6925L2.6775 13.3Z"
                                        fill="#FFDD2A" />
                                </svg>
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.6775 13.3L3.815 8.3825L0 5.075L5.04 4.6375L7 0L8.96 4.6375L14 5.075L10.185 8.3825L11.3225 13.3L7 10.6925L2.6775 13.3Z"
                                        fill="#FFDD2A" />
                                </svg>
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.6775 13.3L3.815 8.3825L0 5.075L5.04 4.6375L7 0L8.96 4.6375L14 5.075L10.185 8.3825L11.3225 13.3L7 10.6925L2.6775 13.3Z"
                                        fill="#FFDD2A" />
                                </svg>

                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b">

                        <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap">
                            <img class="w-[59px] h-[59px] rounded-[8px]" src="/assets/images/produk.png"
                                alt="Jese image">
                            <div class="pl-3">
                                <div class="text-base font-semibold">Manik manik</div>
                            </div>
                        </th>
                        <td class="px-6 py-4 truncate">
                            Jennie Rubyjane
                        </td>
                        <td class="px-6 py-4">
                            Komplek PJKA 386-388, JL. Jend. Sudirman, Purwokerto Lor, Purwokerto, Sokanegara, Kec.
                            Purwokerto Tim., Kabupaten Banyumas, Jawa Tengah 53115
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex gap-1 items-center">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.6775 13.3L3.815 8.3825L0 5.075L5.04 4.6375L7 0L8.96 4.6375L14 5.075L10.185 8.3825L11.3225 13.3L7 10.6925L2.6775 13.3Z"
                                        fill="#FFDD2A" />
                                </svg>
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.6775 13.3L3.815 8.3825L0 5.075L5.04 4.6375L7 0L8.96 4.6375L14 5.075L10.185 8.3825L11.3225 13.3L7 10.6925L2.6775 13.3Z"
                                        fill="#FFDD2A" />
                                </svg>
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.6775 13.3L3.815 8.3825L0 5.075L5.04 4.6375L7 0L8.96 4.6375L14 5.075L10.185 8.3825L11.3225 13.3L7 10.6925L2.6775 13.3Z"
                                        fill="#FFDD2A" />
                                </svg>
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.6775 13.3L3.815 8.3825L0 5.075L5.04 4.6375L7 0L8.96 4.6375L14 5.075L10.185 8.3825L11.3225 13.3L7 10.6925L2.6775 13.3Z"
                                        fill="#FFDD2A" />
                                </svg>

                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>
    <div class="mt-80">
        <livewire:footer.index />
    </div>
    <livewire:modal.pesenan />

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

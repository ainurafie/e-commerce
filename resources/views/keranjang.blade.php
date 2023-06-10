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

</head>

<body>
    <livewire:navbar.index />
    <div class="md:px-24 mt-48">
        <h1 class="text-xl font-montserrat font-semibold px-6">Keranjang</h1>
        <div class="bg-white rounded-xl py-[17px] px-6 ">
            
            <div class="grid grid-cols-12">
                <div class="col-span-8">
                    <div class="flex items-center px-4 py-2 text-start gap-2 w-full">
                        <label class="inline-flex items-center ">
                            <input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-[#BA2B60] rounded">
                        </label>
                        <h1 class="text-sm font-monsterat font-semibold">Pilih Semua</h1>
                    </div>
                    <table class="table-auto w-full">
                        <tbody>
                            <tr class="border">
                                <td class="flex items-center mt-1 px-4 py-2 text-start gap-5">
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="selected[]"
                                            class="form-checkbox  h-5 w-5 text-[#BA2B60] rounded">
                                    </label>
                                    <div class="flex items-center gap-5">
                                        <img src="../assets/images/produk.png" alt=""
                                            class="w-[61px] h-[61px] ">
                                        <div class="">
                                            <h1 class="text-sm font-monsterat font-medium mb-2">Tas Rajut Kecil</h1>
                                            <h1 class="text-xs font-monsterat font-medium text-[#C2C0C0]">Lenara Bag
                                            </h1>
                                        </div>
                                    </div>
                                </td>
                                <td class=" px-4 py-2">
                                    <h1 class="text-xs font-monsterat font-medium text-[#CB3A26]">Rp 35.000</h1>
                                </td>
                                <td class=" px-4 py-2">
                                    <select id="category" name="category" wire:model.defer="category"
                                        class="border border-none text-[#B8E0C1]  sm:text-sm">
                                        <option value="" selected>-Pilih Ukuran-</option>
                                        <option value="">Ukuran S</option>
                                        <option value="">Ukuran M</option>
                                        <option value="">Ukuran L</option>
                                        <option value="">Ukuran XL</option>
                                    </select>
                                </td>
                                <td class=" px-4 py-2">
                                    <form action="">
                                        <input class="btn-counter p-2 cursor-pointer" type="button" value="-" />
                                        <input class="total-item text-center w-10 border border-none" type="text"
                                            value="1" />
                                        <input class="btn-counter p-2 cursor-pointer" type="button"
                                            value="+" />
                                    </form>
                                </td>
                                <td class=" px-4 py-2">
                                    <div class="flex items-center">
                                        <button data-modal-toggle="delete">
                                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.25 16.25C4.8375 16.25 4.48425 16.103 4.19025 15.809C3.89625 15.515 3.7495 15.162 3.75 14.75V5H3V3.5H6.75V2.75H11.25V3.5H15V5H14.25V14.75C14.25 15.1625 14.103 15.5157 13.809 15.8097C13.515 16.1038 13.162 16.2505 12.75 16.25H5.25ZM6.75 13.25H8.25V6.5H6.75V13.25ZM9.75 13.25H11.25V6.5H9.75V13.25Z"
                                                    fill="#CB3A26" />
                                            </svg>

                                        </button>
                                    </div>
                                </td>

                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="col-span-4 flex justify-center items-center">
                    <div class="bg-[#FDFDFD] border-[#B8E0C1] shadow-lg border rounded py-7 px-9">
                        <h1 class="text-base font-montserrat text-black font-semibold mb-8">Beli Sekarang</h1>
                        <div class=" grid-cols-2 border-b grid items-center mb-[10px]">
                            <div class="col-span-1 mb-2">
                                <h1 class="text-[#CDCDCD] text-xs font-montserrat">Nama Product</h1>
                            </div>
                            <div class="col-span-1 mb-2">
                                <h1 class="text-black font-semibold text-sm font-montserrat">Manik Manik Lucu </h1>
                            </div>
                        </div>
                        <div class=" grid-cols-2 border-b grid items-center mb-[10px]">
                            <div class="col-span-1 mb-2">
                                <h1 class="text-[#CDCDCD] text-xs font-montserrat">Jumlah</h1>
                            </div>
                            <div class="col-span-1 mb-2">
                                <h1 class="text-black font-semibold text-sm font-montserrat">2 </h1>
                            </div>
                        </div>
                        <div class=" grid-cols-2 border-b grid items-center mb-[10px]">
                            <div class="col-span-1 mb-2">
                                <h1 class="text-[#CDCDCD] text-xs font-montserrat">Total</h1>
                            </div>
                            <div class="col-span-1 mb-2">
                                <h1 class="text-black font-semibold text-sm font-montserrat">Rp 70.000</h1>
                            </div>
                        </div>
                        <div class="flex justify-center mt-[22px]">
                            <button class="p-[10px] text-white bg-[#004E11] font-semibold rounded-lg">Beli Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <livewire:footer.index />
    <livewire:modal.delete />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#select-all').click(function() {
            $('input[name="selected[]"]').prop('checked', this.checked);
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script>
        var mainNav = document.getElementById("main-nav");
        var toggleMenuIcon = document.getElementById("toggle-menu-icon");

        function toggleMenu() {
            mainNav.classList.toggle('hidden');

            // change the icon when the menu is shown/closed
            toggleMenuIcon.classList.toggle('fa-bars');
            toggleMenuIcon.classList.toggle('fa-times');
        }
    </script>
    <script>
        var btnCounter = document.querySelectorAll('.btn-counter');
        var totalItem = document.querySelector('.total-item');


        function countItems() {

            for (var i = 0; i < btnCounter.length; i++) {

                btnCounter[i].addEventListener('click', function() {
                    var oldValue = totalItem.value;

                    // console.log(_this);

                    if (this.value === '+') {
                        // let string convert to integer
                        var newValue = parseInt(oldValue, 10) + 1;
                    } else {
                        // Don't allow decrementing below 1
                        if (oldValue > 1) {
                            var newValue = parseInt(oldValue, 10) - 1;
                        } else {
                            newValue = 1;
                        }
                    }

                    // check if value is a number
                    newValue = isNaN(newValue) ? 1 : newValue;
                    totalItem.value = newValue;

                });
            }

        }

        countItems();
    </script>
</body>

</html>

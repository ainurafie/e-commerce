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
        {{-- @dd($data) --}}
        @foreach ($data as $d)
        <div class="bg-white rounded-xl py-[17px] px-6 ">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <table class="table-auto w-full">
                        <tbody>
                            <tr class="border">
                                <td class="flex items-center mt-1 px-4 py-2 text-start gap-5">
                                    <div class="flex items-center gap-5">
                                        @php 
                                        $produk = App\Models\Produk::where('id', $d->produk_id)->first();
                                        @endphp
                                        <img src="{{ Storage::url($produk->gambar) }}" alt=""
                                            class="w-[61px] h-[61px] ">
                                        <div class="">
                                            <h1 class="text-sm font-monsterat font-medium mb-2">{{ $produk->nama }}</h1>
                                            <h1 class="text-xs font-monsterat font-medium text-[#C2C0C0]">{{ $produk->deskripsi }}
                                            </h1>
                                        </div>
                                    </div>
                                </td>
                                <td class=" px-4 py-2">
                                    <h1 class="text-xs font-monsterat font-medium text-[#CB3A26]">Rp. {{ $d->harga }}</h1>
                                </td>
                                <td class=" px-4 py-2">
                                    <p>{{ $d->jumlah }}</p>
                                </td>
                                <td class=" px-4 py-2">
                                    <p>{{ $d->ukuran }}</p>
                                </td>
                                <td class=" px-4 py-2">
                                    <p>{{ $d->varian }}</p>
                                </td>
                                <td class=" px-4 py-2">
                                    <p>{{ $d->metode_pembayaran }}</p>
                                </td>
                                <td class="px-4 py-2">
                                    <div class="flex items-center">
                                        <button data-modal-toggle="delete"
                                        class="text-[#E7E7E7] me-3 font-montserrat font-semibold text-sm bg-[#CB3A26] rounded-lg py-2 px-3">
                                            Hapus
                                        </button>
                                        <form method="POST" action="{{ route('beli-produk.edit', $d->id) }}">
                                            @csrf
                                            @method('GET')
                                            <button type="submit"
                                        class="text-[#E7E7E7] font-montserrat font-semibold text-sm bg-[#0275d8] rounded-lg py-2 px-3">
                                            Checkout
                                        </button>
                                        </form>
                                    </div>
                                </td>
                                <livewire:modal.delete :index="$d->id" />
                            </tr>

                        </tbody>
                    </table>
                </div>
                {{-- <div class="col-span-4 flex justify-center items-center">
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
                </div> --}}
            </div>
        </div>
        @endforeach
    </div>
    <livewire:footer.index />
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

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
    <div class="md:px-[500px] pb-20 mt-48">

        <h1 class="text-xl font-montserrat font-semibold mb-10 text-start">Detail Belanja</h1>
        <div class="border-b border-[#CDCDCD] mb-9">
            <div class="flex justify-between items-center mb-[14px]">
                <h1 class="text-sm text-[#858585] font-montserrat font-medium">Nama Produk</h1>
                <h1 class="text-sm text-black font-montserrat font-medium">{{ $produk->nama }}</h1>
            </div>
            <div class="flex justify-between items-center mb-[14px]">
                <h1 class="text-sm text-[#858585] font-montserrat font-medium">Total Produk</h1>
                <h1 class="text-sm text-black font-montserrat font-medium">{{ $data->jumlah }}</h1>
            </div>
            <div class="flex justify-between items-center mb-7">
                <h1 class="text-sm text-[#858585] font-montserrat font-medium">Total Harga</h1>
                <h1 class="text-sm text-black font-montserrat font-medium">{{ $data->harga }}</h1>
            </div>
        </div>
        <div class="">
            <div class="">
                <div class="accordion w-full">
                    <button class="accordion-button w-full">
                        <div class="w-full flex gap-5 items-center px-8 py-4 bg-[#D4EDDA] rounded-lg mb-[10px]">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2 20H22V22H2V20ZM4 12H6V19H4V12ZM9 12H11V19H9V12ZM13 12H15V19H13V12ZM18 12H20V19H18V12ZM2 7L12 2L22 7V11H2V7ZM4 8.236V9H20V8.236L12 4.236L4 8.236ZM12 8C11.7348 8 11.4804 7.89464 11.2929 7.70711C11.1054 7.51957 11 7.26522 11 7C11 6.73478 11.1054 6.48043 11.2929 6.29289C11.4804 6.10536 11.7348 6 12 6C12.2652 6 12.5196 6.10536 12.7071 6.29289C12.8946 6.48043 13 6.73478 13 7C13 7.26522 12.8946 7.51957 12.7071 7.70711C12.5196 7.89464 12.2652 8 12 8Z"
                                    fill="#4B1919" />
                            </svg>
                            <h1 class="text-sm font-montserrat">Bayar sekarang melalui Bank</h1>
                        </div>
                    </button>
                    <div class="accordion-content hidden">
                            <form method="POST" action="{{ route('beli-produk.store') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="produk_id" value="{{ $produk->id }}" hidden>
                            {{-- <input type="text" name="penjual_id" value="{{ $produk->id }}" hidden> --}}
                            <input type="text" name="jumlah" value="{{ $data->jumlah }}" hidden>
                            <input type="text" name="harga" value="{{ $data->harga }}" hidden>
                            <input type="text" name="ukuran" value="{{ $data->ukuran }}" hidden>
                            <input type="text" name="varian" value="{{ $data->varian }}" hidden>
                            <input type="text" name="metode_pembayaran" value="BCA" hidden>
                            <input type="text" name="keranjang" value="{{ $data->id }}" hidden>
                            <button type="button" data-modal-toggle="payment-modal" href="" class="w-full">
                                <div class="flex gap-5 items-center px-8 py-4 bg-[#FAFAFA] shadow hover:bg-[#D4EDDA] rounded-lg mb-[10px]">
                                    <img src="../assets/images/bca.svg" alt=""> 
                                    <h1 class="text-sm font-montserrat">Bayar sekarang melalui BCA</h1>
                                </div>
                            </button>
                            <livewire:modal.payment/>
                        </form>
                    </div>
                </div>

                <form method="POST" action="{{ route('beli-produk.store') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="produk_id" value="{{ $produk->id }}" hidden>
                    <input type="text" name="jumlah" value="{{ $data->jumlah }}" hidden>
                    <input type="text" name="harga" value="{{ $data->harga }}" hidden>
                    <input type="text" name="ukuran" value="{{ $data->ukuran }}" hidden>
                    <input type="text" name="varian" value="{{ $data->varian }}" hidden>
                    <input type="text" name="metode_pembayaran" value="COD" hidden>
                    <input type="text" name="keranjang" value="{{ $data->id }}" hidden>
                    <button type="submit" class="accordion-button w-full">
                        <div class="w-full flex gap-5 items-center px-8 py-4 bg-[#D4EDDA] rounded-lg mb-[10px]">
                            <img src="../assets/images/cod.svg" alt=""> 
                            <h1 class="text-sm font-montserrat">Cash on Delivery (COD)</h1>
                        </div>
                    </button>
                    <livewire:modal.payment />
                </form>
                
                <a href="" class="">
                    <div class="flex gap-5 items-center px-8 py-4 bg-[#D4EDDA] rounded-lg mb-[10px]">
                        <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_148_1190)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.15332 17.3673V4.5558C0.153469 4.19805 0.295612 3.85498 0.548527 3.60196C0.801442 3.34894 1.14445 3.20666 1.5022 3.20636H14.3131L0.15332 17.3673Z"
                                    fill="#1EA361" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.153395 17.6356V17.3667L14.3138 3.20746H14.5826C14.9404 3.20761 15.2835 3.34975 15.5365 3.60267C15.7895 3.85558 15.9318 4.19858 15.9321 4.55633V4.82633L1.77171 18.9856H1.50171C1.14396 18.9853 0.800953 18.843 0.548039 18.59C0.295124 18.337 0.152981 17.9939 0.152832 17.6361"
                                    fill="#FEDB43" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M1.77148 18.9856L8.04336 12.7148L14.3135 18.9856H1.77148Z" fill="#5384C4" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14.3138 18.9856L8.04248 12.7137L9.66023 11.0954L15.9321 17.3673V17.6361C15.932 17.994 15.7897 18.3371 15.5367 18.5902C15.2837 18.8432 14.9405 18.9854 14.5827 18.9856H14.3138Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15.932 17.3673L9.66016 11.0954L15.932 4.82355V17.3673Z" fill="#C2C2C1" />
                                <path
                                    d="M2.96783 4.95122C3.77051 4.5839 4.77514 4.73353 5.42708 5.33484L4.80383 5.95359C4.15133 5.30672 2.92676 5.61328 2.62133 6.4694C2.22758 7.31203 2.8857 8.41959 3.82508 8.43141C4.43989 8.50284 5.05358 8.09109 5.18351 7.47853C4.75376 7.47909 4.32514 7.47515 3.89651 7.4819L3.88864 6.68709L6.04864 6.71634C6.10264 7.24115 6.06551 7.79803 5.78314 8.25759C5.34045 9.08109 4.29589 9.44109 3.41164 9.23297C2.3187 9.00628 1.50083 7.88522 1.64989 6.77484C1.72583 5.99184 2.25008 5.27578 2.96783 4.95122Z"
                                    fill="#EFEFEF" />
                                <path
                                    d="M13.1762 0.985596H13.6892C14.9678 1.05872 16.2177 1.6831 16.9922 2.71078C17.4996 3.35991 17.7831 4.16541 17.8472 4.98328V5.28703C17.8174 6.87328 16.8027 8.17491 15.9235 9.40847C14.9368 10.8023 14.0256 12.3222 13.7725 14.0395C13.705 14.3303 13.786 14.7382 13.4383 14.8692C13.3568 14.8057 13.2612 14.7528 13.2038 14.6639C13.1008 13.7037 12.8663 12.7548 12.4512 11.8778C11.986 10.8558 11.3391 9.9316 10.681 9.02878C10.2805 8.4871 9.90303 7.92628 9.59084 7.32778C9.10034 6.43172 8.91753 5.3731 9.11834 4.36791C9.28259 3.58041 9.69772 2.83791 10.2732 2.26978C11.0477 1.5121 12.0957 1.0531 13.1762 0.985596ZM13.0767 3.77897C12.4703 3.91397 11.9612 4.4506 11.91 5.07272C11.8852 5.36472 11.9483 5.65748 12.0913 5.91331C12.2342 6.16914 12.4505 6.37633 12.7122 6.50822C12.9985 6.6542 13.3221 6.71075 13.6409 6.67053C13.9598 6.63031 14.2592 6.49517 14.5003 6.28266C14.7195 6.08318 14.8726 5.82162 14.9392 5.53288C15.0059 5.24413 14.9829 4.94193 14.8733 4.6666C14.5993 3.98147 13.7877 3.5911 13.0767 3.7666"
                                    fill="#DC4B3E" />
                                <path
                                    d="M13.0767 3.77897C13.7871 3.59728 14.5999 3.98709 14.8733 4.67897C15.0983 5.22628 14.943 5.90297 14.5003 6.29503C14.2592 6.50754 13.9598 6.64268 13.6409 6.6829C13.3221 6.72312 12.9985 6.66657 12.7122 6.52059C12.189 6.26184 11.8459 5.66953 11.91 5.08509C11.9663 4.45734 12.4703 3.92072 13.0767 3.79134"
                                    fill="#802C27" />
                            </g>
                            <defs>
                                <clipPath id="clip0_148_1190">
                                    <rect width="18" height="18" fill="white"
                                        transform="translate(0 0.985596)" />
                                </clipPath>
                            </defs>
                        </svg>

                        <h1 class="text-sm font-montserrat">Lihat alamat penjual di maps</h1>
                    </div>
                </a>
                <a href="" class="">
                    <div class="flex justify-center items-center px-8 py-4 bg-white border border-[#004E11] rounded-lg mb-[10px]">
                       <h1 class="text-sm font-montserrat font-semibold text-[#004E11] text-center">Kunjungi Toko</h1>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <livewire:footer.index />
    <livewire:modal.tambah-keranjang />
    {{-- <livewire:modal.payment /> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script>
        const accordionButton = document.querySelector('.accordion-button');
        const accordionContent = document.querySelector('.accordion-content');

        accordionButton.addEventListener('click', function() {
            accordionContent.classList.toggle('hidden');
        });
    </script>
</body>

</html>

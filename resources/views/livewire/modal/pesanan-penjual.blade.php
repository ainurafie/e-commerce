<!-- Main modal -->
<div id="pesanan-penjual" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative rounded-lg px-5 py-8 shadow max-h-[400px] overflow-y-auto bg-white">
            <div class="">
                <div class="">
                    <div class="flex gap-24 mb-8">
                        <div class="">
                            <h1 class="text-xs text-black font-semibold font-montserrat mb-2">Pemesan</h1>
                            <h1 class="text-xs text-[#919191] font-montserrat mb-2">Jennie Rubby Jane</h1>
                        </div>
                        <div class="">
                            <h1 class="text-xs text-black font-semibold font-montserrat mb-2">Tanggal Pembelian</h1>
                            <h1 class="text-xs text-[#919191] font-montserrat">13 April 2023</h1>
                        </div>
                    </div>
                    <div class="flex gap-24 mb-8">
                        <div class="">
                            <h1 class="text-xs text-black font-semibold font-montserrat mb-2">Nama Produk</h1>
                            <h1 class="text-xs text-[#919191] font-montserrat mb-2">Jennie Rubby Jane</h1>
                        </div>
                        <div class="">
                            <h1 class="text-xs text-black font-semibold font-montserrat mb-2">Transaksi</h1>
                            <h1 class="text-xs text-[#919191] font-montserrat ">COD</h1>
                        </div>
                    </div>
                    <div class="flex gap-24 mb-8">
                        <div class="">
                            <h1 class="text-xs text-black font-semibold font-montserrat mb-2">Jumlah Pembelian</h1>
                            <h1 class="text-xs text-[#919191] font-montserrat mb-2">2 produk</h1>
                        </div>
                        <div>

                        </div>
                    </div>
                    <div class="mb-7">
                        <h1 class="text-xs text-black font-semibold font-montserrat mb-2">Alamat Pengantaran</h1>
                        <h1 class="text-xs text-[#919191] font-montserrat mb-2">Komplek PJKA 386-388, JL. Jend.
                            Sudirman, Purwokerto Lor, Purwokerto, Sokanegara, Kec. Purwokerto Tim., Kabupaten Banyumas,
                            Jawa Tengah 53115</h1>
                    </div>
                    <div class="flex gap-3 items-center mb-7">
                        <input type="checkbox" id="pengantaranSelesai" name="selected[]"
                            class="form-checkbox h-5 w-5 text-[#BA2B60] rounded">
                        <label for="pengantaranSelesai"
                            class="cursor-pointer text-xs font-medium text-[#919191]">Pengantaran Selesai</label>
                    </div>

                    <div class="relative mb-7">
                        <h1 class="text-xs text-black font-semibold font-montserrat mb-2">Upload Bukti Pesanan Diantar</h1>
                        <label type="file" name="image-product" id="image-product" required>
                            <span class="">
                                <img class="img-preview w-24 h-24 border-2 rounded-2xl hover:bg-slate-200 cursor-pointer"
                                    alt="">
                            </span>
                            <input class="hidden" type="file" name="images" id="image"
                                onchange="previewImage()">
                        </label>
                    </div>
                </div>
                <div class="flex justify-center gap-[14px]">
                    <button data-modal-toggle="pesanan-penjual"
                        class="text-[#E7E7E7] font-montserrat font-semibold text-sm bg-[#2AA345] rounded-lg py-2.5 px-6">Update Pesanan</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main modal -->
<div id="lapor" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative w-[389px] h-full md:h-auto">
        <div class="relative rounded-lg px-[30px] py-8 shadow bg-white">
        <form method="POST" action="/laporkan" enctype="multipart/form-data">
            @csrf
            <div class="">
                <input type="text" name="produk_id" id="" value="{{ $data }}" hidden>
                <input type="text" name="penjual_id" id="" value="{{ $penjual }}" hidden>
                <div class="">
                    <select name="category"
                        class="bg-white border border-[#1E1E1E] text-[#1E1E1E] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="" selected>-Pilih Jenis Laporan-</option>
                        <option value="Penipuan">Penipuan</option>
                        <option value="tidak sesuai">Produk Tidak Sesuai</option>
                    </select>
                </div>
                </h1>
                <textarea rows="2" name="kronologi"
                    class="bg-white border border-[#CACACA] text-[#A8A8A8] text-xs rounded-lg block w-full p-2.5 mt-2"
                    placeholder="Tuliskan Kronologi">
                </textarea>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none mt-2" id="file_input" type="file" name="image">
                <div class="flex justify-center mt-5">
                    <button type="submit"
                        class="text-[#E7E7E7] font-montserrat font-semibold text-sm bg-[#004E11] rounded-lg py-2 px-3">Kirim</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>

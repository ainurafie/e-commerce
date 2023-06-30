<!-- Main modal -->
<div id="laporan" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        @php
            $user = App\Models\User::where('id', $data->user_id)->first();
            $penjual = App\Models\User::where('id', $data->penjual_id)->first();
            $produk = App\Models\Produk::where('id', $data->produk_id)->first();
        @endphp
        <div class="relative rounded-lg px-5 py-8 shadow max-h-[400px] overflow-y-auto bg-white">
            <div class="">
                <div class="">
                    <div class="flex gap-24 mb-8">
                        <div class="">
                            <h1 class="text-xs text-black font-semibold font-montserrat mb-2">Pelapor</h1>
                            <h1 class="text-xs text-[#919191] font-montserrat mb-2">{{ $user->name }}</h1>
                        </div>
                        <div class="">
                            <h1 class="text-xs text-black font-semibold font-montserrat mb-2">Tanggal Laporan</h1>
                            <h1 class="text-xs text-[#919191] font-montserrat">{{ $data->created_at }}</h1>
                        </div>
                    </div>
                    <div class="flex gap-24 mb-8">
                        <div class="">
                            <h1 class="text-xs text-black font-semibold font-montserrat mb-2">Nama Produk</h1>
                            <h1 class="text-xs text-[#919191] font-montserrat mb-2">{{ $produk->nama }}</h1>
                        </div>
                        <div class="">
                            <h1 class="text-xs text-black font-semibold font-montserrat mb-2">Kategori Laporan</h1>
                            <h1 class="text-xs text-[#919191] font-montserrat ">{{ $data->jenis }}</h1>
                        </div>
                    </div>
                    <div class="mb-7">
                        <h1 class="text-xs text-black font-semibold font-montserrat mb-2">Ulasan Laporan</h1>
                        <h1 class="text-xs text-[#919191] font-montserrat mb-2">{{ $data->kronologi }}</h1>
                    </div>
                    <div class="relative mb-7">
                        <h1 class="text-xs text-black font-semibold font-montserrat mb-2">Upload Bukti Laporan</h1>
                        <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="" type="button">
                            <img src="{{ Storage::url($data->image) }}" alt="" class="" width="100px" height="100px">
                        </button>
                    </div>
                </div>
                <div class="flex justify-center gap-[14px]">
                <form method="POST" action="/super-admin/deleteUser/{{ $data->penjual_id }}">
                    @method('DELETE')
                    @csrf
                    <button data-modal-toggle="laporan" type="submit"
                        class="text-[#E7E7E7] flex gap-2 items-center font-montserrat font-semibold text-sm bg-[#CB3A26] rounded-lg py-2.5 px-6">
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.95837 14.875C4.56879 14.875 4.23517 14.7362 3.9575 14.4585C3.67983 14.1808 3.54124 13.8474 3.54171 13.4583V4.25H2.83337V2.83333H6.37504V2.125H10.625V2.83333H14.1667V4.25H13.4584V13.4583C13.4584 13.8479 13.3195 14.1815 13.0419 14.4592C12.7642 14.7369 12.4308 14.8755 12.0417 14.875H4.95837ZM12.0417 4.25H4.95837V13.4583H12.0417V4.25ZM6.37504 12.0417H7.79171V5.66667H6.37504V12.0417ZM9.20837 12.0417H10.625V5.66667H9.20837V12.0417Z" fill="#FAFAFA"/>
                            </svg>
                            Hapus Toko
                    </button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal toggle -->

  
  <!-- Main modal -->
  <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <img src="{{ Storage::url($data->image) }}" alt="">
          </div>
      </div>
  </div>
  

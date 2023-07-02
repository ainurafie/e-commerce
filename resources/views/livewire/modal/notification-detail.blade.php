{{-- popover detail notifikasi  --}}
@php
    $penjual = App\Models\User::where('id', $data->penjual_id)->first();
@endphp
<div id="detail-notifikasi"
class="z-10 hidden text-monttserat bg-white divide-y divide-black-100 rounded-lg shadow w-100">
<div class="p-3">
    <strong class="mx-4">{{ $pesan->pesan }}</strong>
    <hr class="mt-4">
    <div class="grid grid-cols-2 gap-4 p-3">
            <div class="...">
                <p class="font-medium">Nama Toko</p>
                <p>{{ $penjual->name }}</p>
            </div>
            <div class="...">
                <p class="font-medium">Tanggal Pembelian</p>
                <p>{{ $data->created_at }}</p>
            </div>
            <div class="...">
                <p class="font-medium">Nama Produk</p>
                <p>{{ $produk->nama }}</p>
            </div>
            <div class="...">
                <p class="font-medium">Transaksi</p>
                <p>{{ $data->metode_pembayaran }}</p>
            </div>
            <div class="...">
                <p class="font-medium">Jumlah Pembelian</p>
                <p>{{ $data->jumlah }} Produk</p>
            </div>
            <div class="...">
                <p class="font-medium">No Telepon</p>
                <p>{{ $data->no }}</p>
            </div>
            <div class="col-span-2 ...">
                <p class="font-medium">Alamat</p>
                <p>{{ $data->alamat }}</p>
            </div>
            @if ($data->status_pemesanan == "Selesai")
            <div class="col-span-2 ...">
                <form method="POST" action="{{ route('ulasan.store') }}">
                    @csrf
                    <h1 class="font-medium mb-2.5">
                        Ulasan<label class="text-[#CB3A26]">*</label>
                    </h1>
                    <input type="text" name="produk_id" value="{{ $produk->id }}" hidden>
                    <input type="text" name="penjual_id" value="{{ $produk->user_id }}" hidden>
                    <textarea rows="2" name="pesan" value=""
                        class="bg-white border border-[#D4EDDA] text-black font-light text-sm rounded-lg block w-full p-2.5"
                        placeholder="Tuliskan Ulasan Ada tentang produk ini">
                    </textarea>
                    <div class="flex gap-2 mb-[50px]">
            <h1 class="text-[10px] text-[#919191] font-montserrat font-semibold">Apakah produk ini ada masalah?</h1>
            <button data-modal-toggle="lapor" class="flex items-center gap-1">
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
                    <button type="submit" class="text-[#E7E7E7] font-montserrat font-semibold text-sm bg-[#2AA345] rounded-lg py-2.5 px-6 mt-4">Kirim Ulasan</button>
                </form>
            </div>
            
            @endif
          </div>
    </div>
    <div data-popper-arrow></div>
</div>
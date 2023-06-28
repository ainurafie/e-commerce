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
                    <h1 class="text-xs font-montserrat text-[#858585] mb-2.5">
                        Ulasan<label class="text-[#CB3A26]">*</label>
                    </h1>
                    <input type="text" name="produk_id" value="{{ $produk->id }}" hidden>
                    <textarea rows="2" name="pesan" value=""
                        class="bg-white border border-[#D4EDDA] text-black font-light text-sm rounded-lg block w-full p-2.5"
                        placeholder="Tuliskan Ulasan Ada tentang produk ini">
                    </textarea>
                    <button type="submit" class="text-[#E7E7E7] font-montserrat font-semibold text-sm bg-[#2AA345] rounded-lg py-2.5 px-6 mt-4">Kirim Ulasan</button>
                </form>
            </div>
            @endif
          </div>
    </div>
    <div data-popper-arrow></div>
</div>
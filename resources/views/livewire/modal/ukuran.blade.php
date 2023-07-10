<!-- Main modal -->
<div id="size" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div  class="relative w-[389px] h-full md:h-auto">
        <div class="relative rounded-lg flex px-[30px] py-8 shadow bg-white">
            {{-- <form method="POST" action="{{ route('') }}"> --}}
            <div class="">
                <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden> 
                <input type="text" name="produk_id" value="{{ $produk->id }}" hidden> 
                <input type="text" name="penjual_id" value="{{ $produk->user_id }}" hidden> 
                <input type="text" name="harga" value="{{ $produk->harga }}" hidden> 
                <h1 class="text-sm text-black font-montserrat font-medium mb-[14px]">Pilih Ukuran
                </h1>
                <div class="flex gap-[14px] mb-5 flex-wrap">
                    @if (json_decode($ukuran))
                    @foreach (json_decode($ukuran) as $uk)
                    <input type="radio" class="radio-input" name="size" id="size-{{ $uk }}"
                        value="{{ $uk }}">
                    <label for="size-{{ $uk }}" class="radio-label">{{ $uk }}</label>
                    @endforeach
                    @endif
                </div>
                <h1 class="text-sm text-black font-montserrat font-medium mb-[14px]">Varian Produk
                </h1>
                <div class="flex gap-[14px] mb-10 flex-wrap">
                    @if (json_decode($varian))
                    @foreach (json_decode($varian) as $var)
                    <input type="radio" class="radio-input2" name="varian" id="varian-{{ $var->group_a }}"
                        value="{{ $var->group_a }}">
                    <label for="varian-{{ $var->group_a }}" class="radio-label2">{{ $var->group_a }}</label>
                    @endforeach
                    @endif
                </div>
                <div class="flex justify-between">
                    <button type="submit" data-modal-toggle={{ Auth::user()->alamat == NULL ? '' : 'add-cart' }}
                        class="bg-white font-montserrat font-semibold text-sm text-[#004E11] shadow rounded-lg py-2 px-3">Masukan
                        Keranjang</button>
                    {{-- <button
                        class="text-[#E7E7E7] font-montserrat font-semibold text-sm bg-[#004E11] rounded-lg py-2 px-3">Beli
                        Sekarang</button> --}}
                </div>
            </div>
            {{-- </form> --}}
        </div>
    </div>
</div>

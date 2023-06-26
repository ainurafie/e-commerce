<!-- Main modal -->
<div id="sizeBeli" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div  class="relative w-[389px] h-full md:h-auto">
        <div class="relative rounded-lg flex px-[30px] py-8 shadow bg-white">
            <form method="POST" action="{{ route('beli-produk.show', $produk->id) }}">
                @method("GET")
                @csrf
            <div class="">
                {{-- <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden> 
                <input type="text" name="produk_id" value="{{ $produk->id }}" hidden> 
                <input type="text" name="penjual_id" value="{{ $produk->user_id }}" hidden> 
                <input type="text" name="harga" value="{{ $produk->harga }}" hidden>  --}}
                <input class="total-item4 collapse text-center w-10 border-none" type="text"
                value="1" name="jumlah" />
                <h1 class="text-sm text-black font-montserrat font-medium mb-[14px]">Pilih Ukuran
                </h1>
                <div class="flex gap-[14px] mb-5 flex-wrap">
                    @if (json_decode($ukuran))
                    @foreach (json_decode($ukuran) as $uk)
                    <input type="radio" class="radio-input3" name="size" id="size2-{{ $uk }}"
                        value="{{ $uk }}">
                    <label for="size2-{{ $uk }}" class="radio-label3">{{ $uk }}</label>
                    @endforeach
                    @endif
                </div>
                <h1 class="text-sm text-black font-montserrat font-medium mb-[14px]">Varian Produk
                </h1>
                <div class="flex gap-[14px] mb-10 flex-wrap">
                    @if (json_decode($varian))
                    @foreach (json_decode($varian) as $var)
                    <input type="radio" class="radio-input4" name="varian" id="varian2-{{ $var->group_a }}"
                        value="{{ $var->group_a }}">
                    <label for="varian2-{{ $var->group_a }}" class="radio-label4">{{ $var->group_a }}</label>
                    @endforeach
                    @endif
                </div>
                <div class="flex justify-between">
                    <button type="submit"
                        class="bg-white font-montserrat font-semibold text-sm text-[#004E11] shadow rounded-lg py-2 px-3">Pesan
                        Sekarang</button>
                    {{-- <button
                        class="text-[#E7E7E7] font-montserrat font-semibold text-sm bg-[#004E11] rounded-lg py-2 px-3">Beli
                        Sekarang</button> --}}
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

<div>

    <nav class="fixed w-full z-50 top-0 flex justify-between items-center h-14 md:h-28 bg-white drop-shadow-md">
        <!-- Logo -->
        <div>
            <a href="/" class="text-white text-2xl font-semibold italic">
            <img class="float-right ml-20" src="/assets/images/logo.svg" alt="user photo">
            </a>
        </div>

        <!-- This div and its children show up when screen's width >= 769px (md breakpoint) -->
        <div id="main-nav"
            class="hidden absolute top-14 right-0 px-5 md:px-24 py-10 bg-gray-700 h-screen flex flex-col 
            md:flex md:space-y-0 md:relative md:top-0 md:right-0 md:p-0 md:flex-row md:h-full md:flex-grow md:justify-end md:items-center md:ml-10 md:bg-inherit">
            <!-- Menu Links -->


            <!-- Search box -->
            <div class="relative w-[608px] ">
                <input type="search" id="search-dropdown"
                    class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-lg border-l-2 border border-[#CFCFCF]"
                    placeholder="Cari" required>
                <button type="submit"
                    class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-[#2AA345] rounded-r-lg border border-[#2AA345]">
                    <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </div>
            <a href="/keranjang">
            <button class="mx-4">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9.33331 29.3333C8.59998 29.3333 7.97242 29.0724 7.45065 28.5507C6.92798 28.028 6.66665 27.4 6.66665 26.6667C6.66665 25.9333 6.92798 25.3053 7.45065 24.7827C7.97242 24.2609 8.59998 24 9.33331 24C10.0666 24 10.6942 24.2609 11.216 24.7827C11.7386 25.3053 12 25.9333 12 26.6667C12 27.4 11.7386 28.028 11.216 28.5507C10.6942 29.0724 10.0666 29.3333 9.33331 29.3333ZM22.6666 29.3333C21.9333 29.3333 21.3058 29.0724 20.784 28.5507C20.2613 28.028 20 27.4 20 26.6667C20 25.9333 20.2613 25.3053 20.784 24.7827C21.3058 24.2609 21.9333 24 22.6666 24C23.4 24 24.028 24.2609 24.5506 24.7827C25.0724 25.3053 25.3333 25.9333 25.3333 26.6667C25.3333 27.4 25.0724 28.028 24.5506 28.5507C24.028 29.0724 23.4 29.3333 22.6666 29.3333ZM9.33331 22.6667C8.33331 22.6667 7.57776 22.2275 7.06665 21.3493C6.55554 20.472 6.53331 19.6 6.99998 18.7333L8.79998 15.4667L3.99998 5.33332H2.63331C2.25554 5.33332 1.94442 5.20532 1.69998 4.94932C1.45554 4.69421 1.33331 4.37777 1.33331 3.99999C1.33331 3.62221 1.46131 3.30532 1.71731 3.04932C1.97242 2.79421 2.28887 2.66666 2.66665 2.66666H4.83331C5.07776 2.66666 5.31109 2.73332 5.53331 2.86666C5.75554 2.99999 5.9222 3.18888 6.03331 3.43332L6.93331 5.33332H26.6C27.2 5.33332 27.6111 5.55555 27.8333 5.99999C28.0555 6.44443 28.0444 6.9111 27.8 7.39999L23.0666 15.9333C22.8222 16.3778 22.5 16.7222 22.1 16.9667C21.7 17.2111 21.2444 17.3333 20.7333 17.3333H10.8L9.33331 20H24.0333C24.4111 20 24.7222 20.1275 24.9666 20.3827C25.2111 20.6387 25.3333 20.9555 25.3333 21.3333C25.3333 21.7111 25.2053 22.0275 24.9493 22.2827C24.6942 22.5387 24.3778 22.6667 24 22.6667H9.33331Z"
                        fill="#949D96" />
                </svg>
            </button>
            </a>
                <button class="mx-4" data-dropdown-toggle="list-notifikasi" type="button">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.0002 29.3335C17.4668 29.3335 18.6668 28.1335 18.6668 26.6668H13.3335C13.3335 27.3741 13.6144 28.0524 14.1145 28.5524C14.6146 29.0525 15.2929 29.3335 16.0002 29.3335ZM24.0002 21.3335V14.6668C24.0002 10.5735 21.8135 7.14683 18.0002 6.24016V5.3335C18.0002 4.22683 17.1068 3.3335 16.0002 3.3335C14.8935 3.3335 14.0002 4.22683 14.0002 5.3335V6.24016C10.1735 7.14683 8.00016 10.5602 8.00016 14.6668V21.3335L5.3335 24.0002V25.3335H26.6668V24.0002L24.0002 21.3335Z"
                            fill="#8D8B8B" />
                    </svg>
                </button>

                {{-- popover list notifikasi --}}
                <div id="list-notifikasi" class="pb-24 z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-80 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="multiLevelDropdownButton">
                    @foreach ($notifikasi as $notif)
                    @php
                        $checkout = App\Models\Checkout::where('id', $notif->checkout_id)->first();
                        $produk = App\Models\Produk::where('id', $checkout->produk_id)->first();
                        $penjual = App\Models\User::where('id', $checkout->penjual_id)->first();
                    @endphp
                    <li>
                        <button id="notif{{ $notif->id }}" data-dropdown-toggle="detail-notifikasi{{ $notif->id }}" data-dropdown-placement="left-start" type="button" class="font-medium text-left w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                            {{ $notif->pesan }} <br>
                            <div class="flex justify-between">
                            <small class="text-gray">{{ $penjual->toko }} : {{ $produk->nama }} ({{ $checkout->jumlah }})</small>
                            <small>{{ $checkout->created_at }}</small>
                            </div>
                        </button>
                        <hr class="mt-1">


                            {{-- popover detail notifikasi  --}}
                            @php
                                $pesan = App\Models\Notifikasi::where('id', $notif->id)->first();
                                $data = App\Models\Checkout::where('id', $pesan->checkout_id)->first();
                                $produk = App\Models\Produk::where('id', $data->produk_id)->first();
                                $penjual = App\Models\User::where('id', $data->penjual_id)->first();
                            @endphp
                            <livewire:modal.laporkan :index="$data->id" :penjual="$penjual->id"/>
                            <div id="detail-notifikasi{{ $notif->id }}"
                                class="z-10 hidden text-monttserat bg-white divide-y divide-black-100 rounded-lg shadow w-100">
                                <div class="p-3">
                                <strong class="mx-4">{{ $pesan->pesan }}</strong>
                                <hr class="mt-4">
                                <div class="grid grid-cols-2 gap-4 p-3">
                                        <div class="...">
                                            <p class="font-medium">Nama Toko</p>
                                            <p>{{ $penjual->toko }}</p>
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
                                                <button type="submit" class="text-[#E7E7E7] font-montserrat font-semibold text-sm bg-[#2AA345] rounded-lg py-2.5 px-6 mt-4">Kirim Ulasan</button>
                                            </form>
                                        </div>
                                        <div class="flex flex-wrap">
                                            <h1 class="text-[10px] text-[#919191] font-montserrat font-semibold">Apakah produk ini ada masalah?</h1>
                                            <button data-modal-toggle="lapor" class="flex items-left gap-1">
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
                                        
                                        @endif
                                    </div>
                                </div>
                                <div data-popper-arrow></div>
                            </div>


                    </li>
                    @endforeach
                    </ul>
                </div>
            <!-- Dropdown-->

            <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
                class="flex items-center text-monttserat font-regular text-gray-500 rounded-lg hover:text-grey-600  "
                type="button">
                <span class="sr-only">Open user menu</span>
                @if (Auth::user()->image == '')
                <img class="w-10 h-10 mr-2 rounded-full" src="..\assets\images\defaultpp.jpeg" alt="user photo">
                @else
                <img class="w-10 h-10 mr-2 rounded-full" src="{{ Storage::url(Auth::user()->image) }}" alt="user photo">
                @endif
                {{ Auth::guest() ? 'Unknow' : Auth::user()->username }}
                <svg class="w-4 h-4 mx-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 14 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdownAvatarName"
                class="z-10 hidden text-monttserat bg-white divide-y divide-black-100 rounded-lg shadow w-44">
                <div class="px-4 py-3 text-sm font-monttserat text-gray-900">
                    <div class="font-bold ">{{ Auth::guest() ? '' : Auth::user()->name }}</div>
                    <div class="truncate">{{ Auth::guest() ? '' : Auth::user()->email }}</div>
                </div>
                <ul class="py-2 text-sm text-gray-700" montserrat="dropdownInformdropdownAvatarNameButtonationButton">
                    <li>
                        <a href="profile-user" class="block px-4 py-2 hover:bg-gray-100">Profil</a>
                    </li>
                    <li>
                        <a href="/profile-setting" class="block px-4 py-2 hover:bg-gray-100">Pengaturan</a>
                    </li>
                    <li>
                        <a href="/bantuan" class="block px-4 py-2 hover:bg-gray-100">Bantuan</a>
                    </li>
                    <li>
                </ul>
                <div class="py-2">
                    <a  data-modal-toggle="logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Keluar</a>
                </div>
            </div>
        </div>
</div>

<!-- The hamburger icon to open/close the #main-nav when screen width < 768px (mobile devices) -->
<a class="md:hidden text-white text-2xl" href="javascript:void(0)" onclick="toggleMenu()"><i id="toggle-menu-icon"
        class="fa-bars fa-solid"></i></a>

</nav>
</div>
<livewire:modal.logout-modal />

{{-- @dd($notifikasi) --}}
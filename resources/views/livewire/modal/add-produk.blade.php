<!-- Main modal -->
<div id="add-produk" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative rounded-lg px-5 py-8 shadow max-h-[400px] overflow-y-auto bg-white">
        <form method="POST" action="{{ route('produk.store') }} " enctype="multipart/form-data">
        @csrf
            <h1 class="text-base text-black font-montserrat font-semibold mb-8">Tambah Produk</h1>
            <div class="relative mb-5  mt-8">
                <h1 class="text-sm font-medium font-montserrat text-black mb-2.5">
                    Nama Produk <label class="text-[#CB3A26]">*</label>
                </h1>
                <input type="text" id="nama" name="name"
                    class="bg-white border border-[#D4EDDA] text-black font-light text-sm rounded-lg block w-full p-2.5"
                    placeholder="Nama produk" required>
            </div>
            <div class="relative mb-5">
                <h1 class="text-sm font-medium font-montserrat text-black mb-2.5">
                    Stok Barang <label class="text-[#CB3A26]">*</label>
                </h1>
                <input type="number" id="stok" name="stok"
                    class="bg-white border border-[#D4EDDA] text-black font-light text-sm rounded-lg block w-full p-2.5"
                    placeholder="Isi stok barang" required>
            </div>
            <div class="relative mb-5">
                <h1 class="text-sm font-medium font-montserrat text-black mb-2.5">
                    Harga <label class="text-[#CB3A26]">*</label>
                </h1>
                <input type="number" id="stok" name="harga"
                    class="bg-white border border-[#D4EDDA] text-black font-light text-sm rounded-lg block w-full p-2.5"
                    placeholder="Isi Harga Barang" required>
            </div>
            <div class="relative mb-5">
                <h1 class="text-sm font-medium font-montserrat text-black mb-2.5">
                    Jenis <label class="text-[#CB3A26]">*</label>
                </h1>
                <div class="">
                    <select name="jenis"
                        class="bg-white border border-[#D4EDDA] text-black font-light text-sm rounded-lg block w-full p-2.5" required>

                        <option value=""selected>Pilih jenis produk </option>
                        <option value="weddingOrganizer">Wedding Organizer</option>
                        <option value="makananMinuman">Makanan Minuman</option>
                        <option value="pakaian">Pakaian</option>
                        <option value="aksesoris">Aksesoris</option>
                        <option value="kerajinan">Kerajinan</option>
                        <option value="pertanian">Pertanian</option>
                    </select>
                </div>
            </div>
            <div class="relative mb-5">
                <h1 class="text-sm font-medium font-montserrat text-black mb-2.5">
                    Deskripsi<label class="text-[#CB3A26]">*</label>
                </h1>
                <textarea rows="2" name="deskripsi" required
                    class="bg-white border border-[#D4EDDA] text-black font-light text-sm rounded-lg block w-full p-2.5"
                    placeholder="Masukkan deskripsi produk disini"></textarea>
                    </textarea>
            </div>
            <div class="relative mb-5">
                <h1 class="text-sm font-medium font-montserrat text-black mb-2.5">
                    Gambar<label class="text-[#CB3A26]">*</label>
                </h1>
                <div id="repeater-container">
                    <div class="repeater">
                        <label type="file" name="image-product">
                            <span class="">
                                <img class="img-preview w-24 h-24 border-2 rounded-2xl hover:bg-slate-200 cursor-pointer"
                                    alt="">   
                            </span>
                            <input class="hidden" type="file" required name="images" onchange="previewImage(this)">
                        </label>
                    </div>
                </div>

                <h1 class="text-sm text-black font-montserrat font-medium m-[14px]">Ukuran
                </h1>
                <div class="flex gap-[14px] ">
                    <input type="checkbox" class="radio-input" name="size[]" id="size-s{{ $string }}" value="S">
                    <label for="size-s{{ $string }}" class="radio-label">S</label>

                    <input type="checkbox" class="radio-input" name="size[]" id="size-m{{ $string }}" value="M">
                    <label for="size-m{{ $string }}" class="radio-label">M</label>

                    <input type="checkbox" class="radio-input" name="size[]" id="size-l{{ $string }}" value="L">
                    <label for="size-l{{ $string }}" class="radio-label">L</label>

                    <input type="checkbox" class="radio-input" name="size[]" id="size-xl{{ $string }}" value="XL">
                    <label for="size-xl{{ $string }}" class="radio-label">XL</label>

                    <input type="checkbox" class="radio-input" name="size[]" id="size-xxl{{ $string }}" value="XXL">
                    <label for="size-xxl{{ $string }}" class="radio-label">XXL</label>
                </div>
            </div>
            <h1 class="text-sm text-black font-montserrat font-medium">Varian Produk
            </h1>
            <div class="mb-6 repeater" name="group_a">
                <div data-repeater-list="group_a">
                    <div data-repeater-item="" class="flex flex-row gap-4">
                        <input type="text" id="" name="group_a" value=""
                            class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-34 mt-6"
                            placeholder="Tambahkan Varian">
                        <button type="button" class="text-black rounded-lg mt-6" data-repeater-delete>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <button type="button"
                    class="bg-[#D4EDDA] text-[#BC2B1C] w-max hover:bg-gray-300 hover:text-white rounded-lg p-4 flex items-center mt-3"
                    data-repeater-create="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2AA345"
                        class="bi bi-plus" viewBox="0 0 16 16">
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                </button>
            </div>
            <div class="flex justify-end gap-[14px]">
                <button type="submit"
                    class="text-[#E7E7E7] font-montserrat font-semibold text-sm bg-[#2AA345] rounded-lg py-2.5 px-6">Tambah Produk</button>
            </div>
        </form>
        </div>
    </div>
</div>
<style>
    /* Styling untuk radio button */
    .radio-input {
        display: none;
    }

    .radio-input2 {
        display: none;
    }

    .content {
        display: none;
    }

    /* Styling untuk label radio button */
    .radio-label {
        display: inline-block;
        background-color: #fff;
        border: 1px solid #D4EDDA;
        border-radius: 8px;
        width: 53px;
        height: 53px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #5A5A5A;
        cursor: pointer;
    }

    .radio-label2 {
        display: inline-block;
        background-color: #fff;
        border: 1px solid #D4EDDA;
        border-radius: 8px;
        padding: 17px 22px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #5A5A5A;
        cursor: pointer;
    }

    /* Styling untuk label radio button yang dipilih */
    .radio-input:checked+.radio-label {
        background-color: #2AA345;
        color: white;
    }

    .radio-input2:checked+.radio-label2 {
        background-color: #2AA345;
        color: white;
    }
</style>
<script src="https://cdn.tailwindcss.com"></script>
                                            <script>
                                            function addImageRepeater() {
                                                const repeaterContainer = document.querySelector('#repeater-container');
                                                const repeaterTemplate = document.querySelector('#repeater-template');

                                                const newRepeater = repeaterTemplate.content.cloneNode(true);
                                                const input = newRepeater.querySelector('input');
                                                input.addEventListener('change', function() {
                                                    previewImage(this);
                                                });

                                                const deleteButton = newRepeater.querySelector('.delete-button');
                                                deleteButton.addEventListener('click', function() {
                                                    deleteRepeater(this);
                                                });

                                                repeaterContainer.appendChild(newRepeater);
                                            }

                                            function deleteRepeater(button) {
                                                const repeater = button.parentNode.parentNode;
                                                repeater.parentNode.removeChild(repeater);
                                            }

                                            function previewImage(input) {
                                                const imgPreview = input.parentNode.querySelector('.img-preview');

                                                imgPreview.style.display = 'block';

                                                const oFReader = new FileReader();

                                                oFReader.readAsDataURL(input.files[0]);
                                                oFReader.onload = function(oFREvent) {
                                                    imgPreview.src = oFREvent.target.result;
                                                };
                                            }
                                            </script>

                                            <template id="repeater-template">
                                            <div class="repeater">
                                                <label type="file" name="image-product" required>
                                                    <span class="">
                                                        <img class="img-preview w-24 h-24 border-2 rounded-2xl hover:bg-slate-200 cursor-pointer"
                                                            alt="">
                                                    </span>
                                                    <input class="hidden" type="file" name="images">
                                                    <button class="delete-button" onclick="deleteRepeater(this)">Delete</button>
                                                </label>
                                            </div>
                                            </template>
                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
                                            integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
                                            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.js"
                                            integrity="sha512-bZAXvpVfp1+9AUHQzekEZaXclsgSlAeEnMJ6LfFAvjqYUVZfcuVXeQoN5LhD7Uw0Jy4NCY9q3kbdEXbwhZUmUQ=="
                                            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

                                            <script>
                                            $(document).ready(function() {
                                                $('.repeater').repeater({
                                                    // (Optional)
                                                    // start with an empty list of repeaters. Set your first (and only)
                                                    // "data-repeater-item" with style="display:none;" and pass the
                                                    // following configuration flag
                                                    initEmpty: false,
                                                    defaultValues: {
                                                        'text-input': 'foo'
                                                    },
                                                    show: function() {
                                                        $(this).slideDown();
                                                    },
                                                    hide: function(deleteElement) {
                                                        if (confirm('Are you sure you want to delete?')) {
                                                            $(this).slideUp(deleteElement);
                                                        }
                                                    },
                                                    isFirstItemUndeletable: true
                                                })
                                            });
                                        </script>
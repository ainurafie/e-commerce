<!-- Main modal -->
<div id="logout" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full m-auto md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative rounded-lg flex justify-center py-20 shadow bg-white">
            <button type="button"
                class="absolute top-5 right-6 text-white bg-red-500 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                data-modal-toggle="logout">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="">
                <div class="flex justify-center mb-5">
                    <img src="../assets/images/delete.svg" alt="">
                </div>
                <div class="px-10">
                    <h1 class="text-sm text-black font-montserrat font-medium mb-5 text-center">Apakah anda yakin untuk keluar?</h1>
                </div>
                <div class="flex justify-center gap-[14px]">
                    <a href="/logout">
                        <button class="text-[#004E11] font-montserrat font-semibold text-sm bg-[#D4EDDA] rounded-lg py-2 px-6">Ya</button>
                    </a>
                    <button data-modal-toggle="logout"
                        class="text-[#E7E7E7] font-montserrat font-semibold text-sm bg-[#004E11] rounded-lg py-2 px-4">Tidak</button>
                </div>
            </div>
        </div>
    </div>
</div>

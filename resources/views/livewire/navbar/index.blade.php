<div>

    <nav class="relative px-5 flex justify-between items-center h-14 md:h-28 bg-white drop-shadow-md">
        <!-- Logo -->
        <div>
            <a href="#" class="text-white text-2xl font-semibold italic">
                KINDA<span class="text-amber-500">CODE</span>
            </a>
        </div>

        <!-- This div and its children show up when screen's width >= 769px (md breakpoint) -->
        <div id="main-nav"
            class="hidden absolute top-14 right-0 px-5 md:px-24 py-10 bg-gray-700 h-screen flex flex-col 
            md:flex md:space-y-0 md:relative md:top-0 md:right-0 md:p-0 md:flex-row md:h-full md:flex-grow md:justify-end md:items-center md:ml-10 md:bg-inherit">
            <!-- Menu Links -->


            <!-- Search box -->
            <div class="relative w-[608px]">
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
            <button class="mx-7">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9.33331 29.3333C8.59998 29.3333 7.97242 29.0724 7.45065 28.5507C6.92798 28.028 6.66665 27.4 6.66665 26.6667C6.66665 25.9333 6.92798 25.3053 7.45065 24.7827C7.97242 24.2609 8.59998 24 9.33331 24C10.0666 24 10.6942 24.2609 11.216 24.7827C11.7386 25.3053 12 25.9333 12 26.6667C12 27.4 11.7386 28.028 11.216 28.5507C10.6942 29.0724 10.0666 29.3333 9.33331 29.3333ZM22.6666 29.3333C21.9333 29.3333 21.3058 29.0724 20.784 28.5507C20.2613 28.028 20 27.4 20 26.6667C20 25.9333 20.2613 25.3053 20.784 24.7827C21.3058 24.2609 21.9333 24 22.6666 24C23.4 24 24.028 24.2609 24.5506 24.7827C25.0724 25.3053 25.3333 25.9333 25.3333 26.6667C25.3333 27.4 25.0724 28.028 24.5506 28.5507C24.028 29.0724 23.4 29.3333 22.6666 29.3333ZM9.33331 22.6667C8.33331 22.6667 7.57776 22.2275 7.06665 21.3493C6.55554 20.472 6.53331 19.6 6.99998 18.7333L8.79998 15.4667L3.99998 5.33332H2.63331C2.25554 5.33332 1.94442 5.20532 1.69998 4.94932C1.45554 4.69421 1.33331 4.37777 1.33331 3.99999C1.33331 3.62221 1.46131 3.30532 1.71731 3.04932C1.97242 2.79421 2.28887 2.66666 2.66665 2.66666H4.83331C5.07776 2.66666 5.31109 2.73332 5.53331 2.86666C5.75554 2.99999 5.9222 3.18888 6.03331 3.43332L6.93331 5.33332H26.6C27.2 5.33332 27.6111 5.55555 27.8333 5.99999C28.0555 6.44443 28.0444 6.9111 27.8 7.39999L23.0666 15.9333C22.8222 16.3778 22.5 16.7222 22.1 16.9667C21.7 17.2111 21.2444 17.3333 20.7333 17.3333H10.8L9.33331 20H24.0333C24.4111 20 24.7222 20.1275 24.9666 20.3827C25.2111 20.6387 25.3333 20.9555 25.3333 21.3333C25.3333 21.7111 25.2053 22.0275 24.9493 22.2827C24.6942 22.5387 24.3778 22.6667 24 22.6667H9.33331Z"
                        fill="#949D96" />
                </svg>
            </button>
            <div class="flex gap-3 items-center rounded-lg shadow px-2 py-1" style="background-color: #FCFCFC">
                <img src="../assets/images/marsha.png" alt="" class="rounded-full w-11 h-11">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.646 15.146L5.85399 9.354C5.78394 9.28413 5.7362 9.19505 5.7168 9.09804C5.6974 9.00102 5.70722 8.90043 5.74501 8.809C5.7828 8.71757 5.84687 8.6394 5.92911 8.5844C6.01135 8.52939 6.10805 8.50002 6.20699 8.5H17.793C17.8919 8.50002 17.9886 8.52939 18.0709 8.5844C18.1531 8.6394 18.2172 8.71757 18.255 8.809C18.2928 8.90043 18.3026 9.00102 18.2832 9.09804C18.2638 9.19505 18.216 9.28413 18.146 9.354L12.353 15.146C12.2592 15.2397 12.1321 15.2924 11.9995 15.2924C11.8669 15.2924 11.7397 15.2397 11.646 15.146Z"
                        fill="#CFCFCF" />
                </svg>

            </div>
        </div>

        <!-- The hamburger icon to open/close the #main-nav when screen width < 768px (mobile devices) -->
        <a class="md:hidden text-white text-2xl" href="javascript:void(0)" onclick="toggleMenu()"><i
                id="toggle-menu-icon" class="fa-bars fa-solid"></i></a>

    </nav>
</div>

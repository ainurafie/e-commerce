<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <title>Beranda</title>
    @vite('resources/css/app.css')
</head>

<body>
    <livewire:navbar.index :index="Auth::user()->id" />
    <div class="md:px-24 mt-48">
        <div class="mt-50 bg-no-repeat bg-center bg-cover h-[402px] md:px-24 rounded-2xl lg:w-full "
            style="background-image: url('../assets/images/banner.svg');">
            <div class="flex flex-col justify-center h-full">
                <h1 class="text-[32px] text-[#004E11] font-montserrat font-semibold w-1/2">Padukan gaya mu dengan
                    aksesoris terkini</h1>
                <button class="rounded-2xl px-4 py-3 w-max text-white bg-[#004E11] mt-5">Telusuri Lainnya</button>
                <button></button>
            </div>
        </div>
        <div class="py-7">
            <h1 class="text-2xl font-montserrat font-semibold">Terbaru</h1>
            <div class="mt-7 h-[500px] w-full overflow-x-auto">
                <div class="flex gap-5 w-full flex-wrap">
                    <livewire:card.produck.index :batas="6" />
                </div>
            </div>
        </div>

        <div class="py-7">
            <h1 class="text-2xl font-montserrat font-semibold">Kategori</h1>
            <div class="flex gap-[50px] justify-center">
                <div class="w-max">
                    <a href="kategori/weddingOrganizer" class="w-max">
                        <svg width="78" height="78" viewBox="0 0 78 78" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="78" height="78" rx="12" fill="#B4CF90" />
                            <path
                                d="M34.0294 20.1287L32.1062 23.0135H34.6857L36.6089 20.1287H34.0294ZM38.4257 20.1287L36.5027 23.0135H42.4706L40.5476 20.1287H38.4257H38.4257ZM42.3646 20.1287L44.2879 23.0135H46.8674L44.9441 20.1287H42.3646ZM32.5188 24.5252L36.7277 28.7341L34.6232 24.5252H32.5188ZM36.3134 24.5252L39.4867 30.8719L42.6601 24.5252L36.3134 24.5252ZM44.3503 24.5252L42.2458 28.7341L46.4547 24.5252H44.3503ZM33.0598 27.2042C27.1547 29.7158 23 35.5771 23 42.3847C23 51.4705 30.4009 58.8713 39.4867 58.8713C48.5726 58.8713 55.9734 51.4706 55.9734 42.3847C55.9734 35.5772 51.8187 29.7158 45.9136 27.2042L43.3507 29.7671C48.759 31.4125 52.676 36.4264 52.676 42.3848C52.676 49.6886 46.7904 55.5741 39.4867 55.5741C32.1829 55.5741 26.2974 49.6885 26.2974 42.3848C26.2974 36.4264 30.2144 31.4126 35.6228 29.7672L33.0598 27.2043V27.2042Z"
                                fill="#7EA342" />
                        </svg>
                    </a>
                    <h1 class="text-xs font-semibold text-[#8E8E8E] mt-2 text-center">Wedding <br /> Organizer</h1>
                </div>
                <div class="w-max">
                    <a href="kategori/makananMinuman" class="w-max">
                        <svg width="78" height="78" viewBox="0 0 78 78" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="78" height="78" rx="12" fill="#6D9D6F" />
                            <path
                                d="M45.043 52.9375C45.043 55.9063 43.3087 58.3125 40.3398 58.3125H29.2539C26.2851 58.3125 24.5508 55.9063 24.5508 52.9375M46.2188 46.2188C47.7028 46.2188 48.9062 47.7229 48.9062 49.5781C48.9062 51.4333 47.7028 52.9375 46.2188 52.9375H23.375C21.891 52.9375 20.6875 51.4333 20.6875 49.5781C20.6875 47.7229 21.891 46.2188 23.375 46.2188"
                                stroke="#1E8015" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" />
                            <path
                                d="M23.375 41.1797V41.1612C23.375 36.5421 27.1543 34.125 31.7734 34.125H37.8203C42.4395 34.125 46.2188 36.5605 46.2188 41.1797V41.1612M38.2402 27.4062L38.8651 32.7787M46.8906 46.2188H33.0592C32.8813 46.2188 32.7106 46.2895 32.5847 46.4153L30.3314 48.6686C30.3002 48.6998 30.2632 48.7246 30.2224 48.7415C30.1816 48.7584 30.1379 48.7671 30.0938 48.7671C30.0496 48.7671 30.0059 48.7584 29.9651 48.7415C29.9243 48.7246 29.8873 48.6998 29.8561 48.6686L27.6028 46.4153C27.4769 46.2895 27.3062 46.2188 27.1283 46.2188H22.7031C22.1685 46.2188 21.6559 46.0064 21.2779 45.6284C20.8999 45.2504 20.6875 44.7377 20.6875 44.2031C20.6875 43.6685 20.8999 43.1559 21.2779 42.7779C21.6559 42.3999 22.1685 42.1875 22.7031 42.1875H46.8906C47.4252 42.1875 47.9379 42.3999 48.3159 42.7779C48.6939 43.1559 48.9062 43.6685 48.9062 44.2031C48.9062 44.7377 48.6939 45.2504 48.3159 45.6284C47.9379 46.0064 47.4252 46.2188 46.8906 46.2188Z"
                                stroke="#1E8015" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" />
                            <path
                                d="M39.5 58.3125H51.1999C51.8779 58.3125 52.5308 58.0562 53.0278 57.595C53.5248 57.1338 53.8292 56.5018 53.8798 55.8257L56.8848 27.4062"
                                stroke="#1E8015" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" />
                            <path d="M48.9062 27.4062L50.25 22.0312L54.1973 20.6875" stroke="#1E8015" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M36.8125 27.4062H58.3125" stroke="#1E8015" stroke-width="3" stroke-miterlimit="10"
                                stroke-linecap="round" />
                        </svg>
                    </a>
                    <h1 class="text-xs font-semibold text-[#8E8E8E] mt-2 text-center">Makanan<br /> dan Minuman</h1>
                </div>
                <div class="w-max">
                    <a href="kategori/pakaian" class="w-max">
                        <svg width="78" height="78" viewBox="0 0 78 78" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="78" height="78" rx="12" fill="#7ABDB7" />
                            <path
                                d="M50.5938 26.0625H47.1185L44.8257 23.768C44.5748 23.5192 44.2367 23.3782 43.8834 23.375H33.125C32.9485 23.3749 32.7737 23.4095 32.6105 23.4769C32.4474 23.5444 32.2992 23.6433 32.1743 23.768L29.8815 26.0625H26.4062C25.6935 26.0625 25.0099 26.3456 24.5059 26.8497C24.0019 27.3537 23.7188 28.0372 23.7188 28.75V54.2812C23.7188 54.994 24.0019 55.6776 24.5059 56.1816C25.0099 56.6856 25.6935 56.9688 26.4062 56.9688H50.5938C51.3065 56.9688 51.9901 56.6856 52.4941 56.1816C52.9981 55.6776 53.2812 54.994 53.2812 54.2812V28.75C53.2812 28.0372 52.9981 27.3537 52.4941 26.8497C51.9901 26.3456 51.3065 26.0625 50.5938 26.0625ZM44.0833 26.8284L45.2188 27.9622V36.8125L40.2754 32.5394L44.0833 26.8284ZM31.7812 27.9622L32.9167 26.8284L36.7246 32.5394L31.7812 36.8125V27.9622ZM37.1562 54.2812H26.4062V28.75H29.0938V36.8125C29.0906 37.3239 29.2348 37.8254 29.5092 38.257C29.7835 38.6887 30.1764 39.0321 30.6407 39.2464C30.9979 39.413 31.3871 39.4996 31.7812 39.5C32.4082 39.4989 33.0147 39.2771 33.4945 38.8735C33.5015 38.8688 33.5077 38.8631 33.513 38.8567L37.1562 35.7173V54.2812ZM35.6445 26.0625H41.3723L38.5 30.3591L35.6445 26.0625ZM50.5938 54.2812H39.8438V35.7173L43.4803 38.8584C43.4856 38.8648 43.4918 38.8705 43.4987 38.8752C43.9805 39.2796 44.5897 39.5009 45.2188 39.5C45.6155 39.499 46.0072 39.4107 46.366 39.2413C46.8283 39.0265 47.2193 38.6834 47.4923 38.2528C47.7654 37.8222 47.909 37.3223 47.9062 36.8125V28.75H50.5938V54.2812Z"
                                fill="#008276" />
                        </svg>
                    </a>
                    <h1 class="text-xs font-semibold text-[#8E8E8E] mt-2 text-center">Fashion</h1>
                </div>
                <div class="w-max">
                    <a href="/kategori/aksesoris" class="w-max">
                        <svg width="78" height="78" viewBox="0 0 78 78" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="78" height="78" rx="12" fill="#3A959E" />
                            <path
                                d="M26.0557 20.1139C24.8187 20.087 23.5992 20.5674 22.7602 21.7255C21.1401 23.9662 20.7723 26.8015 21.2426 29.7158C21.7138 32.63 23.013 35.6451 24.8161 38.3998C27.9269 43.1533 32.5209 47.1761 37.2324 48.2008V46.6302C33.2179 45.5804 28.9515 41.9523 26.0809 37.5767C24.3744 34.9648 23.1616 32.1177 22.735 29.4722C22.3084 26.8351 22.6569 24.4491 23.9847 22.6124C24.4852 21.922 24.9933 21.6483 25.6585 21.6147C25.8811 21.6037 26.1204 21.6147 26.3824 21.655C27.4314 21.7977 28.7752 22.3966 30.2197 23.1684C32.882 24.5894 35.8298 26.6084 38.7441 26.9191V25.383C36.4597 25.0362 33.6127 23.2666 30.9336 21.8347C29.447 21.0377 28.0025 20.3482 26.5832 20.1558C26.4068 20.1323 26.2329 20.1181 26.0557 20.1139ZM52.9375 20.1139C52.7611 20.1139 52.5847 20.1315 52.4084 20.1558C50.9974 20.3482 49.5529 21.0377 48.0664 21.8347C45.3873 23.2666 42.5402 25.0362 40.2558 25.383V26.9107C43.1701 26.6 46.1179 24.5885 48.7802 23.1675C50.2248 22.3957 51.5685 21.7969 52.6183 21.6541C53.6681 21.5114 54.3484 21.6911 55.0119 22.6124C56.3388 24.4491 56.6916 26.8351 56.2632 29.4722C55.8349 32.1177 54.6255 34.9648 52.9207 37.5767C50.0484 41.9523 45.782 45.5804 41.7675 46.6302V48.2008C46.4791 47.1761 51.073 43.1533 54.1804 38.3998C55.9861 35.6451 57.2879 32.63 57.7582 29.7158C58.2285 26.8015 57.8589 23.9662 56.238 21.7264C55.3982 20.5674 54.1804 20.0878 52.9375 20.1139ZM38.7441 46.9074V49.6285H40.2558V46.9074C40.0039 46.9242 39.7519 46.941 39.5 46.941C39.248 46.941 38.9961 46.9242 38.7441 46.9074ZM37.7111 51.1402L36.8293 51.7281L39.5 53.5086L42.1707 51.7281L41.2888 51.1402H37.7111ZM36.2246 53.139V55.6922L38.1394 54.4156L36.2246 53.139ZM42.7754 53.139L40.8605 54.4156L42.7754 55.6922V53.139ZM39.5 55.3226L36.8293 57.1031L39.5 58.8836L42.1707 57.1031L39.5 55.3226Z"
                                fill="#006F7A" />
                        </svg>
                    </a>
                    <h1 class="text-xs font-semibold text-[#8E8E8E] mt-2 text-center">Accesories</h1>
                </div>
                <div class="w-max">
                    <a href="kategori/kerajinan" class="w-max">
                        <svg width="78" height="78" viewBox="0 0 78 78" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="78" height="78" rx="12" fill="#4895A6" />
                            <path
                                d="M22.3437 20.0996C22.6594 23.627 22.6561 27.1543 22.3437 30.6816H26.0575C25.6745 27.1879 25.7484 23.6538 26.081 20.0996H22.3437ZM37.6019 20.0996C37.8203 24.6432 38.0639 29.2203 37.6355 33.9318H41.356C40.9361 29.3547 41.0453 24.7339 41.3812 20.0996H37.6019ZM47.109 20.0996C47.4953 22.746 47.4113 25.3805 47.0754 27.9941H50.7791C50.5775 25.3629 50.5775 22.7308 50.7791 20.0996H47.109ZM56.8932 23.1617C56.8932 23.1617 53.4162 23.8176 52.4 25.1655C52.1312 25.5527 51.9045 26.2002 52.148 26.6084C52.4084 27.0115 53.0467 27.0283 53.475 26.8855C55.0119 26.3816 56.8932 23.1617 56.8932 23.1617ZM32.5293 26.9779C32.5293 26.9779 33.5371 30.5641 34.8892 31.4375C35.2756 31.6979 35.9139 31.8238 36.2582 31.4963C36.6025 31.1687 36.5437 30.4885 36.3758 30.0518C35.7207 28.4812 32.5293 26.9779 32.5293 26.9779ZM54.4828 27.5574C54.0965 27.5658 53.7353 27.6078 53.433 27.7086C52.9039 27.8934 52.2488 28.3889 52.274 28.9432C52.2824 29.4975 52.9627 29.951 53.517 30.1021C55.499 30.6229 59.5219 28.708 59.5219 28.708C59.5219 28.708 56.5656 27.5322 54.4828 27.5574ZM47.0754 29.5059C47.5961 33.5119 47.6717 37.4928 47.0922 41.4316H50.7707C50.4348 37.4508 50.4767 33.4699 50.7875 29.5059H47.0754ZM52.7359 31.0932C52.5512 31.1016 52.3748 31.1604 52.2404 31.2863C51.8961 31.6139 51.9549 32.2941 52.1228 32.7309C52.7779 34.3014 55.9693 35.8047 55.9693 35.8047C55.9693 35.8047 54.9615 32.2186 53.6094 31.3451C53.391 31.2023 53.0971 31.0932 52.8115 31.0932H52.7359ZM31.3199 32.1262C30.2197 32.143 29.3715 32.2354 29.3715 32.2354C29.3715 32.2354 32.756 35.1412 34.8053 35.158C35.368 35.1496 36.149 34.8977 36.3002 34.3686C36.4766 33.8395 35.981 33.1844 35.5023 32.8652C34.6541 32.2941 33.1172 32.143 31.7986 32.1262H31.3199ZM22.368 32.1934C22.7384 35.7291 22.6972 39.2564 22.3512 42.7754H26.0818C25.7543 39.2229 25.6686 35.6871 26.0558 32.1934H22.368ZM37.6103 34.8809C37.8875 39.2564 37.9043 43.674 37.6103 48.1504H41.356C40.9361 43.6572 41.0453 39.248 41.3812 34.8809H37.6103ZM31.1939 36.7789C31.1939 36.7789 28.0025 38.2822 27.3475 39.8527C27.1795 40.2895 27.1207 40.9697 27.465 41.2973C27.8094 41.6248 28.4476 41.4988 28.834 41.2385C30.1861 40.365 31.1939 36.7789 31.1939 36.7789ZM29.0439 42.8342C28.4812 42.851 27.7842 43.0945 27.6246 43.59C27.4482 44.1107 27.9269 44.7742 28.3889 45.1018C30.0601 46.2775 34.5029 45.8912 34.5029 45.8912C34.5029 45.8912 31.2023 42.9014 29.1531 42.8342H29.0439ZM47.0334 42.9434C47.2685 46.0088 47.3357 49.091 47.0502 52.1816H50.7371C50.3508 48.9902 50.5943 45.9416 50.7875 42.9434H47.0334ZM22.3344 44.2871C22.667 49.175 22.5629 54.0461 22.3176 58.9004H26.1146C25.9054 54.0545 25.7316 49.1834 26.091 44.2871H22.3344ZM28.1621 46.3699C27.843 46.3783 27.5322 46.4791 27.3726 46.7311C27.1291 47.1342 27.3558 47.7893 27.6246 48.1756C28.6408 49.5193 32.1178 50.1744 32.1178 50.1744C32.1178 50.1744 30.2365 46.9578 28.6996 46.4539C28.54 46.4035 28.3469 46.3699 28.1621 46.3699ZM58.3713 47.9992C58.3713 47.9992 53.9285 48.4275 52.5008 49.8889C52.1144 50.292 51.7533 51.0395 52.0305 51.5182C52.2908 52.0053 53.1055 52.0977 53.6682 51.9801C55.667 51.5434 58.3713 47.9992 58.3713 47.9992ZM37.6523 49.6621C37.9547 52.7443 37.6859 55.8686 37.5935 58.9004H41.3896C41.2469 55.8937 40.9109 52.8199 41.3225 49.6621H37.6523ZM52.9375 53.4414C52.5008 53.4414 52.0053 53.6346 51.8709 54.0209C51.7113 54.466 52.0725 55.0455 52.4252 55.3646C53.7185 56.4564 57.2459 56.3389 57.2459 56.3389C57.2459 56.3389 54.718 53.6094 53.1139 53.4498C53.0551 53.4414 52.9963 53.4414 52.9375 53.4414ZM47.0586 53.6934C47.235 55.3982 47.3357 57.1367 47.109 58.9004H50.7035C50.4683 57.1283 50.5859 55.3898 50.7623 53.6934H47.0586Z"
                                fill="#005B6F" />
                        </svg>
                    </a>
                    <h1 class="text-xs font-semibold text-[#8E8E8E] mt-2 text-center">Kerajinan</h1>
                </div>
                <div class="w-max">
                    <a href="/kategori/pertanian" class="w-max">
                        <svg width="78" height="78" viewBox="0 0 78 78" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="78" height="78" rx="12" fill="#678FA8" />
                            <path
                                d="M44.8751 25.1667C44.8751 24.1768 42.1983 23.375 39.5001 23.375C36.8018 23.375 34.1251 24.1768 34.1251 25.1667L33.3618 27.7117C33.6781 27.7601 34.0265 27.8112 34.3947 27.8622C36.0036 28.0862 37.9691 28.3021 39.5001 28.3021C41.032 28.3021 42.9965 28.0853 44.6054 27.8631C44.9736 27.8112 45.3221 27.7601 45.6383 27.7117L44.8751 25.1667ZM46.2968 29.4228C45.8775 29.4891 45.3857 29.5634 44.8509 29.6378C43.2267 29.8617 41.1601 30.0938 39.5001 30.0938C37.8392 30.0938 35.7734 29.8626 34.1493 29.6369C33.6667 29.57 33.1847 29.4987 32.7034 29.4228C29.7669 30.074 27.8542 31.1347 27.8542 32.3333C27.8542 34.3131 33.068 35.9167 39.5001 35.9167C45.9322 35.9167 51.1459 34.3131 51.1459 32.3333C51.1459 31.1347 49.2333 30.074 46.2968 29.4228Z"
                                fill="#2F4858" />
                            <path
                                d="M32.3352 35.1588C32.3715 37.0351 33.1424 38.8224 34.4822 40.1365C35.822 41.4506 37.6238 42.1867 39.5005 42.1867C41.3772 42.1867 43.179 41.4506 44.5188 40.1365C45.8586 38.8224 46.6295 37.0351 46.6659 35.1588C46.0663 35.3016 45.4615 35.4211 44.8527 35.5171C44.7304 36.8522 44.1136 38.0935 43.1233 38.9972C42.133 39.901 40.8408 40.402 39.5001 40.402C38.1594 40.402 36.8671 39.901 35.8768 38.9972C34.8865 38.0935 34.2697 36.8522 34.1475 35.5171C33.539 35.4211 32.9344 35.3016 32.3352 35.1588Z"
                                fill="#2F4858" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M33.4057 49.3541C32.7643 50.4631 31.749 51.3075 30.5417 51.7361V54.7291C30.5417 55.0427 30.4879 55.3446 30.3894 55.625H55.625V50.25C55.625 45.3972 44.8822 43.9791 39.5 43.9791C37.7023 43.9884 35.907 44.1123 34.125 44.35V49.3541H33.4057ZM39.5 50.25C38.2953 50.2486 37.0942 50.1195 35.9167 49.8648V45.95C37.2309 45.8263 38.468 45.7708 39.5 45.7708C40.9925 45.7708 42.9123 45.8864 44.875 46.1578V49.3541C44.8634 49.3586 42.6265 50.25 39.5 50.25ZM49.0881 47.0178C48.5936 46.8762 48.083 46.749 47.5625 46.6335V49.3541H49.3542C49.5918 49.3541 49.8196 49.4485 49.9876 49.6165C50.1556 49.7845 50.25 50.0124 50.25 50.25V53.8333H53.8334V50.25C53.8334 49.7967 53.6112 49.2717 52.7897 48.6581C51.9476 48.0292 50.6729 47.4711 49.0881 47.0178Z"
                                fill="#2F4858" />
                            <path
                                d="M25.1667 40.3958C25.1667 40.1582 25.0723 39.9304 24.9043 39.7624C24.7363 39.5944 24.5084 39.5 24.2708 39.5C24.0332 39.5 23.8054 39.5944 23.6374 39.7624C23.4694 39.9304 23.375 40.1582 23.375 40.3958V46.6667C23.375 47.617 23.7525 48.5285 24.4245 49.2005C25.0965 49.8725 26.008 50.25 26.9583 50.25V54.7292C26.9583 54.9668 27.0527 55.1946 27.2207 55.3626C27.3887 55.5306 27.6166 55.625 27.8542 55.625C28.0918 55.625 28.3196 55.5306 28.4876 55.3626C28.6556 55.1946 28.75 54.9668 28.75 54.7292V50.25C29.7004 50.25 30.6118 49.8725 31.2838 49.2005C31.9558 48.5285 32.3333 47.617 32.3333 46.6667V40.3958C32.3333 40.1582 32.239 39.9304 32.0709 39.7624C31.9029 39.5944 31.6751 39.5 31.4375 39.5C31.1999 39.5 30.9721 39.5944 30.804 39.7624C30.636 39.9304 30.5417 40.1582 30.5417 40.3958V46.6667C30.5417 47.1418 30.3529 47.5976 30.0169 47.9336C29.6809 48.2696 29.2252 48.4583 28.75 48.4583V40.3958C28.75 40.1582 28.6556 39.9304 28.4876 39.7624C28.3196 39.5944 28.0918 39.5 27.8542 39.5C27.6166 39.5 27.3887 39.5944 27.2207 39.7624C27.0527 39.9304 26.9583 40.1582 26.9583 40.3958V48.4583C26.4832 48.4583 26.0274 48.2696 25.6914 47.9336C25.3554 47.5976 25.1667 47.1418 25.1667 46.6667V40.3958Z"
                                fill="#2F4858" />
                        </svg>
                    </a>
                    <h1 class="text-xs font-semibold text-[#8E8E8E] mt-2 text-center">Pertanian</h1>
                </div>
            </div>
            
            <div class="py-7">
                <h1 class="text-2xl font-montserrat font-semibold">Paling banyak Terjual</h1>
                <div class="mt-7 h-[500px] w-full overflow-x-auto">
                    <div class="flex gap-5 w-full flex-wrap">
                        <livewire:card.produck.index :terlaris="Auth::user()->id" :batas="5"/>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 w-full py-16 justify-items-center">
                <a href="/wedding-organizer" class="relative hover:brightness-75 mb-[14px]">
                    <div class="bg-no-repeat bg-center bg-cover flex items-center lg:h-[237px] lg:w-[504px] rounded-lg lg:mt-0 mt-5 px-12"
                        style="background-image: url('../assets/images/sehat.svg');">
                        <h1 class=" text-white font-montserrat lg:text-[32px] font-bold text-xl">Sehat <br /> Untuk
                            Tubuh
                        </h1>
                    </div>
                </a>
                <a href="/" class="relative hover:brightness-75 mb-[14px]">
                    <div class="bg-no-repeat bg-center bg-cover flex items-center lg:h-[237px] lg:w-[504px] rounded-lg lg:mt-0 mt-5 px-12"
                        style="background-image: url('../assets/images/hand.svg');">
                        <h1 class=" text-white font-montserrat lg:text-[32px] font-bold text-xl">Hand Craft</h1>
                    </div>
                </a>
                <a href="/" class="relative hover:brightness-75">
                    <div class="bg-no-repeat bg-center bg-cover flex items-center lg:h-[237px] lg:w-[504px] rounded-lg lg:mt-0 mt-5 px-12"
                        style="background-image: url('../assets/images/kopi.svg');">
                        <h1 class=" text-white font-montserrat lg:text-[32px] font-bold text-xl">Kopi</h1>
                    </div>
                </a>
                <a href="/" class="relative hover:brightness-75">
                    <div class="bg-no-repeat bg-center bg-cover flex items-center lg:h-[237px] lg:w-[504px] rounded-lg lg:mt-0 mt-5 px-12"
                        style="background-image: url('../assets/images/khas.svg');">
                        <h1 class=" text-white font-montserrat lg:text-[32px] font-bold text-xl">Khas <br /> Purwokerto
                        </h1>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <livewire:footer.index />
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

    <script>
        var mainNav = document.getElementById("main-nav");
        var toggleMenuIcon = document.getElementById("toggle-menu-icon");

        function toggleMenu() {
            mainNav.classList.toggle('hidden');

            // change the icon when the menu is shown/closed
            toggleMenuIcon.classList.toggle('fa-bars');
            toggleMenuIcon.classList.toggle('fa-times');
        }

        function redirectToDetail(productId) {
            window.location.href = '/detailProduct/' + productId;
        }
    </script>
</body>

</html>

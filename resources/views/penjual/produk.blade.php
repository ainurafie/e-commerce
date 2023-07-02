<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.tailwindcss.com"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <title>UMKM Banyumasan</title>
    @vite('resources/css/app.css')
    <style>
        .chart-container {
            width: 400px;
            height: 400px;
        }

        .chart {
            display: flex
        }
    </style>
</head>

<body>
    <livewire:sidebar.penjual />
    <div class="p-4 sm:ml-52">
        <h1 class="text-xl font-montserrat font-semibold">Detail Produk</h1>
        <div class="bg-[#D4EDDA] px-24 py-11 rounded-lg">
            <div class="bg-white px-[52px] py-[10px] grid grid-cols-12 rounded-lg">
                <div class="col-span-4 border-r ">
                    <div class="flex gap-5 items-center ">
                        <img src="{{ Storage::url(Auth::user()->image) }}" alt="" class="w-24 h-24 rounded-full">
                        <div class="">
                            <h1 class="text-xl font-montserrat font-semibold text-black mb-2">{{ Auth::user()->name }}</h1>
                            <h1 class="text-sm font-montserrat font-medium text-[#C2C0C0] mb-2">{{ Auth::user()->alamat }}</h1>
                            <div class="flex gap-[14px]">
                                {{-- <a href="/">
                                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_149_1801)">
                                            <path
                                                d="M9.00001 18.4944C7.24031 18.4946 5.51927 17.9781 4.05057 17.0088L0.592323 18.1136L1.71339 14.7723C0.597207 13.2412 -0.0028641 11.3947 1.02783e-05 9.49999C1.02783e-05 4.53987 4.03482 0.505615 8.99438 0.505615C13.9539 0.505615 17.9888 4.53987 17.9888 9.49999C17.9888 14.4601 13.9556 18.4944 8.99438 18.4944H9.00001Z"
                                                fill="#D4EDDA" />
                                            <path
                                                d="M9.00001 0.505127C4.0399 0.505127 0.00537109 4.53981 0.00537109 9.49977C0.00537109 11.4667 0.639936 13.2912 1.71864 14.7719L0.597403 18.1141L4.05423 17.009C5.47648 17.9503 7.17407 18.4949 9.00375 18.4949C13.9639 18.4949 17.9984 14.46 17.9984 9.50022C17.9984 4.5404 13.9637 0.505574 9.00375 0.505574H8.99852L9.00001 0.505127Z"
                                                fill="url(#paint0_linear_149_1801)" />
                                            <path
                                                d="M6.48833 5.07426C6.31958 4.65632 6.18177 4.64113 5.91739 4.62426L5.61589 4.61301C5.27277 4.61301 4.91277 4.71426 4.69564 4.93532C4.43127 5.20532 3.77539 5.83419 3.77539 7.12457C3.77539 8.41494 4.71645 9.66257 4.84414 9.83751C4.97633 10.0063 6.67902 12.6984 9.32333 13.793C11.3911 14.6497 12.0042 14.5704 12.475 14.4697C13.1624 14.3218 14.0241 13.8138 14.2413 13.2007C14.4584 12.5876 14.4584 12.0644 14.3943 11.9519C14.3301 11.8394 14.1563 11.7832 13.892 11.6454C13.6276 11.5076 12.3428 10.8787 12.0993 10.7938C11.8613 10.7038 11.6341 10.7358 11.4541 10.9895C11.201 11.3439 10.9518 11.7039 10.751 11.9199C10.5923 12.0886 10.333 12.1111 10.1165 12.0211C9.82564 11.8996 9.01114 11.6139 8.00708 10.7201C7.2297 10.0282 6.70095 9.16532 6.54739 8.90657C6.39383 8.64219 6.53164 8.48863 6.65314 8.34576C6.78533 8.18151 6.91189 8.06563 7.04464 7.91263C7.17739 7.75963 7.25108 7.67976 7.33545 7.50032C7.42545 7.33157 7.36189 7.14594 7.29833 7.01376C7.23477 6.88157 6.70602 5.59063 6.48945 5.06751L6.48833 5.07426Z"
                                                fill="#D4EDDA" />
                                        </g>
                                        <defs>
                                            <linearGradient id="paint0_linear_149_1801" x1="-67.6067" y1="-29.631"
                                                x2="-67.6067" y2="-28.9711" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#6EBF61" />
                                                <stop offset="0.231" stop-color="#50A557" />
                                                <stop offset="0.522" stop-color="#2A904F" />
                                                <stop offset="0.812" stop-color="#50A557" />
                                                <stop offset="1" stop-color="#6EBF63" />
                                            </linearGradient>
                                            <clipPath id="clip0_149_1801">
                                                <rect width="18" height="18" fill="white"
                                                    transform="translate(0 0.5)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a> --}}
                                {{-- <a href="/">
                                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.00801 4.9143C8.84971 4.9143 8.69315 4.92238 8.5389 4.93818C8.38464 4.95398 8.23252 4.97739 8.08299 5.00813C7.93346 5.03886 7.78659 5.07692 7.64266 5.12184L7.2202 5.27696L6.81798 5.47118L6.43842 5.70213L6.08378 5.96739L5.75653 6.26466L5.45897 6.59163L5.19342 6.94587L4.96218 7.32508L4.76785 7.72683C4.70943 7.86425 4.65748 8.00513 4.6125 8.14895C4.56752 8.29276 4.52946 8.43958 4.49866 8.58893C4.46787 8.73829 4.44446 8.89024 4.4286 9.04438C4.41274 9.19852 4.40479 9.35491 4.40479 9.51303C4.40479 9.67115 4.41286 9.82754 4.4286 9.98168C4.44425 10.1346 4.46764 10.2866 4.49866 10.4372C4.52946 10.5871 4.56752 10.7333 4.6125 10.8772C4.65748 11.021 4.70938 11.1618 4.76785 11.2993L4.96218 11.701L5.19342 12.0802L5.45897 12.4345L5.75653 12.7615L6.08378 13.0587L6.43842 13.324L6.81798 13.5549L7.2202 13.7491L7.64266 13.9043L8.08299 14.018C8.23368 14.049 8.38585 14.0724 8.5389 14.088C8.69476 14.1039 8.85133 14.1118 9.00801 14.1118C9.1663 14.1118 9.32286 14.1037 9.47706 14.088C9.63011 14.0724 9.78227 14.049 9.93296 14.018L10.3734 13.9043L10.7958 13.7491L11.198 13.5549L11.5776 13.324L11.9322 13.0587L12.2595 12.7615L12.5571 12.4345L12.8227 12.0802L13.0539 11.701L13.2482 11.2993L13.4036 10.8772C13.4486 10.7333 13.4866 10.5865 13.5174 10.4372L13.5875 9.98162C13.6033 9.82748 13.6113 9.67109 13.6113 9.51297C13.6113 9.35485 13.6033 9.19846 13.5875 9.04432C13.5718 8.89142 13.5484 8.73941 13.5174 8.58888C13.4866 8.43895 13.4486 8.29276 13.4036 8.14889L13.2482 7.72677L13.0539 7.32502L12.8227 6.94581L12.5571 6.59157L12.2595 6.2646L11.9322 5.96734L11.5776 5.70207L11.198 5.47112L10.7958 5.27691L10.3734 5.12178L9.93296 5.00807L9.47706 4.93812C9.32122 4.9222 9.16466 4.91423 9.00801 4.91425V4.9143ZM9.00801 6.50161C9.11267 6.50161 9.21595 6.5068 9.31767 6.51706L9.61753 6.56245L9.90719 6.63626L10.1846 6.737L10.4483 6.86329L10.6962 7.01351L10.928 7.18633L11.1418 7.3802L11.3358 7.59368L11.5088 7.82527L11.6592 8.07358L11.7855 8.33711C11.8234 8.4273 11.8571 8.51974 11.8864 8.61425C11.9157 8.70876 11.9403 8.80535 11.9602 8.90373C11.9801 9.00211 11.9948 9.10222 12.0056 9.20388L12.021 9.51332C12.021 9.61786 12.0158 9.72109 12.0056 9.82281C11.9953 9.92453 11.9802 10.0246 11.9602 10.123C11.9402 10.2213 11.9155 10.3179 11.8864 10.4124L11.7855 10.6896L11.6592 10.9531L11.5088 11.2014L11.3358 11.433L11.1418 11.6465L10.928 11.8404L10.6962 12.0132L10.4483 12.1634L10.1846 12.2897L9.90719 12.3904L9.61753 12.4642L9.31767 12.5096C9.21475 12.5199 9.11138 12.525 9.00795 12.525C8.9045 12.525 8.80111 12.5199 8.69817 12.5096L8.39831 12.4642C8.29987 12.4443 8.20322 12.4196 8.1086 12.3904L7.83122 12.2897L7.56752 12.1634L7.31956 12.0132L7.08774 11.8404L6.87403 11.6465L6.67999 11.433L6.50699 11.2014L6.3566 10.9531L6.23031 10.6896L6.12939 10.4124L6.05558 10.123L6.0102 9.82281C5.99988 9.71997 5.99472 9.61667 5.99474 9.51332C5.99472 9.40998 5.99988 9.3067 6.0102 9.20388C6.0204 9.10222 6.03557 9.00205 6.05558 8.90373C6.07539 8.80609 6.10005 8.7095 6.12945 8.61431L6.23037 8.33717L6.35665 8.07363L6.50705 7.82533L6.68004 7.59374L6.87409 7.38026L7.0878 7.18639L7.31961 7.01357L7.56758 6.86335L7.83128 6.73706C7.92205 6.69894 8.01464 6.66532 8.10871 6.63632L8.39842 6.5625C8.49686 6.54255 8.59708 6.52733 8.69828 6.51712C8.80122 6.50681 8.90461 6.50165 9.00806 6.50167L9.00801 6.50161Z"
                                            fill="url(#paint0_radial_149_1807)" />
                                        <path
                                            d="M13.7979 3.60611C13.7613 3.60612 13.7248 3.60796 13.6884 3.61165C13.6521 3.61532 13.6159 3.62083 13.5801 3.62814C13.5443 3.63544 13.5088 3.64455 13.4739 3.65541C13.439 3.66629 13.4046 3.67891 13.371 3.69324C13.3373 3.70759 13.3044 3.72362 13.2723 3.74128C13.2402 3.7589 13.2091 3.77813 13.1789 3.79889C13.1487 3.81967 13.1196 3.84195 13.0917 3.86566C13.0637 3.88935 13.037 3.91443 13.0115 3.9408C12.986 3.96719 12.9619 3.99485 12.9392 4.02367C12.9165 4.05249 12.8952 4.08243 12.8755 4.11339C12.8557 4.14433 12.8375 4.17624 12.821 4.209C12.8044 4.24179 12.7894 4.2754 12.7762 4.30969C12.7629 4.34398 12.7514 4.37891 12.7416 4.41435C12.7318 4.4498 12.7238 4.48571 12.7176 4.52196C12.7114 4.5582 12.707 4.59472 12.7044 4.63141C12.7026 4.65739 12.7017 4.68343 12.7017 4.70949C12.7017 4.74629 12.7035 4.78307 12.7071 4.81968C12.7108 4.85628 12.7163 4.89268 12.7235 4.92873C12.7308 4.96478 12.7398 5.00044 12.7506 5.03558C12.7614 5.07074 12.774 5.10532 12.7882 5.13921C12.8025 5.17311 12.8184 5.20627 12.8359 5.23857C12.8534 5.27086 12.8725 5.30225 12.8932 5.33262C12.9138 5.36297 12.9359 5.39226 12.9595 5.42039C12.983 5.44854 13.0079 5.47548 13.0342 5.50112C13.0604 5.52674 13.0879 5.55103 13.1165 5.57389C13.1451 5.59677 13.1749 5.61819 13.2057 5.63808C13.2364 5.65796 13.2682 5.67628 13.3007 5.69297C13.3333 5.70967 13.3667 5.72472 13.4007 5.73807C13.4348 5.7514 13.4695 5.763 13.5047 5.77284C13.5399 5.78266 13.5756 5.79071 13.6116 5.79695C13.6476 5.80321 13.6839 5.80765 13.7204 5.81027C13.7462 5.81211 13.7721 5.81303 13.7979 5.81303C13.8345 5.81305 13.871 5.81122 13.9074 5.80755C13.9438 5.80388 13.9799 5.79838 14.0157 5.79106C14.0516 5.78376 14.087 5.77466 14.1219 5.76379C14.1568 5.75291 14.1912 5.74029 14.2248 5.72596C14.2585 5.71163 14.2914 5.69562 14.3235 5.67798C14.3556 5.66034 14.3868 5.64109 14.4169 5.62031C14.4471 5.59955 14.4762 5.57729 14.5042 5.5536C14.5321 5.52989 14.5589 5.50479 14.5843 5.4784C14.6098 5.45201 14.6339 5.42435 14.6566 5.39553C14.6794 5.36671 14.7006 5.33677 14.7204 5.30581C14.7401 5.27485 14.7583 5.24292 14.7749 5.21014C14.7915 5.17735 14.8064 5.14375 14.8197 5.10945C14.8329 5.07517 14.8444 5.04024 14.8542 5.00479C14.864 4.96935 14.872 4.93344 14.8782 4.89719C14.8844 4.86095 14.8888 4.82442 14.8914 4.78774C14.8932 4.76175 14.8942 4.73571 14.8942 4.70966C14.8942 4.67287 14.8923 4.63612 14.8887 4.59952C14.885 4.56292 14.8796 4.52652 14.8723 4.49047C14.8651 4.45442 14.856 4.41876 14.8452 4.38362C14.8344 4.34847 14.8219 4.31388 14.8076 4.27999C14.7934 4.24609 14.7775 4.21293 14.7599 4.18063C14.7424 4.14834 14.7233 4.11695 14.7027 4.08658C14.682 4.05621 14.6599 4.0269 14.6363 3.99876C14.6128 3.97061 14.5879 3.94367 14.5617 3.91802C14.5354 3.8924 14.508 3.86811 14.4793 3.84525C14.4507 3.82239 14.4209 3.80099 14.3902 3.78113C14.3594 3.76124 14.3277 3.74292 14.2951 3.72623C14.2625 3.70953 14.2291 3.69448 14.1951 3.68113C14.161 3.6678 14.1263 3.6562 14.0911 3.64636C14.0559 3.63652 14.0202 3.62845 13.9842 3.6222C13.9482 3.61596 13.9119 3.61153 13.8754 3.60894C13.8496 3.60709 13.8238 3.60617 13.7979 3.60617V3.60611Z"
                                            fill="url(#paint1_radial_149_1807)" />
                                        <path
                                            d="M8.13496 0.516373C7.6343 0.515565 7.18751 0.517641 6.78616 0.523292L5.71011 0.552125C5.39134 0.565965 5.1097 0.584013 4.85689 0.607367C4.73049 0.619016 4.61124 0.632048 4.49821 0.646407C4.39066 0.659963 4.2834 0.675749 4.1765 0.693752C4.07472 0.711051 3.97813 0.729734 3.88551 0.750032C3.7929 0.770331 3.70444 0.792244 3.6191 0.815772C3.53567 0.838779 3.45288 0.864085 3.37085 0.891661C3.29046 0.918764 3.21204 0.947481 3.13459 0.978159C2.9797 1.03952 2.82862 1.10837 2.67304 1.18552C2.55332 1.24492 2.44272 1.30506 2.33765 1.36873C2.23259 1.43239 2.13305 1.49963 2.0356 1.57286C1.93524 1.64865 1.8385 1.72913 1.74571 1.81402C1.64872 1.90237 1.54965 1.99953 1.44672 2.10812C1.31737 2.24381 1.20498 2.37032 1.10522 2.49448C1.05534 2.55653 1.00863 2.61788 0.964632 2.67958C0.921119 2.74039 0.879522 2.80255 0.839901 2.86596C0.800688 2.92882 0.763552 2.99283 0.728029 3.05868C0.691954 3.12567 0.657858 3.1937 0.625788 3.2627C0.560165 3.40364 0.498924 3.55541 0.437798 3.72483C0.392451 3.85008 0.351844 3.977 0.316066 4.10531C0.279563 4.23644 0.247097 4.37363 0.218149 4.522C0.189201 4.67038 0.163943 4.82994 0.141742 5.0064C0.117818 5.19982 0.0987055 5.39381 0.0844225 5.58818C0.0682761 5.80189 0.0548977 6.03706 0.0439412 6.2988L0.0179917 7.16909L0.00403658 8.22997L0 9.51228L0.0118215 11.377L0.0487275 12.7898L0.0771567 13.3417L0.112679 13.799C0.124066 13.9222 0.138313 14.0452 0.155409 14.1678C0.170979 14.2767 0.187702 14.3719 0.205693 14.4544C0.2422 14.6221 0.285368 14.7882 0.335095 14.9524C0.382708 15.1096 0.437158 15.2647 0.498289 15.4172C0.558377 15.5665 0.624116 15.7106 0.695621 15.8492C0.767127 15.9878 0.844399 16.1211 0.927437 16.249C1.01048 16.377 1.09928 16.4997 1.19408 16.6172C1.28878 16.7346 1.3895 16.8471 1.49585 16.9542C1.60236 17.0614 1.71469 17.1635 1.83308 17.2605C1.95287 17.3586 2.07738 17.4508 2.20617 17.5367C2.32572 17.6166 2.44399 17.6898 2.56313 17.757C2.68226 17.8242 2.80244 17.8851 2.92596 17.9405C3.04948 17.9959 3.17611 18.0458 3.3084 18.0907C3.44068 18.1355 3.5785 18.1755 3.72417 18.2109C3.86983 18.2463 4.02403 18.2773 4.18722 18.3045C4.35042 18.3316 4.52485 18.3548 4.71123 18.3748C4.89761 18.3948 5.09644 18.4114 5.31009 18.4252C5.52374 18.439 5.7521 18.4501 5.99746 18.459C6.3765 18.4727 6.95027 18.4807 7.61193 18.4838L9.75392 18.4795L11.7823 18.451L12.5535 18.4294L13.0559 18.4035C13.1638 18.3948 13.2693 18.3844 13.3711 18.3722C13.473 18.36 13.5734 18.3461 13.6712 18.3303C13.769 18.3145 13.8646 18.2969 13.9586 18.2773C14.0514 18.258 14.1438 18.2364 14.2356 18.2125C14.3265 18.1895 14.4161 18.1632 14.5048 18.1354C14.5935 18.1075 14.6812 18.0774 14.7685 18.0451C14.8562 18.0126 14.9432 17.978 15.0292 17.9413C15.1159 17.9044 15.2025 17.8649 15.2893 17.8231C15.4227 17.7588 15.5301 17.7052 15.6243 17.6529C15.713 17.6043 15.7984 17.5499 15.88 17.4901C15.9605 17.4308 16.0406 17.3633 16.1328 17.2783C16.2251 17.1933 16.3297 17.0909 16.4591 16.9614C16.5729 16.8477 16.6688 16.7489 16.7516 16.659C16.8343 16.5691 16.9041 16.4882 16.9652 16.4102C17.0235 16.3362 17.0777 16.2592 17.1278 16.1794C17.1766 16.1016 17.2216 16.0207 17.2675 15.931C17.3364 15.7961 17.3978 15.6711 17.4528 15.5506C17.5061 15.4344 17.5549 15.3161 17.5989 15.196C17.6422 15.0769 17.6798 14.9558 17.7114 14.833C17.7439 14.7067 17.7719 14.5734 17.7962 14.4272C17.8204 14.2809 17.8408 14.1218 17.8586 13.9441C17.8764 13.7663 17.8915 13.5699 17.9047 13.3492L17.9399 12.6084L17.9701 11.6871L17.9917 10.6606L18 9.58736L17.9807 7.47939L17.955 6.53523L17.9198 5.72456L17.876 5.09255C17.86 4.91667 17.8429 4.77816 17.8246 4.68451C17.8045 4.58103 17.7819 4.47803 17.7571 4.37559C17.7328 4.27591 17.7062 4.17683 17.6772 4.07844C17.6489 3.98258 17.6182 3.88746 17.585 3.79317C17.5523 3.70004 17.5176 3.60887 17.4812 3.51966C17.4449 3.43045 17.4056 3.34332 17.3646 3.25803C17.3237 3.17274 17.2808 3.08953 17.2358 3.00822C17.1907 2.92691 17.1438 2.84762 17.0947 2.77029C17.0456 2.69296 16.9945 2.61759 16.9413 2.54424C16.8884 2.47113 16.8332 2.39968 16.7758 2.33002C16.7187 2.26073 16.6594 2.19327 16.5981 2.12772C16.5368 2.06226 16.4735 1.99876 16.4082 1.93731C16.3429 1.87584 16.2756 1.81633 16.2061 1.75878C16.1365 1.70104 16.065 1.64548 15.9919 1.59218C15.9179 1.53834 15.8424 1.48676 15.7653 1.43752C15.6872 1.38758 15.6077 1.33997 15.5267 1.29474C15.4444 1.24876 15.3607 1.20515 15.2759 1.16396C15.1351 1.09551 15.0048 1.03479 14.877 0.980927C14.7513 0.927475 14.6232 0.88 14.4931 0.838666C14.3622 0.797435 14.2259 0.762086 14.076 0.731581C13.926 0.701075 13.7626 0.675645 13.5775 0.65402C13.3925 0.632396 13.1858 0.614923 12.9495 0.600391C12.7132 0.58586 12.4474 0.574441 12.1439 0.565215L11.1125 0.542149L9.80715 0.526752L8.13553 0.516487L8.13496 0.516373ZM9.00311 2.10229L11.4137 2.11602L12.3231 2.13355C12.5735 2.14058 12.7646 2.14883 12.8767 2.15834C13.0226 2.17063 13.1616 2.18602 13.2945 2.20448C13.422 2.22209 13.549 2.244 13.6751 2.27016C13.7962 2.29553 13.9117 2.32436 14.0222 2.35689C14.1328 2.38941 14.2384 2.42586 14.3397 2.46616C14.441 2.50647 14.5379 2.55082 14.6311 2.59937C14.7236 2.64756 14.8135 2.70059 14.9004 2.75824C14.9869 2.81562 15.0703 2.87744 15.1513 2.94404C15.2322 3.01064 15.3107 3.08203 15.3873 3.15838C15.4682 3.23894 15.5429 3.321 15.6117 3.40565C15.6802 3.48978 15.7436 3.57796 15.8016 3.6697C15.8602 3.76276 15.913 3.85934 15.9597 3.9589C16.0074 4.06039 16.0503 4.16765 16.0888 4.28165C16.1274 4.39566 16.1617 4.51681 16.1921 4.64627C16.2239 4.78352 16.2506 4.92192 16.272 5.06118C16.2951 5.2088 16.3148 5.36623 16.3315 5.53479C16.3482 5.70334 16.3621 5.88309 16.3735 6.0754C16.3826 6.22966 16.3906 6.43322 16.3973 6.67363L16.4142 7.49334L16.4271 9.50126L16.4124 11.5073L16.3948 12.3246L16.3705 12.9191C16.3536 13.1975 16.3359 13.4315 16.3147 13.6351C16.304 13.737 16.2925 13.8312 16.2797 13.9196C16.2677 14.0031 16.2535 14.0863 16.237 14.1691C16.222 14.2446 16.2046 14.3196 16.1849 14.394C16.1659 14.465 16.1446 14.5353 16.1209 14.6049C16.0971 14.6747 16.0711 14.7439 16.0431 14.8122C16.0135 14.8844 15.9823 14.9558 15.9494 15.0266C15.9202 15.0897 15.8894 15.1511 15.8569 15.2109C15.8248 15.2701 15.7906 15.3282 15.7545 15.3851C15.7187 15.4414 15.6813 15.4961 15.642 15.5491C15.6031 15.6019 15.5622 15.6533 15.5195 15.7032C15.4769 15.7529 15.4325 15.801 15.3864 15.8474C15.3403 15.8938 15.2924 15.9386 15.2428 15.9819C15.1932 16.0251 15.1418 16.0666 15.0886 16.1066C15.0353 16.1467 14.9803 16.1851 14.9234 16.2219C14.8664 16.2586 14.8077 16.2939 14.7471 16.3276C14.6865 16.3613 14.624 16.3935 14.5597 16.4241C14.4943 16.4552 14.428 16.4843 14.3608 16.5114C14.2914 16.5394 14.2212 16.5655 14.1504 16.5895C14.0062 16.6387 13.8541 16.6818 13.694 16.719C13.5272 16.7575 13.3588 16.789 13.1894 16.8134C13.1242 16.823 12.9744 16.8319 12.7599 16.8402L11.9424 16.8629L9.62487 16.893L7.1991 16.8968L6.24646 16.8867L5.62788 16.8674L5.17175 16.8354C5.03012 16.8234 4.89841 16.8102 4.77501 16.7951C4.6516 16.7801 4.53668 16.7633 4.42855 16.7444C4.32609 16.7266 4.22425 16.7055 4.12321 16.6809C4.03108 16.6585 3.9399 16.6324 3.84988 16.6026C3.76309 16.5738 3.68011 16.5421 3.59938 16.5072C3.51865 16.4723 3.44022 16.4341 3.36254 16.3923C3.28487 16.3506 3.208 16.3052 3.13027 16.2558C3.07162 16.2186 3.01494 16.1809 2.96038 16.1409C2.90583 16.1009 2.85313 16.0611 2.80238 16.0193C2.75163 15.9776 2.70291 15.9346 2.65591 15.8903C2.60922 15.8462 2.56414 15.8005 2.52074 15.7531C2.47749 15.706 2.43614 15.6574 2.39647 15.6071C2.35664 15.5567 2.31869 15.5047 2.2827 15.4514C2.24617 15.3973 2.2116 15.342 2.17907 15.2854C2.1462 15.2283 2.11495 15.1692 2.08525 15.1083C2.05505 15.0463 2.02688 14.9832 2.00077 14.9194C1.97424 14.8543 1.9491 14.7872 1.92546 14.7179C1.87817 14.5792 1.83665 14.4316 1.80055 14.2741C1.76445 14.1167 1.73366 13.9495 1.7076 13.7713C1.68153 13.5931 1.66054 13.4042 1.64382 13.2034C1.63148 13.0555 1.62167 12.8251 1.61418 12.5345L1.59849 11.5008L1.60426 8.86579L1.64964 6.34787L1.68424 5.46074L1.70385 5.16751C1.71065 5.0892 1.71769 5.03119 1.7249 4.99636C1.74865 4.88178 1.77259 4.77516 1.79732 4.67534C1.82043 4.58117 1.84614 4.48766 1.87442 4.39491C1.9013 4.30737 1.92961 4.22537 1.95988 4.1477C1.98908 4.07245 2.02161 3.99855 2.0574 3.9262C2.09234 3.85585 2.12988 3.7885 2.17065 3.72293C2.21142 3.65736 2.25542 3.59376 2.3034 3.5305C2.35138 3.46724 2.40304 3.40479 2.45927 3.34147C2.51549 3.27815 2.57622 3.2142 2.64207 3.14829C2.71882 3.07111 2.79874 2.99713 2.88161 2.92657C2.95987 2.85999 3.04148 2.79746 3.12611 2.73921C3.20933 2.68155 3.29467 2.63022 3.38353 2.58305C3.4724 2.53588 3.56478 2.49327 3.66194 2.45492C3.75911 2.41657 3.86118 2.38226 3.9693 2.35112C4.08289 2.31926 4.19774 2.29208 4.31357 2.26964C4.43536 2.24577 4.5647 2.22495 4.70281 2.20678C4.84092 2.18862 4.98785 2.17293 5.14493 2.15932C5.2545 2.14987 5.4433 2.14145 5.69189 2.13436L6.59667 2.11648L9.00352 2.10177L9.00311 2.10229Z"
                                            fill="url(#paint2_radial_149_1807)" />
                                        <defs>
                                            <radialGradient id="paint0_radial_149_1807" cx="0" cy="0"
                                                r="1" gradientUnits="userSpaceOnUse"
                                                gradientTransform="translate(2.86782 19.7936) rotate(-9.53101) scale(38.0427 23.0917)">
                                                <stop stop-color="#FED576" />
                                                <stop offset="0.263" stop-color="#F47133" />
                                                <stop offset="0.609" stop-color="#BC3081" />
                                                <stop offset="1" stop-color="#4C63D2" />
                                            </radialGradient>
                                            <radialGradient id="paint1_radial_149_1807" cx="0" cy="0"
                                                r="1" gradientUnits="userSpaceOnUse"
                                                gradientTransform="translate(2.86776 19.7936) rotate(-9.53101) scale(38.0427 23.0917)">
                                                <stop stop-color="#FED576" />
                                                <stop offset="0.263" stop-color="#F47133" />
                                                <stop offset="0.609" stop-color="#BC3081" />
                                                <stop offset="1" stop-color="#4C63D2" />
                                            </radialGradient>
                                            <radialGradient id="paint2_radial_149_1807" cx="0" cy="0"
                                                r="1" gradientUnits="userSpaceOnUse"
                                                gradientTransform="translate(2.86771 19.7936) rotate(-9.53101) scale(38.0427 23.0917)">
                                                <stop stop-color="#FED576" />
                                                <stop offset="0.263" stop-color="#F47133" />
                                                <stop offset="0.609" stop-color="#BC3081" />
                                                <stop offset="1" stop-color="#4C63D2" />
                                            </radialGradient>
                                        </defs>
                                    </svg>
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-5 border-r ">
                    <div class=" px-8">
                        <h1 class="text-[#C2C0C0] text-sm font-medium font-montserrat line-clamp-5">Lorem ipsum dolor
                            sit amet consectetur. Faucibus consectetur gravida aenean viverra eget. Turpis enim mauris
                            quam egestas id dolor eros. Gravida adipiscing nunc quis nec consequat.</h1>
                    </div>
                </div>
                <div class="col-span-3 flex items-center justify-center">
                    <div class="flex gap-2">
                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3.825 19L5.45 11.975L0 7.25L7.2 6.625L10 0L12.8 6.625L20 7.25L14.55 11.975L16.175 19L10 15.275L3.825 19Z"
                                fill="#FFDD2A" />
                        </svg>
                        <h1 class="text-sm font-montserrat mb-[14px]">{4,9 dari 21 ulasan}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-7">
            <div class="justify-end w-full gap-3 flex">
                <button data-modal-toggle="add-produk"
                    class="text-white flex gap-3 items-center font-montserrat font-semibold text-sm bg-[#2AA345] rounded-lg py-2.5 px-4"><svg
                        width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.8332 10.8332H10.8332V15.8332H9.1665V10.8332H4.1665V9.1665H9.1665V4.1665H10.8332V9.1665H15.8332V10.8332Z"
                            fill="#FAFAFA" />
                    </svg>
                    Tambah Produk
                </button>
            </div>
            <h1 class="text-2xl font-montserrat font-semibold">Semua Produk</h1>
            <div class="flex gap-5">
                <livewire:card.produck.index />
            </div>
        </div>
    </div>
    <div class="mt-80">
        <livewire:footer.index />
    </div>
    <livewire:modal.add-produk/>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>

</html>

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
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <title>UMKM Banyumasan</title>
    @vite('resources/css/app.css')
</head>

<body>
    <livewire:sidebar.penjual />
    <div class="mt-24 mb-24 ms-56 me-12">
        <h2 class="font-semibold mb-4 text-xl">Bantuan Penjual</h2>
        <hr>
        <div class="grid grid-cols-2 gap-4 p-4">
            <div class="">
                <p class="font-semibold">Bagaimana Cara Menjual Produk ?</p>
                <p>Untuk menjual produk anda harus mendaftarkan diri terlebih dahulu dengan melengkapi profile setelah melakukan registrasi akun.</p>
            </div>
            <div class="">
                <p class="font-semibold">Bagaimana Cara Menerima Pesanan ?</p>
                <p>Untuk menerima pesanan anda dapat melihat pada halaman Pesanan. Pada halaman tersebut anda dapat melihat pesanan produk baru anda.</p>
            </div>
            <div class="">
                <p class="font-semibold">Bagaimana cara mengantarkan produk ?</p>
                <p>Pesanan produk dari pembeli terdapat nomor telepon sehingga dipersilahkan untuk menghubungi pembeli untuk melakukan kesepakatan pengantaran pesanan atas kebijakan kedua belah pihak.</p>
            </div>
            <div class="">
                <p class="font-semibold">Apakah penjual boleh tidak mengantarkan barang ?</p>
                <p>Pembeli merupakan mereka  yang diharapkan area nya sesuai dengan penjual, jadi sebisa mungkin penjual dapat menjual produk.</p>
            </div>
            <div class="">
                <p class="font-semibold">Apakah boleh menghubungi nomor pengguna yang terdaftar pada halaman keranjang ?</p>
                <p>Boleh, sebagai fungsi dari keberadaan website untuk membantu penjual mempromosikan produknya.</p>
            </div>
            <div class="">
                <p class="font-semibold">Bagaimana cara mengetahui pengguna yang membeli secara transfer dan menjadi lebih aman ?</p>
                <p>Untuk penjualan secara transfer keuangan akan diatur oleh UMKM Banyumasan.</p>
            </div>
            <div class="mr-4">
                <p class="font-semibold">Apakah harus melayani pembelian secara transfer ?</p>
                <p>Pembeli bisa melakukan pembayaran secara langsung maupun transfer.</p>
            </div>
            <div class="">
                <p class="font-semibold">Apakah ada biaya admin untuk mendaftar di website ini ?</p>
                <p>Tidak ada biaya admin, penjual boleh mendaftarkan produk dan akun secara gratis.</p>
            </div>       
        </div>
    </div>
    <livewire:footer.index />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>

</html>

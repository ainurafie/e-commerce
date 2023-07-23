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
    <livewire:navbar.index :index="Auth::user()->id"/>
    <div class="md:px-48 mt-48 mb-24">
        <h2 class="font-semibold mb-4 text-xl">Bantuan</h2>
        <hr>
        <div class="grid grid-cols-2 gap-4 p-4">
            <div class="">
                <p class="font-semibold">Bagaimana Cara Membeli Produk ?</p>
                <p>Untuk membeli produk ini anda harus memilih salah satu produk kemudian dapat memilih beli produk kemudian lakukan pembayaran.</p>
            </div>
            <div class="">
                <p class="font-semibold">Bagaimana Cara Membayar Produk ?</p>
                <p>Pembayaran masih menggunakan pembayaran secara tunai jika COD dan Transfer menggunakan BCA.</p>
            </div>
            <div class="">
                <p class="font-semibold">Apakah harus di daerah yang sama untuk melakukan pembelian?</p>
                <p>Diharapkan pembeli mencari penjual dengan daerah yang dapat terjangkau oleh penjual karena untuk memudahkan proses pengantaran yang dilakukan tanpa pihak ekspedisi barang</p>
            </div>
            <div class="">
                <p class="font-semibold">Bagaimana jika ada barang yang tidak sesuai?</p>
                <p>Jika pembeli merasa barang tidak sesuai atau ada indikasi penipuan maka bisa melakukan pelaporan dengan memilih laporkan barang.</p>
            </div>
            <div class="">
                <p class="font-semibold">Apa yang dilakukan setelah melekukan pembelian?</p>
                <p>Anda akan dihubungi oleh pihak penjual menggunakan nomor telepon yang terdaftar, maka dari itu pastikan nomor yang anda daftarkan adalah nomor aktif.</p>
            </div>
            <div class="">
                <p class="font-semibold">Apakah bisa melakukan pembatalan?</p>
                <p>Saat ini belum disediakan barang yang dibatalkan saat pembelian untuk membantu UMKM memaksimalkan penjualan, pastikan barang yang akan anda beli sudah sesuai.</p>
            </div>
            <div class="">
                <p class="font-semibold">Apakah boleh belanja melalui beberapa toko?</p>
                <p>Boleh, dengan catatan tidak melakukan pembelian di keranjang yang disimpan tetapi melalui masing-masing toko</p>
            </div>
            <div class="">
                <p class="font-semibold">Apakah aman bertransaksi pada website ini?</p>
                <p>Aman apabila pembeli mengikuti aturan dari website yang sudah ditentukan sebelumnya.</p>
            </div>
            <div class="">
                <p class="font-semibold">Berapa lama waktu barang pembelian kita sampai?</p>
                <p>Barang akan sampai ke pembeli tergantung pada proses pengantaran dari penjual, diharapkan dapat berkomunikasi dengan baik dengan penjual.</p>
            </div>
            <div class="">
                <p class="font-semibold">Kapan waktu yang baik dalam berbelanja?</p>
                <p>Kapanpun dapat dilakukan, namun untuk proses pengantaran dan transaksi akan diatur oleh pihak penjual.</p>
            </div>
            
        </div>
    </div>
    <livewire:footer.index />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>

</html>

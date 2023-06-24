// Data untuk grafik pie pertama
let penjual = document.getElementById("penjual").value;
let pembeli = document.getElementById("pembeli").value;
var data1 = {
    labels: ["Penjual", "Pembeli"],
    datasets: [
        {
            data: [penjual, pembeli],
            backgroundColor: ["#F765A3", "#16BFD6"],
        },
    ],
};

// Data untuk grafik pie kedua
let selesai = document.getElementById("selesai").value;
let belumSelesai = document.getElementById("belumSelesai").value;

var data2 = {
    labels: ["Disetuji", "Belum disetuji"],
    datasets: [
        {
            data: [selesai, belumSelesai],
            backgroundColor: ["#075F1A", "#1C1B4F"],
        },
    ],
};

// Data untuk grafik pie ketiga
var data3 = {
    labels: ["Penipuan", "Produk tidak sesuai"],
    datasets: [
        {
            data: [10, 70, 20],
            backgroundColor: ["#F76565", "#62F6E5"],
        },
    ],
};

// Opsi global untuk legenda
Chart.defaults.plugins.legend.position = "right";

// Membuat grafik pie pertama
var ctx1 = document.getElementById("chart1").getContext("2d");
ctx1.canvas.width = 200;
ctx1.canvas.height = 200;
var chart1 = new Chart(ctx1, {
    type: "pie",
    data: data1,
});

// Membuat grafik pie kedua
var ctx2 = document.getElementById("chart2").getContext("2d");
ctx2.canvas.width = 200;
ctx2.canvas.height = 200;
var chart2 = new Chart(ctx2, {
    type: "pie",
    data: data2,
});

// Membuat grafik pie ketiga
var ctx3 = document.getElementById("chart3").getContext("2d");
ctx3.canvas.width = 200;
ctx3.canvas.height = 200;
var chart3 = new Chart(ctx3, {
    type: "pie",
    data: data3,
});

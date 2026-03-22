var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");

// 1. Persegi panjang merah
ctx.fillStyle = "red";
ctx.fillRect(20, 20, 120, 80);

// 2. Persegi panjang biru
ctx.fillStyle = "blue";
ctx.fillRect(160, 20, 120, 80);

// 3. Lingkaran kuning
ctx.beginPath();
ctx.arc(80, 200, 50, 0, 2 * Math.PI);
ctx.fillStyle = "yellow";
ctx.fill();
ctx.strokeStyle = "white";
ctx.lineWidth = 3;
ctx.stroke();

// 4. Lingkaran hijau
ctx.beginPath();
ctx.arc(220, 200, 50, 0, 2 * Math.PI);
ctx.fillStyle = "green";
ctx.fill();
ctx.strokeStyle = "white";
ctx.lineWidth = 3;
ctx.stroke();

// 5. Segitiga oranye
ctx.beginPath();
ctx.moveTo(320, 150);
ctx.lineTo(270, 250);
ctx.lineTo(370, 250);
ctx.closePath();
ctx.fillStyle = "orange";
ctx.fill();
ctx.strokeStyle = "white";
ctx.lineWidth = 2;
ctx.stroke();

// 6. Teks putih di bawah
ctx.font = "bold 20px Arial";
ctx.fillStyle = "white";
ctx.textAlign = "center";
ctx.fillText("CORTIS UNIVERSE", 200, 320);

// 7. Garis dekoratif
ctx.beginPath();
ctx.moveTo(50, 350);
ctx.lineTo(350, 350);
ctx.strokeStyle = "white";
ctx.lineWidth = 2;
ctx.stroke();

// 8. Teks NIM
ctx.font = "14px Arial";
ctx.fillStyle = "#aaa";
ctx.fillText("Nadin - 253307035", 200, 380);
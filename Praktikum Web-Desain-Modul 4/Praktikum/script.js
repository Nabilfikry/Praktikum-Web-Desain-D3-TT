const elemenJudul = document.getElementById("judul");
const tombolGanti = document.getElementById("tombolGanti");
const tombolGantiWarna = document.getElementById("tombolGantiWarna");
const tombolKembali = document.getElementById("tombolKembali");

// tombolGanti.addEventListener("click", function() {
//     elemenJudul.innerHTML = "Judul Telah Diubah oleh JavaScript!";
// });

tombolGanti.addEventListener("click", function() {
    if (elemenJudul.innerHTML === "Ini Judul Asli") {
        elemenJudul.innerHTML = "Judul Telah Diubah oleh JavaScript!";
    } else {
        elemenJudul.innerHTML = "Ini Judul Asli";
    }
});

tombolGantiWarna.addEventListener("click", function() {
    if (elemenJudul.style.color === "red") {
        elemenJudul.style.color = "black";
    } 
    else {
        elemenJudul.style.color = "red";
    }
});


const elementJudul = document.getElementById("judul"); 
const tombolGanti = document.getElementById("tombolGanti");
const tombolGantiwarna = document.getElementById("tombolGantiwarna");

tombolGanti.addEventListener("click", function() {
    if (elementJudul.innerHTML === "Materi Praktikum") {
        elementJudul.innerHTML = "Judul Telah Diubah oleh JavaScript!";
    }
}

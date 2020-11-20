// Ini untuk latihan 6
// Ini JSON.parse() untuk JSON ke OBJECT tapi memakai vanila java script
let xhr = new XMLHttpRequest();
xhr.onreadystatechange= function(){
    if (xhr.readyState == 4 && xhr.status == 200) {
        let mahasiswa = JSON.parse(this.responseText);
        console.log(mahasiswa);
    }
}
xhr.open('GET', 'coba.json', true);
xhr.send();
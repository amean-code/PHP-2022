// Console'a Yazdımayı sağlar
console.log("Merhaba Dünya!");

//  Sayfa açıldığında uyarı verir
// alert("AMEAN Danışmanlık Süper!");

// Değişken Tanımalamak
let isim = "Emin";
let yas = 23;

const YIL = 2022;

var dogumYili = YIL - yas;

var bilgilendirmeYazisi =
  "Merhaba " + isim + `. Sen ${yas} yasindasin. Dogum yiliniz ${dogumYili}`;

console.log(bilgilendirmeYazisi);

document.getElementById("bilgilendirme").innerHTML = bilgilendirmeYazisi;
const page1 = document.getElementById("section1");
const page2 = document.getElementById("section2");
const page3 = document.getElementById("section3");
const page4 = document.getElementById("section4");
const page5 = document.getElementById("section5");

window.addEventListener("DOMContentLoaded", (event) => {
    if (document.contains(page3)) {
        loadLocalData();
        document.querySelector(".sec1").classList.add("active");
    }
    if (document.contains(page4)) {
        sprawdzCzyZamowienie();
        // pokazZamowienia();
    }
    if (document.contains(page5)) {
        const listHoursArray = document.body.querySelectorAll(".list-hours li");
        listHoursArray[new Date().getDay() - 1].classList.add("today");
    }
});

function loadLocalData() {
    fetch("http://localhost/peanutButterShop/public/dane/maslo.txt")
        .then((response) => {
            return response.text();
        })
        .then((dane) => {
            document.getElementById("produkt-maslo").innerHTML = dane;
        });

    fetch("http://localhost/peanutButterShop/public/dane/pieczywo.txt")
        .then((response) => {
            return response.text();
        })
        .then((dane) => {
            document.getElementById("produkt-pieczywo").innerHTML = dane;
        });

    fetch("http://localhost/peanutButterShop/public/dane/kawa.txt")
        .then((response) => {
            return response.text();
        })
        .then((dane) => {
            document.getElementById("produkt-kawa").innerHTML = dane;
        });

    var myImage = document.getElementById("productPic1");
    fetch("http://localhost/peanutButterShop/public/dane/products-01.jpg")
        .then((response) => response.blob())
        .then(function (myBlob) {
            var objectURL = URL.createObjectURL(myBlob);
            myImage.src = objectURL;
        });

    var myImage1 = document.getElementById("productPic2");
    fetch("http://localhost/peanutButterShop/public/dane/products-02.jpg")
        .then((response) => response.blob())
        .then(function (myBlob) {
            var objectURL = URL.createObjectURL(myBlob);
            myImage1.src = objectURL;
        });

    var myImage2 = document.getElementById("productPic3");
    fetch("http://localhost/peanutButterShop/public/dane/products-03.jpg")
        .then((response) => response.blob())
        .then(function (myBlob) {
            var objectURL = URL.createObjectURL(myBlob);
            myImage2.src = objectURL;
        });
}

// //-------------------------MAPA-------------------------//
// function initMap() {
//     var wspolrzedne = new google.maps.LatLng(51.2487, 22.56491);
//     var opcjeMapy = {
//         zoom: 15,
//         center: wspolrzedne,
//         mapTypeId: google.maps.MapTypeId.ROADMAP,
//     };

//     var mapa = new google.maps.Map(document.getElementById("mapka"), opcjeMapy);

//     var marker = new google.maps.Marker({
//         position: { lat: 51.24872, lng: 22.564915 },
//         map: mapa,
//     });
// }

//-------------------------PRODUCTS_SLIDERS-------------------------//
if (document.contains(page3)) {
    $(document).on("scroll", function () {
        const windowHeight = $(window).height();
        const scrollValue = $(this).scrollTop();

        const $sec2 = $(".sec2");
        const sec2FromTop = $sec2.offset().top;
        const sec2Height = $sec2.outerHeight();

        const $sec3 = $(".sec3");
        const sec3FromTop = $sec3.offset().top;
        const sec3Height = $sec3.outerHeight();

        if (scrollValue > sec2FromTop + sec2Height / 2 - windowHeight) {
            $sec2.addClass("active");
        }
        if (scrollValue > sec3FromTop + sec3Height / 2.3 - windowHeight) {
            $sec3.addClass("active");
        }
        if (scrollValue < 100) {
            $sec2.removeClass("active");
            $sec3.removeClass("active");
        }
    });
}

//-------------------------OBSŁUGA FORUMLARZA-------------------------//
// const nazwaMasla = document.getElementById("nazwa");
// const iloscZamowien = document.getElementById("ilosc");
// var edytowanie = false;
// var edytowanaNazwa = "";

// //Metoda do resetowania komunikatów o walidacji
// function resetErrors() {
//     document.getElementById("nazwa_error").innerHTML = "";
//     document.getElementById("orzech_error").innerHTML = "";
//     document.getElementById("dodatek_error").innerHTML = "";
//     document.getElementById("konsystencja_error").innerHTML = "";
//     document.getElementById("ilosc_error").innerHTML = "";
// }

// //Metoda do edycji buttona w formularzu
// function resetButton() {
//     if (
//         document
//             .querySelector(".skladanieZamowienia")
//             .classList.contains("temp")
//     ) {
//         document.querySelector(".skladanieZamowienia").classList.remove("temp");
//         document.querySelector(".skladanieZamowienia").innerHTML =
//             "Złóż zamówienie";
//     }
// }

// //Metoda do sprawdzenia czy są elementy w localStorage
// function sprawdzCzyZamowienie() {
//     if (window.localStorage.length !== 0) {
//         document.querySelector(".edytuj").classList.remove("hidden");
//         document.querySelector(".usun").classList.remove("hidden");
//         document.querySelector(".lista").classList.remove("hidden");
//     }
// }

// //Metoda do sprawdzenia pola
// function sprawdzPole(pole_id, obiektRegex) {
//     var obiektPole = document.getElementById(pole_id);
//     if (!obiektRegex.test(obiektPole.value)) return false;
//     else return true;
// }

// //Metoda do sprawdzenia radio-buttonw
// function sprawdz_radio(nazwa_radio) {
//     var obiekt = document.getElementsByName(nazwa_radio);
//     for (i = 0; i < obiekt.length; i++) {
//         wybrany = obiekt[i].checked;
//         if (wybrany) return true;
//     }
//     return false;
// }

// //Metoda do sprawdzenia checkboxow
// function sprawdz_box(box_id) {
//     var obiekt = document.getElementById(box_id);
//     if (obiekt.checked) return true;
//     else return false;
// }

// //Metoda do sprawdzenia listy
// function sprawdz_liste(option_id) {
//     var obiekt = document.getElementById(option_id);
//     if (obiekt.selected) {
//         return true;
//     } else return false;
// }

// //Metoda do walidacji formularza i następnie dodatnia do localStorage
// function sprawdziZloz() {
//     var poprawnie = true;
//     produktNazwa =
//         /^[AaĄąBbCcĆćDdEeĘęFfGgHhIiJjKkLlŁłMmNnŃńOoÓóPpQqRrSsŚśTtUuVvWwXxYyZzŹźŻż0-9_ ]{1,15}$/;
//     produktIlosc = /^[1-9]{1}[0-9]{0,1}$/;

//     //Sprawdzenie czy istnieje już zamówienie o podanej nazwie
//     if (localStorage.getItem(nazwaMasla.value)) {
//         if (
//             edytowanaNazwa !=
//             JSON.parse(localStorage.getItem(nazwaMasla.value)).nazwa
//         ) {
//             poprawnie = false;
//             document.getElementById("nazwa_error").innerHTML =
//                 "<b>Istnieje już masło o takiej nazwie!</b>";
//             alert("Istnieje już masło o takiej nazwie!");
//         }
//     } else document.getElementById("nazwa_error").innerHTML = "";

//     if (!sprawdzPole("nazwa", produktNazwa)) {
//         poprawnie = false;
//         document.getElementById("nazwa_error").innerHTML =
//             "<b>Wpisz poprawną nazwę!</b>";
//     }

//     if (!sprawdzPole("ilosc", produktIlosc)) {
//         poprawnie = false;
//         document.getElementById("ilosc_error").innerHTML =
//             "<b>Wpisz poprawną ilość!</b>";
//     } else document.getElementById("ilosc_error").innerHTML = "";

//     if (sprawdz_box("OrzechLaskowy")) {
//         document.getElementById("orzech_error").innerHTML = "";
//     } else if (sprawdz_box("OrzechArchaidowy")) {
//         document.getElementById("orzech_error").innerHTML = "";
//     } else if (sprawdz_box("OrzechNerkowca")) {
//         document.getElementById("orzech_error").innerHTML = "";
//     } else if (sprawdz_box("Migdały")) {
//         document.getElementById("orzech_error").innerHTML = "";
//     } else {
//         poprawnie = false;
//         document.getElementById("orzech_error").innerHTML =
//             "<b>Wybierz rodzaj masła </b>";
//     }

//     if (sprawdz_liste("Maliny")) {
//         document.getElementById("dodatek_error").innerHTML = "";
//     } else if (sprawdz_liste("DrażeM&M's")) {
//         document.getElementById("dodatek_error").innerHTML = "";
//     } else if (sprawdz_liste("Karmel")) {
//         document.getElementById("dodatek_error").innerHTML = "";
//     } else if (sprawdz_liste("Czekolada")) {
//         document.getElementById("dodatek_error").innerHTML = "";
//     } else {
//         poprawnie = false;
//         document.getElementById("dodatek_error").innerHTML =
//             "<b>Wybierz jeden z dodatków</b>";
//     }

//     if (!sprawdz_radio("konsystencja")) {
//         poprawnie = false;
//         document.getElementById("konsystencja_error").innerHTML =
//             "<b>Wybierz rodzaj konstystencji</b>";
//     } else document.getElementById("konsystencja_error").innerHTML = "";

//     //Pętla do zebrania zaznaczonych składników podstawy
//     var skladniki = [];
//     var podstawa = document.getElementsByClassName("podstawa");
//     for (var i = 0; i < podstawa.length; i++) {
//         if (podstawa[i].checked) {
//             skladniki.push(podstawa[i].value);
//         }
//     }
//     //Pętla do zebrania informacji o zaznaczonej konsystencji
//     var konst = "";
//     var konsystencja = document.getElementsByName("konsystencja");
//     for (var i = 0; i < konsystencja.length; i++) {
//         if (konsystencja[i].checked) konst = konsystencja[i].value;
//     }
//     //Pobranie wybranego dodatku
//     var dodatek = document.querySelector(".dodatek").value;

//     //Obsługa obiektu JSON i dodanie go do localStorage
//     if (poprawnie) {
//         const textjson = `{"nazwa":"${nazwaMasla.value}","podstawa":"${skladniki}","dodatek":"${dodatek}","konsystencja":"${konst}","ilosc":"${iloscZamowien.value}"}`;
//         console.log(`Tekst JSON: ${textjson}`);
//         const objs = JSON.parse(textjson);
//         if ((edytowanaNazwa !== nazwaMasla.value) & edytowanie) {
//             console.log(`usuwanie elementu`);
//             console.log(edytowanie);
//             localStorage.removeItem(edytowanaNazwa);
//         }

//         //Dodanie elementu do localStorage
//         localStorage.setItem(`${nazwaMasla.value}`, JSON.stringify(objs));
//         alert("Poprawnie dodane zamówienie do listy");

//         //Resetowanie formularza do następnego uzupełnienia
//         document.getElementById("myForm").reset();
//         resetButton();
//         pokazZamowienia();
//         edytowanie = false;
//     }

//     sprawdzCzyZamowienie();

//     //Schowanie buttona anuluj edycje
//     if (!document.querySelector(".anuluj").classList.contains("hidden")) {
//         document.querySelector(".anuluj").classList.add("hidden");
//     }
//     return false;
// }

// //Metoda do utworzenia tabeli zamówień i wyświetlenie jej
// function pokazZamowienia() {
//     const keys = Object.keys(localStorage);
//     var zamow = document.querySelector(".zamowienia");
//     document.querySelector(".listaZamowien").innerHTML =
//         "<h3>Twoje zamówienia:</h3>";
//     var str = "";
//     if (window.localStorage.length === 0) {
//         str += `<p>Brak skonfigurowanych zamówień</p>`;
//     } else {
//         str += `<table class="tabela">
//       <thead>
//         <tr>
//           <th>Nazwa masła</th>
//           <th>Podstawa</th>
//           <th>Dodatek</th>
//           <th>Konsystencja</th>
//           <th>Ilość</th>
//           <th colspan='2'></th>
//         </tr>
//       </thead>`;
//         for (var i = 0; i < keys.length; i++) {
//             const maslo = JSON.parse(localStorage.getItem(keys[i]));
//             str += `<tr>
//         <td>${maslo.nazwa}</td>
//         <td>${maslo.podstawa}</td>
//         <td>${maslo.dodatek}</td>
//         <td>${maslo.konsystencja}</td>
//         <td>${maslo.ilosc}</td>
//         <td><button class='usunPoj' onclick='usunElement("${keys[i]}")'>X</button></td>
//         <td><button class='edycja' onclick='edytujZamowienie("${keys[i]}")'><i class="fas fa-edit"></i></button></td>
//       </tr>
//     </table>`;
//         }
//     }
//     zamow.innerHTML = str;
// }

// //Metoda do edytowania zamówienia
// function edytujZamowienie(key) {
//     resetErrors();
//     const edytowanyRejestr = JSON.parse(localStorage.getItem(key));
//     console.log(edytowanyRejestr);

//     edytowanaNazwa = edytowanyRejestr.nazwa;
//     edytowanie = true;

//     // Uzupełnienie formularza edytowanymi danymi
//     document.getElementById("nazwa").value = edytowanyRejestr.nazwa;
//     var array = edytowanyRejestr.podstawa.split(",");
//     for (var i = 0; i < array.length; i++) {
//         var temp = array[i].replace(/\s/g, "");
//         document.getElementById(temp).checked = true;
//     }
//     document.querySelector(".dodatek").value = edytowanyRejestr.dodatek;
//     temp = edytowanyRejestr.konsystencja.replace(/\s/g, "");
//     document.getElementById(temp).checked = true;
//     document.getElementById("ilosc").value = edytowanyRejestr.ilosc;

//     document.querySelector(".skladanieZamowienia").innerHTML =
//         "Zakończ edytowanie zamówienia";
//     document.querySelector(".skladanieZamowienia").classList.add("temp");

//     // wyświetlenie buttona do anulowania
//     document.querySelector(".anuluj").classList.remove("hidden");

//     pokazZamowienia();
// }

// //Metoda do anulowania edycji zamówienia
// function anulujEdycje() {
//     document.getElementById("myForm").reset();
//     document.querySelector(".anuluj").classList.add("hidden");
//     resetButton();
//     edytowanie = false;
// }

// //Metoda do usunięcia jednego zamówienia z listy
// function usunElement(key) {
//     var remv = confirm("Naciśnij OK aby usunąć zamówienie");
//     if (remv) {
//         localStorage.removeItem(key);
//         document.getElementById("myForm").reset();
//     }
//     edytowanie = false;
//     resetButton();
//     pokazZamowienia();
// }

// // Metoda do usunięcia całej listy zamówień
// function usunStorage() {
//     resetErrors();
//     if (window.localStorage.length !== 0) {
//         var remv = confirm("Czy chcesz usunąć wszystkie zamówienia");
//         if (remv) {
//             window.localStorage.clear();
//             document.getElementById("myForm").reset();
//         }
//     } else window.alert("Lista zamówień jest pusta");
//     edytowanie = false;
//     resetButton();
//     pokazZamowienia();
// }

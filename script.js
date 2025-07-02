<<<<<<< HEAD
let currentLang = 'en';

function toggleLanguage() {
    const enElements = document.querySelectorAll('.lang.en');
    const arElements = document.querySelectorAll('.lang.ar');

    if (currentLang === 'en') {
        enElements.forEach(el => el.style.display = 'none');
        arElements.forEach(el => el.style.display = 'block');
        currentLang = 'ar';
    } else {
        enElements.forEach(el => el.style.display = 'block');
        arElements.forEach(el => el.style.display = 'none');
        currentLang = 'en';
    }
}
=======
let currentLang = 'en';

function toggleLanguage() {
    const enElements = document.querySelectorAll('.lang.en');
    const arElements = document.querySelectorAll('.lang.ar');

    if (currentLang === 'en') {
        enElements.forEach(el => el.style.display = 'none');
        arElements.forEach(el => el.style.display = 'block');
        currentLang = 'ar';
    } else {
        enElements.forEach(el => el.style.display = 'block');
        arElements.forEach(el => el.style.display = 'none');
        currentLang = 'en';
    }
}
>>>>>>> ab66ab62e095b65fe1a97076839ccca928159174

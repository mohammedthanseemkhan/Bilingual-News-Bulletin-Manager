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

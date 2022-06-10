export default function() {
    const typeBtns = document.querySelectorAll('.type__btn');
    typeBtns && typeBtns.forEach(typeBtn => {
        typeBtn.addEventListener('click', () => {
            typeBtn.closest('.type').classList.toggle('active');
        })
    });
}

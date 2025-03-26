const toogleBtn = document.querySelector('.toogle_btn')
    const toogleBtnI = document.querySelector('.toogle_btn i')
    const dropdown = document.querySelector('.dropdown')

    toogleBtn.onclick = function() {
        dropdown.classList.toggle('open')
        const isOpen = dropdown.classList.contains('open')

        toogleBtnI.classList = isOpen
        ? 'fa-solid fa-xmark'
        : 'fa-solid fa-grip-lines'
    }

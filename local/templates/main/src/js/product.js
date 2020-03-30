document.addEventListener("DOMContentLoaded", function () {

    // табы
    const tab = document.getElementsByClassName('product-tabs__item'),
        tabContent = document.getElementsByClassName('tab-content'),
        info = document.getElementsByClassName('product-tabs')[0];

    function hideTabContent(a) {
        for (let i = a; i < tabContent.length; i++) {
            tabContent[i].classList.remove('show');
            tabContent[i].classList.add('hide');
        }
    }

    hideTabContent(1);

    function showTabContent(b) {
        if (tabContent[b].classList.contains('hide')) {
            hideTabContent(0);
            tabContent[b].classList.remove('hide');
            tabContent[b].classList.add('show');
        }
    }

    info.addEventListener('click', function (event) {
        let target = event.target;
        if (target.className == 'product-tabs__item') {
            for (let i = 0; i < tab.length; i++) {
                tab[i].classList.remove('focus');
                if (target == tab[i]) {
                    target.classList.add('focus');
                    showTabContent(i);
                    // break;
                }
            }
        }

    });

    // модалка с формой
    const openBtn = document.querySelector('.product-btns__order'),
        modal = document.getElementById('product-modal'),
        closeBtn = document.getElementById('product-modal-close');

    openBtn.addEventListener('click', () => {
        modal.classList.remove('hide');
        modal.classList.add('show');
    });

    closeBtn.addEventListener('click', () => {
        modal.classList.remove('show');
        modal.classList.add('hide');
    });

});
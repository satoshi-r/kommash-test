import * as $ from 'jquery'

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

$(document).ready(function () {
    // form
    const form = $('#product-modal form'),
        formSuccess = $('#product-modal .product-modal-success'),
        inputs = form.find('input:not(#p_name)');

    const formAccepted = parent => {
        $(parent).removeClass('form_error');
        $(parent).addClass('form_accepted');
    }

    const formError = (parent, message) => {
        $(parent).removeClass('form_accepted');
        $(parent).addClass('form_error');
        $(parent).find('.error_message').text(message);
    }

    const checkText = input => {
        const wrap = $(input).closest('.input'),
            inputLen = $(input).val().length;

        if (inputLen !== 0) {
            formAccepted(wrap);
            return true;
        } else {
            formError(wrap, 'Это поле нужно заполнить');
            return false;
        }
    }

    const checkTel = input => {
        const wrap = $(input).closest('.input'),
            inputLen = $(input).val().length;

        if (inputLen == 17) {
            formAccepted(wrap);
            return true;
        } else if (inputLen < 17 && inputLen !== 0) {
            formError(wrap, 'Это поле заполнено неверно');
            return false;
        } else if (inputLen == 0) {
            formError(wrap, 'Это поле нужно заполнить');
            return false;
        }
    }

    const checkEmail = input => {
        const pattern = /^[a-z0-9_-]+@[a-z0-9-]+\.([a-z]{1,6}\.)?[a-z]{2,6}$/i,
            acceptPattern = $(input).val().search(pattern),
            wrap = $(input).closest('.input'),
            inputLen = $(input).val().length;

        if (acceptPattern == 0) {
            formAccepted(wrap);
            return true;
        } else if (acceptPattern == -1 && inputLen !== 0) {
            formError(wrap, 'Это поле заполнено неверно');
            return false;
        } else {
            formError(wrap, 'Это поле нужно заполнить');
            return false;
        }
    }

    inputs.each(function (i, item) {
        const isTel = $(item).attr('type') == 'tel',
            isEmail = $(item).attr('type') == 'email',
            isText = $(item).attr('type') == 'text';

        $(item).on('blur', function () {
            if (isTel) {
                checkTel(item);
            } else if (isEmail) {
                checkEmail(item);
            } else if (isText) {
                checkText(item);
            }
        })
    })

    form.on('submit', function (e) {
        e.preventDefault();

        if (checkEmail($('#p_email')) && checkTel($('#p_tel')) && checkText($('#p_company')) && checkText($('#p_region'))) {
            const name = $('#p_name').val().trim(),
                tel = $('#p_tel').val().trim(),
                email = $('#p_email').val().trim(),
                company = $('#p_company').val().trim(),
                region = $('#p_region').val().trim(),
                action = $(this).attr('action');

            $.ajax({
                url: action,
                type: 'POST',
                cache: false,
                data: {
                    'name': name,
                    'email': email,
                    'tel': tel,
                    'company': company,
                    'region': region
                },
                dataType: 'html',
                success: function (res) {
                    console.log(res);

                    form.fadeOut(300, function () {
                        formSuccess.fadeIn(300).css('display', 'flex');
                    });

                    setTimeout(() => {
                        formSuccess.fadeOut(300, function () {
                            form.fadeIn(300);
                        });
                    }, 4000);
                }
            });
        }
    });
});
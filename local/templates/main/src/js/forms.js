import * as $ from 'jquery'

document.addEventListener("DOMContentLoaded", function () {
    // маска для телефона
    function setCursorPosition(pos, elem) {
        elem.focus();
        if (elem.setSelectionRange) elem.setSelectionRange(pos, pos);
        else if (elem.createTextRange) {
            const range = elem.createTextRange();
            range.collapse(true);
            range.moveEnd("character", pos);
            range.moveStart("character", pos);
            range.select()
        }
    }

    function mask(event) {
        let matrix = "+7 (___) ___ ____",
            i = 0,
            def = matrix.replace(/\D/g, ""),
            val = this.value.replace(/\D/g, "");
        if (def.length >= val.length) val = def;
        this.value = matrix.replace(/./g, function (a) {
            return /[_\d]/.test(a) && i < val.length ? val.charAt(i++) : i >= val.length ? "" : a
        });
        if (event.type == "blur") {
            if (this.value.length == 2) this.value = ""
        } else setCursorPosition(this.value.length, this)
    };
    const input = document.querySelector('input[type="tel"]');
    input.addEventListener("input", mask, false);
    input.addEventListener("focus", mask, false);
    input.addEventListener("blur", mask, false);

});

$(document).ready(function () {
    // проверки и вывод сообщений
    const formAccepted = parent => {
        $(parent).removeClass('form_error');
        $(parent).addClass('form_accepted');
    }

    const formError = (parent, message) => {
        $(parent).removeClass('form_accepted');
        $(parent).addClass('form_error');
        $(parent).find('.error_message').text(message);
    }

    const checkTel = input => {
        const wrap = $(input).closest('.input'),
            inputLen = $(input).val().length;

        if (inputLen == 17) {
            formAccepted(wrap)
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
            formAccepted(wrap)
            return true;
        } else if (acceptPattern == -1 && inputLen !== 0) {
            formError(wrap, 'Это поле заполнено неверно');
            return false;
        } else {
            formError(wrap, 'Это поле нужно заполнить');
            return false;
        }
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

    // форма тест-драйв
    const tdForm = $('.test-drive form'),
        tdFormSuccess = $('.test-drive-success'),
        tdInputs = tdForm.find('input:not([type="text"])');

    tdInputs.each(function (i, item) {
        const isTel = $(item).attr('type') == 'tel',
            isEmail = $(item).attr('type') == 'email';

        $(item).on('blur', function () {
            if (isTel) {
                checkTel(item);
            } else if (isEmail) {
                checkEmail(item);
            }
        })
    })

    tdForm.on('submit', function (e) {
        e.preventDefault();

        if (checkEmail($('#td_email')) && checkTel($('#td_tel'))) {
            const name = $('#td_name').val().trim(),
                tel = $('#td_tel').val().trim(),
                email = $('#td_email').val().trim(),
                comment = $('#td_comment').val().trim(),
                action = $(this).attr('action');

            $.ajax({
                url: action,
                type: 'POST',
                cache: false,
                data: {
                    'name': name,
                    'email': email,
                    'tel': tel,
                    'comment': comment
                },
                dataType: 'html',
                success: function (res) {
                    console.log(res);
                    
                    tdForm.fadeOut(300, function () {
                        tdFormSuccess.fadeIn(300).css('display', 'flex');
                    });

                    setTimeout(() => {
                        tdFormSuccess.fadeOut(300, function () {
                            tdForm.fadeIn(300);
                        });
                    }, 4000);
                }
            });
        }
    });

    // форма заказа
    const productForm = $('#product-modal form'),
        productFormSuccess = $('#product-modal .product-modal-success'),
        productInputs = productForm.find('input:not(#p_name)');

    productInputs.each(function (i, item) {
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

    productForm.on('submit', function (e) {
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

                    productForm.fadeOut(300, function () {
                        productFormSuccess.fadeIn(300).css('display', 'flex');
                    });

                    setTimeout(() => {
                        productFormSuccess.fadeOut(300, function () {
                            productForm.fadeIn(300);
                        });
                    }, 4000);
                }
            });
        }
    });
});
import * as $ from 'jquery'

document.addEventListener("DOMContentLoaded", function () {
    // mask
    function setCursorPosition(pos, elem) {
        elem.focus();
        if (elem.setSelectionRange) elem.setSelectionRange(pos, pos);
        else if (elem.createTextRange) {
            var range = elem.createTextRange();
            range.collapse(true);
            range.moveEnd("character", pos);
            range.moveStart("character", pos);
            range.select()
        }
    }

    function mask(event) {
        var matrix = "+7 (___) ___ ____",
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
    var input = document.querySelector('input[type="tel"]');
    input.addEventListener("input", mask, false);
    input.addEventListener("focus", mask, false);
    input.addEventListener("blur", mask, false);

});

$(document).ready(function () {
    // form
    var form = $('.test-drive form'),
        formSuccess = $('.test-drive-success'),
        inputs = form.find('input:not([type="text"])');

    function formAccepted(parent) {
        $(parent).removeClass('form_error');
        $(parent).addClass('form_accepted');
    }

    function formError(parent, message) {
        $(parent).removeClass('form_accepted');
        $(parent).addClass('form_error');
        $('.error_message').text(message);
    }

    function checkTel(input) {
        var wrap = $(input).closest('.input'),
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

    function checkEmail(input) {
        var pattern = /^[a-z0-9_-]+@[a-z0-9-]+\.([a-z]{1,6}\.)?[a-z]{2,6}$/i,
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

    inputs.each(function (i, item) {
        var isTel = $(item).attr('type') == 'tel',
            isEmail = $(item).attr('type') == 'email';

        $(item).on('blur', function () {
            if (isTel) {
                checkTel(item);
            } else if (isEmail) {
                checkEmail(item);
            }
        })
    })



    form.on('submit', function (e) {
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
import * as $ from 'jquery'
import './header'
import './first-slider'
import './animations'
import './form'
import './catalog'


document.addEventListener("DOMContentLoaded", () => {
    // Остановить анимацию во время изменения размера окна
    let resizeTimer;
    window.addEventListener("resize", () => {
        document.body.classList.add("resize-animation-stopper");
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            document.body.classList.remove("resize-animation-stopper");
        }, 400);
    });

    // запрет на вытягивание картинок
    $("img, a").on("dragstart", function (event) { event.preventDefault(); });
});
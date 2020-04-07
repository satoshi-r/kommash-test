import * as $ from 'jquery'
import './header'
import './first-slider'
import './animations'
import './forms'
import './catalog'
import './product-slider'
import './product'


document.addEventListener("DOMContentLoaded", () => {
    // запрет на вытягивание картинок
    $("img, a").on("dragstart", function (event) { event.preventDefault(); });
});
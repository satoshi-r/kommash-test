import * as $ from 'jquery'
import './header'
import './first-slider'
import './animations'
import './forms'
import './catalog'
import './product-slider'
import './product'
import './pdf'


$(document).ready(function name() {
    // запрет на вытягивание картинок
    $("img, a").on("dragstart", function (event) { event.preventDefault(); });
});
    

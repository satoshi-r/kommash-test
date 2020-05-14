import pdfMake from "pdfmake/build/pdfmake";
import pdfFonts from "pdfmake/build/vfs_fonts";
pdfMake.vfs = pdfFonts.pdfMake.vfs;

// видос https://webformyself.com/pdfmake-prostoe-sozdanie-pdf-dokumentov-ispolzuya-javascript/
// примеры https://github.com/bpampuch/pdfmake/tree/0.1/examples
// дока https://pdfmake.github.io/docs/getting-started/client-side/

const docInfo = {
    info: {
        title: 'Каталог',
        author: 'kommash',
        subject: 'catalog',
        keywords: 'keywords'
    },
    pageSize: 'A4',
    pageMargin: [50, 50, 30, 60],

    header: function (currentPage, pageCount) {
        return {
            text: currentPage.toString() + ' из ' + pageCount,
            alignment: 'right',
            margin: [0, 30, 10, 50]
        }
    },

    content: [
        {
            table: {
                width: ['*', 'auto', 150, '*'],

                body: [
                    [{
                        image: 'data:image/jpeg;base64,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'
                        ,width: 100,
                        height: 50
                    }, 
                    {
                        text: 'KO-440B1-01',
                        alignment: 'center'
                    }, 'Задняя', 'Камаз', '22', '5375кг']
                ],
                headerRows: 1
            }
        },
        
    ],

    footer: [{
        text: 'нижний колонтитул',
        alignment: 'center'
    }]
};


const readyPdf = pdfMake.createPdf(docInfo); // сформировать
document.getElementById('open-pdf').addEventListener('click', () => readyPdf.open({}, window)); // открыть

// скачать
// pdfMake.createPdf(docInfo).download('kommash.pdf');
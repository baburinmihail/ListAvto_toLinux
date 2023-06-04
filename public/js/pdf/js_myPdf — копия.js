
var docInfo = {
    info: {
        title:'Тестовый документ PDF',
        author:'admin-khk037',
        subject: 'GSM_list',
        keywords: 'Ключевые слова'
    },

    pageSize:'A4',
    pageOrientation: 'portrait',//'landscape'
    pageMargins: [50,50,30,60],//отступы

    header:function(currentPage,pageCount){
        return {
            text: currentPage.toString() + 'из' + pageCount,
            alignment:'right',
            margin:[0,30,10,50],
        }
    },

    footer:[
        {
            text:'нижний колонтитул',
            alignment:'center'
        }
    ],
    //пример текста
    content:[
        {
            text: 'Текст определенного параграфа',
            style: 'header2',
            //pageBreak:'after'//разрыв страницы
        },
    //пример колонки      
        {
            columns:[

                {
                    width:'*',
                    text:'Текст колонки №2'
                },

                {
                    width:'25%',
                    text:'Текст колонки №2'
                },

                {
                    width:'auto',
                    text:'Текст колонки №1'
                },


            ],
            columnGap: 20
        },
    //пример таблицы    
        {
            table:{
                widths:['*','auto',150,'*'],

                body:[
                    ['Первая','Вторая','Третья','Четвертая'],
                    ['Первая','Вторая','Третья','Четвертая'],
                    [{text:'текстовое содержимое', bold:true},'Вторая','Третья','Четвертая'],
                ],

                headerRows:1//шапка
            }
        },
    //пример списков    
        {
            ul:[
                'Пункт 1',
                'Пункт 2',
                'Пункт 3',
                'Пункт 4',
                {
                    text:'Пункт 5',
                    bold: true,
                }
            ]
        },
        {
            ol:[
                'Пункт 1',
                'Пункт 2',
                'Пункт 3',
                'Пункт 4',
                {
                    text:'Пункт 5',
                    bold: true,
                }
            ]
        },
    ],

    styles:{
        header2:{
            fontSize:20,
            bold:true,
            alignment:'right',
        }
    }
}

pdfMake.createPdf(docInfo).download('name.pdf');
let now = new Date().toLocaleString();
let marka = document.querySelector('#car_name').value
let nomer = document.querySelector('#state_number').value
let prichep = "Прицеп № АК 4223";
let vodila = document.querySelector('#drivers_fio').value
let udostoverenia = "99.08.934479"
let spedomentrOrigin = document.querySelector('#speedometer_end').value
let mehanik = "Курлович Н.В."
let markaTopliva = "АИ-92"
let vodila3 =vodila.split(" ");
let vodila2 = vodila3[0]+" "+(vodila3[1]).slice(0, 1 )+"."+(vodila3[2]).slice(0, 1 )+".";
let gsm_start= document.querySelector('#received_gsm_initially').value
let ostatok= document.querySelector('#remainder_gsm_end').value;
let norm= document.querySelector('#consumption_rate').value
//let mileage2 = document.querySelector('#speedometer_end').value




var docInfo = {
    info: {
        title:'Тестовый документ PDF',
        author:'admin-khk037',
        subject: 'GSM_list',
        keywords: 'Ключевые слова'
    },

    pageSize:'A4',
    pageOrientation: 'portrait',//'landscape'
    pageMargins: [50,20,30,20],//отступы

    header:function(currentPage,pageCount){
        return {
            //text: currentPage.toString() + 'из' + pageCount,
            //alignment:'right',
            //margin:[0,30,10,50],
        }
    },

    footer:[
        {
            //text:'нижний колонтитул',
            //alignment:'center'
        }
    ],
    //пример текста
    content:[

        {
            text: 'ПУТЕВОЙ ЛИСТ',
            style: 'timesNew',
            //pageBreak:'after'//разрыв страницы
        },

        {
            width:'*',
            text:'',
        },

    //пример колонки      
        {
            columns:[

                {
                    width:'60%',
                    text:'_____________________________',
                },

                {
                    width:'25%',
                    text: now,
                    color: 'red',
                },

                {
                    width:'*',
                    text:'№ 1335',
                    color: 'red',
                },

            ],
            columnGap: 20
        },

        {
            columns:[

                {
                    width:'60%',
                    text:'(Специального или легкового)',
                    fontSize:8,
                },

                {
                    width:'25%',
                    text:'(месяц, квартал, период)',
                    fontSize:8,  
                },

                {
                    width:'*',
                    text:'',
                    lineHeight: 1.5,
                },
                

            ],
            columnGap: 20
        },


        {
            text: 'г.Черногорск',
            //pageBreak:'after'//разрыв страницы
            lineHeight: 1.5,
        },


        {
            text: 'Организвция: филиал ООО "СУЭК-Хакасия" - Промтранс, 655162 Республика Хакасия ', 
            fontSize:12,
            lineHeight: 0.7,
              
        },
        {
            text:'------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------',
            fontSize:8,
        },
        {
            text: 'г.Черногорск, ул.Красных партизан 2А тел. 35-5-35;6-37-17, ОГРН 1071903000773', 
            fontSize:12, 
            lineHeight: 0.7,
        },
        {
            text:'------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------',
            fontSize:8,
        },

        {
            columns:[

                {
                    width:'25%',
                    text:'Марка автобуса:',
                    fontSize:12,
                    lineHeight: 0.7,
                },

                {
                    width:'*',
                    text: marka,
                    fontSize:12,
                    lineHeight: 0.7,
                    color: 'red',
                },

            ],
            columnGap: 20
        },

        {
            columns:[

                {
                    width:'25%',
                    text:' ',
                    fontSize:12,
                },

                {
                    text:'-----------------------------------------------------------------------------------------------------',
                    fontSize:12,
                    
                },
                

            ],
            columnGap: 20
        },

        {
            columns:[

                {
                    width:'30%',
                    text:'Государственный знак №:',
                    fontSize:12,
                    lineHeight: 0.7,
                },

                {
                    width:'*',
                    text: nomer,
                    fontSize:12,
                    lineHeight: 0.7,
                    color: 'red',
                },

            ],
            columnGap: 20
        },

        {
            columns:[

                {
                    width:'25%',
                    text:' ',
                    fontSize:12,
                },

                {
                    text:'-----------------------------------------------------------------------------------------------------',
                    fontSize:12,
                    
                },
                

            ],
            columnGap: 20
        },

        {
            columns:[

                {
                    width:'40%',
                    text:'Специальное оборудование',
                    fontSize:12,
                    lineHeight: 0.7,
                },

                {
                    width:'*',
                    text: prichep,
                    fontSize:12,
                    lineHeight: 0.7,
                    color: 'red',
                },

            ],
            columnGap: 20
        },

        {
            columns:[

                {
                    width:'25%',
                    text:' ',
                    fontSize:12,
                },

                {
                    text:'-----------------------------------------------------------------------------------------------------',
                    fontSize:12,
                    
                },
                

            ],
            columnGap: 20
        },


        {
            columns:[

                {
                    width:'40%',
                    text:'Водитель',
                    fontSize:12,
                    lineHeight: 0.7,
                },

                {
                    width:'*',
                    text: vodila,
                    fontSize:12,
                    lineHeight: 0.7,
                    color: 'red',
                },

            ],
            columnGap: 20
        },

        {
            columns:[

                {
                    width:'25%',
                    text:' ',
                    fontSize:12,
                },

                {
                    text:'-----------------------------------------------------------------------------------------------------',
                    fontSize:12,
                    
                },
                

            ],
            columnGap: 20
        },

        {
            columns:[

                {
                    width:'40%',
                    text:'Удостоверение №',
                    fontSize:10,
                },

                {
                    width:'*',
                    text: udostoverenia,
                    fontSize:10,
                    color: 'red',
                },

            ],
            columnGap: 20
        },


        {
            width:'25%',
            text:' ',
            fontSize:12,
        },

//предрейсовый осмотр
        {
            
            columns:[

                {
                    width:'35%',
                    text:'Предрейсовый медосмотр',
                    fontSize:10,
                    lineHeight: 0.7,
                },

                {
                    width:'*',
                    text: '_________',
                    fontSize:12,
                },

                {
                    width:'*',
                    text: '_________',
                    fontSize:12,
                },

                {
                    width:'*',
                    text: '_________',
                    fontSize:12,
                },

                {
                    width:'*',
                    text: '_________',
                    fontSize:12,
                },
                
                {
                    width:'*',
                    text: '_________',
                    fontSize:12,
                },

            ],
            columnGap: 20
        },


        {
            
            columns:[

                {
                    width:'35%',
                    text:' ',
                    fontSize:12,
                    lineHeight: 0.7,
                },

                {
                    width:'*',
                    text: '(отметка)',
                    fontSize:6,
                },

                {
                    width:'*',
                    text: '(дата время)',
                    fontSize:6,
                },

                {
                    width:'*',
                    text: '(должность)',
                    fontSize:6,
                },

                {
                    width:'*',
                    text: '(подпись)',
                    fontSize:6,
                },
                
                {
                    width:'*',
                    text: '(расшифровка подписи)',
                    fontSize:6,
                },

            ],
            columnGap: 20
        },

//послерейсовый осмотр
        {
            
            columns:[

                {
                    width:'35%',
                    text:'Послерейсовый медосмотр',
                    fontSize:10,
                    lineHeight: 0.7,
                },

                {
                    width:'*',
                    text: '_________',
                    fontSize:12,
                },

                {
                    width:'*',
                    text: '_________',
                    fontSize:12,
                },

                {
                    width:'*',
                    text: '_________',
                    fontSize:12,
                },

                {
                    width:'*',
                    text: '_________',
                    fontSize:12,
                },
                
                {
                    width:'*',
                    text: '_________',
                    fontSize:12,
                },

            ],
            columnGap: 20
        },


        {
            
            columns:[

                {
                    width:'35%',
                    text:' ',
                    fontSize:12,
                    lineHeight: 1.5,
                },

                {
                    width:'*',
                    text: '(отметка)',
                    fontSize:6,
                    lineHeight: 1.5,
                },

                {
                    width:'*',
                    text: '(дата время)',
                    fontSize:6,
                    lineHeight: 1.5,
                },

                {
                    width:'*',
                    text: '(должность)',
                    fontSize:6,
                    lineHeight: 1.5,
                },

                {
                    width:'*',
                    text: '(подпись)',
                    fontSize:6,
                    lineHeight: 1.5,
                },
                
                {
                    width:'*',
                    text: '(расшифровка подписи)',
                    fontSize:6,
                    lineHeight: 1.5,
                },

            ],
            columnGap: 20
        },

        {
            table:{
                widths:['50%','*'],

                body:[
                    [  {text:'Задание водителю:',fontSize:12,alignment:'center', bold: true,}   ,   {text:'Автобус технически исправен:',fontSize:12,alignment:'center', bold: true,}   ],
                    [  {text:'РХ, Черногорск-Абакан-Белый яр',fontSize:10,alignment:'center',}  ,   {columns:[{width:'70%',text:'Показания спидометра, км',fontSize:10,alignment:'center',},  {text:spedomentrOrigin,color:'red',fontSize:10,alignment:'center', },],  columnGap: 20},  ],                                                   
                ],

                headerRows:1//шапка
            }     
            
        },

        {text:' ',fontSize:12,  },

        {
            
            columns:[

                {
                    width:'15%',
                    text:'Адрес стоянки:',
                    fontSize:9,
                    //lineHeight: 0.7,
                },

                {
                    width:'35%',
                    text: 'г.Черногорск, ул.Автомобильная,5А',
                    fontSize:9,
                },

                {
                    width:'25%',
                    text: 'Автобус передал механик',
                    fontSize:9,
                },

                {
                    width:'8%',
                    text: '_______',
                    fontSize:9,
                },

                {
                    width:'*',
                    text: mehanik,
                    fontSize:9,
                    color:'red',
                },
                

            ],
            columnGap: 5
        },

        {
            
            columns:[

                {
                    width:'15%',
                    text:' ',
                    fontSize:9,
                    //lineHeight: 0.7,
                },

                {
                    width:'35%',
                    text: ' ',
                    fontSize:9,
                },

                {
                    width:'25%',
                    text: ' ',
                    fontSize:9,
                },

                {
                    width:'8%',
                    text: '(подпись)',
                    fontSize:6,
                },

                {
                    width:'*',
                    text: '(расшифровка)',
                    fontSize:6,
            
                },
                

            ],
            columnGap: 5
        },

        {
            
            columns:[

                {
                    width:'50%',
                    text:'Маршруты движения:',
                    fontSize:12,
                    bold: true,
                    alignment:'center',
                    lineHeight: 1.5,
                    //lineHeight: 0.7,
                },

                {
                    width:'50%',
                    text: 'Автобус в технически исправном состоянии ',
                    fontSize:10,
                    alignment:'center',
                    lineHeight: 1.5,
                },  

            ],
            columnGap: 5
        },


        {
            
            columns:[

                {
                    width:'50%',
                    text:' ',
                    fontSize:12,
                    bold: true,
                    alignment:'center',
                    //lineHeight: 0.7,
                },

                {
                    width:'25%',
                    text: 'Водитель',
                    fontSize:10,
                    alignment:'center',
                },


                {
                    width:'8%',
                    text: '_______',
                    fontSize:9,
                },

                {
                    width:'*',
                    text: vodila2,
                    fontSize:9,
                    color:'red',
                },
     

            ],
            columnGap: 5
        },

        {
            
            columns:[

                {
                    width:'50%',
                    text:'___________________________________________',
                    fontSize:12,
                    bold: true,
                    alignment:'center',
                    //lineHeight: 0.7,
                },

                {
                    width:'25%',
                    text: ' ',
                    fontSize:9,
                },


                {
                    width:'8%',
                    text: '(подпись)',
                    fontSize:6,
                },

                {
                    width:'*',
                    text: '(расшифровка)',
                    fontSize:6,
            
                },
                

            ],
            columnGap: 5
        },

        {
            text: ' ',
            
        },
        {
            text: ' ',
            
        },

        {
            
            columns:[

                {
                    width:'50%',
                    text:'___________________________________________',
                    fontSize:12,
                    bold: true,
                    alignment:'center',
                    
                },

                {
                    width:'25%',
                    text: 'Горючее',
                    fontSize:10,
                    alignment:'center',
                },

                {
                    table:{
                        widths:['50%','*'],
        
                        body:[
                            [  {text:'Марка',fontSize:10,alignment:'center', }   ,   {text:'Код',fontSize:10,alignment:'center',}   ],
                            [  {text:markaTopliva,fontSize:10,alignment:'center', color: 'red', }   ,   {text:' ',fontSize:10,alignment:'center',}   ],
             
                        ],
        
                    }     
                    
                },
     

            ],
            columnGap: 5
        },

        {
            text: ' ',
            
        },

        {
            
            columns:[

                {
                    width:'50%',
                    text:'___________________________________________',
                    fontSize:12,
                    bold: true,
                    alignment:'center',
                    lineHeight: 1.5,
                    //lineHeight: 0.7,
                },

                {
                    width:'50%',
                    text: 'Движение горючего',
                    fontSize:12,
                    alignment:'center',
                    bold:true,
                    lineHeight: 1.5,
                },

     

            ],
            columnGap: 5
        },

        {
            
            columns:[

                {
                    width:'25%',
                    text:'Регион движения:',
                    fontSize:10,
                    alignment:'center',
                    //lineHeight: 0.7,
                },

                {
                    width:'25%',
                    text:'_______________',
                    fontSize:10,
                    bold: true,
                    alignment:'center',
                    lineHeight: 1.5,
                    //lineHeight: 0.7,
                },

                {
                    width:'25%',
                    text: ' ',
                    fontSize:10,
                    alignment:'center',
                    lineHeight: 1.5,
                    
                },

                {
                    width:'25%',
                    text: 'Количество, л',
                    fontSize:10,
                    alignment:'center',
                    lineHeight: 1.5,
                    
                },

     

            ],
            columnGap: 5
        },

        {
            
            columns:[

                {
                    width:'50%',
                    text:'Общее время работы:',
                    fontSize:12,
                    alignment:'center',
                    bold: true,
                    lineHeight: 0.7,
                },
                

                {
                    width:'25%',
                    text:'Выдано:',
                    fontSize:10,
                    lineHeight: 0.7,
                    alignment:'center',
                },

                {
                    width:'25%',
                    text: gsm_start,
                    fontSize:10,
                    alignment:'center',
                    color:'red',
                    lineHeight: 0.7,
                    
                },


            ],
            columnGap: 5
        },

        {
            
            columns:[

                {
                    width:'50%',
                    text:' ',
                    fontSize:12,
                    alignment:'center',
                    bold: true,
                    //lineHeight: 0.7,
                },
                

                {
                    width:'25%',
                    text:' ',
                    fontSize:12,
                    //lineHeight: 0.7,
                },

                {
                    width:'25%',
                    text: '---------------------------------------------------------------------',
                    fontSize:4,
                    alignment:'center',
                    
                    
                },


            ],
            columnGap: 1
        },



        {
            
            columns:[

                {
                    width:'10%',
                    text:'Автобуса:',
                    fontSize:10,
                    lineHeight: 1.5,
                },

                {
                    width:'25%',
                    text:'_________________',
                    fontSize:12,
                    alignment:'center',
                    lineHeight: 1.5,
                },

                {
                    width:'15%',
                    text:'часов',
                    fontSize:10,
                    alignment:'center',
                    lineHeight: 1.5,
                },
                

                {
                    width:'25%',
                    text:'Приобретено:',
                    fontSize:10,
                    alignment:'center',
                    lineHeight: 1.5,
                },

                {
                    width:'25%',
                    text:'_________________',
                    fontSize:10,
                    alignment:'center',
                    lineHeight: 1.5,
                    
                },


            ],
            columnGap: 5
        },,
        {
            
            columns:[

                {
                    width:'10%',
                    text:'Водитель:',
                    fontSize:10,
                    lineHeight: 0.7,
                },

                {
                    width:'25%',
                    text:'_________________',
                    fontSize:12,
                    alignment:'center',
                    lineHeight: 0.7,
                },

                {
                    width:'15%',
                    text:'часов',
                    fontSize:10,
                    alignment:'center',
                    lineHeight: 0.7,
                },
                

                {
                    width:'25%',
                    text:'Остаток:',
                    fontSize:10,
                    alignment:'center',
                    lineHeight: 0.7,
                },

                {
                    width:'25%',
                    text:ostatok,
                    fontSize:10,
                    alignment:'center',
                    color: 'red',
                    lineHeight: 0.7,
                },


            ],
            columnGap: 5
        },

        {
            
            columns:[

                {
                    width:'10%',
                    text:'',
                    fontSize:10,
                    //lineHeight: 0.7,
                },

                {
                    width:'25%',
                    text:' ',
                    fontSize:12,
                    alignment:'center',
                    //lineHeight: 0.7,
                },

                {
                    width:'15%',
                    text:' ',
                    fontSize:10,
                    alignment:'center',
                    //lineHeight: 0.7,
                },
                

                {
                    width:'25%',
                    text:' ',
                    fontSize:10,
                    alignment:'center',
                    //lineHeight: 0.7,
                },

                {
                    width:'25%',
                    text: '---------------------------------------------------------------------',
                    fontSize:4,
                    alignment:'center',
                },


            ],
            columnGap: 5
        },

        {
            
            columns:[

                {
                    width:'10%',
                    text:'Водитель:',
                    fontSize:10,
                    lineHeight: 0.7,
                },

                {
                    width:'25%',
                    text:'_________________',
                    fontSize:12,
                    alignment:'center',
                    lineHeight: 0.7,
                },

                {
                    width:'15%',
                    text:'часов',
                    fontSize:10,
                    alignment:'center',
                    lineHeight: 0.7,
                },
                

                {
                    width:'25%',
                    text:'Расход по норме:',
                    fontSize:10,
                    alignment:'center',
                    lineHeight: 0.7,
                },

                {
                    width:'25%',
                    text:norm,
                    fontSize:10,
                    alignment:'center',
                    color: 'red',
                    lineHeight: 0.7,
                },


            ],
            columnGap: 5
        },

        {
            
            columns:[

                {
                    width:'10%',
                    text:'',
                    fontSize:10,
                    //lineHeight: 0.7,
                },

                {
                    width:'25%',
                    text:' ',
                    fontSize:12,
                    alignment:'center',
                    //lineHeight: 0.7,
                },

                {
                    width:'15%',
                    text:' ',
                    fontSize:10,
                    alignment:'center',
                    //lineHeight: 0.7,
                },
                

                {
                    width:'25%',
                    text:' ',
                    fontSize:10,
                    alignment:'center',
                    //lineHeight: 0.7,
                },

                {
                    width:'25%',
                    text: '---------------------------------------------------------------------',
                    fontSize:4,
                    alignment:'center',
                },


            ],
            columnGap: 5
        },

        {
            
            columns:[

                {
                    width:'10%',
                    text:'Водитель:',
                    fontSize:10,
                    lineHeight: 0.7,
                },

                {
                    width:'25%',
                    text:'_________________',
                    fontSize:12,
                    alignment:'center',
                    lineHeight: 0.7,
                },

                {
                    width:'15%',
                    text:'часов',
                    fontSize:10,
                    alignment:'center',
                    lineHeight: 0.7,
                },
                

                {
                    width:'25%',
                    text:'Расход по факту:',
                    fontSize:10,
                    alignment:'center',
                    lineHeight: 0.7,
                },

                {
                    width:'25%',
                    text:'_________________',
                    fontSize:10,
                    alignment:'center',
                    lineHeight: 1.5,
                    
                },


            ],
            columnGap: 5
        },

        {
            
            columns:[

                {
                    width:'50%',
                    text:'Прочие отметки:',
                    fontSize:10,
                    lineHeight: 0.7,
                },


                {
                    width:'25%',
                    text:'Экономия:',
                    fontSize:10,
                    alignment:'center',
                    lineHeight: 0.7,
                },

                {
                    width:'25%',
                    text:'_________________',
                    fontSize:10,
                    alignment:'center',
                    lineHeight: 1.5,
                    
                },


            ],
            columnGap: 5
        },

        
        {
            
            columns:[

                {
                    width:'50%',
                    text:'_____________________________________________________',
                    fontSize:10,
                    lineHeight: 1.5,
                },


                {
                    width:'25%',
                    text:'Перерасход:',
                    fontSize:10,
                    alignment:'center',
                    lineHeight: 1.5,
                },

                {
                    width:'25%',
                    text:'_________________',
                    fontSize:10,
                    alignment:'center',
                    lineHeight: 1.5,
                    
                },


            ],
            columnGap: 5
        },

        {
            
            columns:[

                {
                    width:'55%',
                    text:'_____________________________________________________',
                    fontSize:10,
                    lineHeight: 1.5,
                },


                {
                    width:'25%',
                    text:'Автобус принял.',
                    fontSize:10,
                    
                    lineHeight: 1.5,
                },

                {
                    width:'20%',
                    text:' ',
                    fontSize:10,
                    alignment:'center',
                    lineHeight: 1.5,
                    
                },


            ],
            columnGap: 5
        },

        {
            
            columns:[

                {
                    width:'55%',
                    text:'_____________________________________________________',
                    fontSize:10,
                    lineHeight: 1.5,
                },


                {
                    width:'25%',
                    text:'Показания спидометра',
                    fontSize:10,
                    
                    lineHeight: 1.5,
                },

                {
                    width:'20%',
                    text:' ',
                    fontSize:10,
                    alignment:'center',
                    lineHeight: 1.5,
                    
                },


            ],
            columnGap: 5
        },

        {
            
            columns:[

                {
                    width:'55%',
                    text:'_____________________________________________________',
                    fontSize:10,
                    lineHeight: 1.5,
                },


                {
                    width:'25%',
                    text:'при возвращении в гараж',
                    fontSize:10,
                    
                    lineHeight: 1.5,
                },

                {
                    width:'20%',
                    text:'____________',
                    fontSize:10,
                    alignment:'center',
                    lineHeight: 1.5,
                    
                },


            ],
            columnGap: 5
        },

        {
            
            columns:[

                {
                    width:'25%',
                    text:'Автобус сдал водитель',
                    fontSize:10,
                    lineHeight: 0.9,
                },


                {
                    width:'10%',
                    text:'_________',
                    fontSize:10,
                    
                    lineHeight: 0.9,
                },

                {
                    width:'20%',
                    text:vodila2,
                    fontSize:10,
                    alignment:'center',
                    lineHeight: 0.9,
                    color:'red',
                    
                },

                {
                    width:'15%',
                    text:'Механик',
                    fontSize:10,
                    lineHeight: 0.9,
                },


                {
                    width:'10%',
                    text:'_________',
                    fontSize:10,
                    
                    lineHeight: 0.9,
                },

                {
                    width:'20%',
                    text:mehanik,
                    fontSize:10,
                    alignment:'center',
                    lineHeight: 0.9,
                    color:'red',
                    
                },


            ],
            columnGap: 5
        },

        {
            
            columns:[

                {
                    width:'25%',
                    text:'',
                    fontSize:10,
                    lineHeight: 1.8,
                },


                {
                    width:'10%',
                    text:'(подпись)',
                    fontSize:6,
                    
                    lineHeight: 1.8,
                },

                {
                    width:'20%',
                    text:'(Расшифровка)',
                    fontSize:6,
                    alignment:'center',
                    lineHeight: 1.8,
   
                    
                },

                {
                    width:'15%',
                    text:'',
                    fontSize:10,
                    lineHeight: 1.8,
                },


                {
                    width:'10%',
                    text:'(подпись)',
                    fontSize:6,
                    
                    lineHeight: 1.8,
                },

                {
                    width:'20%',
                    text:'(Расшифровка)',
                    fontSize:6,
                    alignment:'center',
                    lineHeight: 1.8,
                    
                },


            ],
            columnGap: 5
        },

        {
            
            columns:[

                {
                    width:'55%',
                    text:'М.П.',
                    fontSize:10,
                    lineHeight: 1.5,
                    bold:true,
                },

                {
                    width:'25%',
                    text:'Остаток при возврате',
                    fontSize:10,
                    
                    lineHeight: 1.5,
                },

                {
                    width:'20%',
                    text:'______________',
                    fontSize:10,
                    alignment:'center',
                    lineHeight: 1.5,
                    
                },


            ],
            columnGap: 5
        },

        
        {
            
            columns:[

                {
                    width:'56%',
                    text:' ',
                    fontSize:10,
                    lineHeight: 1.5,
                    bold:true,
                },

                {
                    width:'14%',
                    text:'Пройдено, км',
                    fontSize:10,
                    
                    lineHeight: 1.5,
                },

                {
                    width:'15%',
                    text:'_________',
                    fontSize:10,
                    alignment:'center',
                    lineHeight: 1.5,
                    
                },

                {
                    width:'15%',
                    text:'за часы, руб.',
                    fontSize:10,
                    alignment:'center',
                    lineHeight: 1.5,
                    
                },


            ],
            columnGap: 5
        },

        

    ],

    styles:{
        header2:{
            fontSize:20,
            bold:true,
            alignment:'right',
        },

        timesNew:{
            fontSize:18,
            alignment:'center',
        }
    }
}


 
    pdfMake.createPdf(docInfo).download('List.pdf');
   


let trs = document.querySelectorAll('.object');
let lengthArray = trs.length;

let my_mark = (trs[2].querySelectorAll('td')[3]).textContent;
let mark = trs[3].querySelectorAll('td')[2].textContent;


let my_nomer = (trs[2].querySelectorAll('td')[4]).textContent;
let nomer = trs[3].querySelectorAll('td')[4].textContent;

let my_data = (trs[2].querySelectorAll('td')[12]).textContent;
let data = trs[3].querySelectorAll('td')[2].textContent;

let choice1 = 0;
let choice2 = 0;
let choice3 = 0;

console.log(my_mark);
console.log(my_nomer);
console.log(my_data);


for (let i = 0; i < lengthArray; i++) {

    mark =  trs[i].querySelectorAll('td')[3].textContent;
    nomer =  trs[i].querySelectorAll('td')[4].textContent;
    data =  trs[i].querySelectorAll('td')[12].textContent;

    choice1 = 0;
    choice2 = 0;
    choice3 = 0;
    choice4 = 0;

    console.log("значение="+mark);

    if (my_mark === mark) {
        console.log("Истина-марка"+mark);
        choice1 = choice1 + 1;
    }else{
        console.log("Лож-марка"+mark);
    }

    if (my_nomer === nomer) {
        console.log("Истина-номер"+nomer);
        choice2 = choice2 + 1;
    }else{
        console.log("Лож-номер"+nomer);
    }

    if (my_data >= data) {
        console.log("Истина-Время"+data);
        choice3 = choice3 + 1;
    }else{
        console.log("Лож-Время"+data);
    }

    choice4 = choice1 + choice2 + choice3;

    console.log("choice1="+choice1);
    console.log("choice2="+choice2);
    console.log("choice3="+choice3);
    console.log("choice4="+choice4);

    if ( choice4 === 3 ){
        console.log("Удалять");
        break

    }else {
        console.log("Не удалять");
    }


}

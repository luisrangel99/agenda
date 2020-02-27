'use strict'

// it takes all the div's which are called 'textBoxes'
var allBoxes = document.getElementsByClassName('textBoxes');

// this bucle what it does is adding an eventListener for every box and
// it changes the box's color and background
for(let i in allBoxes){
    allBoxes[i].addEventListener('click', function(){
        if(allBoxes[i].style.color == 'white'){
            allBoxes[i].style.background = 'rgb(66, 54, 94)';
            allBoxes[i].style.color = 'black';
        }else{
            allBoxes[i].style.background = 'red';
            allBoxes[i].style.color = 'white';
        }
    });
}

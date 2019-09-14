


// ------------------SLIDER----------------------------
arraySlider = Array ('../recursos/slider1.jpg','../recursos/slider2.jpg','../recursos/slider3.jpg');
var i = 0;
function slider(){
    document.slider.src = arraySlider[i];
    if(i < arraySlider.length -1){
        i++;
    } else {
        i=0;
    }

    setTimeout("slider()", 3000);
}


window.onload = slider(); 

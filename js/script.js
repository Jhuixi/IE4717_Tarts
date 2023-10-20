var img = document.getElementById('img');

var slides = ['image/1.4.jpg','image/1.5.jpg',' image/1.6.jpg'];

var Start=0;

function slider(){
    if(Start<slides.length){
        Start=Start+1;
    }
    else{
        Start=1;
    }
    console.log(img);
    img.innerHTML = "<img src="+slides[Start-1]+">";
   
}

setInterval(slider,2000);
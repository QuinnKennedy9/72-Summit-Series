(function(){

var vid = document.querySelector('#splashVideo');
var screenWidth = window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth||0;
var toggleSound = document.querySelector('#toggleSound');
var fade = document.querySelector('#fade');
function toggleVideo(){
if(screenWidth>=(16*40)){
  if(!vid.classList.contains('play')){
    vid.classList.add('play');
    vid.style.display = "block";
    vid.src ="vid/hockey.mp4";
    vid.play();
    vid.parentNode.style.background = "#000";
    console.log("show video");
    toggleSound.style.display = "block";
  }
}else{
  if(vid.classList.contains('play')){
    vid.pause();
    vid.muted = true;
    fade.style.display = "block";
    TweenLite.to(fade,0.5,{opacity:1});
    toggleSound.style.display = "none";
    toggleSound.classList.toggle('muted');
    vid.classList.remove('play');
    vid.style.display = "none";
    vid.parentNode.style.background = "url('img/ACTION-1.jpg')"
    vid.parentNode.style.backgroundRepeat = "no-repeat";
    vid.parentNode.style.backgroundSize= "cover";
    console.log("hide video");
  }
}
}



toggleSound.classList.add('muted');

toggleSound.addEventListener('click',function(event){
  event.preventDefault();
  if(toggleSound.classList.contains('muted')){
    toggleSound.querySelector('img').src="img/mute.png";
      vid.muted = false;
    TweenLite.to(fade,0.5,{opacity:0,onComplete:function(){
      fade.style.display = "none";
    }});
  }else{
    vid.muted = true;
    toggleSound.querySelector('img').src="img/unmute.png";
    fade.style.display = "block";
    var fitTexts = document.querySelectorAll('.fitText');
    for(var o=0;o<fitTexts.length;o++){
      fitText(fitTexts[o], 0.8 ,{ minFontSize: '32px', maxFontSize: '160px' });
    }
    TweenLite.to(fade,0.5,{opacity:1});
  }
  toggleSound.classList.toggle('muted');
},false);

function offsetVideo(){
  console.log("offsetting video");
  var vidStyles = window.getComputedStyle(vid);
  var w = vidStyles.width;
  if(w==="auto"){
    vid.height = window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight||0;
    w = vid.height*16/9;
  }
  w = parseInt(w);
  var offset;
  if(w>screenWidth){
    offset = (w-screenWidth)/2;
  }else{
    offset=0;
  }
  // console.log(-offset);
  TweenLite.to(vid,0.2,{left:-offset});
}
window.addEventListener('resize',function(){
  screenWidth = window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth||0;
  offsetVideo();
  toggleVideo();
},false);

offsetVideo();
toggleVideo();
})();

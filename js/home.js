(function(){

var vid = document.querySelector('#splashVideo');
var screenWidth = window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth||0;
function toggleVideo(){
var toggleSound = document.querySelector('#toggleSound');
var fade = document.querySelector('#fade');

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



toggleSound.addEventListener('click',function(event){
  event.preventDefault();
  toggleSound.classList.toggle('muted');
  if(toggleSound.classList.contains('muted')){
    toggleSound.innerHTML = "MUTE";
    vid.muted = false;
    TweenLite.to(fade,0.5,{opacity:0,onComplete:function(){
      fade.style.display = "none";
    }});
  }else{
    vid.muted = true;
    toggleSound.innerHTML = "UNMUTE";
    fade.style.display = "block";
    TweenLite.to(fade,0.5,{opacity:1});
  }
},false);

function offsetVideo(){
  console.log("offsetting video");
  var vidStyles = window.getComputedStyle(vid);
  var w = vidStyles.width;
  if(w==="auto"){
    w = 1400;
  }
  w = parseInt(w);
  var offset;
  if(w>screenWidth){
    offset = (w-screenWidth)/2;
  }else{
    offset=0;
  }
  // console.log(-offset);
  TweenLite.to(vid,1,{left:-offset});
}
window.addEventListener('resize',function(){
  screenWidth = window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth||0;
  offsetVideo();
  toggleVideo();
},false);

offsetVideo();
toggleVideo();
})();

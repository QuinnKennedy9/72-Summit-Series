var scrollTop = window.pageYOffset || (document.documentElement || document.body.parentNode || document.body).scrollTop;
function TrollScroll(el,params){
  var element = el;
  var styles = window.getComputedStyle(element),
    orgTop = styles.getPropertyValue('top');
  var upOrDown, speed, stop,ease;
  if(!params.stop){
    stop = null;
  }else{
    stop = params.stop+parseInt(orgTop);
  }
  if(!params.speed){
    speed = 1;
  }else{
    speed = params.speed;
  }
  if(params.direction.includes("up")){
    upOrDown = -1;
  }
  if(params.direction.includes("down")){
    upOrDown = 1;
  }
  function parallax(element){
    element.style.position = "relative !important";
    var scrollit = parseInt(orgTop) + upOrDown*(scrollTop*speed/100);
    if(scrollit > stop && stop!=null){
      element.style.top = stop + "px";
    }else{
      element.style.top = scrollit + "px";
    }
  }
  window.addEventListener('scroll',function(){
    parallax(element);
  },false);
}

function goTo(el){
  var s = window.getComputedStyle(el);
  elTop = el.offsetTop;
  // console.log(scrollTop);
  var diff = 0;
  scrollTop = window.pageYOffset || (document.documentElement || document.body.parentNode || document.body).scrollTop;
  diff = elTop - scrollTop;
  var easeScroll = 0;
  var totalScroll = diff;
  console.log(totalScroll + ": totalScroll");
  function scroll(){
    scrollTop = window.pageYOffset || (document.documentElement || document.body.parentNode || document.body).scrollTop;
    diff = elTop - scrollTop;
    console.log(diff);
    // console.log(scrollTop);
    // console.log(diff);
    // var f = 1;
    if(diff>70 && !((window.innerHeight + scrollTop) >= document.body.offsetHeight)){
      if(diff > totalScroll/2){
        if(easeScroll<1){
          easeScroll+=0.01;
        }
      }else{
        if(easeScroll>0){
          easeScroll-=0.01;
        }
      }
      window.scroll(0,scrollTop+(totalScroll/100*easeScroll));
      setTimeout(scroll,2);
    }
  }
  scroll();
}


window.addEventListener('scroll',function(){
  scrollTop = window.pageYOffset || (document.documentElement || document.body.parentNode || document.body).scrollTop;
},false);

// var b = document.querySelector('#viewMore');
// b.addEventListener('click',function(e){
//   e.preventDefault();
//   goTo(document.querySelector('#gallery'));
// },false);

(function(){
  var g = new TrollScroll(document.querySelector('.banner'),{speed:70});
var bphotos = ["ACTION-5.jpg", "ACTION-9.jpg", "action-12.jpg", "linedup.jpg"];
var rand = bphotos[Math.floor(Math.random() * bphotos.length)];
var background = document.querySelector(".back-img");
var swapText = ["Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering animata corpora quaeritis. Summus brains sit​​, morbo vel maleficia? De apocalypsi gorger omero undead survivor dictum mauris. Hi mindless mortuis soulless creaturas, imo evil stalking monstra adventus resi dentevil vultus comedat cerebella viventium. Qui animated corpse, cricket bat max brucks terribilem incessu zomby. The voodoo sacerdos flesh eater, suscitat mortuos comedere carnem virus. Zonbi tattered for solum oculi eorum defunctis go lum cerebro. Nescio brains an Undead zombies. Sicut malus putrid voodoo horror. Nigh tofth eliv ingdead."
,"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non aliquam libero, ac mollis felis. Integer aliquam erat nibh, pretium venenatis dolor rutrum eu. Quisque sed volutpat nulla, vitae viverra magna. Aliquam at eros et tellus tempor semper nec ac purus. Sed faucibus lectus id libero molestie, vel pharetra turpis porta. Donec sagittis sit amet massa quis accumsan. Mauris tincidunt lectus nisl, in viverra nibh vehicula vel. Phasellus malesuada turpis id iaculis vehicula.",
"Bacon ipsum dolor amet cupim porchetta filet mignon pork belly chicken pancetta pork chop, turducken salami. Hamburger beef leberkas landjaeger, ham hock picanha cupim ground round flank andouille. Biltong sausage kielbasa jowl flank fatback turkey sirloin chicken corned beef tongue ham. Jerky fatback cow pork chop shoulder."];
var option1 = document.querySelector("#education");
var option2 = document.querySelector("#entertainment");
var option3 = document.querySelector("#charity")

var mainT = document.querySelector("#contentText")

function randBack(){
  document.querySelector(".back-img").style.backgroundImage="url(img/"+rand+")";
  console.log(background.src)
}
function swap1(event){
  console.log(mainT)
  event.preventDefault();
  mainT.innerHTML = swapText[0];
}
function swap2(event){
  event.preventDefault();
  mainT.innerHTML = swapText[1];
}
function swap3(event){
  event.preventDefault();
  mainT.innerHTML = swapText[2];
}

window.addEventListener("load",randBack, false);
option1.addEventListener("click", swap1, false);
option2.addEventListener("click", swap2, false);
option3.addEventListener("click", swap3, false);

})();

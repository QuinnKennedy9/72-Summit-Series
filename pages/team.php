<?php
$page = 'team';
?>
<section id="splash" class="">
  <h2 class="hidden">The Team</h2>
  <div id="fade">
  <div class="banner">
    <!-- <img id="logo" src="img/logo.png" alt=""> -->
    <div class="spacer"></div>
    <div class="back">
    <div class="fitText">THE TEAM</div>
    </div>
  <div class="callToAction">
    <h4 class="subheading">TOGETHER EVERY MINUTE</h4>
    <a href="#team" class="scroller white arrow">SCROLL</a>
  </div>
</div>
</div>
<div class="back-img"></div>
<?php
$dd = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ";
$teamMembers = [
  ["Ed Johnston","johnston_head.jpg","001",$dd],
  ["Gary Bergman","bergman_head.jpg","002",$dd],
  ["Pat Stapleton","stapleton_head.jpg","003",$dd],
  ["Bobby Or","orr_head.jpg","004",$dd],
  ["Brad Park","park_head.jpg","005",$dd],
  ["Ron Ellis","ellis_head.jpg","006",$dd],
  ["Phil Esposito","esposito_p_head.jpg","007",$dd],
  ["Rod Gilbert","gilbert_head.jpg","008",$dd],
  ["Bill Goldsworthy","goldsworthy_head.jpg","009",$dd],
  ["Dennis Hull","hull_head.jpg","010",$dd],
  ["Vic Hadfield","hadfield_head.jpg","011",$dd],
  ["Yvan Cournoyer","cournoyer_head.jpg","012",$dd],
  ["Wayne Cashman","cashman_head.jpg","014",$dd],
  ["Red Berenson","berenson_head.jpg","015",$dd],
  ["Rod Seiling","seiling_head.jpg","016",$dd],
  ["Bill White","white_head.jpg","017",$dd],
  ["Jean Ratelle","ratelle_head.jpg","018",$dd],
  ["Paul Henderson","henderson_head.jpg","019",$dd],
  ["Peter Mahovlich","mahovlich_2_head.jpg","020",$dd],
  ["Stan Mikita","mikita_head.jpg","021",$dd],
  ["Jean-Paul Parisé","parise_head.jpg","022",$dd],
  ["Serge Savard","savard_head.jpg","023",$dd],
  ["Mickey Redmond","redmond_head.jpg","024",$dd],
  ["Guy Lapointe","lapointe_head.jpg","025",$dd],
  ["Don Awrey","awrey_head.jpg","026",$dd],
  ["Frank Mahovlich","mahovlich_head.jpg","027",$dd],
  ["Bobby Clarke","clarke_head.jpg","028",$dd],
  ["Ken Dryden","dryden_head.jpg","029",$dd],
  ["Dale Tallon","tallon_head.jpg","030",$dd],
  ["Gilbert Perreault","perreault_head.jpg","031",$dd],
  ["Marcel Dionne","dionne_head.jpg","032",$dd],
  ["Tony Esposito","esposito_head.jpg","033",$dd],
  ["Richard Martin","martin_head.jpg","034",$dd],
  ["Jocelyn Guevremont","guevremont_head.jpg","035",$dd],
  ["Brian Glennie","glennie_head.jpg","036",$dd],
];
?>

</section>
<section id="team">
  <div class="inner">
  <?php foreach($teamMembers as $player):?>
    <div class="player clearfix">
      <div class="left">
        <img src="img/team/<?php echo $player[1]?>" alt="<?php echo $player[0]?>">
        <div class="num">#<?php echo $player[2]?></div>
      </div>
      <div class="right">
      <div class="name"><?php echo $player[0]?></div>
      <div class="description"><p><?php echo $player[3]?></p></div>
    </div>
    </div>
  <?php endforeach;?>
</div>
</section>

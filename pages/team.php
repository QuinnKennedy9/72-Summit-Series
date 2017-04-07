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
$teamMembers = [
  ["Ed Johnston","johnston_head.jpg","001","DESCRIPTION"],
  ["Gary Bergman","bergman_head.jpg","002","DESCRIPTION"],
  ["Pat Stapleton","stapleton_head.jpg","003","DESCRIPTION"],
  ["Bobby Or","orr_head.jpg","004","DESCRIPTION"],
  ["Brad Park","park_head.jpg","005","DESCRIPTION"],
  ["Ron Ellis","ellis_head.jpg","006","DESCRIPTION"],
  ["Phil Esposito","esposito_p_head.jpg","007","DESCRIPTION"],
  ["Rod Gilbert","gilbert_head.jpg","008","DESCRIPTION"],
  ["Bill Goldsworthy","goldsworthy_head.jpg","009","DESCRIPTION"],
  ["Dennis Hull","hull_head.jpg","010","DESCRIPTION"],
  ["Vic Hadfield","hadfield_head.jpg","011","DESCRIPTION"],
  ["Yvan Cournoyer","cournoyer_head.jpg","012","DESCRIPTION"],
  ["Wayne Cashman","cashman_head.jpg","014","DESCRIPTION"],
  ["Red Berenson","berenson_head.jpg","015","DESCRIPTION"],
  ["Rod Seiling","seiling_head.jpg","016","DESCRIPTION"],
  ["Bill White","white_head.jpg","017","DESCRIPTION"],
  ["Jean Ratelle","ratelle_head.jpg","018","DESCRIPTION"],
  ["Paul Henderson","henderson_head.jpg","019","DESCRIPTION"],
  ["Peter Mahovlich","mahovlich_2_head.jpg","020","DESCRIPTION"],
  ["Stan Mikita","mikita_head.jpg","021","DESCRIPTION"],
  ["Jean-Paul Parisé","parise_head.jpg","022","DESCRIPTION"],
  ["Serge Savard","savard_head.jpg","023","DESCRIPTION"],
  ["Mickey Redmond","redmond_head.jpg","024","DESCRIPTION"],
  ["Guy Lapointe","lapointe_head.jpg","025","DESCRIPTION"],
  ["Don Awrey","awrey_head.jpg","026","DESCRIPTION"],
  ["Frank Mahovlich","mahovlich_head.jpg","027","DESCRIPTION"],
  ["Bobby Clarke","clarke_head.jpg","028","DESCRIPTION"],
  ["Ken Dryden","dryden_head.jpg","029","DESCRIPTION"],
  ["Dale Tallon","tallon_head.jpg","030","DESCRIPTION"],
  ["Gilbert Perreault","perreault_head.jpg","031","DESCRIPTION"],
  ["Marcel Dionne","dionne_head.jpg","032","DESCRIPTION"],
  ["Tony Esposito","esposito_head.jpg","033","DESCRIPTION"],
  ["Richard Martin","martin_head.jpg","034","DESCRIPTION"],
  ["Jocelyn Guevremont","guevremont_head.jpg","035","DESCRIPTION"],
  ["Brian Glennie","glennie_head.jpg","036","DESCRIPTION"],
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

<nav onclick="menuKlik();" id="menu">
  <div onclick="menuKlik();" id="parent-menu-bar">
  <div onclick="menuKlik();" class="menu-bar"></div>
  <div onclick="menuKlik();" class="menu-bar"></div>
  <div onclick="menuKlik();" class="menu-bar"></div>
</div>
<div id="center-menu">
  <?php if($i == 1) {echo'<div class="menu-list"><a style="color: #2798d1;" href="/">Home</a></div>';} else { echo'<div class="menu-list"><a href="/">Home</a></div>';}?>
  <?php if($i == 2) {echo'<div class="menu-list"><a style="color: #2798d1;" href="prijzen">Prijzen</a></div>';} else { echo'<div class="menu-list"><a href="prijzen">Prijzen</a></div>';}?>
  <?php if($i == 3) {echo'<div class="menu-list"><a style="color: #2798d1;" href="contact">Contact</a></div>';} else { echo'<div class="menu-list"><a href="contact">Contact</a></div>';}?>
</div>

</nav>
<nav id="menu-slide">
  <?php if($i == 1) {echo'<div class="menu-item"><a style="color: #2798d1;" href="/">Home</a></div>';} else { echo'<div class="menu-item"><a href="/">Home</a></div>';}?>
  <?php if($i == 2) {echo'<div class="menu-item"><a style="color: #2798d1;" href="prijzen">Prijzen en handige links</a></div>';} else { echo'<div class="menu-item"><a href="prijzen">Prijzen en handige links</a></div>';}?>
  <?php if($i == 3) {echo'<div class="menu-item"><a style="color: #2798d1;" href="contact">Neem contact op</a></div>';} else { echo'<div class="menu-item"><a href="contact">Neem contact op</a></div>';}?>
</nav>
<div onclick="menuKlik();" id="menu-dark"></div>

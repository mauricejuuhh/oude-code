<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="3 days">
    <meta name="language" content="nl">
    <meta name="web_author" content="Maurice de Jong">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Medisch pedicure Annalies de Jong">

    <link rel="manifest" href="/manifest.json">
    <link rel="canonical" href="http://medischpedicureheiloo.nl/contact" />

    <link rel="icon" sizes="192x192" href="/images/icon.png">
    <meta name="theme-color" content="#2798D1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Medisch pedicure Annalies de Jong - Contact</title>
      <meta name="description" content="Contact opnemen kunt u doen via de telefoon, maar ook via de formlier via de website.">
      <meta name="keywords" content="medisch pedicure, pedicure, heiloo, annalies de jong, voetverzorging, reuma, diabetisch, westerweg, kennemerstraatweg, oosterzijweg, vergoed door verzekeraars, pedicure vergoed, nagelbeugels, castricum, limmen, provoet, annalies,gediplomeerd, alkmaar, egmond">

      <meta property="og:url" content="http://www.medischpedicureheiloo.nl/contact">
      <meta property="og:title" content="Medisch pedicure Annalies de Jong - Contact">
      <meta property="og:image" content="http://medischpedicureheiloo.nl/images/medisch-pedicure-annalies.jpg">
      <meta property="og:site_name" content="medischpedicureheiloo.nl">
      <meta property="og:type" content="website">
      <meta property="og:description" content="Voor een afspraak kunt u mij bellen op 072-5331731. U kunt mij het beste bellen rond 18.00 uur.  Overdag  kunt u ook altijd inspreken, ik bel  u dan zo spoedig mogelijk terug.">

  </head>
  <body>
<?php $i = 3;?>
<?php include 'menu.php'; ?>

<div id="pf"><img id="mam" src="/images/medisch-pedicure-annalies.jpg" alt="Medisch pedicure Annalies Wester" title="Medisch pedicure Annalies Wester" /></div>
<div class="block">
<br><br>
<section>
<h1>Voor een afspraak kunt u mij bellen op 072-5331731.</h1>
U kunt mij het beste bellen rond 18.00 uur.<br> Overdag  kunt u ook altijd inspreken, ik bel  u dan zo spoedig mogelijk terug.<br>
</section>
<br>
<section>
<h2>Of neem contact op per email</h2>
<?php if (isset($_POST['submit'])) {
  $to = "johnliesdejong@ziggo.nl";
$subject = "Nieuwe aanmelding van " . $_POST['voornaam'];
$txt = 'Er is een nieuwe aanmelding!

Voornaam: ' . $_POST['voornaam'] . '
Achternaam: ' . $_POST['achternaam'] . '
Email: ' . $_POST['email'] . '
Telefoon: ' . $_POST['telefoon'] . '
Adres: ' . $_POST['adres'] . '
Plaats: ' . $_POST['plaats'] . '
Reactie: ' . $_POST['reactie'] . '';
$headers = "From: medischpedicureheiloo.nl";

mail($to,$subject,$txt,$headers);
  echo 'De contact formulier is succesvol verstuurd.<br>Er wordt binnenkort contact met u opgenomen.';
} else {
    echo '
<form method="post" action="contact.php">
  <table>
<tr><td><label for="idvoornaam">Voornaam:</label></td> <td><input id="idvoornaam" type="text" required autofocus name="voornaam"></td></tr>
<tr><td><label for="idachternaam">Achternaam:</label></td> <td><input id="idachternaam" type="text" required name="achternaam"></td></tr>
<tr><td><label for="idemail">Email:</label></td> <td><input id="idemail" type="email" required name="email"></td></tr>
<tr><td><label for="idtelefoon">Telefoon:</label></td> <td><input id="idtelefoon" type="text" required name="telefoon"></td></tr>
<tr><td><label for="idadres">Adres:</label></td> <td><input id="idadres" type="text" required name="adres"></td></tr>
<tr><td><label for="idplaats">Plaats:</label></td> <td><input id="idplaats" type="text" required name="plaats"></td></tr>
<tr><td><label for="idreactie">Reactie:</label></td> <td><textarea style="width: 167px; height: 50px;" id="idreactie" name="reactie"></textarea></td></tr>
<tr><td></td> <td><input type="submit" name="submit" value="verstuur"></td></tr>
  </table>
</form>
';
}
?>
</section>
<div style="clear:both;"></div>
</div>
<br>
<link media="(min-width:769px)" rel="stylesheet" type="text/css" href="/css/style.css">
<link media="(max-width:768px)" rel="stylesheet" type="text/css" href="/css/mob-style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
<script src="/scripts/mob-menu.js" async></script>
  </body>
</html>

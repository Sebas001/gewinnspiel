<link rel="stylesheet" media="screen" href="css/template1.css" />

<!-- multistep form -->
<form id="msform"  method="post" action="validatetest2.php">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Adress Schritt 1</li>
    <li class="active">Adress Schritt 2</li>
    <li>Angebote</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Gewinnen Sie jetzt</h2>
    <h3 class="fs-subtitle">Dies ist Schritt 2</h3>


Strasse : <input type="text" name="strasse" placeholder="Strasse" value="{$strassevalue}" style="border-color: {$strasseemptyornot}" />


Ort :<input type="text" name="ort" placeholder="Ort" value="{$ortvalue}" style="border-color: {$ortemptyornot}"><br />


PLZ: <input type="text" name="plz" placeholder="PLZ" size="30" value="{$plzvalue}" style="border-color: {$plzemptyornot}"><br />


Geburtsdatum: <input type="text" name="geburtsdatum" placeholder="Geburtsdatum" size="30" value="" style="border-color: {$textemptyornot}"><br />
<br>
    
   
<input type="submit" name="next" class="next action-button" value="Weiter">

</fieldset>
</form>

<br />
<br />



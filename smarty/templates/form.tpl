 <link rel="stylesheet" media="screen" href="css/template1.css" />

<!-- multistep form -->
<form id="msform"  method="post" action="validatetest.php">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Adress Schritt 1</li>
    <li>Adress Schritt 2</li>
    <li>Angebote</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Gewinnen Sie jetzt</h2>
    <h3 class="fs-subtitle">Dies ist Schritt 1</h3>

Vorname : <input type="text" name="vorname" placeholder="Vorname" value="{$vornamevalue}" style="border-color: {$vornameemptyornot}" />

Nachname :<input type="text" name="nachname" placeholder="Nachname" value="{$nachnamevalue}" style="border-color: {$nachnameemptyornot}"><br />

Email: <input type="text" name="email" placeholder="Email" size="30" value="{$emailvalue}" style="border-color: {$emailemptyornot}"><br />

<div class="checkboxes" id="checkboxwrapper1" style="margin-top:3px; background-color:red">
<input type="checkbox" id="x1" name="agb1" {$agb1checked}  style="float:left; width:40px"/> <label for="x1" style="color: {$agb1sacceptedornot}">AGB Eins</label>
</div>
<br>

<div class="checkboxes" id="checkboxwrapper2" style="margin-top:8px; background-color:yellow">
<input type="checkbox" id="x2" name="agb2" {$agb2checked}  style="float:left; width:40px"/> <label for="x2" style="color: {$agb2sacceptedornot}">AGB Zwei</label>
</div>
   
<input type="submit" name="next" class="next action-button" value="Weiter">
    
</fieldset>

</form>

<br />
<br />





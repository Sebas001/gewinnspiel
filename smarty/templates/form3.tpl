 <link rel="stylesheet" media="screen" href="css/template1.css" />

<!-- multistep form -->
<form id="msform"  method="post" action="validatetest3.php">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Adress Schritt 1</li>
    <li class="active">Adress Schritt 2</li>
    <li class="active">Angebote</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Gewinnen Sie jetzt</h2>
    <h3 class="fs-subtitle">Dies ist Schritt 3</h3>


<div class="radioboxes" id="checkboxwrapper1" style="margin-top:3px;">
<input type="radio" id="x1" name="angebote" vaLue="Angebot 1" style="float:left; width:40px"/> <label for="x1" style="float: left;">Angebot 1</label>
</div>
<br>

<div class="radioboxes" id="checkboxwrapper2" style="margin-top:8px;">
<input type="radio" id="x2" name="angebote" vaLue="Angebot 2" style="float:left; width:40px"/> <label for="x2" style="float: left;">Angebot 2</label>
</div>
<br>

<div class="radioboxes" id="checkboxwrapper3" style="margin-top:8px;">
<input type="radio" id="x3" name="angebote" vaLue="Angebot 3" style="float:left; width:40px"/> <label for="x3" style="float: left;">Angebot 3</label>
</div>

   
<input type="submit" name="next" class="next action-button" value="Weiter">


</fieldset>
</form>

<br />
<br />




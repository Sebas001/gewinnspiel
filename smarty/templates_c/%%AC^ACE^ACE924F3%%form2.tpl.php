<?php /* Smarty version 2.6.31, created on 2018-08-24 14:33:12
         compiled from form2.tpl */ ?>
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


Strasse : <input type="text" name="strasse" placeholder="Strasse" value="<?php echo $this->_tpl_vars['strassevalue']; ?>
" style="border-color: <?php echo $this->_tpl_vars['strasseemptyornot']; ?>
" />


Ort :<input type="text" name="ort" placeholder="Ort" value="<?php echo $this->_tpl_vars['ortvalue']; ?>
" style="border-color: <?php echo $this->_tpl_vars['ortemptyornot']; ?>
"><br />


PLZ: <input type="text" name="plz" placeholder="PLZ" size="30" value="<?php echo $this->_tpl_vars['plzvalue']; ?>
" style="border-color: <?php echo $this->_tpl_vars['plzemptyornot']; ?>
"><br />


Geburtsdatum: <input type="text" name="geburtsdatum" placeholder="Geburtsdatum" size="30" value="" style="border-color: <?php echo $this->_tpl_vars['textemptyornot']; ?>
"><br />
<br>
    
   
<input type="submit" name="next" class="next action-button" value="Weiter">

</fieldset>
</form>

<br />
<br />


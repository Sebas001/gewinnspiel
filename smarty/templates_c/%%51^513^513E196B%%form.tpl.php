<?php /* Smarty version 2.6.31, created on 2018-08-24 13:56:19
         compiled from form.tpl */ ?>
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

Vorname : <input type="text" name="vorname" placeholder="Vorname" value="<?php echo $this->_tpl_vars['vornamevalue']; ?>
" style="border-color: <?php echo $this->_tpl_vars['vornameemptyornot']; ?>
" />

Nachname :<input type="text" name="nachname" placeholder="Nachname" value="<?php echo $this->_tpl_vars['nachnamevalue']; ?>
" style="border-color: <?php echo $this->_tpl_vars['nachnameemptyornot']; ?>
"><br />

Email: <input type="text" name="email" placeholder="Email" size="30" value="<?php echo $this->_tpl_vars['emailvalue']; ?>
" style="border-color: <?php echo $this->_tpl_vars['emailemptyornot']; ?>
"><br />

<div class="checkboxes" id="checkboxwrapper1" style="margin-top:3px; background-color:red">
<input type="checkbox" id="x1" name="agb1" <?php echo $this->_tpl_vars['agb1checked']; ?>
  style="float:left; width:40px"/> <label for="x1" style="color: <?php echo $this->_tpl_vars['agb1sacceptedornot']; ?>
">AGB Eins</label>
</div>
<br>

<div class="checkboxes" id="checkboxwrapper2" style="margin-top:8px; background-color:yellow">
<input type="checkbox" id="x2" name="agb2" <?php echo $this->_tpl_vars['agb2checked']; ?>
  style="float:left; width:40px"/> <label for="x2" style="color: <?php echo $this->_tpl_vars['agb2sacceptedornot']; ?>
">AGB Zwei</label>
</div>
   
<input type="submit" name="next" class="next action-button" value="Weiter">
    
</fieldset>

</form>

<br />
<br />




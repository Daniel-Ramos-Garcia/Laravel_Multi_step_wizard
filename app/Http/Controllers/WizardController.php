<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class WizardController extends Controller
{
    public function index(){
        return view('wizard');
    }
    public function wizard1(){
        $userid = session('userid');

        $user = DB::select("SELECT * FROM `tbusers` WHERE `UserID`='$userid'");
        return view('wizard1', compact('user'));
        // return view('wizard1');
    }
    public function multistepwizardsubmit(Request $request){
        $userid = session('userid');

        $gender = $request['genderTxt'];
        $birth_day = $request['birth_day'];
        $birth_month = $request['birth_month'];
        $birth_year = $request['birth_year'];
        $city = $request['city'];
        $street = $request['street'];
        $street_no = $request['street_no'];
        $userDesc = $request['userDesc'];
        $nativeLangTxt = $request['nativeLangTxt'];
        $UserDataBirthDate = $birth_year.'-'.$birth_month.'-'.$birth_day;

        $roleTxt = $request['roleTxt'];
        $AdRefType = 0;
        if($roleTxt=='parent'){
            $AdRefType = 1;
            $childGenderTxt = $request['childGenderTxt'];
            $cbirth_day = $request['cbirth_day'];
            $cbirth_month = $request['cbirth_month'];
            $cbirth_year = $request['cbirth_year'];
            $addChildDescChk = $request['addChildDescChk'];
            $addChildDescTxt = $request['addChildDescTxt'];
            $bbirth_day = $request['bbirth_day'];
            $bbirth_month = $request['bbirth_month'];
            $bbirth_year = $request['bbirth_year'];
            $babyexpeChk = $request['babyexpeChk'];
            $babyexpeDesc = $request['babyexpeDesc'];
            $calmChk = $request['calmChk'];
            $energeticChk = $request['energeticChk'];
            $quietChk = $request['quietChk'];
            $talkativeChk = $request['talkativeChk'];
            $creativeChk = $request['creativeChk'];
            $sportyChk = $request['sportyChk'];
            $curiousChk = $request['curiousChk'];
            $funnyChk = $request['funnyChk'];
            $mishChk = $request['mishChk'];
            $stubChk = $request['stubChk'];
            $occasChk = $request['occasChk'];
            $regularChk = $request['regularChk'];
            $mm = $request['mm'];
            $ma = $request['ma'];
            $me = $request['me'];
            $tum = $request['tum'];
            $tua = $request['tua'];
            $tue = $request['tue'];
            $wm = $request['wm'];
            $wa = $request['wa'];
            $we = $request['we'];
            $thm = $request['thm'];
            $tha = $request['tha'];
            $the = $request['the'];
            $fm = $request['fm'];
            $fa = $request['fa'];
            $fe = $request['fe'];
            $sam = $request['sam'];
            $saa = $request['saa'];
            $sae = $request['sae'];
            $sum = $request['sum'];
            $sua = $request['sua'];
            $sue = $request['sue'];
            $afterschoolTxt = $request['afterschoolTxt'];
            $groceriesChk = $request['groceriesChk'];
            $cookingChk = $request['cookingChk'];
            $drivingChk = $request['drivingChk'];
            $choresChk = $request['choresChk'];
            $homeworkChk = $request['homeworkChk'];
            $compulsoryChk = $request['compulsoryChk'];
            $specializedChk = $request['specializedChk'];
            // $price4eurChk = $request['price4eurChk'];
            // $price8to10Chk = $request['price8to10Chk'];
            // $price4to6Chk = $request['price4to6Chk'];
            // $price10eurChk = $request['price10eurChk'];
            // $price6to8Chk = $request['price6to8Chk'];
            // $priceNegotiableChk = $request['priceNegotiableChk'];
            // $price8to10Chk = $request['price8to10Chk'];
            $AdRefPriceRange = 0;
            $willingpriceTxt = $request['willingpriceTxt'];
            $pricerange = DB::select("SELECT * FROM `tbpriceranges` WHERE `RangeName`='$willingpriceTxt'");
            $AdRefPriceRange = $pricerange[0]->RangeID;
            $currenttime = date("Ymdhis");
            $parentPicUpdUrlName = '';
            if ($request->hasFile('parentPicUpd')) {
                $parentPicUpd = $request->file('parentPicUpd');
                $parentPicUpdExtension = $parentPicUpd->getClientOriginalExtension();
                $parentPicUpdName = $currenttime . ".".$parentPicUpdExtension;
                $imgDestinationPath = 'uploads/img';
                $parentPicUpdUrlName = $imgDestinationPath . '/'. $parentPicUpdName; 
                $parentPicUpd->move($imgDestinationPath, $parentPicUpdName);
            }
            $parentVideoUpdUrlName = '';
            if ($request->hasFile('parentVideoUpd')) {
                $parentVideoUpd = $request->file('parentVideoUpd');
                $parentVideoUpdExtension = $parentVideoUpd->getClientOriginalExtension();
                $parentVideoUpdName = $currenttime . "." . $parentVideoUpdExtension;
                $videoDestinationPath = 'uploads/video';
                $parentVideoUpdUrlName = $videoDestinationPath . '/'. $parentVideoUpdName; 
                $parentVideoUpd->move($videoDestinationPath, $parentVideoUpdName);
            }
            $UserDataFacebookVerified = 0;
            $tbuserpersonaldataInsertSql = "INSERT INTO `tbuserpersonaldata`(`UserDataRefUserID`, `UserDataGender`, `UserDataBirthDate`, `UserDataAddressCity`, `UserDataAddressStreet`, `UserDataAddressNumber`, `UserDataSelfDescription`, `UserDataLanguage`, `UserDataFacebookVerified`, `UserDataProfileImagePath`, `UserDataProfileVideoSelfiePath`) 
                                                                    VALUES ('$userid','$gender','$UserDataBirthDate','$city','$street','$street_no','$userDesc','$nativeLangTxt','$UserDataFacebookVerified','$parentPicUpdUrlName','$parentVideoUpdUrlName')";
            DB::insert($tbuserpersonaldataInsertSql);
            $ChildBirthDate = $cbirth_year.'-'.$cbirth_month.'-'.$cbirth_day;
            $ChildSpecialNeeds = 0;
            if($addChildDescChk == 'on'){
                $ChildSpecialNeeds = 1;
            }
            $ChildIsCalm = 0;
            if($calmChk == 'on'){
                $ChildIsCalm = 1;
            }
            $ChildIsQuiet = 0;
            if($quietChk == 'on'){
                $ChildIsQuiet = 1;
            }
            $ChildIsCreative = 0;
            if($creativeChk == 'on'){
                $ChildIsCreative = 0;
            }
            $ChildIsCurios = 0;
            if($curiousChk == 'on'){
                $ChildIsCurios = 1;
            }
            $ChildIsEnergetic = 0;
            if($energeticChk == 'on'){
                $ChildIsEnergetic = 1;
            }
            $ChildIsTalkative = 0;
            if($talkativeChk == 'on'){
                $ChildIsTalkative = 1;
            }
            $ChildIsSporty = 0;
            if($sportyChk == 'on'){
                $ChildIsSporty = 1;
            }
            $ChildIsFunny = 0;
            if($funnyChk == 'on'){
                $ChildIsFunny = 1;
            }
            $ChildIsStubborn = 0;
            if($stubChk == 'on'){
                $ChildIsStubborn = 1;
            }
            $tbchildrenInsertSql = "INSERT INTO `tbchildren`(`ChildRefUserID`, `ChildGender`, `ChildBirthDate`, `ChildSpecialNeeds`, `ChildSpecialNeedsDescription`, `ChildIsCalm`, `ChildIsQuiet`, `ChildIsCreative`, `ChildIsCurios`, `ChildIsEnergetic`, `ChildIsTalkative`, `ChildIsSporty`, `ChildIsFunny`, `ChildIsStubborn`) 
                VALUES ('$userid','$childGenderTxt','$ChildBirthDate','$ChildSpecialNeeds','$addChildDescTxt','$ChildIsCalm','$ChildIsQuiet','$ChildIsCreative','$ChildIsCurios','$ChildIsEnergetic','$ChildIsTalkative','$ChildIsSporty','$ChildIsFunny','$ChildIsStubborn')"; 
            DB::insert($tbchildrenInsertSql);
            $BabyExpecDate = $bbirth_year.'-'.$bbirth_month.'-'.$bbirth_day;
            $BabyExpecSpecialNeeds = 0;
            if($babyexpeChk == 'on'){
                $BabyExpecSpecialNeeds = 1;
            }
            $tbbabyexpecInsertSql = "INSERT INTO `tbbabyexpec`(`BabyExpecRefUserID`, `BabyExpecDate`, `BabyExpecSpecialNeeds`, `BabyExpecSpecialNeedsDescription`) VALUES ('$userid','$BabyExpecDate','$BabyExpecSpecialNeeds','$babyexpeDesc')";
            DB::insert($tbbabyexpecInsertSql);
            $AdScheduleRefType = 0;
            if($occasChk == 'on' && $regularChk == ''){
                $AdScheduleRefType = 1;
            }
            else if($occasChk=='' && $regularChk=='on'){
                $AdScheduleRefType = 2;
            }
            else if($occasChk=='on' && $regularChk=='on'){
                $AdScheduleRefType = 3;
            }
            $AdScheduleOnMondayMorning = 0;
            if($mm == 'on'){
                $AdScheduleOnMondayMorning = 1;
            }
            $AdScheduleOnMondayAfternoon = 0;
            if($ma=='on'){
                $AdScheduleOnMondayAfternoon = 1;
            }
            $AdScheduleOnMondayEvening = 0;
            if($me=='on'){
                $AdScheduleOnMondayEvening = 1;
            }
            $AdScheduleOnTuesdayMorning = 0;
            if($tum=='on'){
                $AdScheduleOnTuesdayMorning = 1;
            }
            $AdScheduleOnTuesdayAfternoon = 0;
            if($tua == 'on'){
                $AdScheduleOnTuesdayAfternoon = 1;
            }
            $AdScheduleOnTuesdayEvening = 0;
            if($tue=='on'){
                $AdScheduleOnTuesdayEvening = 1;
            }
            $AdScheduleOnWednesdayMorning = 0;
            if($wm=='on'){
                $AdScheduleOnWednesdayMorning = 1;
            }
            $AdScheduleOnWednesdayAfternoon = 0;
            if($wa=='on'){
                $AdScheduleOnWednesdayAfternoon = 1;
            }
            $AdScheduleOnWednesdayEvening = 0;
            if($we == 'on'){
                $AdScheduleOnWednesdayEvening = 1;
            }
            $AdScheduleOnThursdayMorning = 0;
            if($thm=='on'){
                $AdScheduleOnThursdayMorning = 1;
            }
            $AdScheduleOnThursdayAfternoon = 0;
            if($tha == 'on'){
                $AdScheduleOnThursdayAfternoon = 1;
            }
            $AdScheduleOnThursdayEvening = 0;
            if($the=='on'){
                $AdScheduleOnThursdayEvening = 1;
            }
            $AdScheduleOnFridayMorning = 0;
            if($fm=='on'){
                $AdScheduleOnFridayMorning = 1;
            }
            $AdScheduleOnFridayAfternoon = 0;
            if($fa=='on'){
                $AdScheduleOnFridayAfternoon = 1;
            }
            $AdScheduleOnFridayEvening = 0;
            if($fe='on'){
                $AdScheduleOnFridayEvening = 1;
            }
            $AdScheduleOnSaturdayMorning = 0;
            if($sam=='on'){
                $AdScheduleOnSaturdayMorning = 1;
            }
            $AdScheduleOnSaturdayAfternoon = 0;
            if($saa=='on'){
                $AdScheduleOnSaturdayAfternoon = 1;
            }
            $AdScheduleOnSaturdayEvening = 0;
            if($sae=='on'){
                $AdScheduleOnSaturdayEvening = 1;
            }
            $AdScheduleOnSundayMorning = 0;
            if($sum=='on'){
                $AdScheduleOnSundayMorning = 1;
            }
            $AdScheduleOnSundayAfternoon = 0;
            if($sua=='on'){
                $AdScheduleOnSundayAfternoon = 1;
            }
            $AdScheduleOnSundayEvening = 0;
            if($sue=='on'){
                $AdScheduleOnSundayEvening = 1;
            }
            $AdAfterSchool = 0;
            if($afterschoolTxt=='Yes'){
                $AdAfterSchool = 1;
            }
            else if($afterschoolTxt=='No'){
                $AdAfterSchool = 0;
            }
            $AdChoreGroceries = 0;
            if($groceriesChk=='on'){
                $AdChoreGroceries = 1;
            }
            $AdChoreCooking = 0;
            if($cookingChk == 'on'){
                $AdChoreCooking = 1;
            }
            $AdChoreDriving = 0;
            if($drivingChk == 'on'){
                $AdChoreDriving = 1;
            }
            $AdChoreLightHouse = 0;
            if($AdChoreLightHouse == 'on'){
                $AdChoreLightHouse = 1;
            }
            $AdChoreHomework = 0;
            if($homeworkChk == 'on'){
                $AdChoreHomework = 1;
            }
            $AdChoreStudyHelpCompulsory = 0;
            if($compulsoryChk=='on'){
                $AdChoreStudyHelpCompulsory = 1;
            }
            $AdChoreStudyHelpSpecialized = 0;
            if($specializedChk == 'on'){
                $AdChoreStudyHelpSpecialized = 1;
            }
            
            
            $AdStartDate = date("Y-m-d");
            $tbadsInserSql = "INSERT INTO `tbads`(`AdRefUserID`, `AdRefType`, `AdStartDate`, `AdEndDate`, `AdScheduleRefType`, `AdScheduleOnMondayMorning`, `AdScheduleOnMondayAfternoon`, `AdScheduleOnMondayEvening`, `AdScheduleOnTuesdayMorning`, `AdScheduleOnTuesdayAfternoon`, `AdScheduleOnTuesdayEvening`, `AdScheduleOnWednesdayMorning`, `AdScheduleOnWednesdayAfternoon`, `AdScheduleOnWednesdayEvening`, `AdScheduleOnThursdayMorning`, `AdScheduleOnThursdayAfternoon`, `AdScheduleOnThursdayEvening`, `AdScheduleOnFridayMorning`, `AdScheduleOnFridayAfternoon`, `AdScheduleOnFridayEvening`, `AdScheduleOnSaturdayMorning`, `AdScheduleOnSaturdayAfternoon`, `AdScheduleOnSaturdayEvening`, `AdScheduleOnSundayMorning`, `AdScheduleOnSundayAfternoon`, `AdScheduleOnSundayEvening`, `AdAfterSchool`, `AdChoreGroceries`, `AdChoreCooking`, `AdChoreDriving`, `AdChoreLightHouse`, `AdChoreHomework`, `AdChoreStudyHelpCompulsory`, `AdChoreStudyHelpSpecialized`, `AdRefPriceRange`) 
                VALUES ('$userid','$AdRefType','$AdStartDate','$BabyExpecDate','$AdScheduleRefType','$AdScheduleOnMondayMorning','$AdScheduleOnMondayAfternoon','$AdScheduleOnMondayEvening','$AdScheduleOnTuesdayMorning','$AdScheduleOnTuesdayAfternoon','$AdScheduleOnTuesdayEvening','$AdScheduleOnWednesdayMorning','$AdScheduleOnWednesdayAfternoon','$AdScheduleOnWednesdayEvening','$AdScheduleOnThursdayMorning','$AdScheduleOnThursdayAfternoon','$AdScheduleOnThursdayEvening','$AdScheduleOnFridayMorning','$AdScheduleOnFridayAfternoon','$AdScheduleOnFridayEvening','$AdScheduleOnSaturdayMorning','$AdScheduleOnSaturdayAfternoon','$AdScheduleOnSaturdayEvening','$AdScheduleOnSundayMorning','$AdScheduleOnSundayAfternoon','$AdScheduleOnSundayEvening','$AdAfterSchool','$AdChoreGroceries','$AdChoreCooking','$AdChoreDriving','$AdChoreLightHouse','$AdChoreHomework','$AdChoreStudyHelpCompulsory','$AdChoreStudyHelpSpecialized','$AdRefPriceRange')";
            DB::insert($tbadsInserSql);
        }
        else if($roleTxt=='babysitter'){
            $AdRefType = 2;
            $otherLangTxt = $request['otherLangTxt'];
            $sCalmChk = $request['sCalmChk'];
            $sCreativeChk = $request['sCreativeChk'];
            $sPatientChk = $request['sPatientChk'];
            $sEnthuChk = $request['sEnthuChk'];
            $sKindChk = $request['sKindChk'];
            $sCaringChk = $request['sCaringChk'];
    
            $sFunnyChk = $request['sFunnyChk'];
            $sTalkativeChk = $request['sTalkativeChk'];
            $sStrictChk = $request['sStrictChk'];
            $sTolerantChk = $request['sTolerantChk'];
            $sDesc = '';
            if($sCalmChk == 'on'){
                if($sDesc == ''){
                    $sDesc = $sDesc . 'Calm';
                }
                else {
                    $sDesc = $sDesc . ';Calm';
                }
            }
            if($sCreativeChk == 'on'){
                if($sDesc == ''){
                    $sDesc = $sDesc . 'Creative';
                }
                else {
                    $sDesc = $sDesc . ';Creative';
                }
            }
            if($sPatientChk == 'on'){
                if($sDesc == ''){
                    $sDesc = $sDesc . 'Patient';
                }
                else {
                    $sDesc = $sDesc . ';Patient';
                }
            }
            if($sEnthuChk == 'on'){
                if($sDesc == ''){
                    $sDesc = $sDesc . 'Enthusiastic';
                }
                else {
                    $sDesc = $sDesc . ';Enthusiastic';
                }
            }
            if($sKindChk == 'on'){
                if($sDesc == ''){
                    $sDesc = $sDesc . 'Kind';
                }
                else {
                    $sDesc = $sDesc . ';Kind';
                }
            }
            if($sCaringChk == 'on'){
                if($sDesc == ''){
                    $sDesc = $sDesc . 'Caring';
                }
                else {
                    $sDesc = $sDesc . ';Caring';
                }
            }
            if($sFunnyChk == 'on'){
                if($sDesc == ''){
                    $sDesc = $sDesc . 'Funny';
                }
                else {
                    $sDesc = $sDesc . ';Funny';
                }
            }
            if($sTalkativeChk == 'on'){
                if($sDesc == ''){
                    $sDesc = $sDesc . 'Talkative';
                }
                else {
                    $sDesc = $sDesc . ';Talkative';
                }
            }
            if($sStrictChk == 'on'){
                if($sDesc == ''){
                    $sDesc = $sDesc . 'Strict';
                }
                else {
                    $sDesc = $sDesc . ';Strict';
                }
            }
            if($sTolerantChk == 'on'){
                if($sDesc == ''){
                    $sDesc = $sDesc . 'Tolerant';
                }
                else {
                    $sDesc = $sDesc . ';Tolerant';
                }
            }
            $sItalianChk = $request['sItalianChk'];
            $sEnglishChk = $request['sEnglishChk'];
            $sDeutschChk = $request['sDeutschChk'];
            $sSpanishChk = $request['sSpanishChk'];
            $sFrenshChk = $request['sFrenshChk'];
            if($sItalianChk == 'on'){
                DB::insert("INSERT INTO `tbadditionallanguages`(`LanguageRefUserID`, `Language`) VALUES ('$userid','it-IT')");
            }
            if($sEnglishChk == 'on'){
                DB::insert("INSERT INTO `tbadditionallanguages`(`LanguageRefUserID`, `Language`) VALUES ('$userid','en-EN')");
            }
            if($sDeutschChk == 'on'){
                DB::insert("INSERT INTO `tbadditionallanguages`(`LanguageRefUserID`, `Language`) VALUES ('$userid','de-DE')");
            }
            if($sSpanishChk == 'on'){
                DB::insert("INSERT INTO `tbadditionallanguages`(`LanguageRefUserID`, `Language`) VALUES ('$userid','sp-SP')");
            }
            if($sFrenshChk == 'on'){
                DB::insert("INSERT INTO `tbadditionallanguages`(`LanguageRefUserID`, `Language`) VALUES ('$userid','fr-FR')");
            }
            $otherLangSelect = $request['otherLangSelect'];
            if($otherLangSelect != ''){
                DB::insert("INSERT INTO `tbadditionallanguages`(`LanguageRefUserID`, `Language`) VALUES ('$userid','$otherLangSelect')");
            }
            $ssmokeTxt = $request['ssmokeTxt'];
            $UserDataIsSmoker = 0;
            if($ssmokeTxt == 'Yes'){
                $UserDataIsSmoker = 1;
            }
            $sLikeTxt = $request['sLikeTxt'];
            $Occupations = DB::select("SELECT * FROM `tboccupations` WHERE `OccupationName`='$sLikeTxt'");
            $UserDataRefOccupation = $Occupations[0]->id;
            
            $sAidChk = $request['sAidChk'];
            $sBehaviourChk = $request['sBehaviourChk'];
            $sDriverChk = $request['sDriverChk'];
            $sCarChk = $request['sCarChk'];
            $sUnblockingChk = $request['sUnblockingChk'];
            $sCriminalChk = $request['sCriminalChk'];
            $UserDataFirstAidCertificate = 0;
            if($sAidChk == 'on'){
                $UserDataFirstAidCertificate = 1;
            }
            $UserDataGoodbehaviourCertificate = 0;
            if($sBehaviourChk == 'on'){
                $UserDataGoodbehaviourCertificate = 1;
            }
            $UserDataDriversLicense = 0;
            if($sDriverChk == 'on'){
                $UserDataDriversLicense = 1;
            }
            $UserDataHaveACar = 0;
            if($sCarChk == 'on'){
                $UserDataHaveACar = 1;
            }
            $UserDataPediatricUnblocking = 0;
            if($sUnblockingChk == 'on'){
                $UserDataPediatricUnblocking = 1;
            }
            $UserDataCriminalRecord = 0;
            if($sCriminalChk == 'on'){
                $UserDataCriminalRecord = 1;
            }

            $sArtChk = $request['sArtChk'];
            $sMusicChk = $request['sMusicChk'];
            $sBakingChk = $request['sBakingChk'];
            $sSportChk = $request['sSportChk'];
            $sGamesChk = $request['sGamesChk'];
            $sReadingChk = $request['sReadingChk'];
            $UserDataGoodAtTags = '';
            if($sArtChk == 'on'){
                if($UserDataGoodAtTags == ''){
                    $UserDataGoodAtTags = $UserDataGoodAtTags . 'Arts & crafts';
                }
                else {
                    $UserDataGoodAtTags = $UserDataGoodAtTags . ';Arts & crafts';
                }
            }
            if($sMusicChk == 'on'){
                if($UserDataGoodAtTags == ''){
                    $UserDataGoodAtTags = $UserDataGoodAtTags . 'Music';
                }
                else {
                    $UserDataGoodAtTags = $UserDataGoodAtTags . ';Music';
                }
            }
            if($sBakingChk == 'on'){
                if($UserDataGoodAtTags == ''){
                    $UserDataGoodAtTags = $UserDataGoodAtTags . 'Baking';
                }
                else {
                    $UserDataGoodAtTags = $UserDataGoodAtTags . ';Baking';
                }
            }
            if($sSportChk == 'on'){
                if($UserDataGoodAtTags == ''){
                    $UserDataGoodAtTags = $UserDataGoodAtTags . 'Sports';
                }
                else {
                    $UserDataGoodAtTags = $UserDataGoodAtTags . ';Sports';
                }
            }
            if($sGamesChk == 'on'){
                if($UserDataGoodAtTags == ''){
                    $UserDataGoodAtTags = $UserDataGoodAtTags . 'Games';
                }
                else {
                    $UserDataGoodAtTags = $UserDataGoodAtTags . ';Games';
                }
            }
            if($sReadingChk == 'on'){
                if($UserDataGoodAtTags == ''){
                    $UserDataGoodAtTags = $UserDataGoodAtTags . 'Storytelling & reading';
                }
                else {
                    $UserDataGoodAtTags = $UserDataGoodAtTags . ';Storytelling & reading';
                }
            }
            $sExperienceTxt = $request['sExperienceTxt'];
    
            $sBablesChk = $request['sBablesChk'];
            $sToddlersChk = $request['sToddlersChk'];
            $sKindergartenersChk = $request['sKindergartenersChk'];
            $sGradeChk = $request['sGradeChk'];
            $sTeenagersChk = $request['sTeenagersChk'];
            $sCollegeChk = $request['sCollegeChk'];
            $sAdultChk = $request['sAdultChk'];
            


            $sReferenceTxt = $request['sReferenceTxt']; // should be add in future
            
            $sChildamountTxt = $request['sChildamountTxt'];
    
            $sGroceriesChk = $request['sGroceriesChk'];
            $sCookingChk = $request['sCookingChk'];
            $sDrivingChk = $request['sDrivingChk'];
            $sLightHouseChk = $request['sLightHouseChk'];
            $sHomeworkChk = $request['sHomeworkChk'];
            $sCompusoryChk = $request['sCompusoryChk'];
            $sSpecializedChk = $request['sSpecializedChk'];
            $AdChoreGroceries = 0;
            if($sGroceriesChk=='on'){
                $AdChoreGroceries = 1;
            }
            $AdChoreCooking = 0;
            if($sCookingChk == 'on'){
                $AdChoreCooking = 1;
            }
            $AdChoreDriving = 0;
            if($sDrivingChk == 'on'){
                $AdChoreDriving = 1;
            }
            $AdChoreLightHouse = 0;
            if($sLightHouseChk == 'on'){
                $AdChoreLightHouse = 1;
            }
            $AdChoreHomework = 0;
            if($sHomeworkChk == 'on'){
                $AdChoreHomework = 1;
            }
            $AdChoreStudyHelpCompulsory = 0;
            if($sCompusoryChk=='on'){
                $AdChoreStudyHelpCompulsory = 1;
            }
            $AdChoreStudyHelpSpecialized = 0;
            if($sSpecializedChk == 'on'){
                $AdChoreStudyHelpSpecialized = 1;
            }
                
            $sHourlyRateTxt = $request['sHourlyRateTxt'];
            // echo $sHourlyRateTxt;
            $AdRefPriceRange = 0;
            $spricerange = DB::select("SELECT * FROM `tbpriceranges` WHERE `RangeName`='$sHourlyRateTxt'");
            $AdRefPriceRange = $spricerange[0]->RangeID;
            $currenttime = date("Ymdhis");

            $smm = $request['smm'];
            $sma = $request['sma'];
            $sme = $request['sme'];
            $stum = $request['stum'];
            $stua = $request['stua'];
            $stue = $request['stue'];
            $swm = $request['swm'];
            $swa = $request['swa'];
            $swe = $request['swe'];
            $sthm = $request['sthm'];
            $stha = $request['stha'];
            $sthe = $request['sthe'];
            $sfm = $request['sfm'];
            $sfa = $request['sfa'];
            $sfe = $request['sfe'];
            $ssam = $request['ssam'];
            $ssaa = $request['ssaa'];
            $ssae = $request['ssae'];
            $ssum = $request['ssum'];
            $ssua = $request['ssua'];
            $ssue = $request['ssue'];

            $sOccasinallyChk = $request['sOccasinallyChk'];
            $sRegularChk = $request['sRegularChk'];
            $AdScheduleRefType = 0;
            if($sOccasinallyChk == 'on' && $sRegularChk == ''){
                $AdScheduleRefType = 1;
            }
            else if($sOccasinallyChk=='' && $sRegularChk=='on'){
                $AdScheduleRefType = 2;
            }
            else if($sOccasinallyChk=='on' && $sRegularChk=='on'){
                $AdScheduleRefType = 3;
            }
            $AdScheduleOnMondayMorning = 0;
            if($smm == 'on'){
                $AdScheduleOnMondayMorning = 1;
            }
            $AdScheduleOnMondayAfternoon = 0;
            if($sma=='on'){
                $AdScheduleOnMondayAfternoon = 1;
            }
            $AdScheduleOnMondayEvening = 0;
            if($sme=='on'){
                $AdScheduleOnMondayEvening = 1;
            }
            $AdScheduleOnTuesdayMorning = 0;
            if($stum=='on'){
                $AdScheduleOnTuesdayMorning = 1;
            }
            $AdScheduleOnTuesdayAfternoon = 0;
            if($stua == 'on'){
                $AdScheduleOnTuesdayAfternoon = 1;
            }
            $AdScheduleOnTuesdayEvening = 0;
            if($stue=='on'){
                $AdScheduleOnTuesdayEvening = 1;
            }
            $AdScheduleOnWednesdayMorning = 0;
            if($swm=='on'){
                $AdScheduleOnWednesdayMorning = 1;
            }
            $AdScheduleOnWednesdayAfternoon = 0;
            if($swa=='on'){
                $AdScheduleOnWednesdayAfternoon = 1;
            }
            $AdScheduleOnWednesdayEvening = 0;
            if($swe == 'on'){
                $AdScheduleOnWednesdayEvening = 1;
            }
            $AdScheduleOnThursdayMorning = 0;
            if($sthm=='on'){
                $AdScheduleOnThursdayMorning = 1;
            }
            $AdScheduleOnThursdayAfternoon = 0;
            if($stha == 'on'){
                $AdScheduleOnThursdayAfternoon = 1;
            }
            $AdScheduleOnThursdayEvening = 0;
            if($sthe=='on'){
                $AdScheduleOnThursdayEvening = 1;
            }
            $AdScheduleOnFridayMorning = 0;
            if($sfm=='on'){
                $AdScheduleOnFridayMorning = 1;
            }
            $AdScheduleOnFridayAfternoon = 0;
            if($sfa=='on'){
                $AdScheduleOnFridayAfternoon = 1;
            }
            $AdScheduleOnFridayEvening = 0;
            if($sfe='on'){
                $AdScheduleOnFridayEvening = 1;
            }
            $AdScheduleOnSaturdayMorning = 0;
            if($ssam=='on'){
                $AdScheduleOnSaturdayMorning = 1;
            }
            $AdScheduleOnSaturdayAfternoon = 0;
            if($ssaa=='on'){
                $AdScheduleOnSaturdayAfternoon = 1;
            }
            $AdScheduleOnSaturdayEvening = 0;
            if($ssae=='on'){
                $AdScheduleOnSaturdayEvening = 1;
            }
            $AdScheduleOnSundayMorning = 0;
            if($ssum=='on'){
                $AdScheduleOnSundayMorning = 1;
            }
            $AdScheduleOnSundayAfternoon = 0;
            if($ssua=='on'){
                $AdScheduleOnSundayAfternoon = 1;
            }
            $AdScheduleOnSundayEvening = 0;
            if($ssue=='on'){
                $AdScheduleOnSundayEvening = 1;
            }

            $sAfterSchoolTxt = $request['sAfterSchoolTxt'];
            $AdAfterSchool = 0;
            if($sAfterSchoolTxt=='Yes'){
                $AdAfterSchool = 1;
            }

            $sparentPicUpdUrlName = '';
            if ($request->hasFile('sparentPicUpd')) {
                $sparentPicUpd = $request->file('sparentPicUpd');
                $sparentPicUpdExtension = $sparentPicUpd->getClientOriginalExtension();
                $sparentPicUpdName = $currenttime . ".".$sparentPicUpdExtension;
                $simgDestinationPath = 'uploads/img';
                $sparentPicUpdUrlName = $simgDestinationPath . '/'. $sparentPicUpdName; 
                $sparentPicUpd->move($simgDestinationPath, $sparentPicUpdName);
            }
            $sparentVideoUpdUrlName = '';
            if ($request->hasFile('sparentVideoUpd')) {
                $sparentVideoUpd = $request->file('sparentVideoUpd');
                $sparentVideoUpdExtension = $sparentVideoUpd->getClientOriginalExtension();
                $sparentVideoUpdName = $currenttime . "." . $sparentVideoUpdExtension;
                $svideoDestinationPath = 'uploads/video';
                $sparentVideoUpdUrlName = $svideoDestinationPath . '/'. $sparentVideoUpdName; 
                $sparentVideoUpd->move($svideoDestinationPath, $sparentVideoUpdName); 
            }
    
            
            $UserDataFacebookVerified = 0;
            $tbUserPersonalDataInsertSql = "INSERT INTO `tbuserpersonaldata`(`UserDataRefUserID`, `UserDataGender`, `UserDataBirthDate`, `UserDataAddressCity`, `UserDataAddressStreet`, `UserDataAddressNumber`, `UserDataSelfDescription`, `UserDataLanguage`, `UserDataFacebookVerified`, `UserDataProfileImagePath`, `UserDataProfileVideoSelfiePath`, `UserDataDescribeTags`, `UserDataIsSmoker`, `UserDataRefOccupation`, `UserDataFirstAidCertificate`, `UserDataGoodbehaviourCertificate`, `UserDataDriversLicense`, `UserDataHaveACar`, `UserDataPediatricUnblocking`, `UserDataCriminalRecord`, `UserDataGoodAtTags`) 
                                                                                                                                                        VALUES ('$userid','$gender','$UserDataBirthDate','$city','$street','$street_no','$userDesc','$nativeLangTxt','$UserDataFacebookVerified','$sparentPicUpdUrlName','$sparentVideoUpdUrlName','$sDesc','$UserDataIsSmoker','$UserDataRefOccupation','$UserDataFirstAidCertificate','$UserDataGoodbehaviourCertificate','$UserDataDriversLicense','$UserDataHaveACar','$UserDataPediatricUnblocking','$UserDataCriminalRecord','$UserDataGoodAtTags')";
            DB::insert($tbUserPersonalDataInsertSql);
            // $tbAdsInsertSql = "";
            $tbAds_id = DB::table('tbads')->insertGetId(
                ['AdRefUserID' => $userid, 
                'AdRefType' => $AdRefType, 
                'AdExperienceYears' => $sExperienceTxt, 
                'AdChildrenMaxNumber' => $sChildamountTxt,
                'AdChildrenWithSpecialNeeds' => '0',
                'AdChoreGroceries' => $AdChoreGroceries, 
                'AdChoreCooking' => $AdChoreCooking, 
                'AdChoreDriving' => $AdChoreDriving, 
                'AdChoreLightHouse' => $AdChoreLightHouse,
                'AdChoreHomework' => $AdChoreHomework, 
                'AdChoreStudyHelpCompulsory' => $AdChoreStudyHelpCompulsory, 
                'AdChoreStudyHelpSpecialized' => $AdChoreStudyHelpSpecialized, 
                'AdRefPriceRange' => $AdRefPriceRange,
                'AdScheduleRefType' => $AdScheduleRefType, 
                'AdScheduleOnMondayMorning' => $AdScheduleOnMondayMorning, 
                'AdScheduleOnMondayAfternoon' => $AdScheduleOnMondayAfternoon, 
                'AdScheduleOnMondayEvening' => $AdScheduleOnMondayEvening,
                'AdScheduleOnTuesdayMorning' => $AdScheduleOnTuesdayMorning, 
                'AdScheduleOnTuesdayAfternoon' => $AdScheduleOnTuesdayAfternoon, 
                'AdScheduleOnTuesdayEvening' => $AdScheduleOnTuesdayEvening,
                'AdScheduleOnWednesdayMorning' => $AdScheduleOnWednesdayMorning, 
                'AdScheduleOnWednesdayAfternoon' => $AdScheduleOnWednesdayAfternoon, 
                'AdScheduleOnWednesdayEvening' => $AdScheduleOnWednesdayEvening,
                'AdScheduleOnThursdayMorning' => $AdScheduleOnThursdayMorning, 
                'AdScheduleOnThursdayAfternoon' => $AdScheduleOnThursdayAfternoon, 
                'AdScheduleOnThursdayEvening' => $AdScheduleOnThursdayEvening,
                'AdScheduleOnFridayMorning' => $AdScheduleOnFridayMorning, 
                'AdScheduleOnFridayAfternoon' => $AdScheduleOnFridayAfternoon, 
                'AdScheduleOnFridayEvening' => $AdScheduleOnFridayEvening,
                'AdScheduleOnSaturdayMorning' => $AdScheduleOnSaturdayMorning, 
                'AdScheduleOnSaturdayAfternoon' => $AdScheduleOnSaturdayAfternoon, 
                'AdScheduleOnSaturdayEvening' => $AdScheduleOnSaturdayEvening,
                'AdScheduleOnSundayMorning' => $AdScheduleOnSundayMorning, 
                'AdScheduleOnSundayAfternoon' => $AdScheduleOnSundayAfternoon, 
                'AdScheduleOnSundayEvening' => $AdScheduleOnSundayEvening,
                'AdAfterSchool' => $AdAfterSchool]
            );
            $AdsRangeRefAdID = $tbAds_id;
            if($sBablesChk == 'on'){
                $AdsRangeRefAgeRangeSelect = DB::select("SELECT * FROM `tbageranges` WHERE `RangeName`='Babies'");
                $AdsRangeRefAgeRange = $AdsRangeRefAgeRangeSelect[0]->id;
                DB::insert("INSERT INTO `tbadsagerangeexperiences`(`AdsRangeRefAdID`, `AdsRangeRefAgeRange`) VALUES ('$AdsRangeRefAdID','$AdsRangeRefAgeRange')");
            }
            if($sToddlersChk == 'on'){
                $AdsRangeRefAgeRangeSelect = DB::select("SELECT * FROM `tbageranges` WHERE `RangeName`='Toddlers'");
                $AdsRangeRefAgeRange = $AdsRangeRefAgeRangeSelect[0]->id;
                DB::insert("INSERT INTO `tbadsagerangeexperiences`(`AdsRangeRefAdID`, `AdsRangeRefAgeRange`) VALUES ('$AdsRangeRefAdID','$AdsRangeRefAgeRange')");
            }
            if($sKindergartenersChk == 'on'){
                $AdsRangeRefAgeRangeSelect = DB::select("SELECT * FROM `tbageranges` WHERE `RangeName`='Kindergarteners'");
                $AdsRangeRefAgeRange = $AdsRangeRefAgeRangeSelect[0]->id;
                DB::insert("INSERT INTO `tbadsagerangeexperiences`(`AdsRangeRefAdID`, `AdsRangeRefAgeRange`) VALUES ('$AdsRangeRefAdID','$AdsRangeRefAgeRange')");
            }
            if($sGradeChk == 'on'){
                $AdsRangeRefAgeRangeSelect = DB::select("SELECT * FROM `tbageranges` WHERE `RangeName`='Students'");
                $AdsRangeRefAgeRange = $AdsRangeRefAgeRangeSelect[0]->id;
                DB::insert("INSERT INTO `tbadsagerangeexperiences`(`AdsRangeRefAdID`, `AdsRangeRefAgeRange`) VALUES ('$AdsRangeRefAdID','$AdsRangeRefAgeRange')");
            }
            if($sTeenagersChk == 'on'){
                $AdsRangeRefAgeRangeSelect = DB::select("SELECT * FROM `tbageranges` WHERE `RangeName`='Teenagers'");
                $AdsRangeRefAgeRange = $AdsRangeRefAgeRangeSelect[0]->id;
                DB::insert("INSERT INTO `tbadsagerangeexperiences`(`AdsRangeRefAdID`, `AdsRangeRefAgeRange`) VALUES ('$AdsRangeRefAdID','$AdsRangeRefAgeRange')");
            }
            if($sCollegeChk == 'on'){
                $AdsRangeRefAgeRangeSelect = DB::select("SELECT * FROM `tbageranges` WHERE `RangeName`='College'");
                $AdsRangeRefAgeRange = $AdsRangeRefAgeRangeSelect[0]->id;
                DB::insert("INSERT INTO `tbadsagerangeexperiences`(`AdsRangeRefAdID`, `AdsRangeRefAgeRange`) VALUES ('$AdsRangeRefAdID','$AdsRangeRefAgeRange')");
            }
            if($sAdultChk == 'on'){
                $AdsRangeRefAgeRangeSelect = DB::select("SELECT * FROM `tbageranges` WHERE `RangeName`='Adult'");
                $AdsRangeRefAgeRange = $AdsRangeRefAgeRangeSelect[0]->id;
                DB::insert("INSERT INTO `tbadsagerangeexperiences`(`AdsRangeRefAdID`, `AdsRangeRefAgeRange`) VALUES ('$AdsRangeRefAdID','$AdsRangeRefAgeRange')");
            }

            if($sReferenceTxt == 'Yes'){
                $sReferenceDescription = $request['sReferenceDescription'];
                if ($request->hasFile('sReferenceDoc')) {
                    $sReferenceDoc = $request->file('sReferenceDoc');
                    $sReferenceDocExtension = $sReferenceDoc->getClientOriginalExtension();
                    $sReferenceDocName = $currenttime . ".".$sReferenceDocExtension;
                    $sReferenceDocPath = 'uploads/doc';
                    $sReferenceDocUrlName = $sReferenceDocPath . '/'. $sReferenceDocName; 
                    $sReferenceDoc->move($sReferenceDocPath, $sReferenceDocName);
                    DB::insert("INSERT INTO `tbreferences`(`ReferenceRefAdID`, `ReferenceDescription`, `ReferenceDocumentPath`) VALUES ('$tbAds_id','$sReferenceDescription','$sReferenceDocUrlName')");
                }
            }
        }

        
        echo "Congratulations!";
        // Session::forget('userid');

        
        return;
    }
}

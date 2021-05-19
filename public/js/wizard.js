var role = '';
var birth_day='';
var birth_month='';
var birth_year='';
var gender = 'Female';
var city = '';
var street = '';
var street_no = '';
var userDesc = '';
var nativeLang = '';
var otherLang = '';
var otherlangselect = '';
var cbirth_day='';
var cbirth_month='';
var cbirth_year='';
var cgender = '';
var bbirth_day='';
var bbirth_month='';
var bbirth_year='';
var childAmount = '';
var likeFit = '';
var childaddcheck = false;
var ChildIsCalm = false;
var ChildIsQuiet = false;
var ChildIsCreative = false;
var ChildIsCurios = false;
var ChildIsEnergetic = false;
var ChildIsTalkative = false;
var ChildIsSporty = false;
var ChildIsFunny = false;
var ChildIsMischievous = false;
var ChildIsStubborn = false;
var regularSch = false;
var occasSch = false;
var mm = false;
var ma = false;
var me = false;
var tum = false;
var tua = false;
var tue = false;
var wm = false;
var wa = false;
var we = false;
var thm = false;
var tha = false;
var the = false;
var fm = false;
var fa = false;
var fe = false;
var sam = false;
var saa = false;
var sae = false;
var sum = false;
var sua = false;
var sue = false;
var afterschool = '';
var AdChoreGroceries = false;
var AdChoreCooking = false;
var AdChoreDriving = false;
var AdChoreLightHouse = false;
var AdChoreHomework = false;
var AdChoreStudyHelpCompulsory = false;
var AdChoreStudyHelpSpecialized = false;
var price4eur = false;
var price4to6 = false;
var price6to8 = false;
var price8to10 = false;
var price10eur = false;
var priceNegotiable = false;
var experienceYears = '';
var parentBase64Img = '';
var sparentBase64Img = '';

var sCalm = false;
var sCreative = false;
var sPatient = false;
var sEnthu = false;
var sKind = false;
var sCaring = false;
var sFunny = false;
var sTalkative = false;
var sStrict = false;
var sTolerant = false;
var sItalian = false;
var sDeutsch = false;
var sEnglish = false;
var sSpanish = false;
var sFrensh = false;
var sAid = false;
var sBehaviour = false;
var sDriver = false;
var sCar = false;
var sUnblocking = false;
var sCriminal = false;

var sBables = false;
var sToddlers = false;
var sKindergarteners = false;
var sGrade = false;
var sTeenagers = false;
var sCollege = false;
var sAdult = false;

var sGroceries = false;
var sCooking = false;
var sDriving = false;
var sLightHouse = false;
var sHomework = false;
var sCompusory = false;
var sSpecialized = false;

var smm = false;
var sma = false;
var sme = false;
var stum = false;
var stua = false;
var stue = false;
var swm = false;
var swa = false;
var swe = false;
var sthm = false;
var stha = false;
var sthe = false;
var sfm = false;
var sfa = false;
var sfe = false;
var ssam = false;
var ssaa = false;
var ssae = false;
var ssum = false;
var ssua = false;
var ssue = false;

var sOccasinally = false;
var sRegular = false;

var sArt = false;
var sMusic = false;
var sBaking = false;
var sSport = false;
var sGames = false;
var sReading = false;
var sReference = '';
var sReferenceDocStatue = false;
var sReferenceDescriptionStatue = false;
$(document).ready(function() {
	var current_fs, next_fs, previous_fs; //fieldsets
	var opacity;
	$(".next").click(function() {
		current_fs = $(this).parent();
		next_fs = $(this).parent().next();
		//Add Class Active
		$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
		//show the next fieldset
		next_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				next_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});
    $(".next1").click(function() {
		current_fs = $(this).parent();
		next_fs = $(this).parent().next();
        
		//Add Class Active
		// $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
		//show the next fieldset
		next_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				next_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});
	$(".previous").click(function() {
		current_fs = $(this).parent();
		previous_fs = $(this).parent().prev();
		//Remove class active
		$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
		//show the previous fieldset
		previous_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				previous_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});
	$('.radio-group .radio').click(function() {
		$(this).parent().find('.radio').removeClass('selected');
		$(this).addClass('selected');
	});
	$(".submit").click(function() {
		return false;
	})


    $(".firstnexttimeline").click(function() {
		current_fs = $(this).parent();
		next_fs = $(this).parent().next();
		//Add Class Active
		$("#progressbar li").eq(1).addClass("active");
		//show the next fieldset
		next_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				next_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});
    $(".previoussecondtimeline").click(function() {
		current_fs = $(this).parent();
		previous_fs = $(this).parent().prev();
		//Remove class active

		$("#progressbar li").eq(1).removeClass("active");
        $("#progressbar").hide();
		//show the previous fieldset
		previous_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				previous_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});
    $(".secondnexttimeline").click(function() {
		current_fs = $(this).parent();
		next_fs = $(this).parent().next();
		//Add Class Active
		$("#progressbar li").eq(2).addClass("active");
		//show the next fieldset
		next_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				next_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});
    $(".previousthirdtimeline").click(function() {
		current_fs = $(this).parent();
		previous_fs = $(this).parent().prev();
		//Remove class active
		$("#progressbar li").eq(2).removeClass("active");
		//show the previous fieldset
		previous_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				previous_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});
    $("#nextshow").click(function() {
		current_fs = $(this).parent();
		next_fs = $(this).parent().next();
        $("#progressbar1").show().html();
		//Add Class Active
		// $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
		//show the next fieldset
		next_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				next_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});
    $("#previewhide").click(function() {
		current_fs = $(this).parent();
		previous_fs = $(this).parent().prev();
		$("#progressbar1").hide();
		//show the previous fieldset
		previous_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				previous_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});
    $("#nexthide").click(function() {
		current_fs = $(this).parent();
		next_fs = $(this).parent().next();
        $("#progressbar").hide();
		//show the next fieldset
		next_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				next_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});
    $("#previewshow").click(function() {
		current_fs = $(this).parent();
		previous_fs = $(this).parent().prev();
		$("#progressbar").show().html();
		//show the previous fieldset
		previous_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				previous_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});
    $("#parentorbabysitter").click(function() {
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        $("#progressbar1").hide();
        next_fs.show();
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now) {
                opacity = 1 - now;
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({
                    'opacity': opacity
                });
            },
            duration: 600
        });
        $('#nativeLangTxt').val(nativeLang);
        console.log(nativeLang);
	});
    $("#gotoyourinfo").click(function() {
		current_fs = $(this).parent();
		previous_fs = $(this).parent().prev();
		$("#progressbar1").show().html();
        $("#progressbar1 li").eq(2).removeClass("active");
		//show the previous fieldset
		previous_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				previous_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});
    $("#gotoyourchild").click(function() {
		current_fs = $(this).parent();
        if(role=="parent"){
            next_fs = $(this).parent().next();
            $("#progressbar").show().html();
            $("#progressbar li").eq(1).addClass("active");
            
        }
        else if(role=="babysitter"){
            next_fs = $("fieldset.rolebabystart");
            $("#progressbarbaby").show().html();
            $("#progressbarbaby li").eq(0).addClass("active");
        }
        next_fs.show();
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now) {
                opacity = 1 - now;
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({
                    'opacity': opacity
                });
            },
            duration: 600
        });
        $('#roleTxt').val(role);
	});

    $("#gotoroleselect").click(function() {
		current_fs = $(this).parent();
		previous_fs = $("fieldset.roleparentstart").prev();
		//Remove class active

		$("#progressbarbaby li").eq(1).removeClass("active");
        $("#progressbarbaby").hide();
		//show the previous fieldset
		previous_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				previous_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});
    $("#gotobabysecondtimelinenext").click(function() {
		current_fs = $(this).parent();
		next_fs = $(this).parent().next();
		//Add Class Active
		$("#progressbarbaby li").eq(1).addClass("active");
		//show the next fieldset
		next_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				next_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});
    $("#gotobabyfirsttimelineprev").click(function() {
		current_fs = $(this).parent();
		previous_fs = $(this).parent().prev();
		//Remove class active

		$("#progressbarbaby li").eq(1).removeClass("active");
        
		//show the previous fieldset
		previous_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				previous_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});
    $("#gotobabythirdtimelinenext").click(function() {
		current_fs = $(this).parent();
		next_fs = $(this).parent().next();
		//Add Class Active
		$("#progressbarbaby li").eq(2).addClass("active");
		//show the next fieldset
		next_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				next_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});
    $("#gotobabysecondtimelineprev").click(function() {
		current_fs = $(this).parent();
		previous_fs = $(this).parent().prev();
		//Remove class active

		$("#progressbarbaby li").eq(2).removeClass("active");
        
		//show the previous fieldset
		previous_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				previous_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});

    $("#gotobabyendnext").click(function() {
		current_fs = $(this).parent();
		next_fs = $(this).parent().next();
		//Add Class Active
		
        $("#progressbarbaby").hide();
		//show the next fieldset
		next_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				next_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});
    $("#gotobabythirdtimelineprev").click(function() {
		current_fs = $(this).parent();
		previous_fs = $(this).parent().prev();
		//Remove class active
        $("#progressbarbaby").show().html();
		//show the previous fieldset
		previous_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				previous_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});
    $("#nchildgbBtn").click(function() {
		current_fs = $(this).parent();
		next_fs = $("fieldset.childDesc");
		next_fs.show();
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				next_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
        $('#childGenderTxt').val(cgender);
	});
    $("#expectingbtn").click(function() {
		current_fs = $("fieldset.roleparentstart");
		next_fs = $("fieldset.babyexpecting");

		//show the next fieldset
		next_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				next_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});
    $("#expectingbtn1").click(function() {
		current_fs = $("fieldset.childview");
		next_fs = $("fieldset.babyexpecting");

		//show the next fieldset
		next_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				next_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});
    $("#nbabyexpecBtn").click(function() {
		current_fs = $(this).parent();
		next_fs = $("fieldset.childview");

		//show the next fieldset
		next_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				next_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
        if(cgender!='' && childaddcheck==false){
            childaddcheck = true;
            if(cgender=='girl'){
                $("#childImg").append("<img class='rounded-circle z-depth-2' src='image/girl.png' data-holder-rendered='true'>");
            }
            else if(cgender=='boy'){
                $("#childImg").append("<img class='rounded-circle z-depth-2' src='image/boy.png' data-holder-rendered='true'>");
            }
        }
        if(bbirth_day!='' && bbirth_month!='' && bbirth_year!=''){
            $("#expectingbtn1").hide();
            $("#childImg").append("<img class='rounded-circle z-depth-2' src='image/baby.png' data-holder-rendered='true'>");
        }
        else {
            $("#expectingbtn1").show().html();
        }
        
	});
    $("#gotorolestartprev").click(function() {
		current_fs = $(this).parent();
		previous_fs = $("fieldset.roleparentstart");
		//Remove class active
		//show the previous fieldset
		previous_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				previous_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});
    $("#gotorolestartprev1").click(function() {
		current_fs = $(this).parent();
		previous_fs = $("fieldset.roleparentstart");
		//Remove class active
		//show the previous fieldset
		previous_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				previous_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});
    $("#gotochildviewnext").click(function() {
        // if(ChildIsCalm==false && ChildIsQuiet==false && ChildIsCreative==false && ChildIsCurios==false && ChildIsEnergetic==false && ChildIsTalkative==false && ChildIsSporty==false && ChildIsFunny==false && ChildIsMischievous==false && ChildIsStubborn==false){

        // }
        // else {
            current_fs = $(this).parent();
            next_fs = $("fieldset.childview");
    
            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;
                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 600
            });
    
            if(cgender!='' && childaddcheck==false){
                childaddcheck = true;
                if(cgender=='girl'){
                    $("#childImg").append("<img class='rounded-circle z-depth-2' src='image/girl.png' data-holder-rendered='true'>");
                }
                else if(cgender=='boy'){
                    $("#childImg").append("<img class='rounded-circle z-depth-2' src='image/boy.png' data-holder-rendered='true'>");
                }
            }
            if(bbirth_day!='' && bbirth_month!='' && bbirth_year!=''){
                $("#expectingbtn1").hide();
                $("#childImg").append("<img class='rounded-circle z-depth-2' src='image/baby.png' data-holder-rendered='true'>");
            }
            else {
                $("#expectingbtn1").show().html();
            }
        // }
		
	});

    $("#scheduletimeBtn").click(function() {
		current_fs = $(this).parent();

        if(regularSch == true){
            next_fs = $("fieldset.regularschedule");
        }
        else if(regularSch == false){
            next_fs = $("fieldset.afterschool");
        }
		//show the next fieldset
		next_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				next_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});
    $("#sScheduleNextBtn").click(function() {
		current_fs = $(this).parent();

        if(sRegular == true){
            next_fs = $("fieldset.sRegularTimeClass");
        }
        else if(sRegular == false){
            next_fs = $("fieldset.sAfterSchoolClass");
        }
		next_fs.show();
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				next_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});
    $("#afterschoolprevBtn").click(function() {
		current_fs = $(this).parent();
        if(regularSch == true){
            previous_fs = $("fieldset.regularschedule");
        }
        else if(regularSch == false){
            previous_fs = $("fieldset.schedulerule");
        }
		//show the previous fieldset
		previous_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				previous_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});
    $("#sAfterSchoolPrevBtn").click(function() {
		current_fs = $(this).parent();
        if(sRegular == true){
            previous_fs = $("fieldset.sRegularTimeClass");
        }
        else if(sRegular == false){
            previous_fs = $("fieldset.sScheduleClass");
        }
		previous_fs.show();
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				previous_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});
    $("#choresSkipBtn").click(function() {
		current_fs = $("fieldset.chores");
		next_fs = $("fieldset.willingprice");

		//show the next fieldset
		next_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				next_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});

        $('#groceriesChk').prop('checked', false);
        $('#cookingChk').prop('checked', false);
        $('#drivingChk').prop('checked', false);
        $('#choresChk').prop('checked', false);
        $('#homeworkChk').prop('checked', false);
        $('#compulsoryChk').prop('checked', false);
        $('#specializedChk').prop('checked', false);
        AdChoreGroceries = false;
        AdChoreCooking = false;
        AdChoreDriving = false;
        AdChoreLightHouse = false;
        AdChoreHomework = false;
        AdChoreStudyHelpCompulsory = false;
        AdChoreStudyHelpSpecialized = false;
        $('#choresNextBtn').prop('disabled', true);
	});
    $("#willingpriceSkipBtn").click(function() {
        current_fs = $("fieldset.willingprice");
		next_fs = $("fieldset.addmedia");
        $("#progressbar").hide();
		//show the next fieldset
		next_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				next_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
        $('#price4eurChk').prop('checked', false);
        $('#price8to10Chk').prop('checked', false);
        $('#price4to6Chk').prop('checked', false);
        $('#price10eurChk').prop('checked', false);
        $('#price6to8Chk').prop('checked', false);
        $('#priceNegotiableChk').prop('checked', false);
        price4eur = false;
        price4to6 = false;
        price6to8 = false;
        price8to10 = false;
        price10eur = false;
        priceNegotiable = false;
        $('#nexthide').prop('disabled', true);
	});
    $("#addmediaNextBtn").click(function() {
		current_fs = $(this).parent();
		next_fs = $(this).parent().next();
		//show the next fieldset
		next_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				next_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
        if(parentBase64Img!=''){
            $("#parentProfileImg").attr("src", parentBase64Img);
        }
        
	});
    $("#saddmediaNextBtn").click(function() {
		current_fs = $(this).parent();
		next_fs = $(this).parent().next();
		next_fs.show();
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				next_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
        
        if(sparentBase64Img!=''){
            $("#sparentProfileImg").attr("src", sparentBase64Img);
        }
        
	});
    $("#nbirthBtn").click(function() {
		current_fs = $(this).parent();
		next_fs = $(this).parent().next();
		next_fs.show();
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				next_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
        $('#genderTxt').val(gender);
	});
    $("#sReferenceNextBtn").click(function() {
		current_fs = $("fieldset.sReferenceview");
        
        if(sReference == 'Yes'){
            next_fs = $("fieldset.uploaddocview");
        }
		else if(sReference == 'No'){
            next_fs = $("fieldset.childamountview");
        }
		next_fs.show();

		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				next_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});
    $("#childamountPrevBtn").click(function() {
		current_fs = $(this).parent();
        if(sReference == 'Yes'){
            previous_fs = $("fieldset.uploaddocview");
        }
		else if(sReference == 'No'){
            previous_fs = $("fieldset.sReferenceview");
        }
		previous_fs.show();
		current_fs.animate({
			opacity: 0
		}, {
			step: function(now) {
				opacity = 1 - now;
				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				previous_fs.css({
					'opacity': opacity
				});
			},
			duration: 600
		});
	});
      
});
function onSplite(value){
    role = value;
    $('#roleTxt').val(role);
    $('#gotoyourchild').prop('disabled', false);
    if(value == "parent"){
        $("#checkparent").show().html();
        $("#checkbabysitter").hide();
    }
    else{
        $("#checkparent").hide();
        $("#checkbabysitter").show().html();
    }
    
}
function nativeLangFn(value){
    // nativeLang = value;
    // console.log(nativeLang);
    if(value == "Italian"){
        $("#checkitalian").show().html();
        $("#checkenglish").hide();
        $("#checkdeutsch").hide();
        $("#checkspanish").hide();
        $("#checkfrensh").hide();
        nativeLang = 'it-IT';
    }
    else if(value=="English"){
        $("#checkitalian").hide();
        $("#checkenglish").show().html();
        $("#checkdeutsch").hide();
        $("#checkspanish").hide();
        $("#checkfrensh").hide();
        nativeLang = 'en-EN';
    }
    else if(value=="Deutsch"){
        
        $("#checkitalian").hide();
        $("#checkenglish").hide();
        $("#checkdeutsch").show().html();
        $("#checkspanish").hide();
        $("#checkfrensh").hide();
        nativeLang = 'de-DE';
    }
    else if(value=="Spanish"){
        $("#checkitalian").hide();
        $("#checkenglish").hide();
        $("#checkdeutsch").hide();
        $("#checkspanish").show().html();
        $("#checkfrensh").hide();
        nativeLang = 'sp-SP';
    }
    else if(value=="Frensh"){
        $("#checkitalian").hide();
        $("#checkenglish").hide();
        $("#checkdeutsch").hide();
        $("#checkspanish").hide();
        $("#checkfrensh").show().html();
        nativeLang = 'fr-FR';
    }
    $('#parentorbabysitter').prop('disabled', false);
}

function otherLangFn(value){
    var sItalianChk = document.getElementById("sItalianChk");
    var sEnglishChk = document.getElementById("sEnglishChk");
    var sDeutschChk = document.getElementById("sDeutschChk");
    var sSpanishChk = document.getElementById("sSpanishChk");
    var sFrenshChk = document.getElementById("sFrenshChk");

    if(value=='sItalianChk'){
        if (sItalianChk.checked == true){
            sItalian = true;
            
        } else {
            sItalian = false;
        }
    }
    if(value=='sEnglishChk'){
        if (sEnglishChk.checked == true){
            sEnglish = true;
            
        } else {
            sEnglish = false;
        }
    }
    if(value=='sDeutschChk'){
        if (sDeutschChk.checked == true){
            sDeutsch = true;
            
        } else {
            sDeutsch = false;
        }
    }
    if(value=='sSpanishChk'){
        if (sSpanishChk.checked == true){
            sSpanish = true;
            
        } else {
            sSpanish = false;
        }
    }
    if(value=='sFrenshChk'){
        if (sFrenshChk.checked == true){
            sFrensh = true;
            
        } else {
            sFrensh = false;
        }
    }
    if(sItalian==false && sEnglish==false && sDeutsch==false && sSpanish==false && sFrensh==false && otherlangselect==''){
        $('#otherlangNextBtn').prop('disabled', true);
    }
    else {
        $('#otherlangNextBtn').prop('disabled', false);
    }    
    
}
function likeFitFn(value){
    likeFit = value;
    $('#sLikeTxt').val(likeFit);
    if(value == "In Highschool"){
        $("#highschoolChk").show().html();
        $("#studentChk").hide();
        $("#employChk").hide();
        $("#unemployChk").hide();
        $("#stayhomeChk").hide();
        $("#retiredChk").hide();
    }
    else if(value=="Student"){
        $("#highschoolChk").hide();
        $("#studentChk").show().html();
        $("#employChk").hide();
        $("#unemployChk").hide();
        $("#stayhomeChk").hide();
        $("#retiredChk").hide();
    }
    else if(value=="Employee"){
        
        $("#highschoolChk").hide();
        $("#studentChk").hide();
        $("#employChk").show().html();
        $("#unemployChk").hide();
        $("#stayhomeChk").hide();
        $("#retiredChk").hide();
    }
    else if(value=="Unemployed"){
        $("#highschoolChk").hide();
        $("#studentChk").hide();
        $("#employChk").hide();
        $("#unemployChk").show().html();
        $("#stayhomeChk").hide();
        $("#retiredChk").hide();
    }
    else if(value=="Stay-at-home mom/dad"){
        $("#highschoolChk").hide();
        $("#studentChk").hide();
        $("#employChk").hide();
        $("#unemployChk").hide();
        $("#stayhomeChk").show().html();
        $("#retiredChk").hide();
    }
    else if(value=="Retired"){
        $("#highschoolChk").hide();
        $("#studentChk").hide();
        $("#employChk").hide();
        $("#unemployChk").hide();
        $("#stayhomeChk").hide();
        $("#retiredChk").show().html();
    }
    $('#gotobabysecondtimelinenext').prop('disabled', false);
}
function childamountFn(value){
    childAmount = value;
    $('#sChildamountTxt').val(value);
    if(value == "1"){
        $("#oneChildChk").show().html();
        $("#twoChildChk").hide();
        $("#threeChildChk").hide();
        $("#fourChildChk").hide();
        $("#highChildChk").hide();
    }
    else if(value=="2"){
        $("#oneChildChk").hide();
        $("#twoChildChk").show().html();
        $("#threeChildChk").hide();
        $("#fourChildChk").hide();
        $("#highChildChk").hide();
    }
    else if(value=="3"){
        
        $("#oneChildChk").hide();
        $("#twoChildChk").hide();
        $("#threeChildChk").show().html();
        $("#fourChildChk").hide();
        $("#highChildChk").hide();
    }
    else if(value=="4"){
        $("#oneChildChk").hide();
        $("#twoChildChk").hide();
        $("#threeChildChk").hide();
        $("#fourChildChk").show().html();
        $("#highChildChk").hide();
    }
    else if(value=="4+"){
        $("#oneChildChk").hide();
        $("#twoChildChk").hide();
        $("#threeChildChk").hide();
        $("#fourChildChk").hide();
        $("#highChildChk").show().html();
    }
    $('#childamountNextBtn').prop('disabled', false);
}
function experienceYearsFn(value){
    experienceYears = value;
    $('#sExperienceTxt').val(experienceYears);
    console.log(experienceYears);
    if(value == "0"){
        $("#noExpChk").show().html();
        $("#oneExpChk").hide();
        $("#twoExpChk").hide();
        $("#threeExpChk").hide();
        $("#fourExpChk").hide();
        $("#fiveExpChk").hide();
        $("#highExpChk").hide();
    }
    else if(value == "1"){
        $("#noExpChk").hide();
        $("#oneExpChk").show().html();
        $("#twoExpChk").hide();
        $("#threeExpChk").hide();
        $("#fourExpChk").hide();
        $("#fiveExpChk").hide();
        $("#highExpChk").hide();
    }
    else if(value=="2"){
        $("#noExpChk").hide();
        $("#oneExpChk").hide();
        $("#twoExpChk").show().html();
        $("#threeExpChk").hide();
        $("#fourExpChk").hide();
        $("#fiveExpChk").hide();
        $("#highExpChk").hide();
    }
    else if(value=="3"){
        $("#noExpChk").hide();
        $("#oneExpChk").hide();
        $("#twoExpChk").hide();
        $("#threeExpChk").show().html();
        $("#fourExpChk").hide();
        $("#fiveExpChk").hide();
        $("#highExpChk").hide();
    }
    else if(value=="4"){
        $("#noExpChk").hide();
        $("#oneExpChk").hide();
        $("#twoExpChk").hide();
        $("#threeExpChk").hide();
        $("#fourExpChk").show().html();
        $("#fiveExpChk").hide();
        $("#highExpChk").hide();
    }
    else if(value=="5"){
        $("#noExpChk").hide();
        $("#oneExpChk").hide();
        $("#twoExpChk").hide();
        $("#threeExpChk").hide();
        $("#fourExpChk").hide();
        $("#fiveExpChk").show().html();
        $("#highExpChk").hide();
    }
    else if(value=="5+"){
        $("#noExpChk").hide();
        $("#oneExpChk").hide();
        $("#twoExpChk").hide();
        $("#threeExpChk").hide();
        $("#fourExpChk").hide();
        $("#fiveExpChk").hide();
        $("#highExpChk").show().html();
    }
    $('#experienceYearNextBtn').prop('disabled', false);
}
function genderCheck(value){
    gender = value;
    if(value=="Male"){

        $("#female").removeClass("btn-info").addClass("btn-light");
        $("#male").removeClass("btn-light").addClass("btn-info");
    }
    else{
        $("#female").removeClass("btn-light").addClass("btn-info");
        $("#male").removeClass("btn-info").addClass("btn-light");
    }

}
function childGender(value){
    cgender = value;
    if(value=="boy"){
        $("#childgirl").removeClass("btn-info").addClass("btn-light");
        $("#childboy").removeClass("btn-light").addClass("btn-info");
    }
    else{
        $("#childgirl").removeClass("btn-light").addClass("btn-info");
        $("#childboy").removeClass("btn-info").addClass("btn-light");
    }

}
function careCheck(value){
    afterschool = value;
    $('#afterschoolTxt').val(afterschool);
    if(value=="Yes"){
        $("#checkcareyes").show().html();
        $("#checkcareno").hide();
    }
    else if(value=="No"){
        $("#checkcareyes").hide();
        $("#checkcareno").show().html();
    }
    $('#afterschoolNextBtn').prop('disabled', false);
}

//birthday select option change event
function changeBirth_day(value){
    birth_day = value.value;
    if(birth_day!='' && birth_month!='' && birth_year!=''){
        $('#nbirthBtn').prop('disabled', false);
    }
}
function changeBirth_month(value){
    birth_month = value.value;
    if(birth_day!='' && birth_month!='' && birth_year!=''){
        $('#nbirthBtn').prop('disabled', false);
    }
}
function changeBirth_year(value){
    birth_year = value.value;
    if(birth_day!='' && birth_month!='' && birth_year!=''){
        $('#nbirthBtn').prop('disabled', false);
    }
}
// address 
function getCity(value){
    city = value.value;
    if(city!='' && street!='' && street_no!=''){
        $('#naddrBtn').prop('disabled', false);
    }
}
function getStreet(value){
    street = value.value;
    if(city!='' && street!='' && street_no!=''){
        $('#naddrBtn').prop('disabled', false);
    }
}
function getStreetNo(value){
    street_no = value.value;
    if(city!='' && street!='' && street_no!=''){
        $('#naddrBtn').prop('disabled', false);
    }
}
function getDescription(value){
    userDesc = value.value;
    if(userDesc!=''){
        $('#ndescBtn').prop('disabled', false);
    }
}

//birthday of child select option change event
function changecBirth_day(value){
    cbirth_day = value.value;
    if(cbirth_day!='' && cbirth_month!='' && cbirth_year!=''){
        $('#nchildgbBtn').prop('disabled', false);
        if(cgender==''){
            cgender = "girl";
        }
    }
    
}
function changecBirth_month(value){
    cbirth_month = value.value;
    if(cbirth_day!='' && cbirth_month!='' && cbirth_year!=''){
        $('#nchildgbBtn').prop('disabled', false);
        if(cgender==''){
            cgender = "girl";
        }
    }
}
function changecBirth_year(value){
    cbirth_year = value.value;
    if(cbirth_day!='' && cbirth_month!='' && cbirth_year!=''){
        $('#nchildgbBtn').prop('disabled', false);
        if(cgender==''){
            cgender = "girl";
        }
    }
}
//birthday of expecting baby select option change event
function changebBirth_day(value){
    bbirth_day = value.value;
    if(bbirth_day!='' && bbirth_month!='' && bbirth_year!=''){
        $('#nbabyexpecBtn').prop('disabled', false);
    }
}
function changebBirth_month(value){
    bbirth_month = value.value;
    if(bbirth_day!='' && bbirth_month!='' && bbirth_year!=''){
        $('#nbabyexpecBtn').prop('disabled', false);
    }
}
function changebBirth_year(value){
    bbirth_year = value.value;
    if(bbirth_day!='' && bbirth_month!='' && bbirth_year!=''){
        $('#nbabyexpecBtn').prop('disabled', false);
    }
}

function childdescFn(value){
    var calmChk = document.getElementById("calmChk");
    var energeticChk = document.getElementById("energeticChk");
    var quietChk = document.getElementById("quietChk");
    var talkativeChk = document.getElementById("talkativeChk");
    var creativeChk = document.getElementById("creativeChk");
    var sportyChk = document.getElementById("sportyChk");
    var curiousChk = document.getElementById("curiousChk");
    var funnyChk = document.getElementById("funnyChk");
    var mishChk = document.getElementById("mishChk");
    var stubChk = document.getElementById("stubChk");
    if(value == 'calmChk'){
        if (calmChk.checked == true){
            ChildIsCalm = true;
            
        } else {
            ChildIsCalm = false;
        }
        console.log(ChildIsCalm);
    }
    if(value == 'energeticChk'){
        if (energeticChk.checked == true){
            ChildIsEnergetic = true;
        } else {
            ChildIsEnergetic = false;
        }
    }

    if(value == 'quietChk'){
        if (quietChk.checked == true){
            ChildIsQuiet = true;
        } else {
            ChildIsQuiet = false;
        }
    }
    if(value == 'talkativeChk'){
        if (talkativeChk.checked == true){
            ChildIsTalkative = true;
        } else {
            ChildIsTalkative = false;
        }
    }
    if(value == 'creativeChk'){
        if (creativeChk.checked == true){
            ChildIsCreative = true;
        } else {
            ChildIsCreative = false;
        }
    }
    if(value == 'sportyChk'){
        if (sportyChk.checked == true){
            ChildIsSporty = true;
        } else {
            ChildIsSporty = false;
        }
    }
    if(value == 'curiousChk'){
        if (curiousChk.checked == true){
            ChildIsCurios = true;
        } else {
            ChildIsCurios = false;
        }
    }
    if(value == 'funnyChk'){
        if (funnyChk.checked == true){
            ChildIsFunny = true;
        } else {
            ChildIsFunny = false;
        }
    }
    if(value == 'mishChk'){
        if (mishChk.checked == true){
            ChildIsMischievous = true;
        } else {
            ChildIsMischievous = false;
        }
    }
    if(value == 'stubChk'){
        if (stubChk.checked == true){
            ChildIsStubborn = true;
        } else {
            ChildIsStubborn = false;
        }
    }
    if(ChildIsCalm==false && ChildIsQuiet==false && ChildIsCreative==false && ChildIsCurios==false && ChildIsEnergetic==false && ChildIsTalkative==false && ChildIsSporty==false && ChildIsFunny==false && ChildIsMischievous==false && ChildIsStubborn==false){
        $('#gotochildviewnext').prop('disabled', true);
    }
    else {
        $('#gotochildviewnext').prop('disabled', false);
    }
}
function scheduleFn(value){
    var occasChk = document.getElementById("occasChk");
    var regularChk = document.getElementById("regularChk");
    if(value=='occasChk'){
        if (occasChk.checked == true){
            occasSch = true;
            
        } else {
            occasSch = false;
        }
    }
    if(value=='regularChk'){
        if (regularChk.checked == true){
            regularSch = true;
            
        } else {
            regularSch = false;
        }
    }
    if(occasSch == false && regularSch == false){
        $('#scheduletimeBtn').prop('disabled', true);
    }
    else {
        $('#scheduletimeBtn').prop('disabled', false);
    }
}
function rschTimeFn(value){
    var mmChk = document.getElementById("mm");
    var maChk = document.getElementById("ma");
    var meChk = document.getElementById("me");
    var tumChk = document.getElementById("tum");
    var tuaChk = document.getElementById("tua");
    var tueChk = document.getElementById("tue");
    var wmChk = document.getElementById("wm");
    var waChk = document.getElementById("wa");
    var weChk = document.getElementById("we");
    var thmChk = document.getElementById("thm");
    var thaChk = document.getElementById("tha");
    var theChk = document.getElementById("the");
    var fmChk = document.getElementById("fm");
    var faChk = document.getElementById("fa");
    var feChk = document.getElementById("fe");
    var samChk = document.getElementById("sam");
    var saaChk = document.getElementById("saa");
    var saeChk = document.getElementById("sae");
    var sumChk = document.getElementById("sum");
    var suaChk = document.getElementById("sua");
    var sueChk = document.getElementById("sue");
    if(value=='mm'){
        if (mmChk.checked == true){
            mm = true;
            
        } else {
            mm = false;
        }
    }
    if(value=='ma'){
        if (maChk.checked == true){
            ma = true;
            
        } else {
            ma = false;
        }
    }
    if(value=='me'){
        if (meChk.checked == true){
            me = true;
            
        } else {
            me = false;
        }
    }
    if(value=='tum'){
        if (tumChk.checked == true){
            tum = true;
            
        } else {
            tum = false;
        }
    }
    if(value=='tua'){
        if (tuaChk.checked == true){
            tua = true;
            
        } else {
            tua = false;
        }
    }
    if(value=='tue'){
        if (tueChk.checked == true){
            tue = true;
            
        } else {
            tue = false;
        }
    }
    if(value=='wm'){
        if (wmChk.checked == true){
            wm = true;
            
        } else {
            wm = false;
        }
    }
    if(value=='wa'){
        if (waChk.checked == true){
            wa = true;
            
        } else {
            wa = false;
        }
    }
    if(value=='we'){
        if (weChk.checked == true){
            we = true;
            
        } else {
            we = false;
        }
    }
    if(value=='thm'){
        if (thmChk.checked == true){
            thm = true;
            
        } else {
            thm = false;
        }
    }
    if(value=='tha'){
        if (thaChk.checked == true){
            tha = true;
            
        } else {
            tha = false;
        }
    }
    if(value=='the'){
        if (theChk.checked == true){
            the = true;
            
        } else {
            the = false;
        }
    }
    if(value=='fm'){
        if (fmChk.checked == true){
            fm = true;
            
        } else {
            fm = false;
        }
    }
    if(value=='fa'){
        if (faChk.checked == true){
            fa = true;
            
        } else {
            fa = false;
        }
    }
    if(value=='fe'){
        if (feChk.checked == true){
            fe = true;
            
        } else {
            fe = false;
        }
    }
    if(value=='sam'){
        if (samChk.checked == true){
            sam = true;
            
        } else {
            sam = false;
        }
    }
    if(value=='saa'){
        if (saaChk.checked == true){
            saa = true;
            
        } else {
            saa = false;
        }
    }
    if(value=='sae'){
        if (saeChk.checked == true){
            sae = true;
            
        } else {
            sae = false;
        }
    }
    if(value=='sum'){
        if (sumChk.checked == true){
            sum = true;
            
        } else {
            sum = false;
        }
    }
    if(value=='sua'){
        if (suaChk.checked == true){
            sua = true;
            
        } else {
            sua = false;
        }
    }
    if(value=='sue'){
        if (sueChk.checked == true){
            sue = true;
            
        } else {
            sue = false;
        }
    }

    if( mm == false && ma == false && me==false && tum == false && tua == false && tue==false && wm == false && wa == false && we==false && thm == false && tha == false && the==false && fm == false && fa == false && fe==false && sam == false && saa == false && sae==false && sum == false && sua == false && sue==false ){
        $('#rschTimeNextBtn').prop('disabled', true);
    }
    else {
        $('#rschTimeNextBtn').prop('disabled', false);
    }
}

function choresFn(value){
    var groceriesChk = document.getElementById("groceriesChk");
    var cookingChk = document.getElementById("cookingChk");
    var drivingChk = document.getElementById("drivingChk");
    var choresChk = document.getElementById("choresChk");
    var homeworkChk = document.getElementById("homeworkChk");
    var compulsoryChk = document.getElementById("compulsoryChk");
    var specializedChk = document.getElementById("specializedChk");
    if(value=='groceriesChk'){
        if (groceriesChk.checked == true){
            AdChoreGroceries = true;
            
        } else {
            AdChoreGroceries = false;
        }
    }
    if(value=='cookingChk'){
        if (cookingChk.checked == true){
            AdChoreCooking = true;
            
        } else {
            AdChoreCooking = false;
        }
    }
    if(value=='drivingChk'){
        if (drivingChk.checked == true){
            AdChoreDriving = true;
            
        } else {
            AdChoreDriving = false;
        }
    }
    if(value=='choresChk'){
        if (choresChk.checked == true){
            AdChoreLightHouse = true;
            
        } else {
            AdChoreLightHouse = false;
        }
    }
    if(value=='homeworkChk'){
        if (homeworkChk.checked == true){
            AdChoreHomework = true;
            
        } else {
            AdChoreHomework = false;
        }
    }
    if(value=='compulsoryChk'){
        if (compulsoryChk.checked == true){
            AdChoreStudyHelpCompulsory = true;
            
        } else {
            AdChoreStudyHelpCompulsory = false;
        }
    }
    if(value=='specializedChk'){
        if (specializedChk.checked == true){
            AdChoreStudyHelpSpecialized = true;
            
        } else {
            AdChoreStudyHelpSpecialized = false;
        }
    }
    if( AdChoreGroceries == false && AdChoreCooking == false && AdChoreDriving==false && AdChoreLightHouse == false && AdChoreHomework == false && AdChoreStudyHelpCompulsory==false && AdChoreStudyHelpSpecialized == false ){
        $('#choresNextBtn').prop('disabled', true);
    }
    else {
        $('#choresNextBtn').prop('disabled', false);
    }
}

function willingPriceFn(value){
    // var price4eurChk = document.getElementById("price4eurChk");
    // var price8to10Chk = document.getElementById("price8to10Chk");
    // var price4to6Chk = document.getElementById("price4to6Chk");
    // var price10eurChk = document.getElementById("price10eurChk");
    // var price6to8Chk = document.getElementById("price6to8Chk");
    // var priceNegotiableChk = document.getElementById("cookingChk");
    // if(value=='price4eurChk'){
    //     if (price4eurChk.checked == true){
    //         price4eur = true;
            
    //     } else {
    //         price4eur = false;
    //     }
    // }
    // if(value=='price8to10Chk'){
    //     if (price8to10Chk.checked == true){
    //         price8to10 = true;
            
    //     } else {
    //         price8to10 = false;
    //     }
    // }
    // if(value=='price4to6Chk'){
    //     if (price4to6Chk.checked == true){
    //         price4to6 = true;
            
    //     } else {
    //         price4to6 = false;
    //     }
    // }
    // if(value=='price10eurChk'){
    //     if (price10eurChk.checked == true){
    //         price10eur = true;
            
    //     } else {
    //         price10eur = false;
    //     }
    // }
    // if(value=='price6to8Chk'){
    //     if (price6to8Chk.checked == true){
    //         price6to8 = true;
            
    //     } else {
    //         price6to8 = false;
    //     }
    // }
    // if(value=='priceNegotiableChk'){
    //     if (priceNegotiableChk.checked == true){
    //         priceNegotiable = true;
            
    //     } else {
    //         priceNegotiable = false;
    //     }
    // }
    // if( price4eur == false && price4to6 == false && price6to8==false && price8to10 == false && price10eur == false && priceNegotiable==false ){
    //     $('#nexthide').prop('disabled', true);
    // }
    // else {
    //     $('#nexthide').prop('disabled', false);
    // }
    willingprice = value;
    $('#willingpriceTxt').val(willingprice);
    if(value=="<4"){
        $("#price4eurChk").show().html();
        $("#price4to6Chk").hide();
        $("#price7to8Chk").hide();
        $("#price9to10Chk").hide();
        $("#price10eurChk").hide();
        $("#priceNegotiableChk").hide();
    }
    else if(value=="4-6"){
        $("#price4eurChk").hide();
        $("#price4to6Chk").show().html();
        $("#price7to8Chk").hide();
        $("#price9to10Chk").hide();
        $("#price10eurChk").hide();
        $("#priceNegotiableChk").hide();
    }
    else if(value=="7-8"){
        $("#price4eurChk").hide();
        $("#price4to6Chk").hide();
        $("#price7to8Chk").show().html();
        $("#price9to10Chk").hide();
        $("#price10eurChk").hide();
        $("#priceNegotiableChk").hide();
    }
    else if(value=="9-10"){
        $("#price4eurChk").hide();
        $("#price4to6Chk").hide();
        $("#price7to8Chk").hide();
        $("#price9to10Chk").show().html();
        $("#price10eurChk").hide();
        $("#priceNegotiableChk").hide();
    }
    else if(value==">10"){
        $("#price4eurChk").hide();
        $("#price4to6Chk").hide();
        $("#price7to8Chk").hide();
        $("#price9to10Chk").hide();
        $("#price10eurChk").show().html();
        $("#priceNegotiableChk").hide();
    }
    else if(value=="Negotiable"){
        $("#price4eurChk").hide();
        $("#price4to6Chk").hide();
        $("#price7to8Chk").hide();
        $("#price9to10Chk").hide();
        $("#price10eurChk").hide();
        $("#priceNegotiableChk").show().html();
    }
    $('#nexthide').prop('disabled', false);    
}
function babyExpeFn(){
    var babyexpeChk = document.getElementById("babyexpeChk");
    if (babyexpeChk.checked == true){
        priceNegotiable = true;
        $("#babyexpeDesc").show().html();
       
    } else {
        $("#babyexpeDesc").hide();
    }
}
function addChildDescFn(){
    var addChildDescChk = document.getElementById("addChildDescChk");
    if (addChildDescChk.checked == true){
        priceNegotiable = true;
        $("#addChildDescTxt").show().html();
       
    } else {
        $("#addChildDescTxt").hide();
    }
}
function encodeImgtoBase64(element) {
 
    var img = element.files[0];
    var reader = new FileReader();
    reader.onloadend = function() {
        // $("#convertImg").attr("href",reader.result);
        // $("#convertImg").text(reader.result);
        $("#displayImg").attr("src", reader.result);
        parentBase64Img = reader.result
    }
    reader.readAsDataURL(img);
}

function sDescFn(value){
    var sCalmChk = document.getElementById("sCalmChk");
    var sCreativeChk = document.getElementById("sCreativeChk");
    var sPatientChk = document.getElementById("sPatientChk");
    var sEnthuChk = document.getElementById("sEnthuChk");
    var sKindChk = document.getElementById("sKindChk");
    var sCaringChk = document.getElementById("sCaringChk");
    var sFunnyChk = document.getElementById("sFunnyChk");
    var sTalkativeChk = document.getElementById("sTalkativeChk");
    var sStrictChk = document.getElementById("sStrictChk");
    var sTolerantChk = document.getElementById("sTolerantChk");
    if(value=='sCalmChk'){
        if (sCalmChk.checked == true){
            sCalm = true;
            
        } else {
            sCalm = false;
        }
    }
    if(value=='sCreativeChk'){
        if (sCreativeChk.checked == true){
            sCreative = true;
            
        } else {
            sCreative = false;
        }
    }
    if(value=='sPatientChk'){
        if (sPatientChk.checked == true){
            sPatient = true;
            
        } else {
            sPatient = false;
        }
    }
    if(value=='sEnthuChk'){
        if (sEnthuChk.checked == true){
            sEnthu = true;
            
        } else {
            sEnthu = false;
        }
    }
    if(value=='sKindChk'){
        if (sKindChk.checked == true){
            sKind = true;
            
        } else {
            sKind = false;
        }
    }
    if(value=='sCaringChk'){
        if (sCaringChk.checked == true){
            sCaring = true;
            
        } else {
            sCaring = false;
        }
    }
    if(value=='sKindChk'){
        if (sKindChk.checked == true){
            sKind = true;
            
        } else {
            sKind = false;
        }
    }
    if(value=='sCaringChk'){
        if (sCaringChk.checked == true){
            sCaring = true;
            
        } else {
            sCaring = false;
        }
    }

    if(value=='sFunnyChk'){
        if (sFunnyChk.checked == true){
            sFunny = true;
            
        } else {
            sFunny = false;
        }
    }
    if(value=='sTalkativeChk'){
        if (sTalkativeChk.checked == true){
            sTalkative = true;
            
        } else {
            sTalkative = false;
        }
    }
    if(value=='sStrictChk'){
        if (sStrictChk.checked == true){
            sStrict = true;
            
        } else {
            sStrict = false;
        }
    }
    if(value=='sTolerantChk'){
        if (sTolerantChk.checked == true){
            sTolerant = true;
            
        } else {
            sTolerant = false;
        }
    }
    if(sCalm==false && sCreative==false && sPatient==false && sEnthu==false && sKind==false && sCaring==false && sFunny==false && sTalkative==false && sStrict==false && sTolerant==false){
        $('#sDescNextBtn').prop('disabled', true);
    }
    else {
        $('#sDescNextBtn').prop('disabled', false);
    }
}
function sSmokeFn(value){
    sSmoke = value;
    $('#ssmokeTxt').val(sSmoke);
    if(value=="Yes"){
        $("#ssmokeOptYes").show().html();
        $("#ssmokeOptNo").hide();
    }
    else if(value=="No"){
        $("#ssmokeOptYes").hide();
        $("#ssmokeOptNo").show().html();
    }
    $('#ssmokeNextBtn').prop('disabled', false);
}
    
function sAppliedFn(value){
    var sAidChk = document.getElementById("sAidChk");
    var sBehaviourChk = document.getElementById("sBehaviourChk");
    var sDriverChk = document.getElementById("sDriverChk");
    var sCarChk = document.getElementById("sCarChk");
    var sUnblockingChk = document.getElementById("sUnblockingChk");
    var sCriminalChk = document.getElementById("sCriminalChk");
    if(value=='sAidChk'){
        if (sAidChk.checked == true){
            sAid = true;
            
        } else {
            sAid = false;
        }
    }
    if(value=='sBehaviourChk'){
        if (sBehaviourChk.checked == true){
            sBehaviour = true;
            
        } else {
            sBehaviour = false;
        }
    }
    if(value=='sDriverChk'){
        if (sDriverChk.checked == true){
            sDriver = true;
            
        } else {
            sDriver = false;
        }
    }
    if(value=='sCarChk'){
        if (sCarChk.checked == true){
            sCar = true;
            
        } else {
            sCar = false;
        }
    }
    if(value=='sUnblockingChk'){
        if (sUnblockingChk.checked == true){
            sUnblocking = true;
            
        } else {
            sUnblocking = false;
        }
    }
    if(value=='sCriminalChk'){
        if (sCriminalChk.checked == true){
            sCriminal = true;
            
        } else {
            sCriminal = false;
        }
    }   
    if(sAid==false && sBehaviour==false && sDriver==false && sCar==false && sUnblocking==false && sCriminal==false){
        $('#sAppliedTxt').prop('disabled', true);
    }
    else {
        $('#sAppliedTxt').prop('disabled', false);
    }
}
function sGoodFn(value){
    var sArtChk = document.getElementById("sArtChk");
    var sMusicChk = document.getElementById("sMusicChk");
    var sBakingChk = document.getElementById("sBakingChk");
    var sSportChk = document.getElementById("sSportChk");
    var sGamesChk = document.getElementById("sGamesChk");
    var sReadingChk = document.getElementById("sReadingChk");
    if(value=='sArtChk'){
        if (sArtChk.checked == true){
            sArt = true;
            
        } else {
            sArt = false;
        }
    }
    if(value=='sMusicChk'){
        if (sMusicChk.checked == true){
            sMusic = true;
            
        } else {
            sMusic = false;
        }
    }
    if(value=='sBakingChk'){
        if (sBakingChk.checked == true){
            sBaking = true;
            
        } else {
            sBaking = false;
        }
    }
    if(value=='sSportChk'){
        if (sSportChk.checked == true){
            sSport = true;
            
        } else {
            sSport = false;
        }
    }
    if(value=='sGamesChk'){
        if (sGamesChk.checked == true){
            sGames = true;
            
        } else {
            sGames = false;
        }
    }
    if(value=='sReadingChk'){
        if (sReadingChk.checked == true){
            sReading = true;
            
        } else {
            sReading = false;
        }
    }   
    if(sArt==false && sMusic==false && sBaking==false && sSport==false && sGames==false && sReading==false){
        $('#sGoodNextBtn').prop('disabled', true);
    }
    else {
        $('#sGoodNextBtn').prop('disabled', false);
    }
}
function sBabysityexpecFn(value){
    var sBablesChk = document.getElementById("sBablesChk");
    var sToddlersChk = document.getElementById("sToddlersChk");
    var sKindergartenersChk = document.getElementById("sKindergartenersChk");
    var sGradeChk = document.getElementById("sGradeChk");
    var sTeenagersChk = document.getElementById("sTeenagersChk");
    var sCollegeChk = document.getElementById("sCollegeChk");
    var sAdultChk = document.getElementById("sAdultChk");
    if(value=='sBablesChk'){
        if (sBablesChk.checked == true){
            sBables = true;
            
        } else {
            sBables = false;
        }
    }
    if(value=='sToddlersChk'){
        if (sToddlersChk.checked == true){
            sToddlers = true;
            
        } else {
            sToddlers = false;
        }
    }
    if(value=='sKindergartenersChk'){
        if (sKindergartenersChk.checked == true){
            sKindergarteners = true;
            
        } else {
            sKindergarteners = false;
        }
    }
    if(value=='sGradeChk'){
        if (sGradeChk.checked == true){
            sGrade = true;
            
        } else {
            sGrade = false;
        }
    }
    if(value=='sTeenagersChk'){
        if (sTeenagersChk.checked == true){
            sTeenagers = true;
            
        } else {
            sTeenagers = false;
        }
    }
    if(value=='sCollegeChk'){
        if (sCollegeChk.checked == true){
            sCollege = true;
            
        } else {
            sCollege = false;
        }
    }   
    if(value=='sAdultChk'){
        if (sAdultChk.checked == true){
            sAdult = true;
            
        } else {
            sAdult = false;
        }
    }
    if(sBables==false && sToddlers==false && sKindergarteners==false && sGrade==false && sTeenagers==false && sCollege==false && sAdult==false){
        $('#sBabysityexpecNextBtn').prop('disabled', true);
    }
    else {
        $('#sBabysityexpecNextBtn').prop('disabled', false);
    }
}
function sReferenceFn(value){

    $('#sReferenceTxt').val(value);
    sReference = value;
    
    if(value=="Yes"){
        $("#sReferYesOpt").show().html();
        $("#sReferNoOpt").hide();
    }
    else if(value=="No"){
        $("#sReferYesOpt").hide();
        $("#sReferNoOpt").show().html();
    }
    console.log(sReference);
    $('#sReferenceNextBtn').prop('disabled', false);
}

function sChoresFn(value){
    var sGroceriesChk = document.getElementById("sGroceriesChk");
    var sCookingChk = document.getElementById("sCookingChk");
    var sDrivingChk = document.getElementById("sDrivingChk");
    var sLightHouseChk = document.getElementById("sLightHouseChk");
    var sHomeworkChk = document.getElementById("sHomeworkChk");
    var sCompusoryChk = document.getElementById("sCompusoryChk");
    var sSpecializedChk = document.getElementById("sSpecializedChk");
    if(value=='sGroceriesChk'){
        if (sGroceriesChk.checked == true){
            sGroceries = true;
            
        } else {
            sGroceries = false;
        }
    }
    if(value=='sCookingChk'){
        if (sCookingChk.checked == true){
            sCooking = true;
            
        } else {
            sCooking = false;
        }
    }
    if(value=='sDrivingChk'){
        if (sDrivingChk.checked == true){
            sDriving = true;
            
        } else {
            sDriving = false;
        }
    }
    if(value=='sLightHouseChk'){
        if (sLightHouseChk.checked == true){
            sLightHouse = true;
            
        } else {
            sLightHouse = false;
        }
    }
    if(value=='sHomeworkChk'){
        if (sHomeworkChk.checked == true){
            sHomework = true;
            
        } else {
            sHomework = false;
        }
    }
    if(value=='sCompusoryChk'){
        if (sCompusoryChk.checked == true){
            sCompusory = true;
            
        } else {
            sCompusory = false;
        }
    }
    if(value=='sSpecializedChk'){
        if (sSpecializedChk.checked == true){
            sSpecialized = true;
            
        } else {
            sSpecialized = false;
        }
    }
    if(sGroceries==false && sCooking==false && sLightHouse==false && sHomework==false && sCompusory==false && sSpecialized==false){
        $('#gotobabythirdtimelinenext').prop('disabled', true);
    }
    else {
        $('#gotobabythirdtimelinenext').prop('disabled', false);
    }
}

function sHourlyRateFn(value){
    $('#sHourlyRateTxt').val(value);
    if(value=="<4"){
        $("#sHourly0to3Opt").show().html();
        $("#sHourly4to6Opt").hide();
        $("#sHourly6to8Opt").hide();
        $("#sHourly8to1Opt").hide();
        $("#sHourly10toUpOpt").hide();
        $("#sHourlyNegotiableOpt").hide();
    }
    else if(value=="4-6"){
        $("#sHourly0to3Opt").hide();
        $("#sHourly4to6Opt").show().html();
        $("#sHourly6to8Opt").hide();
        $("#sHourly8to1Opt").hide();
        $("#sHourly10toUpOpt").hide();
        $("#sHourlyNegotiableOpt").hide();
    }
    else if(value=="7-8"){
        $("#sHourly0to3Opt").hide();
        $("#sHourly4to6Opt").hide();
        $("#sHourly6to8Opt").show().html();
        $("#sHourly8to1Opt").hide();
        $("#sHourly10toUpOpt").hide();
        $("#sHourlyNegotiableOpt").hide();
    }
    else if(value=="9-10"){
        $("#sHourly0to3Opt").hide();
        $("#sHourly4to6Opt").hide();
        $("#sHourly6to8Opt").hide();
        $("#sHourly8to1Opt").show().html();
        $("#sHourly10toUpOpt").hide();
        $("#sHourlyNegotiableOpt").hide();
    }
    else if(value==">10"){
        $("#sHourly0to3Opt").hide();
        $("#sHourly4to6Opt").hide();
        $("#sHourly6to8Opt").hide();
        $("#sHourly8to1Opt").hide();
        $("#sHourly10toUpOpt").show().html();
        $("#sHourlyNegotiableOpt").hide();
    }
    else if(value=="Negotiable"){
        $("#sHourly0to3Opt").hide();
        $("#sHourly4to6Opt").hide();
        $("#sHourly6to8Opt").hide();
        $("#sHourly8to1Opt").hide();
        $("#sHourly10toUpOpt").hide();
        $("#sHourlyNegotiableOpt").show().html();
    }
    $('#sHourlyRateNextBtn').prop('disabled', false);
}
function sScheduleFn(value){
    var sOccasinallyChk = document.getElementById("sOccasinallyChk");
    var sRegularChk = document.getElementById("sRegularChk");
    if(value=='sOccasinallyChk'){
        if (sOccasinallyChk.checked == true){
            sOccasinally = true;
            
        } else {
            sOccasinally = false;
        }
    }
    if(value=='sRegularChk'){
        if (sRegularChk.checked == true){
            sRegular = true;
            
        } else {
            sRegular = false;
        }
    }
    if(sOccasinally==false && sRegular==false){
        $('#sScheduleNextBtn').prop('disabled', true);
    }
    else {
        $('#sScheduleNextBtn').prop('disabled', false);
    }
}

function srschTimeFn(value){
    var smmChk = document.getElementById("smm");
    var smaChk = document.getElementById("sma");
    var smeChk = document.getElementById("sme");
    var stumChk = document.getElementById("stum");
    var stuaChk = document.getElementById("stua");
    var stueChk = document.getElementById("stue");
    var swmChk = document.getElementById("swm");
    var swaChk = document.getElementById("swa");
    var sweChk = document.getElementById("swe");
    var sthmChk = document.getElementById("sthm");
    var sthaChk = document.getElementById("stha");
    var stheChk = document.getElementById("sthe");
    var sfmChk = document.getElementById("sfm");
    var sfaChk = document.getElementById("sfa");
    var sfeChk = document.getElementById("sfe");
    var ssamChk = document.getElementById("ssam");
    var ssaaChk = document.getElementById("ssaa");
    var ssaeChk = document.getElementById("ssae");
    var ssumChk = document.getElementById("ssum");
    var ssuaChk = document.getElementById("ssua");
    var ssueChk = document.getElementById("ssue");
    if(value=='smm'){
        if (smmChk.checked == true){
            smm = true;
            
        } else {
            smm = false;
        }
    }
    if(value=='sma'){
        if (smaChk.checked == true){
            sma = true;
            
        } else {
            sma = false;
        }
    }
    if(value=='sme'){
        if (smeChk.checked == true){
            sme = true;
            
        } else {
            sme = false;
        }
    }
    if(value=='stum'){
        if (stumChk.checked == true){
            stum = true;
            
        } else {
            stum = false;
        }
    }
    if(value=='stua'){
        if (stuaChk.checked == true){
            stua = true;
            
        } else {
            stua = false;
        }
    }
    if(value=='stue'){
        if (stueChk.checked == true){
            stue = true;
            
        } else {
            stue = false;
        }
    }
    if(value=='swm'){
        if (swmChk.checked == true){
            swm = true;
            
        } else {
            swm = false;
        }
    }
    if(value=='swa'){
        if (swaChk.checked == true){
            swa = true;
            
        } else {
            swa = false;
        }
    }
    if(value=='swe'){
        if (sweChk.checked == true){
            swe = true;
            
        } else {
            swe = false;
        }
    }
    if(value=='sthm'){
        if (sthmChk.checked == true){
            sthm = true;
            
        } else {
            sthm = false;
        }
    }
    if(value=='stha'){
        if (sthaChk.checked == true){
            stha = true;
            
        } else {
            stha = false;
        }
    }
    if(value=='sthe'){
        if (stheChk.checked == true){
            sthe = true;
            
        } else {
            sthe = false;
        }
    }
    if(value=='sfm'){
        if (sfmChk.checked == true){
            sfm = true;
            
        } else {
            sfm = false;
        }
    }
    if(value=='sfa'){
        if (sfaChk.checked == true){
            sfa = true;
            
        } else {
            sfa = false;
        }
    }
    if(value=='sfe'){
        if (sfeChk.checked == true){
            sfe = true;
            
        } else {
            sfe = false;
        }
    }
    if(value=='ssam'){
        if (ssamChk.checked == true){
            ssam = true;
            
        } else {
            ssam = false;
        }
    }
    if(value=='ssaa'){
        if (ssaaChk.checked == true){
            ssaa = true;
            
        } else {
            ssaa = false;
        }
    }
    if(value=='ssae'){
        if (ssaeChk.checked == true){
            ssae = true;
            
        } else {
            ssae = false;
        }
    }
    if(value=='ssum'){
        if (ssumChk.checked == true){
            ssum = true;
            
        } else {
            ssum = false;
        }
    }
    if(value=='ssua'){
        if (ssuaChk.checked == true){
            ssua = true;
            
        } else {
            ssua = false;
        }
    }
    if(value=='ssue'){
        if (ssueChk.checked == true){
            ssue = true;
            
        } else {
            ssue = false;
        }
    }

    if( smm == false && sma == false && sme==false && stum == false && stua == false && stue==false && swm == false && swa == false && swe==false && sthm == false && stha == false && sthe==false && sfm == false && sfa == false && sfe==false && ssam == false && ssaa == false && ssae==false && ssum == false && ssua == false && ssue==false ){
        $('#sRegularTimeNextBtn').prop('disabled', true);
    }
    else {
        $('#sRegularTimeNextBtn').prop('disabled', false);
    }
}
function sAfterSchoolFn(value){
    $('#sAfterSchoolTxt').val(value);
    if(value=="Yes"){
        $("#sAfterSchoolYesOpt").show().html();
        $("#sAfterSchoolNoOpt").hide();
    }
    else if(value=="No"){
        $("#sAfterSchoolYesOpt").hide();
        $("#sAfterSchoolNoOpt").show().html();
    }
    $('#gotobabyendnext').prop('disabled', false);
}
function sEncodeImgtoBase64(element) {
    var img = element.files[0];
    var reader = new FileReader();
    reader.onloadend = function() {
        $("#sDisplayImg").attr("src", reader.result);
        sparentBase64Img = reader.result
    }
    reader.readAsDataURL(img);
}
function sReferenceDocChg(value) {
    sReferenceDocStatue = true;
    
    if(sReferenceDescriptionStatue == true){
        $('#uploaddocNextBtn').prop('disabled', false);
    }
}
function getsRefrenceDocDescription(value){
    var temp = value.value;
    
    if(temp!=''){
        sReferenceDescriptionStatue = true;
    }
    else {
        sReferenceDescriptionStatue = false;
    }
    
    if(sReferenceDescriptionStatue==true && sReferenceDocStatue == true){
        $('#uploaddocNextBtn').prop('disabled', false);
    }
    else{
        $('#uploaddocNextBtn').prop('disabled', true);
    }
}
function nativeLangChg(value){
    nativeLang = value.value;
    if(nativeLang!=''){
        $("#checkitalian").hide();
        $("#checkenglish").hide();
        $("#checkdeutsch").hide();
        $("#checkspanish").hide();
        $("#checkfrensh").hide();
        $('#parentorbabysitter').prop('disabled', false);
    }
    else{
        $('#parentorbabysitter').prop('disabled', true);
    }
    
}
function otherLangChg(value){
    otherlangselect =  value.value;
    if(sItalian==false && sEnglish==false && sDeutsch==false && sSpanish==false && sFrensh==false && otherlangselect==''){
        $('#otherlangNextBtn').prop('disabled', true);
    }
    else {
        $('#otherlangNextBtn').prop('disabled', false);
    } 

}
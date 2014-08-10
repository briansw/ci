var randNameIndex = false;
var randFontIndex = false;
var randColorIndex = false;
var running = false;
var flipper = true;
var nameSelected = false;
var done = false;
var stopping = false;
var alreadyPresented = new Array();
var fading = false;
var mouseDownTime = 0;
var studentdivs = new Array();

function init_wheel_of_fortune(students) {
	for (var i =0; i < students.length; i++) {
		studentdivs.push('<div class="name" data-href="' + students[i][1] + '">' + students[i][0] + '</div>');
	}
}

if(document.cookie) {
	index = document.cookie.indexOf("done");
	if (index != -1) {
		namestart = (document.cookie.indexOf("=", index) + 1);
		nameend = document.cookie.indexOf(";", index);
		if (nameend == -1) {nameend = document.cookie.length;}
		var studentdivsdone = document.cookie.substring(namestart, nameend);
		
		var presentedArray = studentdivsdone.split(',');
		for (var i=0;i<presentedArray.length;i++) { 
			var tempInt = parseInt(presentedArray[i]);
			alreadyPresented.push(tempInt);
			studentdivs.splice(tempInt, 1);
		}	
	}
}

var fonts = new Array(
	'Georgia, serif',
	'"Palatino Linotype", "Book Antiqua", Palatino, serif',
	'"Times New Roman", Times, serif',
	'"caslon", serif',
	'Arial, Helvetica, sans-serif',
	'"Arial Black", Gadget, sans-serif',
	'"Comic Sans MS", cursive, sans-serif',
	'Impact, Charcoal, sans-serif',
	'"Lucida Sans Unicode", "Lucida Grande", sans-serif',
	'Tahoma, Geneva, sans-serif',
	'"Trebuchet MS", Helvetica, sans-serif',
	'Verdana, Geneva, sans-serif',
	'"Courier New", Courier, monospace',
	'"Lucida Console", Monaco, monospace'
);

function writeCookie (value) {
    var date = new Date();
    date.setTime(+ date + 10800000); //3 hours
    window.document.cookie = "done=" + value + "; expires=" + date.toGMTString() + "; path=/";
    return value;
};


function getRandom(current,max) {
	randReturn = Math.floor(Math.random() * max);
	if (max > 1){
		while (randReturn == current) {
			randReturn = Math.floor(Math.random() * max);
		}
	}
	return randReturn;
}

function changeName() {
	randNameIndex = getRandom(randNameIndex,studentdivs.length);
	var randName = studentdivs[randNameIndex];
	randFontIndex = getRandom(randFontIndex,fonts.length);
	var randFont = fonts[randFontIndex];
	$("#table-container").html(randName);
	if (studentdivs.length > 1) {
		$("#table-container").css("font-family",randFont);
	}
}

function spinDown( callback, factor, times )
{
  var internalCallback = function( t, counter )
  {
    return function()
    {
      if ( --t > 0 )
      {
        window.setTimeout( internalCallback, ++counter * factor );
        callback();
        if (counter >10){
				$(".name").css("background-color",'white');
				$(".name").css("color","black");
				studentdivs.splice(randNameIndex, 1);
				alreadyPresented.push(randNameIndex);
				writeCookie(alreadyPresented.join());

				running = false;
				stopping = false;
				nameSelected = true;
        }
      }
    }
  }( times, 0 );

  window.setTimeout( internalCallback, factor );
};

$(document).ready(function() {
	var randFont = fonts[Math.floor(Math.random() * fonts.length)];
	$("#table-container").css("font-family",randFont);
	$("#table-container").html('<div class="name">Next</div>');
	$("#remain").html('Remaining Students: ' + studentdivs.length);


	$(document).keydown(function(e) {

		if (e.which == 87) {

		if (running == false) {
			if (nameSelected == true) {
					window.open($(".name").data('href'));
					randFontIndex = getRandom(randFontIndex,fonts.length);
					var randFont = fonts[randFontIndex];
					if (studentdivs.length == 0){
					$("#table-container").html('<div class="name">Play Again?</div>');
					$("#table-container").css("font-family",randFont);
					done = true;
				} else {
					$("#table-container").html('<div class="name">Next</div>');
					$("#table-container").css("font-family",randFont);
					$("#remain").html('Remaining Students: ' + studentdivs.length);
					$("#remain").show();
				}
					nameSelected = false;
				

			} else {
				if (done == true) {
					location.reload();

				} else {
				$(".wheel-wrap").show();
				//$("#blackout").fadeIn(3800, "easeOutQuad");
				fading = true;
				var d = new Date();
				mouseDownTime = d.getTime();
				}

			}
		} else {
			if (stopping == false) {
				clearInterval(flipper);
				spinDown( function(){ changeName();}, 96, 12 );
				stopping = true;
			}
		}

		}

	});

	$(document).keyup(function(e) {
		if (e.which == 87) {
			console.log("keyup");
		if (fading == true) {
			$("#blackout").stop().fadeOut(0).hide();
			var d = new Date();
			var spinTime = d.getTime() - mouseDownTime;
			console.log(spinTime);
 
			flipper = window.setInterval(changeName, 96);
			running = true;
			fading=false;
		}
	}
	});
});

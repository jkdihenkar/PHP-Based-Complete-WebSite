//js

//code for the static fixed menu onScroll
window.onscroll = changePos;

function changePos() {
    var header = document.getElementById("templatemo_header");
	var pagesize = document.width;
    if (window.pageYOffset >= 70) {
        header.style.position = "relative";
        header.style.top = pageYOffset-50 + "px";
		header.style.transform="scale(1,0.7)";
    } 
	else { 
		header.style.position = "";
        header.style.top = "";
		header.style.transform="scale(1,1)";
	}
}

//for disabling the context menu
document.onmousedown=disableclick;
status="Right Click Disabled";
function disableclick(event)
{
  if(event.button==2)
   {
     return false;    
   }
}

//clearing yext field

function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}

//social networks

stLight.options({publisher:"be0cbfc0-1bfb-4d09-aa85-5b19dd8e07b6", doNotHash: false, doNotCopy: false, hashAddressBar: false});

var options={ "publisher": "be0cbfc0-1bfb-4d09-aa85-5b19dd8e07b6", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "twitter", "googleplus", "wordpress"]}};
var st_hover_widget = new sharethis.widgets.hoverbuttons(options);

function showHideText(event)  {
    var text = document.getElementById("text");
    var visibilityValue = text.style.visibility;
    if(visibilityValue !== "hidden") {
       text.style.visibility = "hidden";
    } else {
        text.style.visibility = "visible";
        
    }
 }
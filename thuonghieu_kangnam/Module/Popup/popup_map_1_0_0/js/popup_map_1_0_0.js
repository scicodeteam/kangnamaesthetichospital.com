document.addEventListener("DOMContentLoaded", function(){
    const popup_map_1_0_0__click = document.getElementsByClassName("popup_map_1_0_0__click");
    const popMap = document.getElementById("pop_map");
    const popBg = document.getElementById("pop_bg");
    const popClose = document.getElementById("popup_map_1_0_0__close");

    for ( const click of popup_map_1_0_0__click ){
        click.addEventListener("click", function(){
            console.log("ok");
            popMap.style.display = "block";
            popBg.style.display = "block";
        });
    }
    
    popBg.addEventListener("click", function(){
        popMap.style.display = "none";
        popBg.style.display = "none";
    });
    popClose.addEventListener("click", function(){
        popMap.style.display = "none";
        popBg.style.display = "none";
    });
});
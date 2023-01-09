var slideIndex = 0;
autoSlide();

function currentDiv(num){
    showDivs(slideIndex = num);
}

function showDivs(num){
    var i;
    var slides = document.getElementsByClassName("slides");
    var buttons = document.getElementsByClassName("button-slide");
    var buttons2 = document.getElementsByClassName("button2-slide");
    if(num > slides.length){
        slideIndex = 1;
    }
    if(num < 1) {
        slideIndex = slides.length;
    }
    for(i=0;i<slides.length;i++){
        slides[i].style.display = "none";
    }
    for(i=0;i<buttons.length;i++){
        buttons[i].setAttribute("style", "background-color:transparent;");
        buttons2[i].setAttribute("style", "background-color:transparent;");
    }
    slides[slideIndex-1].style.display = "block";
    buttons[slideIndex-1].setAttribute("style", "background-color:#00d1ff;");
    buttons2[slideIndex-1].setAttribute("style", "background-color:#00d1ff;");
}

function autoSlide(){
    slideIndex++;
    showDivs(slideIndex);
    setTimeout(autoSlide, 120000); //change every 2min
}

function changeThemeMode(dark_mode){
    var link_mode = document.getElementById("link-mode");
    var button_mode = document.getElementById("button-mode");
    var image_mode = document.getElementById("image-mode");

    //document.cookie = dark_mode;
    //var mode = null;

    if(dark_mode){
        link_mode.href = link_mode.href.replace("light-mode.css", "dark-mode.css");
        button_mode.setAttribute("onClick","changeThemeMode(false);");
        image_mode.src = image_mode.src.replace("dark-mode.png", "light-mode.png");
        //mode = "dark-mode.css";
    }else{
        link_mode.href = link_mode.href.replace("dark-mode.css", "light-mode.css");
        button_mode.setAttribute("onClick","changeThemeMode(true);");
        image_mode.src = image_mode.src.replace("light-mode.png", "dark-mode.png");
        //mode = "light-mode.css";
    }

    //document.cookie = "mode="+dark_mode;
}

function changePageLanguage(code, baseUrl){
    var url = baseUrl+'/'+'index/'+code;
    if(code != "??_??"){
        window.location.assign(url);
    }
}

function showSelectLanguages(){
    var settings = document.getElementById("div-settings");
    if(settings.style.display == "none"){
        settings.style.display = "block";
    }else{
        settings.style.display = "none";
    }
}

$(document).click(function(event){
    var target = event.target;
    if(target.id != "div-settings" && target.id != "select-language" && target.id != "button-settings" && target.id != "settings"){
        document.getElementById("div-settings").style.display = "none";
    }
});
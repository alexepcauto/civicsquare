document.addEventListener(
"DOMContentLoaded",
function(){


const toggle =
document.getElementById(
"accessibility-toggle"
);


const panel =
document.getElementById(
"accessibility-panel"
);



if(toggle){

toggle.addEventListener(
"click",
function(){

panel.classList.toggle(
"active"
);

});

}



const sizes =
document.querySelectorAll(
"[data-size]"
);



sizes.forEach(
function(button){


button.addEventListener(
"click",
function(){


document.body.classList.remove(
"font-large",
"font-extra"
);


if(
this.dataset.size === "large"
){

document.body.classList.add(
"font-large"
);

}


if(
this.dataset.size === "extra"
){

document.body.classList.add(
"font-extra"
);

}


});

});

const contrast =
document.querySelectorAll(
    "[data-contrast]"
);


contrast.forEach(
function(button){

    button.addEventListener(
        "click",
        function(){

            document.body.classList.toggle(
                "high-contrast"
            );

        }
    );

});
});
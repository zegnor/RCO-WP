$(window).ready( function(){
    
    var check = false;
    
   $("#global-button-click").click(function(){
       if(check == true){
           check = false;
           
            $(".p-global").removeClass("about-disable");
            $(".p-local").addClass("about-disable");
            document.getElementById("global-button-click").innerHTML = "Check Local Info";
            document.getElementById("about-headline").innerHTML = "Global:";
       } else {
           check = true;
           
            $(".p-local").removeClass("about-disable");
            $(".p-global").addClass("about-disable");
            document.getElementById("global-button-click").innerHTML = "Check Global Info";
            document.getElementById("about-headline").innerHTML = "Local:";
       }
   })
   
});
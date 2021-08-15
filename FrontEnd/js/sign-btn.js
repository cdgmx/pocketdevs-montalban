
$(document).ready(function() {


    $.ajax({url: "session.php"}).done(function(response) {
        res = JSON.parse(response)
        if(res.status){
            $('.navbar-sign').css('display','none')
            $('#user-info').css('display','flex')
            $('#user-info var').text(res.data)
        }
        else{
            $('.navbar-sign').css('display','flex')
            $('#user-info').css('display','none')
        }

    });
    console.log("Done")
    
})

 
   

    function logout(){
        $.ajax({url: "logout.php"}).done(function(html) {
            location = location
            });
    }

    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "navbar") {
            x.className += " responsive";
        } else {
            x.className = "navbar";
        }
    }

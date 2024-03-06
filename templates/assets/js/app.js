$(document).ready(function() {

    // Skill
    for( var i = 0; i < ComputerSkill.length; i++ ) {
        var skill = ComputerSkill[i];
        var skillName = skill[0];
        var skillLevel = skill[1];
        $('#Grade').html($('#Grade').html() +  '<div id="'+i+'-soSkill" class="Grade_bar"><p>' + skillName + '</p><div class="bar"><div class="bar_fill"></div></div></div>');
        $('#Grade .Grade_bar').eq(i).find('.bar_fill').css('width', skillLevel);
    }

    var typed = new Typed('#name', {
            strings: ["Adrian Stephan", "Adrian Stephan", "Développeur Web"],
            typeSpeed: 90,
            backSpeed: 90,
            loop: true
          });
    
    $(window).scroll(function () {       
        for (i = 0; i < $('#Grade .Grade_bar').length; i++){
            // console.log(window.scrollY + " - " + $('#Grade .bar_fill:nth-child(' + i + ')').offset().top);
            if (window.pageYOffset >= $('#Grade #' + i + '-soSkill').offset().top - $(window).height() * 0.9){
                console.log("ALARM")
                $('#Grade #' + i + '-soSkill .bar .bar_fill').attr('class', 'bar_Anime');
            }       
        }
    });
    

    // Porject
    for (var i = 0; i < Project.length; i++){
        var detail = Project[i];
        var img_link = detail[0];
        var img_name = detail[1];
        var text = detail[2];
        $('#Project').html($('#Project').html() +  '<div class="Project"><div class = "Img_Pos"><div class = "Img_Project"><img src='+img_link+' alt='+img_name+'></div></div><p class="Txt_Project">'+text+'</p></div>');

    }
    
    $('#Bouton').click(function() {
        $('#Me_Suite').toggleClass('active');
    });


}); 


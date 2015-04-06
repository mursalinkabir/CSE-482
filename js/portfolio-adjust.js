
// Custom script for responsive handling of portfolio hover effect



function adjustPortfolioHover(margin){

         $('.imgwrapper').height($('.imgwrapper').width()*3/4);
         $('.imgback').height($('.imgwrapper').width()*3/4);


        var heightToAdd = $('.imgwrapper').closest('.portfolio-item').find('.imgcaption').innerHeight();
        var totalHeight = $('.imgwrapper').height() + heightToAdd;


        $('.portfolio-item').hover(function(){

          $(this).find('.imgback').height(totalHeight+margin);
          $(this).find('.imgcaption a').css("opacity",'1');
          $(this).find('a.rollover').css("opacity",'0.5');


        },function(){

          $(this).find('.imgback').height(totalHeight-heightToAdd);
          $(this).find('.imgcaption a').css("opacity",'0');
          $(this).find('a.rollover').css("opacity",'0.0');
        });

      }






function adjustTeamHover(margin){

         $('.imgwrapper').height($('.imgwrapper').width()*3/4);
         $('.imgback').height($('.imgwrapper').width()*3/4);


        var heightToAdd = $('.imgwrapper').closest('.team-member').find('.imgcaption').innerHeight();
        var totalHeight = $('.imgwrapper').height() + heightToAdd;




        $('.team-member').hover(function(){

          $(this).find('.imgback').height(totalHeight+margin+40);




        },function(){

          $(this).find('.imgback').height(totalHeight-heightToAdd-40);


        });

      }


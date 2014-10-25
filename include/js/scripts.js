/**
 * Created by Pavel-php on 20.03.14.
 */
$(function(){
   var left = $('.sidebar_L');
   var right = $('.sidebar_R');
   if(right.height() > left.height()){

       left.height(right.height());
   }
});
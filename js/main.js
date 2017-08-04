
$(function(){
    var cur_open_page = $("#currentPage").val();
    
    // For back & forward button
    $(document).on('click', '.nextButton', function(){
       if(cur_open_page == 1)
       {
           // Lets do our checks for the first page
           $("#checkoutPage" + cur_open_page).addClass("hidden").removeClass("active");

           cur_open_page++;
           $("#checkoutPage2").removeClass("hidden").addClass("active");

       }else if(cur_open_page == 2)
       {
           $("#checkoutPage" + cur_open_page).addClass("hidden").removeClass("active");

           cur_open_page++;
           $("#checkoutPage3").removeClass("hidden").addClass("active");
       }else if(cur_open_page == 3)
       {
           $("#checkoutPage" + cur_open_page).addClass("hidden").removeClass("active");

           cur_open_page++;
           $("#checkoutPage4").removeClass("hidden").addClass("active");
       }
    });
});
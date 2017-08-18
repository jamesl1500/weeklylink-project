
$(function(){
    var cur_open_page = $("#currentPage").val();

    var selectedOption = $("#currentOption");
    var selectedMax = $(".max");
    var selectedOptionRadioButton = $("input[name=charCount]:checked");

    var countHolder = $(".firstCounter");
    var mainText = $("#mainText");

    var mainForm = $("#checkoutMain");

    // Make the selectedoption the selected radio button
    selectedOption.val(selectedOptionRadioButton.val());

    // Plug in the option count number
    selectedMax.html(selectedOption.val());

    // Whenever a new radio button is clicked
    $("input[type=radio][name=charCount]").on('change', function(){
       if(this.value == "215")
       {
           selectedOption.val(this.value);
           selectedMax.html(this.value);
       }else{
           selectedOption.val(this.value);
           selectedMax.html(this.value);
       }

        // Uncheck previous
        //var g = "input:checkbox[name='"+$(this).attr("name")+"']";
        //$(g).attr('checked', false);
       // $(this).attr('checked', true);
    });

    // Text counter
    mainText.on('keyup', function(){
        var len = this.value.length;
        if (len >= selectedOption.val()) {
            this.value = this.value.substring(0, selectedOption.val());
        } else {
            countHolder.text(selectedOption.val() - len);
        }
    });

    function formCheck()
    {

    }

    // For progress box buttons
    $(".progressBox").on('click', function(){
       var open = $(this).data('open');

        if(open != "")
        {
            if(open == 1)
            {
                // Lets do our checks for the first page
                $("#checkoutPage" + cur_open_page).addClass("hidden").removeClass("active");

                cur_open_page = 1;
                $("#checkoutPage1").removeClass("hidden").addClass("active");

            }else if(open == 2)
            {
                $("#checkoutPage" + cur_open_page).addClass("hidden").removeClass("active");

                cur_open_page = 2;
                $("#checkoutPage2").removeClass("hidden").addClass("active");

                $(".nextButton").html('Submit <i class="fa fa-check-circle-o" aria-hidden="true"></i>');

            }else if(open == 3) {
                // Now do form checks
                $("#checkoutPage" + cur_open_page).addClass("hidden").removeClass("active");

                cur_open_page = 3;
                $("#checkoutPage3").removeClass("hidden").addClass("active");
                $(".nextButton").html('Done <i class="fa fa-check-circle-o" aria-hidden="true"></i>');
            }

            $(".progressBox").each(function(){
                $(this).removeClass('active');
            });

            $("#prog" + open).addClass('active');
        }
    });

    // For back & forward button
    $(document).on('click', '.nextButton', function(){
       if(cur_open_page == 1)
       {
           // Lets do our checks for the first page
           $("#checkoutPage" + cur_open_page).addClass("hidden").removeClass("active");

           cur_open_page = 2;
           $("#checkoutPage2").removeClass("hidden").addClass("active");

       }else if(cur_open_page == 2)
       {
           $("#checkoutPage" + cur_open_page).addClass("hidden").removeClass("active");

           cur_open_page = 3;
           $("#checkoutPage3").removeClass("hidden").addClass("active");

           $(this).html('Submit <i class="fa fa-check-circle-o" aria-hidden="true"></i>');

       }else if(cur_open_page == 3) {
           // Now do form checks
           if (formCheck())
           {
               $("#checkoutPage" + cur_open_page).addClass("hidden").removeClass("active");

               cur_open_page = 4;
               $("#checkoutPage4").removeClass("hidden").addClass("active");
               $(this).html('Done <i class="fa fa-check-circle-o" aria-hidden="true"></i>');
            }

       }

        $(".progressBox").each(function(){
            $(this).removeClass('active');
        });

        $("#prog" + cur_open_page).addClass('active');
    });

    $(document).on('click', '.backButton', function(){
        if(cur_open_page == 1)
        {
            // Lets do our checks for the first page
            $("#checkoutPage" + cur_open_page).addClass("hidden").removeClass("active");

            cur_open_page = 1;
            $("#checkoutPage1").removeClass("hidden").addClass("active");

        }else if(cur_open_page == 2)
        {
            $("#checkoutPage" + cur_open_page).addClass("hidden").removeClass("active");

            cur_open_page = 1;
            $("#checkoutPage1").removeClass("hidden").addClass("active");
        }else if(cur_open_page == 3)
        {
            $("#checkoutPage" + cur_open_page).addClass("hidden").removeClass("active");

            cur_open_page = 2;
            $("#checkoutPage2").removeClass("hidden").addClass("active");
        }else if(cur_open_page == 4)
        {
            $("#checkoutPage" + cur_open_page).addClass("hidden").removeClass("active");

            cur_open_page = 3;
            $("#checkoutPage3").removeClass("hidden").addClass("active");
        }

        $(".progressBox").each(function(){
            $(this).removeClass('active');
        });

        $("#prog" + cur_open_page).addClass('active');
    });
});
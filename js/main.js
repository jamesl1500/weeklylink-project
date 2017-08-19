
$(function(){
    var cur_open_page = $("#currentPage").val();

    var selectedOption = $("#currentOption");
    var selectedMax = $(".max");
    var selectedOptionRadioButton = $("input[name=charCount]:checked");

    var countHolder = $(".firstCounter");
    var mainText = $("#mainText");

    var mainForm = $("#checkoutMain");

    // Form inputs
    var weeksInput = $("#weekNumber");
    var mainAdText = $("#mainText");

    var fullName = $("#fullName");
    var companyName = $("#companyName");
    var email = $("#emailFull");
    var phoneNumber = $("#phoneNumber");
    var comments = $("#comments");

    var nameoncard = $("#nameoncard");
    var cardnumber = $("#cardnumber");
    var expireYear = $("#expireYear");
    var expireMonth = $("#expireMonth");
    var cvv = $("#cardCVV");

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

    function valid_credit_card(value) {
        // accept only digits, dashes or spaces
        if (/[^0-9-\s]+/.test(value)) return false;

        // The Luhn Algorithm. It's so pretty.
        var nCheck = 0, nDigit = 0, bEven = false;
        value = value.replace(/\D/g, "");

        for (var n = value.length - 1; n >= 0; n--) {
            var cDigit = value.charAt(n),
                nDigit = parseInt(cDigit, 10);

            if (bEven) {
                if ((nDigit *= 2) > 9) nDigit -= 9;
            }

            nCheck += nDigit;
            bEven = !bEven;
        }

        return (nCheck % 10) == 0;
    }

    $(".dropDownButton").on('click', function(){
       $(".dropDownList").toggle();
    });

    function formCheck()
    {
        if(weeksInput.val() != "" && mainAdText.val() != "")
        {
            // For user info
            if(fullName.val() != "" && companyName.val() != "" && email.val() != "" && phoneNumber.val() != "" && comments.val())
            {
                // For billing
                if(nameoncard.val() != "" && cardnumber.val() != "" && expireYear.val() != "" && expireMonth.val() != "" && cvv.val() != "")
                {
                    // Check credit card
                    if(valid_credit_card(cardnumber.val()))
                    {
                        return false;
                    }else{
                        alert("Please enter a valid credit card number");
                        return false;
                    }
                }else{
                    alert("Please enter all of your billing info");
                    return false;
                }
            }else{
                alert("Please be sure to fill in all of the required info");
                return false;
            }
        }else{
            alert("Make sure you've specified the amount of weeks and your Ad Text");
            return false;
        }
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
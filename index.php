<html>
<head>
    <title>Weekly Link Checkout</title>

    <!-- META SEO -->
    <meta charset="UTF-8">
    <meta name="description" content="Description goes here">
    <meta name="keywords" content="keywords go here">
    <meta name="author" content="Author goes here">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" />

    <script src="https://use.fontawesome.com/780689fece.js"></script>
</head>
<body>
<?php
$day = strtolower(date('l'));
$hour = date('h');

$currentTime = time() + 3600;

// See if its Tuesday : 12pm
//if($day == "tuesday" && ((int) date('H', $currentTime)) >= 12){
?>
<div class="alertMain clearfix">
    <div class="topNotice clearfix">
        <div class="leftIcon col-lg-2 col-md-2 col-sm-2">
            <i class="fa fa-calendar" aria-hidden="true"></i>
        </div>
        <div class="textHolderRight col-lg-10 col-md-10 col-sm-10">
            <h3>Notice!</h3>
        </div>
    </div>
    <div class="textMain">
        <p>All classifieds submitted after 12PM on Tuesday are NOT guaranteed to make it into this week's issue. If you would like to be 100% sure that it will make it in this week, please call us at: 347-787-1838 BEFORE you place your order. If you don't mind starting your listing by next week, please continue.</p>
    </div>
</div>
<?php
//}
?>
<div class="mainContainer container-fluid">
    <div class="topHead">
        <div class="bottomMain">
            <div class="iconsHead">
                <div class="navbarContainer iconsInner">
                    <div class="innerCont">
                        <div class="holdMain">
                            <div class="progressBox active" id="prog1" data-open="1">

                            </div><div class="divider"></div>
                            <div class="progressBox" id="prog2" data-open="2">

                            </div><div class="divider"></div>
                            <div class="progressBox" id="prog3" data-open="3">

                            </div><div class="divider"></div>
                            <div class="progressBox" id="prog4" data-open="4">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="barHold"></div>
        </div>
    </div>
    <div class="checkoutMain checkoutContainer">
        <div class="innerCheckoutMain">
            <form action="" id="checkoutMain">
                <div class="checkoutPage checkoutPageFirst active" id="checkoutPage1">
                    <div class="topPageHead col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="innerHead">
                            <h3>Choose a size</h3>
                        </div>
                    </div>
                    <div class="innerPageMain clearfix">
                        <div class="innerCent col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="leftChecks col-lg-8 col-md-8 col-sm-8 col-xs-12 clearfix">
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-6 firstOption">
                                    <div class="imageMain">
                                        <img src="images/5.png" />
                                    </div>
                                    <div class="bottomArea">
                                        <h4>Single</h4>
                                        <h5>Max 215 Characters</h5>
                                        <div class="checkboxHold">
                                            <input type="radio" class="styled-checkbox" id="charCount1" name="charCount" value="215" checked>
                                            <label for="charCount1"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-6 secondOption">
                                    <div class="imageMain">
                                        <img src="images/6.png" />
                                    </div>
                                    <div class="bottomArea">
                                        <h4>Double</h4>
                                        <h5>Max 430 Characters</h5>
                                        <div class="checkboxHold">
                                            <input type="radio" class="styled-checkbox2" id="charCount2" name="charCount" value="430">
                                            <label for="charCount2"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rightActions col-lg-4 col-md-4 col-sm-4 col-xs-12 clearfix">
                                <div class="innerMainDrops">
                                    <div class="topDropdown">
                                        <h3>Amount of Weeks</h3>
                                        <div class="dropDownMain">
                                            <div class="leftImage">
                                                <img src="images/7.png" />
                                            </div>
                                            <div class="inputRight">
                                                <input type="number" id="weekNumber" value="0"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bottomDropdown">
                                        <h3>Total</h3>
                                        <div class="dropDownMain">
                                            <div class="leftImage">
                                                <img src="images/9.png" />
                                            </div>
                                            <div class="inputRight">
                                                <h3>90.00</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checkoutPage checkoutPageSecond hidden clearfix" id="checkoutPage2">
                    <div class="topPageHead col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="innerHead">
                            <h3>Add the text</h3>
                        </div>
                    </div>
                    <div class="innerPageMain col-lg-9 col-md-9">
                        <div class="selectHold clearfix">
                            <div class="dropDownInner clearfix">
                                <div class="dropDownLabelHold col-lg-10 col-md-10 col-sm-10 col-xs-9">
                                    <div class="inner">
                                        <h3 class="dropDownLabel">Select a category</h3>
                                    </div>
                                </div>
                                <div class="dropDownButton col-lg-2 col-md-2 col-sm-2 col-xs-3">
                                    <div class="inner">
                                        <h2><i class="fa fa-caret-down" aria-hidden="true"></i></h2>
                                    </div>
                                </div>
                                <div class="dropDownList">
                                    <ul class="innerCategoriesList">

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="textMain">
                            <h3>Add your text below</h3>
                            <textarea id="mainText" placeholder=""></textarea>
                        </div>
                        <div class="counterHold"><span class="firstCounter">0</span> of <span class="max"></span> max characters</div>
                    </div>
                </div>
                <div class="checkoutPage checkoutPageThird hidden clearfix" id="checkoutPage3">
                    <div class="topPageHead col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="innerHead">
                            <h3>Add billing info</h3>
                        </div>
                    </div>
                    <div class="innerPageMain clearfix col-lg-12 col-xs-12">
                        <div class="leftColumn col-lg-6 col-xs-12">
                            <div class="inputType">
                                <input type="text" name="fullName" id="fullName" placeholder="Full Name" />
                            </div>
                            <div class="inputType">
                                <input type="text" name="companyName" id="companyName" placeholder="Company Name" />
                            </div>
                            <div class="inputType">
                                <input type="text" name="emailFull" id="emailFull" placeholder="Email Address" />
                            </div>
                            <div class="inputType">
                                <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Phone Number" />
                            </div>
                            <div class="inputType">
                                <textarea name="comments" id="comments" placeholder="Comments"></textarea>
                            </div>
                        </div>
                        <div class="rightColumn col-lg-6 col-xs-12">
                            <div class="innerColumn">
                                <div class="topHeadBilling">
                                    <div class="topImage">
                                        <img src="images/8.png" />
                                    </div>
                                    <div class="topHeadTitle">
                                        <h3>Enter Payment Info</h3>
                                    </div>
                                    <div class="paymentInputHolder">
                                        <div class="inputType">
                                            <input type="text" name="nameoncard" id="nameoncard" placeholder="Name" />
                                        </div>
                                        <div class="inputType">
                                            <input type="text" name="cardnumber" id="cardnumber" placeholder="Card Number" />
                                        </div>
                                        <div class="exp">
                                            <h3>EXP</h3>
                                            <div class="inputType col-lg-6 col-xs-6">
                                                <input type="text" name="expireYear" id="expireYear" placeholder="Year" />
                                            </div>
                                            <div class="inputType col-lg-6 col-xs-6">
                                                <input type="text" name="expireMonth" id="expireMonth" placeholder="Month" />
                                            </div>
                                        </div>
                                        <div class="inputType">
                                            <input type="text" name="cardCVV" id="cardCVV" placeholder="CVV" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="checkoutPage checkoutPageFourth hidden" id="checkoutPage4">
                    <div class="topPageHead col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="innerHead">
                            <h3>Success!</h3>
                        </div>
                    </div>
                    <div class="innerPageMain col-lg-8">
                        <div class="mainSuccess">
                            <div class="topAlertHead">
                                <h3>Payment successful</h3>
                            </div>
                            <div class="mainAlertBody">
                                <div class="topImage">
                                    <img src="images/11.png" />
                                </div>
                                <div class="bottomAlertBody">
                                    <p>You have successfully made your payment</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="currentOption" id="currentOption" value="" />
                <input type="hidden" name="currentPage" id="currentPage" value="1" />
            </form>

            <div class="directionButtons">
                <button class="backButton"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Back</button>
                <button class="nextButton">Next <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
</div>
<!-- SCRIPTS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>
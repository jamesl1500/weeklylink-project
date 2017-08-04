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
if($day == "tuesday" && ((int) date('H', $currentTime)) >= 12){
?>
<div class="alertMain">
    <div class="topNotice clearfix">
        <div class="leftIcon col-lg-2">
            <i class="fa fa-calendar" aria-hidden="true"></i>
        </div>
        <div class="textHolderRight col-lg-10">
            <h3>Take Notice!</h3>
        </div>
    </div>
    <div class="textMain">
        <p>All classifieds submitted after 12PM on Tuesday are NOT guaranteed to make in into this week's issue. If you would like to 100% sure that it will make it in this week, please call us at: 347-787-1838 BEFORE you place your order. if you don't mind starting your listing by next week, please continue.</p>
    </div>
</div>
<?php
}
?>
<div class="mainContainer container-fluid">
    <div class="topHead">
        <div class="bottomMain">
            <div class="iconsHead">
                <div class="navbarContainer iconsInner">
                    <div class="innerCont">
                        <div class="progressBox active" id="prog1">
    
                        </div><div class="divider"></div>
                        <div class="progressBox" id="prog2">
    
                        </div><div class="divider"></div>
                        <div class="progressBox" id="prog3">
    
                        </div><div class="divider"></div>
                        <div class="progressBox" id="prog4">
                            
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
                    <div class="topPageHead col-lg-8">
                        <div class="innerHead">
                            <h3>Choose an option</h3>
                        </div>
                    </div>
                    <div class="innerPageMain clearfix">
                        <div class="leftChecks col-lg-8">
                            <div class="col-lg-6 firstOption">
                                <h3><i class="fa fa-file-text-o" aria-hidden="true"></i></h3>
                                <div class="bottomArea">
                                    <h4>Single</h4>
                                    <h5>Max 200 Characters</h5>
                                </div>
                            </div>
                            <div class="col-lg-6 secondOption">
                                <h3><i class="fa fa-file-text-o" aria-hidden="true"></i></h3>
                                <div class="bottomArea">
                                    <h4>Single</h4>
                                    <h5>Max 200 Characters</h5>
                                </div>
                            </div>
                        </div>
                        <div class="rightActions col-lg-4">
                            
                        </div>
                    </div>
                </div>
                <div class="checkoutPage checkoutPageSecond hidden clearfix" id="checkoutPage2">
                    <div class="topPageHead col-lg-8">
                        <div class="innerHead">
                            <h3>Add the text</h3>
                        </div>
                    </div>
                    <div class="innerPageMain col-lg-8">
                        <div class="selectHold">

                        </div>
                        <div class="textMain">
                            <h3>ADD your text here</h3>
                            <textarea placeholder=""></textarea>
                        </div>
                        <span class="firstCounter">0</span> of 400 max characters
                    </div>
                </div>
                <div class="checkoutPage checkoutPageThird hidden" id="checkoutPage3">
                    <div class="topPageHead col-lg-8">
                        <div class="innerHead">
                            <h3>Add billing info</h3>
                        </div>
                    </div>
                </div>
                <div class="checkoutPage checkoutPageFourth hidden" id="checkoutPage4">
                    <div class="topPageHead col-lg-8">
                        <div class="innerHead">
                            <h3>Sccess!</h3>
                        </div>
                    </div>
                </div>
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
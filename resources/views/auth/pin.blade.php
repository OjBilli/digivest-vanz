<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title> FORTRESS UNION BANK</title>
    <link rel="icon" type="image/x-icon" href="/home_asset/dashboard.azurecreditunion.com/assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="home_asset/fonts.googleapis.com/cssa1f9.css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="/home_asset/dashboard.azurecreditunion.com/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/home_asset/dashboard.azurecreditunion.com/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="/home_asset/dashboard.azurecreditunion.com/assets/css/authentication/form-2.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="/home_asset/dashboard.azurecreditunion.com/assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="/home_asset/dashboard.azurecreditunion.com/assets/css/forms/switches.css">
    <link href="/home_asset/dashboard.azurecreditunion.com/assets/css/pages/error/style-400.css" rel="stylesheet" type="text/css" />


    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="/home_asset/dashboard.azurecreditunion.com/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="/home_asset/dashboard.azurecreditunion.com/plugins/animate/animate.css" rel="stylesheet" type="text/css" />
    <link href="/home_asset/dashboard.azurecreditunion.com/plugins/notification/snackbar/snackbar.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/home_asset/dashboard.azurecreditunion.com/assets/css/elements/alert.css">
    <script src="/home_asset/dashboard.azurecreditunion.com/plugins/sweetalerts/promise-polyfill.js"></script>
    <link href="/home_asset/dashboard.azurecreditunion.com/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="/home_asset/dashboard.azurecreditunion.com/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="/home_asset/dashboard.azurecreditunion.com/assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" />
    <script src="/home_asset/dashboard.azurecreditunion.com/assets/js/libs/jquery-3.1.1.min.js"></script>

    <!-- END THEME GLOBAL STYLES -->
    <title>Pin</title>
    <style>

        button{
            margin:3px;
        }
        button{
            display: inline-block;
            border:1px solid #0a3bff;
            color: #0022ff;
            border-radius: 30px;
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            font-family: Verdana;
            width: auto;
            height: auto;
            font-size: 16px;
            padding: 10px 17px;
            background-color: #FCFAF9;
        }
        button:hover, button:active{
            border:1px solid #FFFFFF;
            color: #FFFDFC;
            background-color: #FC0000;
        }

        input[type=text], textarea {
            -webkit-transition: all 0.30s ease-in-out;
            -moz-transition: all 0.30s ease-in-out;
            -ms-transition: all 0.30s ease-in-out;
            -o-transition: all 0.30s ease-in-out;
            outline: none;
            padding: 3px 0px 3px 3px;
            margin: 5px 1px 3px 0px;
            border: 1px solid #DDDDDD;
        }

        input[type=text]:focus, textarea:focus {
            box-shadow: 0 0 5px rgba(250, 0, 0, 1);
            padding: 3px 0px 3px 3px;
            margin: 5px 1px 3px 0px;
            border: 1px solid rgba(250, 0, 0, 1);
        }
    </style>
</head>

<div class="form-container outer">
    <div class="form-form">
        <div class="form-form-wrap">
            <div class="form-container">
                <div class="form-content">

                    <h1 class="">Sign In</h1>

                    <p class="">Log in to your account to continue.</p>


                 <form action="{{ route('verify.pin.post') }}" method="POST" class="form-validation" autocomplete="off">@csrf
                    @foreach ($errors->all() as $error)
                        <p class="text-danger">{{ $error }}</p>
                    @endforeach
                        <div class="form">

                            <div id="username-field" class="field-wrapper input">
                                <label for="username">Account ID</label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <input name="pin"  type="number" id="myNumber" class="form-control" placeholder="Enter Pin">
                            </div>


                            <div class="row m-3">
                                <div class="col-4">
                                    <a class="btn btn-primary  btn btn-lg btn-block btn-primary" onclick="appendNumber(1)" >1</a>
                                </div>
                                <div class="col-4">
                                    <a class="btn btn-primary  btn btn-lg btn-block btn-primary" onclick="appendNumber(2)">2</a>
                                </div>
                                <div class="col-4">
                                    <a class=" btn btn-primary btn btn-lg btn-block btn-primary" onclick="appendNumber(3)">3</a>
                                </div>

                             </div>

                             <div class="row m-3">
                                <div class="col-4">
                                    <a class="btn btn-primary  btn btn-lg btn-block btn-primary" onclick="appendNumber(4)" >4</a>
                                </div>
                                <div class="col-4">
                                    <a class="btn btn-primary  btn btn-lg btn-block btn-primary" onclick="appendNumber(5)">5</a>
                                </div>
                                <div class="col-4">
                                    <a class=" btn btn-primary btn btn-lg btn-block btn-primary" onclick="appendNumber(6)">6</a>
                                </div>

                             </div>
                             <div class="row m-3">
                                <div class="col-4">
                                    <a class="btn btn-primary  btn btn-lg btn-block btn-primary" onclick="appendNumber(7)" >7</a>
                                </div>
                                <div class="col-4">
                                    <a class="btn btn-primary  btn btn-lg btn-block btn-primary" onclick="appendNumber(8)">8</a>
                                </div>
                                <div class="col-4">
                                    <a class=" btn btn-primary btn btn-lg btn-block btn-primary" onclick="appendNumber(9)">9</a>
                                </div>

                             </div>
                             <div class="row m-3">
                                <div class="col-4">
                                    <a class="btn btn-primary  btn btn-lg btn-block btn-primary" onclick="clearInput()" >clear</a>
                                </div>
                                <div class="col-4">
                                    <a class="btn btn-primary  btn btn-lg btn-block btn-primary" onclick="appendNumber(0)">0</a>
                                </div>
                                <div class="col-4">
                                    <a class=" btn btn-primary btn btn-lg btn-block btn-primary" onclick="clearInput()">clear</a>
                                </div>

                             </div>

                            <div class="d-sm-flex justify-content-between">
                                <div class="field-wrapper">
                                    <button type="submit" class="btn btn-primary" >Validate</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="/home_asset/dashboard.azurecreditunion.com/bootstrap/js/popper.min.js"></script>
<script src="/home_asset/dashboard.azurecreditunion.com/bootstrap/js/bootstrap.min.js"></script>
<script src="/home_asset/dashboard.azurecreditunion.com/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="/home_asset/dashboard.azurecreditunion.com/assets/js/app.js"></script>

<!-- END GLOBAL MANDATORY SCRIPTS -->
<script src="/home_asset/dashboard.azurecreditunion.com/assets/js/authentication/form-2.js"></script>
<script src="/home_asset/dashboard.azurecreditunion.com/plugins/highlight/highlight.pack.js"></script>
<script src="/home_asset/dashboard.azurecreditunion.com/assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY STYLES -->
<script src="/home_asset/dashboard.azurecreditunion.com/plugins/notification/snackbar/snackbar.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->


<!--  BEGIN CUSTOM SCRIPTS FILE  -->
<script src="/home_asset/dashboard.azurecreditunion.com/assets/js/components/notification/custom-snackbar.js"></script>
<!--  END CUSTOM SCRIPTS FILE  -->

<!-- BEGIN THEME GLOBAL STYLE -->
<script src="/home_asset/dashboard.azurecreditunion.com/assets/js/scrollspyNav.js"></script>
<script src="/home_asset/dashboard.azurecreditunion.com/plugins/sweetalerts/sweetalert2.min.js"></script>
<script src="/home_asset/dashboard.azurecreditunion.com/plugins/sweetalerts/custom-sweetalert.js"></script>
<!-- END THEME GLOBAL STYLE -->
<script>
     function appendNumber(num) {
        var input = document.getElementById("myNumber");
        input.value += num;
    }

    function clearInput() {
        var input = document.getElementById("myNumber");
        input.value = "";
    }

</script>
 <script>
    $(document).ready(function(){
        $(".numpad").hide();
        $('.input').click(function(){
            $('.numpad').fadeToggle('fast');
        });

        $('.del').click(function(){
            $('.input').val($('.input').val().substring(0,$('.input').val().length - 1));
        });
        $('.faq').click(function(){
            alert("Enter Your OTP Sent to you ");
        })
        $('.shuffle').click(function(){
            $('.input').val($('.input').val() + $(this).text());
            $('.shuffle').shuffle();
        });
        (function($){

            $.fn.shuffle = function() {

                var allElems = this.get(),
                    getRandom = function(max) {
                        return Math.floor(Math.random() * max);
                    },
                    shuffled = $.map(allElems, function(){
                        var random = getRandom(allElems.length),
                            randEl = $(allElems[random]).clone(true)[0];
                        allElems.splice(random, 1);
                        return randEl;
                    });

                this.each(function(i){
                    $(this).replaceWith($(shuffled[i]));
                });

                return $(shuffled);

            };

        })(jQuery);

    });
 </script>

</html>

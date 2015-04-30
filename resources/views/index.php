<!doctype html>
<html ng-app="contactbook">

<head>

    <meta charset="utf-8">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>


    <!--Import custom css-->
    <link type="text/css" rel="stylesheet" href="css/app.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <!-- Load font awesome -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

    <title>Contact Book</title>

</head>

<body ng-controller="mainController">

<div class="container">

    <div class="row center">

        <div class="col s6 offset-s3">


            <h4 class="floating-heading">Contact Details</h4>


            <div class="contacts-panel">

                <!-- using angular templating -->
                <!-- this is where content will be injected -->
                <div ng-view></div>

                <!-- loading spinner using font awesome -->
                <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>

            </div><!-- end contacts-panel -->


        </div><!-- end column -->

    </div><!-- end row -->



</div>
<!-- end main container -->

<!-- JavaScript includes -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/angular.min.js"></script>
<script type="text/javascript" src="https://code.angularjs.org/1.3.15/angular-route.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/controllers/mainCtrl.js"></script>
<script type="text/javascript" src="js/services/contactService.js"></script>

</body>

</html>
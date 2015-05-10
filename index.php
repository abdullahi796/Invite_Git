<!DOCTYPE html>
<html ng-app='inviteApp'>
    <head> 
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="main.css" type="text/css" />
        <!-- AngularJS -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
        
        <!-- Firebase -->
        <script src="https://cdn.firebase.com/js/client/2.2.4/firebase.js"></script>
        
        <!-- AngularFire -->
        <script src="https://cdn.firebase.com/libs/angularfire/1.1.1/angularfire.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
        <script type="text/javascript" src="app.js"></script>
        <script type="text/javascript" src="model.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Invite</title>
    </head>
    <body>
    	<?php
    
    	$php_token =   $_GET["id"];
    
    	?>        
    	<script>
        var token = "<?php echo $php_token ;?>";
    	</script>
    	
        <div id='wrapper'>
            <div id='card' class='col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-9 col-xs-offset-1' ng-controller='mainController as mCtrl'>
                <div id='text' ng-show='textShow'>
                    <div id='number' class='text-center'><h3>Your are attendee {{attendees.length+1}}</h3></div>
                    <div id='info' class='text-center'><h4>{{info}}</h4></div>
                    <button type="button" class="btn btn-success col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3" ng-click='showText()'>RSVP</button>
                </div>
                <form ng-show='formShow' ng-submit='addContact()'>
                    <h3 class='text-center'><label for="">Enter Phone Number</label></h3>
                    <input type="text" class='col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3' ng-model='mphoneNumber' name=""/>
                    <input id='formButton' type="submit" value="RSVP" class="btn btn-success col-md-5 col-md-offset-1 col-xs-5 col-xs-offset-1" ng-click='share()'/>
                    <input id='formButton' type="" value="Cancel" class="btn btn-danger col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-5  col-xs-offset-1" ng-click='showText()'/>
                </form>
                <div id='share' class='col-xs-12' ng-show='showShare'>
                    <p class='text-center'>Text the link to invite friends </p>
                    <p class='text-center'>Copy the link</p>
                    <p id='link' class='text-center'>https://invite-abdullahi11.c9.io/index.php?id=abdullahi11</p>
                </div>
            </div>
        </div>
    </body>
</html>
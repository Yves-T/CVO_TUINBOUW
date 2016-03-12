<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Angular-Laravel Authentication</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body ng-app="tuinbouwApp">

<nav class="navbar navbar-default" ng-controller="HeaderController as hc">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Tuinbouw</a>
        </div>
        <p class="navbar-text" ng-show="currentUser">Welcome, {{currentUser}}</p>
        <ul class="nav navbar-nav">
            <li ng-show="currentUser" ng-class="{ active: hc.isActive('/plantList')}">
                <a href="javascript:;" ng-click="hc.goto('plantList')">Planten</a>
            </li>
            <li ng-show="currentUser" ng-click="hc.logout()"><a href="#">Uitloggen</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    <div ui-view></div>
</div>

</body>

<!-- Application Dependencies -->
<script src="node_modules/angular/angular.js"></script>
<script src="node_modules/angular-ui-router/release/angular-ui-router.js"></script>
<script src="node_modules/satellizer/satellizer.js"></script>
<script src="node_modules/angular-utils-pagination/dirPagination.js"></script>
<script src="js/qrcode.js"></script>
<script src="js/qrcode_UTF8.js"></script>
<script src="js/angular-qrcode.js"></script>

<!-- Application Scripts -->
<script src="scripts/app.js"></script>
<script src="scripts/controller/authController.js"></script>
<script src="scripts/controller/plantListController.js"></script>
<script src="scripts/controller/headerController.js"></script>
<script src="scripts/controller/qrCodeController.js"></script>
<script src="scripts/service/authService.js"></script>
<script src="scripts/service/dataService.js"></script>
</html>
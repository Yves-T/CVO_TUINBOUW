<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Angular-Laravel Authentication</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body ng-app="tuinbouwApp">

<nav class="navbar navbar-default" ng-controller="HeaderController as hc">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Tuinbouw</a>
        </div>
        <p class="navbar-text" ng-show="currentUser">Welcome, {{currentUser.name}}</p>
        <ul class="nav navbar-nav">
            <li ng-class="{ active: hc.isActive('/users')}"><a href="/planten">Planten</a></li>
            <li ng-show="currentUser" ng-class="{ active: hc.isActive('/logout')}"><a href="/logout">uitloggen</a></li>
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

<!-- Application Scripts -->
<script src="scripts/app.js"></script>
<script src="scripts/controller/authController.js"></script>
<script src="scripts/controller/userController.js"></script>
<script src="scripts/controller/headerController.js"></script>
<script src="scripts/service/authService.js"></script>
<script src="scripts/service/dataService.js"></script>
</html>
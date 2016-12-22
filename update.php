<?php include("include/header.php"); ?>

<div ng-app="animalapp" ng-controller="formCtrl">
  <form novalidate>
    ID:<br>
    <input name="id" type="text" ng-model="user.id">
    <br>
    First Name:<br>
    <input name="valueOne" type="text" ng-model="user.valueOne"><br>
    Last Name:<br>
    <input name="valueTwo" type="text" ng-model="user.valueTwo">
    <br><br>
    <!-- <button ng-click="reset()">RESET</button> -->
    <input type="button" value="submit" ng-click="insertdata()"/><br />
  </form>


  <p>form = {{user}}</p>
  <!-- <p> {{user.firstName}}</p> -->
</div>

<script>
var app = angular.module('animalapp', []);
app.controller('formCtrl', function($scope, $http) {
    $scope.insertdata = function() {
        console.log($scope);
        $http.post("updateFunc.php", {'id':$scope.user.id, 'valueOne':$scope.user.valueOne, 'valueTwo':$scope.user.valueTwo});
        // $http.post("insert.php", {'firstName':$scope.firstName, 'lastName':$scope.lastName}).success(function(data,status,headers,config){console.log()});

      };
});
</script>

<?php include("include/footer.php"); ?>

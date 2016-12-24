<?php include("include/header.php"); ?>

<div ng-app="animalapp" ng-controller="formCtrl">
  <form novalidate class="form-group">
    Tag Number:<br>
    <input name="tagId" type="text" ng-model="user.tagId"><br>
    Breed:<br>
    <input name="breed_id" type="text" ng-model="user.breed_id">
    <br>
    Date of Birth:<br>
    <input name="dob" type="text" ng-model="user.dob">
    <br>
    Sex:<br>
    <input name="sex" type="text" ng-model="user.sex">
    <br>
    Notes:<br>
    <input name="notes" type="text" ng-model="user.notes">
    <br><br>
    <!-- <button ng-click="reset()">RESET</button> -->
    <input type="button" class="btn btn-default" value="submit" ng-click="insertdata()"/><br />
  </form>


  <p>form = {{user}}</p>
  <!-- <p> {{user.firstName}}</p> -->
</div>

<script>
var app = angular.module('animalapp', []);
app.controller('formCtrl', function($scope, $http) {
    $scope.insertdata = function() {
        console.log($scope);
        $http.post("functions/create.php", {'tagId':$scope.user.tagId, 'breed_id':$scope.user.breed_id, 'dob':$scope.user.dob, 'sex':$scope.user.sex, 'notes':$scope.user.notes});
        // $http.post("insert.php", {'firstName':$scope.firstName, 'lastName':$scope.lastName}).success(function(data,status,headers,config){console.log()});

      };
});
</script>

<?php include("include/footer.php"); ?>

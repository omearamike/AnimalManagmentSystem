<?php include("include/header.php"); ?>

<div ng-app="animalapp" ng-controller="customersCtrl">

  <table class="table table-hover">
  <tr>
  <th>Tag Id</th>
  <th>Breed</th>
  <th>DOB</th>
  <th>Sex</th>
  <th>Notes</th>
  </tr>
  <tr ng-repeat="animal in table">
  <td>{{ animal.tag_id }}</td>
  <td>{{ animal.breed_id }}</td>
  <td>{{ animal.dob }}</td>
  <td>{{ animal.sex }}</td>
  <td>{{ animal.notes }}</td>
  </tr>
  </table>

</div>
<a target="_blank" href="functions/download.php">1. Prepare Download</a><br>
<a href="download.php">2. Download File</a>

<script>
  var app = angular.module('animalapp', []);
  app.controller('customersCtrl', function($scope, $http) {
  $http.get("http://localhost:8888/AnimalManagementSystem_v1/functions/getallentriesFunc.php").success(function (response) {
  /*After Successfully fetch the data from JSON file assigning these data to $scope object variable*/
  $scope.table = response;
  });
  });
</script>


<?php include("include/footer.php"); ?>

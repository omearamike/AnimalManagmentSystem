<?php include("include/header.php"); ?>

<div ng-app="animalapp" ng-controller="customersCtrl">

  <table>
  <tr>
  <th>Name</th>
  <th>Relationship</th>
  </tr>
  <tr ng-repeat="indivisual in members">
  <td>{{ indivisual.id }}</td>
  <td>{{ indivisual.valueOne }}</td>
  <td>{{ indivisual.valueTwo }}</td>
  </tr>
  </table>

</div>
<a href="functions/download.php">Download as Excel</a>

<script>
  var app = angular.module('animalapp', []);
  app.controller('customersCtrl', function($scope, $http) {
  $http.get("http://localhost:8888/AnimalManagementSystem_v1/functions/getallentriesFunc.php").success(function (response) {
  /*After Successfully fetch the data from JSON file assigning these data to $scope object variable*/
  $scope.members = response;
  });
  });
</script>


<?php include("include/footer.php"); ?>

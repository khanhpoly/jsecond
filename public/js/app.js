var app = angular.module('demoApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
app.controller('PostsController', function($scope, $http) { 
    $scope.posts = [];
    $scope.init();
    $scope.init = function() {
        $http.get('/api/posts').
        success(function(data, status, headers, config) {
            $scope.posts = data;
        });
    }
});
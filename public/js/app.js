//angular.module('stories', [])
//    .controller('StatusCtrl', function($scope, $http) {
//        $http.get('/statuses').success(function(statuses) {
//            $scope.statuses = statuses;
//            $scope.statusSelected = $scope.statuses[0];
//        });
//    });

var app = angular.module('stories', []);

app.controller('StatusCtrl', function($scope, $http) {
    $http.get('/statuses').success(function(statuses) {
        $scope.statuses = statuses;
        $scope.statusSelected = $scope.statuses[0];
    });
});

app.controller('CategoryCtrl', function($scope, $http) {

    $http.get('/categories').success(function(categories) {
        $scope.categories = categories;
    });

    $scope.addNew = function () {

        var category = {
            category: $scope.categoryText,
            checked: 'checked'
        }

        console.log(category);

        $scope.categories.push(category);

        $http.post('/categories', category);

        $scope.categoryText = "";
    }

});

app.controller('UpdateCategoryCtrl', function($scope, $http) {

    $scope.$watch('storyId', function () {
        $http.get('/categories/active/' + $scope.storyId).success(function(categories) {
            $scope.categories = categories;
        });
    });

    $scope.addNew = function () {

        var category = {
            category: $scope.categoryText,
            checked: 'checked'
        }

        console.log(category);

        $scope.categories.push(category);

        $http.post('/categories', category);

        $scope.categoryText = "";
    }

});

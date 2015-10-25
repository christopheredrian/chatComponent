(function() {
    var app = angular.module('main', []);

    app.controller('ChatController', ['$scope', '$http', '$window', function($scope, $http, $window) {
        this.test = "132";

    }]);

    app.controller('NavigationController', ['$scope', '$http', '$window', function($scope, $http, $window) {
        this.logout = function() {
            $window.location.href = 'bye.php';
        };

    }]);

    app.controller('LoginController', ['$scope', '$http', function($scope, $http) {
        var that = this;
        this.current = {
            action: 'iWantToLoginPlease'
        };
        this.current = {
            name: 'cee',
            password: 'test132',
            key: 'key321',
            room: 'room321',
            action: 'iWantToLoginPlease'
        };
        this.popAlert = function() {
            alert(JSON.stringify(that.current));
        };
        this.login = function() {
            // GET request for the JSON files
            this.popAlert();
            $http({
                method: 'post',
                url: 'login.php',
                data: that.current
            }).then(function successCallback(response) {
                // $scope.store.products = response.data;
                // console.log($scope);
                // that.products = response.data;
                // console.log(that.products);
                console.log(response.data);
                $('#mainDiv').html(response.data);

            }, function errorCallback(response) {
                alert("There was an error");
            });
        };
    }]);
})();

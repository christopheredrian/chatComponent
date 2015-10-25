(function() {
    var app = angular.module('main', []);

    var mainCtrl = app.controller('MainController', ['$scope', '$http', '$window', '$interval', function($scope, $http, $window, $interval) {
        this.isLoggedIn = false;
        this.chatBox = "";
        this.textBox = "";
        var that = this;
        var stop; // for $interval

        var genericRequest = function(method, url, data, success, error) {
            $http({
                'method': method,
                'url': url,
                'data': {
                    data
                }
            }).then(success, error);
        };

        this.sendMessage = function() {
            $http({
                method: 'post',
                url: 'main.php',
                data: {
                    'action': 'appendToMessages',
                    'message': that.textBox,
                    'sender': that.current.name
                }
            }).then(function successCallback(response) {
                
            }, function errorCallback(response) {
                alert("There was an error");
            });
        };

        var fetchData = function() {
            $http({
                method: 'post',
                url: 'main.php',
                data: {
                    'action': 'fetchData'
                }
            }).then(function successCallback(response) {
                that.chatBox = "";
                console.log(response.data.messages);
                for (var i = 0; i < response.data.messages.length; i++) {
                    that.chatBox += (response.data.messages[i].sender + ": " + response.data.messages[i].body + "\n");
                }
            }, function errorCallback(response) {
                alert("There was an error");
            });
        };

        this.logIn = function() {
            this.isLoggedIn = true;
            stop = $interval(fetchData, 500);

        };
        this.logOut = function() {
            this.isLoggedIn = false;
            $interval.cancel(stop);
        };

        this.current = {
            action: 'iWantToLoginPlease'
        };
        this.current = {
            name: '',
            password: 'test132',
            key: 'key3211',
            room: 'room321',
            action: 'iWantToLoginPlease'
        };

        this.login = function() {
            // GET request for the JSON files
            $http({
                method: 'post',
                url: 'login.php',
                data: that.current
            }).then(function successCallback(response) {

                if (response.data.status === 1) {
                    that.logIn();
                    console.log(that.isLoggedIn);
                    // TODO: Error message above
                }
                else {
                    that.current = {};
                }
                // $('#mainDiv').html(response.data);
                // var status = JSON.parse(response.data);
                // alert(status);

            }, function errorCallback(response) {
                alert("There was an error");
            });
        };

    }]);

    app.controller('ChatController', ['$scope', '$http', '$window', function($scope, $http, $window) {

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
            key: 'testing',
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
                console.log(mainCtrl.isLoggedIn);
                if (response.data.status === 1) {
                    console.log(mainCtrl.isLoggedIn);
                    mainCtrl.isLoggedIn = true;
                }
                else {
                    that.current = {};
                }
                // $('#mainDiv').html(response.data);
                // var status = JSON.parse(response.data);
                // alert(status);

            }, function errorCallback(response) {
                alert("There was an error");
            });
        };
    }]);
})();

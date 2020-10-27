app.component('home', {
    templateUrl: atv_theme_home_template_url,
    controller: function($http, $location, HelperService, $scope, $routeParams, $rootScope, $location) {
        $scope.theme = theme;
    }
});

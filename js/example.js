/* 
 * Angular example
 */

(function (angular, $, _) {

    // var resourceUrl = CRM.resourceUrls['be.ctrl.benefactor'];
    var bModule = angular.module('example', ['ngRoute', 'crmResource']);

    bModule.config(['$routeProvider',
        function ($routeProvider) {
            $routeProvider.when('/example', {
                templateUrl: '~/example/example.html',
                controller: 'ExampleCtrl'
            });
        }
    ]);

    bModule.controller('ExampleCtrl', function ($scope) {
        $scope.name = 'world';
        $scope.ts = CRM.ts('be.ctrl.benefactor');
    });

})(angular, CRM.$, CRM._);
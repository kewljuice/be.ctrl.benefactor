/*
 * be.ctrl.benefactor JavaScript
 */

console.log("benefactor js loaded");

/*
 CRM.api('Contact', 'get', {'sequential': 1}, { success: function(data) { console.log(data); cj.each(data, function(key, value) { console.log(key + value); }); } });
 */


/* ANGULAR */
(function (angular, $, _) {
    'use strict';

    // create our angular app
    // ======================
    var valApp = angular.module('validationApp', []);

    // configuration
    // =============
    valApp.config(['$interpolateProvider', function ($interpolateProvider) {
        $interpolateProvider.startSymbol('[[');
        $interpolateProvider.endSymbol(']]');
    }]);

    // our controller for the form
    // ===========================
    valApp.controller('formController', function ($scope) {
        console.log("valApp controller");
        $scope.name = 'world';
    });

})(angular, CRM.$, CRM._);
angular
    .module('MyApp', ['ngMaterial', 'ngMessages', 'material.svgAssetsCache', 'ngSanitize', 'ngRoute'])
//.controller('AppCtrl', function () { })
    .config(function ($mdThemingProvider, $routeProvider) {
    $mdThemingProvider.theme('dark-grey').backgroundPalette('grey').dark();
    $mdThemingProvider.theme('dark-orange').backgroundPalette('orange').dark();
    $mdThemingProvider.theme('dark-purple').backgroundPalette('deep-purple').dark();
    $mdThemingProvider.theme('dark-blue').backgroundPalette('blue').dark();

    $routeProvider
        .when("/", {
        templateUrl : "WelcomeCharts.html"
    })
        .when("/main", {
        templateUrl : "WelcomeCharts.html"
    })
        .when("/pie", {
        templateUrl : "GraficaPie.html"
    })
        .when("/barra", {
        templateUrl : "GraficaBarra.html"
    });
});

(function () {
    'use strict';

    angular
        .module('MyApp')
        .controller('AppCtrl1', function () {

        this.items = [];
        for (var i = 0; i < 10; ++i) {
            this.items.push("Hola " + i);
        }

        this.cambiar = function(texto)
        {
            this.items.push(texto);
            this.showme = true;
        }

    });

})();




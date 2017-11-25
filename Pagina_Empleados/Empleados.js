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
                templateUrl: "info_card/component_info.html"
            })
            .when("/main", {
                templateUrl: "info_card/component_info.html"
            })
            .when("/pie", {
                templateUrl: "GraficaPie.html"
            })
            .when("/barra", {
                templateUrl: "GraficaBarra.html"
            });
    });



var nombres = ["luis", "jose", "pedro", "juan", "chucho"];

var ids = [123, 342, 124, 678, 459];

(function () {
    'use strict';

    angular
        .module('MyApp')
        .controller('AppCtrl1', function () {

            this.items = new Array();
          

            for (var i = 0; i < ids.length; ++i) {
                var empl = {
                    "id": ids[i],
                    "name": nombres[i]
                };
                this.items.push(empl);
            }
           
            /*for (var i = 0; i < id.length; ++i) {
                this.items.push(id[i]);
            }*/
            
            this.cambiar = function () {
                this.showme = true;
            }

        });

})();


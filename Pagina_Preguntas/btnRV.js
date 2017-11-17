//Obtener datos de DB y convertir a JSon Object
var jsonData = $.ajax({
    url: "questionQuery.php",
    dataType: "json",
    async: false
}).responseText;

//Convertir JSON a Array de JSONs
var pJ = JSON.parse(jsonData);

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
                templateUrl: "WelcomeCharts.html"
            })
            .when("/main", {
                templateUrl: "WelcomeCharts.html"
            })
            .when("/pie", {
                templateUrl: "GraficaPie.html"
            })
            .when("/barra", {
                templateUrl: "GraficaBarra.html"
            });
    });


    //Funcion que al iniciar el controlador
    //llena los botones con el texto de las preguntas
    (function () {
        'use strict';

        angular
            .module('MyApp')
            .controller('AppCtrl1', function () {

                this.items = [];
                for (var i = 0; i < pJ.length; ++i) {
                    this.items.push(pJ[i].pregunta);
                }
                /* Se comenta esta sección, no es necesario para
                    agregar preguntas en click, se guarda el código
                    para posibles usos
                this.cambiar = function (texto) {
                    this.items.push(texto);
                    this.showme = false;
                }*/


            });

    })();




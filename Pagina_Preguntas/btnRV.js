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

//Obtener datos de DB y convertir a JSon Object
var jsonData = $.ajax({
    url: "questionQuery.php",
    dataType: "json",
    async: false
}).responseText;
//document.write(jsonData);

var qtns = new Array();
var qType = new Array();
var qDept = new Array();

for (var a = 0; a < jsonData.length; a++) {
    qtns[a] = jsonData[a].pregunta;
    qType[a] = jsonData[a].tipo;
    qDept[a] = jsonData[a].departamento;

    (function () {
        'use strict';

        angular
            .module('MyApp')
            .controller('AppCtrl1', function () {

                this.items = [];
                for (var i = 0; i < qtns.length; ++i) {
                    this.items.push(qtns[i]);
                }
                /*
                this.cambiar = function (texto) {
                    this.items.push(texto);
                    this.showme = false;
                }*/


            });

    })();




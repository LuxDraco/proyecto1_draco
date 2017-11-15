//Obtener datos de DB y convertir a JSon Object
var jsonData = $.ajax({
    url: "questionQuery.php",
    dataType: "json",
    async: false
}).responseText;

var pJ = JSON.parse(jsonData);
$(jQuery.parseJSON(JSON.stringify(pJ))).each(function() {  
    var ID = this.ID;
    var Tipo = this.tipo;
    var Departamento = this.departamento;
    var Pregunta = this.pregunta;
    console.log(Departamento.length);
    console.log(ID + Tipo + Departamento + Pregunta);
});

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



    (function () {
        'use strict';

        angular
            .module('MyApp')
            .controller('AppCtrl1', function () {

                this.items = [];
                for (var i = 0; i < pJ.length; ++i) {
                    this.items.push(pJ[i].pregunta);
                }
                /*
                this.cambiar = function (texto) {
                    this.items.push(texto);
                    this.showme = false;
                }*/


            });

    })();




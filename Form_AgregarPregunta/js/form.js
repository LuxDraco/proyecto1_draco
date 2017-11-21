angular
  .module('MyApp', ['ngMaterial', 'ngMessages'])
  .controller('AppCtrl1', function () {

  })

  .config(function ($mdThemingProvider) {
    $mdThemingProvider.theme('altTheme1')
      .primaryPalette('purple')
    $mdThemingProvider.theme('altTheme2')
      .primaryPalette('pink')
  });
/*
angular.module('MyApp', ['ngMaterial', 'ngMessages'])
  .config(function ($mdThemingProvider) {
    $mdThemingProvider.theme('myOtherTheme')
      .primaryPalette('pink');
  })
  .controller('AppCtrl1', function () {
  })*/
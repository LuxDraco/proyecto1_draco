angular
  .module('MyApp', ['ngMaterial', 'ngMessages'])
  .controller('AppCtrl1', function () {
    this.questionB = {
      texto: '¿Qué cantidad de cigarros había?'
    };
    this.iCon = 'cloud_off';
    this.iType = 0;
    if (this.iType == 1) {
      this.iCon = 'pie_chart';
    } else if (this.iType == 2) {
      this.iCon = 'plus_one';
    } else if (this.iType == 3) {
      this.iCon = 'text_fields';
    } else {
      this.iCon = 'cloud_off';
    }


  });
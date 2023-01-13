$(function () {
  'use strict';

  $("#wizard").steps({
    headerTag: "h2",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    onFinished: onWizardFinish,
    onFinishing: onWizardFinish
  });

  $("#wizardVertical").steps({
    headerTag: "h2",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    stepsOrientation: 'vertical'
  });

  
});
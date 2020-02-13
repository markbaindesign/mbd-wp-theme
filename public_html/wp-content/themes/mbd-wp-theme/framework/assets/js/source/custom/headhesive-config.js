jQuery(document).ready(function($) {
  // Options
  // See https://github.com/markgoodyear/headhesive.js
  var options = {
    offset: 500,
    classes: {
      // Cloned elem class
      clone: "headhesive",

      // Stick class
      stick: "headhesive--stick",

      // Unstick class
      unstick: "headhesive--unstick"
    }
  };

  // Check for masthead on the page
  // If found, create a new instance of Headhesive.js
  // and pass in some options
  if ($("#masthead").length) {
    var header = new Headhesive("#masthead", options);
  }
});

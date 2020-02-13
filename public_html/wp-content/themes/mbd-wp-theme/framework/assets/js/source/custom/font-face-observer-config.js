/* FontFaceObserver */

var FontPrimary = "";
var body = document.getElementsByTagName("body")[0];
var fontA = new FontFaceObserver("DIN2014-Regular");
var fontB = new FontFaceObserver("DIN2014-DemiBold");

// Primary Font
fontA.load(null, 5000).then(
  function() {
    body.className = body.className.replace(
      "DIN2014-Regular--inactive",
      "DIN2014-Regular--active"
    );
    console.log("DIN2014-Regular web font is available");
  },
  function() {
    body.className.replace(
      "DIN2014-Regular--inactive",
      "DIN2014-Regular--unavailable"
    );
    console.log(
      "DIN2014-Regular web font is not available after waiting 5 seconds"
    );
  }
);

// Secondary Font
fontB.load(null, 5000).then(
  function() {
    body.className = body.className.replace(
      "DIN2014-DemiBold--inactive",
      "DIN2014-DemiBold--active"
    );
    console.log("DIN2014-DemiBold web font is available");
  },
  function() {
    body.className.replace(
      "DIN2014-DemiBold--inactive",
      "DIN2014-DemiBold--unavailable"
    );
    console.log(
      "DIN2014-DemiBold web font is not available after waiting 5 seconds"
    );
  }
);

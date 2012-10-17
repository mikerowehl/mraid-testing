<?php
/**
 * This is a simple script meant to be used with a mobile advertising SDK
 * to test and validate creative.
 */
if (isset($_GET['id'])) {
  if ($_GET['id'] == "agltb3B1Yi1pbmNyDAsSBFNpdGUYycEMDA") {
    header('X-Width: 320');
    header('X-Height: 250');
  } else {
    header('X-Width: 320');
    header('X-Height: 50');
  }
}
header('X-Clickthrough: http://rowehl.com/red.php?t=1');
header('X-Adtype: mraid');
header('X-Creativeid: agltb3B1Yi1pbmNyEQsSCENyZWF0aXZlGPyl0RQM');
header('X-Imptracker: http://rowehl.com/m/imp?c=agltb3B1Yi1pbmNyEQsSCENyZWF0aXZlGPyl0RQM&cid=agltb3B1Yi1pbmNyEQsSCENyZWF0aXZlGPyl0RQM&reqt=1343521811.0&req=e0a2c96e1448b898fdbc57a8aed1c40f&appid=498593803&id=agltb3B1Yi1pbmNyDAsSBFNpdGUYkaoMDA&udid=sha:C796271BDDDB1E752C35CB2D40789B877A179C19&rev=1.0000000&ck=5D18F');
header('X-Refreshtime: 10000');
header('X-Failurl: http://rowehl.com/m/ad?v=8&udid=sha:C796271BDDDB1E752C35CB2D40789B877A179C19&q=(null)&id=agltb3B1Yi1pbmNyDAsSBFNpdGUYkaoMDA&nv=1.6.0.1&o=p&sc=1.0&z=-0700&mr=1&exclude=agltb3B1Yi1pbmNyEAsSB0FkR3JvdXAYhNjQFAw');
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="user-scalable=no, width=device-width,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <script type="text/javascript" src="mraid.js"></script>
    <style type="text/css">
      html, body {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
      }

      .banner, .overlayBanner {
        display: block;
        position: absolute;
        top: 0px;
        left: 0px;
        z-index: 1000;
        overflow: hidden;
      }

      .banner {
        background-color: red;
        width: 100%;
        height: 100%;
      }

      .overlayBanner {
        background-color: green;
        width: 100%;
        height: 100%;
      } 
    </style>
    <script type="text/javascript">
      // Check to see if document is ready
      if ((mraid.getState() != "default") || (mraid.getState() != "ready")) {
        // console.log("Document is not ready, adding event listener");
        // Register event listener to keep track of state changes
        mraid.addEventListener("stateChange", handleStateChanges);
      } else {
        // console.log("Document is ready");
        // Register event listener to keep track of state changes
        mraid.addEventListener("stateChange", handleStateChanges);
      }

      function handleStateChanges() {
        // console.log('mraid state: ' + mraid.getState());
        // Perform action on state change
        switch(mraid.getState()) {
        case "expanded":
          // console.log("handleStateChanges, expanded");
          // Show the overlay banner when view is in "expanded" state
          document.getElementById('banner').setAttribute('class', 'overlayBanner');
          break;
        case "default":
          // console.log("handleStateChanges, default");
          // Show the initial banner when view is in "default" state
          document.getElementById('banner').setAttribute('class', 'banner');
          break;
        }
      }
</script>
</head>

<body>
<div id='banner' onClick='mraid.expand()'></div>
</body>

</html>

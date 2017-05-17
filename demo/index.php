<html>
<head>
<title>Test - Tracking Google Ads</title>
<!-- not needed because we are testing locally -->
<!--script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script-->
<!-- The AdSense test code requires jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="../jquery.iframetracker.js"></script>
<script src="../jquery.iframetrackersetup.js"></script>
<script>
// This simulates what the external Google Ads script does
function loadTestAdvert(){
        var ifrm = document.createElement("iframe");
        ifrm.setAttribute("src", "http://wuvely.com/banners/backupbanners.php?w=wuvely");
        ifrm.style.width = "320px";
        ifrm.style.height = "270px";
        var insLocation = document.getElementById("testadsbygoogle");
        insLocation.appendChild(ifrm);
}

$(document).ready(function() {
  $('#advertwrap').click(function(e) {
    var offset = $(this).offset();
    alert(e.pageX - offset.left);
    alert(e.pageY - offset.top);
  });
});

</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-10447335-2', 'auto');
  ga('send', 'pageview');

</script>
</head>
<h1>Main test area - jQuery plugin</h1>
<div id="main">
<!-- Our Test Ad 320x250 -->
<ins id="testadsbygoogle" style="display:inline-block;width:300px;height:250px" class="adsenseadvert"></ins>
<script>
loadTestAdvert();
</script>
</div>

<h3>Non script frame</h3>
	<div class="adsenseadvert" id="iframe_red_1">
		<iframe width="728" height="90" src="./sample-iframe/red.html" frameborder="0" allowtransparency="true" scrolling="no"></iframe>
</div>
<div id="status" style="width:100%;background-color:grey;font-size:16px;float:right;">STATUS</div>
</body>
</html>

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
</head>
<h1>Main test area - jQuery plugin</h1>
<div id="main">
<!-- Our Test Ad 320x250 -->
<ins id="testadsbygoogle" style="display:inline-block;width:300px;height:250px" class="adsenseadvert"></ins>
<script>
loadTestAdvert();
</script>
</div>
</body>
</html>

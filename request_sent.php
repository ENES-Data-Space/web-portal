<!DOCTYPE html>
<?php include('server.php') ?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ENES Data Space portal</title>
    
    <script src="//code.jquery.com/jquery-latest.js" type="text/javascript"></script>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/small-business.css" rel="stylesheet">
    <link href="css/custom_style.css" rel="stylesheet">
    
  </head>

  <body>

    <!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark2 fixed-top py-4">
			<div class="container">

				<a class"navbar-brand js-scroll-trigger" href="home.html" style="margin-top:20px;margin-bottom:20px;"><img class="header-image" src="img/ENES_DS_logo1.png" width="200px"><img class="header-image" src="img/ENES_DS_logo2.png" width="500px"></a>
<!--				<h1>ENES Data Space</h1>-->
<!--		  <a class="navbar-brand" href="home.html"><img class="header-image" src="img/egi_logo.png" alt="EGI Logo" width="150px"></a>-->

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="home.html">Home
                
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="notebooks.html">Notebooks
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="access.html">Access</a>
            </li>
	    <li class="nav-item">
		<a class="nav-link" href="data_request.php">Data Request
		</a>
	    </li>
<!--            <li class="nav-item">
              <a class="nav-link disabled" href="https://enesdataspace.vm.fedcloud.eu/jupyter/hub" target="blank">Login</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
    <br><br><br><br><br>
    <!-- Page Content -->
    
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-body">
                    <h2 class="card-title" style="color: #696969" align="center">Data request sent!</h2>
                        <p align="center" style="color: #696969">Thanks for requesting new data. You'll receive a confirmation email soon.</p>
                </div>
                <div>
                    <a href="home.html"><p align="center">Back to the ENES Data Space home</p></a>
                </div>
                <br>
                <br>
            </div>
        </div>
    </div>


	<!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; ENES Data Space 2021-2022</p>
	<p class="m-0 text-center text-white">Contact us at enesds-support [at] cmcc [dot] it</p>
	              <p class="m-0 text-center text-white"><a href="docs/ENESDS_PrivacyPolicy.pdf" class="italybtn" target="_blank">Privacy Policy</a></p>
              <p class="m-0 text-center text-white"><a href="docs/ENESDS_TermsAndConditions.pdf" class="italybtn" target="_blank">Terms and Conditions</a></p>
      </div>
      <!-- /.container -->
    </footer>
    
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Italy Cookie Choices --><style type="text/css">#cookieChoiceInfo{background-color: #000000;color: #ffffff;left:0;margin:0;padding:4px;position:fixed;text-align:center;bottom:0;width:100%;z-index:9999;}.italybtn{margin-left:10px;}</style><script>var coNA="ophCookieConsent",coVA="y";scroll="1",elPos="fixed",infoClass="italybtn",closeClass="italybtn",htmlM="",rel="1",tar="",bgB="#000000",btcB="#ffffff",bPos="bottom:0",bannerStyle="bannerStyle",contentStyle="contentStyle",consText="consentText",jsArr = [];function allowCookie(){var a,b=document.getElementsByClassName("el"),c=new RegExp("<script.*?");for(a=0;a<b.length;a++){b[a].removeChild(b[a].childNodes[0]);var d=c.test(jsArr[a]);if(d){var e=/<script.*?src="(.*?)"/,f=e.test(jsArr[a]);f&&(f=e.exec(jsArr[a]),loadJS(f[1]));var g=/<script\b[^>]*>([\s\S]*?)<\/script>/gm,h=g.exec(jsArr[a]);h[1]&&appendJS(h[1])}else{var i=b[a].innerHTML;d=i.replace(/<cookie>/g,jsArr[a]),b[a].innerHTML=d}}}function loadJS(a){var b=document.createElement("script");b.type="application/javascript",b.src=a,document.body.appendChild(b)}function appendJS(a){var b=document.createElement("script");b.type="text/javascript";var c=a;try{b.appendChild(document.createTextNode(c)),document.body.appendChild(b)}catch(d){b.text=c,document.body.appendChild(b)}}!function(a){if(a.cookieChoices)return a.cookieChoices;var b=a.document,c=(b.documentElement,"textContent"in b.body,function(){function a(a){var b=a.offsetHeight,c=getComputedStyle(a);return b+=parseInt(c.marginTop)+parseInt(c.marginBottom)}function c(a,c,d,e){var i=b.createElement("div");i.id=r,i.className=bannerStyle;var j=b.createElement("div");return j.className=contentStyle,j.appendChild(f(a)),d&&e&&j.appendChild(h(d,e)),j.appendChild(g(c)),i.appendChild(j),i}function d(a,c,d,e){var i=b.createElement("div");i.id=r;var j=b.createElement("div");j.className="glassStyle";var k=b.createElement("div");k.className=contentStyle;var l=b.createElement("div");l.className=bannerStyle;var m=g(c);return k.appendChild(f(a)),d&&e&&k.appendChild(h(d,e)),k.appendChild(m),l.appendChild(k),i.appendChild(j),i.appendChild(l),i}function e(a,b){a.innerHTML=b}function f(a){var c=b.createElement("span");return c.className=consText,e(c,a),c}function g(a){var c=b.createElement("a");return e(c,a),c.id=s,c.className=closeClass,c.href="#",c}function h(a,c){var d=b.createElement("a");return e(d,a),d.className=infoClass,d.href=c,tar&&(d.target="_blank"),d}function i(){return p()&&(htmlM&&(b.getElementsByTagName("html")[0].style.marginTop=t),allowCookie(),o(),m()),rel&&b.location.reload(),!1}function j(e,f,g,h,j){if(p()){var k=j?d(e,f,g,h):c(e,f,g,h),l=b.createDocumentFragment();l.appendChild(k),b.body.appendChild(l.cloneNode(!0)),htmlM&&(b.getElementsByTagName("html")[0].style.marginTop=a(b.getElementById("cookieChoiceInfo"))+"px"),b.getElementById(s).onclick=i,scroll&&(b.onscroll=i)}}function k(a,b,c,d){j(a,b,c,d,!1)}function l(a,b,c,d){j(a,b,c,d,!0)}function m(){var a=b.getElementById(r);null!==a&&a.parentNode.removeChild(a)}function n(){i()}function o(){var a=new Date;a.setFullYear(a.getFullYear()+1),b.cookie=q+"="+coVA+"; expires="+a.toGMTString()+";path=/"}function p(){return!b.cookie.match(new RegExp(q+"=([^;]+)"))}var q=coNA,r="cookieChoiceInfo",s="cookieChoiceDismiss",t=b.getElementsByTagName("html")[0].style.marginTop,u={};return u.showCookieConsentBar=k,u.showCookieConsentDialog=l,u.removeCookieConsent=n,u}());return a.cookieChoices=c,c}(this);document.addEventListener("DOMContentLoaded", function(event) {cookieChoices.showCookieConsentBar("This website or its third-party tools make use of cookies necessary for its operation and useful for the purposes set out in the cookie policy. To find out more or to refuse consent to all or some cookies, please refer to the cookie policy. By closing this banner, scrolling through the page, clicking on a link or continuing to browse otherwise, you consent to the use of cookies. <\/br>", "OK", "Cookie Policy", "https://www.cmcc.it/privacy-cookie");});</script><noscript><style type="text/css">html{margin-top:35px}</style><div id="cookieChoiceInfo"><span>"This website or its third-party tools make use of cookies necessary for its operation and useful for the purposes set out in the cookie policy. To find out more or to refuse consent to all or some cookies, please refer to the cookie policy. By closing this banner, scrolling through the page, clicking on a link or continuing to browse otherwise, you consent to the use of cookies. <\/br>"</span><a href="https://www.cmcc.it/privacy-cookie" class="italybtn" target="_blank">Cookie Policy</a></div></noscript>
  </body>

</html>

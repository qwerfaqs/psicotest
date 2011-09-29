<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>BubbleBean</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<style type="text/css">
<!--
.invisible {border-color:#FFFFFF;border-width:2px; border-style:solid;}
.linea {background-color:#000000}
.nolinea {background-color:#FFFFFF}
.visible {border-color:#000000;border-width:2px; border-style:solid;}
-->
</style>
</head>
<body>
<div class="main">
  		
  <div class="header">
  	  
    <div class="header_resize">
    
      <div class="logo">
        <h1><a href="index.html">Psico<span>Test</span> <small><span>Fuerzas Armadas del Ecuador</span></small></a></h1>
        </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="index.html"><span>Home Page</span></a></li>
          <li><a href="support.html"><span>Support</span></a></li>
          <li><a href="about.html"><span>About Us</span></a></li>
          <li><a href="blog.html"><span>Blog</span></a></li>
          <li><a href="contact.html" class='basic'><span>Contact Us</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
      	<script>
			function fr(z, n) { //fr=fichaRespuesta
				if (z == 'S') f_d.R1.value = n;
				if (z == 'I') f_d.R2.value = n;
				fro(z, f_d.R3.value, n);
			}
			
			
			function fro(z, o, n) { //fro=ficharespuestaOrientacion
				d=document;
				if (z == "S") {
					fila1=o+"1"
					fila2=o+"2"
					fila3=o+"3"
				} else {
					fila1=o+"4"
					fila2=o+"5"
					fila3=o+"6"
				}
				if (n==2||n==3||n==4||n==5||n==6) d.getElementById(fila1+"1").src='/images/p.png'; else d.getElementById(fila1+"1").src='/images/pb.png';
				if (n==4||n==5||n==6)			d.getElementById(fila1+"3").src='/images/p.png'; else d.getElementById(fila1+"3").src='/images/pb.png';
			
				if (n==6) 						d.getElementById(fila2+"1").src='/images/p.png'; else d.getElementById(fila2+"1").src='/images/pb.png';
				if (n==1||n==3||n==5) 			d.getElementById(fila2+"2").src='/images/p.png'; else d.getElementById(fila2+"2").src='/images/pb.png';
				if (n==6) 						d.getElementById(fila2+"3").src='/images/p.png'; else d.getElementById(fila2+"3").src='/images/pb.png';
			
				if (n==4||n==5||n==6)			d.getElementById(fila3+"1").src='/images/p.png'; else d.getElementById(fila3+"1").src='/images/pb.png';
				if (n==2||n==3||n==4||n==5||n==6) d.getElementById(fila3+"3").src='/images/p.png'; else d.getElementById(fila3+"3").src='/images/pb.png';
			}
			
			
			
			function mostrarFicha(o) {
				d=document;
				if (o == "H") {
					document.getElementById('hor').className='visible';
					document.getElementById('hor1').className='linea';
					document.getElementById('ver').className='invisible';
					document.getElementById('ver1').className='nolinea';
					fro("S", "V", 0)
					fro("I", "V", 0)
				} else {
					document.getElementById('hor').className='invisible';
					document.getElementById('hor1').className='nolinea';
					document.getElementById('ver').className='visible';
					document.getElementById('ver1').className='linea'
					fro("S", "H", 0)
					fro("I", "H", 0)
				}
				f_d.R3.value = o
				fr('S', f_d.R1.value)
				fr('I', f_d.R2.value)
			}
			
			
			function mostrarSolucion() {
				
				document.getElementById('sver').className='visible';
				document.getElementById('sver1').className='linea'
				
				document.getElementById('stexto').className='textovisible';
				fro("S", "SV", 4)
				fro("I", "SV", 5)
			}
			
			function respuestaAcertada() {
				if (f_d.R3.value == "V" && f_d.R1.value == 4 && f_d.R2.value == 5)
					f_d.OK.value = parseInt(f_d.OK.value) + 1;
			}
			</script>
            <h3><?php echo $prueba->getTests()->getTitulo(); ?></h3>
            <p>
              <?php echo $prueba->getTests()->getEnunciado(); ?>      

          <?php  include_partial('tabrespuesta'); ?>
        
              
   		<p class="pages"><small>Pagina 1 of 2</small> <span>1</span> <a href="#">2</a> <a href="#">Siguiente&raquo;</a></p>
      </div>
      <div class="sidebar">
        <div class="searchform">
          <form id="formsearch" name="formsearch" method="post" action="#">
            <span>
            <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
            </span>
            <input name="button_search" src="/images/search.gif" class="button_search" type="image" />
          </form>
        </div>
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">TemplateInfo</a></li>
            <li><a href="#">Style Demo</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Archives</a></li>
            <li><a href="#">Web Templates</a></li>
          </ul>
        </div>
        <div class="gadget">
          <h2 class="star"><span>Sponsors</span></h2>
          <div class="clr"></div>
          <ul class="ex_menu">
            <li><a href="http://www.dreamtemplate.com/">DreamTemplate</a><br />
              Over 6,000+ Premium Web Templates</li>
            <li><a href="http://www.templatesold.com/">TemplateSOLD</a><br />
              Premium WordPress &amp; Joomla Themes</li>
            <li><a href="http://www.imhosted.com/">ImHosted.com</a><br />
              Affordable Web Hosting Provider</li>
            <li><a href="http://www.megastockphotos.com/">MegaStockPhotos</a><br />
              Unlimited Amazing Stock Photos</li>
            <li><a href="http://www.evrsoft.com/">Evrsoft</a><br />
              Website Builder Software &amp; Tools</li>
            <li><a href="http://www.csshub.com/">CSS Hub</a><br />
              Premium CSS Templates</li>
          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image</span> Gallery</h2>
        <a href="#"><img src="/images/gal1.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="/images/gal2.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="/images/gal3.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="/images/gal4.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="/images/gal5.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="/images/gal6.jpg" width="75" height="75" alt="" class="gal" /></a> </div>
      <div class="col c2">
        <h2><span>Services</span> Overview</h2>
        <p>Curabitur sed urna id nunc pulvinar semper. Nunc sit amet tortor sit amet lacus sagittis posuere cursus vitae nunc.Etiam venenatis, turpis at eleifend porta, nisl nulla bibendum justo.</p>
        <ul class="fbg_ul">
          <li><a href="#">Lorem ipsum dolor labore et dolore.</a></li>
          <li><a href="#">Excepteur officia deserunt.</a></li>
          <li><a href="#">Integer tellus ipsum tempor sed.</a></li>
        </ul>
      </div>
      <div class="col c3">
        <h2><span>Contact</span> Us</h2>
        <p>Nullam quam lorem, tristique non vestibulum nec, consectetur in risus. Aliquam a quam vel leo gravida gravida eu porttitor dui.</p>
        <p class="contact_info"> <span>Address:</span> 1458 TemplateAccess, USA<br />
          <span>Telephone:</span> +123-1234-5678<br />
          <span>FAX:</span> +458-4578<br />
          <span>Others:</span> +301 - 0125 - 01258<br />
          <span>E-mail:</span> <a href="#">mail@yoursitename.com</a> </p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>.</p>
      <p class="rf">Design by Dream <a href="http://www.dreamtemplate.com/">Web Templates</a></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>


</body>
</html>

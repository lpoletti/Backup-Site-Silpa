<div id="destaque_mae"> 
 <div id="destaque">
  <?php 
  $recuperar = 'destaques';  
  include"scripts/noticias.php"; ?>
  <div id="nav" class="nav"></div><!--Marcador Destaque-->
 </div><!--Destaque-->
</div><!--Destaque Mae--> 
   <div id="news">
    <div id="lanc_empresa" class="lanc_empresa">
    <h2 class="subtitulo">Lan�amentos</h2>    
        <?php 
  $recuperar = 'lancamentos';
  include"scripts/noticias.php"; ?>
    <div id="company">
    <h2 class="subtitulo">Empresa</h2>
     <?php 
  $recuperar = 'company';
  include"scripts/noticias.php"; ?>
  	<!--<div id="down">
     <h2 class="subtitulo">Download</h2>
     <a href="index.php?topicos=nav/page&amp;pagina=download">Arquivos para download</a>
    </div>-->
    </div><!--Company-->
    </div><!--Lan�amentos e Empresa-->   
    <div id="noticias">
     <h2 class="subtitulo">Not�cias</h2>
     <?php 
  $recuperar = 'noticias';
  include"scripts/noticias.php"; ?>
    </div><!--Noticias-->
   </div><!--News-->
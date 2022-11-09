
      <ul>
      <li><a href="painel.php" onclick="showCarga()">Home</a>
      <li><a href="#">Posts</a>
       <ul class="posts">
        <li><a href="cadastro_posts.php" onclick="showCarga()">Cadastro de Posts</a></li>
        <li><a href="listar_posts.php?pag=1" onclick="showCarga()">Listar Posts</a></li>
       </ul>
      </li>
      <li><a href="cadastro_user_site.php" onclick="showCarga()"><?php echo utf8_decode('Cadastro de Usuários');?></a></li>
      <li><a href="#">Manuais</a>
       <ul class="manuais">
        <li><a href="listar_manuais.php?pag=1" onclick="showCarga()">Cadastro de Manuais</a></li>
        <li><a href="cadastro_user_manuais.php" onclick="showCarga()"><?php echo utf8_decode('Usuários Manuais');?></a></li>
       </ul>
      </li>
      <li><a href="listar_representantes.php" onclick="showCarga()">Representantes</a></li>
      <li><a href="#"><?php echo utf8_decode('Concessionárias');?></a>
        <ul class="conce">
         <li><a href="concessionarias.php" onclick="showCarga()"><?php echo utf8_decode('3º Eixo');?></a></li>
         <li><a href="concessionariascaixa.php" onclick="showCarga()">Caixa de Container</a></li>
        </ul>
      </li>
      <li><a href="modelo.php" onclick="showCarga()">Estatisticas</a></li>
      </ul>
     
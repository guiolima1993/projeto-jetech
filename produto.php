<?php $_home = true ?>
<?php include('header.php'); ?>

<section class="produto">
  <div class="container">
    <a class="produto-back" href="produtos.php">
      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 512 512"><title>Voltar</title><polyline points="249.38 336 170 256 249.38 176" style="fill:none;stroke:#3E4649;stroke-linecap:round;stroke-linejoin:round;stroke-width:20px"/><line x1="181.03" y1="256" x2="342" y2="256" style="fill:none;stroke:#3E4649;stroke-linecap:round;stroke-linejoin:round;stroke-width:20px"/><path d="M448,256c0-106-86-192-192-192S64,150,64,256s86,192,192,192S448,362,448,256Z" style="fill:none;stroke:#3E4649;stroke-miterlimit:10;stroke-width:20px"/></svg>
    </a>
    <div class="produto-content">
      <div class="produto-content-info">
        <h1 class="produto-title">Produto 1</h1>
        <p class="produto-text">orem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis gravida mi, in tempor nisi imperdiet vulputate. Fusce sed mauris eget nisl posuere ullamcorper. Suspendisse ornare mi semper metus pretium, n’ec placerat ipsum tincidunt. Nullam feugiat dolor ac lorem fringilla, sit amet egestas libero iaculis. Etiam dapibus pulvinar quam, sed dictum magna porttitor vel. Vivamus ac laoreet mauris. Mauris sit amet suscipit lectus, vitae luctus est. Quisque nunc dui, tincidunt vitae dolor eu, semper aliquet purus. Morbi vitae nibh pellentesque, sollicitudin nunc ut, imperdiet elit. In elementum purus nec nibh aliquam sagittis. Curabitur nec porttitor lectus.</p>
        <h2 class="produto-subtitle">Informações técnicas</h2>
        <p class="produto-subject"><strong>Medidas:</strong> 100x300 mm</p>
        <p class="produto-subject"><strong>Peso:</strong> 40kg</p>
        <p class="produto-subject"><strong>Aplicação:</strong> Carregamento de caixas</p>
        <p class="produto-subject"><strong>Material:</strong> Metal</p>
      </div>
      <div class="basic-carousel owl-carousel produtos-carousel" data-items="1" data-dots="true" data-loop="true" data-autoplay="true" data-dots="true">
        <div class="item">
          <img src="images/carrinho.png" alt="Imagem Carrinho de mão">
        </div>
        <div class="item">
          <img src="images/carrinho.png" alt="Imagem Carrinho de mão">
        </div>
        <div class="item">
          <img src="images/carrinho.png" alt="Imagem Carrinho de mão">
        </div>
      </div>
    </div>
    <div class="aplicacoes">
      <h2 class="aplicacoes-title">Aplicações dos clientes</h2>
      <div class="aplicacoes-card">
        <div class="aplicacoes-card-item">
          <img src="images/transporte.png" alt="Imagem de pessoa transportando caixa">
        </div>
        <div class="aplicacoes-card-item">
          <img src="images/transporte.png" alt="Imagem de pessoa transportando caixa">
        </div>
        <div class="aplicacoes-card-item">
          <img src="images/transporte.png" alt="Imagem de pessoa transportando caixa">
        </div>
        <div class="aplicacoes-card-item">
          <img src="images/transporte.png" alt="Imagem de pessoa transportando caixa">
        </div>
      </div>
    </div>
    <div class="manutencao">
      <h1 class="manutencao-title">Serviço de manutenção</h1>
      <p class="manutencao-text">orem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis gravida mi, in tempor nisi imperdiet vulputate. Fusce sed mauris eget nisl posuere ullamcorper. Suspendisse ornare mi semper metus pretium, n’ec placerat ipsum tincidunt. Nullam feugiat dolor ac lorem fringilla, sit amet egestas libero iaculis. Etiam dapibus pulvinar quam, sed dictum magna porttitor vel. Vivamus ac laoreet mauris. Mauris sit amet suscipit lectus, vitae luctus est. Quisque nunc dui, tincidunt vitae dolor eu, semper aliquet purus. Morbi vitae nibh pellentesque, sollicitudin nunc ut, imperdiet elit. In elementum purus nec nibh aliquam sagittis. Curabitur nec porttitor lectus.</p>
    </div>
  </div>
</section>

<?php include('footer.php'); ?>
</body>
</html>
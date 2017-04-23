<?php snippet('header') ?>
<?php snippet('ponchoHeader') ?>
<title>PonchoBot</title>

<main class="main" role="main">

  <section class="jumbotron" style="background-image: url('<?php $image = $page->background()->toFile();
  if($image) {
    // image exists
    echo $image->url();
  } ?>');">
    <div class="jumbotron_body">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-8 col-md-offset-2 text-center">
            <h1><?= $site->title()->html() ?></h1>
            <p><?= $site->description()->kirbytext() ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay"></div>
  </section>
  <section>
    <div class="container">

      <?= $page->texthtml() ?>
      <div class="row panels-row">
        <?php foreach($site->children()->visible() as $panelFoto): ?>
          <div class="col-xs-12 col-sm-6 col-md-4">
            <a class="panel panel-default panel-icon panel-secondary" href="<?= $panelFoto->url() ?>">
              <div class="panel-heading bg-primary" style="background-image: url('<?php $image = $panelFoto->background()->toFile();
              if($image) {
                // image exists
                echo $image->url();
              } ?>');">
            </div>
            <div class="panel-body text-left">
              <h3><?= $panelFoto->titulo() ?></h3>
              <p class="text-muted"><?= $panelFoto->description() ?></p>
            </div>
          </a>
        </div>
      <?php endforeach ?>
    </div>

  </div>
</section>
</main>


<?php snippet('footer') ?>

<section class="jumbotron jumbocentrado focusable" style="background-image: url("<?= $page->background()->html() ?>");" tabindex="-1">
    <div class="gradient">
    <div class="jumbotron_body">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 text-center">

            <h1 class="m-b-2" id="titulo-jumbo" style="letter-spacing:0.02em; color:#fff; "><?= $page->title()->html() ?></h1>
            <h3 style="color:#fff;text-shadow: 2px 2px 20px #000;"><?= $page->subtitle()->kirbytext() ?></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay"></div>
  </section>

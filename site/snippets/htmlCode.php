&lt;section class="jumbotron <?= $page->class() ?>" style="background-image: url('<?= $page->background() ?>');"&gt;
&lt;div class="jumbotron_body"&gt;
&lt;div class="container"&gt;
&lt;div class="row"&gt;
&lt;div class="col-xs-12 col-md-8 col-md-offset-2 text-center"&gt;
&lt;h1&gt;<?= $page->titulo() ?>&lt;/h1&gt;
<?= $page->texthtml()->html() ?>
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="overlay"&gt;&lt;/div&gt;
&lt;/section&gt;


<?php foreach($page->children() as $section): ?>
&lt;section id="<?= $section->identificador() ?>" class="<?= str_replace(",","",$section->class()) ?>"&gt;
&lt;div class="container"&gt;
&lt;h2&gt;<?= $section->titulo() ?>&lt;/h2&gt;

<?php if ($section->intendedTemplate()=='section-boton'):?>
<?= $section->texthtml()->html() ?>
&lt;div class="row panels-row"&gt;
<?php foreach($section->children() as $boton): ?>
&lt;div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>"&gt;
&lt;a class="panel panel-default text-gray text-left <?= str_replace(",","",$boton->class()) ?>" <?php if ($boton->linkurl()=="") {echo 'style="pointer-events:none;"';} ?> href="<?= $boton->linkurl() ?>"&gt;
&lt;div class="panel-body"&gt;
&lt;h3&gt;<?= $boton->title() ?>&lt;/h3&gt;
&lt;p class="text-muted"&gt;<?= $boton->text() ?>&lt;/p&gt;
&lt;/div&gt;
&lt;/a&gt;
&lt;/div&gt;
<?php endforeach ?>
&lt;/div&gt;

<?php elseif ($section->intendedTemplate()=='section-tabla'): ?>
<?php
$tableHead = array( $section->encabezado1(), $section->encabezado2(), $section->encabezado3(), $section->encabezado4(), $section->encabezado5() );
?>
&lt;table class="table <?= str_replace(",","",$section->class()) ?>"&gt;
&lt;thead&gt;
&lt;tr&gt;
<?php for ($i=0; $i < $section->columns()->int() ; $i++) { ?>
&lt;th&gt;<?= $tableHead[$i] ?>&lt;/th&gt;
<?php } ?>
&lt;/tr&gt;
&lt;/thead&gt;

&lt;tbody&gt;
<?php foreach ($section->children() as $tableRow) { ?>
<?php $tableRow = array ($tableRow->campo1(), $tableRow->campo2(), $tableRow->campo3(), $tableRow->campo4(),$tableRow->campo5() ); ?>
&lt;tr&gt;
<?php  for ($i=0; $i < $section->columns()->int() ; $i++) { ?>
&lt;td&gt;
<?= $tableRow[$i] ?>
&lt;/td&gt;
<?php } ?>
&lt;/tr&gt;
<?php } ?>
&lt;/tbody&gt;
&lt;/table&gt;

<?php elseif ($section->intendedTemplate()=='section-panel'): ?>
<?= $section->texthtml()->html() ?>
&lt;div class="row panels-row"&gt;
<?php foreach($section->children() as $panel): ?>
&lt;div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>"&gt;
&lt;a <?php if ($panel->linkurl()=="") {echo 'style="pointer-events:none;"';} ?> class="panel panel-default panel-icon panel-secondary" href="<?= $panel->linkurl() ?>"&gt;
&lt;div class="panel-heading bg-primary <?= str_replace(",","",$panel->class()) ?>"&gt;
&lt;h1 class="text-left" style="font-size:175%"&gt;<?= $panel->header() ?>&lt;/h1&gt;
&lt;/div&gt;
&lt;div class="panel-body text-left"&gt;
&lt;h3&gt;<?= $panel->bajada() ?>&lt;/h3&gt;
&lt;p class="text-muted"&gt;<?= $panel->description() ?>&lt;/p&gt;
&lt;/div&gt;
&lt;/a&gt;
&lt;/div&gt;
<?php endforeach ?>
&lt;/div&gt;

<?php elseif ($section->intendedTemplate()=='section-panel-foto'): ?>
<?= $section->texthtml()->html() ?>
&lt;div class="row panels-row"&gt;
<?php foreach($section->children() as $panelFoto): ?>
&lt;div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>"&gt;
&lt;a <?php if ($panelFoto->linkurl()=="") {echo 'style="pointer-events:none;"';} ?> class="panel panel-default panel-icon panel-secondary" href="<?= $panelFoto->linkurl() ?>"&gt;
&lt;div class="panel-heading bg-primary <?= str_replace(",","",$panelFoto->class()) ?>" style="background-image: url('<?= $panelFoto->urlimagen() ?>');"&gt;
&lt;/div&gt;
&lt;div class="panel-body text-left"&gt;
&lt;h3&gt;<?= $panelFoto->bajada() ?>&lt;/h3&gt;
&lt;p class="text-muted"&gt;<?= $panelFoto->description() ?>&lt;/p&gt;
&lt;/div&gt;
&lt;/a&gt;
&lt;/div&gt;
<?php endforeach ?>
&lt;/div&gt;

<?php elseif ($section->intendedTemplate()=='section-panel-icono'): ?>
<?= $section->texthtml()->html() ?>
&lt;div class="row panels-row"&gt;
<?php foreach($section->children() as $panelIcono): ?>
&lt;div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>"&gt;
&lt;a <?php if ($panelIcono->linkurl()=="") {echo 'style="pointer-events:none;"';} ?> class="panel panel-default panel-icon panel-secondary" href="<?= $panelIcono->linkurl() ?>"&gt;
&lt;div class="panel-heading bg-primary panelIcono <?= str_replace(",","",$panelIcono->class()) ?>"&gt;
<?php if ($panelIcono->urlicono()->isNotEmpty()): ?>
&lt;img src="<?= $panelIcono->urlicono() ?>" alt="" &gt;&lt;/img&gt;
<?php elseif($panelIcono->fontawesome()->isNotEmpty()): ?>
&lt;i class="fa fa-2x <?= $panelIcono->fontawesome() ?>"&gt;&lt;/i&gt;
<?php else: ?>
&lt;i class="material-icons fa-2x"&gt;<?= $panelIcono->materialicon() ?>&lt;/i&gt;
<?php endif ?>
&lt;/div&gt;
&lt;div class="panel-body text-left"&gt;
&lt;h3&gt;<?= $panelIcono->bajada() ?>&lt;/h3&gt;
&lt;p class="text-muted"&gt;<?= $panelIcono->description() ?>&lt;/p&gt;
&lt;/div&gt;
&lt;/a&gt;
&lt;/div&gt;
<?php endforeach ?>
&lt;/div&gt;

<?php elseif ($section->intendedTemplate()=='section-columnas'): ?>
&lt;div class="row"&gt;
<?php foreach($section->children() as $columna): ?>
&lt;div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->value()  ?>"&gt;
&lt;div class="panel-body text-left"&gt;
&lt;h3&gt;<?= $columna->bajada() ?>&lt;/h3&gt;
<?= $columna->texthtml()->html() ?>
&lt;/div&gt;
&lt;/div&gt;
<?php endforeach ?>
&lt;/div&gt;

<?php elseif ($section->intendedTemplate()=='section-icono-texto'): ?>
<?= $section->texthtml()->html() ?>
&lt;div class="row panels-row"&gt;
<?php foreach($section->children() as $iconoTexto): ?>
&lt;div class="p-t-3 p-b-3 col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?> iconoTexto <?= str_replace(",","",$iconoTexto->class()) ?>"&gt;
<?php if ($iconoTexto->urlicono()->isNotEmpty()): ?>
&lt;img src="<?= $iconoTexto->urlicono() ?>" alt=""&gt;&lt;/img&gt;
<?php elseif($iconoTexto->fontawesome()->isNotEmpty()): ?>
&lt;i class="fa fa-5x <?= $iconoTexto->fontawesome() ?>"&gt;&lt;/i&gt;
<?php else: ?>
&lt;i class="material-icons fa-5x"&gt;<?= $iconoTexto->materialicon() ?>&lt;/i&gt;
<?php endif ?>
&lt;/br&gt;
&lt;p&gt;<?= $iconoTexto->description() ?>&lt;/p&gt;
&lt;/div&gt;
<?php endforeach ?>
&lt;/div&gt;

<?php elseif ($section->intendedTemplate()=='section-infografia'): ?>
<?= $section->texthtml()->html() ?>
&lt;div class="row panels-row"&gt;
&lt;div class="container"&gt;
&lt;div class="col-md-12"&gt;
&lt;img src="<?= $section->imgdesktop() ?>" alt="" class="img-responsive hidden-md-down"&gt;
&lt;img src="<?= $section->imgtablet() ?>" alt="" class="img-responsive hidden-lg-up hidden-sm-down"&gt;
&lt;img src="<?= $section->imgmobile() ?>" alt="" class="img-responsive hidden-md-up"&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;

<?php elseif ($section->intendedTemplate()=='section-quote'): ?>
&lt;div class="row"&gt;
&lt;div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 <?= str_replace(",","",$section->class()) ?>"&gt;
&lt;blockquote&gt;
&lt;p&gt;" <?= $section->cita() ?> "&lt;/p&gt;
&lt;small&gt;<?= $section->autor() ?>&lt;/small&gt;
&lt;/blockquote&gt;
&lt;/div&gt;
&lt;/div&gt;

<?php elseif ($section->intendedTemplate()=='section-mapa'): ?>

&lt;/div&gt;
&lt;div class="container-fluid"&gt;
<?= $section->texthtml()->html() ?>
&lt;div class="row"&gt;
&lt;div class="maps"&gt;
&lt;iframe
class="map"
width="100%"
height="100%"
frameborder="0"
style="position:relative;top:-47px; border:none;"
src="https://www.google.com/maps/d/embed?mid=<?= $section->mapkey()?>"&gt;
&lt;/iframe&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="container"&gt;

<?php elseif ($section->intendedTemplate()=='section-texto'): ?>

<?= $section->texthtml()->html() ?>

<?php elseif ($section->intendedTemplate()=='section-texto-imagen'): ?>

&lt;div class="row"&gt;
<?php if ($section->align()=='i'): ?>
&lt;div class="col-sm-4"&gt;
&lt;img class="<?= $section->imgClass() ?>" src="<?= $section->urlimagen() ?>" style="width: 100%;"&gt;
&lt;/div&gt;
&lt;div class="col-sm-8 text-left"&gt;
<?= $section->texthtml()->html() ?>
&lt;/div&gt;
<?php elseif ($section->align()=='d'): ?>
&lt;div class="col-sm-8 text-left"&gt;
<?= $section->texthtml()->html() ?>
&lt;/div&gt;
&lt;div class="col-sm-4"&gt;
&lt;img class="<?= $section->imgClass() ?>" src="<?= $section->urlimagen() ?>" style="width: 100%;"&gt;
&lt;/div&gt;
<?php endif ?>
&lt;/div&gt;

<?php elseif ($section->intendedTemplate()=='section-numero'): ?>
<?= $section->texthtml()->html() ?>
&lt;div class="row numbers text-left"&gt;
<?php foreach($section->children() as $numero): ?>
&lt;div class="numberdiv col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?> <?= str_replace(",","",$numero->class()) ?>"&gt;
&lt;div class="h2 <?= $numero->textcolor() ?>"&gt; <?= $numero->number() ?> &lt;small class="<?= $numero->textcolor() ?>"&gt; <?= $numero->small() ?>&lt;/small&gt; &lt;/div&gt;
&lt;p&gt;<?= $numero->description() ?>&lt;/p&gt;
&lt;/div&gt;
<?php endforeach ?>
&lt;/div&gt;

<?php elseif ($section->intendedTemplate()=='section-slider'): ?>
&lt;p&gt; <?= $section->description() ?> &lt;/p&gt;
&lt;/div&gt;
&lt;div class="container-fluid"&gt;
&lt;div class="row"&gt;
&lt;div id="my<?= $section->identificador() ?>" class="carousel slide" data-ride="carousel"&gt;
&lt;ol class="carousel-indicators"&gt;
<?php for ($i=0; $i < $section->cantidadSlider()->value() ; $i++) { ?>
&lt;li data-target="#my<?= $section->identificador() ?>" data-slide-to="<?= $i ?>"&gt;&lt;/li&gt;
<?php } ?>
&lt;/ol&gt;
&lt;div class="carousel-inner"&gt;
<?php $i=0; ?>
<?php foreach ($section->children() as $slider):
if ($i < $section->cantidadSlider()->value()) { ?>
&lt;div class="item <?php if($i == '0') echo "active"; ?>"&gt;
&lt;img src="<?= $slider->linkurl() ?>" alt="<?= $slider->identificador() ?> Slide"&gt;
&lt;div class="container"&gt;
&lt;div class="carousel-caption"&gt;
&lt;p&gt;<?= $slider->description() ?>&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
<?php $i++; } ?>
<?php endforeach ?>
&lt;/div&gt;
&lt;a class="carousel-control left" href="#my<?= $section->identificador() ?>" data-slide="prev"&gt;
&lt;i class="fa fa-angle-left fa-3x carouselBotons"&gt;&lt;/i&gt;
&lt;/a&gt;
&lt;a class="carousel-control right" href="#my<?= $section->identificador() ?>" data-slide="next"&gt;
&lt;i class="fa fa-angle-right fa-3x carouselBotons"&gt;&lt;/i&gt;
&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="container"&gt;

<?php elseif ($section->intendedTemplate()=='section-video'): ?>
<?php if ($section->texthtml()->html()->isNotEmpty()): ?>
&lt;div class="row video-row"&gt;
&lt;div class="col-md-5  col-xs-12 video-text"&gt;
<?= $section->texthtml()->html() ?>
&lt;/div&gt;
&lt;div class="col-md-6 col-md-offset-1 col-xs-12"&gt;
&lt;div class="embed-responsive embed-responsive-16by9 video-flex"&gt;
&lt;iframe width="1280" height="720" src="https://www.youtube.com/embed/<?= $section->videourl() ?>?rel=0&amp;controls=0&amp;showinfo=0?ecver=1" frameborder="0" allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
<?php else: ?>
&lt;div class="embed-responsive embed-responsive-16by9"&gt;
&lt;iframe width="1280" height="720" src="https://www.youtube.com/embed/<?= $section->videourl() ?>?rel=0&amp;controls=0&amp;showinfo=0?ecver=1" frameborder="0" allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;
<?php endif ?>
<?php endif ?>
&lt;/div&gt;
&lt;/section&gt;
<?php endforeach ?>

<?php if ($page->footer()->isNotEmpty()): ?>
&lt;section style="background: #fff" class="m-b-3"&gt;
&lt;div class="container"&gt;
&lt;div class="text-left"&gt;
&lt;h2&gt;También te puede interesar...&lt;/h2&gt;
&lt;/div&gt;
<?php
$footerTags = explode(",", $page->footer());
?>
&lt;div class="row"&gt;
<?php for ($i=0; $i < count($footerTags) ; $i++): ?>
&lt;div class="col-md-4 interesar"&gt;
&lt;a href="<?php echo $site->page('footers/' . $footerTags[$i])->linkurl() ?>"&gt;
&lt;h5&gt;<?php echo $site->page('footers/' . $footerTags[$i])->title() ?>&lt;/h5&gt;
&lt;p class="text-muted"&gt;<?php echo $site->page('footers/' . $footerTags[$i])->text() ?>&lt;/p&gt;
&lt;/a&gt;
&lt;/div&gt;
<?php endfor ?>
&lt;/div&gt;
&lt;/div&gt;
&lt;/section&gt;
<?php endif ?>


      &lt;section class="jumbotron <?= $page->class() ?>" style="background-image: url('<?= $page->background() ?>');"&gt;
        &lt;div class="jumbotron_body"&gt;
          &lt;div class="container"&gt;
            &lt;div class="row"&gt;
              &lt;div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 text-center p-t-4 p-b-4 table-row"&gt;

                  &lt;div class="col-xs-12 col-md-6 text-right table-cell borde-der"&gt;

                    &lt;h3&gt;<?= $page->titulo() ?>&lt;/h3&gt;
                  &lt;/div&gt;
                  &lt;div class="col-xs-12 col-md-5 text-left table-cell borde-izq"&gt;
                    &lt;h5&gt;<?= $page->fecha() ?>&lt;/h5&gt;
                    &lt;h6&gt;<?= $page->horario() ?>&lt;/h6&gt;
                    &lt;h4&gt;<?= $page->location() ?>&lt;/h4&gt;
                  &lt;/div&gt;
                &lt;/div&gt;

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
              &lt;div class="row panels-row"&gt;
                <?php foreach($section->children() as $boton): ?>
                  &lt;div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>"&gt;
                    &lt;a class="panel panel-default text-gray text-left <?= str_replace(",","",$boton->class()) ?>" <?php if ($boton->linkurl()=="") {echo 'style="pointer-events:none;"';} ?> href="<?= $boton->linkurl() ?>"&gt;
                      &lt;div class="panel-body"&gt;
                        &lt;h3 class=""&gt;<?= $boton->title() ?>&lt;/h3&gt;
                        &lt;p class="text-muted"&gt;<?= $boton->text() ?>&lt;/p&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/div&gt;
                <?php endforeach ?>
              &lt;/div&gt;

            <?php elseif ($section->intendedTemplate()=='section-panel'): ?>
              &lt;p&gt; <?= $section->description() ?> &lt;/p&gt;
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
              &lt;p&gt; <?= $section->description() ?> &lt;/p&gt;
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
              &lt;p&gt; <?= $section->description() ?> &lt;/p&gt;
              &lt;div class="row panels-row"&gt;
                <?php foreach($section->children() as $panelIcono): ?>
                  &lt;div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>"&gt;
                    &lt;a <?php if ($panelIcono->linkurl()=="") {echo 'style="pointer-events:none;"';} ?> class="panel panel-default panel-icon panel-secondary" href="<?= $panelIcono->linkurl() ?>"&gt;
                      &lt;div class="panel-heading bg-primary <?= str_replace(",","",$panelIcono->class()) ?>" style="display: flex; align-items: center; justify-content: center"&gt;
                        <?php if ($panelIcono->fontawesome()==""): ?>
                          &lt;img src="<?= $panelIcono->urlicono() ?>" alt="" style="height:80px; max-width:50%; "&gt;&lt;/img&gt;
                        <?php else: ?>
                          &lt;i class="fa fa-2x <?= $panelIcono->fontawesome() ?>"&gt;&lt;/i&gt;
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


            <?php elseif ($section->intendedTemplate()=='section-icono-texto'): ?>
              &lt;p&gt; <?= $section->description() ?> &lt;/p&gt;
              &lt;div class="row panels-row"&gt;
                <?php foreach($section->children() as $iconoTexto): ?>
                  &lt;div class="<?= str_replace(",","",$iconoTexto->class()) ?> p-t-3 p-b-3 col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>" style="display: flex; align-items: center; justify-content: flex-start; flex-flow: column; "&gt;
                    <?php if ($iconoTexto->fontawesome()==""): ?>
                      &lt;img src="<?= $iconoTexto->urlicono() ?>" alt="" style="height:80px; max-width:50%; "&gt;&lt;/img&gt;
                    <?php else: ?>
                      &lt;i class="fa fa-5x <?= $iconoTexto->fontawesome() ?>"&gt;&lt;/i&gt;
                    <?php endif ?>
                  &lt;/br&gt;
                  &lt;p&gt;<?= $iconoTexto->description() ?>&lt;/p&gt;
                &lt;/div&gt;
              <?php endforeach ?>
            &lt;/div&gt;

          <?php elseif ($section->intendedTemplate()=='section-infografia'): ?>
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
              &lt;div class="container"&gt;

                &lt;div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 <?= str_replace(",","",$section->class()) ?>"&gt;
                  &lt;blockquote&gt;
                    &lt;p&gt;" <?= $section->cita() ?> "&lt;/p&gt;
                    &lt;small&gt;<?= $section->autor() ?>&lt;/small&gt;
                  &lt;/blockquote&gt;

                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;

          <?php elseif ($section->intendedTemplate()=='section-mapa'): ?>
          &lt;/div&gt;
          &lt;div class="container-fluid"&gt;
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

          &lt;div class="row"&gt;
            &lt;div class="col-md-12 text-left <?= str_replace(",","",$section->class()) ?>"&gt;
              <?= $section->texthtml()->html() ?>

            &lt;/div&gt;
          &lt;/div&gt;

        <?php elseif ($section->intendedTemplate()=='section-texto-imagen'): ?>
          &lt;div class="row"&gt;
            <?php if ($section->align()=='i'): ?>
              &lt;div class="col-sm-4"&gt;
                &lt;img class="img-circle" src="<?= $section->urlimagen() ?>" style="max-width: 100%;"&gt;
              &lt;/div&gt;
              &lt;div class="col-sm-8 text-left"&gt;
                <?= $section->texthtml()->html() ?>
              &lt;/div&gt;
            <?php elseif ($section->align()=='d'): ?>
              &lt;div class="col-sm-8 text-left"&gt;
                <?= $section->texthtml()->html() ?>
              &lt;/div&gt;
              &lt;div class="col-sm-4"&gt;
                &lt;img class="<?= $section->imgClass() ?>" src="<?= $section->urlimagen() ?>" style="max-width: 100%;"&gt;
              &lt;/div&gt;
            <?php endif ?>
          &lt;/div&gt;

        <?php elseif ($section->intendedTemplate()=='section-numero'): ?>
          &lt;div class="row numbers text-left"&gt;
            <?php foreach($section->children() as $numero): ?>
              &lt;div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?> <?= str_replace(",","",$numero->class()) ?>"&gt;
                &lt;div class="h2 <?= $numero->textcolor() ?>"&gt; <?= $numero->number() ?> &lt;small class="<?= $numero->textcolor() ?>"&gt; <?= $numero->small() ?>&lt;/small&gt; &lt;/div&gt;
                &lt;p&gt;<?= $numero->description() ?>&lt;/p&gt;
              &lt;/div&gt;
            <?php endforeach ?>
          &lt;/div&gt;

        <?php elseif ($section->intendedTemplate()=='section-video'): ?>
          &lt;div class="embed-responsive embed-responsive-16by9"&gt;
            &lt;iframe width="1280" height="720" src="https://www.youtube.com/embed/<?= $section->videourl() ?>?rel=0&amp;controls=0&amp;showinfo=0?ecver=1" frameborder="0" allowfullscreen&gt;&lt;/iframe&gt;
          &lt;/div&gt;

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

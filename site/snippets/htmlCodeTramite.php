&lt;div class="container"&gt;

&lt;div class="row"&gt;
<?php if ($page->nav() == "sidenav"): ?>
&lt;div id="sidebar" class="col-md-4 hidden-sm-down"&gt;
&lt;div id="nav-anchor"&gt;&lt;/div&gt;
&lt;nav id="side-nav"&gt;
&lt;h5 class="text-muted"&gt;Indice&lt;/h5&gt;
&lt;ul class="nav nav-pills nav-stacked"&gt;
<?php foreach($page->children() as $section): ?>
<?php if ($section->identificador() != ''): ?>
&lt;li class="index-item"&gt;&lt;a href="#<?= $section->identificador() ?>" class="text-left"&gt;&lt;strong&gt;<?= $section->titulo() ?> &lt;/strong&gt;&lt;/a&gt;&lt;/li&gt;
<?php endif ?>
<?php endforeach ?>
&lt;/ul&gt;
&lt;/nav&gt;
&lt;/div&gt;

&lt;div id="content" class="col-md-8"&gt;
&lt;section class="p-b-0"&gt;
&lt;h3 class="text-uppercase"&gt;<?= $page->titular() ?>&lt;/h3&gt;
&lt;p class="text-muted"&gt;<?= $page->titulo() ?>&lt;/p&gt;
<?= $page->texthtml()->html() ?>
&lt;/section&gt;
&lt;hr&gt;

&lt;section id="indiceMobile" class="p-t-0 p-b-0 hidden-sm-up"&gt;
&lt;h5 class="text-muted"&gt;Indice&lt;/h5&gt;
&lt;ul class="nav nav-pills nav-stacked"&gt;
<?php foreach($page->children() as $section): ?>
<?php if ($section->identificador() != ''): ?>
&lt;li class="index-item"&gt;&lt;a href="#<?= $section->identificador() ?>" class="text-left"&gt;&lt;strong&gt;<?= $section->titulo() ?> &lt;/strong&gt;&lt;/a&gt;&lt;/li&gt;
<?php endif ?>
<?php endforeach ?>
&lt;/ul&gt;
&lt;/section&gt;

<?php else: ?>
&lt;div id="content" class="col-md-12"&gt;
&lt;section class="p-b-0"&gt;
&lt;h3 class="text-uppercase"&gt;<?= $page->titular() ?>&lt;/h3&gt;
&lt;p class="text-muted"&gt;<?= $page->titulo() ?>&lt;/p&gt;
<?= $page->texthtml()->html() ?>
&lt;/section&gt;
&lt;hr&gt;
&lt;section id="indiceTexto" class="p-t-0 p-b-0"&gt;
&lt;h5 class="text-muted"&gt;Indice&lt;/h5&gt;
&lt;ul class="nav nav-pills nav-stacked"&gt;
<?php foreach($page->children() as $section): ?>
<?php if ($section->identificador() != ''): ?>
&lt;li class="index-item"&gt;&lt;a href="#<?= $section->identificador() ?>" class="text-left"&gt;&lt;strong&gt;<?= $section->titulo() ?> &lt;/strong&gt;&lt;/a&gt;&lt;/li&gt;
<?php endif ?>
<?php endforeach ?>
&lt;/ul&gt;
&lt;/section&gt;
<?php endif ?>

<?php foreach($page->children() as $section): ?>
&lt;section id="<?= $section->identificador()?>"class="p-t-0 p-b-0"&gt;
&lt;h2&gt;<?= $section->titulo() ?>&lt;/h2&gt;
<?= $section->texthtml()->html() ?>
&lt;/section&gt;
<?php endforeach ?>
&lt;/div&gt;
&lt;/div&gt;

<?php if ($page->footer()!=''): ?>
&lt;section style="background: #fff"&gt;
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
&lt;/div&gt;
&lt;span id="stop-anchor"&gt;&lt;/span&gt;

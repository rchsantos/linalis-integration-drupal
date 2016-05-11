<!-- Header -->
<header class="clearfix <?php print $container_class; ?>">
  <!-- Navigation Bar -->
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php print $front_page; ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"></a>
      <div id="navbar" class="navbar-collapse collapse" aria-expanded="false">
        <nav class="nav navbar-nav hidden">
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($secondary_nav)): ?>
            <?php print render($secondary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </nav>
      </div> <!--/.nav-collapse -->
    </div> <!-- /container -->
  </nav> <!-- /navbar -->
  <?php if (drupal_is_front_page()): ?>
    <div class="jumbotron text-center" style="background-image: url('<?php print drupal_get_path('theme', 'linalis'); ?>/images/img-header.jpg');">
      <div class="">
        <?php if (!empty($page['jumbotron'])): ?>
          <div class="container">
            <?php print render($page['jumbotron']); ?>
          </div>
        <?php endif; ?>
      </div>
    </div> <!-- /jumbotron -->
  <?php endif; ?>
</header> <!-- /header -->

<!-- Section Content -->
<section class="clearfix">
  <div class="container">
    <div class="col-sm-8 col-sm-offset-2">
      <?php if (!empty($page['content'])): ?>
        <?php print render($page['content']); ?>
      <?php endif; ?>
    </div>
  </div>
</section> <!-- /section content -->


<!-- Section Views Images carre -->
  <section class="clearfix odd">
    <div class="container">
      <div class="col-sm-8 col-sm-offset-2">
        <h2>Dolor sit amet.</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
        <div class="row">
          <?php if (!empty($page['content_img_car'])): ?>
            <?php print render($page['content_img_car']); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section> <!-- /section images carre -->
<!-- Banner -->
<div class="banner clearfix" style="background-image: url('<?php print drupal_get_path('theme', 'linalis'); ?>/images/img-header.jpg');">
  <div class="banner-effect" ></div>
</div>

<!-- Section Views Images rond -->
<section class="clearfix">
  <div class="container">
    <div class="col-sm-8 col-sm-offset-2">
      <h2>Ut enim ad minim veniam.</h2>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
      <div class="row">
        <?php if (!empty($page['content_img_car'])): ?>
          <?php print render($page['content_img_car']); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section> <!-- /section images rond -->

<!-- Footer -->
<footer class="clearfix <?php print $container_class; ?>">
  <!-- Footer Menu -->
  <div class="container footer-menu">
    <div class="row">
      <?php if (!empty($page['footer_menu'])): ?>
        <?php print render($page['footer_menu']); ?>
      <?php endif; ?>
    </div>
  </div> <!-- /copyright>

  <!-- Footer Copyright -->
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 ">
            <div class="footer-bottom clearfix">
              <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 ">
                  <?php if (!empty($page['footer_copyright'])): ?>
                    <?php print render($page['footer_copyright']); ?>
                  <?php else: ?>
                    &nbsp;
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- /copyright -->
</footer> <!-- /footer>

<?php if (!empty($page['popup_modal'])): ?>
  <!-- PopUp Modal -->
  <div id="animatedModal" class="animated animatedModal-on zoomIn" style="display: none; position: fixed; width: 100%; height: 100%; top: 0; left: 0; overflow-y: auto; z-index: 9999; opacity: 1; animation-duration: 0.6s; background-color: rgb(57, 190, 185);">
    <div class="col-sm-4 pull-right closebt-class">
      <a id="closebt" href="#">X</a>
    </div>
    <div id="modal-container" class="col-sm-8 col-md-8 col-lg-8 col-lg-offset-2">
      <?php print render($page['footer_copyright']); ?>
    </div>
  </div> <!-- /animatedModal-->
<?php endif; ?>
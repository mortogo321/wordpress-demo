<?php get_header();?>

<main>
  <?php get_template_part('partials/menu');?>

  <div class="jumbotron">
    <div class="content">
      <h3>Presented by Sekseason</h3>
      <h1 class="display-3 mb-4">Wordpress Demo!</h1>

      <a href="https://github.com/sekseason/wordpress-demo" role="button" class="btn btn-main btn-outline-light">
        <i class="fab fa-github fa-lg mr-1"></i>
        View Source
      </a>
    </div>

    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg1.png" alt="" />
  </div>

  <div id="demos" class="section"></div>
  <section class="content">
    <div class="gallery">
      <h1 class="display-5">5 Premium Layouts for Any Niche</h1>
      <p>This template is an absolute treat for any store and niche. You get 5 fully functional designs for the price of one.</p>

      <div class="gallery-wrapper">
        <ul class="list-unstyled">
          <li>
            <div class="gallery-item gallery-item-1">
              <a href="#">
                <div class="gallery-item_wrapper">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pic-1.jpg" alt="theme-img">
                </div>
                <span>Lingerie</span>
              </a>
            </div>
          </li>
          <li>
            <div class="gallery-item gallery-item-2 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.4s">
              <a href="#">
                <div class="gallery-item_wrapper">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pic-2.jpg" alt="theme-img">
                </div>
                <span>Furniture</span>
              </a>
            </div>
          </li>
          <li>
            <div class="gallery-item gallery-item-3 wow fadeInLeft" data-wow-offset="150" data-wow-delay="0.2s">
              <a href="#">
                <div class="gallery-item_wrapper">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pic-3.jpg" alt="theme-img">
                </div>
                <span>Bikes and Spare Parts</span>
              </a>
            </div>
          </li>
          <li>
            <div class="gallery-item gallery-item-4 wow fadeInLeft" data-wow-offset="-50" data-wow-delay="0.4s">
              <a href="#">
                <div class="gallery-item_wrapper">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pic-4.jpg" alt="theme-img">
                </div>
                <span>Medical Equipment</span>
              </a>
            </div>
          </li>
          <li>
            <div class="gallery-item gallery-item-5 wow fadeInRight" data-wow-offset="150">
              <a href="#">
                <div class="gallery-item_wrapper">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pic-5.jpg" alt="theme-img">
                </div>
                <span>Spare parts</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <div id="features" class="section"></div>
  <section class="content">
    <div class="info-1">
      <div class="container">
        <div class="row">
          <div class="col-8 offset-3">
            <div class="mt-5 pt-5">
              <h1 class="display-5 mt-4 mb-4">Create Tailored Page Designs with the Color Scheme Tool</h1>
              <p>Up until now, you required design prowess and knowledge of CSS files, along with their structures in order
                to make the necessary changes to your store’s color scheme. But as a part of Magetique’s functionality, you
                can edit color arrangements on any page of your website, using our intuitive visual interface. Experiment
                in order to boost your conversion rates.</p>
            </div>
          </div>
        </div>
      </div>

      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/color_scheme.png" alt="info-1-img">
    </div>
  </section>

  <div class="section"></div>
  <section class="content">
    <div class="info-2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-4">
            <div class="p-4 wow fadeIn" data-wow-offset="50" data-wow-delay="0.3s" data-wow-offset="-100">
              <h1 class="display-5 mt-4 mb-4">Dazzling Design</h1>
              <p>Our 14 years of experience creating successful eCommerce designs was poured into optimizing Magetique. Everything
                in this theme, from the color schemes, UX, navigation to page structures, catalogs and product pages, creates
                the right conditions, which drive your visitors to successful conversions.</p>
            </div>
          </div>
          <div class="info-2-img col-8">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pic-6.jpg" alt="info-2-img" class="info-2-img-1 wow fadeInUp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pic-7.jpg" alt="info-2-img" class="info-2-img-2 wow fadeInRight"
              data-wow-delay="0.2s" data-wow-offset="-100">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pic-8.jpg" alt="info-2-img" class="info-2-img-3 wow fadeInLeft"
              data-wow-delay="0.5s" data-wow-offset="-100">
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer();?>
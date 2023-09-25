<?= $this->extend('front/layout/layout'); ?>
<?= $this->section('content'); ?>

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>About Us</h2>
            <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-6">
                <h3>Voluptatem dignissimos provident quasi corporis</h3>
                <img src="img/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
                <p>Ut fugiat ut sunt quia veniam. Voluptate perferendis perspiciatis quod nisi et. Placeat debitis quia recusandae odit et consequatur voluptatem. Dignissimos pariatur consectetur fugiat voluptas ea.</p>
                <p>Temporibus nihil enim deserunt sed ea. Provident sit expedita aut cupiditate nihil vitae quo officia vel. Blanditiis eligendi possimus et in cum. Quidem eos ut sint rem veniam qui. Ut ut repellendus nobis tempore doloribus debitis explicabo similique sit. Accusantium sed ut omnis beatae neque deleniti repellendus.</p>
            </div>
            <div class="col-lg-6">
                <div class="content ps-0 ps-lg-5">
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                    </ul>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                    </p>

                    <div class="position-relative mt-4">
                        <img src="img/about-2.jpg" class="img-fluid rounded-4" alt="">
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- End About Us Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Produk Hukum Terbaru</h2>
            <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos quam</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                <?php foreach ($peraturan as $p) : ?>
                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center">
                                    <img src="<?= base_url() ?>img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3><?= $p['judul'] ?></h3>
                                        <h4><?= $p['kategori'] ?></h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->
                <?php endforeach; ?>
            </div>

        </div>
</section><!-- End Testimonials Section -->

<!-- ======= Portfolio Section ======= -->
<section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Tema Peraturan</h2>
            <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                <?php foreach ($peraturan as $p) : ?>
                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <a href="<?= base_url() ?>img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="<?= base_url() ?>img/portfolio/app-1.jpg" class="img-fluid" alt=""></a>

                                <div class="portfolio-info">
                                    <h2><a href="portfolio-details.html" title="More Details"><?= $p['judul'] ?></a></h2>
                                    <p><?= $p['kategori'] ?></p>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div><!-- End Portfolio Container -->

    </div>

    </div>
</section><!-- End Portfolio Section -->

<section>
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Berita dan Artikel</h2>
                <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
            </div>

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                <div>
                    <ul class="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">Perempuan Dan Anak</li>
                        <li data-filter=".filter-product">Pendidikan</li>
                        <li data-filter=".filter-branding">Kesehatan</li>
                        <li data-filter=".filter-books">Budaya</li>
                    </ul><!-- End Portfolio Filters -->
                </div>

                <div class="row gy-4 portfolio-container">

                    <div class="col-xl-3 col-md-3 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <a href="<?= base_url() ?>img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="<?= base_url() ?>img/portfolio/app-1.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details">App 1</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-md-3 portfolio-item filter-product">
                        <div class="portfolio-wrap">
                            <a href="<?= base_url() ?>img/portfolio/product-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="<?= base_url() ?>img/portfolio/product-1.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details">Product 1</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-md-3 portfolio-item filter-branding">
                        <div class="portfolio-wrap">
                            <a href="<?= base_url() ?>img/portfolio/branding-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="<?= base_url() ?>img/portfolio/branding-1.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details">Branding 1</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-md-3 portfolio-item filter-books">
                        <div class="portfolio-wrap">
                            <a href="<?= base_url() ?>img/portfolio/books-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="<?= base_url() ?>img/portfolio/books-1.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-md-3 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <a href="<?= base_url() ?>img/portfolio/app-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="<?= base_url() ?>img/portfolio/app-2.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details">App 2</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-md-3 portfolio-item filter-product">
                        <div class="portfolio-wrap">
                            <a href="<?= base_url() ?>img/portfolio/product-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="<?= base_url() ?>img/portfolio/product-2.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details">Product 2</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-md-3 portfolio-item filter-branding">
                        <div class="portfolio-wrap">
                            <a href="<?= base_url() ?>img/portfolio/branding-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="<?= base_url() ?>img/portfolio/branding-2.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details">Branding 2</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-md-3 portfolio-item filter-books">
                        <div class="portfolio-wrap">
                            <a href="<?= base_url() ?>img/portfolio/books-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="<?= base_url() ?>img/portfolio/books-2.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details">Books 2</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-md-3 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <a href="<?= base_url() ?>img/portfolio/app-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="<?= base_url() ?>img/portfolio/app-3.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details">App 3</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-md-3 portfolio-item filter-product">
                        <div class="portfolio-wrap">
                            <a href="<?= base_url() ?>img/portfolio/product-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="<?= base_url() ?>img/portfolio/product-3.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details">Product 3</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-md-3 portfolio-item filter-branding">
                        <div class="portfolio-wrap">
                            <a href="<?= base_url() ?>img/portfolio/branding-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="<?= base_url() ?>img/portfolio/branding-3.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details">Branding 3</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-md-3 portfolio-item filter-books">
                        <div class="portfolio-wrap">
                            <a href="<?= base_url() ?>img/portfolio/books-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="<?= base_url() ?>img/portfolio/books-3.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details">Books 3</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                </div><!-- End Portfolio Container -->

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container" data-aos="zoom-out">

            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="<?= base_url() ?>img/clients/client-1.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="<?= base_url() ?>img/clients/client-2.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="<?= base_url() ?>img/clients/client-3.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="<?= base_url() ?>img/clients/client-4.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="<?= base_url() ?>img/clients/client-5.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="<?= base_url() ?>img/clients/client-6.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="<?= base_url() ?>img/clients/client-7.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="<?= base_url() ?>img/clients/client-8.png" class="img-fluid" alt=""></div>
                </div>
            </div>

        </div>
    </section><!-- End Clients Section -->
</section>

<main>
    <?= $this->endSection('content'); ?>
</main>
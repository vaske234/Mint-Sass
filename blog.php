<?php include('partials/header.php'); ?>

    <!-- header -->
    <section class="headerBlog">
        <img src="img/blog-header.jpg" alt="">
        <h1 class="display-4">Blog</h1>
    </section>

    <!-- main blog page -->
    <section class="main container py-5">
        <article class="row">
            <div class="col-md-8">
                <div class="blog">
                    <div class="featuredImage">
                        <img src="img/mint-socijalne-mreze.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>Drustvene mreze</h3>
                        <p class="meta">23.09.2021 | Admin</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium, delectus deserunt amet optio error repellat explicabo tempore cumque hic expedita at nulla ducimus eligendi temporibus voluptates totam maxime sapiente facilis enim qui? Qui ipsam nam omnis ex quibusdam molestias error, voluptatum assumenda ab, laboriosam, nemo aspernatur tempora fugit id modi saepe quos velit tenetur? Temporibus.</p>
                        <a href="single.php">Procitaj vise</a>
                    </div>
                </div>
                <div class="blog">
                    <div class="featuredImage">
                        <img src="img/mint-google-ads.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>Google Ads</h3>
                        <p class="meta">23.09.2021 | Admin</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure adipisci, porro veniam vero, mollitia nemo sit quidem fuga fugiat ipsam ducimus reiciendis officiis nihil voluptate quia aliquid magnam quam dolorum veritatis modi culpa! Sed animi odit totam cumque numquam maiores! Voluptate tenetur dolor iure. Exercitationem architecto asperiores, fuga voluptatum amet minima blanditiis. Explicabo, id veritatis.</p>
                        <a href="single.php">Procitaj vise</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <?php include('partials/sidebar.php'); ?>
            </div>
        </article>
    </section>

<?php include('partials/footer.php'); ?>
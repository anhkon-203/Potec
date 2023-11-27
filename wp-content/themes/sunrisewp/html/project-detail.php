<?php include "header.php"; ?>

<section class="section-detail-prj-1">
    <div class="content">
        <div class="col-left">
            <div class="text">
                <div class="title">
                    <h3>Chi tiết dự án</h3>
                </div>
                <div class="name">
                    <h4>Nhà máy nhiệt điện Hải Phòng 2</h4>
                </div>
                <div class="category">
                    <p>Hạng mục: <span>Hệ thống bơm FGD, bơm thải xỉ, bơm tuần hoàn & van công nghiệp</span> </p>
                </div>
                <div class="desc">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        <div class="col-right">
            <div class="image">
                <figure>
                    <img src="./dist/img/img-61.png" alt="">
                </figure>
            </div>
        </div>
    </div>
</section>

<section class="section-detail-prj-2">
    <div class="container">
        <div class="title">
            <h2>Hình ảnh chi tiết của dự án</h2>
        </div>
        <div class="content js-gallery">
            <div class="child" data-src="./dist/img/img-62.png">
                <figure>
                    <img src="./dist/img/img-62.png" alt="">
                </figure>
            </div>
            <div class="child" data-src="./dist/img/img-63.png">
                <figure>
                    <img src="./dist/img/img-63.png" alt="">
                </figure>
            </div>
            <div class="child" data-src="./dist/img/img-64.png">
                <figure>
                    <img src="./dist/img/img-64.png" alt="">
                </figure>
            </div>
            <div class="child" data-src="./dist/img/img-65.png">
                <figure>
                    <img src="./dist/img/img-65.png" alt="">
                </figure>
            </div>
            <div class="child" data-src="./dist/img/img-66.png">
                <figure>
                    <img src="./dist/img/img-66.png" alt="">
                </figure>
            </div>
            <div class="child" data-src="./dist/img/img-67.png">
                <figure>
                    <img src="./dist/img/img-67.png" alt="">
                </figure>
            </div>
            <div class="child" data-src="./dist/img/img-68.png">
                <figure>
                    <img src="./dist/img/img-68.png" alt="">
                </figure>
            </div>
            <div class="child" data-src="./dist/img/img-69.png">
                <figure>
                    <img src="./dist/img/img-69.png" alt="">
                </figure>
            </div>
        </div>
    </div>
</section>

<script>
    var elements = document.getElementsByClassName('js-gallery');
      for (let item of elements) {
        lightGallery(item, {
        allowMediaOverlap: true,
        animateThumb: true,
        toggleThumb: true,
        share:false,
        plugins: [lgThumbnail, lgFullscreen],
        fullScreen: true,
        showZoomInOutIcons: false,
        actualSize: true,
      })
    }
</script>

<?php include "footer.php"; ?>  
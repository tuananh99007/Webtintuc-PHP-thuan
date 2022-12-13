<?php
include_once "app/views/layout/headerHome.php";
?>
<section class="">
    <div class="container">
        <div class="row">
            <div class="col tmp-w-big col-9">
                <section class="">
                    <section class="section_common mb-5 ">
                        <?php foreach ($posts as $post) : ?>
                            <div class="item-cate-news">
                                <div class="row">
                                    <div class="col-4"> <a class="image-news" href="index.php?page=home-detail&id=<?php echo $post->id ?>">
                                            <img loading="lazy" src="<?php echo "upload/" . $post->image ?>" alt="Nhiều đề xuất mới về việc CSGT xử lý vi phạm giao thông đường bộ"> </a> </div>
                                    <div class="col-8">
                                        <div class="box-navi-news not-before"> <span>Thứ 3, 18/10/2022 | 14:00</span> </div>
                                        <div class="box-content-item mt-2">
                                            <h3 class="tmp-title-large"> <a href="https://www.nguoiduatin.vn/nhieu-de-xuat-moi-ve-viec-csgt-xu-ly-vi-pham-giao-thong-duong-bo-a575352.html">
                                                    <?php echo $post->title ?> </a> </h3>
                                            <div class="tmp-txt-desc mt-2"> <?php echo $post->content ?> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </section>
                </section>

            </div>
            
        </div>
    </div>
</section>

<?php
include_once "app/views/layout/footerHome.php";
?>
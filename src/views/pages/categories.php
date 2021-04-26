<?=$render('header', [
    'categories' => $categories,
    'categorie_filter' => $categorie_filter
]);?>

<section class="mt-4 border-top border-secondary">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-3">
                <?=$render('sidebar', [
                    'brands' => $filters['brands'],
                    'stars' => $filters['stars'],
                    'sale' => $filters['sale'],
                    'options' => $filters['options'],
                ]);?>
            </div>
            <div class="col-sm-12 col-md-7 col-lg-9 mt-2">

                <h2 class="fs-4">
                    <?=$category_name;?>
                </h2>
                <div class="row">
                    <?php $a = 0; ?>
                    <?php foreach($list as $key => $product_item): ?>
                        <div class="col-lg-6 col-xl-4 col-md-12 col-sm-12">
                            <?=$render('product_item', $product_item);?>
                        </div>
                        <?php
                            if($a >= 2) {
                                $a = 0;
                                echo '</div><div class="row">';
                            } else {
                                $a++;
                            }
                        ?>
                    <?php endforeach; ?>
                </div>
                
                <ul class="pagination pagination-md mb-5">
                    <?php for($q = 1; $q <= $number_of_pages; $q++): ?>
                        <li class="page-item <?=($current_page==$q)?'active':'';?>">
                            <a class="page-link"
                                href="<?=$base;?>/categories/<?=$id_category;?>?page=<?=$q;?>">
                                <?=$q;?>
                            </a>
                        </li>
                    <?php endfor; ?>
                </ul>
                
            </div>
        </div>
    </div>
</section>

<?=$render('footer', ['maxslider' => $filters['maxslider']]);?>
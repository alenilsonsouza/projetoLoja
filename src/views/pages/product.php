<?=$render('header', [
    'categories' => !empty($categories) ? $categories : '',
]);?>

<section class="mt-5 pt-4 pb-4 mb-5 border-top border-bottom border-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="p-5 d-block">
                    <img src="<?=$base;?>/media/products/<?=$images[0]['url'];?>" class="img-fluid main-photo"/>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <?php foreach($images as $img): ?>
                        <div class="p-3">
                            <img src="<?=$base;?>/media/products/<?=$img['url'];?>" class="my-images"/>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                <div>
                    <h2 class="m-0"><?=$info['name'];?></h2>
                    <small class="d-block"><?=$info['brand_name'];?></small>

                    <?php if($info['rating'] != '0'): ?>
                        <div class="d-flex">
                            <?php for($q = 0; $q < intval($info['rating']); $q++): ?>
                                <i class="fas fa-star warning yellow"></i>
                            <?php endfor; ?>
                        </div>
                    <?php endif; ?>

                    <p class="mt-4"><?=$info['description'];?></p>
                    
                    <span class="text-secondary d-block">
                        De <?=number_format($info['price_from'], 2, ',', '.');?>
                    </span>
                    <span>
                        Por apenas <span class="fw-bold fs-5"><?=number_format($info['price'], 2, ',', '.');?></span>
                    </span>
                    
                    <form action="" method="post" class="mt-5 addtocart" id="addtocart">
                        <button data-action="decrease" class="border border-secondary">
                            -
                        </button>
                        <input type="text" name="qt" value="1" class="addtocart_qt" disabled/>
                        <button data-action="increase" class="border border-secondary">
                            +
                        </button>
                        <input type="submit" class="mybtn" value="<?=$this->lang->get("ADDCART");?>">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<?=$render('footer', [
    'maxslider' => $filters['maxslider'],
    'widget_sale' => $widget_sale,
    'widget_featured2' => $widget_featured2,
    'widget_toprated' => $widget_toprated
]);?>
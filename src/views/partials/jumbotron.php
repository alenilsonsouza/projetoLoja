<section class="jumbotron d-flex align-self-center border-bottom border-secondary">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 d-flex align-items-center">
                <a href="<?=$base;?>" class="fs-1 m-0 default-color fw-bold">Ecommerce</a>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="flex flex-column">
                    <div class="row">
                        <div class="col-md-8 col-lg-6 d-flex align-items-center">
                            <i class="fas fa-phone-alt fs-3 default-color m-1"></i>
                            (66) 95632-5814
                        </div>
                        <div class="col-md-8 col-lg-6 d-flex align-items-center justify-content-end">
                            <i class="fas fa-envelope fs-3 default-color m-1"></i>
                            <span class="fs-6">contato@meusite.com</span>
                        </div>
                    </div>
                    <div>
                        <form action="<?=$base;?>/busca" method="GET">
                            <div class="input-group border border-secondary rounded-1">
                                <input type="text" name="s" class="form-control p-2 border-0"/>                                
                                <select name="categories" class="p-2 no-outline border-0">
                                    <option value="">
                                        <?=$this->lang->get("ALLCATEGORIES");?>
                                    </option>
                                    <?php foreach($categories as $item): ?>                                    
                                        <option value="<?=$item['id'];?>">
                                            <?=$item['name'];?>
                                        </option>
                                    <?php endforeach; ?>

                                    <?php if(count($item['subs']) > 0): ?>
                                        <?=$render('search_subcategory', [
                                            'subs' => $item['subs'],
                                            'level' => 1
                                        ]);?>
                                    <?php endif; ?>
                                </select>
                                <input type="submit" class="btn bg-color-default p-2" value="Pesquisar"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 align-self-center d-flex justify-content-end">
                <div class="row">
                    <div class="col-3 align-self-center">
                        <i class="fas fa-shopping-cart fs-3 default-color"></i>
                    </div>
                    <div class="col-9">
                        <div>
                            <?=$this->lang->get("CART");?>
                        </div>
                        <strong>R$ 400,00</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
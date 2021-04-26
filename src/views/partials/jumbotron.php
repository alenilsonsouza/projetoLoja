<section class="jumbotron d-flex align-self-center border-bottom border-secondary">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 align-self-center">
                <a href="<?=$base;?>" class="fs-1 m-0 default-color fw-bold">Ecommerce</a>
            </div>
            <div class="col-sm-6 align-self-center">
                <div class="input-group">
                    <input type="text" class="form-control p-2" aria-label="Text input with dropdown button">
                    <button class="btn bg-color-default dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?=$this->lang->get("ALLCATEGORIES");?>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-start">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Action</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 align-self-center d-flex justify-content-end">
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
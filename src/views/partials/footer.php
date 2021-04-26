<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <h2 class="fs-5 mt-2">
                    <?=$this->lang->get("FEATUREDPRODUCTS");?>
                </h2>
                <div class="border border-secondary p-3">
                    ...
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <h2 class="fs-5 mt-2">
                    <?=$this->lang->get("ONSALEPRODUCTS");?>
                </h2>
                <div class="border border-secondary p-3">
                    ...
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <h2 class="fs-5 mt-2">
                    <?=$this->lang->get("FEATUREDPRODUCTS");?>
                </h2>
                <div class="border border-secondary p-3">
                    ...
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-8 align-self-center m-auto">
                <div class="input-group">
                    <div class="input-group input-group-lg mt-5">
                        <input
                            type="text"
                            class="form-control"
                            placeholder="<?=$this->lang->get("SUBSCRIBETEXT");?>"
                            aria-label="Recipient's username"
                            aria-describedby="button-addon2"
                        />
                        <button class="btn bg-color-default fs-6" type="button" id="button-addon2">
                            <?=$this->lang->get("SUBSCRIBEBUTTON");?>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-end mt-5 border-top border-secondary pt-3 pb-3">
            <div class="row">
                <div class="col-sm-6">
                    <h6 class="fs-6 m-0">
                        <?=$this->lang->get("ALLRIGHTRESERVED");?>
                    </h6>
                </div>
                <div class="col-sm-6 text-end">
                    <div class="row">
                        <div class="col-3">Card</div>
                        <div class="col-3">Card</div>
                        <div class="col-3">Card</div>
                        <div class="col-3">Card</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

    <script>
        let BASE_URL = '<?=$base;?>';
        let maxslider = '<?=$maxslider;?>';
        let slidervalues = [ 0, maxslider ];
    </script>
    <script src="<?=$base;?>/assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?=$base;?>/assets/js/jquery-ui.min.js"></script>
    <script src="<?=$base;?>/assets/js/bootstrap.bundle.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"></script>
    <script src="<?=$base;?>/assets/js/app.js"></script>
    </body>
</html>
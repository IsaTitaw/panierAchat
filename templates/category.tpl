<div class="row product_list ">
    {foreach $products as $product}
        <div class="col-md-3 product_card ">
            <div class="card">
                <a href="product/{$product->getId()}" rel="Vous avez choisi par catégorie...">
                    <img src="images/products/{$product->getId()}.jpg" class="card-img-top" alt="{$product->getName()}">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{$product->getName()}</h5>
                    <p class="card-text">{$product->getShortDescription()}</p>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="#" class="btn btn-primary add-to-cart mx-auto"><i class="fa fa-cart"></i> Add to cart</a>
                        </div>
                        <div class="col-sm-6 price">
                            {$product->getPrice()|number_format:2}€
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {/foreach}
</div>
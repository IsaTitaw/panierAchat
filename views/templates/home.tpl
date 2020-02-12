<meta charset="UTF-8">

<div class="container">
    <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="views/img/slider_1.JPG" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="views/img/slider_1.JPG" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="views/img/slider_1.JPG" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>



    <div class="row product_list ">
        {foreach $products as $product}
            <div class="col-md-3 product_card ">
                <div class="card">
                    <img src="images/products/{$product->getId()}.jpg" class="card-img-top" alt="{$product->getName()}">
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
</div>

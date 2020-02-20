<div class="container">
    <div class="row">
        <div class="col">
            <br>
            <h2 class="bd-title text-center">{$product->getName()}</h2>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="{$url}/images/products/{$product->getId()}.jpg" alt="{$product->getName()}" class="img-thumbnail">
        </div>
        <div class="col">
            <h6 class="bd-lead">{$product->getShortDescription()}</h6>
            <br>
            <p>{$product->getLongDescription()}</p>
            <br>
            <div class="col">
                <h6>Quantité restante : {$product->getStock()}</h6>
                <h4 class="text-right">Prix : {$product->getPrice()}€</h4>
            </div>
            <button type="button" class="btn btn-success">Add to cart</button>

{*            <div class="col">*}
{*                <a href="#" class="btn btn-danger add-to-cart text-right"><i class="fa fa-cart"></i><img src="../views/images/panier.png"></a>*}
{*                <br><br>*}
{*            </div>*}
        </div>

    </div>
</div>

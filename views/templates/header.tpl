<head>

    <meta charset="UTF-8">
    <title>{$title}</title>
    {if isset($assets) && is_array($assets)}
        {if !empty($assets['css'])}

            {foreach $assets['css'] as $css}

                <link rel="stylesheet" type="text/css" href="{$css}" media="screen">

            {/foreach}
        {/if}
    {/if}

{*    {if isset($bootstrap) && $bootstrap}*}
{*        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">*}
{*        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>*}
{*        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>*}
{*        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>*}
{*    {/if}*}

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="{$url}/views/img/logo.jpg" alt="zen attitude" width="50 px" height="50px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/projetWeb/marcWepika/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blabla</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>

            <form class="form-inline" action="/projetWeb/marcWepika/search" method="post">
                <input class="form-control mr-sm-2" type="search" placeholder="Nom du produit" aria-label="Search" name="productName">
                <button type="button" class="btn btn-success">Search</button>
            </form>



            <div class="btn-group ml-3">
                <button type="button" class="btn btn-success">Catégories</button>
                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="/projetWeb/marcWepika/category/animaux">Animaux</a></li>
                    <li><a href="/projetWeb/marcWepika/category/travail">Travail</a></li>
                    <li><a href="/projetWeb/marcWepika/category/maison">Maison</a></li>
                </ul>
            </div>


            {if isset($userEmail)}
                <span class="ml-5">Bonjour {$userEmail}</span> <a href="/projetWeb/marcWepika/logout" class="btn btn-danger ml-3">Logout</a>
            {else}
                <a href="/projetWeb/marcWepika/login" class="btn btn-success ml-5">Login</a>
            {/if}


            {*            <form class="form-inline" action="/projetWeb/marcWepika/category" method="post">*}
{*                <input class="form-control mr-sm-2" type="search" placeholder="Choose a category" aria-label="categoryName" name="categoryName">*}
{*                <button type="button" class="btn btn-success">Category</button>*}
            {*            </form>*}



        </div>
    </nav>



</head>




</div>
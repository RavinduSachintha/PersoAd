<!-- Header Area Start -->
<header class="header-area clearfix">
    <!-- Close Icon -->
    <div class="nav-close">
        <i class="fa fa-close" aria-hidden="true"></i>
    </div>
    <!-- Logo -->
    <div class="logo">
        <a href="/"><img src="img/core-img/logo.png" alt=""></a>
    </div>
    <!-- Amado Nav -->
    <nav class="amado-nav">
        <ul>
            @switch($navVal)

                @case(1)
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/shop">Shop</a></li>
                <li><a href="/product-details">Product</a></li>
                <li><a href="/cart">Cart</a></li>
                <li><a href="/checkout">Checkout</a></li>
                @break

                @case(2)
                <li><a href="/">Home</a></li>
                <li class="active"><a href="/shop">Shop</a></li>
                <li><a href="/product-details">Product</a></li>
                <li><a href="/cart">Cart</a></li>
                <li><a href="/checkout">Checkout</a></li>
                @break

                @case(3)
                <li><a href="/">Home</a></li>
                <li><a href="/shop">Shop</a></li>
                <li class="active"><a href="/product-details">Product</a></li>
                <li><a href="/cart">Cart</a></li>
                <li><a href="/checkout">Checkout</a></li>
                @break

                @case(4)
                <li><a href="/">Home</a></li>
                <li><a href="/shop">Shop</a></li>
                <li><a href="/product-details">Product</a></li>
                <li class="active"><a href="/cart">Cart</a></li>
                <li><a href="/checkout">Checkout</a></li>
                @break

                @case(5)
                <li><a href="/">Home</a></li>
                <li><a href="/shop">Shop</a></li>
                <li><a href="/product-details">Product</a></li>
                <li><a href="/cart">Cart</a></li>
                <li class="active"><a href="/checkout">Checkout</a></li>
                @break

                @case(6)
                <li><a href="/">Home</a></li>
                <li><a href="/shop">Shop</a></li>
                <li><a href="/product-details">Product</a></li>
                <li><a href="/cart">Cart</a></li>
                <li><a href="/checkout">Checkout</a></li>
                <li class="active"><a href="/adds_creating">Create</a></li>
                @break

            @endswitch
        </ul>
    </nav>

    <!-- Button Group -->
    <div class="amado-btn-group mt-30 mb-100">
        <a href="/login" class="btn amado-btn mb-15">User Account</a>
        <a href="/register" class="btn amado-btn active">Register Now</a>
    </div>

    <!-- Cart Menu -->
    <div class="cart-fav-search mb-100">
        <a href="/cart" class="cart-nav"><img src="img/core-img/cart.png" alt=""> Cart <span>(0)</span></a>
        <a href="#" class="fav-nav"><img src="img/core-img/favorites.png" alt=""> Favourite</a>
        <a href="#" class="search-nav"><img src="img/core-img/search.png" alt=""> Search</a>
    </div>

    <!-- Social Button -->
    <div class="social-info d-flex justify-content-between">
        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    </div>

</header>
<!-- Header Area End -->
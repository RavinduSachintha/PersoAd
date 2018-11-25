
<!-- Product Catagories Area Start -->
<div class="products-catagories-area clearfix">
    <div class="amado-pro-catagory clearfix">

        <?php $count1 = 0; ?>
                 @foreach($advertisements as $advertisements)
                    <?php if($count1 == 9) break; ?>
                        
                    <div class="single-products-catagory clearfix">
                        <a href="product-details/{{$advertisements->id}}">

                                <img src="http://127.0.0.1:8000/storage/Advertisements/{{$advertisements->photo}}" alt="">
                                <div class="hover-content">
                                    <div class="line"></div>
                                    <p>{{ $advertisements->title}}</p>
                                    <h4>{{ $advertisements->category}}</h4>
                                </div>
                        </a>
                    </div>
                    <?php $count1++; ?>
                @endforeach
    </div>
</div>
<!-- Product Catagories Area End -->
<h2 class="title text-center">Recommended items</h2>
<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="item active">
            @for($i = 0; $i < 3; $i++)
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{url('/product_details/'.$recommended_items[$i]->ID)}}">
                                    <img src="{{asset("/images/products/".$recommended_items[$i]->Picture)}}"
                                         alt="{{$recommended_items[$i]->Describe}}" style="width:255px;height:255px"></a>
                                <h2>{{$recommended_items[$i]->Price}} Đ</h2>
                                <p>
                                    <a href="{{url('/product_details/'.$recommended_items[$i]->ID)}}">{{$recommended_items[$i]->Name}}</a>
                                </p>
                                <form action="{{ url('/cart') }}" method="POST" id="add-to-cart-form-{{ $recommended_items[$i]->ID }}">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="id" value="{{ $recommended_items[$i]->ID }}">
                                    <input type="hidden" name="name" value="{{ $recommended_items[$i]->Name }}">
                                    <input type="hidden" name="price" value="{{ $recommended_items[$i]->Price }}">
                                </form>
                                <button type="submit" form="add-to-cart-form-{{ $recommended_items[$i]->ID }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>

        <div class="item">
            @for($i = 3; $i < 6; $i++)
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{url('/product_details/'.$recommended_items[$i]->ID)}}">
                                    <img src="{{asset("/images/products/".$recommended_items[$i]->Picture)}}"
                                         alt="{{$recommended_items[$i]->Describe}}" style="width:255px;height:255px"></a>
                                <h2>{{$recommended_items[$i]->Price}} Đ</h2>
                                <p>
                                    <a href="{{url('/product_details/'.$recommended_items[$i]->ID)}}">{{$recommended_items[$i]->Name}}</a>
                                </p>
                                <form action="{{ url('/cart') }}" method="POST" id="add-to-cart-form-{{ $recommended_items[$i]->ID }}">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="id" value="{{ $recommended_items[$i]->ID }}">
                                    <input type="hidden" name="name" value="{{ $recommended_items[$i]->Name }}">
                                    <input type="hidden" name="price" value="{{ $recommended_items[$i]->Price }}">
                                </form>
                                <button type="submit" form="add-to-cart-form-{{ $recommended_items[$i]->ID }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
        <i class="fa fa-angle-left"></i>
    </a>
    <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
        <i class="fa fa-angle-right"></i>
    </a>
</div>
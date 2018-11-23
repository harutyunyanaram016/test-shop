
<div class="block-subtitle">
    <div class="top-subtotal">@if($cart) {{$cart->totalQty}} @else 0 @endif
        items,
        <span class="price">
            <span class="woocommerce-Price-amount amount">
                <span class="woocommerce-Price-currencySymbol">$</span>{{$cart->totalPrice}}</span>
        </span>
    </div>
</div>
<ul id="cart-sidebar" class="mini-products-list">
    @foreach($cart->items as $item)
    <li class="item odd " id="item_{{ $item['item']->id }}">
        <div class="item-inner">
            <a class="product-image" href="{{route('products.details',$item['item']->id)}}"  title="{{route('products.details',$item['item']->name}}">
                <img width="60" height="60"  src="{{ url('/') }}{{ $item['item']->icon->file }}" class="attachment-60x60 size-60x60 wp-post-image" alt="" > </a>


            <div class="product-details">
                <div class="access">
                    <a href="" title="Remove This Item" class="btn-remove1">Remove</a>
                    <a class="btn-edit" title="Edit item" href=""><i class="icon-pencil"></i><span class="hidden">Edit item</span></a>
                </div>
                <strong>1                  </strong> x <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>18.00</span></span>
                <p class="product-name"><a href="{{route('products.details',$item['item']->id)}}" title="{{route('products.details',$item['item']->name}}">{{route('products.details',$item['item']->name}}</a> </p>
            </div>
        </div>

    </li>
    @endforeach
</ul>
<div class="actions">
    <button class="btn-checkout" type="button"><span>Checkout</span> </button>
</div>

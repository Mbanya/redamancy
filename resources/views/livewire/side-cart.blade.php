<div>
    <nav id="side-cart" class="side-panel">
        <header>
            <h6>Shopping cart</h6>
            <a href="#" class="thb-close" title="Close">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="12" height="12" viewBox="1.1 1.1 12 12" enable-background="new 1.1 1.1 12 12" xml:space="preserve">
                        <path d="M8.3 7.1l4.6-4.6c0.3-0.3 0.3-0.8 0-1.2 -0.3-0.3-0.8-0.3-1.2 0L7.1 5.9 2.5 1.3c-0.3-0.3-0.8-0.3-1.2 0 -0.3 0.3-0.3 0.8 0 1.2L5.9 7.1l-4.6 4.6c-0.3 0.3-0.3 0.8 0 1.2s0.8 0.3 1.2 0L7.1 8.3l4.6 4.6c0.3 0.3 0.8 0.3 1.2 0 0.3-0.3 0.3-0.8 0-1.2L8.3 7.1z"></path>
            </svg>
            </a>
        </header>
        <div class="side-panel-content">
            <div class="widget woocommerce widget_shopping_cart">
                <div class="widget_shopping_cart_content">

                    <ul class="woocommerce-mini-cart cart_list product_list_widget ps ps--theme_default"
                        data-ps-id="62fc197c-89e2-5811-c709-9973ba05b03a">
                        @foreach($items as $item)
                        <li class="woocommerce-mini-cart-item mini_cart_item"
                            style="opacity: 1; transform: translate(0px, 0px);">

                            <a href="#" wire:click.prevent="removeCart('{{$item['id']}}')"
                               class="remove remove_from_cart_button" aria-label="Remove this item">×</a>
                            <a href="{{$item['attributes']['image']}}">
                                <img width="840" height="1335"
                                     src="{{$item['attributes']['image']  }}"
                                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy"
                                     srcset="{{$item['attributes']['image']  }} 840w,
                                         {{$item['attributes']['image'] }} 416w,
                                         {{$item['attributes']['image'] }} 189w,
                                         {{$item['attributes']['image'] }} 644w,
                                         {{$item['attributes']['image'] }} 768w"
                                     sizes="(max-width: 840px) 100vw, 840px">{{$item['name']}}
                            </a>
                            <span class="quantity">{{$item['quantity']}} ×
                                    <span class="woocommerce-Price-amount amount">
                                        <bdi>{{$item['price']}}&nbsp;<span class="woocommerce-Price-currencySymbol">$</span></bdi>
                                    </span>
                                </span>
                        </li>
                        @endforeach
                        <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                            <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;">

                            </div>
                        </div>
                        <div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;">
                            <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;">

                            </div>
                        </div>
                    </ul>

                    <p class="woocommerce-mini-cart__total total">
                        <strong>Subtotal:</strong>
                        <span class="woocommerce-Price-amount amount">
                                <bdi>{{Cart::getSubTotal()}}&nbsp;<span class="woocommerce-Price-currencySymbol">$</span></bdi>
                            </span>
                    </p>


                    <p class="woocommerce-mini-cart__buttons buttons">
                        <a href="{{route('cart.list')}}" class="button wc-forward">View cart</a>
                        <a href="{{route('checkout')}}" class="button checkout wc-forward">Checkout</a>
                    </p>



                </div>
            </div>
        </div>
    </nav>

</div>

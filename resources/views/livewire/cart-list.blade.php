{{--<article  class="page type-page status-publish hentry" style="margin: 100px 0;">--}}

{{--    <div class="entry-content">--}}
{{--        <div class="woocommerce">--}}
{{--            <div class="woocommerce-notices-wrapper"></div>--}}
{{--            @if ($message = Session::get('success'))--}}
{{--                <div class="woocommerce-notices-wrapper">--}}
{{--                    <div class="woocommerce-message" role="alert">--}}
{{--                        {{ $message }}--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endif--}}

{{--        </div>--}}
{{--        @if(Cart::getContent()->isNotEmpty())--}}
{{--            <form class="woocommerce-cart-form" method="post">--}}

{{--                <table class="shop_table shop_table_responsive cart col-md-12 woocommerce-cart-form__contents">--}}
{{--                    <thead>--}}
{{--                    <tr>--}}
{{--                        <th class="product-remove">&nbsp;</th>--}}
{{--                        <th class="product-thumbnail">&nbsp;</th>--}}
{{--                        <th class="product-name">Product</th>--}}
{{--                        <th class="product-price">Price</th>--}}
{{--                        <th class="product-quantity">Quantity</th>--}}
{{--                        <th class="product-subtotal">Total</th>--}}
{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    @foreach($cartItems as $item)--}}

{{--                        <tr class="woocommerce-cart-form__cart-item cart_item">--}}

{{--                            <td class="product-remove">--}}
{{--                                <a href="#"--}}
{{--                                   class="remove" aria-label="Remove this item"--}}
{{--                                   wire:click.prevent="removeCart({{$item['id']}})">×</a>--}}
{{--                            </td>--}}


{{--                            <td class="product-thumbnail">--}}
{{--                                <a href="{{$item['attributes']['image']}}">--}}
{{--                                    <img width="150" height="1335" src="{{$item['attributes']['image']}}"--}}
{{--                                         class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""--}}
{{--                                         loading="lazy"--}}
{{--                                         srcset="{{$item['attributes']['image']}} 840w,--}}
{{--                                              {{$item['attributes']['image']}} 416w,--}}
{{--                                              {{$item['attributes']['image']}} 189w,--}}
{{--                                              {{$item['attributes']['image']}} 644w,--}}
{{--                                              {{$item['attributes']['image']}} 768w"--}}
{{--                                         sizes="(max-width: 840px) 100vw, 840px">--}}
{{--                                </a>--}}
{{--                            </td>--}}


{{--                            <td class="product-name" data-title="Product">--}}
{{--                                <a href="{{$item['attributes']['image']}}">{{$item['name']}}</a>--}}
{{--                            </td>--}}

{{--                            <td class="product-price" data-title="Price">--}}
{{--                                <span class="woocommerce-Price-amount amount">--}}
{{--                                    <bdi>{{$item['price']}}&nbsp;<span--}}
{{--                                            class="woocommerce-Price-currencySymbol">$</span></bdi>--}}
{{--                                </span>--}}
{{--                            </td>--}}

{{--                            <td class="product-quantity" data-title="Quantity">--}}
{{--                                <select name="quantity" id="qty" class="form-control">--}}
{{--                                    <option value="1">1</option>--}}
{{--                                    <option value="2">2</option>--}}
{{--                                    <option value="3">3</option>--}}
{{--                                    <option value="4">4</option>--}}
{{--                                    <option value="5">5</option>--}}
{{--                                </select>--}}
{{--                            </td>--}}

{{--                            <td class="product-subtotal" data-title="Subtotal">--}}
{{--                                <span class="woocommerce-Price-amount amount">--}}
{{--                                    <bdi>{{Cart::getTotal()}}&nbsp;--}}
{{--                                        <span class="woocommerce-Price-currencySymbol">$</span>--}}
{{--                                    </bdi>--}}
{{--                                </span>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}

{{--                    </tbody>--}}
{{--                </table>--}}

{{--                <div class="cart-collaterals col-md-12" style="margin: 50px 0">--}}
{{--                    <div class="cross-sells">--}}
{{--                        <h2>You may be interested in…</h2>--}}

{{--                        <div class="row">--}}
{{--                            <ul class="products">--}}


{{--                                <li class="col-xs-12 col-sm-6 col-md-12 member-discount discount-restricted product type-product post-684 status-publish first instock product_cat-white-wines has-post-thumbnail shipping-taxable purchasable product-type-simple">--}}

{{--                                    <a href="https://okthemes.com/villenoir/product/villenoir-chardonnay/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><h2 class="woocommerce-loop-product__title">Villenoir Chardonnay</h2><div class="gg-product-image-wrapper"><img width="840" height="1335" src="https://okthemes.com/villenoir/wp-content/uploads/2016/03/White-Chardonnay-w-cup-v2.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="https://okthemes.com/villenoir/wp-content/uploads/2016/03/White-Chardonnay-w-cup-v2.png 840w, https://okthemes.com/villenoir/wp-content/uploads/2016/03/White-Chardonnay-w-cup-v2-416x661.png 416w, https://okthemes.com/villenoir/wp-content/uploads/2016/03/White-Chardonnay-w-cup-v2-189x300.png 189w, https://okthemes.com/villenoir/wp-content/uploads/2016/03/White-Chardonnay-w-cup-v2-644x1024.png 644w, https://okthemes.com/villenoir/wp-content/uploads/2016/03/White-Chardonnay-w-cup-v2-768x1221.png 768w" sizes="(max-width: 840px) 100vw, 840px"></div></a><div class="gg-product-meta-wrapper">--}}

{{--                                        <dl>--}}
{{--                                            <dt>--}}
{{--                                                Year    </dt>--}}
{{--                                            <dd>--}}
{{--                                                <span class="year">2015</span>--}}
{{--                                            </dd>--}}

{{--                                            <dt>--}}
{{--                                                Price    </dt>--}}
{{--                                            <dd>--}}
{{--                                                <span class="price"><span class="woocommerce-Price-amount amount"><bdi>236,00&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></bdi></span></span>--}}
{{--                                            </dd>--}}
{{--                                        </dl>--}}
{{--                                        <a href="?add-to-cart=684" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="684" data-product_sku="" aria-label="Add “Villenoir Chardonnay” to your cart" rel="nofollow">Add to cart</a></div>--}}
{{--                                </li>--}}



{{--                                <li class="col-xs-12 col-sm-6 col-md-12 membership-content purchase-restricted member-discount discount-restricted product type-product post-688 status-publish first instock product_cat-white-wines has-post-thumbnail shipping-taxable product-type-simple">--}}

{{--                                    <a href="https://okthemes.com/villenoir/product/villenoir-sauvignon-blank/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><h2 class="woocommerce-loop-product__title">Villenoir Sauvignon Blank</h2><div class="gg-product-image-wrapper"><img width="840" height="1335" src="https://okthemes.com/villenoir/wp-content/uploads/2016/03/White-Sauvignon-Blanc-w-cup-v2.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="https://okthemes.com/villenoir/wp-content/uploads/2016/03/White-Sauvignon-Blanc-w-cup-v2.png 840w, https://okthemes.com/villenoir/wp-content/uploads/2016/03/White-Sauvignon-Blanc-w-cup-v2-416x661.png 416w, https://okthemes.com/villenoir/wp-content/uploads/2016/03/White-Sauvignon-Blanc-w-cup-v2-189x300.png 189w, https://okthemes.com/villenoir/wp-content/uploads/2016/03/White-Sauvignon-Blanc-w-cup-v2-644x1024.png 644w, https://okthemes.com/villenoir/wp-content/uploads/2016/03/White-Sauvignon-Blanc-w-cup-v2-768x1221.png 768w" sizes="(max-width: 840px) 100vw, 840px"></div></a><div class="gg-product-meta-wrapper">--}}

{{--                                        <dl>--}}
{{--                                            <dt>--}}
{{--                                                Year    </dt>--}}
{{--                                            <dd>--}}
{{--                                                <span class="year">2011</span>--}}
{{--                                            </dd>--}}

{{--                                            <dt>--}}
{{--                                                Price    </dt>--}}
{{--                                            <dd>--}}
{{--                                                <span class="price"><span class="woocommerce-Price-amount amount"><bdi>693,00&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></bdi></span></span>--}}
{{--                                            </dd>--}}
{{--                                        </dl>--}}
{{--                                        <a href="https://okthemes.com/villenoir/product/villenoir-sauvignon-blank/" data-quantity="1" class="button product_type_simple" data-product_id="688" data-product_sku="" aria-label="Read more about “Villenoir Sauvignon Blank”" rel="nofollow">More Info</a></div>--}}
{{--                                </li>--}}


{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="cart_totals ">--}}
{{--                        <h2>Cart totals</h2>--}}
{{--                        <table class="shop_table shop_table_responsive">--}}
{{--                            <tbody>--}}
{{--                            <tr class="cart-subtotal">--}}
{{--                                <th>Subtotal</th>--}}
{{--                                <td data-title="Subtotal">--}}
{{--                                <span class="woocommerce-Price-amount amount">--}}
{{--                                    <bdi>--}}
{{--                                        {{Cart::getSubTotal()}}&nbsp;--}}
{{--                                        <span class="woocommerce-Price-currencySymbol">$</span>--}}
{{--                                    </bdi>--}}
{{--                                </span>--}}
{{--                                </td>--}}
{{--                            </tr>--}}

{{--                            <tr class="order-total">--}}
{{--                                <th>Total</th>--}}
{{--                                <td data-title="Total">--}}
{{--                                    <strong>--}}
{{--                                        <span class="woocommerce-Price-amount amount">--}}
{{--                                            <bdi>{{Cart::getTotal()}}--}}
{{--                                                <span class="woocommerce-Price-currencySymbol">$</span>--}}
{{--                                            </bdi>--}}
{{--                                        </span>--}}
{{--                                    </strong>--}}
{{--                                </td>--}}
{{--                            </tr>--}}


{{--                            </tbody>--}}


{{--                        </table>--}}

{{--                    </div>--}}
{{--                    <div class="wc-update-cart">--}}
{{--                        <button type="submit" class="button" name="update_cart" value="Update cart" disabled="" aria-disabled="true">Update cart</button>--}}
{{--                    </div>--}}
{{--                    <div class="wc-proceed-to-checkout">--}}
{{--                        <a href="{{route('checkout')}}" class="checkout-button button alt wc-forward">--}}
{{--                            Proceed to checkout--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </form>--}}
{{--        @else--}}
{{--            <p class="cart-empty woocommerce-info">Your cart is currently empty.</p>--}}

{{--            <p class="return-to-shop">--}}
{{--                <a class="button wc-backward" href="{{route('shop.index')}}">--}}
{{--                    Return to shop--}}
{{--                </a>--}}
{{--            </p>--}}
{{--        @endif--}}


{{--    </div>--}}
{{--    <!-- .entry-content -->--}}
{{--</article><!-- #post -->--}}

<article id="post-6" class="post-6 page type-page status-publish hentry" style="margin: 100px 0;">
    <div class="entry-content">
        <div class="woocommerce"><div class="woocommerce-notices-wrapper"></div>
            @if(Cart::getContent()->isNotEmpty())
            <form class="woocommerce-cart-form" action="" method="post">

                <table class="shop_table shop_table_responsive cart col-md-12 woocommerce-cart-form__contents" cellspacing="0">
                    <thead>
                    <tr>
                        <th class="product-remove">&nbsp;</th>
                        <th class="product-thumbnail">&nbsp;</th>
                        <th class="product-name">Product</th>
                        <th class="product-price">Price</th>
                        <th class="product-quantity">Quantity</th>
                        <th class="product-subtotal">Total</th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach($cartItems as $item)
                        <tr class="woocommerce-cart-form__cart-item cart_item">

                        <td class="product-remove">
                            <a href="" class="remove" wire:click.prevent="removeCart({{$item['id']}})" aria-label="Remove this item" data-product_id="645" data-product_sku="">×</a>
                        </td>

                        <td class="product-thumbnail">
                            <a href="{{$item['attributes']['image']}}">
                                <img width="840" height="1335" src="{{$item['attributes']['image']}}"
                                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy">
                            </a>
                        </td>

                        <td class="product-name" data-title="Product">
                            <a href="{{route('shop.show',$item['name'])}}">{{$item['name']}}</a>
                        </td>

                        <td class="product-price" data-title="Price">
                            <span class="woocommerce-Price-amount amount"><bdi>{{$item['price']}}&nbsp;<span class="woocommerce-Price-currencySymbol">ZAR </span></bdi></span>
                        </td>

                        <td class="product-quantity" data-title="Quantity">
                            <div class="quantity buttons_added"><input type="button" value="-" class="minus">
                                <label class="screen-reader-text" for="quantity_61efa47ad8b6c">{{$item['name']}} quantity</label>
                                <input type="number" id="quantity_61efa47ad8b6c" class="input-text qty text" step="1" min="0" max="" name="cart"
                                       value="{{$item['quantity']}}" title="Qty" size="4" placeholder="" inputmode="numeric" autocomplete="off">
                                <input type="button" value="+" class="plus">
                            </div>
                        </td>

                        <td class="product-subtotal" data-title="Subtotal">
                            <span class="woocommerce-Price-amount amount"><bdi>{{number_format(Cart::get($item['id'])->getPriceSum())}}&nbsp;<span class="woocommerce-Price-currencySymbol">ZAR </span></bdi></span>
                        </td>
                    </tr>
                        @endforeach



                    <tr>
                        <td colspan="6" class="actions">

                            <div class="coupon">
                                <label for="coupon_code">Coupon:</label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code"> <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon</button>
                            </div>



                            <input type="hidden" id="_wpnonce" name="_wpnonce" value="843f7b70c9"><input type="hidden" name="_wp_http_referer" value="/villenoir/cart/">
                        </td>
                    </tr>

                    </tbody>
                </table>


                <div class="cart-collaterals col-md-12">

                    <div class="cart_totals ">
                        <h2>Cart totals</h2>

                        <table cellspacing="0" class="shop_table shop_table_responsive">

                            <tbody><tr class="cart-subtotal">
                                <th>Subtotal</th>
                                <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><bdi>{{number_format(Cart::getSubTotal())}}&nbsp;<span class="woocommerce-Price-currencySymbol">ZAR </span></bdi></span></td>
                            </tr>

                            <tr class="order-total">
                                <th>Total</th>
                                <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><bdi>{{number_format(Cart::getTotal())}}&nbsp;<span class="woocommerce-Price-currencySymbol">ZAR </span></bdi></span></strong> </td>
                            </tr>


                            </tbody>
                        </table>

                        <div class="wc-update-cart">
                            <button type="submit" class="button" name="update_cart" value="Update cart" disabled="" aria-disabled="true">Update cart</button>

                        </div>

                        <div class="wc-proceed-to-checkout">

                            <a href="{{route('checkout')}}" class="checkout-button button alt wc-forward">
                                Proceed to checkout</a>
                        </div>


                    </div>

                </div>

            </form>

            @else
                <p class="cart-empty woocommerce-info">Your cart is currently empty.</p>

                            <p class="return-to-shop">
                                <a class="button wc-backward" href="{{route('shop.index')}}">
                                    Return to shop
                                </a>
                            </p>
            @endif

        </div>
    </div><!-- .entry-content -->


</article>

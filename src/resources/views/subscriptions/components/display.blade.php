<div class="row product-list center-block">
   @foreach($subscriptions as $subscription)

	<div class="col-md-4 col-sm-6 product-item">
        <div class="product-container">

            <div class="row">
                <div class="col-md-12">
                    <a href="#" class="product-image"></a>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-8">
                    <h2><a href="#">{{ $subscription->name }}</a></h2></div>
                <div class="col-xs-4"><a href="#" class="small-text">{{ $subscription->label }} </a></div>
            </div>

            {{-- <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a href="#" class="small-text">82 reviews</a></div> --}}

            <div class="row">
                <div class="col-xs-12">
                    <p class="product-description">{{ $subscription->details }}</p>
                    <div class="row">
                        <div class="col-xs-6">
                            <a class="btn btn-default" href="{{ route('subscriptions.subscribe', [ 'id' => $subscription->id ]) }}">Subscribe Now!</a>
                        </div>
                        <div class="col-xs-6">
                            <p class="product-price">{{ config('subscriptions.currency') }} {{ $subscription->price }}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

   @endforeach

</div>
<style type="text/css">
	.product-item {
	  padding:10px;
	}

	.product-item .product-container {
	  text-align:left;
	  font:normal 14px sans-serif;
	  background-color:#ffffff;
	  border:1px solid #dbe3e7;
	  border-radius:3px;
	  box-shadow:1px 3px 1px rgba(0, 0, 0, 0.08);
	  padding:25px;
	}

	.product-item a.product-image {
	  display:block;
	  text-align:center;
	  /*box-shadow:0 0 20px 8px #f3f3f3 inset;*/
	  background-color: #d1cfd1;
	  width:100%;
	  margin-bottom:25px;
	  padding:20px 0;
	  box-sizing:border-box;
	  min-height: 200px;
	}

	.product-item a.product-image img {
	  height:130px;
	}

	.product-item h2 {
	  font-size:18px;
	  white-space:nowrap;
	  overflow:hidden;
	  text-overflow:ellipsis;
	  max-width:200px;
	  font-weight:800;
	}

	.product-item h2 a {
	  text-decoration:none;
	  color:#2b2b2b;
	}

	.product-item a.small-text {
	  color:#808080;
	  text-decoration:none;
	  margin-top:20px;
	  margin-bottom:10px;
	  display:block;
	  text-align:right;
	  font-size:12px;
	}

	.product-item .product-rating {
	  color:#f09911;
	  font-size:14px;
	}

	.product-item .product-rating a.small-text {
	  text-align:left;
	  margin:0 0 0 10px;
	  display:inline-block;
	}

	.product-item p.product-description {
	  margin-top:20px;
	  color:#5d5d5d;
	  line-height:1.45;
	  white-space:normal;
	  margin-bottom:20px;
	}

	.product-item button {
	  border-radius:2px;
	  background:#87bae1;
	  box-shadow:0 1px 1px rgba(0, 0, 0, 0.12);
	  border:0;
	  color:#ffffff;
	  font-weight:bold;
	  font-size:13px;
	  padding:8px 20px;
	}

	.product-item button:active {
	  background:#87bae1;
	  color:#fff;
	  border:0;
	}

	.product-item button:focus {
	  background:#87bae1;
	  outline:none;
	  color:#fff;
	}

	.product-item button:hover {
	  background:#66ABE0;
	  color:#fff;
	}

	.product-item button:focus:active {
	  background:#87bae1;
	  outline:none;
	  color:#fff;
	}

	.product-item .product-price {
	  color:#4e4e4e;
	  font-weight:bold;
	  font-size:20px;
	  padding-top:5px;
	  text-align:right;
	}
</style>

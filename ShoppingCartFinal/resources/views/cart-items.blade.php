@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Cart 
                <span class="badge badge-danger">

                	<?php $cart_price = 0; ?>
                	@foreach ($carts as $cart)
                		<?php 
                			$prices = $cart -> product_price * $cart -> product_quantity;
							$cart_price += $prices;
                		?>
                	@endforeach
                	{{ $cart_price }}
                </span></div>
					<div class="panel-body">
						<table class="table table-bordered">
							<thead>
								<tr class="danger">
									<td> Product ID </td>
									<td> Product Image </td>
									<td> Product Name </td>
									<td> Product Price </td>
									<td> Product Quantity </td>
									<td> Amount </td>
									<td> &nbsp; </td>
								</tr>
							</thead>
							<tbody>
								@foreach($carts as $cart)
								<tr class="info">
									<td> {{ $cart -> product_id }} </td>
									<td> <img src="/img/{{ $cart -> image_path }}" width="100px" height="100px"> </td>
									<td> {{ $cart -> product_name }} </td>
									<td> {{ $cart -> product_price }} </td>
									<td> {{ $cart -> product_quantity }} </td>
									<td> <?php $total_amount = 0;
											$amount = $cart -> product_price * $cart -> product_quantity;
											$total_amount += $amount;
											echo $total_amount;
										?>
									</td>
									<td>
										<form action="/home/cart/update" method="post">
											{{ csrf_field() }}
											<input type="text" name="product_quantity" value="{{ $cart -> product_quantity }}">
											<input type="hidden" name="product_id" value="{{ $cart -> product_id }}">
											<input type="hidden" name="customer_id" value="{{ Auth::user() -> id }}">
											<button type="submit" class="btn btn-warning"> Update Quantity </button>
										</form>
										<form action="/home/cart/delete" method="post">
											{{ csrf_field() }}
											<input type="hidden" name="product_id" value="{{ $cart -> product_id }}">
											<input type="hidden" name="customer_id" value="{{ Auth::user() -> id }}">
											<button type="submit" class="btn btn-danger"> Delete Item </button>
										</form>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
	                    <form action="/home" method="get">
	                    	<button class="btn btn-success"> Show Products </button>
	                    </form>
	                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

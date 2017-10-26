@extends('layouts.app')

@section('content')



<section id="hero" class="section ">
  <div class="container">
    <div class="row">
      <div class="col-md-7 col-sm-6 hero">
        <div class="hero-content">
          <h1>MORDERN, MINIMAL & INSPIRING.</h1>
        </div>
        <!-- hero --> 
      </div>
      <div class="col-md-5 col-sm-6 hero">
        <div class="hero-content">
          <h1>If you want to be original. Be ready to be copied</h1>  
          <p> <br> Bringing HAPPINESS through trendy and classy yet affordable apparels!</p>
          <br>
        </div>
        <!-- hero --> 
      </div>
    </div>
  </div>
</section>









<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Products</div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td> Product ID </td>
                                <td> Product Image </td>
                                <td> Product Name </td>
                                <td> Product Price </td>
                                <td> &nbsp; </td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td> {{ $product -> id }} </td>
                                <td> <img src="/img/{{ $product -> image_path }}" width="100px" height="100px"> </td>
                                <td> {{ $product -> product_name }} </td>
                                <td> {{ $product -> product_price }} </td>
                                <td> 
                                    <form action="/home/add" method="post">
                                    {{ csrf_field() }}
                                        <input type="hidden" name="customer_id" value="{{ Auth::user()->id }}">
                                        
                                        <input type="hidden" name="product_id" value="{{ $product -> id }}">
                                        <input type="hidden" name="product_name" value="{{ $product -> product_name }}">
                                        <input type="hidden" name="product_price" value="{{ $product -> product_price }}">
                                        <input type="hidden" name="image_path" value="{{ $product -> image_path }}">
                                        <button type="submit" class="btn btn-warning"> Add to Cart </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>

                    <form action="/home/cart" method="get">
                        <button class="btn btn-success"> Show Cart </button>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<footer class="footer">
  <div class="container">
    <div class="col-md-6 left">
      <h4>For inquiries:</h4>
      <p> Call: 612.269.8419 OR Email : <a href="mailto:bescloset@gmail.com"> bescloset@gmail.com </a></p>
    </div>
    <div class="col-md-6 right">
      <p>© 2017 All rights reserved. All Rights Reserved<br>
        Made</i> by Danalene</a></p>
    </div>
  </div>
</footer>

@endsection



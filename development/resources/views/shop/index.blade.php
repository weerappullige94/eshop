@extends('layouts.master')

@section('title')
Laravel eShop
@endsection

@section('content')
	@foreach($products->Chunk(3) as $productChunk)
		<div class="row">
			@foreach($productChunk as $product)
				<div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <img src="{{ $product->imagePath }}" alt="...">
				      <div class="caption">
				        <h3>{{$product->title}}</h3>
				        <div class="pull-left price">{{$product->price}}</div>
				        <div class="clearfix">
				        	<a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
				        </div>
				      </div>
				    </div>
				</div>
			</div>
			
			@endforeach
		  </div>
	@endforeach



@endsection
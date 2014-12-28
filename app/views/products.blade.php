@foreach($products as $product)
	<h3>{{$product->title}}</h3>
@endforeach

{{$products->links()}}
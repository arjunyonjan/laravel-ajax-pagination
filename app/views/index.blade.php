<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::script('js/jquery.js') }}
	{{ HTML::script('js/bootstrap.js') }}
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="content">
				@foreach($products as $product)
					<h3>{{$product->title}}</h3>
				@endforeach

				{{$products->links()}}
			</div>
		</div><!-- end .row -->
	</div><!-- end.container -->


	<script>
		/*==================== PAGINATION =========================*/

		$(window).on('hashchange',function(){
			page = window.location.hash.replace('#','');
			getProducts(page);
		});

		$(document).on('click','.pagination a', function(e){
			e.preventDefault();
			var page = $(this).attr('href').split('page=')[1];
			// getProducts(page);
			location.hash = page;
		});

		function getProducts(page){

			$.ajax({
				url: '/ajax/product?page=' + page
			}).done(function(data){
				$('.content').html(data);
			});
		}

	</script>
</body>
</html>
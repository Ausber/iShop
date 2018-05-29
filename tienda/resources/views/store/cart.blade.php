@extends('store.template')

@section('content')

	<div class="table-cart text-center">
		@if(count($cart))
		<p><a class="btn btn-danger" href="{{route('cart-trash')}}">Vaciar Carrito <i class="fa fa-trash"></i></a></p>
			<div class="container">
				<div class="page-header">
					<h1><i class="fa fa-shopping-cart"></i>Carrito de Compras</h1>
				</div>

				<div class="table-responsive">
					<table class="table table-striped table-hover table-bordered">
						<thead>
							<tr>
								<th>Imagen</th>
								<th>Producto</th>
								<th>Precio</th>
								<th>Cantidad</th>
								<th>Subtotal</th>
								<th>Quitar</th>
							</tr>
						</thead>
						<tbody>
							@foreach($cart as $item)
								<tr>
									<td><img src="{{$item->image}}"></td>
									<td>{{$item->name}}</td>
									<td>{{number_format($item->price,2)}}</td>
									<td>
										<input 
											type="number"
											min="1"
											max="100"
											value="{{ $item->quantity }}"
											id="product_{{ $item->id }}"
										>
										<a 
											href="#" 
											class="btn btn-warning btn-update-item"
											data-href="{{ route('cart-update', $item->slug) }}"
											data-id = "{{ $item->id }}"
										>
											<i class="fa fa-refresh"></i>
										</a>
									</td>
									<td>{{number_format($item->price * $item->quantity,2)}}</td>
									<td><a class="btn btn-danger" href="{{route('cart-delete', $item->slug)}}"><i class="fa fa-remove"></i></a></td>
								</tr>
							@endforeach	
						</tbody>
					</table><hr>

					<h3><span class="label label-success">
						Total: ${{number_format($total,2)}}
					</span></h3>
				</div>
				@else
					<h3><span class="label label-warning">No hay productos en el carrito.</span></h3>
				@endif
				<hr>
				<p>
					<a class="btn btn-primary" href="{{route('home')}}"><i class="fa fa-chevron-circle-left"></i> Seguir Comprando</a>

					<a class="btn btn-primary" href="{{route('order-detail')}}">Continuar <i class="fa fa-chevron-circle-right"></i></a>
				</p>
			</div>			
	</div>
@stop
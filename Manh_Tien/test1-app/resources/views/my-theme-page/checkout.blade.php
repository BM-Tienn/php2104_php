<x-theme-lay-out>
    
	<x-theme-bread-crumbs>
	    <li class="active slot">Checkout Page</li>
	</x-theme-bread-crumbs>

    <!-- checkout -->
	<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
		<div class="col-xl-7 ftco-animate">
			<form action="#" class="billing-form">
			<h3 class="mb-4 billing-heading">Billing Details</h3>
			<div class="row align-items-end">
				<div class="col-md-6">
				<div class="form-group">
					<label for="firstname">Firt Name</label>
					<input type="text" class="form-control" placeholder="">
				</div>
				</div>
				<div class="col-md-6">
				<div class="form-group">
					<label for="lastname">Last Name</label>
					<input type="text" class="form-control" placeholder="">
				</div>
				</div>
				<div class="w-100"></div>
				<div class="col-md-12">
				<div class="form-group">
					<label for="country">State / Country</label>
					<input type="text" class="form-control" placeholder="State / Country">
				</div>
				</div>
				<div class="w-100"></div>
				<div class="col-md-6">
				<div class="form-group">
					<label for="streetaddress">Street Address</label>
					<input type="text" class="form-control" placeholder="House number and street name">
				</div>
				</div>
				<div class="w-100"></div>
				<div class="col-md-6">
				<div class="form-group">
					<label for="towncity">Town / City</label>
					<input type="text" class="form-control" placeholder="">
				</div>
				</div>
				<div class="col-md-6">
				<div class="form-group">
					<label for="postcodezip">Postcode / ZIP *</label>
					<input type="text" class="form-control" placeholder="">
				</div>
				</div>
				<div class="w-100"></div>
				<div class="col-md-6">
				<div class="form-group">
					<label for="phone">Phone</label>
					<input type="text" class="form-control" placeholder="">
				</div>
				</div>
				<div class="col-md-6">
				<div class="form-group">
					<label for="emailaddress">Email Address</label>
					<input type="text" class="form-control" placeholder="">
				</div>
				</div>
				<div class="w-100"></div>
				<div class="col-md-12">
				<div class="form-group mt-4">
					<div class="radio">
					<label class="mr-3"><input type="radio" name="optradio"> Create an Account? </label>
					<label><input type="radio" name="optradio"> Ship to different address</label>
					</div>
				</div>
				</div>
			</div>
			</form><!-- END -->
		</div>
		<div class="col-xl-5">
			<div class="row mt-5 pt-3">
			<div class="col-md-12 d-flex mb-5">
				<div class="cart-detail cart-total p-3 p-md-4">
				<h3 class="billing-heading mb-4">Cart Total</h3>
				<p class="d-flex">
					<span>Subtotal</span>
					<span>$20.60</span>
				</p>
				<p class="d-flex">
					<span>Delivery</span>
					<span>$0.00</span>
				</p>
				<p class="d-flex">
					<span>Discount</span>
					<span>$3.00</span>
				</p>
				<hr>
				<p class="d-flex total-price">
					<span>Total</span>
					<span></span>
				</p>
				</div>
			</div>
			<div class="col-md-12">
				<div class="cart-detail p-3 p-md-4">
				<h3 class="billing-heading mb-4">Payment Method</h3>
				<p><a href="#" class="btn btn-primary py-3 px-4 purchase">Place an order</a></p>
				</div>
			</div>
			</div>
		</div> <!-- .col-md-8 -->
		</div>
	</div>
	</section> <!-- .section -->

	@section('script')
	<script type="text/javascript">
	$(document).ready(function() {
		$('.purchase').click(function(e) {
		e.preventDefault();
		// var productEl = $(this).parent().parent();
		// var product_id = $(this).data('product_id');
		var name = 'name',
			phone = 'phone',
			email = 'email',
			address = 'address';
		var url = "{{ route('order.purchase') }}";
		$.ajax(url, {
			type: 'POST',
			data: {
			name: name,
			phone: phone,
			address: address,
			email: email
			},
			success: function (data) {
			console.log('success');
			Swal.fire({
				position: 'top-end',
				icon: 'success',
				title: 'Thank you!',
				showConfirmButton: false,
				timer: 1500
			});
			window.location.href = '/home-page';
			},
			error: function () {
			console.log('fail');
			Swal.fire({
				position: 'top-end',
				icon: 'error',
				title: 'Failed!',
				showConfirmButton: false,
				timer: 1500
			});
			}
		});
		});
	});
	</script>
	@endsection
    <!-- //checkout -->
</x-theme-lay-out>
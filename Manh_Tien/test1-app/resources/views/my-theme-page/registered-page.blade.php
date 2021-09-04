<x-theme-lay-out>
    
	<x-theme-bread-crumbs>
	    <li class="active slot">Register Page</li>
	</x-theme-bread-crumbs>
    <!-- register -->
	<div class="register">
		<div class="container">
			<h2>Register Here</h2>
			<div class="login-form-grids">
				<h5>profile information</h5>
				<form action="#" method="post">
					<input type="text" placeholder="First Name..." required=" " >
					<input type="text" placeholder="Last Name..." required=" " >
				</form>
				<div class="register-check-box">
					<div class="check">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Subscribe to Newsletter</label>
					</div>
				</div>
				<h6>Login information</h6>
					<form action="#" method="post">
					<input type="email" placeholder="Email Address" required=" " >
					<input type="password" placeholder="Password" required=" " >
					<input type="password" placeholder="Password Confirmation" required=" " >
					<div class="register-check-box">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>I accept the terms and conditions</label>
						</div>
					</div>
					<input type="submit" value="Register">
				</form>
			</div>
			<div class="register-home">
				<x-nav-link :href="route('theme-home-page')" :active="request()->routeIs('theme-home-page')" class="act">{{ __('Home') }}</x-nav-link>
			</div>
		</div>
	</div>
    <!-- //register -->
</x-theme-lay-out>
<div class="row">
	<div class="col-md-12">
		<div class="header">
			<div class="logo">
		        <img src="{{ asset('images/leadgen_logo.png') }}">
		        <span>LEADGEN RECRUITMENT SYSTEM</span>
		    </div>
		    <div class="sign-in">
		    	@guest
                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                @else
					<a class="link dropdown-item menu-item" 
					   href="#" 
					   onclick="event.preventDefault();
		                        document.getElementById('logout-form').submit();">
		               Sign out
		            </a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		            	@csrf
		        	</form>
				@endguest	
		    </div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="sub-header mb-4">
			
		</div>
	</div>
</div>
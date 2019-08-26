<!doctype>
<html>
<head>
	<title>
		@hasSection('title')
			@yield('title') - OpBOT
		@else
			Operation BOT
		@endif
	</title>
	@include('layouts.header')
</head>

<body>
	<div class="container">
		@yield('content')
	</div>

	@include('layouts.footer')
</body>
</html>
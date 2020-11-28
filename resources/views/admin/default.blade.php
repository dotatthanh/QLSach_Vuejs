<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Vue</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
</head>
<body>
    <div class="container" id="app">
        <app></app>
    </div>

	{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="{{ url('/') }}">QL Sách</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ url('/author') }}">QL Tác giả</a>
				</li>
			</ul>
		</div>
	</nav> --}}

	@yield('content')

	<script src="{{ asset('js/jquery-2.2.1.min.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
	{{-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> --}}
	{{-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> --}}
	<script src="{{ asset('js/book.js') }}"></script>
	<script src="{{ mix('js/vue.js') }}"></script>

</body>
</html>
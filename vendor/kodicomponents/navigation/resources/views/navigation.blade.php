<section class="sidebar">
	@yield('sidebar.top')

	<ul class="sidebar-menu">
		@yield('sidebar.ul.top')

		{!! app(\KodiComponents\Navigation\Navigation::class)->render() !!}

		@yield('sidebar.ul.bottom')
	</ul>

	@yield('sidebar.bottom')
</section>
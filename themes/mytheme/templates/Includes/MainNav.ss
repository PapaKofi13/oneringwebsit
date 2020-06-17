	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="$AbsoluteBaseURL">Ayaana</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="nav navbar-nav">
					<% loop $Menu(1) %>
					<li><a class="$LinkingMode" href="$Link" title="Go to the $Title page">$MenuTitle</a></li>
					<% end_loop %>
				</ul>
			</div>
		</div>
	</nav>
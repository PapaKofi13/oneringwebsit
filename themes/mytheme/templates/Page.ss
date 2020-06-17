<!DOCTYPE html>
<% base_tag %>
<html lang="en">
<head>
    $MetaTags(false)
    <title>Ayaana: $Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

</head>
<body>
	<!-- BEGIN WRAPPER -->
	<div id="wrapper">

		<!-- BEGIN HEADER -->
		<header id="header">
                <% include MainNav %>
		</header>
		<!-- END HEADER -->

        $Layout

		<!-- BEGIN FOOTER -->
         <% include Footer %>
		<!-- END FOOTER -->

	</div>
	<!-- END WRAPPER -->
</body>
</html>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Push System</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
</head>

<body>
	<ng-view></ng-view>
	
</body>
<script src="js/lib/jquery.min.js"></script>
<script src="js/lib/bootstrap.min.js"></script>
<script src="js/lib/angular.min.js"></script>
<script>
	$(function() {
	    angular.bootstrap(document, ['CS'])
	})
</script>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Todo List</title>
	<link rel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1>Todo List</h1>
				<ul>
					@foreach($todo as $td)
					<li>{{ $td->item }}</li>
					@endforeach
				</ul>
				<form>
				<div class="row">
					<div class="col-lg-3">
						<div class="form-group">
							<input type="text" class="form-control" nama="todo_item" placeholder="Item baru...">
						</div>
					</div>

				
					<div class="col-lg-1">
						<button type="submit" class="btn-success">Add</button>
					</div>
					<div class="col-lg-8">
						
					</div>

				</form>
				<script type="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			</div>
		</div>
		</div>
	</div>	
</body>
</html>
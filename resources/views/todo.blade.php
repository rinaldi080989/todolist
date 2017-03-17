<!DOCTYPE html>
<html>
<head>
	<title>Todo List</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href='public/image/fwfwewfwe.ico' rel='shortcut icon'>

	<style type="text/css">
		body { 
			font-family: Calibri, Helvetica, Arial, sans-serif; 
			background-color: grey;
		}

		h3 { 
			font-family: Cambria,"Times New Roman",serif; 
		}
	</style>

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3>Todo List</h3>
				<ul>
					@foreach($todo as $td)
					<li>
						<form action="{{ url('todo/'.$td->id_todo) }}" method="POST">
	 						{{ $td->item }}
	 						{{ method_field('DELETE') }}
	 						{{ csrf_field() }}
	 						<button type="submit" class="btn btn-danger"> x </button>	
	 	                </form>
					</li>
					@endforeach
				</ul>
				<form action="todo" method="POST">
					{{ csrf_field() }}
					<div class="row">
						<div class="col-lg-3">
							<div class="form-group">
								<input type="text" class="form-control" name="todo_item" placeholder="New Item...">
							</div>
						</div>
						<div class="col-lg-1">
							<div class="ad">
								<button type="submit" class="btn btn-success">Add</button>
							</div>
						</div>	
							<div class="col-lg-8">	
							</div>
					</div>

				</form>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			</div>
		</div>
	</div>	
</body>
</html>
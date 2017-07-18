@extends("layouts.app")

@section("content")
	<div class="new_task_container panel">
	@if(Session::has('message'))
		<div class="alert alert-success">{{ Session::get('message')}}</div>
	@endif
		<div class="form_container">
			<div class="form-group">
				<form method="POST" action='{{url("/create")}}'>
					{{ csrf_field() }}
					<span>Task : </span> <br>
					<input type="text" name="task_name" placeholder="Task Name" class="task">
					<input type="text" name="task_description" placeholder="Task Description" class="task">
					<div class="add_task_container">
						<input type="submit" name="add_task_button" value="+ Add Task">
					</div>
				</form>
			</div>	
		</div>	
	</div>

	<div class="table_container panel">
		<table class="current_tasks_container panel">
			<tr>
				<th>Current Tasks</th>
			</tr>
			<tr>
				<th>Name</th>
				<th>Description</th>
			</tr>

			@foreach($tasks as $task)
				<tr>
					<td>{!! $task->name !!}</td> 
					<td>{!! $task->description !!}</td>
					<td>
						<a href='{{url("/delete/$task->id")}}'>
							<button class='btn btn-danger'>	Delete
							</button>
						</a>
					</td>
				</tr>
			@endforeach
		</table>
	</div>
@endsection
	
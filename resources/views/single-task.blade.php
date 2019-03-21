<h2>
	Single Task

<h4>
	{{$lists->id}}.
</h4>
<b>{{$lists->deadline }}</b>
<br>

TASK: {{$lists->task }}
<br>
NOTES: {{$lists->description }}
<br>
<br>
<a class="btn btn-primary" href="/edit/{{$lists->id}}" role="button">Edit</a>&nbsp&nbsp&nbsp<a class="btn btn-primary" href="/delete/{{$lists->id}}" role="button">Delete</a>





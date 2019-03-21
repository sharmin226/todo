<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Todolist</title>
</head>
<body>

<center>
	<h1>Todolist</h1>

	<!-- <input class="btn btn-primary" type="button" value="+ New">
 -->
	

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"> + NEW </button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="task" method="POST">
        	{{ csrf_field() }}
           <div class="form-group">
             <label for="recipient-name" class="col-form-label">Task</label>
             <input type="text" class="form-control" id="recipient-name" name="task" required>
           </div>
          
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Description</label>
            <input type="text" class="form-control" id="recipient-name" name="description" required>
          </div>
          <!-- <div class="form-group">
            <label for="message-text" class="col-form-label">Reminder</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
 -->
         <div class="form-group">
    	   <label for="exampleInputPassword1">Deadline: </label>
    	   <input type="date" class="form-control" id="exampleInputPassword1" placeholder="" name="deadline" required>
  		  </div>
        <!-- </form>
 -->      </div>
      
      <div class="modal-footer">
      	<!-- <button onclick="saveit()" type="button" name="saveBtn" class="btn btn-default" data-dismiss="modal">save</button>
    -->
		  <button class="btn btn-primary" type="submit" value="Submit">Add task</button>
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="button" class="btn btn-primary">Send message</button> -->
      </div>
</form>

    </div>
  </div>
</div>

</center>
<br>
<div>
  <center>
  <h3>All Todo list</h3>

<ul>

  @foreach($list as $mytitle)
    <b> {{ $mytitle->id }}.</b>
      <a href="task/{{ $mytitle->id }}">
      {{ $mytitle->deadline }}  
      </a>
      <br>
    {{$mytitle->task}}
    <br>
    <br>
  @endforeach

</ul>
  </center>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
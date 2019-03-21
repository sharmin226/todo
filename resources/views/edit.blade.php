<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title> Edit Todolist</title>
</head>
<body>

<center>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"> Edit Todolist </button>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/update/{{$lists->id}}" method="POST">
        	{{ csrf_field() }}
           <div class="form-group">
             <label for="recipient-name" class="col-form-label">Task</label>
             <input type="text" class="form-control" id="recipient-name" name="task" value="{{$lists->task}}" required>
           </div>
          
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Description</label>
            <input type="text" class="form-control" id="recipient-name" name="description" value="{{$lists->description}}" required>
          </div>
          <!-- <div class="form-group">
            <label for="message-text" class="col-form-label">Reminder</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
 -->
         <div class="form-group">
    	   <label for="exampleInputPassword1">Deadline: </label>
    	   <input type="date" class="form-control" id="exampleInputPassword1" placeholder="" name="deadline" value="{{$lists->deadline}}" required>
  		  </div>
        <!-- </form>
 -->      </div>
      
      <div class="modal-footer">
      	
		  <button class="btn btn-primary" type="submit" >Edit task</button>
    </div>
</form>

    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
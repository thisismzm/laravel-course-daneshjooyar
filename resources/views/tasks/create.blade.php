<form action="/tasks" method="POST">
    @csrf
    
    <label for="name">Task Name:</label>
    <input type="text" name="name" id="name" required>

    <br>
    
    <label for="description">Description:</label>
    <textarea name="description" id="description" required></textarea>
    
    <br>
    
    <button type="submit">Create Task</button>
</form>

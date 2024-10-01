<form action="/tasks/{{ $task->id }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Task Name:</label>
    <input type="text" name="name" id="name" value="{{ $task->name }}" required>
    <br>
    <label for="description">Description:</label>
    <textarea name="description" id="description" required>{{ $task->description }}</textarea>
    <br>
    <button type="submit">Update Task</button>
</form>

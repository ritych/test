<!-- resources/views/tasks.blade.php -->
@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops! There was an error.</strong>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
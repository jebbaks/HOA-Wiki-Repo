<x-layouts.app.main>

<head>
    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View work</title>
</head>

<body>
      @if (isset($Works)) 
      <h1>{{ $Works->work_title }}</h1>
</br>
        <div class="card mb-3" style="width: 25rem;">
  <h5 class="card-header">Work information</h5>
      <div class="card-body">
        <h5 class="card-title">{{ $Works->work_title }}</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $Works->work_category }}</h6>
        <p class="card-text">Status: {{ $Works->work_status }}</p>
        <a href="{{ route('Works.edit', $Works->id) }}" class="btn btn-warning">Edit</a>
         <form action="{{ route('Works.destroy', $Works->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure')">Delete</button>
        </form>
      </div>
    </div>
  </div>
<hr>
<p>{{ $Works->work_body }}</p>
    @else
    <p>If the "New Page" link redirected you here, something's wrong.</p>
    @endif
</br>
    
    
</body>

</x-layouts.app.main>
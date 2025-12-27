<x-layouts.app.main>

<head>
    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All works</title>
</head>

<body>
    <h1>All works</h1>
    <p>Index of all created works.</p>

    <a class="btn btn-warning" href="{{ route('Works.create') }}">New work</a>
</br>
     <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="btn btn-danger" type="submit" style="display:inline">
            {{ __('Logout') }}
        </button>
    </form>

    <hr>

    <p></p>
    @if (isset($Works)) 
        @foreach($Works as $Work)
        <div class="row" style="display: flex; flex-direction: row; align-items: center; justify-content: center;">
<div class="card mb-3" style="width: 40rem;">
  <h5 class="card-header">{{ $Work->work_title }}</h5>
      <div class="card-body">
        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $Work->work_category }}</h6>
        <p class="card-text">Status: {{ $Work->work_status }}</p>
            <a href="/Works/{{ $Work->id }}" class="btn btn-warning">View</a>
        </div>
        </div>
          </div>
        </div>
</div>
        </br>
        @endforeach
    @else
        <p>No posts yet.</p>
    @endif
</body>

</x-layouts.app.main>
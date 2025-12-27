<x-layouts.app.start>

<head>
    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Heart of Art Wiki</title>
</head>

<body>
    <div class="flex flex-col gap-6">
      <div class="row" style="display: flex; align-items: center; justify-content: center;">
  <div class="col-sm-6 mb-3 mb-sm-0 position-absolute top-50 start-50 translate-middle">
<div class="card text-center">
  <div class="card-body">
    <h5 class="card-title">Welcome to the Heart of Art Wiki!</h5>
    <p class="card-text">The Heart of Art wiki is a repository of the works of the Heart of Art Discord server members.</p>
    <p class="card-text">To get started, login or register an account if you haven't yet:</p>
    <a href="{{ route('register') }}" class="btn btn-warning">Create new account</a>
    <a href="{{ route('login') }}" class="btn btn-warning">Login</a>
  </div>
</div>
</div>
        </div>
</div>
</body>

</x-layouts.app.start>
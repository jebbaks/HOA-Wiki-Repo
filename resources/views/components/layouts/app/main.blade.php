<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Heart of Art Wiki</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
   <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #d5a520">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Heart of Art Wiki</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('Works.create') }}">New page</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="https://docs.google.com/document/d/1RAFcLLZun9D6VeZ2Q7umtw_VhhI38ZihdKX_WWZm5VU/edit?usp=sharing">Documentation</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    	<br/>
    <flux:main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
         {{ $slot }}
    </flux:main>
</div>
  </body>
</head>
<x-layouts.app.main>
<head>
    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create work</title>
</head>
<body>
    <h1>Create page</h1>
    <h6>Guidelines (and notes)</h6>
    <p><strong>Work status:</strong> Whether it is completed, a work in progress, or shelved.</p>
    <ul>
        <li>You may deem your work <strong>completed</strong> if the information you provide is sufficient and you feel no need to make any more changes. Otherwise, set your work's status as <strong>In Progress</strong>.</li>
        <li>However, if your work is unfinished and you don't plan to touch it anymore (but still want to get it out there), set your work's status as <strong>Shelved.</strong></li>
    </ul>
    <p><strong>Work category:</strong> Three main categories exist as of now: Original Character, Worldbuilding/Universe, and Alternate Universe.</p>
    <ul>
        <li><strong>Original Character:</strong> Characters you have created that may or may not exist within a universe.</li>
        <li><strong>Worldbuilding/Universe:</strong> Worlds, settings, or universes you have created yourself.</li>
        <li><strong>Alternate Universe:</strong> Worlds, settings, or universes that exist as an alternate version of existing universes.</li>
    </ul>
  <div class="col-md-6 offset-md-3">
    <form class="row row-cols-lg-auto g-3 align-items-center" method="POST" action="{{ route('Works.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Title</label>
    <div class="input-group">
      <div class="input-group-text">Title</div>
      <input type="text" class="form-control" name="work_title" value="{{ old('work_title') }}" placeholder="Title">
    </div>
  </div>

  </br>
  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Title</label>
    <div class="input-group">
    <div class="input-group-text">Status</div>
      <input type="text" class="form-control" name="work_status" value="{{ old('work_status') }}" placeholder="Completed, WIP, Shelved">
    </div>
    </div>
  </div>

  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Title</label>
    <div class="input-group">
       <div class="input-group-text">Category</div>
      <input type="text" class="form-control" name="work_category" value="{{ old('work_category') }}" placeholder="Original Character, Worldbuilding/Universe, Alternate Universe">
    </div>
  </div>

</br>
  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Body</label>
    <div class="input-group">
      <textarea class="form-control" name="work_body">{{ old('work_body') }}</textarea>
    </div>
  </div>
</br>

  <div class="col-12">
    <button type="submit" class="btn btn-warning" name="upload">Submit</button>
  </div>
</form>
</div>

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
</body>

</x-layouts.app.main>

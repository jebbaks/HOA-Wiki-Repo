<x-layouts.app.start>
    <head>
        
    </head>
    <body class="min-h-screen bg-white">
        <div class="flex flex-col gap-6">
      <div class="row" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: center;">
  <div class="col-sm-6 mb-3 mb-sm-0 position-absolute top-50 start-50 translate-middle">
<div class="card text-center">
                 <div class="card-body">
                    {{ $slot }}
                </div>
            </div>
        </div>
</div>
</div>
        @fluxScripts
    </body>
</x-layouts.app.start>

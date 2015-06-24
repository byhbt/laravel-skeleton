@if(session()->has('success'))
    <div class="callout callout-success">
        <p>{{ session('success') }}</p>
    </div>
@endif
@if(session()->has('error'))
    <div class="callout callout-danger">
        <p>{{ session('error') }}</p>
    </div>
@endif
@if(!$errors->isEmpty())
    <div class="callout callout-danger">
        @foreach($errors->all() as $key => $message)
            <p><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> <span class="sr-only">Error:</span> {{ $message }}</p>
        @endforeach
    </div>
@endif
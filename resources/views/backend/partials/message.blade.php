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
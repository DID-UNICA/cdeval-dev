@if (Session::has('success'))
    <div class="alert alert-success" role=alert>
        <strong> {{Session::get('success')}}</strong>
    </div>
@endif

@if (Session::has('danger'))
    <div class="alert alert-danger" role=alert>
        <strong> {{Session::get('danger')}}</strong>
    </div>
@endif

@if (Session::has('info'))
    <div class="alert alert-info" role=alert>
        <strong> {{Session::get('info')}}</strong>
    </div>
@endif

@if (Session::has('warning'))
    <div class="alert alert-warning" role=alert>
        <strong> {{Session::get('warning')}}</strong>
    </div>
@endif

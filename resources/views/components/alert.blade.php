@if (session('created'))
    <div class="alert alert-success" role="alert">

        <strong>Success!</strong> {{ session('created') }}
    </div>
    @elseif (session('deleted'))
    <div class="alert alert-danger" role="alert">

        <strong>Deleted!</strong> {{ session('deleted') }}
    </div>
    @elseif (session('updated'))
    <div class="alert alert-info" role="alert">

        <strong>Updated!</strong> {{ session('updated') }}
    </div>
@endif

@if ($errors && (is_array($errors) || $errors->all()))
    <div class="alert alert-danger" role="alert">
        <strong class="text-danger">Errors encounteded!</strong>
        <br>
        <ul>
            @foreach ((is_array($errors) ? $errors : $errors->all()) as $error)
            <li>
                <strong>{{ $error }}</strong>
            </li>
            @endforeach
        </ul>
    </div>
@endif

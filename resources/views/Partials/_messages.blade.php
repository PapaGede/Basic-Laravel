@if (Session::has('Success'))
    <div class="alert alert-success" role="alert">
        <strong>Success</strong> {{Session::get('Success')}}
    </div>
@endif

@if (count($errors)>0)
    <div class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
            <ul>
                <li>{{$error}}</li>
            </ul>
        @endforeach
    </div>        
@endif
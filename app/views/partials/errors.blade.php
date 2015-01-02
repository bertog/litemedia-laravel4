@if ( $errors->any() )
    <div class="alert alert-danger">
        <h3>Oh ! Oh! Qualcosa è andato storto :(</h3>
        <ul>
            @foreach( $errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
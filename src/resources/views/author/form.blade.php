
@extends('layout')

@section('content')

    @if ($errors->any()) 
    <div class="alert alert-danger" role="alert">
         Ludzu, noversiet radusas kludas!!
    </div>
    @endif


    <form method="post" action="{{ $author->exists ? '/authors/patch/' . $author->id : '/authors/put' }}">
        @csrf

        <div class="mb-3">
            <label for="author name" class="form-label">Autora vards</label>

            <input 
            type="text" 
            id="author-name" 
            name="name"
            class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name', $author->name) }}"
            >
            @error('name')
                <p class="invalid-feedback">{{ $errors->first('name') }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">{{ $author->exists ? 'Atjaunot' : 'Pievienot' }}</button>

    </form>


@endsection
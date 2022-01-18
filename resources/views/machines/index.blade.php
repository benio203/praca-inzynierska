@extends('layouts.app')

@section('content')

@livewire('mini-nav-bar', ['tmp' => 3])

@if (session()->has('message'))
    <div class="row justify-content-center">
        <div class="col-md-8 mt-md-5 mt-2">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
@endif

<div class="d-block d-md-none text-center">
    <h3>Moje maszyny</h3>
</div>

@if( count($machines) > 0)
    <div class="mt-md-5 mt-3">
        @foreach ($machines as $machine)
        <div class="row justify-content-center">
            <div class="col-xl-8 col-md-10">
            @livewire('display-object', ['object_id' => $machine->id])        
            </div>
        </div>
        @endforeach
    </div>
@else
    <div class="mt-md-5 mt-3">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-md-10">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Nie masz żadnej maszyny!</strong> 
                    <p>
                        Wybierz opcję "Nowy" i dodaj nową maszynę!
                    </p>
                    <a href="{{ route('objects.create') }}" type="button" class="btn btn-success">
                        Nowy
                    </a>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endif

@endsection

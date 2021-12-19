@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="form" action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('empleado.form', ['modo' => 'Crear'])
                </form>
            </div>
        </div>
    </div>

@endsection

@extends("layouts.main")

@section("web")
    <div class="col-12 col-md-12 col-xl-12">
        <h1 class="text-center">Telefon</h1>
        <ul class="text-center list-unstyled">
            <li>Brand: {{$phones->brands->name}}</li>
            <li>Model: {{$phones->model}}</li>
            <li>Color: {{$phones->color}}</li>
            <li>SoC: {{$phones->soc}}</li>
            <li>Memory Size: {{$phones->memory_size}}</li>
        </ul>
    </div>
@endsection

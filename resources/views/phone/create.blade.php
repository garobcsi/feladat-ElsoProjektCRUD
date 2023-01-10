@extends("layouts.main")

@section("web")
    <div class="col-12 col-md-12 col-xl-12">
        <h1 class="text-center">Create Telefon</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route("phones.store")}}" method="POST">
            @csrf
            <label for="brand_id" class="my-1">Brand:</label>
            <select name="brand_id" id="brand_id" class="form-select">
                @for($i = 0; $i < count($brands); $i++)
                    <option value="{{$brands[$i]->id}}">{{$brands[$i]->name}}</option>
                @endfor
            </select>
            <label for="model" class="my-1">Model:</label>
            <input name="model" id="model" type="text" class="form-control" placeholder="Model">

            <label for="color" class="my-1">Color:</label>
            <input name="color" id="color" type="text" class="form-control" placeholder="color">

            <label for="soc" class="my-1">SoC:</label>
            <input name="soc" id="soc" type="text" class="form-control" placeholder="SoC">

            <label for="memory_size" class="my-1">Memory Size:</label>
            <input name="memory_size" id="memory_size" type="number" class="form-control" placeholder="Memory Size">
            <button type="submit" class="btn btn-success mt-2 form-control">Success</button>
        </form>
    </div>
@endsection

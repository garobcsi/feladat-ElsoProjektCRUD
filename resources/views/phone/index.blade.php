@extends("layouts.main")

@section("web")
    <div class="col-12 col-md-12 col-xl-12">
        <h1 class="text-center">Telefonok</h1>
        <table class="table">
            <thead>
                <th>Brand</th>
                <th>Model</th>
                <th>Color</th>
                <th>SoC</th>
                <th>Memory Size</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach($phones as $t)
                    <tr>
                        <th>{{$t->brands->name}}</th>
                        <th>{{$t->model}}</th>
                        <th>{{$t->color}}</th>
                        <th>{{$t->soc}}</th>
                        <th>{{$t->memory_size}}</th>
                        <th><a href="/phones/{{$t->id}}" class="btn bg-warning">Show</a></th>
                        <th>
                            <form action="{{route('phones.destroy',['id' => $t->id])}}" method="post">
                                @csrf
                                @method("delete")
                                <button type="submit" class="btn bg-danger" >Delete</button>
                            </form>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

<x-app-layout>

    <div class="row mt-5 mx-auto">

        <ul class="list-group col-4">
               @foreach ($categoreis as $item)
               <a href="" class="list-group-item"> {{$item->name}} {{$item->product->count()}}</a>
            @endforeach
          </ul>
          {{-- -------------------- --}}
          <div class="col-8 row">
              @foreach ($stocks as $stock)


            <div class="card ml-auto mb-3"  style="width: 16rem;">
              <img src="{{ asset( 'storage/' . $stock->image)}}" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">{{$stock->body}}</p>
                <div class="row">
                    <a href="{{route('stock.edit',$stock->id)}}" class="btn btn-success">update</a>
                    <form action="{{route('stock.destroy',$stock->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger ml-2">delete</button>
                    </form>
                </div>

              </div>
            </div>
            @endforeach
          </div>

      </div>
</x-app-layout>

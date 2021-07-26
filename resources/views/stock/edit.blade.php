
<x-app-layout>

    <div class="container">
<form action="{{route('stock.update',$stock->id)}}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="title">title</label>
      <input name="title" type="text" class="form-control" placeholder="Enter title" value="{{$stock->title}}">
    </div>
    <div class="form-group">
      <label for="price">price</label>
      <input name="price" type="text" class="form-control" placeholder="Enter price" value="{{$stock->price}}">
    </div>
    <div class="form-group">
      <label for="body">Content</label>
     <textarea name="body" class="form-control" placeholder="Enter your content">{{$stock->body}}</textarea>
    </div>
    <div class="form-group">
        <label for="image">image</label>
        <input type="file" name="image" class="form-control">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</x-app-layout>


<x-app-layout>

    <div class="container">
<form action="{{route('stock.store')}}" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="form-group">
      <label for="title">title</label>
      <input name="title" type="text" class="form-control" placeholder="Enter title">
    </div>
    <div class="form-group">
      <label for="price">price</label>
      <input name="price" type="text" class="form-control" placeholder="Enter price">
    </div>
    <div class="form-group">
      <label for="body">Content</label>
     <textarea name="body" class="form-control" placeholder="Enter your content"></textarea>
    </div>
    <div class="form-group">
        <label for="image">image</label>
        <input type="file" name="image" class="form-control">
      </div>
      <select  name="category_id" class="form-control" id="exampleFormControlSelect1">
        @foreach ($categoreis as $Category)
        <option value="{{$Category->id}}">{{$Category->name}}</option>
        @endforeach
        </select>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</x-app-layout>

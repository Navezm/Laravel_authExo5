<h1 class="text-center my-5">Add a Picture to your Profile</h1>

<form action="/photos" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="form-group">
      <label>Picture</label>
      <input type="file" name="src" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
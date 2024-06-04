<form action="/admin/modules" method="post" class="form-example">
    @csrf
  <div class="form-example">
    <label for="name">Enter your title: </label>
    <input type="text" name="title" id="title" value="{{ old('title') }}" required />
    @if($errors->has('title'))
        <div class="error">{{ $errors->first('title') }}</div>
    @endif
  </div>

  <div class="form-example">
    <input type="submit" value="Create" />
  </div>
</form>
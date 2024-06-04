
<h1>Liste des modules</h1>

@if (session('error'))
    <div>
        {{ session('error') }}
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<a href="modules/create">Create new</a><br/><br/>

@foreach($modules as $module)
    {{$module->title}}
    <div>
        <a href="modules/{{$module->id}}">Update</a>&nbsp;&nbsp;
        <form action="{{ route('admin.modules.destroy', $module->id) }}" method="POST">
          @csrf
          @method('delete')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach

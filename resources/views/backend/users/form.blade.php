<form 
    hx-post="{{route($resource->slug . '.store')}}" 
    {{-- hx-target="#table"  --}}
    hx-indicator="#formLoader"
    hx-target="#table"
    hx-trigger="submit"
    id="form">

    <input type="hidden" name="id" value="{{$row->id}}">

    <!-- Loader -->
    <div id="formLoader" style="display: none;">Saving...</div>

    <div class="mb-3">
        <label for="">Role</label>
        <select name="role_id" id="i-role_id" class="form-control form-select">
            <option value="">CHOOSE</option>
            @foreach($roles as $role)
            <option value="{{$role->id}}" {{$role->id == $row->role_id ? 'selected' : ''}}>{{$role->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control" id="i-name" value="{{$row->name}}">
    </div>

    <div class="mb-3">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control" id="i-email" value="{{$row->email}}">
    </div>

    <div class="mb-3">
        <label for="">Password</label>
        <input type="password" name="password" class="form-control" id="i-password" value="">
    </div>

    <button class="btn btn-primary rounded-pill">Save</button>
</form>
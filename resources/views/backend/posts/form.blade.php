<form 
    hx-post="{{route($resource->slug . '.store')}}" 
    {{-- hx-target="#table"  --}}
    hx-indicator="#formLoader"
    hx-target="#table"
    hx-trigger="submit"
    id="form"
    enctype="multipart/form-data">

    <input type="hidden" name="id" value="{{$row->id}}">

    <!-- Loader -->
    <div id="formLoader" style="display: none;">Saving...</div>

    {{-- <div class="mb-3">
        <label for="">Role</label>
        <select name="role_id" id="i-role_id" class="form-control form-select">
            <option value="">CHOOSE</option>
            @foreach($roles as $role)
            <option value="{{$role->id}}" {{$role->id == $row->role_id ? 'selected' : ''}}>{{$role->name}}</option>
            @endforeach
        </select>
    </div> --}}

    <div class="mb-3">
        <label for="">TITLE</label>
        <input type="text" name="title" class="form-control" id="i-title" value="{{$row->title}}">
    </div>

    <div class="mb-3">
        <label for="">CONTENT</label>
        <textarea name="content" cols="30" rows="10" class="form-control" id="i-postContent">{{$row->content}}</textarea>
    </div>

    <div class="mb-3">
        <label for="">DATE</label>
        <input type="date" name="publish_date" class="form-control" id="i-publish_date" value="{{date('Y-m-d', strtotime($row->publish_date)) }}">
    </div>

    <div class="mb-3">
        <label for="">THUMBNAIL</label>
        <input type="file" name="thumbnail_url" class="form-control" id="i-thumbnail_url" value="{{$row->thumbnail_url}}">
    </div>

    <div class="mb-3">
        <label for="">STATUS</label>
        <select name="status" id="i-status" class="form-control form-select">
            @foreach (['PUBLISH', 'DRAFT'] as $status)
                <option value="{{$status}}" {{$status == $row->status ? 'selected' : ''}}>{{$status}}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="">CATEGORIES</label>
        <select name="categories[]" id="i-categories" class="form-control form-select" multiple>
            <option value=""></option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}" 
                @if($row->categories()->get()->pluck('category_id')->contains($category->id))
                    selected
                @endif>{{$category->name}}</option>
            @endforeach
        </select>
    </div>


    <button class="btn btn-primary rounded-pill">Save</button>
</form>
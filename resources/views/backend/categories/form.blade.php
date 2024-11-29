<form 
    hx-post="{{route($resource->slug . '.store')}}" 
    {{-- hx-target="#table"  --}}
    hx-indicator="#formLoader"
    hx-target="#table"
    hx-trigger="submit"
    id="form">

    <input type="hidden" name="id" value="{{$category->id}}">

    <!-- Loader -->
    <div id="formLoader" style="display: none;">Saving...</div>

    <div class="mb-3">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control" id="i-name" value="{{$category->name}}">
    </div>

    <div class="mb-3">
        <label for="">Description</label>
        <textarea type="text" name="description" class="form-control" id="i-description">{{$category->description}}</textarea>
    </div>

    <button class="btn btn-primary rounded-pill">Save</button>
</form>
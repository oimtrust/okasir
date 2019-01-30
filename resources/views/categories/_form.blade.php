<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name">Category</label>
    <input type="text" class="form-control" name="name" id="name"  placeholder="Enter Category">
    {{ $errors->first('name', ':message') }}
</div>
<button type="submit" class="btn btn-primary">Save</button>

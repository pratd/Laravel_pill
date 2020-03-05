<label for="title">Title:</label>
<div class="form-group pb-2">
    <input type="text" name="title" value="{{old('title') ?? $article->title}}">
    <div>{{ $errors->first('title') }}</div>
</div>
<label for="content">Content:</label>
<div class="form-group pb-2">
    <textarea class="text" name="content" cols="100" rows="20">
        {{ old('content') ?? $article->content }}
    </textarea>
    <div>{{ $errors->first('content') }}</div>
</div>

<div class="form-group">
    <label for="publish">status
    </label>
    <select name="publish" id="publish" class="form-control">
        <option value="" disabled>Select Article Status</option>
        <option value="0">Draft</option>
        <option value="1">published</option>
    </select>
</div>
@csrf

<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($project->title) ? $project->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" required>{{ isset($project->description) ? $project->description : ''}}</textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('goal') ? 'has-error' : ''}}">
    <label for="goal" class="control-label">{{ 'Goal' }}</label>
    <input class="form-control" name="goal" type="number" id="goal" value="{{ isset($project->goal) ? $project->goal : ''}}" >
    {!! $errors->first('goal', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('collected') ? 'has-error' : ''}}">
    <label for="collected" class="control-label">{{ 'Collected' }}</label>
    <input class="form-control" name="collected" type="number" id="collected" value="{{ isset($project->collected) ? $project->collected : ''}}" >
    {!! $errors->first('collected', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('icon') ? 'has-error' : ''}}">
    <label for="icon" class="control-label">{{ 'Icon' }}</label>
    <input class="form-control" name="icon" type="file" id="icon" value="{{ isset($project->icon) ? $project->icon : ''}}" >
    {!! $errors->first('icon', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('is_active') ? 'has-error' : ''}}">
    <label for="is_active" class="control-label">{{ 'Is Active' }}</label>
    <div class="radio">
    <label><input name="is_active" type="radio" value="1" {{ (isset($project) && 1 == $project->is_active) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="is_active" type="radio" value="0" @if (isset($project)) {{ (0 == $project->is_active) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('is_active', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

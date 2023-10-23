<label class="form-label text-primary">Select
    positions<span class="required">*</span></label>
<select name="position_id" id="position" class="default-select form-control wide form-control mb-3">
    <option value="">Options..</option>
    @forelse ($positions as $position)
    <option value="{{$position->id}}">{{$position->position_name}}</option>
    @empty
    <option value="">No Position Found</option>
    @endforelse
</select>
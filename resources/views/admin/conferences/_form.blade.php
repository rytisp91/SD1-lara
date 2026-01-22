<div class="mb-3">
    <label class="form-label">{{ __('ui.title') }}</label>
    <input type="text" name="title"
           value="{{ old('title', $conference['title'] ?? '') }}"
           class="form-control @error('title') is-invalid @enderror">
    @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">{{ __('ui.description') }}</label>
    <textarea name="description"
              class="form-control @error('description') is-invalid @enderror"
              rows="4">{{ old('description', $conference['description'] ?? '') }}</textarea>
    @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">{{ __('ui.speakers') }}</label>
    <input type="text" name="speakers"
           value="{{ old('speakers', $conference['speakers'] ?? '') }}"
           class="form-control @error('speakers') is-invalid @enderror">
    @error('speakers') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">{{ __('ui.date') }}</label>
        <input type="date" name="date"
               value="{{ old('date', $conference['date'] ?? '') }}"
               class="form-control @error('date') is-invalid @enderror">
        @error('date') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">{{ __('ui.time') }}</label>
        <input type="time" name="time"
               value="{{ old('time', $conference['time'] ?? '') }}"
               class="form-control @error('time') is-invalid @enderror">
        @error('time') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('ui.address') }}</label>
    <input type="text" name="address"
           value="{{ old('address', $conference['address'] ?? '') }}"
           class="form-control @error('address') is-invalid @enderror">
    @error('address') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>


<div class="row mb-3 {{ $errors->has($name) ? 'has-danger' : '' }} {{$id}}_sh">
  <div class="col-md-3 text-left">
    <label for="{{ $id }}">
        {!! __($label) !!}
        @if ( empty($required)  || strtolower($required) == 'no')
        @else
            <span class='text-danger'>*</span>
        @endif
    </label>
  </div>

  <div class="col-md-9">
    <select class="form-control select2" id="{{ $id }}" name="{{ $name }}" 
          @if( $readOnly ) readonly="readonly" @endif
          @if( $disabled ) disabled="disabled" @endif>
      <option value="">Please Select</option>
      @foreach($list as $key=>$obj)
        @php
            $position = optional(optional($obj->getCurrentPosition)->positionCategory)->position;
        @endphp
        <option 
          value="{{ $obj->user_id }}"
          {{ old($name, $selected) == $obj->id ? 'selected': '' }}>
          {{ $obj->name.' ('.$position.')' }}
        </option>
      @endforeach
    </select>
    @if($errors->has($name))
        <label class="error mt-2 text-danger text-center">{{ $errors->first($name) }}</label>
    @endif
  </div>

</div>
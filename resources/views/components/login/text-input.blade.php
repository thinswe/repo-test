<div class="form-outline mb-4">
    <div class="form-outline mb-4 {{$id}}_sh {{ $parentClass }} {{ $errors->has($name) ? 'has-danger' : ''}} {{$col ?? null}}">
        <input type="text"
            name="{{$name}}"
            value="{{old($name) ?? $value}}"
            id="{{$id}}"
            placeholder=" {!! __($placeholder) !!}" 
            @if( $readOnly ) readonly="readonly" @endif
            @if( $disabled ) disabled="disabled" @endif
            class="form-control form-control-lg {{ $errors->has($name) ? 'is-invalid' : ''}} {{$class ?? null}}"
            autocomplete="{{$autocomplete}}"
            @if(isset($attributes))
            @foreach($attributes as $key => $value)
                {{$key.'='."$value"}}
            @endforeach
            @endif
        >
        {!! $errors->first($name, '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
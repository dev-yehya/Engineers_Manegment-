@props(['name','label','type'=>'text','value'=>'','class'=>'mb-3','placeholder'=>''])
<div class="{{$class}}">
    @isset($label)
        <label for="{{$name}}" class="form-label">{{$label}}</label>
    @endisset
    <input type="{{$type}}" name="{{$name}}" class="form-control {{$name}} @error($name) is-invalid @enderror"
        id="{{$name}}" autocomplete="off" placeholder="@isset($label){{$label}}@endisset" value="{{old($name,$value)}}">
    @error($name)
        <div class="invalid-feedback">
            <i data-feather="alert-circle"></i>{{$message}}</div>
    @enderror
</div>

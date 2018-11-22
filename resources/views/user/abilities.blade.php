<fieldset class="fieldset-border">
    <legend class="legend-border">{{ucfirst($_module)}}</legend>
    @foreach($permissions as $ability=>$permission)
        <label class="custom-control custom-checkbox">
            <input type="checkbox" {{ $disabled ? 'disabled="disabled"':"" }}
            id="{{is_int($ability)?$_module."-".$permission:$_module."-".$ability }}"
                   class="custom-control-input permit-check"
                   value="{{is_string($ability)?$permission:1}}"
                   name="permissions[{{ $_module }}][{{is_int($ability)?$permission:$ability}}]">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">{{ucfirst(is_int($ability)?$permission:$ability)}}</span>
        </label>
    @endforeach
</fieldset>

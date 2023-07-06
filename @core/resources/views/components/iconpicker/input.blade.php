<div class="form-group">
    @if($label)
    <label for="icon" class="d-block">{{__( $label )}}</label>
    @endif
    <div class="btn-group ">
        <button type="button" class="btn btn-primary iconpicker-component">
            <i class="fas fa-exclamation-triangle"></i>
        </button>
        <button type="button" class="icp icp-dd btn btn-primary dropdown-toggle"
                data-selected="fas fa-exclamation-triangle" data-toggle="dropdown">
            <span class="caret"></span>
            <span class="sr-only">{{ __('Toggle Dropdown') }}</span>
        </button>
        <div class="dropdown-menu"></div>
    </div>
    <input type="hidden" class="form-control"  id="{{ $id }}" value="fas fa-exclamation-triangle" name="{{ $name }}">
</div>

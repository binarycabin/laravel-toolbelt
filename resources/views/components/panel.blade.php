<div class="panel {{ $panelClass ?? 'panel-default' }}">
    @if(isset($title) || isset($action))
    <div class="panel-heading">
            @if(isset($action))
                <div class="panel-title">
                    {!! $title !!}
                </div>
            @endif
            @if(isset($action))
                <div class="panel-action">
                    {!! $action !!}
                </div>
            @endif
    </div>
    @endif
    <div class="panel-body">
        {{ $slot }}
    </div>
</div>
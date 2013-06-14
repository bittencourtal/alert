@if($assetPath != '')
<link rel="stylesheet" type="text/css" href="{{ URL::asset($assetPath . 'css/bootstrap.min.css') }}" />
<script src="{{ URL::asset($assetPath . 'js/jquery-2.0.2.min.js') }}" type="text/javascript" charset="utf-8"></script>
<script src="{{ URL::asset($assetPath . 'js/bootstrap.min.js') }}" type="text/javascript" charset="utf-8"></script>
@endif

<div class="alert alert-{{ $type }}"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>{{ ucfirst($type) }}!</h4>

    @if(is_array($messages))
    
    <ul>
        @foreach ($messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
    @else
            {{ $messages }}
    @endif

</div>
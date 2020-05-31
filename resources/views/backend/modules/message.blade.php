<<<<<<< HEAD

@if (session('message'))

@php
    $type=session('message');
@endphp
<div class="alert alert-{{ $type['type'] }}">
    <h3 class="text-center"><strong>{{ $type['msg'] }}!</strong></h3>
</div>


@endif
=======

@if (session('message'))

@php
    $type=session('message');
@endphp
<div class="alert alert-{{ $type['type'] }}">
    <h3 class="text-center"><strong>{{ $type['msg'] }}!</strong></h3>
</div>


@endif
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a

@section('css')
    @include('layouts.datatables_css')
@endsection

{!! $dataTable->table(['width' => '100%', 'class' => 'table table-striped table-bordered']) !!}

@section('js')
    @include('layouts.datatables_js')
    {!! $dataTable->scripts() !!}
@endsection
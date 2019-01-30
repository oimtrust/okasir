@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="card">
                <div class="card-header">
                    <a href="{{ '/categories/create' }}" class="btn btn-outline-success">Add Category</a>
                </div>
                <div class="card-body">
                    <table id="categories" class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Created At
                            </th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
    </div>
@endsection

@push('scripts')
<script type="text/javascript">
    $(function () {
        $('#categories').DataTable({
            "processing"    : true,
            "serverSide"    : true,
            "ajax"          : '{{ route('datatables.getcategories') }}',
            "columns"       : [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'created_at', name: 'created_at'}
            ]
        });
    });
</script>
@endpush

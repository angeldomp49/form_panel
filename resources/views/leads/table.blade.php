@extends('layout.master')
@section('title', 'Leads Table')


@section('content')
<div class="row clearfix">
    <div class="col-12">
        <div class="table-responsive">
            <table class="table table-hover table-custom spacing8">
                <thead>
                    <tr> 
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>View</th>
                        <!-- <th>Edit</th> -->
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $leads as $lead )
                        <tr>
                            <td>
                                <p>{{ $lead->id }}</p>
                            </td>
                            <td>
                                <p class="mb-0">{{ $lead->name }}</p>
                            </td>
                            <td>
                                <p class="mb-0">{{ $lead->email }}</p>
                            </td>
                            <td>
                                <a href="{{ route('lead.show', [ 'lead' => $lead->id ]) }}" class="btn btn-primary"><span class="ti-id-badge"></span></a>
                            </td>
                            <!-- <td>
                                <a href="{{ route('lead.edit', [ 'lead' => $lead->id ]) }}" class="btn btn-warning"><span class="ti-pencil"></span></a>
                            </td> -->
                            <td>
                                <form action="{{ route('lead.destroy', [ 'lead' => $lead->id ]) }}" method="post" style="display:contents;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><span class="ti-trash"></span></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@stop

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('assets/vendor/themify-icons/themify-icons.css') }}">
@endsection

@section('page-script')
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
@endsection
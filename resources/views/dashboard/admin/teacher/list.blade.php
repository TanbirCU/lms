@extends('dashboard.master')

@section('title', 'Teachers List')

@section('content')
   <div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Teachers List</h4>
                <p class="">Here You Will See Teachers List.</p>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Serial</th>
                                <th>name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($teachers as $teacher)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $teacher->name }}</td>
                                    <td>{{ $teacher->email }}</td>
                                    <td>{{ $teacher->mobile }}</td>
                                    <td>
                                        @if($teacher->photo)
                                            <img src="{{ asset($teacher->photo) }}" alt="{{ $teacher->name }}" width="50">
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                                        {{-- <form id="deleteForm_{{ $teacher->id }}" action="{{ route('admin.teacher_delete', $teacher->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $teacher->id }})">Delete</button>
                                        </form> --}}
                                    </td>
                                    
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">Data not found</td>
                                </tr>
                            @endforelse
                        

                        </tbody>
                    </table>
                {{-- Start Form --}}
                {{-- End Form --}}
            </div><!-- Card body end -->
        </div><!-- Card end -->
    </div><!-- Col end -->
</div><!-- Row end -->
@endsection


@extends('dashboard.master')

@section('title', 'Students List')

@section('content')
   <div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Students List</h4>
                <p class="">Here You Will See Students List.</p>
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
                            @forelse($students as $student)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->mobile }}</td>
                                    <td>
                                        @if($student->photo)
                                            <img src="{{ asset($student->photo) }}" alt="{{ $student->name }}" width="50">
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                                        <form id="deleteForm_{{ $student->id }}" action="{{ route('admin.student_delete', $student->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('GET')
                                            <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $student->id }})">Delete</button>
                                        </form>
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


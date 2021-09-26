@extends('adminetic::admin.layouts.app')

@section('content')
    @hasRole('admin|editor')
    <div class="tab-pane fade show active" id="info-list" role="tabpanel" aria-labelledby="info-list-tab">
        <table class="table table-bordered table-hover datatable">
            <thead>
                <tr>
                    <th>Post Title</th>
                    <th>Author</th>
                    <th>Approved by:</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($requests as $request)
                    <tr>
                        <td>{{ $request->title }}</td>
                        <td>{{ $request->author->name }}</td>
                        <td><a href="{{ route('requests.update', $request->id) }}" class="btn btn-primary">Publish</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endhasRole
    {{-- Not authorized --}}
@endsection

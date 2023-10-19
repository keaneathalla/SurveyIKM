@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Pertanyaan</h6>
                    <a href="{{ route('add.questions') }}" class="btn btn-primary m-2"><i class="fa fa-plus me-2"></i>Tambah
                        Pertanyaan</a>
                    <h6 class="mb-4">Basic Table</h6>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Pertanyaan</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($questions as $question)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $question->questions_name }}</td>
                                    <td>
                                        <a href="{{ route('edit.questions', $question->id) }}"
                                            class="btn btn-warning">Edit</a>
                                        <a href="{{ route('delete.questions', $question->id) }}"
                                            class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

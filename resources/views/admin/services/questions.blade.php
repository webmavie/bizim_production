@extends('admin.layouts.app')
@section('title', 'Suallar')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="m-0">Suallar
                            <button onclick="ResetValues()" type="button" class="btn btn-success float-right"
                                data-toggle="modal" data-target="#exampleModalCenter">Yeni
                            </button>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 20px">#</th>
                                <th>Sual</th>
                                <th>Cavab</th>
                                <th>Prc</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($questions as $q)
                                <tr>
                                    <td data-label="#" class="align-middle">{{ $q->id }}</td>
                                    <td data-label="Sual" class="align-middle">{{ $q->question }}</td>
                                    <td data-label="Cavab" class="align-middle">{{ $q->answer }}</td>
                                    <td data-label="Prc" class="align-middle">
                                        <div
                                            style="height: 100%; gap: 5px; display: flex; justify-content: center; align-services:center;">
                                            <button
                                                onclick="QuestionEdit('{{ $q->id }}','{{ $q->question }}','{{ $q->answer }}')"
                                                type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModalCenter">
                                                <i class="fa fa-outdent"></i>
                                            </button>
                                            <a title="Sil" href="{{ route('admin.service.question.delete', $q->id) }}"
                                                class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $questions->links() }}
                </div>
            </div>
        </section>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Suala Düzəliş et</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.service.question.store') }}" method="POST">
                        @csrf
                        <input type="hidden" id="question_id" name="id">
                        <div class="form-group">
                            <label for="question">Sual</label>
                            <input type="text" class="form-control" id="question" name="question"
                                placeholder="Sualı daxil edin">
                        </div>
                        <div class="form-group">
                            <label for="answer">Cavab</label>
                            <input type="text" class="form-control" id="answer" name="answer"
                                placeholder="Cavab daxil edin">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
                            <button type="submit" class="btn btn-primary">Saxla</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @section('js')
        <script>
            function QuestionEdit(id, question, answer) {
                console.log(id, question, answer);
                $('#question_id').val(id);
                $('#question').val(question);
                $('#answer').val(answer);
            }

            function ReserValues() {
                $('#question_id').val('');
                $('#question').val('');
                $('#answer').val('');
            }
        </script>
    @endsection
@endsection

@extends('admin.layouts.app')
@section('title', 'Komandamız')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="m-0">Komandamız
                            <a href="{{ route('admin.our-team.create') }}" class="btn btn-success float-right">Yeni</a>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <form action="{{ route('admin.our_team_title.update') }}" method="POST">
                            @csrf
                            <div class="input-group">
                                <label class="col-md-12" for="title">Başlıq</label>
                                <input type="text" name="our_team_title" value="{{ $our_team_title }}"
                                    class="form-control" placeholder="Başlıqı dəyiş">
                                <button type="submit" class="input-group-text btn btn-success btn-sm">
                                    <i class="fas fa-check"></i>
                                </button>
                            </div>
                        </form>
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
                                <th>Şəkil</th>
                                <th>Ad</th>
                                <th>Vəzifə</th>
                                <th>Prc</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($our_team as $member)
                                <tr>
                                    <td data-label="#" class="align-middle">{{ $member->id }}</td>
                                    <td data-label="Şəkil" style="width: 150px" class="align-middle">
                                        <img class="table_img" style="width: 100%; height: auto"
                                            src="{{ asset($member->image) }}" alt="{{ $member->name }}">
                                    </td>
                                    <td data-label="Ad" class="align-middle">{{ $member->name }}</td>
                                    <td data-label="Vəzifə" class="align-middle">{{ $member->position }}</td>
                                    <td data-label="Prc" class="align-middle">
                                        <div class="prc"
                                            style="height: 100%; gap: 5px; display: flex; justify-content: center; align-members:center;">
                                            <a class="btn btn-success" title="Düzəliş et"
                                                href="{{ route('admin.our-team.edit', $member->id) }}">
                                                <i class="fa fa-outdent"></i>
                                            </a>
                                            <a title="Sil" href="{{ route('admin.our-team.delete', $member->id) }}"
                                                class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $our_team->links() }}
                </div>
            </div>
        </section>
    </div>
@endsection

@extends("layouts.app")
@section("content")
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header p-3 mb-2 bg-secondary text-white">
                編集画面
            </div>
            <div class="card-body">
                <form method="POST" action="/todos/{{ $todo->id }}" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="id" class="control-label">ID</label>
                        <div>{{ $todo->id }}</div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="title" class="control-label">タイトル</label>
                        <input class="form-control" name="title" type="text" value="{{ $todo->title }}">
                    </div>
                    <div class="form-group">
                        <label for="detail" class="control-label">詳細</label>
                        <input class="form-control" name="detail" type="text" value="{{ $todo->detail }}">
                    </div>
                    <hr>
                    <button class="btn btn-primary" type="submit">更新</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
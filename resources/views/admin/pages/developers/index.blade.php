@extends('admin.layouts.app')

@section('content')

<section class="p-5">
    <div class="container">
        <div class="row">
            <div class="col">

                <a href="{{ url('admin/developers/create') }}" class="btn btn-lg btn-dark rounded-0 mb-3">Create</a>

                <ul class="list-group">
                    @foreach($datas as $data)
                    <li class="list-group-item">
                        <div class="fw-bold h3">
                            {{ $data->first_name }} {{ $data->last_name }}
                        </div>
                        <div class="mb-3 text-muted">
                            <small>
                                {{ $data->description }}
                            </small>
                        </div>
                        <div>
                            <a href="{{ url('admin/developers/show', $data->id) }}" class="btn btn-sm btn-outline-dark rounded-0"> Show </a>
                            <a href="{{ url('admin/developers/edit', $data->id) }}" class="btn btn-sm btn-outline-dark rounded-0"> Edit </a>
                            <a href="{{ url('admin/developers/delete', $data->id) }}" class="btn btn-sm btn-outline-dark rounded-0"> Delete </a>
                        </div>
                    </li>
                    @endforeach        
                </ul>

            </div>
        </div>
    </div>
</section>
    
@endsection
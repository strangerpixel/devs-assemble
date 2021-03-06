@extends('admin._layouts.default')
 
@section('main')
    
    <h2>Pages</h2>
    
    <table class="table table-striped">
        <thead>
            <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>When</th>
                    <th><i class="icon-cog"></i></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pages as $page)
                <tr>
                    <td>{{ $page->id }}</td>
                    <td><a href="{{ URL::route('admin.pages.show', $page->id) }}">{{ $page->title }}</a></td>
                    <td>{{ $page->created_at }}</td>
                    <td>
                            <a href="{{ URL::route('admin.pages.edit', $page->id) }}" class="btn btn-success btn-mini pull-left">Edit</a>

                            <a href="{{ URL::route('page', $page->slug) }}" class="btn btn-primary btn-mini pull-left">View</a>

                            {{ Form::open(array('route' => array('admin.pages.destroy', $page->id), 'method' => 'delete', 'data-confirm' => 'Are you sure?')) }}
                                <button type="submit" href="{{ URL::route('admin.pages.destroy', $page->id) }}" class="btn btn-danger btn-mini">Delete</butfon>
                            {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
 
@stop
@extends('layouts.apaa_master')

@section('content')
  <button type="button" class="btn btn-primary pull-right m-1">
     <i class="fa fa-plus" aria-hidden="true"></i> Add Service
  </button>
  <table id="data-table" class="table table-striped table-borderd table-hover table-responsive">
      <thead class="thead-default">
          <tr>
              <th>Service Name</th>
              <th>Desecription</th>
              <th>Category</th>
              <th>Action</th>
          </tr>
          </thead>
          <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td>{{ $service->service_name }}</td>
                        <td>{{ $service->description }}</td>
                        <td>{{ $service->category->category_name}}</td>
                        <td class="actions d-flex">
                            <a href="#delete" class="btn btn-sm btn-primary mx-1">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </a>
                            <a href="#delete" class="btn btn-sm btn-danger mx-1">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
          </tbody>
  </table>
@endsection

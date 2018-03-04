@extends('layouts.apaa_master')

@section('content')

     <table id="data-table" class="table table-striped table-borderd table-hover table-responsive">
      <thead class="thead-default">
          <tr>
              <th>No.</th>
              <th>Service Name</th>
              <th>Desecription</th>
              <th>Category</th>
              <th>Client Name</th>
              <th>Client Number</th>
          </tr>
          </thead>
          <tbody>
              @foreach ($services   as $index => $service )
                <tr>
                    <td>{{$index + 1}}</td>
                    <td>{{$service->service_name}}</td>
                    <td>{{$service->description}}</td>
                    <td>{{$service->category_name}}</td>
                    <td>{{$service->client_name}}</td>
                    <td>{{$service->client_number}}</td>
                </tr>
              @endforeach
          </tbody>
     </table>

    <div class="d-flex justify-content-center align-content-center">
        <!--  renders pagination link with bootsrap style  -->
        {{ $services->links("pagination::bootstrap-4") }}
    </div>


@endsection

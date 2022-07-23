@extends('template.master')
@section('contenido_central')
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Listado de Departamentos</h2>
          <ol>
            <li>Listado de Departamentos</li>
          </ol>
        </div>

      </div>
    </section>


			<table id="tabla1" class="table table-striped table-bordered"
					style="width:100%">
			<thead>
				<tr>
				<th>Id </th>
				<th>Nombre Del Departamento </th>
				<th>Status</th>
				</tr>
			</thead>
			<tbody>
			@foreach($dep as $department)
			<tr>
				<td>{!! $department->id !!}</td>
				<td>{!! $department->nombre_dep !!}</td>
				<td>{!! $department->status !!}</td>
				<td>

					
				</td>
			</tr>
			@endforeach
			</tbody>
		</table>
		<br />
		<a href="{!! asset('home') !!}">REGRESAR AL Inicio</a>
          
@endsection()
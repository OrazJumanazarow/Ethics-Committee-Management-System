@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>APPLICATION FORMS</h1>
@stop

@section('content')



    <!-- Main content -->
    <section class="content ml-4">
      <div class="container-fluid">
        <form action="{{ route('application_form_store') }}" class="main" method="POST" >
            @csrf
            <input name="test" type="text" >
            <button>Submit</button>
        </form>
      </div>
    </section>
    @stop

@extends('layouts.app')
@section('title')
@section('content')
    <section class="content-header">
        <h1>
            Other Program Master
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('other_program_masters.show_fields')
                    <a href="{{ route('otherProgramMasters.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection

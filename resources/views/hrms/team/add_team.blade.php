@extends('hrms.layouts.base')

@section('content')
        <!-- START CONTENT -->
<div class="content">

    <header id="topbar" class="alt">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="breadcrumb-icon">
                    <a href="/dashboard">
                        <span class="fa fa-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-active">
                    <a href="/dashboard"> Dashboard </a>
                </li>
                <li class="breadcrumb-link">
                    <a href=""> Teams </a>
                </li>
                <li class="breadcrumb-current-item"> Add Team </li>
            </ol>
        </div>
    </header>
    <!-- -------------- Content -------------- -->
    <section id="content" class="table-layout animated fadeIn">
                    <!-- -------------- Column Center -------------- -->
            <div class="chute-affix" data-spy="affix" data-offset-top="200">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title hidden-xs"> Add Team </span>
                            </div>

                            <div class="panel-body pn">
                                <div class="table-responsive">
                                    <div class="panel-body p25 pb10">

                                        @if(Session::has('flash_message'))
                                            <div class="alert alert-success">
                                                {{ Session::get('flash_message') }}
                                            </div>
                                        @endif
                                        {{--<form class="form-horizontal" role="form">--}}
                                            {!! Form::open(['class' => 'form-horizontal']) !!}
                                            <div class="form-group">
                                                <label class="col-md-3 control-label"> Team Name </label>
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="name of team..." name="team_name"
                                                           id="input002" class="select2-single form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label"> Select Team Manager</label>
                                                <div class="col-md-6">
                                                    <select class="select2-single form-control" data-live-search="true"
                                                            name="manager_id">
                                                        <option value="" selected>Select One</option>
                                                        @foreach($managers as $manager)
                                                            <option value="{{$manager->id}}">{{$manager->emp_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label"> Select Team Leader</label>
                                                <div class="col-md-6">
                                                    <select class="select2-single form-control" data-live-search="true"
                                                            name="leader_id">
                                                        <option value="" selected>Select One</option>
                                                        @foreach($leaders as $leader)
                                                            <option value="{{$leader->id}}">{{$leader->emp_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label"> Select Team Members </label>
                                                <div class="col-md-6">
                                                    <select class="select2-multiple form-control select-primary"
                                                            multiple="multiple" name="member_id[]">
                                                        <option value="" selected>Select One</option>
                                                        @foreach($emps as $emp)
                                                            <option value="{{$emp->id}}">{{$emp->emp_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label"></label>
                                                <div class="col-md-2">
                                                    <div class="mb20">
                                                        <br/>
                                                        <input type="submit" class="btn btn-bordered btn-info btn-block" value="Submit">
                                                    </div>
                                                </div>
                                            </div>
                                        {!! Form::close() !!}
                                        {{--</form>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>

</div>
@endsection
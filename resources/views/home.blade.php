@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div class="panel-body">
                    <button class="alert alert-info" id="add_schedule">新增行程</button>
                </div>
                <div id="schedule_list">
                </div>
                <div class="panel-body">
                    <button class="alert alert-info" id="add_schedule_card">新增行程卡片</button>
                </div>
                <div id="schedule_card_list">
                </div>
                <div id="store_card_list">
                </div>
                <div class="panel-body">
                    <button class="alert alert-info" id="add_store_card">新增收藏卡片</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

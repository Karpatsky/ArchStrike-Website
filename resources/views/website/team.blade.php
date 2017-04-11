@extends('main')

@section('page')
    <div class="container page-container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Team</h1>
            </div>
        </div>

        <div class="row team-list">
            @foreach([ 'xorond', 'cthulu201', 'prurigro', 'd1rt', 'wh1t3fox' ] as $member)
                <div class="col-xs-12 col-sm-6 col-md-4 column">
                    <div class="member-row">
                        <div class="profile-picture" style="background-image: url(/img/team/{{ $member }}.jpg)"></div>
                        <div class="profile-info">@include("markdown.team.$member")</div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-xs-12">
                <h2>Former Team Members</h2>
            </div>
        </div>

        <div class="row team-list">
            @foreach([ 'arch3y' ] as $member)
                <div class="col-xs-12 col-sm-6 col-md-4 column">
                    <div class="member-row">
                        <div class="profile-picture" style="background-image: url(/img/team/{{ $member }}.jpg)"></div>
                        <div class="profile-info">@include("markdown.team.$member")</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

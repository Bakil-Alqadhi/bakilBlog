@extends('back.layouts.pages-layout')

@section('content')
    @livewire('author-profile-header')
    <div class="row">
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
                    <li class="nav-item">
                        <a href="#tabs-home-ex1" class="nav-link active" data-bs-toggle="tab">Personal Details</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tabs-profile-ex1" class="nav-link" data-bs-toggle="tab">Change Password</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active show" id="tabs-home-ex1">
                        <div>
                            @livewire('author-personal-details')
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-profile-ex1">
                        @livewire('author-change-password-form')
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@extends('layouts.app')

@section('title', 'User Toggle')

@section('main-content')
@if ($isUpdatingProfile ?? false)
    @include('contents.user-toggle.update-profile')
@elseif($isUpdatingPassword ?? false)
    @include('contents.user-toggle.update-password')    
@elseif($isUpdatingProfilePicture ?? false)
    @include('contents.user-toggle.update-profile-picture')
@endif
@endsection
@extends('layout')

@section('page-title', 'Admin Dashboard');
@section('page-content')
<div class="d-flex justify-content-center align-items-center">
    <div class="row">
        <div class="col">
            <button class="border-0" style="background-color: rgba(4, 176, 0, 0.2); padding:2rem; width:12rem; height:12rem; border-radius:2rem;">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" style="fill: rgba(4, 176, 0, 1);transform: ;msFilter:;"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path></svg>
                <span><p style="color: #04B000; font-weight: bold; font-size: 1.4rem;" class="">PWD Users</p></span>
            </button>
        </div>
        <div class="col">
            <button class="border-0" style="background-color: rgba(4, 176, 0, 0.2); padding:2rem; width:12rem; height:12rem; border-radius:2rem;">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" style="fill: rgba(4, 176, 0, 1);transform: ;msFilter:;"><path d="M21 10h-2V4h1V2H4v2h1v6H3a1 1 0 0 0-1 1v9h20v-9a1 1 0 0 0-1-1zm-7 8v-4h-4v4H7V4h10v14h-3z"></path><path d="M9 6h2v2H9zm4 0h2v2h-2zm-4 4h2v2H9zm4 0h2v2h-2z"></path></svg><p style="color: #04B000; font-weight: bold; font-size: 1.4rem;" class="">Training Agencies</p></span>
            </button>
        </div>
        <div class="col">
            <button class="border-0" style="background-color: rgba(4, 176, 0, 0.2); padding:2rem; width:12rem; height:12rem; border-radius:2rem;">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" style="fill: rgba(4, 176, 0, 1);transform: ;msFilter:;"><path d="M20 6h-3V4c0-1.103-.897-2-2-2H9c-1.103 0-2 .897-2 2v2H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2zm-5-2v2H9V4h6zM8 8h12v3H4V8h4zM4 19v-6h6v2h4v-2h6l.001 6H4z"></path></svg><p style="color: #04B000; font-weight: bold; font-size: 1.4rem;" class="">Companies</p></span>
            </button>
        </div>
    </div>

</div>
@endsection




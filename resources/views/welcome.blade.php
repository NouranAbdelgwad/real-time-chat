@extends('layouts.layout')
@section('title', 'welcome')


@section('content')
<div class="page-container">
    <div class="navbar-col">
        <img src="{{asset('assets/images/logo-no-background.png')}}" class="nav-logo" alt="">
        <div class="nav-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105"/>
            </svg>
            <h6>All chats</h6>
        </div>
        <div class="nav-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
            </svg>
            <h6>Profile</h6>
        </div>
    </div>
    <div class="search-place">
            <form action="" method="GET" class="search-form">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                </svg>
                <input type="text" class="search-input">
            </form>
            <div class="person-chat row">
                <div class="person-image col-3">
                    <img src="{{asset('assets/images/person-img.jpg')}}" alt="person-img" class="person-img">
                </div>
                <div class="person-details col-9">
                    <div class="d-flex justify-content-between">
                        <h6>Alia Saleh</h6>
                        <p class="text-secondary">10:44 AM</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="msg-txt" >could you send the file please??</p>
                        <span class="msg-no" >1</span>
                    </div>
                </div>
            </div>
            <div class="person-chat row">
                <div class="person-image col-3">
                    <img src="{{asset('assets/images/person-img.jpg')}}" alt="person-img" class="person-img">
                </div>
                <div class="person-details col-9">
                    <div class="d-flex justify-content-between">
                        <h6>Nader Saif</h6>
                        <p class="text-secondary">10:44 AM</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="text-success" >You: </p>
                        <p class="msg-txt" > could you send the file please??</p>
                    </div>
                </div>
            </div>
        </div>
    <div class="chat-place">
        <div class="row justify-content-between">
            <h3>Alia Saleh</h3>
            <div class="icons">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                </svg>
            </div>
        </div>
    </div>
    <div class="info-col">
        <div class="group-info" >info</div>
        <div class="group-members">members</div>
    </div>
</div>
@endsection

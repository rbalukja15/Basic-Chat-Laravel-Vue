@extends('layouts.app')

@section('content')
  <nav class="navbar navbar-expand-sm bg-light">
    <h1>Chat Room</h1>
  </nav>
  <div class="container">
    <div class="row justify-content-center">
      <div id="app">
        <h1>ChatRoom</h1>
      <span class="badge pull-right"> @{{ usersInRoom.length }} </span>
        {{-- <chat-message></chat-message> --}}
        <chat-log :messages="messages"></chat-log>
        <chat-composer v-on:messagesent="addMessage"></chat-composer>
      </div>
    </div>
  </div>
  {{-- <script src="js/app.js" charset="utf-8"></script> --}}
@endsection
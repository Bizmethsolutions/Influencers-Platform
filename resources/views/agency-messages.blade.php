@extends('layout.agencymaster')
@section('content')

<style type="text/css">
  #chat-window{
    background-color: #f4f4f4;
  }
  .chat-box .chat-right-aside .chat .chat-header {
      padding: 15px;
      border-bottom: 1px solid #f4f4f4;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: left;
  }
  .own-message{
    width: 49%;
    margin-left: 49%;
    margin-bottom: 10px;
    background-color: #06A3CE;
    color: #fff;
    border: 1px solid #fff;
    border-radius: 10px;
    border-top-right-radius: 0;
  }
  .own-message .message-username,.own-message .message-body,.own-message .message-date{
    color: #fff;
  }
  .another-message{
    width: 49%;
    margin-right: 49%;
    margin-bottom: 10px;
    background-color: #fff;
    border: 1px solid #f6f6f6;
    border-radius: 10px;
    border-top-left-radius: 0;

  }
  
  .another-message .message-info-row .message-username{
    margin-left: 0px;
  }
  .another-message .message-info-row div.col-md-8{
    width: 100%;
    margin-left: 0px;
    order: 2;
  }
  .another-message .message-info-row div.col-md-4{
    width: 100%;
    text-align: left;
    order: 1;
  }
  .another-message .message-content-row .col-md-12{
    padding-left: 0px;
  }
</style>
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h3><a href="{{ url('agency/chat') }}">Back To List</a></h3>
          </div>
          
        </div>
      </div>
    </div>

    <!-- Container-fluid starts-->
    <!-- <div id="container" class="row">
        <div id="channel-panel" class="col-md-offset-2 col-md-2">
          <div id="channel-list" class="row not-showing"></div>
          <div id="new-channel-input-row" class="row not-showing">
            <textarea placeholder="Type channel name" id="new-channel-input" rows="1" maxlength="20" class="channel-element"></textarea>
          </div>
          <div class="row">
            <img id="add-channel-image" src="{{ asset('img/add-channel-image.png') }}"/>
          </div>
        </div>
    </div> -->
    <div class="container-fluid">
      
      <div id="container" class="row">
        <div id="channel-panel" class="col-md-offset-2 col-md-2" style="display: none;">
          <div id="channel-list" class="row not-showing"></div>
          <div id="new-channel-input-row" class="row not-showing">
            <textarea placeholder="Type channel name" id="new-channel-input" rows="1" maxlength="20" class="channel-element"></textarea>
          </div>
        </div>
        <div id="chat-window" class="col-md-12">
          <div id="message-list" class="row disconnected"></div>
          <div id="typing-row" class="row disconnected">
            <p id="typing-placeholder"></p>
          </div>
          <div id="input-div" class="row">
            <textarea id="input-text" disabled="true" placeholder="   Your message"></textarea>
          </div>
          <div id="connect-panel" class="disconnected row with-shadow">
            
          </div>
        </div>
      </div>
    </div>
    <!-- HTML Templates -->
    <script type="text/html" id="message-template">
      
      <div class="row no-margin">
        <div class="row no-margin message-info-row" style="">
          <div class="col-md-8 left-align"><p data-content="username" class="message-username"></p></div>
          <div class="col-md-4 right-align"><span data-content="date" class="message-date"></span></div>
        </div>
        <div class="row no-margin message-content-row">
          <div style="" class="col-md-12"><p data-content="body" class="message-body"></p></div>
        </div>
      </div>
    </script>
    <script type="text/html" id="channel-template">
      <div class="col-md-12">
        <p class="channel-element" data-content="channelName"></p>
      </div>
    </script>
    <script type="text/html" id="member-notification-template">
      <p class="member-status" data-content="status"></p>
    </script>
    
    <!-- Container-fluid Ends-->
    <input id="channelname" type="hidden"  value="{{ $chat }}" />
    <input id="username-input" type="hidden" value="{{ session()->get('name') }}" />
    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
    <img id="connect-image" src="{{ asset('img/connect-image.png') }}" style="width: 0.5px;height: 0.5px;" />
    <!-- <button id="connect-image">Connect</button> -->
<script>
    window.onload=function(){
      console.log("Log 1");
      $("#connect-image").click();
      console.log("Log 2");  
    }

</script>
  
@endsection

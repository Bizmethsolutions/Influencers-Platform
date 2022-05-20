@extends('layout.brandmaster')
@section('content')

<style type="text/css">
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
</style>
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h3>Chat App</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html" data-bs-original-title="" title="">                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
              <li class="breadcrumb-item">Chat</li>
              <li class="breadcrumb-item active"> Chat App</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
      <div class="container-fluid">
        <div class="row">
          <div class="col call-chat-sidebar col-sm-12">
            <div class="card">
              <div class="card-body chat-body">
                <div class="chat-box">
                  <!-- Chat left side Start-->
                  <div class="chat-left-aside">
                  
                    <ul class="list">
                      @foreach($users as $user)
                      <li class="clearfix" style="margin-bottom: 15px;" >
                            <img class="rounded-circle user-image" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" alt="" >
                            <div class="about">
                              <div class="name">{{ $user->name }}</div>
                              <div class="status">
                                {{ $user->location }}
                                <form method="post" action="{{ url('brand/create-channel')}}">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  <input type="hidden" name="channame" value="chat{{ session()->get('id') }}{{ $user->id }}">
                                  <input type="hidden" name="username" value="{{ session()->get('name') }}">
                                  <input type="hidden" name="email" value="{{ session()->get('name') }}">
                                  <input type="hidden" name="email_user" value="{{ $user->name }}">
                                  <button type="submit" style="border: none;background: #fff;"><i class="fa fa-arrow-circle-right"></i></button>
                                </form>
                              </div>
                            </div>
                      </li>
                      @endforeach
                    </ul>
                  </div>
                </div>
                <!-- Chat left side Ends-->
              </div>
            </div>
          </div>
          <div class="col call-chat-sidebar col-sm-12">
            <div class="card">
              <div class="card-body chat-body">
                <div class="chat-box">
                  <!-- Chat left side Start-->
                  <div class="chat-left-aside">
                  
                    <ul class="list">
                      @foreach($agency as $user)
                      <li class="clearfix" style="margin-bottom: 15px;" >
                        <!-- <a href="javascript:void(0)" onclick="return createchannels('chat{{ session()->get('id') }}{{ $user->id }}','{{ session()->get('name') }}');"> -->
                          
                            <img class="rounded-circle user-image" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" alt="" >
                            <!-- <div class="status-circle away"></div> -->
                            <div class="about">
                              <div class="name">{{ $user->name }}</div>
                              <div class="status">
                                {{ $user->city }}
                                <form method="post" action="{{ url('brand/create-channel')}}">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  <input type="hidden" name="channame" value="agencybrand{{ session()->get('id') }}{{ $user->id }}">
                                  <input type="hidden" name="username" value="{{ session()->get('name') }}">
                                  <input type="hidden" name="email" value="{{ session()->get('name') }}">
                                  <input type="hidden" name="email_user" value="{{ $user->name }}">
                                  <button type="submit" style="border: none;background: #fff;"><i class="fa fa-arrow-circle-right"></i></button>
                                </form>
                              </div>
                            </div>
                          
                      </li>
                      @endforeach
                    </ul>
                  </div>
                </div>
                <!-- Chat left side Ends-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
  
@endsection

@extends("layouts.app")
@section('title', "Welcome to Probo")
@section("styles")
    @parent
@endsection
@section('content')
    <div class="welcome-box">
        <h1 class="welcome-title">Probo</h1>
        <hr class="welcome-hr">
        <h2 class="welcome-subtitle">Project Boards & Management</h2>
    </div>
    <div class="login-wrapper">
        <h2 class="login-row" id="title">Login</h2>
        @if($errors->isNotEmpty())
            <h2 class="login-row" id="error-help">ERROR</h2>
        @endif
        <div class="login-row" id="form-wrapper">
            <form method="post" action="{{route('login')}}" id="login-form" novalidate>
                <input type="text" class="login-input @if($errors->has('email')) has-error @endif" name="email"
                       id="email" placeholder="E.g. Jim@probo.io">
                <label for="email" class="login-input-label">E-Mail</label>
                <input type="password" class="login-input @if($errors->has('password')) has-error @endif"
                       name="password" id="password">
                <label for="password" class="login-input-label">Password</label>
                <input class="login-input-label" value="Don't Remember Me" name="remember" id="remember"
                       title="Click to Toggle" contenteditable="false" autocomplete="off" readonly="readonly" onfocus="this.blur();" >
                <button type="submit" class="login-submit">Login</button>
            </form>
        </div>
    </div>
    @php
        Debugbar::error($errors);
    @endphp
@endsection
@section('scripts')
    @parent
@endsection
<!DOCTYPE html>
<html>
  <head>
    <title>Welcome Email</title>
  </head>
  <body>
    {{__('Hi') }} 
    <strong>{{ $name }}</strong>,<br />

    {{__('Welcome to the Foodnas.') }} 
    <p>{{__('Please click on the below link to verify your email account.') }}</p>

    <br/>
    <br/>
    <a href="{{url('user/verify',$token)}}">{{__('Verify Signup Email') }}</a>

  </body>
</html>
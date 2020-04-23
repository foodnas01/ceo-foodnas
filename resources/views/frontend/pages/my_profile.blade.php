<div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{ __('Name') }}</label>
                                                <input class="form-control" value="{{$user->name}}" type="text" id="name" name="name">
                                            </div>
                                        </div>

                                        <!--  <div class="container">
    <div class='col-md-5'>
        <div class="form-group">
            <div class='input-group date' id='datetimepicker6'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class='col-md-5'>
        <div class="form-group">
            <div class='input-group date' id='datetimepicker7'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
</div>
 -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{ __('Email') }}</label>
                                                <input class="form-control"  readonly value="{{$user->email}}" type="text" id="email" name="email">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{ __('Password') }}</label>
                                                <input class="form-control" type="password" id="password" name="password">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{ __('Confirm Password') }}</label>
                                                <input class="form-control" type="password" id="password_confirmation" name="password_confirmation">
                                            </div>
                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">{{ __('Image') }}</label>
                                                <input type="file" name="user_image" class="form-control-file" id="exampleFormControlFile1">
                                            </div>

                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label> {{ __('Gender') }} </label>
                                                </div>
                                                <div class="col-md-6" style="display: inline-flex;padding-right: 20px;padding-top: 20px;">

                                                    <input type="radio"  {{ ($user->gender  == 'male') ? 'checked' : '' }}  id="male" name="gender" value="male" style="margin-top: 5px;
">
                                                    <label for="male" style="
    padding-right: 20px;
    padding-left: 20px;
">{{ __('Male') }}</label>
                                                    <br>
                                                    <input type="radio" id="female" {{ ($user->gender  == 'female') ? 'checked' : '' }} name="gender" value="female" style="
    margin-top: 5px;
">
                                                    <label for="female" style="
    padding-right: 20px;
    padding-left: 20px;
">{{ __('Female') }}</label>
                                                    <br>
                                                    <input type="radio" {{ ($user->gender  == 'other') ? 'checked' : '' }} id="other" name="gender" value="other" style="
    margin-top: 5px;
">
                                                    <label for="other" style="
    padding-right: 20px;
">{{ __('Other') }}</label>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{ __('Phone') }}</label>
                                                <input class="form-control" value="{{$user->phone_no}}" type="text" id="phone_contact" name="phone_contact">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input class="form-control" value="{{$user->dob}}" name="dob" type="date" data-date-inline-picker="false" data-date-popover='{"inline": true}' />
                                            </div>
                                        </div>

                                    </div>
<div class="content_holder">
    <form class="changePasswordForm" name="changePasswordForm" id="changePasswordForm">
        <div class="sm_container">
            <div class="form_holder add">
                <h2 class="tr" key="dl-h2">Change Your Password</h2>
                <div class="MSG"></div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="row">
                            <div class="col-xs-12 column">
                                <div class="field_wrap">
                                    <input type="email" name="email" id="email" value="{{$userData->email}}"
                                           class="form-control" placeholder="Email"  @if(!empty( $userData->email ))disabled="" @endif  >
                                </div>
                            </div>
                        </div>
                        <div class="row hide">
                            <div class="col-xs-12 column">
                                <div class="field_wrap">
                                    <input type="password" name="old_password" placeholder="Password"
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 column">
                                <div class="field_wrap">
                                    <input type="password" name="new_password" placeholder="New Password"
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 column">
                                <div class="field_wrap">
                                    <input type="password" name="passconf" placeholder="Retype New Password"
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn_center">
                    <input type="submit" class="btn" value="Save">
                </div>
            </div>
        </div>
    </form>
</div>

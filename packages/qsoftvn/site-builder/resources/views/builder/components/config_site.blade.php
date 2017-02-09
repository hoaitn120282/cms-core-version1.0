<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title"><strong>Configure site</strong></h2>
    </div><!-- /.panel-heading -->
    <div class="panel-body">
        <fieldset class="fieldgroup fieldset-siteinfo">
            <legend class="text-primary">Site information</legend>
            <div class="fieldset-wrap">
                <div class="form-group">
                    <label for="site[info][name]">
                        Site name
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" id="site[info][name]"
                           class="form-control site-info-name"
                           name="site[info][name]"
                           value="{{$node->site_name or null}}">
                </div><!-- /.site-name -->

                <div class="form-group">
                    <label for="site[info][email]">
                        Site email address
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" id="site[info][email]"
                           class="form-control db-username"
                           name="site[info][email]"
                           value="{{$node->site_email or null}}">
                    <p class="text-help">
                        Automated emails, such as registration information, will be sent from this address. Use an
                        address ending in your site's domain to help prevent these emails from being flagged as spam.
                    </p>
                </div><!-- /.site-email -->
            </div>
        </fieldset><!-- /.fieldset-siteinfo -->
        <br>
        <fieldset class="fieldgroup fieldset-siteaccount">
            <legend class="text-primary">Site maintenance account</legend>
            <div class="fieldset-wrap">
                <div class="form-group">
                    <label for="site[account][username]">
                        Username
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" id="site[account][username]"
                           class="form-control site-username"
                           name="site[account][username]"
                           value="{{$node->site_username or null}}">
                    <p class="text-help">
                        Several special characters are allowed, including space, period (.), hyphen (-), apostrophe ('),
                        underscore (_), and the @ sign.
                    </p>
                </div><!-- /.site-username -->

                <div class="form-group">
                    <label for="site[account][password]">
                        Password
                        <span class="text-danger">*</span>
                    </label>
                    <input type="password" id="site[account][password]"
                           class="form-control site-account-password"
                           name="site[account][password]"
                           value="{{$node->site_password or null}}">
                </div><!-- /.site-password -->

                <div class="form-group">
                    <label for="site[account][password_confirmation]">
                        Confirm password
                        <span class="text-danger">*</span>
                    </label>
                    <input type="password" id="site[account][password_confirmation]"
                           class="form-control site-account-password_confirmation]"
                           name="site[account][password_confirmation]"
                           value="{{ old('site[account][password_confirmation]') }}">
                </div><!-- /.site-account-password_confirmation -->

                <div class="form-group">
                    <label for="site[account][email]">
                        Email address
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" id="site[account][email]"
                           class="form-control site-account-email"
                           name="site[account][email]"
                           value="{{$node->site_username or null}}">
                </div><!-- /.site-account-email -->
            </div>
        </fieldset><!-- /.fieldset-siteaccount -->

    </div><!-- /.panel-body -->
    <div class="panel-footer clearfix">
        <div class="form-actions pull-right">
            <button type="submit" class="form-action btn btn-primary">
                <i class="fa fa-floppy-o" aria-hidden="true"></i>
                Save and continue
            </button>
        </div>
    </div><!-- .panel-footer -->
</div><!-- /.panel-setup-datable -->
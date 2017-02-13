<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title"><strong>FTP configuration</strong></h2>
    </div><!-- /.panel-heading -->
    <div class="panel-body">
        <div class="form-group">
            <label for="ftp[host]">
                Host
                <span class="text-danger">*</span>
            </label>
            <input type="text" id="ftp[host]"
                   class="form-control ftp-host"
                   name="ftp[host]"
                   value="{{$node->ftp->host or 'http://localhost'}}">
        </div><!-- /.ftp-host -->

        <div class="form-group">
            <label for="ftp[port]">
                Port
            </label>
            <input type="text" id="ftp[port]"
                   class="form-control ftp-port"
                   name="ftp[port]"
                   value="{{$node->ftp->port or 21}}">
        </div><!-- /.ftp-host -->

        <div class="form-group">
            <label for="ftp[username]">
                Username
                <span class="text-danger">*</span>
            </label>
            <input type="text" id="ftp[username]"
                   class="form-control ftp-username"
                   name="ftp[username]"
                   value="{{$node->ftp->username or null}}">
        </div><!-- /.ftp-username -->

        <div class="form-group">
            <label for="ftp[password]">
                Password
                <span class="text-danger">*</span>
            </label>
            <input type="password" id="ftp[password]"
                   class="form-control ftp-password"
                   name="ftp[password]"
                   value="{{$node->ftp->password or null}}">
        </div><!-- /.ftp-password -->
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
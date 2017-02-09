<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title"><strong>FTP configuration</strong></h2>
    </div><!-- /.panel-heading -->
    <div class="panel-body">
        <div class="form-group">
            <label for="fpt[host]">
                Host
                <span class="text-danger">*</span>
            </label>
            <input type="text" id="fpt[host]"
                   class="form-control fpt-host"
                   name="fpt[host]"
                   value="{{$node->fpt->host or 'http://localhost'}}">
        </div><!-- /.fpt-host -->

        <div class="form-group">
            <label for="fpt[port]">
                Host
            </label>
            <input type="text" id="fpt[port]"
                   class="form-control fpt-port"
                   name="fpt[port]"
                   value="{{$node->fpt->port or 21}}">
        </div><!-- /.fpt-host -->

        <div class="form-group">
            <label for="fpt[username]">
                Username
                <span class="text-danger">*</span>
            </label>
            <input type="text" id="fpt[username]"
                   class="form-control fpt-username"
                   name="fpt[username]"
                   value="{{$node->fpt->username or null}}">
        </div><!-- /.fpt-username -->

        <div class="form-group">
            <label for="fpt[password]">
                Password
            </label>
            <input type="password" id="fpt[password]"
                   class="form-control fpt-password"
                   name="fpt[password]"
                   value="{{$node->fpt->password or null}}">
        </div><!-- /.fpt-password -->
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
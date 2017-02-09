<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title"><strong>Database configuration</strong></h2>
    </div><!-- /.panel-heading -->
    <div class="panel-body">
        <fieldset class="fieldgroup fieldset-basic">
            <div class="fieldset-wrap">
                <div class="form-group">
                    <label for="db[name]">
                        Database name
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" id="db[name]"
                           class="form-control db-name"
                           name="db[name]"
                           value="{{$node->db->name or null}}">
                </div><!-- /.db-name -->

                <div class="form-group">
                    <label for="db[username]">
                        Database username
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" id="db[username]"
                           class="form-control db-username"
                           name="db[username]"
                           value="{{$node->db->username or null}}">
                </div><!-- /.db-username -->

                <div class="form-group">
                    <label for="db[password]">
                        Database password
                    </label>
                    <input type="password" id="db[password]"
                           class="form-control db-password"
                           name="db[password]"
                           value="{{$node->db->password or null}}">
                </div><!-- /.db-password -->
            </div>
        </fieldset><!-- /.fieldset-configure-basic -->
        <br>
        <fieldset class="fieldgroup fieldset-advance">
            <legend>
                <a role="button" class="text-primary"
                   href="#advance_options"
                   data-toggle="collapse"
                   aria-expanded="false"
                   aria-controls="advance_options">
                    Advance options
                    <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                </a>
            </legend>
            <div class="collapse" id="advance_options">
                <div class="form-group">
                    <label for="db[host]">
                        Host
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" id="db[host]"
                           class="form-control db-host"
                           name="db[host]"
                           value="{{$node->db->host or 'http://localhost'}}"
                           placeholder="http://localhost">
                </div><!-- /.db-host -->

                <div class="form-group">
                    <label for="db[port]">
                        Port
                    </label>
                    <input type="text" id="db[port]"
                           class="form-control db-port"
                           name="db[port]"
                           value="{{$node->db->port or '3306'}}"
                           placeholder="3306">
                </div><!-- /.db-port -->

                <div class="form-group">
                    <label for="db[tb_prefix]">
                        Table prefix
                    </label>
                    <input type="text" id="db[tb_prefix]"
                           class="form-control db-tb-prefix"
                           name="db[tb_prefix]"
                           value="{{$node->db->tb_prefix or null}}">
                </div><!-- /.db-tb-prefix -->
            </div>
        </fieldset><!-- /.fieldset-configure-advance -->

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
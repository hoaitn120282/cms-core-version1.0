<div class="panel panel-default panel-theme">
    <div class="panel-heading">
        <h2 class="panel-title"><strong>Choose theme</strong></h2>
    </div><!-- /.panel-heading -->
    <div class="panel-body">
        @foreach($themes as $value)
            <div class="col-md-3">
                <div class="thumbnail theme-item">
                    <input type="checkbox"
                           id="theme[{{$value->id}}]"
                           name="theme[{{$value->id}}]"
                           value="{{$value->id}}">
                    <label for="theme[{{$value->id}}]" class="x_checkbox">
                        <div class="image view-{{$value->id}}">
                            <img style="width: 100%; display: block;"
                                 src="{{ url('/themes/'.$value->name) }}/images/{{ $value->image_preview }}"
                                 alt="image">
                        </div>
                        <div class="caption"><strong>{{ $value->name }}</strong></div>
                    </label>
                </div>
            </div>
        @endforeach
    </div>
</div>

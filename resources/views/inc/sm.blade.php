@if( Session::has('sm') )
<div class="row sm-box">
    <div class="col-md-12">
        <div class="alert alert-success" role="alert">
            <p>{{ Session::get('sm') }}</p>
        </div>
    </div>
</div>
@endif
@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Dashboard</div>

          <form method="post" action="">
            <div class="card-body">
              <div>
                <ul>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input name="res[name]" value="{{ $user->name }}" />
                    </div>

                    <br class="clear" />
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input name="res[email]" value="{{ $user->email }}" />
                    </div>

                    <br class="clear" />
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Text</label>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <textarea name="res[text]">{{ $user->text }}</textarea>
                    </div>

                    <br class="clear" />
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <textarea name="res[description]">{{ $user->description }}</textarea>
                    </div>

                    <br class="clear" />
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Colors</label>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input name="res[colors]" value="{{ $user->colors }}" />
                    </div>

                    <br class="clear" />
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Abilities</label>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input name="res[abilities]" value="{{ $user->abilities }}" />
                    </div>

                    <br class="clear" />
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Points</label>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="number" name="res[points]" value="{{ $user->points }}" />
                    </div>

                    <br class="clear" />
                  </div>

                  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                </ul>
              </div>
            </div>

            <div class="form-group text-right" style="padding: 15px">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

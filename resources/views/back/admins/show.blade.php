<div>
    <div class="row">
        <div class="col-md-4" id="image">
            <div class="panel-body">
                <a class="spotlight" href="{{ url('back/images/admins/'.$find['image']) }}">
                    <img src="{{ url('back/images/admins/'.$find['image']) }}" style="width:200px;height: 230px;margin:100px auto;border-radius:2px;">
                </a>
            </div>
        </div>

        <div class="col-md-8" id="content">
            <div class="col-md-6">
                <div id="id_pr">
                    <strong>{{ trans('app.id') }}</strong>
                    : <span style="color:#042a4a;">{{ $find->admin_name['id'] }}</span>
                </div>
                <hr>
                <div id="name_pr">
                    <strong>{{ trans('app.name') }}</strong>
                    : <span style="color:#042a4a;">{{ $find->admin_name['name'] }}</span>
                </div>
                <hr>
                <div id="email_pr">
                    <strong>{{ trans('app.email') }}</strong>
                    : <span style="color:#042a4a;">{{ $find->admin_name['email'] }}</span>
                </div>
                <hr>
                <div id="mobile_pr">
                    <strong>{{ trans('app.phone') }}</strong>
                    : <span style="color:#042a4a;">{{ $find->admin_name['user_phone'] }}</span>
                </div>
                <hr>
                <div id="national_id_pr">
                    <strong>{{ trans('app.birth_date') }}</strong>
                    : <span style="color:#042a4a;">{{ $find['birth_date'] }}</span>
                </div>
                <hr>
                <div id="nat_id">
                    <strong>{{ trans('app.nat_id') }}</strong>
                    : <span style="color:#042a4a;">{{ $find['nat_id'] }}</span>
                </div>
                <hr>
            </div>
            <div class="col-md-6">
                <div id="department_pr">
                    <strong>{{ trans('app.role') }}</strong>
                    : <span style="color:#042a4a;">{{ $find->admin_name['role'] }}</span>
                </div>
                <hr>
                <div id="gender_pr">
                    <strong>{{ trans('app.gender') }}</strong>
                    : <span style="color:#042a4a;">{{ $find['gender'] == 1 ? trans('app.male') : trans('app.female') }}</span>
                </div>
                <hr>
                <div id="status_pr">
                    <strong>{{ trans('app.status') }}</strong>
                    : <span style="color:#042a4a;">{{ $find['status'] == 1 ? trans('app.active') : trans('app.not_active') }}</span>
                </div>
                <hr>
                <div id="address_pr">
                    <strong>{{ trans('app.address') }}</strong>
                    : <span style="color:#042a4a;">{{ $find['address'] }}</span>
                </div>
                <hr>
                <div id="last_login_time">
                    <strong>{{ trans('app.last_login_time') }}</strong>
                    : <span style="color:#042a4a;">{{ $find->admin_name['last_login_time'] }}</span>
                </div>
                <hr>
                <div id="note">
                    <strong>{{ trans('app.notes') }}</strong>
                    : <span style="color:#042a4a;">{{ $find['note'] }}</span>
                </div>
                <hr>
            </div>
        </div>
    </div>

    {{-- <button class="btn btn-primary print_button" style="display: block;margin: 10px auto;">
        طباعه
        <i class="fa fa-print" style="font-size: 18px;margin: 0px 5px;"></i>
    </button> --}}
</div>

<script>
    $("#offcanvasWithBothOptions .offcanvas-title").text("@lang('app.show')").css("color", "#FFF");
    $("#offcanvasWithBothOptions .offcanvas-header").css("background", "rgb(119 210 215)");
</script>

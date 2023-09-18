@if (auth()->user()->role_relation->admins_create == 1 )
    <form class="" id="form" enctype="multipart/form-data">
        @csrf
            <div class="form_bordred_sections">
                <div class="form-group mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">{{ trans('app.name') }}</label>
                            <i class="fas fa-star require_input"></i>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-signature"></i></span>
                                <input type="text" class="form-control" placeholder="{{ trans('app.name') }}" id="name" name="name">
                            </div>
                            <bold class="text-danger" id="errors-name" style="display: none;"></bold>
                        </div>

                        <div class="col-md-6">
                            <label for="email">{{ trans('app.email') }}</label>
                            <i class="fas fa-star require_input"></i>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="{{ trans('app.email') }}" id="email" name="email">
                            </div>
                            <bold class="text-danger" id="errors-email" style="display: none;"></bold>
                        </div>

                    </div>
                </div>

                <div class="form-group mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="user_name">{{ trans('app.user_name') }}</label>
                            <i class="fas fa-star require_input"></i>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-signature"></i></span>
                                <input type="text" class="form-control" placeholder="@lang('app.Very important for logins')" id="user_name" name="user_name">
                            </div>
                            <bold class="text-danger" id="errors-user_name" style="display: none;"></bold>
                        </div>

                        <div class="col-md-6">
                            <label for="address">{{ trans('app.address') }}</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <input type="text" class="form-control" placeholder="{{ trans('app.address') }}" id="address" name="address">
                            </div>
                            <bold class="text-danger" id="errors-address" style="display: none;"></bold>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nat_id">{{ trans('app.nat_id') }}</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                <input type="number" class="form-control" placeholder="{{ trans('app.nat_id') }}" id="nat_id" name="nat_id">
                            </div>
                            <bold class="text-danger" id="errors-nat_id" style="display: none;"></bold>
                        </div>

                        <div class="col-md-6">
                            <label for="birth_date">{{ trans('app.birth_date') }}</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                <input type="date" class="form-control" id="birth_date" name="birth_date">
                            </div>
                            <bold class="text-danger" id="errors-birth_date" style="display: none;"></bold>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <label>{{ trans('app.status') }}</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-check"></i></span>
                                <select name="status"  class="form-control">
                                    <option value="1">{{ trans('app.active') }}</option>
                                    <option value="0">{{ trans('app.not_active') }}</option>
                                </select>
                            </div>
                            <bold class="text-danger" id="errors-status" style="display: none;"></bold>
                        </div>

                        <div class="col-md-3">
                            <label>{{ trans('app.gender') }}</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-genderless"></i></span>
                                <select name="gender"  class="form-control">
                                    <option value="1">{{ trans('app.male') }}</option>
                                    <option value="0">{{ trans('app.female') }}</option>
                                </select>
                            </div>
                            <bold class="text-danger" id="errors-gender" style="display: none;"></bold>
                        </div>

                        <div class="col-md-6">
                            <label>تراخيص المستخدم</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-user-secret"></i></span>
                                <select name="user_role"  class="form-control">
                                    <option value="">---</option>                                    
                                    @foreach ($permissions as $per)
                                        <option value="{{ $per->id }}">{{ $per->role_name }}</option>                                    
                                    @endforeach
                                </select>
                            </div>
                            <bold class="text-danger" id="errors-user_role" style="display: none;"></bold>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form_bordred_sections">
                <div class="form-group mb-3">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="phone">{{ trans('app.phone') }}</label>
                            <i class="fas fa-star require_input"></i>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                <input type="number" class="form-control" placeholder="@lang('app.Very important for logins')" id="phone" name="phone">
                            </div>
                            <bold class="text-danger" id="errors-phone" style="display: none;"></bold>
                        </div>

                        <div class="col-md-4">
                            <label for="password">{{ trans('app.password') }}</label>
                            <i class="fas fa-star require_input"></i>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                <input type="password" class="form-control" placeholder="@lang('app.Very important for logins')" id="password" name="password">
                            </div>
                            <bold class="text-danger" id="errors-password" style="display: none;"></bold>
                        </div>

                        <div class="col-md-4">
                            <label for="confirmed_password">{{ trans('app.confirmed_password') }}</label>
                            <i class="fas fa-star require_input"></i>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                <input type="password" class="form-control" placeholder="@lang('app.Very important for logins')" id="confirmed_password" name="confirmed_password">
                            </div>
                            <bold class="text-danger" id="errors-confirmed_password" style="display: none;"></bold>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form_bordred_sections">
                <div class="form-group mb-3">
                    <div class="">
                        <label for="note">{{ trans('app.notes') }}</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                            <input type="text" class="form-control form-control-lg" placeholder="@lang('app.notes')" id="note" name="note">
                        </div>
                        <bold class="text-danger" id="errors-note" style="display: none;"></bold>
                    </div>
                </div>
            </div>

            <div class="form_bordred_sections">
                <div class="custom-file-container" data-upload-id="file_upload">
                    <label style="color: #555;">{{ trans('app.image') }}
                        <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">
                            <i class="fa fa-trash-alt" style="color: rgb(221, 7, 7);font-size: 15px;position: relative;top: 3px;margin: 0px 15px 10px;"></i>
                        </a>
                    </label>
                    <label class="custom-file-container__custom-file" >
                        <input type="file" class="custom-file-container__custom-file__custom-file-input" name="image">
                        <input type="hidden" name="image_hidden" />
                        <span class="custom-file-container__custom-file__custom-file-control text-center"></span>
                    </label>
                    <div class="custom-file-container__image-preview"></div>
                </div>
            </div>

            <br />

            <button type="button" id="save" class="btn btn-secondary btn-rounded waves-effect waves-light mb-2 me-2" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="fas fa-times me-1"></i>
                @lang('app.close')
            </button>

            <button type="button" id="save" class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2">
                <i class="fas fa-save me-1"></i>
                @lang('app.save')
            </button>
    </form>
@else
    <h4 class="text-center" style="margin: 100px auto;">
        لاتمتلك الصلاحيات لرؤيه محتوي الصفحة
        <img src="{{ url('back/images/rej2.png') }}" style="width: 80px;height: 78px;position: relative;bottom: 7px;bo"/>
    </h4>
@endif

<script>
    $("#offcanvasWithBothOptions .offcanvas-title").text("@lang('app.add')").css("color", "#FFF");
    $("#offcanvasWithBothOptions .offcanvas-header").css("background", "#727bb7");

    $(document).ready(function(){
        $('.select2').select2({
            dropdownParent: $('#offcanvasWithBothOptions'),
        });

        var firstUpload = new FileUploadWithPreview('file_upload');
    });

    $("#offcanvasWithBothOptions #save").click(function(e){
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{url('admin/admins/store')}}",
            type: 'POST',
            processData: false,
            contentType: false,
            data: new FormData($('#offcanvasWithBothOptions #form')[0]),
            // data: $("#offcanvasWithBothOptions #form").serialize(),
            success: function(res){
                $("#offcanvasWithBothOptions").offcanvas('hide');
                $('#datatable').DataTable().ajax.reload( null, false );

                alertify.set('notifier','position', 'top-center');
                alertify.set('notifier','delay', 4);
                alertify.success("@lang('app.Completed Added Successfully')");

            },
            error: function(res){
                alertify.set('notifier','position', 'top-center');
                alertify.set('notifier','delay', 4);
                alertify.error("@lang('app.there is something wrong')");

                if(res.responseJSON.errors.name){
                    $("form #errors-name").css('display' , 'block').text(res.responseJSON.errors.name);
                }else{
                    $("form #errors-name").text('');
                }
                if(res.responseJSON.errors.user_name){
                    $("form #errors-user_name").css('display' , 'block').text(res.responseJSON.errors.user_name);
                }else{
                    $("form #errors-user_name").text('');
                }
                if(res.responseJSON.errors.phone){
                    $("form #errors-phone").css('display' , 'block').text(res.responseJSON.errors.phone);
                }else{
                    $("form #errors-phone").text('');
                }
                if(res.responseJSON.errors.password){
                    $("form #errors-password").css('display' , 'block').text(res.responseJSON.errors.password);
                }else{
                    $("form #errors-password").text('');
                }
                if(res.responseJSON.errors.confirmed_password){
                    $("form #errors-confirmed_password").css('display' , 'block').text(res.responseJSON.errors.confirmed_password);
                }else{
                    $("form #errors-confirmed_password").text('');
                }
                if(res.responseJSON.errors.nat_id){
                    $("form #errors-nat_id").css('display' , 'block').text(res.responseJSON.errors.nat_id);
                }else{
                    $("form #errors-nat_id").text('');
                }
                if(res.responseJSON.errors.email){
                    $("form #errors-email").css('display' , 'block').text(res.responseJSON.errors.email);
                }else{
                    $("form #errors-email").text('');
                }
            }
        });
    });


    ///////////////////////////////// Add By Button Enter /////////////////////////////////
    $("#form").keydown(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{url('admin/admins/store')}}",
                type: 'POST',
                processData: false,
                contentType: false,
                data: new FormData($('#offcanvasWithBothOptions #form')[0]),
                // data: $("#offcanvasWithBothOptions #form").serialize(),
                success: function(res){
                    $("#offcanvasWithBothOptions").offcanvas('hide');
                    $('#datatable').DataTable().ajax.reload( null, false );

                    alertify.set('notifier','position', 'top-center');
                    alertify.set('notifier','delay', 4);
                    alertify.success("@lang('app.Completed Added Successfully')");

                },
                error: function(res){
                    alertify.set('notifier','position', 'top-center');
                    alertify.set('notifier','delay', 4);
                    alertify.error("@lang('app.there is something wrong')");

                    if(res.responseJSON.errors.name){
                        $("form #errors-name").css('display' , 'block').text(res.responseJSON.errors.name);
                    }else{
                        $("form #errors-name").text('');
                    }
                    if(res.responseJSON.errors.user_name){
                        $("form #errors-user_name").css('display' , 'block').text(res.responseJSON.errors.user_name);
                    }else{
                        $("form #errors-user_name").text('');
                    }
                    if(res.responseJSON.errors.phone){
                        $("form #errors-phone").css('display' , 'block').text(res.responseJSON.errors.phone);
                    }else{
                        $("form #errors-phone").text('');
                    }
                    if(res.responseJSON.errors.password){
                        $("form #errors-password").css('display' , 'block').text(res.responseJSON.errors.password);
                    }else{
                        $("form #errors-password").text('');
                    }
                    if(res.responseJSON.errors.confirmed_password){
                        $("form #errors-confirmed_password").css('display' , 'block').text(res.responseJSON.errors.confirmed_password);
                    }else{
                        $("form #errors-confirmed_password").text('');
                    }
                    if(res.responseJSON.errors.nat_id){
                        $("form #errors-nat_id").css('display' , 'block').text(res.responseJSON.errors.nat_id);
                    }else{
                        $("form #errors-nat_id").text('');
                    }
                    if(res.responseJSON.errors.email){
                        $("form #errors-email").css('display' , 'block').text(res.responseJSON.errors.email);
                    }else{
                        $("form #errors-email").text('');
                    }
                }
            });
        }
    });
</script>

@extends('layouts.admin')

@section('title')
    Notice
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/jquery-nice-select/css/nice-select.css">
    <link href="{{ asset('assets') }}/vendor/datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
@endpush
@section('header')
    Notice 
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Notice Details</h4>
            </div>
            <div class="card-body">
                <form action="{{route('notice.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-6 col-sm-6">
                            <div class="mb-3">
                                <label for=" 8"
                                    class="form-label text-primary">Title<span
                                        class="required">*</span></label>
                                <input type="text" class="form-control" name="title" 
                                    placeholder="Title">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">To</label>
                                <input type="text" class="form-control" name="notice_to" placeholder="To">
                            </div>
    
                        </div>
    
                        <div class="col-xl-6 col-sm-6">
                            <div class="mb-3">
                                <label  class="form-label text-primary">Date</label>
                                <input type="date" name="notice_date" class="form-control" 
                                    placeholder="Create On">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label text-primary">Files</label>
                                <input class="form-control" name="noticefile" type="file" id="formFile">
                            </div> 
                        </div>
                        <div class="mb-12">
                            <label 
                                class="form-label text-primary">Description</label>
                                <textarea class="form-control" name="description" id="exampleFormControlTextarea2" rows="6"></textarea><br>
                        </div>
                        <div class="col-lg-12">
                            <button class="btn btn-primary w-100" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>      
        </div>
    </div>
@endsection
@push('js')
<script src="{{ asset('assets') }}/vendor/bootstrap-datetimepicker/js/moment.js"></script>
<script src="{{ asset('assets') }}/vendor/datepicker/js/bootstrap-datepicker.min.js"></script>
<script>
    $(function() {
        $("#datepicker").datepicker({
            autoclose: true,
            todayHighlight: true
        }).datepicker('update', new Date());

    });
</script>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });
    $('.remove-img').on('click', function() {
        var imageUrl = "images/no-img-avatar.png";
        $('.avatar-preview, #imagePreview').removeAttr('style');
        $('#imagePreview').css('background-image', 'url(' + imageUrl + ')');
    });

    $('#edu_btn').on('click', function() {
        $('edu_panel').removeClass('d-none');
    });

    //password matched
    $('.confirm_pass').on('keyup', function(){
        var pwd2 = $(this).val();
        var pwd1 = $('.pass').val();
        if(pwd1 == pwd2){
            $('#pass_check_msg').html(" Password Matched");
            $('#pass_check_msg').addClass('text-success');
            $('#pass_check_msg').removeClass('text-danger');

        }else{
            $('#pass_check_msg').html(" Password did not matched");
            $('#pass_check_msg').addClass('text-danger');
            $('#pass_check_msg').removeClass('text-success');
        }
    })

</script>
@endpush
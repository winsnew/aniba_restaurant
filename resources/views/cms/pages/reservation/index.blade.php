@extends('cms.layout.main')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Reservation</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{url('/admin/home')}}">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- Reservation #1 -->
            <div class="card">
                <div class="card-body">
                    <form id="form_reservation">
                        @csrf
                        <div class="row">
                            <div class="col-8 row">
                                <label class="col-form-label col-3">Reservation Link</label>
                                <div class="col">
                                    <input type="text" name="url" class="form-control" placeholder="URL" value="{{ $reservation? $reservation->url : 'http://www.sevenrooms.com/reservations/aniba' }}" readonly>
                                </div>
                            </div>
                            <div class="col-4">
                                <button type="button" class="btn btn-primary edit"><i class="fas fa-edit"></i> Edit</button>
                                <button type="button" class="btn btn-danger cancel d-none"><i class="fas fa-times"></i> Cancel</button>
                                <button type="submit" form="form_reservation" class="btn btn-primary submit d-none"><i class="fas fa-save"></i> Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script>
    
    // Enable edit
    $('#form_reservation .edit').click(function() {
        $('#form_reservation .cancel').removeClass('d-none')
        $('#form_reservation .submit').removeClass('d-none')
        $(this).addClass('d-none')

        $('#form_reservation input[name="url"]').attr('readonly', false)
    })

    // Cancel edit
    $('#form_reservation .cancel').click(function() {
        $('#form_reservation .edit').removeClass('d-none')
        $('#form_reservation .submit').addClass('d-none')
        $(this).addClass('d-none')

        $('#form_reservation input[name="url"]').attr('readonly', true)
        $('#form_reservation input[name="url"]').val("{{ $reservation? $reservation->url : 'http://www.sevenrooms.com/reservations/aniba' }}")
    })

    $('#form_reservation').submit(function(e) {
        e.preventDefault()

        var url = $(this).find('input[name="url"]').val()
        var token = $(this).find('input[name="_token"]').val()

        $.ajax({
            url: "{{ route('edit_reservation') }}",
            method: "POST",
            dataType: "JSON",
            cache: false,
            data: {
                "url": url,
                "_token": token
            },
            success: function(res) {
                Swal.fire({
                    type: 'success',
                    title: res.message
                }).then(function() {
                    window.location.reload()
                })
            }
        })
    })
</script>
@endpush
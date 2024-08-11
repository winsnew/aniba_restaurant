var CURRENT_URL = window.location.href;

$(document).ready(function() {
    localStorage.getItem('role') !== '10' && $('.only-admin').hide();
    $('.nav-link[href="'+ CURRENT_URL +'"]').addClass('active')

    $.ajaxSetup({
        beforeSend: function(xhr, settings) {
            $('#wrapper').prepend('<div id="loader"><i class="fas fa-2x fa-sync-alt fa-spin"></i></div>')
            settings.url = window.location.origin + '/api/v1' + settings.url
        },
        headers: {
            Accept: 'application/json',
            Authorization: 'Bearer ' + localStorage.getItem('token')
        },
        error: function(err) {
            let json = err.responseJSON;
			switch (err.status) {
                case 422:
					return Swal.fire({
						title: 'Error',
						text: json != null ? json.errors[Object.keys(json.errors)[0]] : 'Server Error',
						icon: 'error'
					});
				
				default:
                    Swal.fire('Server Error', 'status code: ' + err.status, 'error')
			}
        },
        complete: function() {
            $('#wrapper #loader').remove()
        }
    });

    $('.modal.reset-on-close').on('hidden.bs.modal', function() {
        $(this).find('form').trigger('reset');
    });

    $('.select2').select2();

    $("#logout").click(function() {
        Swal.fire({
            title: "Ready to Leave?",
            text: "Select 'Logout' below if you are ready to end your current session.",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            confirmButtonText: "Logout"
        }).then(result => {
            if (result.value) {
                $.getJSON('/logout')
                    .done(function(res) {
                        localStorage.removeItem('token');
                        window.location.href = '/login';
                    });
            }
        });
    });
});
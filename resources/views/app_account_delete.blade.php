<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://www.henryharvin.com/favicon.png" type="image/x-icon">

    <link rel="icon" type="image/png" sizes="16x16"
        href="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753077423favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="https://d1d5cy0fmpy9m8.cloudfront.net/images/175551018532.png">


    <title>Kazumi School - Delete Account</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f1f1f1;
            /* Light grey background */
        }

        .hidden {
            display: none;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
        }
    </style>
</head>

<body>

    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="w-100" style="max-width: 640px;">
            <div class="text-center mb-4">

                {{-- <h2><a href="https://play.google.com/store/apps/details?id=com.henryharvin.kazumischool">Kazumi Japanese School App </a></h2> --}}

                <div class="d-flex align-items-center justify-content-center gap-2">
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753077667android-chrome-192x192.png"
                        alt="App Logo" style="width: 60px; height: 60px;" />

                    <h2 class="mb-0 fs-10 fw-semibold text-center">
                        <a href="https://play.google.com/store/apps/details?id=com.henryharvin.kazumischool"
                        style="color: #e63946; text-decoration: none;"
                            class="text-primary text-decoration-none">
                            Kazumi Japanese School App
                        </a> 
                    </h2>
                </div>



                <br>

                <p>Please be advised that the deletion of your account and associated data is a permanent action. Once
                    your request is processed, all information linked to your account will be irretrievably removed from
                    our systems.</p>
                <h4>Request for Account Deletion</h4>
                <p>To initiate the process of deleting your account and the associated data stored in our system, please
                    submit a formal request. Upon receipt of your request, you will receive a One-Time Password (OTP)
                    for confirmation purposes.</p>
                <h5 class="text-danger">Note: Your request for account deletion will be fulfilled within 7 days.</h5>
            </div>

            <div class="card p-4 bg-white">
                <form method="POST" action="" id="mainForm">
                    @csrf
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                            required />
                    </div>
                    <div class="mb-3">
                        <textarea name="remark" id="remark" class="form-control" rows="4" placeholder="Remark" required></textarea>
                    </div>
                    <div class="mb-3 hidden" id="input_otp">
                        <input type="number" class="form-control" name="otp" id="otp" placeholder="Enter OTP"
                            required />
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-danger" id="btn_submit">Delete Account</button>
                        <button type="submit" class="btn btn-primary hidden" id="btn_verify">Verify</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS & jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#btn_submit').click(function(e) {
                e.preventDefault();

                let email = $('#email').val().trim();
                let remark = $('#remark').val().trim();

                if (email === '' || remark === '') {
                    alert('Please fill in both Email and Remark fields.');
                    return;
                }

                let formData = {
                    email: email,
                    _token: '{{ csrf_token() }}'
                };

                $('#btn_submit').html('Please wait..').attr('disabled', true);
                $.ajax({
                    url: '{{ route('otp-app-account-delete') }}',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        if (response.status) {
                            alert(response.message);
                            $('#input_otp').removeClass('hidden');
                            $('#btn_verify').removeClass('hidden');
                            $('#btn_submit').addClass('hidden');
                        } else {
                            alert(response.message);
                            // console.log(response.error);
                        }
                        $('#btn_submit').html('Delete Account').attr('disabled', false);
                    },
                    error: function(xhr) {
                        alert('Something went wrong.');
                        console.error(xhr.responseText);
                    }
                });
            });

            $('#btn_verify').click(function(e) {
                e.preventDefault();

                let email = $('#email').val().trim();
                let remark = $('#remark').val().trim();

                if (email === '' || remark === '') {
                    alert('Please fill in both Email and Remark fields.');
                    return;
                }

                if (!confirm('Are you sure want to delete "Kazumi Japanese School" account ?')) {
                    return;
                }

                let formData = {
                    email: email,
                    remark: remark,
                    otp: $('#otp').val(),
                    _token: '{{ csrf_token() }}'
                };

                $('#btn_verify').html('Please wait..').attr('disabled', true);
                $.ajax({
                    url: "{{ route('otp-app-account-delete.store') }}",
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        if (response.status) {
                            alert('Account deletion request has been submitted successfully.');
                            $('#input_otp').addClass('hidden');
                            $('#btn_verify').addClass('hidden');
                            $('#btn_submit').removeClass('hidden');
                        } else {
                            alert('Wrong OTP. Please try again.');
                        }
                        $('#mainForm')[0].reset();
                        $('#btn_verify').html('Verify').attr('disabled', false);
                    },
                    error: function(xhr) {
                        alert('Something went wrong.');
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
</body>

</html>

console.log('__app js:');

const baseUrl = window.location.origin;
const apiHeaders = {
    headers: {
        "Accept": "*/*",
        "Access-Control-Allow-Origin": "*",
        "Content-Type": "multipart/form-data",
    }
};

function randomIntFromInterval(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
}

function breakWord(text) {
    let array = text.split(' ');
    let len = 2;

    let newtext = '';
    for (let i = 0; i < array.length; i++) {
        newtext += array[i] + ' ';
        if (i % len === 0) {
            newtext += '<br>';
        }
    }

    return newtext;
}

function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
    return null;
}

// Logout
$("#logout-btn").on('click', function () {
    apiHeaders['headers']['Authorization'] = 'Bearer ' + getCookie('ut');
    const url = baseUrl + '/api/user/logout';

    axios.post(url, {}, apiHeaders)
        .then(function (response) {
            console.log('[DATA] response..', response.data);
            document.cookie = 'ue=; path=/;';
            document.cookie = 'ut=; path=/;';
            Swal.fire({
                position: "top-end",
                icon: "info",
                title: "Logout successfully..",
                showConfirmButton: false,
                timer: 1500
            });

            setTimeout(function () {
                window.location = baseUrl;
            }, 1500);
        })
        .catch(function (error) {
            console.log('[ERROR] response..', error);
            Swal.fire({
                position: "top-end",
                icon: "warning",
                title: "Failed to logout",
                html: error.response?.data?.message ?? error.message,
                showConfirmButton: false,
                timer: 5000
            });
        });
});

// Login
$(document).ready(function() {
    $("#form-login-btn").on('click', function (e) {
        e.preventDefault(); // Tambahkan ini jika tombol berupa <a>
        
        const form = document.getElementById('form-login');
        form.reportValidity();

        if (form.checkValidity()) {
            $('#form-login-error').html('');
            $('#form-login-loading').show();
            $('#form-login').hide();

            const url = baseUrl + '/api/user/login';
            const formData = new FormData(form);

            axios.post(url, formData, apiHeaders)
                .then(function (response) {
                    console.log('[DATA] response..', response.data);
                    document.cookie = `ue=${formData.get('email')}; path=/;`;
                    document.cookie = `ut=${response.data.token}; path=/;`;

                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "Login successfully!",
                        showConfirmButton: false,
                        timer: 1500
                    });

                    setTimeout(function () {
                        window.location = baseUrl;
                    }, 1500);
                })
                .catch(function (error) {
                    console.log('[ERROR] response..', error);
                    $('#form-login-error').html(error.response ? error.response.data.message : error.message);
                    $('#form-login-loading').hide();
                    $('#form-login').show();
                });
        }
    });
});


// Register
$("#form-register-btn").on('click', function (e) {
    const form = document.getElementById('form-register');
    form.reportValidity();

    if (form.checkValidity()) {
        $('#form-register-error').html('');
        $('#form-register-loading').show();
        $('#form-register').hide();

        const url = baseUrl + '/api/user/register';
        const formData = new FormData(form);

        axios.post(url, formData, apiHeaders)
            .then(function (response) {
                console.log('[DATA] response..', response.data);
                document.cookie = `ue=${formData.get('email')}; path=/;`;
                document.cookie = `ut=${response.data.token}; path=/;`;

                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Registered successfully and logged in automatically",
                    showConfirmButton: false,
                    timer: 1500
                });

                setTimeout(function () {
                    window.location = baseUrl;
                }, 1500);
            })
            .catch(function (error) {
                console.log('[ERROR] response..', error);
                $('#form-register-error').html(error.response ? error.response.data.message : error.message);
                $('#form-register-loading').hide();
                $('#form-register').show();
            });
    }
});

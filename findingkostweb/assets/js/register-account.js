$(function() {

// Setup form validation on the #register-form element
$("#register-form").validate({

    // Specify the validation rules
    rules: {
        nama: "required",
        email: {
            required: true,
            email: true
        },
        password: {
            required: true
        },
        cpassword: {
            required: true,
            equalTo: "#password"
        },
        telepon: {
            matches: "[0-9]+",
            minlength: 10, 
            maxlength: 12
        }
    },

    // Specify the validation error messages
    messages: {
        name: "Masukkan nama Anda",
        password: "Masukkan password Anda",
        cpassword:  "Password Anda belum cocok",
        email: "Masukkan alamat email yang benar",
        telepon: "Masukkan nomor telepon yang benar"
    },

    submitHandler: function(form) {
        form.submit();
    }
});

});
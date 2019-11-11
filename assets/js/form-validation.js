// Wait for the DOM to be ready

$(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='registration']").validate({
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            store_name: {
                required: true,
                name: false,
                minlength: 3
            },
            store_email: {
                required: true,
                email: true,
                minlength: 3,

            },
            store_mobilenumber: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10
            },
            store_location: {
                required: true,
                digits: false,
                minlength: 3
            },

        },
        // Specify validation error messages
        messages: {
            store_name: {
                required: "Please enter your shop name"
            },
            store_email: {
                required: "Please enter your email id"
            },
            store_mobilenumber: {
                required: "Please enter your mobile number",
                number: "Please enter valid mobile number",
                minlength: "Please enter a valid mobile number",
                maxlength: "Please enter a valid mobile number"
            },
            store_location: {
                required: "Please enter your shop location"
            },
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    });
});
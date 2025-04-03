$(document).ready(function() {
    $('#add-batch')
        .find('[name="testtype"]')
            .selectpicker()
            .change(function(e) {
                /* Revalidate the language when it is changed */
                $('#add-batch').formValidation('revalidateField', 'testtype');
            })
            .end()
	.formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            batchid: {
                validators: {
                    notEmpty: {
                        message: 'The ID is required'
                    },
                    stringLength: {
                        min: 6,
                        max: 6,
                        message: 'The name must be 6 characters long'
                    },
					integer: {
                        message: 'The value is must be a Number'
                    }
                }
            },
            testtype: {
                    validators: {
                        notEmpty: {
                            message: 'Please select Test Type.'
                        }
                    }
                },
            optradio: {
                validators: {
                    notEmpty: {
                        message: 'The availability option is required'
                    }
                }
            },
            availability: {
                validators: {
                    notEmpty: {
                        message: 'The availability option is required'
                    }
                }
            }
        }
    });
});
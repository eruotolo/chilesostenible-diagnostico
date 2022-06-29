$(document).ready(function() {
    $('#contact_form').bootstrapValidator({        
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            fname: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Por favor, introduzca su nombre y apellido'
                    }
                }
            },
            
            email: {
                validators: {
                    notEmpty: {
                        message: 'Por favor, introduzca su dirección de correo electrónico'
                    },
                    emailAddress: {
                        message: 'Por favor, introduce una dirección de correo electrónico válida'
                    }
                }
            },

            subject: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Por favor ingrese un asunto'
                    }
                }
            },

            comment: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 300,
                        message:'Ingrese al menos 10 caracteres y no más de 300'
                    },
                    notEmpty: {
                        message: 'Por favor ingrese su consulta'
                    }
                    }
                }
            }
        }).on('success.form.bv', function(e) {           
            e.preventDefault();            
            var $form = $(e.target);            
            $.post($form.attr('action'), $form.serialize(), function(result) {                
				$("#message").html(result.message).addClass('show');
				$("#contact_form").find("input[type=text], input[type=email], textarea").val("");
            }, 'json');
        });
});
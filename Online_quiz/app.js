$(document).ready(function() {
    if ($("#signin").validate) {
        $("#signin").validate({
            submitHandler: function(form) {
                form.submit();
            },
            rules : {
                name : {
                    required : true,
                    minlength : 3,
                    remote : {
                        url : "check_name.php",
                        type : "post",
                        data : {
                            username : function() {
                                return $("#name").val();
                            }
                        }
                    }
                },
                category:{
                    required : true
                }
            },
            messages : {
                name : {
                    required : "Please enter your name",
                    remote : function(){
                        $('#name').rules('remove', 'remote');
                        return "";
                        return "Name is already taken, Please choose some other name"
                    }
                },
                category:{
                    required : "Please choose your category to start Quiz"
                }
            },
            errorPlacement : function(error, element) {
                $(element).closest('.form-group').find('.help-block').html(error.html());
            },
            highlight : function(element) {
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            },
            success : function(element, lab) {
                var messages = new Array("That's Great!", "Looks good!", "You got it!", "Great Job!", "Smart!", "That's it!");
                var num = Math.floor(Math.random() * 6);
                $(lab).closest('.form-group').find('.help-block').text(messages[num]);
                $(lab).addClass('valid').closest('.form-group').removeClass('has-error').addClass('has-success');
            }
        });
    }
});


$('.cont').addClass('hide');
count = $('.questions').length;
$('#question'+1).removeClass('hide');

$(document).on('click','.next',function(){
    last=parseInt($(this).attr('id'));     
    nex = last+1;
    $('#question'+last).addClass('hide');
    
    $('#question'+nex).removeClass('hide');
});

$(document).on('click','.previous',function(){
    last=parseInt($(this).attr('id'));     
    pre = last-1;
    $('#question'+last).addClass('hide');
    
    $('#question'+pre).removeClass('hide');
});
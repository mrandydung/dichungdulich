$(document).ready(function () {

    var forward_to_partner_id;
    $(".forward_to_partner_id")
    .focus(function () {
        // Store the current value on focus and on change
        forward_to_partner_id = $(this).val();
    })
    .change(function () {

        if (confirm('Are you sure ?')) {
            $.get('/backend.php/ticket/forward_to_partner?id=' + $(this).attr('data-ticket-id') + '&pid=' + $(this).val(), function () {
                alert('Done');
            });
        }
        else {
            $(this).val(forward_to_partner_id);
            $(this).trigger("chosen:updated");
        }
    });
    
    $('.btn_td_action').click(function(){
		 
        var items = {};
        $(this).parent().find('select, input').each(function(){

               items[$(this).attr('name')] = $(this).val();
        });

       if(confirm('Bạn chắc chắn nội dung cập nhật là Đúng ?')){
        var self = this;
        $.ajax({
             type: "POST",
             url: '/backend_dev.php/ticket/update_ticket',
             data: items,
             success: function(data){
                     if(data.code == 1){
                        alert(data.msg);
                     }
                     else{
                        alert('Cập nhật thành công');
                        $(self).parent().parent().attr('style', 'border: solid 3px green; padding: 5px;');
                     }
             },
             dataType: 'json'
        });
       }
   });

    $('.remind-customer').click(function(){
		if(!confirm('Are you sure?')) {
			return;
		}
		id = $(this).attr('data-id');
		self = this;
		$.ajax({
			type: "POST",
			url: '/backend.php/ticket/call_not_reponse',
			data: {id: id},
			success: function(data){
				alert(data);
				if(data.indexOf('Error') == -1) {
					$(self).parent().html('ĐÃ GỬI SMS');
				}
			}
		});
	});
  
        $('.is-merge').click(function(){
            if(!confirm('Are you sure?')) {
                    return;
            }
            id = $(this).attr('data-id');
            self = this;
            $.ajax({
                    type: "POST",
                    url: '/backend.php/ticket/merge',
                    data: {id: id},
                    success: function(data){
                            alert(data);
                            if(data.indexOf('Error') == -1) {
                                    $(self).parent().html('Ghép thành công');
                            }
                    }
            });
        });
        
    $('.send_msg_remind').click(function () {
        self = this;
        if (confirm('Are you sure?')) {
            $.ajax({
                type: "POST",
                url: '/backend.php/ticket/send_msg_remind_finish',
                data: {id: $(this).attr('data-id')},
                success: function (data) {
                    alert(data);
                    if (data.indexOf('Error') == -1) {
                        $(self).parent().html('ĐÃ GỬI SMS');
                    }
                }
            });
        }
    });

    $('.send-sms-success').click(function () {
        self = this;
        if (confirm('Are you sure?')) {
            $.ajax({
                type: "POST",
                url: '/backend.php/ticket/resend_booking_sms',
                data: {id: $(this).attr('data-id')},
                success: function (data) {
                    alert(data);

                }
            });
        }
    });


    $('.create-user-btn').click(function () {
        self = this;
        if (confirm('Are you sure?')) {
            $.ajax({
                type: "POST",
                url: '/backend_dev.php/ticket/create_user',
                data: {
                    phone: $(this).attr('data-phone'),
                    id: $(this).attr('data-id')
                },
                success: function (data) {
                    alert(data.msg);
                    if (data.code == 0) {
                        $(self).parent().html(data.html);
                    }
                },
                dataType: 'json'
            });
        }
    });

    $('.save-crm-log').click(function () {
        texta = $(this).parent().find('textarea');
        if (confirm('Are you sure?')) {
            $.ajax({
                type: "POST",
                url: '/backend_dev.php/ticket/crm_save',
                data: {
                    msg: texta.val(),
                    id: texta.attr('data-id')
                },
                success: function (data) {
                    alert(data);

                }
            });
        }
    });

    $('.view_history').click(function () {
        $('#filters_member_id').val($(this).attr('data-member-id'));
        $('input.sf_admin_action_filter[type="submit"]').click();
    });

    $('.checkboxes').checkboxes('range', true);

    $('select')
            .chosen({allow_single_deselect: true, is_backend: true})
            .change(function () {
                $(this).trigger("chosen:updated");
            });

});
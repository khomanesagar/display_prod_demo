jQuery(document).on('click', 'button#order-pay-now', function(){
    jQuery.ajax({
        type:'POST',
        url:baseurl+'cart/orderNow',
        data:jQuery("#checkout-frm").serialize(),
        dataType:'json',    
        beforeSend: function () {
            jQuery('button#order-pay-now').button('loading');
        },
        complete: function () {
            jQuery('button#order-pay-now').button('reset');
            jQuery('#checkout-frm').find('textarea, input, select').each(function () {
                jQuery(this).val('');
            });

        },                
        success: function (json) {
           $('.text-danger').remove();
            if (json['error']) {
             
                for (i in json['error']) {

                    var element = $('.input-ordernow-' + i.replace('_', '-'));
                    if ($(element).parent().hasClass('input-group')) {
                       
                        $(element).parent().after('<div class="text-danger" style="font-size: 14px;">' + json['error'][i] + '</div>');
                    } else {
                        $(element).after('<div class="text-danger" style="font-size: 14px;">' + json['error'][i] + '</div>');
                    }
                }
            } else {
                jQuery('span#success-msg').html('<div class="alert alert-success">Your Order Has Been Placed. Thank You!</div>');
                setTimeout(function () {
                    jQuery('span#success-msg').html(''),
                    document.location.href=baseurl+"success?order_id="+json.order_id;   
                }, 1000); 
            }
                                  
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }        
    });
});

// Quick view product
jQuery(document).on('click', '.item-quick-view', function(){
    var product_id = jQuery(this).data('productid');
    jQuery.ajax({
        type:'POST',
        url:baseurl+'item/quickview',
        data:{product_id:product_id},
        dataType:'html',    
        beforeSend: function () {
            jQuery('#render-quick-product').html('<div class="text-center"><i class="fa fa-spinner fa-pulse fa-5x fa-fw"></i></div>');
        },     
        success: function (html) {
          jQuery('#render-quick-product').html(html);                        
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }        
    });
});
// close quick product modal
jQuery(document).on('click', '.item-quick-add-on-cart', function(){
    jQuery('#quick-view-product').modal('hide');
});


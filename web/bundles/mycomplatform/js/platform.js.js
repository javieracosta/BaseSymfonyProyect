$(document).ready(function() {
$('.column').sortable({
	connectWith: '.column',
	handle: 'h2',
	cursor: 'move',
	placeholder: 'placeholder',
	forcePlaceholderSize: true,
	opacity: 0.4
})
.disableSelection();


$('.dragbox').each(function(){  
    $(this).hover(function(){  
        $(this).find('h2').addClass('collapse');  
    }, function(){  
        $(this).find('h2').removeClass('collapse');  
    })  
    .find('h2').hover(function(){  
        $(this).find('.configure').css('visibility', 'visible');  
    }, function(){  
        $(this).find('.configure').css('visibility', 'hidden');  
    })  
    .click(function(){  
        $(this).siblings('.dragbox-content').toggle();  
    })  
    .end()  
    .find('.configure').css('visibility', 'hidden');  
});
});
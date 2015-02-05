$(document).ready(function() {
	
	$('.ctrl-delete').on('click', cbCtrlDelete);
	$('.ctrl-info').on('click', cbCtrlInfo);
});

var cbCtrlDelete = function() {
	var target = $(this).attr('href');
	$('#modal .modal-body').html('<span>Do you really want to delete <strong>'+$(this).attr('label')+'</strong>?');
	$('#modal .btn-confirm').click(function(){
		$('#modal').modal('hide');
		window.location.href = target;
	});
	$('#modal').modal('show');
	return false;
};


var cbCtrlInfo = function() {
	var target = $(this).attr('href');
	console.log($(this));
	$('#modal-info .modal-body').text($(this).attr('label'));
	$('#modal-info .btn-close').click(function(){
		$('#modal-info').modal('hide');
	});
	$('#modal-info').modal('show');
	return false;
};
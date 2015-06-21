var base_url = "http://www.boatdayapp.com/";

$(document).ready(function(){
	$('.faq .faq-block .inside').hide();
	$('.faq .faq-block a.item').click(function() {
		$(this).closest('.faq-block').find('.inside').toggle();
		return false;
	});
	$('.faq .faq-block .inside a').click(function(){
		if($(this).attr('href').match("^#")) {
		$($(this).attr('href')+' .inside').show();
			scrollToAnchor($(this).attr('href'));
			return false;
		}
	});

	$('form.sms-form').each(function(x, item) {
		if($(item).find('*').length > 1) return false;
		console.log(getSmsFormContent());
		$(item).html(getSmsFormContent()).submit(evFormSubmit);
	});
});


function scrollToAnchor(aid) {
	var aTag = $(aid);
	$('html, body').animate({scrollTop: aTag.offset().top},'slow');
}

var evFormSubmit = function(event) {
	event.preventDefault();
	$.ajax({
		url: base_url + "sms.send.php",
		method: 'POST',
		context : this,
		data: { 
			to: $(this).find('input').val()
		}
	})
	.done(function(data) {
		$(this).find('.cell.left, .cell.right, .cell.full').toggle();
		$(this).find('.cell.full span').text(data.substring(2));
	});
};

function getSmsFormContent() {
	var input = $("<input />")
		.addClass("form-control")
		.attr("type", "text")
		.attr("placeholder", "Enter your phone number");

	var button1 = $("<button />")
		.addClass("btn")
		.addClass("btn-block")
		.attr("type", "submit")
		.text("Get download link");

	var button2 = $("<button />")
		.addClass("btn")
		.addClass("btn-block")
		.addClass("back")
		.attr("type", "button")
		.append($("<img />").attr("src", "images/ico-back.png"))
		.append($("<span />"))
		.click(function() {
			$(this).closest('form').find('.full, .left, .right').toggle();
		});

	var cell1 = $("<div/>")
		.addClass("col-sm-12")
		.addClass("cell")
		.addClass("left")
		.append(input);

	var cell2 = $("<div/>")
		.addClass("col-sm-12")
		.addClass("cell")
		.addClass("right")
		.append(button1);

	var cell3 = $("<div/>")
		.addClass("col-sm-24")
		.addClass("cell")
		.addClass("full")
		.append(button2)
		.hide();

	var row = $('<div/>')
		.addClass("row") 
		.append(cell1)
		.append(cell2)
		.append(cell3);

	return row;
}
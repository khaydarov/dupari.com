var t = $('#page_title').html();
	if (t == 'Наши контакты')
	{
		$('#main').removeClass('active');
		$('#contacts').addClass('active');
	}
	else if (t == 'О НАС')
	{
		$('#main').removeClass('active');
		$('#about').addClass('active');
	}
	else {
		$('#main').addClass('active');
	}
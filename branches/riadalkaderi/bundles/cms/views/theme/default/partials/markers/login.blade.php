{{Form::open(URL::to_action('site@login'), 'POST', $options)}}
	
	{{Form::hidden('back_url', Session::get('back_url'))}}

	{{Form::label('username', LL('cms::form.user_username', SITE_LANG))}}
	{{Form::text('username', Input::old('username'))}}

	{{Form::label('password', LL('cms::form.password', SITE_LANG))}}
	{{Form::password('password')}}
	<br>
	{{Form::checkbox('remember', 1, true);}}
	{{HTML::span(LL('cms::form.user_remember', SITE_LANG))}}
	<br>
	{{Form::submit(LL('cms::button.enter', SITE_LANG))}}

{{Form::close()}}

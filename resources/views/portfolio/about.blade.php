@extends('layout.master')

@section('content')
	<div id="main_wrapper">
		<header>
			<ul>
				<li id="nav_1" class="nav_li"><a href="{{action('WelcomeController@showWork')}}" class="nav_link">WORK</a><img src="{{asset('img/work_small.svg')}}" id="work_appear" class="small-icon"></li>
				<li id="nav_2" class="nav_li"><a href="{{action('WelcomeController@showSkills')}}" class="nav_link">SKILLS</a><img src="{{asset('img/skills_small.svg')}}" id="hover_appear" class="small-icon"></li>
				<li id="nav_3"><a href="{{action('WelcomeController@index')}}"><img src="{{asset('img/header_about.svg')}}" id="rotate_logo" class="logo"></a></li>
				<li id="nav_4" class="nav_li visit"><a href="#"class="nav_link" id="skills_active">ABOUT</a><img src="{{asset('img/about_small.svg')}}" id="about_appear" class="small-icon"></li>
				<li id="nav_5" class="nav_li"><a href="#"class="nav_link" id="show_contact">CONTACT</a><img src="{{asset('img/contact_small.svg')}}" id="contact_appear" class="small-icon"></li>					
			</ul>
		</header>
		<div id="main">

			<div id="about_simon">
				<p id="first_paragraph">
				<span id="first_letter">W</span>elcome, my name is Simon. I'm a cross-media designer with code skills; thus possessing a remarkable craftsmanship that comes in very handy, seen the high amount of digitalization in our modern economy.
				</p>
				<p id="second_paragraph">
				No business, be it small or corporate, can except itself from the increasing importance of good design. Good design - whether digital or analogue - is effective design. Thus impacting real people, like you and me. 
				<a href="#" id="read_more">read more</a>
				</p>
				<p id="third_paragraph">
				Allow me to explain how I got to this point. After finishing my master degree in philosophy, I decided to travel to San Francisco. The people I met there made me realize the economic potential of being able to translate sound business ideas and exceptional design into the digital realm of code. A dream had taken shape. 

				<p id="fourth_paragraph">Through a close collaboration with the enterprise <a href="http://www.eyroflam.be">Eyroflam</a> in Belgium, I discovered the power of visual identity and branding. My work consisted in co-directing the general appearance and structure of a new <a href="http://www.eyroflam.be">website</a>, creating new product package designs, and renewing the visual design of all the touch points between the company and its customers.
				</p>

				<p id="fifth_paragraph">
				It was during this experience that I actually started to learn to translate my designs into code. After some months of self-study, I was accepted into a one year course front-end web development in Brussels, that up to now resulted in me, single-handedly, building this website. Currently I am working on my final project for this course. 
				</p>
			</div>

			<div id="about_picture">
				<span><a href="{{action('WelcomeController@index')}}"><img src="{{asset('img/picture_about.png')}}"></a></span>
			</div>

			<div id="download_my_cv">
				<a href="{{asset('files/resume.simon.gheeraert.pdf')}}" id="first_link"><img src="{{asset('img/download.svg')}}"></a>
				<a href="{{asset('files/resume.simon.gheeraert.pdf')}}" id="second_link">download my resume</a>
			</div>


			<hr id="little_line">

			<div id="tree">
				<div id="word_tree" class="small_font">
					<a href="#" id="first_word">SKILLS</a>
					<a href="#" id="second_word" class="contact_second">CONTACT</a>
					<a href="#" id="third_word">WORK</a>
				</div>
				<div id="icon_tree" class="icontree">
					<div class="icon">
						<a href="{{action('WelcomeController@showSkills')}}" id=""><img src="{{asset('img/skills_icon.svg')}}" id="icon_under_one" class="below-tree"></a>
					</div>
					<div class="icon">
						<a href="#" class="reveal_contact"><img src="{{asset('img/contact_icon.svg')}}" id="see_contact" class="below-tree"></a>
					</div>				
					<div class="icon">
						<a href="{{action('WelcomeController@showWork')}}" id=""><img src="{{asset('img/work_icon.png')}}" id="icon_under_two"class="below-tree"></a>
					</div>
				</div>
			</div>

			<div id="contact_box">
				{!! Form::open(array('method' => 'POST', 'route' => 'about_send_mail', 'class' => 'form')) !!}

                    @if($errors->has())
                        <div>
                            @foreach ($errors->all() as $error)
                            <li>
                                {!! $error !!}
                            </li>
                            @endforeach
                        </div>
                    @endif
				
					{!! Form::text('name', '', array('class' => 'text_field', 'id' => 'one_field', 'placeholder' => 'your name')) !!}

					{!! Form::email('email', '', array('class' => 'text_field', 'placeholder' => 'your e-mail')) !!}

					{!! Form::text('message', '', array('id' => 'message', 'placeholder' => 'your message')) !!}


					
					<div id="sendit">
					<button type="submit" id="send"><img src="{{asset('img/contact_me.svg')}}" id="icon_contact_me"></button>
					</div>


				{!! Form::close() !!}
			</div>

		</div>

@stop
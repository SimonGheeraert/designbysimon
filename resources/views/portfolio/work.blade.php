@extends('layout.master')

@section('content')
	<div id="main_wrapper">
		<header>
			<ul>
				<li id="nav_1" class="nav_li visit"><a href="{{action('WelcomeController@showWork')}}" class="nav_link" id="skills_active">WORK</a><img src="{{asset('img/work_small.svg')}}" id="work_appear" class="small-icon"></li>
				<li id="nav_2" class="nav_li"><a href="{{action('WelcomeController@showSkills')}}" class="nav_link">SKILLS</a><img src="{{asset('img/skills_small.svg')}}" id="hover_appear" class="small-icon"></li>
				<li id="nav_3"><a href="{{action('WelcomeController@index')}}"><img src="{{asset('img/work_logo.png')}}" id="rotate_logo" class="logo"></a></li>
				<li id="nav_4" class="nav_li"><a href="{{action('WelcomeController@showAbout')}}"class="nav_link">ABOUT</a><img src="{{asset('img/about_small.svg')}}" id="about_appear" class="small-icon"></li>
				<li id="nav_5" class="nav_li"><a href="#"class="nav_link" id="show_contact">CONTACT</a><img src="{{asset('img/contact_small.svg')}}" id="contact_appear" class="small-icon"></li>					
			</ul>
		</header>
		<div id="main">

			<div id="work">
				<div id="owl-example" class="owl-carousel">
					<div><img src="{{asset('img/work_one.png')}}" id="work_one"></div>
					<div><img src="{{asset('img/work_two.png')}}" id="work_two"></div>
					<div><img src="{{asset('img/work_three.svg')}}" id="work_three"></div>
					<div><img src="{{asset('img/work_four.png')}}" id="work_four"></div>
				</div>
			</div>

			<div id="mobile_gallery">
					<div class="full"><img src="{{asset('img/work_one.png')}}" class="wo"></div>
								<div id="little_line">
								</div>
					<div class="full"><img src="{{asset('img/work_two.png')}}" class="wo"></div>
								<div id="little_line">
								</div>
					<div class="full"><img src="{{asset('img/work_three.svg')}}" class="wo"></div>
								<div id="little_line">
								</div>
					<div class="full"><img src="{{asset('img/work_four.png')}}" class="wo"></div>				
			</div>

			<hr id="little_line">

			<div id="tree">
				<div id="word_tree" class="small_font">
					<a href="#" id="first_word">SKILLS</a>
					<a href="#" id="second_word" class="contact_second">CONTACT</a>
					<a href="#" id="third_word">ABOUT</a>
				</div>
				<div id="icon_tree" class="icontree">
					<div class="icon">
						<a href="{{action('WelcomeController@showSkills')}}" id=""><img src="{{asset('img/skills_icon.svg')}}" id="" class="below-tree"></a>
					</div>
					<div class="icon">
						<a href="" class="reveal_contact"><img src="{{asset('img/contact_icon.svg')}}" id="see_contact" class="below-tree"></a>
					</div>				
					<div class="icon">
						<a href="{{action('WelcomeController@showAbout')}}" id=""><img src="{{asset('img/about_icon.svg')}}" id="" class="below-tree"></a>
					</div>
				</div>
			</div>

			<div id="contact_box">
				{!! Form::open(array('method' => 'POST', 'route' => 'work_send_mail', 'class' => 'form')) !!}

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
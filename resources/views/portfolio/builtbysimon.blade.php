@extends('layout.master')

@section('content')

	<div id="main_wrapper">
		<header>
			<ul>
				<li id="nav_1" class="nav_li"><a href="{{action('WelcomeController@showWork')}}" class="nav_link">WORK</a><img src="{{asset('img/work_small.svg')}}" class="small-icon" id="work_appear"></li>
				<li id="nav_2" class="nav_li"><a href="{{action('WelcomeController@showSkills')}}" class="nav_link">SKILLS</a><img src="{{asset('img/skills_small.svg')}}"class="small-icon" id="hover_appear"></li>
				<li id="nav_3"><a href="#"><img src="{{asset('img/logo.png')}}" id="logo" class="logo"></a></li>
				<li id="nav_4" class="nav_li"><a href="{{action('WelcomeController@showAbout')}}"class="nav_link">ABOUT</a><img src="{{asset('img/about_small.svg')}}" class="small-icon" id="about_appear"></li>
				<li id="nav_5" class="nav_li"><a href="#"class="nav_link" id="show_contact">CONTACT</a><img src="{{asset('img/contact_small.svg')}}" class="small-icon" id="contact_appear"></li>					
			</ul>
		</header>
		<div id="main">
			<div id="work">
				<div id="owl-example" class="owl-carousel">
					<div><img src="{{asset('img/intro.svg')}}" id="work_1"></div>				
					<div><img src="{{asset('img/second.svg')}}" id="work_2"></div>
				</div>
			</div>

				<div id="mobile_alternate">
					<div id="intro"><img src="{{asset('img/intro.svg')}}" id="work_1"></div>	
				</div>

			<div id="scroll">
				<hr id="hr_one">
				<div id="mister_scroll">
					<a href="#" id="scroll_click"><img src="{{asset('img/scroll_down.svg')}}" id="scroll_down"></a>
				</div>
				<hr id="hr_two">
			</div>
			<div id="tree">
				<div id="word_tree" class="small_font">
					<a href="#" id="first_word">WORK</a>
					<a href="#" id="second_word">SKILLS</a>
					<a href="#" id="third_word">ABOUT</a>
				</div>
				<div id="icon_tree">
					<div class="icon" id="iconone">
						<a href="{{action('WelcomeController@showWork')}}" id=""><img src="{{asset('img/work_icon.png')}}" id="imageone"></a>
					</div>
					<div class="icon" id="icontwo">
						<a href="{{action('WelcomeController@showSkills')}}" id=""><img src="{{asset('img/skills_icon.svg')}}" id="imagetwo"></a>
					</div>				
					<div class="icon" id="iconthree">
						<a href="{{action('WelcomeController@showAbout')}}" id=""><img src="{{asset('img/about_icon.svg')}}" id="imagethree"></a>
					</div>
				</div>
				<div id="picture">
					<div id="center"><a href="#"><img src="{{asset('img/perfect_suit.png')}}" id="perfect_suit"></a></div>
				</div>
				<div id="contact">
					<div id="contact_icon">
					<a href="#" id="reveal_contact"><img src="{{asset('img/contact_icon.svg')}}" id="imagefour"></a>
					</div>
					<div id="text" class="small_font">
						<a href="#">CONTACT</a>
					</div>
				</div>


			</div>

			<div id="contact_box">
				{!! Form::open(array('method' => 'POST', 'route' => 'home_send_mail', 'class' => 'form')) !!}

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
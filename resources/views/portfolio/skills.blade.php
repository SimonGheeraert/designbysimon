@extends('layout.master')

@section('content')
	<div id="main_wrapper">
		<header>
			<ul>
				<li id="nav_1" class="nav_li"><a href="{{action('WelcomeController@showWork')}}" class="nav_link">WORK</a><img src="{{asset('img/work_small.svg')}}" id="work_appear" class="small-icon"></li>
				<li id="nav_2" class="nav_li visit"><a href="{{action('WelcomeController@showSkills')}}" class="nav_link" id="skills_active">SKILLS</a><img src="{{asset('img/skills_small.svg')}}" id="hover_appear" class="small-icon"></li>
				<li id="nav_3"><a href="{{action('WelcomeController@index')}}"><img src="{{asset('img/skills_logo.svg')}}" id="rotate_logo" class="logo"></a></li>
				<li id="nav_4" class="nav_li"><a href="{{action('WelcomeController@showAbout')}}"class="nav_link">ABOUT</a><img src="{{asset('img/about_small.svg')}}" id="about_appear" class="small-icon"></li>
				<li id="nav_5" class="nav_li"><a href="#"class="nav_link" id="show_contact">CONTACT</a><img src="{{asset('img/contact_small.svg')}}" id="contact_appear" class="small-icon"></li>					
			</ul>
		</header>
		<div id="main">

			<div id="skills_wrapper">
				<div id="design_box">
					<h1>DESIGN</h1>
				</div>

				<div class="left" id="left_one">
						<h5>visual identity and brand</h5>
						<h5>user interface</h5>
						<h5>user experience</h5>
						<h5>tools</h5>
				</div>

				<div class="right">
					<div class="unite">
						<h5>logo</h5>
						<h5>packaging</h5>
					</div>

					<div class="unite">
						<h5>wireframing</h5>
						<h5>icon</h5>
					</div>

					<div class="unite">
						<h5>wireframing</h5>
					</div>

					<div class="unite">
						<h5>Sketch 3</h5>
						<h5>Adobe Illustrator CC 2014</h5>
					</div>
				</div>

				<div id="sketch_icon">
					<div id="image_sketch">
					<img src="{{asset('img/sketch_icon.svg')}}">
					</div>
				</div>

				<div id="code_box">
					<h1>CODE</h1>
				</div>

				<div id="suit_image">
					<div id="image_suit">
					<img src="{{asset('img/suit_suit.png')}}">
					</div>
				</div>

				<div class="left" id="left_two">
						<h5>CSS 3 - HTML 5</h5>
						<h5>dynamics</h5>
						<h5>frameworks</h5>
						<h5>database</h5>
						<h5>CMS</h5>
				</div>

				<div class="right" id="right_two">
					<div class="unite">
						<h5>mobile first - responsive web design</h5>
						<h5>sass</h5>
						<h5>susy-grid</h5>
					</div>

					<div class="unite">
						<h5>JavaScript</h5>
						<h5>PHP</h5>
					</div>

					<div class="unite">
						<h5>jQuery</h5>
						<h5>laravel</h5>
						<h5>symfony</h5>
					</div>

					<div class="unite">
						<h5>MySQL</h5>
					</div>

					<div class="unite">
						<h5>WordPress</h5>
						<h5>drupal</h5>
					</div>
				</div>

			</div>


			<hr id="little_line">

			<div id="tree">
				<div id="word_tree" class="small_font">
					<a href="#" id="first_word">WORK</a>
					<a href="#" id="second_word" class="contact_second">CONTACT</a>
					<a href="#" id="third_word">ABOUT</a>
				</div>
				<div id="icon_tree" class="icontree">
					<div class="icon">
						<a href="{{action('WelcomeController@showWork')}}" id=""><img src="{{asset('img/work_icon.png')}}" id="" class="below-tree"></a>
					</div>

					<div class="icon">
						<a href="#" class="reveal_contact"><img src="{{asset('img/contact_icon.svg')}}" id="see_contact" class="below-tree"></a>
					</div>
				
					<div class="icon">
						<a href="{{action('WelcomeController@showAbout')}}" id=""><img src="{{asset('img/about_icon.svg')}}" id="" class="below-tree"></a>
					</div>
				</div>
			</div>

			<div id="contact_box">
				{!! Form::open(array('method' => 'POST', 'route' => 'skills_send_mail', 'class' => 'form')) !!}

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

<!DOCTYPE html>
<!-- comment -->
<html lang="en" xml:lang="en">
<head>
	<meta charset="UTF-8" />
	<!-- node ideone-www2 -->
		<title>Online Compiler and IDE &gt;&gt; C/C++, Java, PHP, Python, Perl and 70+ other compilers and interpreters - Ideone.com</title>
		<meta name="description" content="Compile various programming languages online. Add input stream, save output, add notes and tags." />	
		<meta name="keywords" content="online compiler, online ide, learn programming online, programming online, run code online, snippet, snippets, pastebin, online debugging tool, online interpreter, run your code online, run code, execute code, C++, Java, Python" />
	<meta property="og:site_name" content="Ideone.com"/>
	<meta property="og:image" content="http://profile.ak.fbcdn.net/hprofile-ak-prn1/50232_245768360841_3377786_q.jpg"/>
	<meta property="og:description" content="Ideone is something more than a pastebin; it's an online compiler and debugging tool which allows to compile and run code online in more than 40 programming languages."/>
	<meta property="og:title" content="Ideone.com"/>
	<link rel="shortcut icon" type="image/png" href="//stx1.ideone.com/gfx2/img/favicon.png" />
			
				<link href="//stx1.ideone.com/gfx2/libs/bootstrap/css/bootstrap-with-responsive-1200-only.min.css" rel="stylesheet" media="all"/>
				
		 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<!-- , initial-scale=0.25 -->
		
	
	
	
	
	<link rel="preconnect" href="https://www.google-analytics.com">
	<link rel="preconnect" href="https://srv.carbonads.net">
	<link rel="preconnect" href="https://srv.buysellads.com">
	<link rel="preconnect" href="https://vc.hotjar.io">
	<link rel="preconnect" href="https://vars.hotjar.com">
	
	
	<style>
	[class^="icon-"], [class*=" icon-"] {
		display: inline;
		width: auto;
		height: auto;
		/*line-height: normal;*/
		vertical-align: baseline;
		background-image: none;
		background-position: 0% 0%;
		background-repeat: repeat;
		margin-top: 0;
	}
	a [class^="icon-"], a [class*=" icon-"] {
		display: inline;
	}
	</style>
	
	
	<link href="//stx1.ideone.com/gfx2/libs/fontello-8f7d2dfe/css/fontello.css?3" rel="stylesheet"/>
	<!--[if IE 7]>
		<link rel="stylesheet" href="//stx1.ideone.com/gfx2/libs/fontello-8f7d2dfe/css/fontello-ie7.min.css?3">
	<![endif]-->
	
	
	<link href="//stx1.ideone.com/themes/smoothness/jquery-ui-1.10.1.custom.min.css" type="text/css" rel="stylesheet"/> <!-- jak sie wrzuci do bundle to nie dziala -->
	<!-- <link href="/gfx2/css/jquery-ui-bootstrap/jquery-ui-1.10.0.custom.css" type="text/css" rel="stylesheet" /> --> <!-- mozna ew wlaczyc zamiast tego powyzej -->
		
	<!-- 2013-02-07 by wiele: na czas develu wyrzucam to z bundle zeby moc latwiej debugowac w firebugu -->
	
	
	
	<link href="//stx1.ideone.com/gfx2/css/ideone-bundle.css?3" rel="stylesheet"/>
	<!-- end of rzeczy przeniesione tymczasowo z bundle -->
	
	
	
	
	
	<script type="text/javascript">
	
		var cookie_name = 'settings';
		var cookie_time = 15552000;
		var is_mobile = 0;
		
		
				var ace_options = {};
			</script>
	
	<!-- 2013-02-07 by wiele: na czas develu wyrzucam to z bundle zeby moc latwiej debugowac w firebugu -->
	
	
	
	
	
	<script type="text/javascript" src="//stx1.ideone.com/gfx2/js/ideone-libs-bundle.js?2"></script>
	<script type="text/javascript" src="//stx1.ideone.com/gfx2/libs/ace-2017-06/ace.js?1" data-ace-base="/gfx2/libs/ace-2017-06"></script>
	<script type="text/javascript" src="//stx1.ideone.com/gfx2/js/ideone-common.js?12"></script>
	<!-- end of rzeczy przeniesione tymczasowo z bundle -->
	
</head>


<body class="home  not-responsive">
	<div id="_container">
<noscript><div id="js_required" class="alert alert-error" style="margin-bottom: 0px">Ideone.com requires JavaScript to work.</div></noscript>
<div class="navbar " id="primary-navigation">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
			</a>
						<a href="/" class="brand scroll-page"><span></span></a>
						<div class="nav-collapse collapse " style="height: 0px;">
				
				<ul class="nav pull-right">
										<li class="active"><a href="/"  class="scroll-page"><i class="icon-home"></i> new code</a></li>
										<li class=""><a href="/samples"  class="scroll-page"><i class="icon-lightbulb"></i> samples</a></li>
					<li class=""><a href="/recent"  class="scroll-page"><i class="icon-cloud"></i> recent codes</a></li>
															<li class="dropdown">
						<a href="#"  class="dropdown-toggle btn-singin-wnd-open" data-toggle="dropdown"><i class="icon-signin"></i> sign in</a>
						<ul class="dropdown-menu dropdown-form" id="signin-dropdown">
                        <li class="dropdown-caret right">
                          <span class="caret-outer"></span>
                          <span class="caret-inner"></span>
                        </li>
                        <li>
                          <div class="modal-body">
					    	<form action="//ideone.com/account/login" method="post">
												    		<div style="margin-bottom: 20px;">
									New user? <a class="normal-link"  href="/account/register">Sign up</a>
								</div>
																
								<div class="control-group">
									<div class="controls">
										<div class="input-prepend" style="margin-bottom: 0px">
											<span class="add-on rel-tooltip" title="Username or e-mail"><i class="icon-user"></i></span>
											<input type="text" class="span2" id="username" name="username" value="" placeholder="Username or e-mail" />
										</div>
									</div>
								</div>
					    		
					    		<div class="control-group" style="margin-bottom: 0px">
					    			<div class="controls">
					    				<div class="input-prepend">
					    					<span class="add-on rel-tooltip" title="Password"><i class="icon-key"></i></span>
					    					<input type="password" class="span2" id="password" name="password" value="" placeholder="Password" />			
					    				</div>
					    			</div>
					    		</div>
					
								<input type="hidden" name="remember" value="yes"/>
								<input type="hidden" name="next" value="Lw=="/>
								
								<div class="control-group">
									<div class="controls">
										<button type="submit" class="btn"><i class="icon-signin"></i> Sign in</button>
									</div>
								</div>
								
								<div>
									<a class="normal-link" href="/account/forgot">Can't sign in?</a>
								</div>
								
																<hr class="clear" style="margin: 0px; margin-bottom: 10px"/>
								<a class="btn facebook-login-button" href="https://www.facebook.com/dialog/oauth?client_id=347515280067&redirect_uri=https://ideone.com/account/registerfb/&scope=email,user_location,user_hometown">Log in with Facebook</a>
															</form>
					  </div>
                	</li>
                      </ul>
					</li>
															
					<li class=" dropdown-hover">
					
					</li>
					
									</ul>
			</div>
			<!-- /.nav-collapse --> 
		</div>
		<!-- /.container --> 
	</div>
	<!-- /.navbar-inner --> 
</div>

<div class="container" style="padding: 0; margin-top: 0; margin-bottom: 0;">

</div>


<script type="text/javascript">
<!--
	var langs_properties = {
		
		7:{"runnable" : 1,"sample_sol_id" : 16670898,"template_sol_id" : 21985071,"users_template_sol_id" : 0} ,
		45:{"runnable" : 1,"sample_sol_id" : 879235,"template_sol_id" : 16673035,"users_template_sol_id" : 0} ,
		13:{"runnable" : 1,"sample_sol_id" : 16672745,"template_sol_id" : 16672734,"users_template_sol_id" : 0} ,
		42:{"runnable" : 1,"sample_sol_id" : 0,"template_sol_id" : 0,"users_template_sol_id" : 0} ,
		105:{"runnable" : 1,"sample_sol_id" : 16672656,"template_sol_id" : 16672608,"users_template_sol_id" : 0} ,
		104:{"runnable" : 1,"sample_sol_id" : 16672643,"template_sol_id" : 16672665,"users_template_sol_id" : 0} ,
		28:{"runnable" : 1,"sample_sol_id" : 255053,"template_sol_id" : 16672600,"users_template_sol_id" : 0} ,
		110:{"runnable" : 1,"sample_sol_id" : 53696791,"template_sol_id" : 53696791,"users_template_sol_id" : 0} ,
		12:{"runnable" : 1,"sample_sol_id" : 42358,"template_sol_id" : 16671763,"users_template_sol_id" : 0} ,
		11:{"runnable" : 1,"sample_sol_id" : 16671817,"template_sol_id" : 16672589,"users_template_sol_id" : 0} ,
		81:{"runnable" : 1,"sample_sol_id" : 0,"template_sol_id" : 0,"users_template_sol_id" : 0} ,
		27:{"runnable" : 1,"sample_sol_id" : 16672575,"template_sol_id" : 16672567,"users_template_sol_id" : 0} ,
		1:{"runnable" : 1,"sample_sol_id" : 16671906,"template_sol_id" : 16672545,"users_template_sol_id" : 0} ,
		41:{"runnable" : 1,"sample_sol_id" : 16671876,"template_sol_id" : 16672561,"users_template_sol_id" : 0} ,
		44:{"runnable" : 1,"sample_sol_id" : 16672005,"template_sol_id" : 16672536,"users_template_sol_id" : 0} ,
		82:{"runnable" : 1,"sample_sol_id" : 0,"template_sol_id" : 0,"users_template_sol_id" : 0} ,
		34:{"runnable" : 1,"sample_sol_id" : 16672241,"template_sol_id" : 16672533,"users_template_sol_id" : 0} ,
		14:{"runnable" : 1,"sample_sol_id" : 16672511,"template_sol_id" : 16672431,"users_template_sol_id" : 0} ,
		111:{"runnable" : 1,"sample_sol_id" : 53697039,"template_sol_id" : 53697039,"users_template_sol_id" : 0} ,
		118:{"runnable" : 1,"sample_sol_id" : 16673355,"template_sol_id" : 16673455,"users_template_sol_id" : 0} ,
		106:{"runnable" : 1,"sample_sol_id" : 16673364,"template_sol_id" : 16673499,"users_template_sol_id" : 0} ,
		91:{"runnable" : 1,"sample_sol_id" : 0,"template_sol_id" : 0,"users_template_sol_id" : 0} ,
		31:{"runnable" : 1,"sample_sol_id" : 653,"template_sol_id" : 0,"users_template_sol_id" : 0} ,
		32:{"runnable" : 1,"sample_sol_id" : 42362,"template_sol_id" : 16673531,"users_template_sol_id" : 0} ,
		84:{"runnable" : 1,"sample_sol_id" : 0,"template_sol_id" : 0,"users_template_sol_id" : 0} ,
		20:{"runnable" : 1,"sample_sol_id" : 654,"template_sol_id" : 0,"users_template_sol_id" : 0} ,
		102:{"runnable" : 1,"sample_sol_id" : 16673535,"template_sol_id" : 255069,"users_template_sol_id" : 0} ,
		48:{"runnable" : 1,"sample_sol_id" : 53694344,"template_sol_id" : 53694353,"users_template_sol_id" : 0} ,
		96:{"runnable" : 1,"sample_sol_id" : 53693682,"template_sol_id" : 53693682,"users_template_sol_id" : 0} ,
		36:{"runnable" : 1,"sample_sol_id" : 16673555,"template_sol_id" : 16673568,"users_template_sol_id" : 0} ,
		124:{"runnable" : 1,"sample_sol_id" : 23761346,"template_sol_id" : 16673647,"users_template_sol_id" : 0} ,
		92:{"runnable" : 1,"sample_sol_id" : 53691774,"template_sol_id" : 47132875,"users_template_sol_id" : 0} ,
		107:{"runnable" : 1,"sample_sol_id" : 53695103,"template_sol_id" : 53695103,"users_template_sol_id" : 0} ,
		5:{"runnable" : 1,"sample_sol_id" : 16675256,"template_sol_id" : 16675262,"users_template_sol_id" : 0} ,
		114:{"runnable" : 1,"sample_sol_id" : 16675270,"template_sol_id" : 16675275,"users_template_sol_id" : 0} ,
		98:{"runnable" : 1,"sample_sol_id" : 53693896,"template_sol_id" : 53694081,"users_template_sol_id" : 0} ,
		121:{"runnable" : 1,"sample_sol_id" : 53697184,"template_sol_id" : 53697201,"users_template_sol_id" : 0} ,
		21:{"runnable" : 1,"sample_sol_id" : 16675340,"template_sol_id" : 16675318,"users_template_sol_id" : 0} ,
		16:{"runnable" : 1,"sample_sol_id" : 16675353,"template_sol_id" : 16675366,"users_template_sol_id" : 0} ,
		9:{"runnable" : 1,"sample_sol_id" : 16675395,"template_sol_id" : 0,"users_template_sol_id" : 0} ,
		10:{"runnable" : 1,"sample_sol_id" : 16675446,"template_sol_id" : 16675448,"users_template_sol_id" : 0} ,
		55:{"runnable" : 1,"sample_sol_id" : 16675454,"template_sol_id" : 16675460,"users_template_sol_id" : 0} ,
		112:{"runnable" : 1,"sample_sol_id" : 340843,"template_sol_id" : 16675481,"users_template_sol_id" : 0} ,
		35:{"runnable" : 1,"sample_sol_id" : 16675473,"template_sol_id" : 16675476,"users_template_sol_id" : 0} ,
		47:{"runnable" : 1,"sample_sol_id" : 53694184,"template_sol_id" : 53694240,"users_template_sol_id" : 0} ,
		26:{"runnable" : 1,"sample_sol_id" : 16675486,"template_sol_id" : 16675490,"users_template_sol_id" : 0} ,
		30:{"runnable" : 1,"sample_sol_id" : 662,"template_sol_id" : 16675523,"users_template_sol_id" : 0} ,
		25:{"runnable" : 1,"sample_sol_id" : 16675536,"template_sol_id" : 16675537,"users_template_sol_id" : 0} ,
		122:{"runnable" : 1,"sample_sol_id" : 53697264,"template_sol_id" : 53697264,"users_template_sol_id" : 0} ,
		56:{"runnable" : 1,"sample_sol_id" : 16675567,"template_sol_id" : 16675577,"users_template_sol_id" : 0} ,
		43:{"runnable" : 1,"sample_sol_id" : 37961323,"template_sol_id" : 38059233,"users_template_sol_id" : 0} ,
		83:{"runnable" : 1,"sample_sol_id" : 53691324,"template_sol_id" : 38059236,"users_template_sol_id" : 0} ,
		8:{"runnable" : 1,"sample_sol_id" : 16675615,"template_sol_id" : 16675621,"users_template_sol_id" : 0} ,
		127:{"runnable" : 1,"sample_sol_id" : 53714993,"template_sol_id" : 16675635,"users_template_sol_id" : 0} ,
		2:{"runnable" : 1,"sample_sol_id" : 16675742,"template_sol_id" : 16675744,"users_template_sol_id" : 0} ,
		22:{"runnable" : 1,"sample_sol_id" : 16675741,"template_sol_id" : 16675739,"users_template_sol_id" : 0} ,
		54:{"runnable" : 1,"sample_sol_id" : 638943,"template_sol_id" : 16675758,"users_template_sol_id" : 0} ,
		3:{"runnable" : 1,"sample_sol_id" : 267085,"template_sol_id" : 16675748,"users_template_sol_id" : 0} ,
		29:{"runnable" : 1,"sample_sol_id" : 16675788,"template_sol_id" : 16675801,"users_template_sol_id" : 0} ,
		94:{"runnable" : 1,"sample_sol_id" : 53692298,"template_sol_id" : 53692298,"users_template_sol_id" : 0} ,
		19:{"runnable" : 1,"sample_sol_id" : 16675862,"template_sol_id" : 16675864,"users_template_sol_id" : 0} ,
		108:{"runnable" : 1,"sample_sol_id" : 53695716,"template_sol_id" : 53696683,"users_template_sol_id" : 0} ,
		15:{"runnable" : 1,"sample_sol_id" : 16675896,"template_sol_id" : 16675919,"users_template_sol_id" : 0} ,
		99:{"runnable" : 1,"sample_sol_id" : 0,"template_sol_id" : 0,"users_template_sol_id" : 0} ,
		4:{"runnable" : 1,"sample_sol_id" : 16676006,"template_sol_id" : 16676008,"users_template_sol_id" : 0} ,
		116:{"runnable" : 1,"sample_sol_id" : 16676011,"template_sol_id" : 16676012,"users_template_sol_id" : 0} ,
		126:{"runnable" : 1,"sample_sol_id" : 0,"template_sol_id" : 0,"users_template_sol_id" : 0} ,
		117:{"runnable" : 1,"sample_sol_id" : 142798,"template_sol_id" : 16676021,"users_template_sol_id" : 0} ,
		95:{"runnable" : 1,"sample_sol_id" : 53693466,"template_sol_id" : 53693466,"users_template_sol_id" : 0} ,
		17:{"runnable" : 1,"sample_sol_id" : 42449,"template_sol_id" : 16676030,"users_template_sol_id" : 0} ,
		93:{"runnable" : 1,"sample_sol_id" : 53692181,"template_sol_id" : 53692193,"users_template_sol_id" : 0} ,
		39:{"runnable" : 1,"sample_sol_id" : 16676041,"template_sol_id" : 16676047,"users_template_sol_id" : 0} ,
		33:{"runnable" : 1,"sample_sol_id" : 16676060,"template_sol_id" : 16676113,"users_template_sol_id" : 0} ,
		97:{"runnable" : 1,"sample_sol_id" : 53693761,"template_sol_id" : 53693761,"users_template_sol_id" : 0} ,
		18:{"runnable" : 1,"sample_sol_id" : 670,"template_sol_id" : 0,"users_template_sol_id" : 0} ,
		23:{"runnable" : 1,"sample_sol_id" : 16676119,"template_sol_id" : 16676125,"users_template_sol_id" : 0} ,
		40:{"runnable" : 1,"sample_sol_id" : 3144925,"template_sol_id" : 16676135,"users_template_sol_id" : 0} ,
		85:{"runnable" : 1,"sample_sol_id" : 51485213,"template_sol_id" : 51485317,"users_template_sol_id" : 0} ,
		38:{"runnable" : 1,"sample_sol_id" : 16676150,"template_sol_id" : 16676171,"users_template_sol_id" : 0} ,
		62:{"runnable" : 0,"sample_sol_id" : 42455,"template_sol_id" : 16676175,"users_template_sol_id" : 0} ,
		115:{"runnable" : 1,"sample_sol_id" : 16676187,"template_sol_id" : 0,"users_template_sol_id" : 0} ,
		101:{"runnable" : 1,"sample_sol_id" : 16676228,"template_sol_id" : 16676240,"users_template_sol_id" : 0} ,
		50:{"runnable" : 1,"sample_sol_id" : 55282301,"template_sol_id" : 55282392,"users_template_sol_id" : 0} ,
		6:{"runnable" : 1,"sample_sol_id" : 675,"template_sol_id" : 0,"users_template_sol_id" : 0} 
				
	};
	$(document).ready(function(){
		$('#upload_link').file().choose(function(e, input) {
			$("#main_form_files").empty();
			$(input).appendTo($('#main_form_files')).attr('name', 'file2');
			$("#upload_file_name").html(input.val());
			$("#upload_link_empty").css({'display': 'inline'});
		});
		$('#upload_link_empty').bind('click', function(){
			$("#main_form_files").empty();
			$("#upload_file_name").html('');
			$("#upload_link_empty").css({'display': 'none'});
			return false;
		});
		
		//$("body > .navbar").removeClass('navbar-fixed-top');
		//$("body").css({'padding-top': 0});
	});
//-->
</script>

<script src="//stx1.ideone.com/gfx2/js/ideone-index.js?4"></script>

<input type="hidden" id="site" value="index" />

<form enctype="multipart/form-data" action="/fake" method="post" id="main_form">
	<input type="hidden" name="p1" id="p1" value="1eaeb167148124d8c366a1fd3537bd35"/>
	<input type="hidden" name="p2" id="p2" value="3"/>
	<input type="hidden" name="p3" id="p3" value="12"/>
	<input type="hidden" name="p4" id="p4" value=""/>
	
	<input type="hidden" name="clone_link" value= />
	
	<div id="main_form_files"></div>

<section class="project-carousel thebackground shadow-inner-top-bottom">
	<div class="container">
		<div class="row">
			<div class="span12 home-main-box">
				<div id="featured-project-carousel" class="carousel slide">
					<div class="carousel-inner overflow-visible">
						<div class="item active">
							
			
			<div class="row">
				<div class="span8 code-panel">
					
							<div class="header">
								<i class="icon-code"></i>
								enter your source code
								
								<span id="insert-part-or" style="display: inline">or</span>
								<span id="insert-part-insert" style="display: inline">insert</span>
								<span id="insert-part-template" style="display: inline"><a id="insert-template-link" href="#" class="rel-tooltip" title="Insert template">template</a></span>
								
								<span id="insert-part-or2" style="display: inline">or</span>
								<span id="insert-part-sample" style="display: inline"><a id="insert-sample-link" href="#" class="rel-tooltip" title="Insert sample program">sample</a></span>

								<span id="insert-part-or3" style="display: none">or</span>
								<span id="insert-part-users-template" style="display: none"><a id="insert-users-template-link" href="#" class="rel-tooltip" title="Insert your template">your template</a></span>
								
								<img id="insert-loader" style="display: none; height: 11px" src="//stx1.ideone.com/gfx/loader.gif" alt="loading..."/>
								<div class="pull-right">
									<span class="option-clear">
										<a href="#" class="rel-tooltip with-margin-right" title="Clear the editor" onclick="clearEditor(); return false;">clear</a>
									</span>
																			<a href="#" class="rel-tooltip" data-toggle="modal" data-target="#editorShortcuts" title="Show shortcuts for editor">
										  shortcuts
										</a>
																	</div> 
								<div class="clearfix"></div>
							</div>
					
							
					<!-- editor + ad -->
					
							<div style="border-bottom: 1px solid #ececec;">
								<div id="file_div" ></div>
								<div id="file_parent" style="padding: 10px;">				
									<textarea name="file" id="file" tabindex="1" ><?php ?>

// your code goes here</textarea>
								</div>
							</div>
					
					<input type="hidden" id="file_template" value="&lt;?php

// your code goes here" />	
					
					<div class="alert alert-danger hidden" id="source-code-alert-too-long" style="margin-left: 10px; margin-right: 10px; margin-top: 10px;" role="alert">Your source code is too long. Maximum only 64KB.</div>
					
					<!-- advanced config: input -->
					<div class="row " id="ex-input">
						<div class="span8">
							<div class="ex-more-options-box" style="padding: 10px; padding-top: 6px; color: #666">
								<div style="margin-bottom: 5px">
									<i class="icon-inbox"></i> enter input (stdin)
									<div class="pull-right option-clear">
										<a href="#" class="rel-tooltip" title="Clear the input" onclick="$('#input').val(''); return false;">clear</a>
									</div>
									<div class="clearfix"></div>
								</div>
								<textarea name="input" id="input" rows="2" cols="80"></textarea>
							</div>
						</div>
					</div>
					
					<div class="alert alert-danger hidden" id="input-alert-too-long" style="margin-left: 10px; margin-right: 10px;" role="alert">Your input is too long. It will be cut to 64 KB.</div>
					
					<!-- advanced config: more options -->
					<div class="row " id="ex-more-options">
						<div class="span8">
							<!--
							<div class="row">
								<div class="span8 top-border">
								</div>
							</div>
							-->
															<div class="row">
									<div class="span8">
										<div class="ex-more-options-box" style="padding-bottom: 0px; padding-top: 6px">
											<!-- syntax -->
																							<div class="syntax-box">
													<input type="hidden" name="syntax" value="0" />
													<label for="syntax" class="checkbox"><input type="checkbox" name="syntax" id="syntax" value="1" checked="checked" /> <span>syntax highlight</span></label>
												</div>
																								
																							<div class="timelimit-box">
													<i class="icon-time"></i> time limit:
													<label for="timelimit-0"><input type="radio" name="timelimit" value="0" id="timelimit-0" checked="checked" /> <span>5s</span></label>
													<label for="timelimit-1"><input type="radio" name="timelimit" value="1" id="timelimit-1"  disabled="disabled" /> <span>15s</span></label>
													<a href="/faq#constraints" class="help-link rel-tooltip" target="_blank" title="What's the time limit?" style="margin-left: 2px"><i class="icon-help-circled"></i></a>
												</div>
																					
										</div>
									</div>
								</div>
														<div class="row">
								<div class="span8">
									<div class="ex-more-options-box" style="padding-top: 4px">
										<!-- note -->
										<div style="margin-bottom: 5px">
											<i class="icon-pencil"></i> enter your note
											<div class="pull-right option-clear">
												<a href="#" class="rel-tooltip" title="Clear the note" onclick="$('#note').val(''); return false;">clear</a>
											</div>
											<div class="clearfix"></div>
										</div>
										<textarea name="note" id="note" rows="2" cols="80" ></textarea>
									</div>
								</div>
							</div>
													</div>
					</div>
					
					
						<div class="g" style="text-align: center; height: 90px;">
						


						
						</div>
					
							
					<!-- visible options + submit -->
					<div class="row">
						<div class="span8">
							<div class="footer">
								<!-- lang -->
								
								<input type="hidden" name="_lang" id="_lang" value="29"/>
								
								<!-- simple lang select -->
																
								<!-- advanced lang select -->
																										<div class="dropdown dropup" id="lang_advselect">
									  <a class="dropdown-toggle btn footer-item rel-tooltip" data-toggle="dropdown" href="#" title="Choose language" id="lang-dropdown-menu-button"><span>PHP</span> <b class="caret"></b></a>
									  <div id="lang-dropdown-menu" class="dropdown-menu" role="menu" aria-labelledby="lang-dropdown-menu-button">
									  		<div id="language-details"></div>
									  		<div class="clearfix"></div>
									    	<div class="popular-box">
									    		<legend>popular</legend>
									    		<ul class="popular">
																											<li class="">
															<a href="#" id="menu-lang-28" data-id="28" data-label="Bash"  title="Bash (bash 5.0.3)" class="lang " tabindex="1000">Bash</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-22" data-id="22" data-label="Pascal"  title="Pascal (fpc 3.0.4)" class="lang " tabindex="1009">Pascal</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-11" data-id="11" data-label="C"  title="C (gcc 8.3)" class="lang " tabindex="1001">C</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-3" data-id="3" data-label="Perl"  title="Perl (perl 5.28.1)" class="lang " tabindex="1010">Perl</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-27" data-id="27" data-label="C#"  title="C# (gmcs 5.20.1)" class="lang " tabindex="1002">C#</a>
														</li>
																											<li class="active">
															<a href="#" id="menu-lang-29" data-id="29" data-label="PHP"  title="PHP (php 7.3.5)" class="lang " tabindex="1011">PHP</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-1" data-id="1" data-label="C++"  title="C++ (gcc 8.3)" class="lang " tabindex="1003">C++</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-4" data-id="4" data-label="Python"  title="Python (cpython 2.7.16)" class="lang " tabindex="1012">Python</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-44" data-id="44" data-label="C++14"  title="C++14 (gcc 8.3)" class="lang " tabindex="1004">C++14</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-116" data-id="116" data-label="Python 3"  title="Python 3 (python  3.7.3)" class="lang " tabindex="1013">Python 3</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-21" data-id="21" data-label="Haskell"  title="Haskell (ghc 8.4.4)" class="lang " tabindex="1005">Haskell</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-17" data-id="17" data-label="Ruby"  title="Ruby (ruby 2.5.5)" class="lang " tabindex="1014">Ruby</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-10" data-id="10" data-label="Java"  title="Java (HotSpot 12)" class="lang " tabindex="1006">Java</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-40" data-id="40" data-label="SQLite"  title="SQLite (sqlite 3.27.2)" class="lang " tabindex="1015">SQLite</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-43" data-id="43" data-label="Objective-C"  title="Objective-C (gcc 8.3)" class="lang " tabindex="1007">Objective-C</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-85" data-id="85" data-label="Swift"  title="Swift (swift 4.2.2)" class="lang " tabindex="1016">Swift</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-2" data-id="2" data-label="Pascal"  title="Pascal (gpc 20070904)" class="lang " tabindex="1008">Pascal</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-50" data-id="50" data-label="VB.net"  title="VB.net (mono 4.7)" class="lang " tabindex="1017">VB.net</a>
														</li>
																						    		</ul>
									    	</div>
									    	<div class="rest-box">
									    		<legend>others</legend>
									    		<ul class="rest">
																											<li class="">
															<a href="#" id="menu-lang-7" data-id="7" data-label="Ada95"  title="Ada95 (gnat 8.3)" class="lang " tabindex="1018">Ada95</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-31" data-id="31" data-label="Common Lisp"  title="Common Lisp (sbcl 1.4.16)" class="lang " tabindex="1035">Common Lisp</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-55" data-id="55" data-label="Java"  title="Java (sun-jdk-1.8.0_51)" class="lang " tabindex="1052">Java</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-15" data-id="15" data-label="Prolog"  title="Prolog (swi 7.6.4)" class="lang " tabindex="1068">Prolog</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-45" data-id="45" data-label="Assembler 32bit"  title="Assembler 32bit (gcc 8.3)" class="lang " tabindex="1019">Assembler 32bit</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-32" data-id="32" data-label="Common Lisp"  title="Common Lisp (clisp 2.49.92)" class="lang " tabindex="1036">Common Lisp</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-35" data-id="35" data-label="JavaScript"  title="JavaScript (rhino 1.7.9)" class="lang " tabindex="1053">JavaScript</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-99" data-id="99" data-label="Python"  title="Python (PyPy 2.7.13)" class="lang " tabindex="1069">Python</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-13" data-id="13" data-label="Assembler 32bit"  title="Assembler 32bit (nasm 2.14)" class="lang " tabindex="1020">Assembler 32bit</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-20" data-id="20" data-label="D"  title="D (gdc 8.3)" class="lang " tabindex="1037">D</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-112" data-id="112" data-label="JavaScript"  title="JavaScript (SMonkey 60.2.3)" class="lang " tabindex="1054">JavaScript</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-126" data-id="126" data-label="Python 3 nbc"  title="Python 3 nbc (python 3.7.3)" class="lang " tabindex="1070">Python 3 nbc</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-42" data-id="42" data-label="Assembler 64bit"  title="Assembler 64bit (nasm 2.14)" class="lang " tabindex="1021">Assembler 64bit</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-84" data-id="84" data-label="D"  title="D (ldc 1.12.0)" class="lang " tabindex="1038">D</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-47" data-id="47" data-label="Kotlin"  title="Kotlin (kotlin 1.3.21)" class="lang " tabindex="1055">Kotlin</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-117" data-id="117" data-label="R"  title="R (R 3.5.2)" class="lang " tabindex="1071">R</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-104" data-id="104" data-label="AWK"  title="AWK (gawk 4.2.1)" class="lang " tabindex="1022">AWK</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-102" data-id="102" data-label="D"  title="D (dmd 2.085.0)" class="lang " tabindex="1039">D</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-26" data-id="26" data-label="Lua"  title="Lua (luac 5.3.3)" class="lang " tabindex="1056">Lua</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-95" data-id="95" data-label="Racket"  title="Racket (racket 7.0)" class="lang " tabindex="1072">Racket</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-105" data-id="105" data-label="AWK"  title="AWK (mawk 1.3.3)" class="lang " tabindex="1023">AWK</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-48" data-id="48" data-label="Dart"  title="Dart (dart 2.3.0)" class="lang " tabindex="1040">Dart</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-30" data-id="30" data-label="Nemerle"  title="Nemerle (ncc 1.2.547)" class="lang " tabindex="1057">Nemerle</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-93" data-id="93" data-label="Rust"  title="Rust (rust 1.33.0)" class="lang " tabindex="1073">Rust</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-110" data-id="110" data-label="BC"  title="BC (bc 1.07.1)" class="lang " tabindex="1024">BC</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-96" data-id="96" data-label="Elixir"  title="Elixir (elixir 1.8.2)" class="lang " tabindex="1041">Elixir</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-25" data-id="25" data-label="Nice"  title="Nice (nicec 0.9.13)" class="lang " tabindex="1058">Nice</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-39" data-id="39" data-label="Scala"  title="Scala (scala 2.12.8)" class="lang " tabindex="1074">Scala</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-12" data-id="12" data-label="Brainf**k"  title="Brainf**k (bff 1.0.6)" class="lang " tabindex="1025">Brainf**k</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-36" data-id="36" data-label="Erlang"  title="Erlang (erl 21.3.8)" class="lang " tabindex="1042">Erlang</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-122" data-id="122" data-label="Nim"  title="Nim (nim 0.19.4)" class="lang " tabindex="1059">Nim</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-33" data-id="33" data-label="Scheme"  title="Scheme (guile 2.2.4)" class="lang " tabindex="1075">Scheme</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-81" data-id="81" data-label="C"  title="C (clang 8.0)" class="lang " tabindex="1026">C</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-124" data-id="124" data-label="F#"  title="F# (mono 4.1)" class="lang " tabindex="1043">F#</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-56" data-id="56" data-label="Node.js"  title="Node.js (node 11.12.0)" class="lang " tabindex="1060">Node.js</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-18" data-id="18" data-label="Scheme"  title="Scheme (stalin 0.11)" class="lang " tabindex="1076">Scheme</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-41" data-id="41" data-label="C++ 4.3.2"  title="C++ 4.3.2 (gcc-4.3.2)" class="lang " tabindex="1027">C++ 4.3.2</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-92" data-id="92" data-label="Fantom"  title="Fantom (fantom 1.0.72)" class="lang " tabindex="1044">Fantom</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-83" data-id="83" data-label="Objective-C"  title="Objective-C (clang 8.0)" class="lang " tabindex="1061">Objective-C</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-97" data-id="97" data-label="Scheme"  title="Scheme (chicken 4.13)" class="lang " tabindex="1077">Scheme</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-82" data-id="82" data-label="C++14"  title="C++14 (clang 8.0)" class="lang " tabindex="1028">C++14</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-107" data-id="107" data-label="Forth"  title="Forth (gforth 0.7.3)" class="lang " tabindex="1045">Forth</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-8" data-id="8" data-label="Ocaml"  title="Ocaml (ocamlopt 4.05.0)" class="lang " tabindex="1062">Ocaml</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-23" data-id="23" data-label="Smalltalk"  title="Smalltalk (gst 3.2.5)" class="lang " tabindex="1078">Smalltalk</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-34" data-id="34" data-label="C99"  title="C99 (gcc 8.3)" class="lang " tabindex="1029">C99</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-5" data-id="5" data-label="Fortran"  title="Fortran (gfortran 8.3)" class="lang " tabindex="1046">Fortran</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-127" data-id="127" data-label="Octave"  title="Octave (octave 4.4.1)" class="lang " tabindex="1063">Octave</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-38" data-id="38" data-label="TCL"  title="TCL (tcl 8.6)" class="lang " tabindex="1079">TCL</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-14" data-id="14" data-label="Clips"  title="Clips (clips 6.30)" class="lang " tabindex="1030">Clips</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-114" data-id="114" data-label="Go"  title="Go (go 1.12.1)" class="lang " tabindex="1047">Go</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-54" data-id="54" data-label="Perl"  title="Perl (perl 2018.12)" class="lang " tabindex="1064">Perl</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-62" data-id="62" data-label="Text"  title="Text (text 6.10)" class="lang " tabindex="1080">Text</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-111" data-id="111" data-label="Clojure"  title="Clojure (clojure 1.10.0)" class="lang " tabindex="1031">Clojure</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-98" data-id="98" data-label="Gosu"  title="Gosu (gosu 1.14.9)" class="lang " tabindex="1048">Gosu</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-94" data-id="94" data-label="Pico Lisp"  title="Pico Lisp (pico 18.12.27)" class="lang " tabindex="1065">Pico Lisp</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-115" data-id="115" data-label="Unlambda"  title="Unlambda (unlambda 0.1.4.2)" class="lang " tabindex="1081">Unlambda</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-118" data-id="118" data-label="Cobol"  title="Cobol (gnucobol 2.2.0)" class="lang " tabindex="1032">Cobol</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-121" data-id="121" data-label="Groovy"  title="Groovy (groovy 2.5.6)" class="lang " tabindex="1049">Groovy</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-19" data-id="19" data-label="Pike"  title="Pike (pike 8.0)" class="lang " tabindex="1066">Pike</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-101" data-id="101" data-label="VB.NET"  title="VB.NET (mono-3.10)" class="lang " tabindex="1082">VB.NET</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-106" data-id="106" data-label="COBOL 85"  title="COBOL 85 (tinycobol-0.65.9)" class="lang " tabindex="1033">COBOL 85</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-16" data-id="16" data-label="Icon"  title="Icon (iconc 9.5.1)" class="lang " tabindex="1050">Icon</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-108" data-id="108" data-label="Prolog"  title="Prolog (gprolog 1.4.5)" class="lang " tabindex="1067">Prolog</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-6" data-id="6" data-label="Whitespace"  title="Whitespace (wspace 0.3)" class="lang " tabindex="1083">Whitespace</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-91" data-id="91" data-label="CoffeeScript"  title="CoffeeScript (coffee 2.4.1)" class="lang " tabindex="1034">CoffeeScript</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-9" data-id="9" data-label="Intercal"  title="Intercal (ick 0.3)" class="lang " tabindex="1051">Intercal</a>
														</li> 
																									</ul>
									    	</div>					
									  </div>
									</div>
																									
																
									<!-- show input -->
									<button type="button" class="btn footer-item rel-tooltip" data-toggle="button" title="Specify input (stdin)" id="button-input"><i class="icon-inbox"></i> stdin</button>
																			
								<!-- visibility -->
								<input type="hidden" name="public" value="1" />		
								<div class="btn-group footer-item" data-toggle="buttons-radio" id="btn-group-visibility">
			  						<button type="button" class="rel-tooltip btn active" data-value="1" title="Public - your code will be available to everyone."><i class="icon-globe"></i></button>
			  						<button type="button" class="rel-tooltip btn " data-value="0" title="Secret - your code will be available only to those with whom you share a link."><i class="icon-glasses"></i></button>
			  									  							<button type="button" class="rel-tooltip btn  disabled" disabled="disabled" data-value="-1" title="Private - only you will be able to access the code. You have to be signed in to use this option."><i class="icon-lock"></i></button>
			  														</div>
												
								
																	<!-- more options -->
									<a href="#" id="button-more-options" class="">
										<span class="more-options-more">more&nbsp;options</span>
										<span class="more-options-less">fewer&nbsp;options</span>
									</a>
								 
								
								<!-- submit -->
								<div class="pull-right">
									<input type="hidden" name="run" value="1" />
									<button type="submit" name="Submit" id="Submit" tabindex="2" class="btn btn-success footer-item rel-tooltip" title="Run the program (Ctrl+Enter)" >
										<i class="icon-cog-alt"></i>
										Run									</button>
								</div>
								
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="span4">
					
					
						
					
					<!-- ad -->
					<div class="right-sidebar" data-spy="_affix" data-offset-top="40" >

						<script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7D65QE&placement=ideonecom" id="_carbonads_js"></script>


						
												
						<a href="http://spoj.com/?utm_campaign=permanent&utm_medium=main-right&utm_source=ideone" target="_blank">
							<img src="//stx1.ideone.com/gfx2/img/spoj.png" style="width: 370px;"/>
						</a>
						
						
<div class="col-md-12 discover-sphere-engine-api">
	<h4>Discover &gt; <a href="/sphere-engine">Sphere Engine API</a></h4>
	<p>The brand new service which powers Ideone!</p>
	
	<h4>Discover &gt; <a href="/sphere-engine-widget">IDE Widget</a></h4>
    <p>Widget for compiling and running the source code in a web browser!</p>
</div>

						
					</div>
					
					

				</div>
			</div>
			
			
						</div>
						
						<!-- /.item -->
						<div class="item">
							
							
						</div>
						<!-- /.item -->
						<div class="item">
											
						</div>
					</div>
					<!-- 
						<a class="left carousel-control" href="#featured-project-carousel" data-slide="prev">???</a> 
						<a class="right carousel-control" href="#featured-project-carousel" data-slide="next">???</a> </div>
					 -->
				</div>
			</div>
		</div>
		
	</div>
</section>
<div class="bor"></div>
	
<div class="container">
	
	<div class="row">
		<!-- TODO: translate -->
		<div class="span8">
			<div class="row">
				<div class="span4 home-info-box">
					<legend>What is Ideone?</legend> 
					Ideone is an online compiler and debugging tool which allows you to compile source code and execute it online in more than 60 programming languages. 
				</div>
				<div class="span4 home-info-box">
					<legend>How to use Ideone?</legend> 
					Choose a programming language, enter the source code with optional input data... and you are ready to go!
				</div>
			</div>
			<div class="row">
				<div class="span4 home-info-box">
					<legend>Having problems?</legend> 
					Check the <a href="/samples">samples</a> to see how to write code which works correctly.To find out more visit <a href="/faq">our FAQ section</a>. 
				</div>
				<div class="span4">
					<legend>Sphere Engine&trade;</legend>
					We are proud to present our <strong>Sphere Engine&trade;</strong> technology, which allows you to execute programs on a remote serverin a secure way within a complete runtime environment. Visit the <a href="http://sphere-engine.com/?utm_campaign=permanent&utm_medium=main&utm_source=ideone" target="_blank">Sphere Engine&trade; website</a> to find out more.
				</div>
			</div>
			<div class="row">
			</div>
		</div>
		
		<div class="span4 home-info-box">
						<legend>
				Follow us
				<div class="pull-right">
					<a 
						class="btn-social btn-twitter" 
						title="Follow @ideone on Twitter" 
						href="https://twitter.com/intent/follow?screen_name=ideone"
						target="_blank"
					>
						<i class="icon-twitter"></i>
						<span>Follow <b>@ideone</b></span>
					</a>
				</div>
			</legend>
			<div>
				<a href="https://www.facebook.com/ideone/" target="_blank" style="">
					<img src="/gfx2/img/facebook-box.png" alt="Facebook Ideone" style="width: 100%">
				</a>
			</div>
					</div>
	</div>
</div>

</form>

<!-- Modal shortcuts-->
<div class="modal hide fade" id="editorShortcuts" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Shortcuts</h4>
      </div>
      <div class="modal-body">
      	<div class="shortcuts-editor-label">Global</div>
        <ul class="shortcuts-editor-list">
        	<li><span class="key">Ctrl <span class="plus">+</span> Enter</span> <span class="command">run</span></li>
        </ul>
        
        <div class="shortcuts-editor-label">Ace editor</div>
        <ul class="shortcuts-editor-list">
        	<li><span class="key">Ctrl <span class="plus">+</span> Enter</span> <span class="command">run</span></li>
        </ul>
        
        <div class="shortcuts-editor-label">Textarea</div>
        <ul class="shortcuts-editor-list">
        	<li><span class="key">Ctrl <span class="plus">+</span> Enter</span> <span class="command">run</span></li>
        </ul>
        
      </div>
    </div>
  </div>
</div>

			
		
				
			<div id="footer" class="footer shadow-inner-top">
				<div class="container">
									<a href="http://sphere-research.com?utm_campaign=permanent&utm_medium=footer&utm_source=ideone" target="_blank">Sphere Research Labs</a>.
					Ideone is powered by <a href="http://sphere-engine.com/?utm_campaign=permanent&utm_medium=footer&utm_source=ideone" target="_blank">Sphere Engine&trade;</a>
								
				<p id="footer-links">
					<a href="/">Home</a>
					
					<a href="https://sphere-engine.com/?utm_campaign=permanent&utm_medium=sphereengine&utm_source=ideone" target="_blank">API</a>
					
											<a href="#" data-toggle="modal" data-target="#lang-dialog">Language</a>  
										<a href="/faq">FAQ</a>
					<a href="/credits">Credits</a>
					
					
										<span style="margin-left: 20px">
													desktop
				 			<a href="/switch/mobile/Lw==" class="margin-left">mobile</a>
									 		</span>
			 		<br/>
			 		<a href="/legal-tos">Terms of Service</a>
			 		<a href="/legal-pp">Privacy Policy</a>
			 		<a href="/legal-gdpr">GDPR Info</a>
				</p>
				
				<a href="/ideone/Tools/bug/form/1" id="show_bug_dialog" data-toggle="modal" data-target="#bug-dialog">Feedback &amp; Bugs</a>
					
				<!-- 
				<p class="values">7, 0.16s, 0.20s</p>
				-->
				
				<br>
			    <p><strong>Popular languages:</strong></p>
			    <p>
			         <a href="/l/bash">Bash</a>
                     <a href="/l/pascal">Pascal</a>
                     <a href="/l/c">C</a>
                     <a href="/l/perl">Perl</a>
                     <a href="/l/c-sharp">C#</a>
                     <a href="/l/php">PHP</a>
                     <a href="/l/cpp">C++</a>
                     <a href="/l/pascal">Python</a>
                     <a href="/l/cpp14">C++14</a>
                     <a href="/l/python-3">Python3</a>
                     <a href="/l/haskell">Haskell</a>
                     <a href="/l/ruby">Ruby</a>
                     <a href="/l/java">Java</a>
                     <a href="/l/sqlite">SQLite</a>
                     <a href="/l/objective-c">Objective-C</a>
                     <a href="/l/swift">Swift</a>
                     <a href="/l/vb-net">VB.net</a>
                     <br/>
                     <a href="/languages">List of all supported programming languages</a>
			    </p>
				
				</div>
			</div>
						
			
			
<div class="modal hide fade" id="bug-dialog" role="dialog" tabindex="-1">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Report bug / make suggestion</h3>
  </div>
  <div class="modal-body">
	<img src="//stx1.ideone.com/gfx/loader.gif" style="width: 14px; height: 14px;" alt="loading..."/>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn" data-dismiss="modal">Close</a>
    <a href="#" class="btn btn-primary" id="bug-dialog-submit">submit</a>
  </div>
</div>


<div class="modal hide fade" id="lang-dialog">
	<div class="modal-header">
    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    	<h3>Choose your language</h3>
	</div>
	<div class="modal-body">
		<ul style="list-style-type: none;">
			<li><a href="/lang/en"><b>English</b></a></li>
			<li><a href="/lang/hi">Hindi</a></li>
			<li><a href="/lang/hu">Hungarian</a></li>
			<li><a href="/lang/mn">Mongolian</a></li>
			<li><a href="/lang/pl">Polish</a></li>
			<li><a href="/lang/ru">Russian</a></li>
			<li><a href="/lang/es">Spanish</a></li>
			<li><a href="/lang/zh">Traditional Chinese</a></li>
					</ul>
		
	</div>
  <div class="modal-footer">
    <a href="#" class="btn" data-dismiss="modal">close</a>
  </div>
</div>



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-10507872-8', 'auto');
  ga('send', 'pageview');
</script>
<script type="text/javascript">
$(function(){
	$(document).on('click', '.track', function(){
		var event = $(this).attr('data-event');
		var action = $(this).attr('data-action');
		var value = $(this).attr('data-value');
		ga('send', 'event', event, action, value);
		console.log(event);
	});
});
</script>
<!-- Hotjar Tracking Code for http://ideone.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:334655,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>

<script>
</script>


<script src="//m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
		if(typeof _bsa !== 'undefined' && _bsa) {
			  		// format, zoneKey, segment:value, options
			  		_bsa.init('flexbar', 'CK7D4KJJ', 'placement:ideonecom');
					  	}
})();
</script>


		</div><!-- end of #_container -->


<!--
<script type="text/javascript">
(function() {
        var wrc = document.createElement('script'); wrc.type = 'text/javascript'; wrc.async = true; window.rc_utm_source='ideone';
        wrc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'recruitcoders.com/w4loader.js';
        var s = document.getElementsByTagName('body')[0]; s.appendChild(wrc);
})();
</script>
-->


	</body>
</html>


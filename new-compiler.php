
<!DOCTYPE html>
<html>
<head>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-88359968-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments); }
  gtag('js', new Date());
  gtag('config', 'UA-88359968-3');
  </script>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
<meta name="Description" content="Compile and execute code online in C, C++, Java, Python, PHP, Javascript, Kotlin, Swift, C#, Go, Pascal, Ruby, etc with our online compiler and powerful IDE.">
<meta name="keywords" content="online compiler, online ide, run code online, execute code online">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:image" content="https://i0.wp.com/www.techiedelight.com/wp-content/uploads/profile_pic.png" />
<title>Online Compiler - C/C++, Java, Python.. | Techie Delight</title>
<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.1/ace.js"></script>
<link rel="stylesheet" href="https://res.cloudinary.com/techiedelight/raw/upload/v1579381393/compiler/style.min.css">
<script src="https://res.cloudinary.com/techiedelight/raw/upload/v1590348571/lang/app.min.js"></script>
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
<link rel="icon" href="./favicon.ico" type="image/x-icon">
<script type="text/javascript">(function(){var bsa_optimize=document.createElement('script');bsa_optimize.type='text/javascript';bsa_optimize.async=true;bsa_optimize.src='https://cdn-s2s.buysellads.net/pub/techiedelight.js?'+(new Date()-new Date()%3600000);(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa_optimize);})();</script>
<script src="https://m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
  if (window.document.documentMode) {
    alert("Internet Explorer is not supported. Consider upgrading to Chrome for best experience.");
  }
  </script>
</head>
<body>
<div id="loader"></div>
<nav class="navbar navbar-default navbar-static-top">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="https://www.techiedelight.com/">
TECHIE DELIGHT &lt;/>
</a>
</div>
<div class="navbar-form navbar-right">
<div class="input-group button">
<div class="input-group-btn">
<button id="insertTemplateBtn" type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Insert template">
<i class="fa fa-code" aria-hidden="true"></i>
</button>
</div>
<select class="form-control select-radius" id="selectLanguageBtn">
<option value="50" mode="c_cpp">C (GCC 9.2.0)</option>
<option value="49" mode="c_cpp">C (GCC 8.3.0)</option>
<option value="48" mode="c_cpp">C (GCC 7.4.0)</option>
<option value="75" mode="c_cpp">C (Clang 7.0.1)</option>
<option selected value="54" mode="c_cpp">C++ (GCC 9.2.0)</option>
<option value="53" mode="c_cpp">C++ (GCC 8.3.0)</option>
<option value="52" mode="c_cpp">C++ (GCC 7.4.0)</option>
<option value="76" mode="c_cpp">C++ (Clang 7.0.1)</option>
<option value="62" mode="java">Java (OpenJDK 13.0.1)</option>
<option value="71" mode="python">Python (3.8.1)</option>
<option value="70" mode="python">Python (2.7.17)</option>
<option value="68" mode="php">PHP (7.4.1)</option>
<option value="63" mode="javascript">JavaScript (Node.js 12.14.0)</option>
<option value="74" mode="typescript">TypeScript (3.7.4)</option>
<option value="51" mode="csharp">C# (Mono 6.6.0.161)</option>
<option value="78" mode="kotlin">Kotlin (1.3.70)</option>
<option value="83" mode="swift">Swift (5.2.3)</option>
<option value="79" mode="objectivec">Objective-C (Clang 7.0.1)</option>
<option value="45" mode="assembly_x86">Assembly (NASM 2.14.02)</option>
<option value="46" mode="sh">Bash (5.0.0)</option>
<option value="47" mode="pascal">Basic (FBC 1.07.1)</option>
<option value="77" mode="cobol">COBOL (GnuCOBOL 2.2)</option>
<option value="55" mode="lisp">Common Lisp (SBCL 2.0.0)</option>
<option value="56" mode="d">D (DMD 2.089.1)</option>
<option value="57" mode="elixir">Elixir (1.9.4)</option>
<option value="58" mode="erlang">Erlang (OTP 22.2)</option>
<option value="44" mode="plain_text">Executable</option>
<option value="59" mode="fortran">Fortran (GFortran 9.2.0)</option>
<option value="60" mode="golang">Go (1.13.5)</option>
<option value="61" mode="haskell">Haskell (GHC 8.8.1)</option>
<option value="64" mode="lua">Lua (5.3.5)</option>
<option value="80" mode="r">R (4.0.0)</option>
<option value="81" mode="scala">Scala (2.13.2)</option>
<option value="82" mode="sql">SQL (SQLite 3.27.2)</option>
<option value="65" mode="ocaml">OCaml (4.09.0)</option>
<option value="66" mode="plain_text">Octave (5.1.0)</option>
<option value="67" mode="pascal">Pascal (FPC 3.0.4)</option>
<option value="69" mode="prolog">Prolog (GNU Prolog 1.4.5)</option>
<option value="72" mode="ruby">Ruby (2.7.0)</option>
<option value="73" mode="rust">Rust (1.40.0)</option>
<option value="84" mode="vbscript">Visual Basic.Net (vbnc 0.0.0.5943)</option>
<option value="43" mode="plain_text">Plain Text</option>
</select>
<div class="input-group-btn" style="padding-left: 4px;">
<input class="form-control args" id="command-line-arguments" type="text" placeholder="Command line arguments"></input>
</div>
</div>
<button class="btn btn-success button" id="runBtn" data-loading-text="Running..." data-toggle="tooltip" data-placement="bottom" title="Run source code (Press F9 or Ctrl+Enter)">
<i class="fa fa-play" aria-hidden="true"></i> Run (F9)
</button>
<span class="dropdown">
<button id="controller" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-primary button" data-loading-text="Saving...">
<span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Share (Ctrl+S)
</button>
<div class="dropdown-menu" aria-labelledby="controller">
<label for="basic-url">Your vanity URL</label>
<div class="input-group">
<span class="input-group-addon" id="basic-addon3">https://techiedelight.com/compiler/?~</span>
<input type="text" class="form-control" id="basic-url" placeholder="custom label" aria-describedby="basic-addon3">
</div>
<div style="height: 7px;"></div>
<button type="submit" id="saveBtnCustom" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Save the source code using a custom URL">Save</button>
<button type="submit" id="saveBtn" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Save the source code using a random URL">Generate Random Label</button>
</div>
</span>
<button class="btn btn-light button" id="embedSourceCode" data-toggle="tooltip" data-placement="bottom" title="Embed the source code in your website"><i class="fa fa-share" aria-hidden="true"></i> Embed</button>
<button class="btn btn-light button" id="toggleEditorOptions" data-toggle="tooltip" data-placement="bottom" title="Customize the editor to suit your preferences"><span class="glyphicon glyphicon-edit"></span> Customize</button>

</div>
</div>
</nav>
<div id="controller">
<table id="content">
<tr>
<td class="main-content" style="vertical-align: top">
<div class="container-fluid">
<div class="row">
<div id="editorOptions" class="container-fluid">
<br>
<div class="row">
<div class="col-xs-2 pad"><input type="checkbox" id="showLines" checked data-toggle="toggle" data-on="Line Numbers" data-size="small" data-off="Line Numbers" data-onstyle="success" data-width="140"></div>
<div class="col-xs-2 pad"><input type="checkbox" id="autoComplete" checked data-toggle="toggle" data-on="Auto Complete" data-size="small" data-off="Auto Complete" data-onstyle="success" data-width="145"></div>
<div class="col-xs-2 pad"><input type="checkbox" id="wrap" checked data-toggle="toggle" data-on="Line Wrap" data-size="small" data-off="Line Wrap" data-onstyle="success" data-width="120"></div>
<div class="col-xs-2 pad" id="multi_tab"><input type="checkbox" id="multitab" checked data-toggle="toggle" data-on="Multi Tab" data-size="small" data-off="Multi Tabs" data-onstyle="success" data-width="120"></div>
<div class="col-xs-2 pad">
<table style="margin-top: -1px;"><tr style="height: 34px;">
<td style="padding: -2px 10px 0px 0px;">
<input type="checkbox" id="tabs" data-toggle="toggle" data-on="Soft Tabs" data-off="Soft Tabs" data-size="small" data-onstyle="success" data-width="120">
</td>
<td>&nbsp;&nbsp;</td>
<td><input type="number" class="form-control" id="spaces" min="1" max="8" value="4"></td>
</tr>
</table>
</div>
</div>
<br />
<div class="row">
<table>
<tr>
<td class="pad15"><label>Select Editor Theme: </label></td>
<td><select id="themes" class="form-control">
<optgroup label="Bright">
<option value="chrome">Chrome</option>
<option value="clouds">Clouds</option>
<option value="crimson_editor">Crimson Editor</option>
<option value="dawn">Dawn</option>
<option value="dreamweaver">Dreamweaver</option>
<option value="eclipse">Eclipse</option>
<option value="github">GitHub</option>
<option value="iplastic">IPlastic</option>
<option value="solarized_light">Solarized Light</option>
<option selected value="textmate">TextMate</option>
<option value="tomorrow">Tomorrow</option>
<option value="xcode">XCode</option>
<option value="kuroir">Kuroir</option>
<option value="katzenmilch">KatzenMilch</option>
<option value="sqlserver">SQL Server</option>
</optgroup>
<optgroup label="Dark">
<option value="ambiance">Ambiance</option>
<option value="chaos">Chaos</option>
<option value="clouds_midnight">Clouds Midnight</option>
<option value="dracula">Dracula</option>
<option value="cobalt">Cobalt</option>
<option value="gruvbox">Gruvbox</option>
<option value="gob">Green on Black</option>
<option value="idle_fingers">idle Fingers</option>
<option value="kr_theme">krTheme</option>
<option value="merbivore">Merbivore</option>
<option value="merbivore_soft">Merbivore Soft</option>
<option value="mono_industrial">Mono Industrial</option>
<option value="monokai">Monokai</option>
<option value="pastel_on_dark">Pastel on dark</option>
<option value="solarized_dark">Solarized Dark</option>
<option value="terminal">Terminal</option>
<option value="tomorrow_night">Tomorrow Night</option>
<option value="tomorrow_night_blue">Tomorrow Night Blue</option>
<option value="tomorrow_night_bright">Tomorrow Night Bright</option>
<option value="tomorrow_night_eighties">Tomorrow Night 80s</option>
<option value="twilight">Twilight</option>
<option value="vibrant_ink">Vibrant Ink</option>
</optgroup>
</select></td>
</tr>
</table>
<table>
<tr>
<td class="pad15"><label>Font Size: </label></td>
<td><input type="number" id="font_size" class="form-control" min="12" max="24" value="14"></td>
</tr>
</table>
<label class="btn btn-success btn-sm" id="showSettingsMenu">Show all editor options</label>
</div>
</div>
</div>
<div class="row">
<div>
<ul class="nav nav-tabs">
<li role="presentation" id="0" class="active multitabs"><a onclick="swichEditor(0)" href="#"><span id="span0"><strong>Code</strong></span></a></li>
<li id="addTabIcon" class="multitabs" role="presentation" onclick="Editor.addNewTab()"><a href="#"><i class="fa fa-plus-square" aria-hidden="true"></i>
</a></li>
<div id="options" class="pull-right" style="margin-right: 8px;">
<label class="btn btn-default transparent" data-toggle="tooltip" data-placement="bottom" title="Upload source code"><input type="file" id="file-upload" name="file" onchange="loadFromDisk(this, 'editor')" /><i class="fa fa-upload" aria-hidden="true"></i></label>
<button class="btn btn-default transparent" id="indent" data-toggle="tooltip" data-placement="bottom" title="Indent source code"><i class="fa fa-indent" aria-hidden="true"></i></button>
<button class="btn btn-default transparent" onclick="copyToClipboard('input')" data-toggle="tooltip" data-placement="bottom" title="Copy source code"><i class="fa fa-clone" aria-hidden="true"></i></button>
<button class="btn btn-default transparent" id="downloadSourceBtn" data-toggle="tooltip" data-placement="bottom" title="Download source code"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></button>
<button class="btn btn-default transparent" id="showKeyboardShortcuts" data-toggle="tooltip" data-placement="bottom" title="Show all keyboard shortcuts"><i class="fa fa-keyboard-o" aria-hidden="true"></i></button>
<button id="expand" data-toggle="tooltip" data-placement="bottom" title="Maximize editor" onclick="fullScreen();" class="btn btn-default transparent fa fa-arrows-alt"></button>
</div>
</ul>
</div>
</div>
<div id="sourceEditor" class="row">
<div id="ide_0" class="editor"></div>
</div>
<div class="row labels">
<div id="inputLabel" class="col-xs-5">
<h4>
<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Input <small>optional</small>
<div id="btn-group" class="pull-right">
<label class="btn btn-default transparent" data-toggle="tooltip" data-placement="bottom" title="Upload input file" style="padding: 0px"><input type="file" id="input-upload" name="file" onchange="loadFromDisk(this, 'input')" /><i class="fa fa-upload" aria-hidden="true"></i></label>
</div>
</h4>
</div>
<div id="outputLabel" class="col-xs-7">
<h4>
<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Output
<div id="btn-group" class="pull-right">
<button class="btn btn-default transparent" onclick="copyToClipboard('output')" data-toggle="tooltip" data-placement="bottom" title="Copy output"><i class="fa fa-clone" aria-hidden="true"></i></button>
<button class="btn btn-default transparent" id="downloadOutputBtn" data-toggle="tooltip" data-placement="bottom" title="Download output"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></button>
<button class="btn btn-default transparent fa fa-arrows-alt" id="hideInputBtn" data-toggle="tooltip" data-placement="bottom" title="Maximize output"></button>
</div>
<small id="emptyIndicator">empty</small>
<small class="pull-right" id="statusLine"></small>
</h4>
</div>
</div>
<div id="ioEditor" class="row">
<div id="iEditor">
<div id="inputEditor_0" class="col-xs-5 inputEditor"></div>
</div>
<div id="oEditor">
<div id="outputEditor_0" class="col-xs-7 outputEditor"></div>
</div>
</div>
</td>
<td style="vertical-align: top">
<div id="sidebar-primary" class="hidden-xs hidden-sm widget sidebar">
<br /><br />
<div class="ads">

<div id=bsa-zone_1571848001298-1_123456></div>
<br />

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle" style="display:inline-block;width:300px;height:600px" data-ad-client="ca-pub-8369054522516884" data-ad-slot="5084022257"></ins>
<script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
</div>
<div hidden class="adblock">

</div>
</div>
</td>
</tr>
</table>
<footer id="footer">
<div class="second-bar">
<div class="container-fluid footer-padding">
<i class="fa fa-copyright"></i>
<script language="JavaScript" type="text/javascript">
          document.write(new Date().getFullYear());
        </script>
Copyright <a class="font15" href="https://www.techiedelight.com/">Techie Delight</a>
<a class="font15" href="https://www.techiedelight.com/contact/">Contact</a>
<a class="font15" href="https://ace.c9.io/" target="_blank" rel="nofollow noopener noreferrer">Credits</a>
<a class="font15" href="https://www.techiedelight.com/privacy-policy/">Privacy Policy</a>
<a class="font15" href="https://github.com/judge0/api" target="_blank" rel="nofollow noopener noreferrer">Powered By Judge0 API</a>
<a class="font15" href="https://techiedelight.com/tools/" target="_blank">Tools</a>
<div class="social-icons">
<a href="https://www.facebook.com/techiedelight/" class="facebook"><i class="fa fa-facebook"></i></a>
<a href="https://twitter.com/techie_delight" class="twitter"><i class="fa fa-twitter"></i></a>
</div>
</div>
</div>
</footer>
<div id="cookie_directive_container" class="container">
<nav class="navbar navbar-default navbar-fixed-bottom">
<div class="container" style="width: 100%">
<div class="row hidden-xs">
<div class="col-sm-10">
<p class="credit">This website uses cookies. By using this site you agree to the use of cookies,
our policies, copyright terms and other conditions. <a href="https://www.techiedelight.com/privacy-policy/">Read our Privacy Policy</a>.</p>
</div>
<div class="col-sm-2" style="padding-right: 5px;">
<a onclick="setCookie()" class="btn btn-light pull-right">Close and accept</a>
</div>
</div>
<div class="row hidden-sm hidden-md hidden-lg">
<div class="container-fluid">
<div class="row">
<p class="text-muted credit">This website uses cookies. By using this site you agree to the use of
cookies,
our policies, copyright terms and other conditions. <a href="https://www.techiedelight.com/privacy-policy/">Read our Privacy
Policy</a>.</p>
</div>
<div class="row">
<a onclick="setCookie()" class="btn btn-light">Close and accept</a>
</div>
</div>
</div>
</div>
</nav>
</div>
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="mi-modal">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header" style="border-bottom: 0px;">
<h5 class="modal-title">Are you sure? Your current changes will be lost.</h5>
</div>
<div class="modal-footer" style="border-top: 0px;">
<button type="button" class="btn btn-success" id="modal-btn-yes" data-dismiss="modal">Yes</button>
<button type="button" class="btn btn-primary" id="modal-btn-no" data-dismiss="modal">No</button>
</div>
</div>
</div>
</div>
<div class="modal fade" id="alert" role="dialog" tabindex='-1'>
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<div id="model-content"></div>
</div>
<div class="modal-footer modal-footer-style">
<input type="submit" class="btn btn-md btn-link" value="Close" data-dismiss="modal">
</div>
</div>
</div>
</div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/downloadjs/1.4.8/download.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://res.cloudinary.com/techiedelight/raw/upload/v1541880278/beautify.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.1/ext-language_tools.js"></script>
<script>
  var nowDate = new Date();
  var date = nowDate.getDate()+'/'+(nowDate.getMonth()+1)+'/'+nowDate.getFullYear();
  var prevDate = localStorageGetItem("date");
  if (!prevDate || prevDate != date) {
    $('.ads').show();
  }
  
  if (!localStorageGetItem("visited")) {
    $("#cookie_directive_container").show();
  }

  var e = document.createElement('div');
  e.innerHTML = '&nbsp;';
  e.className = 'adsbox';
  document.body.appendChild(e);
  window.setTimeout(function() {
    if (e.offsetHeight === 0) {
      $('.adblock').show();
    }
    e.remove();
  }, 100);
  </script>
<script>
  (function(){
    if(typeof _bsa !== 'undefined' && _bsa) {
        _bsa.init('stickybox', 'CK7D5K7I', 'placement:techiedelightcom');
      }
  })();
  </script>
<script>
  (function(){
    if(typeof _bsa !== 'undefined' && _bsa) {
      _bsa.init('flexbar', 'CE7DPK3U', 'placement:wwwtechiedelightcom');
    }
  })();
  </script>
</body>
</html>
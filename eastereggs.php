<?php
	if ((isset($_COOKIE['pony'])) && ($_COOKIE['pony'] != false)) {
		//echo '<center><img src="images/pinkie.png"></center>';
		//echo 'pony '.$_COOKIE['pony'];
		if ($_COOKIE['pony'] == 'normal'){
		
		echo '<script type="text/javascript">
				//<!--
				(function (srcs, cfg) { "use strict"; var cbcount = 1; var callback = function () {--cbcount;if (cbcount === 0) {BrowserPonies.setBaseUrl(cfg.baseurl);if (!BrowserPoniesBaseConfig.loaded) {BrowserPonies.loadConfig(BrowserPoniesBaseConfig);BrowserPoniesBaseConfig.loaded = true;}BrowserPonies.loadConfig(cfg);if (!BrowserPonies.running()) {BrowserPonies.start();}}}; if (typeof BrowserPoniesConfig === "undefined") { window.BrowserPoniesConfig = {}; } if (typeof BrowserPoniesBaseConfig === "undefined") { ++cbcount; BrowserPoniesConfig.onbasecfg = callback; } if (typeof BrowserPonies === "undefined") { ++cbcount; BrowserPoniesConfig.oninit = callback; } var node = document.body || document.documentElement || document.getElementsByTagName("head")[0]; for (var id in srcs) { if (document.getElementById(id)) { continue; } if (node) { var s = document.createElement("script"); s.type = "text/javascript"; s.id = id; s.src = srcs[id]; node.appendChild(s); } else { document.write("<script type=\"text/javscript\" src=\"" + srcs[id] + "\" id=\"" + id + "\"></script>"); } } callback();
				})({"browser-ponies-script":"http://web.student.tuwien.ac.at/%7Ee0427417/browser-ponies/browserponies.js","browser-ponies-config":"http://web.student.tuwien.ac.at/%7Ee0427417/browser-ponies/basecfg.js"},{"baseurl":"http://web.student.tuwien.ac.at/%7Ee0427417/browser-ponies/","fadeDuration":500,"fps":25,"speed":3,"audioEnabled":false,"showLoadProgress":true,"speakProbability":0.1,"spawn":{"applejack":1,"fluttershy":1,"pinkie pie":1,"rainbow dash":1,"rarity":1,"twilight sparkle":1}});
				//-->
				</script>';
		} else if ($_COOKIE['pony'] == 'scoot'){
				
		echo '<script type="text/javascript">
				//<!--
				(function (srcs,cfg) { var cbcount = 1; var callback = function () { -- cbcount; if (cbcount === 0) { BrowserPonies.setBaseUrl(cfg.baseurl); if (!BrowserPoniesBaseConfig.loaded) { BrowserPonies.loadConfig(BrowserPoniesBaseConfig); BrowserPoniesBaseConfig.loaded = true; } BrowserPonies.loadConfig(cfg); if (!BrowserPonies.running()) BrowserPonies.start(); } }; if (typeof(BrowserPoniesConfig) === "undefined") { window.BrowserPoniesConfig = {}; } if (typeof(BrowserPoniesBaseConfig) === "undefined") { ++ cbcount; BrowserPoniesConfig.onbasecfg = callback; } if (typeof(BrowserPonies) === "undefined") { ++ cbcount; BrowserPoniesConfig.oninit = callback; } var node = (document.body || document.documentElement || document.getElementsByTagName(\'head\')[0]); for (var id in srcs) { if (document.getElementById(id)) continue; if (node) { var s = document.createElement(\'script\'); s.type = \'text/javascript\'; s.id = id; s.src = srcs[id]; node.appendChild(s); } else { document.write(\'\u003cscript type="text/javscript" src="\'+ srcs[id]+\'" id="\'+id+\'"\u003e\u003c/script\u003e\'); } } callback();
				})({"browser-ponies-script":"http://web.student.tuwien.ac.at/~e0427417/browser-ponies/browserponies.js","browser-ponies-config":"http://web.student.tuwien.ac.at/~e0427417/browser-ponies/basecfg.js"},{"baseurl":"http://web.student.tuwien.ac.at/~e0427417/browser-ponies/","fadeDuration":500,"volume":1,"fps":25,"speed":3,"audioEnabled":false,"showFps":false,"showLoadProgress":true,"speakProbability":0.1,"spawn":{"scootaloo":100}});
				//-->
				</script>';
		} else if ($_COOKIE['pony'] == 'scoottalk') {
			echo '<script type="text/javascript" src="http://panzi.github.com/Browser-Ponies/basecfg.js" id="browser-ponies-config"></script>
		<script type="text/javascript" src="http://panzi.github.com/Browser-Ponies/browserponies.js" id="browser-ponies-script"></script>
		<script type="text/javascript">/* <![CDATA[ */ (function (cfg) {BrowserPonies.setBaseUrl(cfg.baseurl);BrowserPonies.loadConfig(BrowserPoniesBaseConfig);BrowserPonies.loadConfig(cfg);})({"baseurl":"http://panzi.github.com/Browser-Ponies/","fadeDuration":500,"volume":1,"fps":60,"speed":25,"audioEnabled":true,"showFps":false,"showLoadProgress":true,"speakProbability":1,"spawn":{"scootaloo":100},"autostart":true}); /* ]]> */</script>';
		
		}

	}




if ((isset($_COOKIE['robotrock'])) && ($_COOKIE['robotrock'] != false)) {
		if ($_COOKIE['robotrock'] == 'normal'){
		
		echo '<h1>Robot Rock!</h1><embed name="lostmojo" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F7097331" loop="false" hidden="true" autostart="true">';
}
}


if ((isset($_COOKIE['space'])) && ($_COOKIE['space'] != false)) {
		if ($_COOKIE['space'] == 'normal'){
		
		echo '<img src="http://images1.wikia.nocookie.net/__cb20110501230536/half-life/en/images/3/3d/SpaceCore.jpg" width="100px" style="position:absolute; right:0px;">';
}
}
?>
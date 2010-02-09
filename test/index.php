<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="matthias loitsch" />

	<title>Opentip tests</title>

	<style type="text/css">
		@import "../opentip.css";
		
		
		body {
			font-family: arial, sans-serif;
			font-size: 14px;
		}
		
		#container {
			width: 980px;
			border: 1px solid silver;
			margin: 10px auto;
		}
		.test {
			border: 1px solid silver;
			margin: 10px 15px;
			display: inline-block;
			width: 200px;
			padding: 5px 10px;
			background: #eeeeee;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
		}
		
	</style>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/prototype/1.6.0.3/prototype.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/scriptaculous/1.8.2/scriptaculous.js"></script>

	<script type="text/javascript" src="../opentip.js"></script>
	<script type="text/javascript">
		Opentip.debugging = true;
// 		Opentip.defaultStyle = 'rounded';
		Opentip.styles.codeSample = {
			showOn: 'click',
			hideOn: 'click',
			targetJoint: [ 'right', 'middle' ],
			tipJoint: [ 'left', 'middle' ],
			stem: true
		}
	</script>

</head>
<body>

<div id="container">


	<div class="test" id="id1">
		All styles without title
	</div>
	<script type="text/javascript">
		$('id1').addTip('Slick', { style: 'slick', tipJoint: [ 'left', 'middle' ], target: true });
		$('id1').addTip('Rounded', { style: 'rounded', tipJoint: [ 'left', 'top' ], target: true });
		$('id1').addTip('Standard', { style: 'standard', tipJoint: [ 'center', 'top' ], target: true });
		$('id1').addTip('Glass blabla and more', { style: 'glass', tipJoint: [ 'left', 'top' ], target: true, offset: [ 0, 30 ] });
	</script>
	<br />

	<div class="test" id="id2">
		All styles with title
	</div>
	<script type="text/javascript">
		$('id2').addTip('Slick', 'Title', { style: 'slick', tipJoint: [ 'left', 'middle' ], target: true });
		$('id2').addTip('Rounded', 'Title', { style: 'rounded', tipJoint: [ 'left', 'top' ], target: true, offset: [ 0, 10 ] });
		$('id2').addTip('Standard', 'Title', { style: 'standard', tipJoint: [ 'center', 'top' ], target: true });
		$('id2').addTip('Glass blabla and more', 'Some title', { style: 'glass', tipJoint: [ 'left', 'top' ], target: true, offset: [ 0, 50 ] });
	</script>

	<br />

	<div class="test" id="id3">
		All styles without title and close button
	</div>
	<script type="text/javascript">
		$('id3').addTip('Slick', { style: 'slick', tipJoint: [ 'left', 'middle' ], hideTrigger: 'closeButton', target: true });
		$('id3').addTip('Rounded', { style: 'rounded', tipJoint: [ 'left', 'top' ], hideTrigger: 'closeButton', target: true });
		$('id3').addTip('Standard', { style: 'standard', tipJoint: [ 'center', 'top' ], hideTrigger: 'closeButton', target: true });
		$('id3').addTip('Glass blabla and more', { style: 'glass', tipJoint: [ 'left', 'top' ], hideTrigger: 'closeButton', target: true, offset: [ 0, 30 ] });
	</script>
	<br />

	<div class="test" id="id4">
		All styles with title and close button
	</div>
	<script type="text/javascript">
		$('id4').addTip('Slick', 'Title', { style: 'slick', tipJoint: [ 'left', 'middle' ], hideTrigger: 'closeButton', target: true });
		$('id4').addTip('Rounded', 'Title', { style: 'rounded', tipJoint: [ 'left', 'top' ], hideTrigger: 'closeButton', target: true, offset: [ 0, 10 ] });
		$('id4').addTip('Standard', 'Title', { style: 'standard', tipJoint: [ 'center', 'top' ], hideTrigger: 'closeButton', target: true });
		$('id4').addTip('Glass blabla and more', 'Some title', { style: 'glass', tipJoint: [ 'left', 'top' ], hideTrigger: 'closeButton', target: true, offset: [ 0, 50 ] });
	</script>

	<br />

	<div class="test" id="testC1" onmouseover="javascript:Tips.add(this, event, 'C test content text. Rounded tooltip this is.', { title: 'This is a styled tooltip', style: 'rounded', stem: true, tipJoint: [ 'left', 'middle' ] });">
		Rounded tooltip
	</div>

	<div class="test" id="testC2" onmouseover="javascript:Tips.add(this, event, 'C test content text. Rounded tooltip this is.', { title: 'This is a styled tooltip', style: 'rounded', stem: true, tipJoint: [ 'right', 'middle' ] });">
		Rounded tooltip
	</div>

	<div class="test" id="testC3" onmouseover="javascript:Tips.add(this, event, 'C test content text. Rounded tooltip this is.', { title: 'This is a styled tooltip', style: 'rounded', stem: true, tipJoint: [ 'center', 'top' ] });">
		Rounded tooltip
	</div>

	<div class="test" id="testC4" onmouseover="javascript:Tips.add(this, event, 'C test content text. Rounded tooltip this is.', { title: 'This is a styled tooltip', style: 'rounded', stem: true, tipJoint: [ 'center', 'bottom' ] });">
		Rounded tooltip
	</div>

	<br />

	<div class="test" id="testD" onmouseover="javascript:Tips.add(this, event, 'D test content text.', 'D title', { style: 'standard', stem: true, tipJoint: [ 'left', 'middle' ], targetJoint: [ 'right', 'middle' ], target: true });">
		Hooked test
	</div>

	<br />

	<div class="test" id="testest" onclick="javascript:Tips.add(this, event, 'test test etset setset sets et', 'title', { style: 'standard', stem: true, tipJoint: [ 'left', 'middle' ], targetJoint: [ 'right', 'middle' ], target: true, hideOn: 'click' });">
		Just for test purposes
	</div>

	<br />

	<div class="test" id="testE">
		Ajax and hooked
	</div>
	<script type="text/javascript">
		$('testE').addTip({ title: 'Ajax test', hideTrigger: 'closeButton', targetJoint: [ 'right', 'middle'], target: true, tipJoint: ['left', 'bottom'], stem: ['left','bottom'], ajax: { url: 'ajaxtest.php' } });
	</script>
	<br />

	<div class="test" id="testF">
		Tooltip setup by external javascript
	</div>
	<script type="text/javascript">
		Tips.add('testF', 'This has been added externally', 'TestF', { target: 'container', tipJoint: [ 'right', 'bottom' ], targetJoint: [ 'right', 'bottom' ], stem: true });
	</script>

	<br />

	<div class="test" id="testG" style="cursor: pointer">
		Tooltip with user style.
	</div>
	<script type="text/javascript">
		Opentip.styles.myStyle = {
			className: 'slick',
			showOn: 'click',
			hideOn: 'click',
			stem: true,
			stemSize: 15,
			delay: false,
			tipJoint: [ 'left', 'top' ],
			target: true,
			targetJoint: [ 'right', 'middle' ],
			title: 'Creating styles is fun.',
			showEffect: 'blindDown'
		};

		Tips.add('testG', 'This tooltip is from a user style', { style: 'myStyle' });
	</script>


	<br />

	<div class="test" id="testH" style="cursor: pointer;">
		Testing multiple Tooltips and auto targetJoint feature
	</div>
	<script type="text/javascript">
		var t = true;

		Opentip.styles.multiple = {
			stem: true,
			target: true,
			hideOn: 'click'
		}

		var delay = 0;
		
		var d = function() { delay += 0.5; return delay - 0.5; }
		
		
		Tips.add('testH', 'Multiple', { style: 'multiple', tipJoint: ['right', 'middle'], delay: d() });
		Tips.add('testH', 'Multiple', { style: 'multiple', tipJoint: ['left',  'middle'], delay: d() });
		Tips.add('testH', 'Multiple tips', { style: 'multiple', tipJoint: ['center', 'top'], delay: d() });
		Tips.add('testH', 'Multiple tips', { style: 'multiple', tipJoint: ['center', 'bottom'], delay: d() });
		Tips.add('testH', 'Multiple', { style: 'multiple', tipJoint: ['right', 'top'], delay: d() });
		Tips.add('testH', 'Multiple', { style: 'multiple', tipJoint: ['left',  'top'], delay: d() });
		Tips.add('testH', 'Multiple', { style: 'multiple', tipJoint: ['left', 'bottom'], delay: d() });
		Tips.add('testH', 'Multiple', { style: 'multiple', tipJoint: ['right', 'bottom'], delay: d() });
	</script>


	<br />

	<div class="test" id="testShow" style="cursor: pointer"  onclick="javascript:Tips.add(this, event, 'Focus this input field to hide me', { showOn: 'click', hideOn: 'focus', hideTrigger: 'target', target: 'testHide', targetJoint: [ 'right', 'middle'], tipJoint: ['left', 'middle'], stem: true});">
		Click to show
	</div>
	<input id="testHide" type="text" value="Some input feld" />


	<br />

	<div class="test" id="hoverTest" onmouseover="javascript:Tips.add(this, event, 'Test', { });">
		This tests that hovering child elements is no problem.
		<div>Child element</div>
		<div>Another child element</div>
	</div>

	<br />

	<div class="test" id="hoverTest" onmouseover="javascript:Tips.add(this, event, function() { return 'test'; }, { });">
		This test shows that the content can be a function, executed the first time it's shown. (This avoids unnecessary calculations when a tooltip is not shown)
	</div>


	<div class="test" id="testI">
		Testing the $(element).addTip() function;
	</div>
	<script type="text/javascript">
		$('testI').addTip('test');
	</script>


	<br />

	<div class="test" id="testJ">
		Testing the automatic selection of the first input field.
	</div>
	<script type="text/javascript">
		$('testJ').addTip('test <input type="text" />', { tipJoint: [ 'center', 'bottom' ] });
	</script>


	<br />

	<div class="test">
		Testing a tooltip over a dropdown menu.
		<select id="testK"><option>test asdf asdfa sdfa sdfas dfa sdf </option></select>
	</div>
	<script type="text/javascript">
		$('testK').addTip('Hopefully visible', { tipJoint: [ 'left', 'middle' ] });
	</script>



	<br />

	<div class="test">
		Testing that opentip automatically uses the href attribute of links.<br />
		Also: The showOn is not defined. But the tooltip is defined in the onclick event. Opentip should get that.<br />
		<a id="testL" href="ajaxtest.php" onclick="javascript:Tips.add(this, event, { ajax:true });">This should get the content via ajax from the href attribute.</a>
	</div>


	<br />

	<div id="testMContent" style="display:none">
		This is content in another div.<br />
		Search engine friendly.
	</div>
	<div class="test" onmouseover="javascript:Tips.add(this, event, $('testMContent').innerHTML);">
		Testing that opentip can use the content of another html element.<br />
	</div>



	<br />

	<div class="test" id="testN">
		Testing that opentip automatically uses the href attribute of links.<br />
		<a href="ajaxtest.php">Link a</a>
		<a href="ajaxtest.php">Link b</a>
		<a href="ajaxtest.php">Link c</a>
		<a href="ajaxtest.php">Link d</a>
	</div>
	<script type="text/javascript">
		$('testN').select('a').invoke('addTip', { showOn: 'click', ajax: true });
	</script>



	<br />

	<div class="test">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a id="wrappingInlineElement" style="background: white;" href="" onmouseover="javascript:Tips.add(this, event, 'test', { stem: true, target: true, tipJoint: [ 'left', 'middle' ] });">Testing that opentip gets positioned correctly when inline element gets wrapped</a>
	</div>



	<br />

	<div class="test" id="testest2" onmouseover="javascript:Tips.add(this, event, 'test test etset setset sets et<br />alsdfj<br />sldfkj<br />lkjsdf<br />lksjdflkjsdf', 'title', { style: 'standard', stem: true, showEffect: false, tipJoint: [ 'left', 'middle' ], targetJoint: [ 'right', 'middle' ], target: true, hideOn: 'click' });">
		Just for test purposes
	</div>

	<br />

	<div class="test">
		Testing that 'showOnCreation' also works if the tooltip is already created, and shown again.
		
		<button onclick="javascript:Tips.add(this, event, 'This tooltip should appear every time', { showOn: 'creation' });">Click me!</button>

	</div>


	<div id="helper" style="background: rgba(255, 0, 0, 0.2);position: absolute;"></div>





</div>

</body>
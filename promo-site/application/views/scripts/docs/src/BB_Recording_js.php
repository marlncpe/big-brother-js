<div><p><br/></p></div><div class="container">

	
	
	


	<div class="row">
		<div id="index" class="col-md-3">
			
			<div >
	<div class="panel panel-default">
		<div class="panel-heading">Classes</div>
		
			<div class="panel-body"><a href="/docs/api/BB_Frame"><span class="indent" style="padding-left:14px;"><i class="icon-jsdoc icon-jsdoc-class"></i><span class="jsdoc-class-index">Frame</span></span></a></div>
		
			<div class="panel-body"><a href="/docs/api/BB_RecPlayer"><span class="indent" style="padding-left:14px;"><i class="icon-jsdoc icon-jsdoc-class"></i><span class="jsdoc-class-index">RecPlayer</span></span></a></div>
		
			<div class="panel-body"><a href="/docs/api/BB_Recording"><span class="indent" style="padding-left:14px;"><i class="icon-jsdoc icon-jsdoc-class"></i><span class="jsdoc-class-index">Recording</span></span></a></div>
		
			<div class="panel-body"><a href="/docs/api/BB_Session"><span class="indent" style="padding-left:14px;"><i class="icon-jsdoc icon-jsdoc-class"></i><span class="jsdoc-class-index">Session</span></span></a></div>
		
			<div class="panel-body"><a href="/docs/api/_global_"><span class="indent" style="padding-left:0px;"><i class="icon-jsdoc icon-jsdoc-namespace"></i><span class="jsdoc-class-index">_global_</span></span></a></div>
		
	</div>
</div>

			
		</div>

		<div id="content" class="col-md-9">


			<pre  class="prettyprint linenums">goog.provide('BB.Recording');

/**
 *
 * @param {string} title
 * @param {string} url
 * @param {BB.win} res
 * @param {number} fps
 * @param {Array.&lt;BB.Frame&gt;} frames
 *
 * @constructor
 */
BB.Recording = function(title, url, res, fps, frames) {
    /** @type {string} */
    this.title = title;

    /** @type {string} */
    this.url = url;

    /** @type {BB.win} */
    this.res = res;

    /** @type {number} */
    this.fps = fps;

    /** @type {Array.&lt;BB.Frame&gt;} */
    this.frames = frames;
};

		</div>
	</div>


	
</div>
<script type="text/javascript">
	prettyPrint();
	var i = 1;
	$('#source-code li').each(function() {
		$(this).attr({ id: 'line' + (i++) });
	});
</script>
</div></div>
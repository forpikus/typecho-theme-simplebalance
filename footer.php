		</div>
    </div>
</div>
<footer id="footer">
	<div class="container">
		&copy; 2014-<?php echo date('Y'); ?> Forpikus Blog &lt;<a rel="nofollow" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>&gt;. Powered by <a href="//typecho.org">typecho</a>.<br/>
        Updated by <a href="http://forpikus.com/">Forpikus Team</a> based on <a href="http://pagecho.com">cho</a> (original author).
	</div>
</footer>
<?php $this->footer(); ?>
<script>
    var _t_editor = new Behave({
        textarea: document.getElementById('commenttext')
    });
    $(function(){
        var diag = 0;
        $('pre code').each(function(){
            var lines = $(this).text().split('\n').length;
            var $numbering = $('<ul/>').addClass('pre-numbering');
            if ($(this).hasClass('language-flow'))
            {
                var $diag = $('<div id="diag-'+diag+'" style="text-align: center;"/>');
                $(this).parent().before($diag);
                flowchart.parse($(this).text()).drawSVG('diag-'+diag);
                diag++;
                $(this).parent().remove();
                return;
            }
            if ($(this).hasClass('language-sequence'))
            {
                var $diag = $('<div id="diag-'+diag+'" style="text-align: center;"/>');
                $(this).parent().before($diag);
                $diag.text($(this).text());
                $diag.sequenceDiagram({theme: 'simple'});
                diag++;
                $(this).parent().remove();
                return;
            }
            $(this)
                .addClass('has-numbering')
                .parent()
                .append($numbering);
            for(i=1;i<=lines;i++){
                $numbering.append($('<li/>').text(i));
            }
        });
        $('ul li').each(function(){
            if ($(this).text().indexOf('[ ]') == 0)
            {
                $(this).addClass('hascheck');
                $(this).html('<span class="checkf-n"></span>'+$(this).html().substr(3).trim());
            }
            else if ($(this).text().indexOf('[x]') == 0)
            {
                $(this).addClass('hascheck');
                $(this).html('<span class="checkf-y"></span>'+$(this).html().substr(3).trim());
            }
        });
    });
    hljs.initHighlightingOnLoad();
</script>
<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=10281620; 
var sc_invisible=1; 
var sc_security="35d6ee3a"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="web analytics"
href="http://statcounter.com/" target="_blank"><img
class="statcounter"
src="http://c.statcounter.com/10281620/0/35d6ee3a/1/"
alt="web analytics"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->
</body>
</html>

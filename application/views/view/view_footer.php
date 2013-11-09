		<?php $this->load->view('defaults/footer_message.php'); ?>
<?php

//codemirror modes


//stats
$this->load->view('defaults/stats');

//Javascript
$this->carabiner->js('jquery.js');
$this->carabiner->js('jquery.timers.js');
$this->carabiner->js('stikked.js');
$this->carabiner->js('codemirror/codemirror.js');
$this->carabiner->js('codemirror_exec.js');
$this->carabiner->display('js');

?>
<script>
</script>
<script id="_webengage_script_tag" type="text/javascript">
  window.webengageWidgetInit = window.webengageWidgetInit || function(){
    webengage.init({
      licenseCode:"~47b6671a"
    }).onReady(function(){
      webengage.render();
    });
  };

  (function(d){
    var _we = d.createElement('script');
    _we.type = 'text/javascript';
    _we.async = true;
    _we.src = (d.location.protocol == 'https:' ? "//ssl.widgets.webengage.com" : "//cdn.widgets.webengage.com") + "/js/widget/webengage-min-v-3.0.js";
    var _sNode = d.getElementById('_webengage_script_tag');
    _sNode.parentNode.insertBefore(_we, _sNode);
  })(document);
</script>
	</body>
</html>

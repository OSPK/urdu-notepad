          </div>
        </div>
      <?php $this->load->view('defaults/footer_message'); ?> 
      </div>
    </div>  
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
<!--Google transliterate-->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

      // Load the Google Transliterate API
      google.load("elements", "1", {
            packages: "transliteration"
          });

      function onLoad() {
        var options = {
            sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
            destinationLanguage:
                [google.elements.transliteration.LanguageCode.URDU],
            shortcutKey: 'ctrl+g',
            transliterationEnabled: true
        };

        // Create an instance on TransliterationControl with the required
        // options.
        var control =
            new google.elements.transliteration.TransliterationControl(options);

        // Enable transliteration in the textbox with id
        // 'transliterateTextarea'.

    control.makeTransliteratable(['gsc-i-id1']);
        control.makeTransliteratable(['code']);
    control.makeTransliteratable(['title']);
    control.makeTransliteratable(['name']);
    control.makeTransliteratable(['u_0_8']);
    control.makeTransliteratable(['nicEdit-main']);  
      }
      google.setOnLoadCallback(onLoad);


    </script>
  </body>
</html>

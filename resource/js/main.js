/**
 * @package BladeWP
 * @author MD. Hasan Shahriar <info@themeaxe.com>
 * Parse plain HTML data and converts to WP snippets
 * Main JS
 * @since 1.0.1
 */

"use strict";
(function ($) {
  var editor, head_script, head_link, body_script, data;
  $(document).ready(function () {
    var myTextarea = document.getElementById('wpcode');
    editor = CodeMirror.fromTextArea(myTextarea, {
      lineNumbers: true,
      theme: 'monokai',
      mode: "text/html",
      lineWrapping: true,
      extraKeys: {"Ctrl-Space": "autocomplete"},
      value: document.documentElement.innerHTML
    });

    new Clipboard('.copy-code');
  });

  function matchScripts() {
      var arr = [];
      var scripts;
      while (scripts = (/<[\s]*script[\s]+type=['"]text\/javascript['"][\s]*src=['"]([\w\/\d\-.]*)['"][\s]*><\/[\s]*script[\s]*>/igm).exec(data)) {
          arr.push(scripts);
          data = data.substring(scripts.index + scripts[0].length);
      }
      return arr;
  }

  function matchLinks() {
      var arr = [];
      var links;
      while (links = (/<[\s]*link[\s]+(?=.*\bhref\b=['"]([\w\W]*)['"])(?=.*\brel\b=['"]stylesheet['"]).*>/i).exec(data)) {
          arr.push(links);
          data = data.substring(links.index + links[0].length);
      }
      return arr;
  }

  $(document).on('click', '.submit-code', function () {
        //$('.parsed-segment').text(editor.getValue());
        $('.progress').show();
        $.ajax({
          type: "POST",
          url: "parser.php",
          data: {
              data: editor.getValue(),
          },
          success: function (data) {
            $('.parsed-segment .enqueue').text(data);
            Prism.highlightAll(true, function () {});
            $('.progress').hide();
          }
        });
  });
})(jQuery);
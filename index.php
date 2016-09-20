<?php
/**
 * @package BladeWP
 * @author MD. Hasan Shahriar <hsleonis2@gmail.com>
 * Parse plain HTML data and converts to WP snippets
 * @since 1.0.1
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="author" content="MD. Hasan Shahriar, hsleonis2@gmail.com, 2016"/>
        <meta name="description" content="Enqueuer parses CSS & JS links from plain HTML & generates WordPress enqueue function">
        <meta name="keywords" content="HTML,CSS,JavaScript,Wordpress,Enqueue,Function,Generator">
        <title>ENQUEUER | Blade | HTML to WP parser</title>

        <!-- stylesheet -->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="resource/css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" href="resource/css/codemirror.css" rel="stylesheet">
        <link type="text/css" href="resource/css/monokai.css" rel="stylesheet">
        <link type="text/css" href="resource/css/prism.css" rel="stylesheet">
        <link type="text/css" href="resource/css/style.css" rel="stylesheet">
    </head>
    <body>
        <!-- Navbar -->
        <nav>
            <div class="nav-wrapper">
                <div class="container-padding">
                    <a href="#" class="brand-logo">ENQUEUER</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="http://themeaxe.com" target="_blank">ThemeAxe</a></li>
                        <li><a href="mailto:hsleonis2@gmail.com" target="_blank">Contact</a></li>
                        <li><a href="https://github.com/hsleonis/bladewp" target="_blank">Github</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-padding">
            <div class="row">
                <blockquote class="col s12"><b>Enqueuer</b> is a helpful tool for WordPress theme developers. It parses CSS & JS links from plain HTML and generates simple WordPress enqueue function.</blockquote>
                <ul class="info-list">
                    <li>Parses full page HTML code and separate css & js links.</li>
                    <li>It understands <code> &lt;head&gt; </code> & <code> &lt;body&gt; </code> scripts.</li>
                    <li>Adds <code> get_template_directory_uri() </code> in front of relative paths.</li>
                    <li>Auto generate script Handles.</li>
                    <li>It can also convert HTML snippets to single enqueue.</li>
                </ul>
            </div>
        </div>
        <!-- Main body -->
        <div id="main-body" class="container-fluid">
            <div class="row">
                <div class="code-segment col s12 m6">
                    <h4>Code</h4>
                    <p>Paste your HTML code here</p>
                    <form id="codeform">
                        <textarea id="wpcode"></textarea>
                    </form>
                    <div>
                        <button class="btn waves-effect waves-light submit-code" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
                <div class="parsed-segment col s12 m6">
                    <h4>Enqueue function</h4>
                    <p>Add this to your functions.php</p>
                    <div class="progress">
                        <div class="indeterminate"></div>
                    </div>
                    <pre><code class="enqueue language-php"></code></pre>
                    <div>
                        <button class="btn waves-effect waves-light copy-code" type="button" name="action" data-clipboard-target=".enqueue" onclick="Materialize.toast('Code copied to clipboard.', 4000)">Copy to clipboard
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="page-footer">
            <div class="footer-copyright">
                <div class="container-padding">
                    <div class="row">
                        <a class="grey-text text-lighten-4 right" href="mailto:hsleonis2@gmail.com">© 2016 Shahriar</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- javascript -->
        <script type="text/javascript" src="resource/js/jquery-3.1.0.min.js"></script>
        <script type="text/javascript" src="resource/js/materialize.min.js"></script>
        <script type="text/javascript" src="resource/js/codemirror.js"></script>
        <script type="text/javascript" src="resource/js/prism.js"></script>
        <script type="text/javascript" src="resource/js/clipboard.min.js"></script>
        <script type="text/javascript" src="resource/js/main.js"></script>
    </body>
</html>
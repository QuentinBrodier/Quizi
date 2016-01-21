<?php

/* ::base.html.twig */
class __TwigTemplate_fb1e8591a8b2d7228d5a737a6974e393fbe3e84192a00eb17b6de91ae38b4ce6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />

    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <script>window.MathJax = { MathML: { extensions: [\"mml3.js\", \"content-mathml.js\"]}};</script>
    <script type=\"text/javascript\" async src=\"//cdn.mathjax.org/mathjax/latest/MathJax.js?config=MML_HTMLorMML\"></script>

</head>
<body>
    <main>
";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 92
        echo "
    </main>


    <footer class=\"page-footer white z-depth-1\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col l6 s12\">
                    <h5 class=\"black-text\">Quizi !</h5>
                    <p class=\"black-text text-lighten-4\">Développé par Quentin Brodier & Matthieu Coulon à l'aide de Symfony 2 et MaterializeCSS, dans le cadre du projet LW1 du Master GIL (2015/2016)</p>
                </div>
                <div class=\"col l4 offset-l2 s12\">
                    <h5 class=\"black-text\">Navigation</h5>
                    <ul>
                        <li><a href=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("mq_quizi_quizs");
        echo "\">Les Quiz's</a></li>

                        ";
        // line 108
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 109
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("mq_quizi_admin_quizs");
            echo "\">Administrer les Quiz's</a></li>
                        ";
        }
        // line 111
        echo "                        ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 112
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("gestion_user");
            echo "\">Administrer les User's</a></li>
                        ";
        }
        // line 114
        echo "                        ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 115
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Se Déconnecter</a></li>
                        ";
        }
        // line 117
        echo "                    </ul>
                </div>
            </div>
        </div>
    </footer>


";
        // line 124
        $this->displayBlock('javascripts', $context, $blocks);
        // line 145
        echo "
</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Quizi - ";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "        <!--Import Google Icon Font-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"http://fonts.googleapis.com/icon?family=Material+Icons\">
        <!--Import materialize.css from SASS compilation-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("stylesheets/materialize.css"), "html", null, true);
        echo "\" media=\"screen,projection\" />
        <!--Import design.css-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("stylesheets/design.css"), "html", null, true);
        echo "\" />
        <!--Let browser know website is optimized for mobile-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    ";
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        // line 27
        echo "
    <!--Menu Navbar-->
    <div class=\"navbar-fixed\">
        <nav class=\"white\">
            <div class=\"nav-wrapper container white\">
                <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("mq_quizi_homepage");
        echo "\" class=\"brand-logo\"><span class=\"signPainterFont\">Quizi !</span></a>
                <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse orange-text text-darken-3\"><i class=\"material-icons\">menu</i></a>
                <!--Menu version site-->
                <ul class=\"right hide-on-med-and-down\">
                    <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("mq_quizi_quizs");
        echo "\">Les Quiz's</a></li>

                    ";
        // line 38
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 39
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("mq_quizi_admin_quizs");
            echo "\">Administrer les Quiz's</a></li>
                    ";
        }
        // line 41
        echo "                    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 42
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("gestion_user");
            echo "\">Administrer les User's</a></li>
                    ";
        }
        // line 44
        echo "                    ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 45
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Se Déconnecter</a></li>
                    ";
        }
        // line 47
        echo "

                </ul>
                <!--Menu version mobiles/tablettes-->
                <ul class=\"side-nav\" id=\"mobile-demo\">
                    <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("mq_quizi_quizs");
        echo "\">Les Quiz's</a></li>

                    ";
        // line 54
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 55
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("mq_quizi_admin_quizs");
            echo "\">Administrer les Quiz's</a></li>
                    ";
        }
        // line 57
        echo "                    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 58
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("gestion_user");
            echo "\">Administrer les User's</a></li>
                    ";
        }
        // line 60
        echo "                    ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 61
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Se Déconnecter</a></li>
                    ";
        }
        // line 63
        echo "
                </ul>
            </div>
        </nav>
    </div>

    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 70
            echo "
        <div class=\"row\">
            <div class=\"col s12 i12 d12\">
                <div class=\"card-panel green lighten-2\">
                    <h5 class=\"white-text\">";
            // line 74
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</h5>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
    ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "infoError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 81
            echo "
        <div class=\"row\">
            <div class=\"col s12 i12 d12\">
                <div class=\"card-panel red lighten-2\">
                    <h5 class=\"white-text\">";
            // line 85
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</h5>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "
";
    }

    // line 124
    public function block_javascripts($context, array $blocks = array())
    {
        // line 125
        echo "    <!--Import jQuery before materialize.js-->
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/materialize.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/init.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">

        // Dès qu'on clique sur un button d'une question, on change la couleur de l'icone
        function checkQuestion(nQuestion){

            var iconCheck = document.getElementById('checkQuestion' + nQuestion);
            iconCheck.classList.add('green-text');

        }



    </script>

";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 128,  295 => 127,  291 => 125,  288 => 124,  283 => 90,  272 => 85,  266 => 81,  262 => 80,  259 => 79,  248 => 74,  242 => 70,  238 => 69,  230 => 63,  224 => 61,  221 => 60,  215 => 58,  212 => 57,  206 => 55,  204 => 54,  199 => 52,  192 => 47,  186 => 45,  183 => 44,  177 => 42,  174 => 41,  168 => 39,  166 => 38,  161 => 36,  154 => 32,  147 => 27,  144 => 26,  136 => 14,  131 => 12,  126 => 9,  123 => 8,  117 => 6,  110 => 145,  108 => 124,  99 => 117,  93 => 115,  90 => 114,  84 => 112,  81 => 111,  75 => 109,  73 => 108,  68 => 106,  52 => 92,  50 => 26,  40 => 19,  37 => 18,  35 => 8,  30 => 6,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/* */
/*     <title>{% block title %}Quizi - {% endblock %}</title>*/
/* */
/*     {% block stylesheets %}*/
/*         <!--Import Google Icon Font-->*/
/*         <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/icon?family=Material+Icons">*/
/*         <!--Import materialize.css from SASS compilation-->*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('stylesheets/materialize.css') }}" media="screen,projection" />*/
/*         <!--Import design.css-->*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('stylesheets/design.css') }}" />*/
/*         <!--Let browser know website is optimized for mobile-->*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0"/>*/
/*     {% endblock %}*/
/* */
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     <script>window.MathJax = { MathML: { extensions: ["mml3.js", "content-mathml.js"]}};</script>*/
/*     <script type="text/javascript" async src="//cdn.mathjax.org/mathjax/latest/MathJax.js?config=MML_HTMLorMML"></script>*/
/* */
/* </head>*/
/* <body>*/
/*     <main>*/
/* {% block body %}*/
/* */
/*     <!--Menu Navbar-->*/
/*     <div class="navbar-fixed">*/
/*         <nav class="white">*/
/*             <div class="nav-wrapper container white">*/
/*                 <a href="{{ path('mq_quizi_homepage') }}" class="brand-logo"><span class="signPainterFont">Quizi !</span></a>*/
/*                 <a href="#" data-activates="mobile-demo" class="button-collapse orange-text text-darken-3"><i class="material-icons">menu</i></a>*/
/*                 <!--Menu version site-->*/
/*                 <ul class="right hide-on-med-and-down">*/
/*                     <li><a href="{{ path('mq_quizi_quizs') }}">Les Quiz's</a></li>*/
/* */
/*                     {% if is_granted('ROLE_USER') %}*/
/*                         <li><a href="{{ path('mq_quizi_admin_quizs') }}">Administrer les Quiz's</a></li>*/
/*                     {% endif %}*/
/*                     {% if is_granted('ROLE_ADMIN') %}*/
/*                         <li><a href="{{ path('gestion_user') }}">Administrer les User's</a></li>*/
/*                     {% endif %}*/
/*                     {% if app.user %}*/
/*                         <li><a href="{{ path('logout') }}">Se Déconnecter</a></li>*/
/*                     {% endif %}*/
/* */
/* */
/*                 </ul>*/
/*                 <!--Menu version mobiles/tablettes-->*/
/*                 <ul class="side-nav" id="mobile-demo">*/
/*                     <li><a href="{{ path('mq_quizi_quizs') }}">Les Quiz's</a></li>*/
/* */
/*                     {% if is_granted('ROLE_USER') %}*/
/*                         <li><a href="{{ path('mq_quizi_admin_quizs') }}">Administrer les Quiz's</a></li>*/
/*                     {% endif %}*/
/*                     {% if is_granted('ROLE_ADMIN') %}*/
/*                         <li><a href="{{ path('gestion_user') }}">Administrer les User's</a></li>*/
/*                     {% endif %}*/
/*                     {% if app.user %}*/
/*                         <li><a href="{{ path('logout') }}">Se Déconnecter</a></li>*/
/*                     {% endif %}*/
/* */
/*                 </ul>*/
/*             </div>*/
/*         </nav>*/
/*     </div>*/
/* */
/*     {% for message in app.session.flashbag.get('info') %}*/
/* */
/*         <div class="row">*/
/*             <div class="col s12 i12 d12">*/
/*                 <div class="card-panel green lighten-2">*/
/*                     <h5 class="white-text">{{ message }}</h5>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/*     {% for message in app.session.flashbag.get('infoError') %}*/
/* */
/*         <div class="row">*/
/*             <div class="col s12 i12 d12">*/
/*                 <div class="card-panel red lighten-2">*/
/*                     <h5 class="white-text">{{ message }}</h5>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/* {% endblock %}*/
/* */
/*     </main>*/
/* */
/* */
/*     <footer class="page-footer white z-depth-1">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col l6 s12">*/
/*                     <h5 class="black-text">Quizi !</h5>*/
/*                     <p class="black-text text-lighten-4">Développé par Quentin Brodier & Matthieu Coulon à l'aide de Symfony 2 et MaterializeCSS, dans le cadre du projet LW1 du Master GIL (2015/2016)</p>*/
/*                 </div>*/
/*                 <div class="col l4 offset-l2 s12">*/
/*                     <h5 class="black-text">Navigation</h5>*/
/*                     <ul>*/
/*                         <li><a href="{{ path('mq_quizi_quizs') }}">Les Quiz's</a></li>*/
/* */
/*                         {% if is_granted('ROLE_USER') %}*/
/*                             <li><a href="{{ path('mq_quizi_admin_quizs') }}">Administrer les Quiz's</a></li>*/
/*                         {% endif %}*/
/*                         {% if is_granted('ROLE_ADMIN') %}*/
/*                             <li><a href="{{ path('gestion_user') }}">Administrer les User's</a></li>*/
/*                         {% endif %}*/
/*                         {% if app.user %}*/
/*                             <li><a href="{{ path('logout') }}">Se Déconnecter</a></li>*/
/*                         {% endif %}*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </footer>*/
/* */
/* */
/* {% block javascripts %}*/
/*     <!--Import jQuery before materialize.js-->*/
/*     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/init.js') }}"></script>*/
/* */
/*     <script type="text/javascript">*/
/* */
/*         // Dès qu'on clique sur un button d'une question, on change la couleur de l'icone*/
/*         function checkQuestion(nQuestion){*/
/* */
/*             var iconCheck = document.getElementById('checkQuestion' + nQuestion);*/
/*             iconCheck.classList.add('green-text');*/
/* */
/*         }*/
/* */
/* */
/* */
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
/* */

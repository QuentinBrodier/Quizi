<?php

/* MQQuiziBundle:Default:index.html.twig */
class __TwigTemplate_6bc32ec3e0ec0bcb8ba6456ca2cf33b36d72b29d359d7080b483b4e14d66093e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MQQuiziBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo "Accueil";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
        // line 7
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "

    <div class=\"container\">


        <!-- Quizi -->
        <div class=\"row\">
            <h2 class=\"center-align\"><span class=\"signPainterFont\">Quizi !</span></h2>
            <h6 class=\"thin center-align\">Choisissez un type d'accès à la plateforme.</h6>
        </div>

        <!-- Accordéon -->
        <ul class=\"collapsible popout\" data-collapsible=\"accordion\">

            <!-- Invite -->
            <li>
                <div class=\"collapsible-header\"><i class=\"material-icons\">whatshot</i>Invité</div>
                <div class=\"collapsible-body\">

                    <div class=\"row center\">
                        <p class=\"thin\">Lorsque vous accéder à la plateforme en tant qu'invité, vous pouvez seulement répondre à des quiz's. Vous ne pouvez pas en créer.</p>
                        <br>
                        <a class=\"btn waves-effect waves-light\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("mq_quizi_quizs");
        echo "\">Accéder à la plateforme</a>
                    </div>

                </div>
            </li>


            <!-- Connexion -->
            <li>


                ";
        // line 47
        echo "
                <div id=\"ongletConnexion\" class=\"collapsible-header active\"><i class=\"material-icons\">account_circle</i>Connexion</div>
                <div class=\"collapsible-body\">

                    <div class=\"row\">

                        <div class=\"col s2 m3 l4\"><p></p></div>

                        <!-- Formulaire -->
                        <form id=\"formConnexion\" action=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" class=\"col s8 m6 l4\">

                            <!-- Login Input -->
                            <div class=\"row\">
                                <div class=\"input-field col s12\">
                                    <input name=\"_username\" id=\"loginConnexion\" type=\"text\"  class=\"validate\">
                                    <label for=\"loginConnexion\">Login</label>
                                </div>
                            </div>

                            <!-- Password Input -->
                            <div class=\"row\">
                                <div class=\"input-field col s12\">
                                    <input name=\"_password\" id=\"passwordConnexion\" type=\"password\" class=\"validate\">
                                    <label for=\"passwordConnexion\">Mot de passe</label>
                                </div>
                            </div>

                            <!-- Submit Input -->
                            <div class=\"row center\">
                                <button class=\"btn waves-effect waves-light\" type=\"submit\" name=\"action\">Se connecter</button>
                            </div>

                            ";
        // line 79
        if (array_key_exists("error_login", $context)) {
            // line 80
            echo "                                <div class=\"card-panel  white-text red lighten-2\">
                                    <h6 class=\"center-align white-text\">";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["error_login"]) ? $context["error_login"] : null), "html", null, true);
            echo "</h6>
                                </div>
                            ";
        }
        // line 84
        echo "

                        </form>

                        <div class=\"col s2 m3 l4\">
                            <p></p>


                        </div>

                    </div>
                </div>
            </li>

            <!-- Inscription -->
            <li >
                <div id=\"ongletInscription\" class=\"collapsible-header\"><i class=\"material-icons\">add_circle</i>Inscription</div>
                <div class=\"collapsible-body\">


                    <p class=\"thin center-align\">Inscrivez vous en quelques secondes afin de pouvoir proposer vos propres quiz's sur la plateforme.</p>

                    <div class=\"row\">

                        <div class=\"col s2 m3 l4\"><p></p></div>

                        <!-- Formulaire -->
                        <form id=\"formInscription\" action=\"";
        // line 111
        echo $this->env->getExtension('routing')->getUrl("inscription");
        echo "\" method=\"post\" class=\"col s8 m6 l4\">

                            <!-- Login Input -->
                            <div class=\"row\">
                                <div class=\"input-field col s12\">
                                    <input id=\"loginInscription\" name=\"username\" type=\"text\" class=\"validate\">
                                    <label for=\"loginInscription\">Login</label>
                                </div>
                            </div>

                            <!-- Password Input -->
                            <div class=\"row\">
                                <div class=\"input-field col s12\">
                                    <input id=\"passwordInscription\"  type=\"password\" onkeyup=\"verifForm();\" name=\"password\" class=\"invalidate\">
                                    <label for=\"passwordInscription\">Mot de passe</label>
                                </div>
                            </div>

                            <!-- Password 2 Input -->
                            <div class=\"\">

                            </div>
                            <div class=\"row\">

                                <div class=\"input-field col s12\">
                                    <input id=\"password2Inscription\" name=\"password2\" onkeyup=\"verifForm();\" type=\"password\" class=\"validate\">
                                    <label for=\"password2Inscription\">Mot de passe (confirmation)</label>
                                </div>

                            </div>


                            <!-- Email Input -->
                            <div class=\"row\">
                                <div class=\"input-field col s12\">
                                    <input id=\"emailInscription\" name=\"mail\" type=\"email\" onkeyup=\"verifForm();\" class=\"validate\">
                                    <label for=\"emailInscription\">E-mail</label>
                                </div>
                            </div>

                            <!-- Submit Input -->
                            <div class=\"row center\">
                                <button id=\"sub\" disabled class=\"btn waves-effect waves-light\" type=\"submit\" name=\"action\">S'inscrire</button>
                            </div>


                            <!-- Card pour afficher les erreurs -->
                            ";
        // line 158
        if (array_key_exists("error_inscription", $context)) {
            // line 159
            echo "                                <div class=\"card-panel white-text red lighten-2\">
                                    <script>
                                        var ongletConn = document.getElementById('ongletConnexion');
                                        var ongletInsc = document.getElementById('ongletInscription');
                                        ongletConn.className=\"collapsible-header\";
                                        ongletInsc.className=\"collapsible-header active\";
                                    </script>
                                    <h6 class=\"center-align white-text\">";
            // line 166
            echo twig_escape_filter($this->env, (isset($context["error_inscription"]) ? $context["error_inscription"] : null), "html", null, true);
            echo "</h6>
                                </div>
                            ";
        }
        // line 169
        echo "
                            <script type=\"text/javascript\">

                                var pass1 = document.getElementById(\"passwordInscription\");
                                var pass2 = document.getElementById(\"password2Inscription\");
                                var sub   = document.getElementById(\"sub\");
                                var mail  = document.getElementById(\"emailInscription\");

                                function verifForm(){
                                    if(pass1.value != pass2.value && pass1.value==\"\" && pass2.value==\"\"){
                                        sub.disabled=true;
                                    }else{
                                        sub.disabled=false;
                                        if(mail.value==\"\"){
                                            sub.disabled=true;
                                        }else{
                                            if(!validateEmail()){
                                                sub.disabled=true;
                                            }else{
                                                sub.disabled=false;
                                            }
                                        }
                                    }
                                }

                                function validateEmail() {
                                    var email = document.getElementById('emailInscription').value;
                                    var re = /^([\\w-]+(?:\\.[\\w-]+)*)@((?:[\\w-]+\\.)*\\w[\\w-]{0,66})\\.([a-z]{2,6}(?:\\.[a-z]{2})?)\$/i;
                                    return re.test(email);
                                }


                            </script>
                        </form>

                        <div class=\"col s2 m3 l4\"><p></p></div>

                    </div>

                </div>
            </li>
        </ul>


    </div>

";
    }

    public function getTemplateName()
    {
        return "MQQuiziBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 169,  229 => 166,  220 => 159,  218 => 158,  168 => 111,  139 => 84,  133 => 81,  130 => 80,  128 => 79,  102 => 56,  91 => 47,  77 => 35,  53 => 13,  50 => 12,  43 => 7,  40 => 6,  37 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}{{ parent() }}Accueil{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/*     {{ parent() }}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* */
/* */
/*     <div class="container">*/
/* */
/* */
/*         <!-- Quizi -->*/
/*         <div class="row">*/
/*             <h2 class="center-align"><span class="signPainterFont">Quizi !</span></h2>*/
/*             <h6 class="thin center-align">Choisissez un type d'accès à la plateforme.</h6>*/
/*         </div>*/
/* */
/*         <!-- Accordéon -->*/
/*         <ul class="collapsible popout" data-collapsible="accordion">*/
/* */
/*             <!-- Invite -->*/
/*             <li>*/
/*                 <div class="collapsible-header"><i class="material-icons">whatshot</i>Invité</div>*/
/*                 <div class="collapsible-body">*/
/* */
/*                     <div class="row center">*/
/*                         <p class="thin">Lorsque vous accéder à la plateforme en tant qu'invité, vous pouvez seulement répondre à des quiz's. Vous ne pouvez pas en créer.</p>*/
/*                         <br>*/
/*                         <a class="btn waves-effect waves-light" href="{{ path('mq_quizi_quizs') }}">Accéder à la plateforme</a>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </li>*/
/* */
/* */
/*             <!-- Connexion -->*/
/*             <li>*/
/* */
/* */
/*                 {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}*/
/* */
/*                 <div id="ongletConnexion" class="collapsible-header active"><i class="material-icons">account_circle</i>Connexion</div>*/
/*                 <div class="collapsible-body">*/
/* */
/*                     <div class="row">*/
/* */
/*                         <div class="col s2 m3 l4"><p></p></div>*/
/* */
/*                         <!-- Formulaire -->*/
/*                         <form id="formConnexion" action="{{ path('login_check') }}" method="post" class="col s8 m6 l4">*/
/* */
/*                             <!-- Login Input -->*/
/*                             <div class="row">*/
/*                                 <div class="input-field col s12">*/
/*                                     <input name="_username" id="loginConnexion" type="text"  class="validate">*/
/*                                     <label for="loginConnexion">Login</label>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <!-- Password Input -->*/
/*                             <div class="row">*/
/*                                 <div class="input-field col s12">*/
/*                                     <input name="_password" id="passwordConnexion" type="password" class="validate">*/
/*                                     <label for="passwordConnexion">Mot de passe</label>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <!-- Submit Input -->*/
/*                             <div class="row center">*/
/*                                 <button class="btn waves-effect waves-light" type="submit" name="action">Se connecter</button>*/
/*                             </div>*/
/* */
/*                             {%  if error_login is defined %}*/
/*                                 <div class="card-panel  white-text red lighten-2">*/
/*                                     <h6 class="center-align white-text">{{ error_login }}</h6>*/
/*                                 </div>*/
/*                             {% endif %}*/
/* */
/* */
/*                         </form>*/
/* */
/*                         <div class="col s2 m3 l4">*/
/*                             <p></p>*/
/* */
/* */
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </li>*/
/* */
/*             <!-- Inscription -->*/
/*             <li >*/
/*                 <div id="ongletInscription" class="collapsible-header"><i class="material-icons">add_circle</i>Inscription</div>*/
/*                 <div class="collapsible-body">*/
/* */
/* */
/*                     <p class="thin center-align">Inscrivez vous en quelques secondes afin de pouvoir proposer vos propres quiz's sur la plateforme.</p>*/
/* */
/*                     <div class="row">*/
/* */
/*                         <div class="col s2 m3 l4"><p></p></div>*/
/* */
/*                         <!-- Formulaire -->*/
/*                         <form id="formInscription" action="{{ url('inscription') }}" method="post" class="col s8 m6 l4">*/
/* */
/*                             <!-- Login Input -->*/
/*                             <div class="row">*/
/*                                 <div class="input-field col s12">*/
/*                                     <input id="loginInscription" name="username" type="text" class="validate">*/
/*                                     <label for="loginInscription">Login</label>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <!-- Password Input -->*/
/*                             <div class="row">*/
/*                                 <div class="input-field col s12">*/
/*                                     <input id="passwordInscription"  type="password" onkeyup="verifForm();" name="password" class="invalidate">*/
/*                                     <label for="passwordInscription">Mot de passe</label>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <!-- Password 2 Input -->*/
/*                             <div class="">*/
/* */
/*                             </div>*/
/*                             <div class="row">*/
/* */
/*                                 <div class="input-field col s12">*/
/*                                     <input id="password2Inscription" name="password2" onkeyup="verifForm();" type="password" class="validate">*/
/*                                     <label for="password2Inscription">Mot de passe (confirmation)</label>*/
/*                                 </div>*/
/* */
/*                             </div>*/
/* */
/* */
/*                             <!-- Email Input -->*/
/*                             <div class="row">*/
/*                                 <div class="input-field col s12">*/
/*                                     <input id="emailInscription" name="mail" type="email" onkeyup="verifForm();" class="validate">*/
/*                                     <label for="emailInscription">E-mail</label>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <!-- Submit Input -->*/
/*                             <div class="row center">*/
/*                                 <button id="sub" disabled class="btn waves-effect waves-light" type="submit" name="action">S'inscrire</button>*/
/*                             </div>*/
/* */
/* */
/*                             <!-- Card pour afficher les erreurs -->*/
/*                             {%  if error_inscription is defined %}*/
/*                                 <div class="card-panel white-text red lighten-2">*/
/*                                     <script>*/
/*                                         var ongletConn = document.getElementById('ongletConnexion');*/
/*                                         var ongletInsc = document.getElementById('ongletInscription');*/
/*                                         ongletConn.className="collapsible-header";*/
/*                                         ongletInsc.className="collapsible-header active";*/
/*                                     </script>*/
/*                                     <h6 class="center-align white-text">{{ error_inscription }}</h6>*/
/*                                 </div>*/
/*                             {% endif %}*/
/* */
/*                             <script type="text/javascript">*/
/* */
/*                                 var pass1 = document.getElementById("passwordInscription");*/
/*                                 var pass2 = document.getElementById("password2Inscription");*/
/*                                 var sub   = document.getElementById("sub");*/
/*                                 var mail  = document.getElementById("emailInscription");*/
/* */
/*                                 function verifForm(){*/
/*                                     if(pass1.value != pass2.value && pass1.value=="" && pass2.value==""){*/
/*                                         sub.disabled=true;*/
/*                                     }else{*/
/*                                         sub.disabled=false;*/
/*                                         if(mail.value==""){*/
/*                                             sub.disabled=true;*/
/*                                         }else{*/
/*                                             if(!validateEmail()){*/
/*                                                 sub.disabled=true;*/
/*                                             }else{*/
/*                                                 sub.disabled=false;*/
/*                                             }*/
/*                                         }*/
/*                                     }*/
/*                                 }*/
/* */
/*                                 function validateEmail() {*/
/*                                     var email = document.getElementById('emailInscription').value;*/
/*                                     var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;*/
/*                                     return re.test(email);*/
/*                                 }*/
/* */
/* */
/*                             </script>*/
/*                         </form>*/
/* */
/*                         <div class="col s2 m3 l4"><p></p></div>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/*             </li>*/
/*         </ul>*/
/* */
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */

<?php

/* MQQuiziBundle:AdminQuizs:adminModifQuizs.html.twig */
class __TwigTemplate_6ea6d61ef3179e2d66ae89f0a6deb4e50f4451452cbae6c8856a4455afe24275 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MQQuiziBundle:AdminQuizs:adminModifQuizs.html.twig", 1);
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
        echo "Modification Quiz";
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
    ";
        // line 14
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div class=\"container\">


        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "
            <div class=\"row\">
                <div class=\"col s12 i12 d12\">
                    <div class=\"card-panel green lighten-2\">
                        <h5 class=\"white-text\">";
            // line 24
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
        // line 29
        echo "
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "infoError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 31
            echo "
            <div class=\"row\">
                <div class=\"col s12 i12 d12\">
                    <div class=\"card-panel red lighten-2\">
                        <h5 class=\"white-text\">";
            // line 35
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
        // line 40
        echo "
        <br>
        <h4 class=\"black-text\">Modifier un quiz</h4>
        <br>

        <!-- Si il existe une erreur, on l'affiche -->




        <ul class=\"collapsible\" data-collapsible=\"expandable\">

            <!-- Informations du quiz -->
            <li>
                <div class=\"collapsible-header grey lighten-4\"><i class=\"material-icons\">description</i>Informations du Quiz</div>
                <div class=\"collapsible-body\">

                    <div class=\"section\">

                        ";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                        <h6>Nom du Quiz *</h6>
                        ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nomQuiz", array()), 'widget');
        echo "

                        <h6>Type d'afichage de résultat *</h6>

                        <div class=\"center\">
                            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "affichageFinal", array()), 'widget');
        echo "
                            <br>
                            ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "btnModifInfoQuiz", array()), 'row');
        echo "<br>
                        </div>

                        ";
        // line 71
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                    </div>
                </div>
            </li>




            <!-- Liste des questions du quiz -->
            <li>
                <div class=\"collapsible-header grey lighten-4\"><i class=\"material-icons\">list</i>Liste des questions du quiz</div>
                <div class=\"collapsible-body\">

                    <ul class=\"collection\">


                        ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listQuestions"]) ? $context["listQuestions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 88
            echo "
                            <li class=\"collection-item\">
                                <div>
                                    ";
            // line 91
            echo $this->getAttribute($context["question"], "titreQuestion", array());
            echo "
                                    <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mq_quizi_suppr_questions_quizs", array("idQuiz" => $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : null), "id", array()), "idQuestion" => $this->getAttribute($context["question"], "id", array()))), "html", null, true);
            echo "\" class=\"secondary-content\" onclick=\"return confirm('Etes vous sûr de vouloir supprimer cette question ?')\"><i class=\"material-icons\">delete</i></a>
                                    <a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mq_quizi_modif_questions_quizs", array("idQuiz" => $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : null), "id", array()), "idQuestion" => $this->getAttribute($context["question"], "id", array()))), "html", null, true);
            echo "\" class=\"secondary-content\"><i class=\"material-icons\">mode_edit</i></a>
                                </div>
                            </li>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "

                    </ul>

                </div>
            </li>


            <!-- Ajouter une question -->
            <li>
                <div class=\"collapsible-header grey lighten-4\"><i class=\"material-icons\">add_circle</i>Ajouter une question</div>
                <div class=\"collapsible-body\">

                    ";
        // line 111
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : null), 'form_start');
        echo "
                    <br>
                    <h6>Nom de la Question *</h6>
                    ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "nomQuestion", array()), 'widget');
        echo "

                    <div class=\"row\">

                        <div class=\" col s12 m6\">
                            <h6>Réponse 1 *</h6>
                            ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "rep1", array()), 'widget');
        echo "
                        </div>

                        <div class=\" col s12 m6\">
                            <h6>Réponse 2 *</h6>
                            ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "rep2", array()), 'widget');
        echo "
                        </div>

                        <div class=\" col s12 m6\">
                            <h6>Réponse 3</h6>
                            ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "rep3", array()), 'widget');
        echo "
                        </div>

                        <div class=\" col s12 m6\">
                            <h6>Réponse 4</h6>
                            ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "rep4", array()), 'widget');
        echo "
                        </div>

                    </div>

                    <div class=\"center\">

                        <h6>Quel est la réponse correcte ? *</h6>
                        ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "reponseCorrect", array()), 'widget');
        echo "

                    </div>
                    <br>
                    <h6 class=\"center thin\">* : champs obligatoires</h6>

                    <div class=\"center\">

                        <br>";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "btnAddQuestion", array()), 'row');
        echo "<br>

                    </div>


                    ";
        // line 156
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : null), 'form_end');
        echo "
                </div>
            </li>
        </ul>




    </div>

";
    }

    public function getTemplateName()
    {
        return "MQQuiziBundle:AdminQuizs:adminModifQuizs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 156,  277 => 151,  266 => 143,  255 => 135,  247 => 130,  239 => 125,  231 => 120,  222 => 114,  216 => 111,  201 => 98,  190 => 93,  186 => 92,  182 => 91,  177 => 88,  173 => 87,  154 => 71,  148 => 68,  143 => 66,  135 => 61,  130 => 59,  109 => 40,  98 => 35,  92 => 31,  88 => 30,  85 => 29,  74 => 24,  68 => 20,  64 => 19,  56 => 14,  53 => 13,  50 => 12,  43 => 7,  40 => 6,  37 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}{{ parent() }}Modification Quiz{% endblock %}*/
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
/*     {{ parent() }}*/
/* */
/*     <div class="container">*/
/* */
/* */
/*         {% for message in app.session.flashbag.get('info') %}*/
/* */
/*             <div class="row">*/
/*                 <div class="col s12 i12 d12">*/
/*                     <div class="card-panel green lighten-2">*/
/*                         <h5 class="white-text">{{ message }}</h5>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         {% for message in app.session.flashbag.get('infoError') %}*/
/* */
/*             <div class="row">*/
/*                 <div class="col s12 i12 d12">*/
/*                     <div class="card-panel red lighten-2">*/
/*                         <h5 class="white-text">{{ message }}</h5>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         <br>*/
/*         <h4 class="black-text">Modifier un quiz</h4>*/
/*         <br>*/
/* */
/*         <!-- Si il existe une erreur, on l'affiche -->*/
/* */
/* */
/* */
/* */
/*         <ul class="collapsible" data-collapsible="expandable">*/
/* */
/*             <!-- Informations du quiz -->*/
/*             <li>*/
/*                 <div class="collapsible-header grey lighten-4"><i class="material-icons">description</i>Informations du Quiz</div>*/
/*                 <div class="collapsible-body">*/
/* */
/*                     <div class="section">*/
/* */
/*                         {{ form_start(form) }}*/
/*                         <h6>Nom du Quiz *</h6>*/
/*                         {{ form_widget(form.nomQuiz) }}*/
/* */
/*                         <h6>Type d'afichage de résultat *</h6>*/
/* */
/*                         <div class="center">*/
/*                             {{ form_widget(form.affichageFinal) }}*/
/*                             <br>*/
/*                             {{ form_row(form.btnModifInfoQuiz) }}<br>*/
/*                         </div>*/
/* */
/*                         {{ form_end(form) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </li>*/
/* */
/* */
/* */
/* */
/*             <!-- Liste des questions du quiz -->*/
/*             <li>*/
/*                 <div class="collapsible-header grey lighten-4"><i class="material-icons">list</i>Liste des questions du quiz</div>*/
/*                 <div class="collapsible-body">*/
/* */
/*                     <ul class="collection">*/
/* */
/* */
/*                         {% for question in listQuestions %}*/
/* */
/*                             <li class="collection-item">*/
/*                                 <div>*/
/*                                     {{ question.titreQuestion|raw }}*/
/*                                     <a href="{{ path('mq_quizi_suppr_questions_quizs',{'idQuiz' : quiz.id, 'idQuestion' : question.id}) }}" class="secondary-content" onclick="return confirm('Etes vous sûr de vouloir supprimer cette question ?')"><i class="material-icons">delete</i></a>*/
/*                                     <a href="{{ path('mq_quizi_modif_questions_quizs',{'idQuiz' : quiz.id, 'idQuestion' : question.id}) }}" class="secondary-content"><i class="material-icons">mode_edit</i></a>*/
/*                                 </div>*/
/*                             </li>*/
/* */
/*                         {% endfor %}*/
/* */
/* */
/*                     </ul>*/
/* */
/*                 </div>*/
/*             </li>*/
/* */
/* */
/*             <!-- Ajouter une question -->*/
/*             <li>*/
/*                 <div class="collapsible-header grey lighten-4"><i class="material-icons">add_circle</i>Ajouter une question</div>*/
/*                 <div class="collapsible-body">*/
/* */
/*                     {{ form_start(form2) }}*/
/*                     <br>*/
/*                     <h6>Nom de la Question *</h6>*/
/*                     {{ form_widget(form2.nomQuestion) }}*/
/* */
/*                     <div class="row">*/
/* */
/*                         <div class=" col s12 m6">*/
/*                             <h6>Réponse 1 *</h6>*/
/*                             {{ form_widget(form2.rep1) }}*/
/*                         </div>*/
/* */
/*                         <div class=" col s12 m6">*/
/*                             <h6>Réponse 2 *</h6>*/
/*                             {{ form_widget(form2.rep2) }}*/
/*                         </div>*/
/* */
/*                         <div class=" col s12 m6">*/
/*                             <h6>Réponse 3</h6>*/
/*                             {{ form_widget(form2.rep3) }}*/
/*                         </div>*/
/* */
/*                         <div class=" col s12 m6">*/
/*                             <h6>Réponse 4</h6>*/
/*                             {{ form_widget(form2.rep4) }}*/
/*                         </div>*/
/* */
/*                     </div>*/
/* */
/*                     <div class="center">*/
/* */
/*                         <h6>Quel est la réponse correcte ? *</h6>*/
/*                         {{ form_widget(form2.reponseCorrect) }}*/
/* */
/*                     </div>*/
/*                     <br>*/
/*                     <h6 class="center thin">* : champs obligatoires</h6>*/
/* */
/*                     <div class="center">*/
/* */
/*                         <br>{{ form_row(form2.btnAddQuestion) }}<br>*/
/* */
/*                     </div>*/
/* */
/* */
/*                     {{ form_end(form2) }}*/
/*                 </div>*/
/*             </li>*/
/*         </ul>*/
/* */
/* */
/* */
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */

<?php

/* MQQuiziBundle:Quiz:viewQuizs.html.twig */
class __TwigTemplate_9c14228fbff25abeda069fe370d4050459229d51a9c22f8215a10b6259785354 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MQQuiziBundle:Quiz:viewQuizs.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : null), "titreQuiz", array()), "html", null, true);
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

        <div class=\"row center\">

            <br>

            <div class=\"col s12 m3\"><p></p></div>

            <div class=\"col s12 m6\">

                <div class=\"card-panel grey lighten-4\">


                    <h4 class=\"black-text\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : null), "titreQuiz", array()), "html", null, true);
        echo "</h4>
                    <h6 class=\"thin\">Créé le ";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : null), "dateCreationQuiz", array()), "d/m/Y"), "html", null, true);
        echo "</h6>

                    <br>
                    <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mq_quizi_rep_quizs", array("idQuiz" => $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn\">Démarrer le Quiz !</a>

                </div>

            </div>

            <div class=\"col s12 m3\"><p></p></div>




        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "MQQuiziBundle:Quiz:viewQuizs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 33,  78 => 30,  74 => 29,  56 => 14,  53 => 13,  50 => 12,  43 => 7,  40 => 6,  37 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}{{ parent() }}{{ quiz.titreQuiz }}{% endblock %}*/
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
/*         <div class="row center">*/
/* */
/*             <br>*/
/* */
/*             <div class="col s12 m3"><p></p></div>*/
/* */
/*             <div class="col s12 m6">*/
/* */
/*                 <div class="card-panel grey lighten-4">*/
/* */
/* */
/*                     <h4 class="black-text">{{ quiz.titreQuiz }}</h4>*/
/*                     <h6 class="thin">Créé le {{ quiz.dateCreationQuiz|date('d/m/Y') }}</h6>*/
/* */
/*                     <br>*/
/*                     <a href="{{ path('mq_quizi_rep_quizs',{idQuiz: quiz.id}) }}" class="btn">Démarrer le Quiz !</a>*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*             <div class="col s12 m3"><p></p></div>*/
/* */
/* */
/* */
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */

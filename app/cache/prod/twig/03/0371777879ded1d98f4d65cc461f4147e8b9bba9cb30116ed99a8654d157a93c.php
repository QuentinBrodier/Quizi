<?php

/* MQQuiziBundle:Quiz:quizs.html.twig */
class __TwigTemplate_8b2842676ef4746aa269c6f815ff9f3c4e655ccde40fcbad03f5f48161686d90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MQQuiziBundle:Quiz:quizs.html.twig", 1);
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
        echo "Les Quiz's";
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

        <br>
        <h4 class=\"black-text\">Les Quiz's</h4>

        <div class=\"section\">

            <div class=\"collection\">

                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listQuizs"]) ? $context["listQuizs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 26
            echo "
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mq_quizi_view_quizs", array("idQuiz" => $this->getAttribute($context["quiz"], "id", array()))), "html", null, true);
            echo "\" class=\"collection-item orange-text text-darken-3\">
                        <span class=\"left grey-text thin\" style=\"padding-right:10px;\">";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["quiz"], "dateCreationQuiz", array()), "d/m/Y"), "html", null, true);
            echo "</span>
                        ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["quiz"], "titreQuiz", array()), "html", null, true);
            echo "
                    </a>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
            </div>

        </div>



    </div>

";
    }

    public function getTemplateName()
    {
        return "MQQuiziBundle:Quiz:quizs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 33,  85 => 29,  81 => 28,  77 => 27,  74 => 26,  70 => 25,  56 => 14,  53 => 13,  50 => 12,  43 => 7,  40 => 6,  37 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}{{ parent() }}Les Quiz's{% endblock %}*/
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
/*         <br>*/
/*         <h4 class="black-text">Les Quiz's</h4>*/
/* */
/*         <div class="section">*/
/* */
/*             <div class="collection">*/
/* */
/*                 {% for quiz in listQuizs %}*/
/* */
/*                     <a href="{{ path('mq_quizi_view_quizs',{idQuiz: quiz.id}) }}" class="collection-item orange-text text-darken-3">*/
/*                         <span class="left grey-text thin" style="padding-right:10px;">{{ quiz.dateCreationQuiz|date('d/m/Y') }}</span>*/
/*                         {{ quiz.titreQuiz }}*/
/*                     </a>*/
/* */
/*                 {% endfor %}*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/* */
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */

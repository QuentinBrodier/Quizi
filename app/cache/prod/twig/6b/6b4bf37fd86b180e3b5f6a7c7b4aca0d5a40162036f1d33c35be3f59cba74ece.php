<?php

/* MQQuiziBundle:AdminQuizs:adminModifQuestion.html.twig */
class __TwigTemplate_d31648c9d7e94c7429c9a4d8d82dfc880cde698abd227cdadb622c77389e35ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MQQuiziBundle:AdminQuizs:adminModifQuestion.html.twig", 1);
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
        echo "Modification Question";
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
        <h4 class=\"black-text\">Modifier une question</h4>
        <br>

        <div class=\"card-panel grey lighten-4\">

            <!-- Si il existe une erreur, on l'affiche -->
            ";
        // line 25
        if (array_key_exists("error", $context)) {
            // line 26
            echo "
                <div class=\"red\">
                    <br>
                    <h6 class=\"center black-text\">";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "</h6>
                    <br>
                </div>
                <br>

            ";
        }
        // line 35
        echo "

            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

            <br>
            <h6>Nom de la Question *</h6>
            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nomQuestion", array()), 'widget');
        echo "

            <div class=\"row\">

                <div class=\" col s12 m6\">
                    <h6>Réponse 1 *</h6>
                    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "rep1", array()), 'widget');
        echo "
                </div>

                <div class=\" col s12 m6\">
                    <h6>Réponse 2 *</h6>
                    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "rep2", array()), 'widget');
        echo "
                </div>

                <div class=\" col s12 m6\">
                    <h6>Réponse 3</h6>
                    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "rep3", array()), 'widget');
        echo "
                </div>

                <div class=\" col s12 m6\">
                    <h6>Réponse 4</h6>
                    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "rep4", array()), 'widget');
        echo "
                </div>

            </div>

            <div class=\"center\">

                <h6>Quel est la réponse correcte ? *</h6>
                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "reponseCorrect", array()), 'widget');
        echo "

            </div>
            <br>
            <h6 class=\"center thin\">* : champs obligatoires</h6>

            <div class=\"center\">

                <br>";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "btnModifQuestion", array()), 'row');
        echo "<br>

            </div>


            ";
        // line 83
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "


        </div>


    </div>

";
    }

    public function getTemplateName()
    {
        return "MQQuiziBundle:AdminQuizs:adminModifQuestion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 83,  152 => 78,  141 => 70,  130 => 62,  122 => 57,  114 => 52,  106 => 47,  97 => 41,  90 => 37,  86 => 35,  77 => 29,  72 => 26,  70 => 25,  56 => 14,  53 => 13,  50 => 12,  43 => 7,  40 => 6,  37 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}{{ parent() }}Modification Question{% endblock %}*/
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
/*         <h4 class="black-text">Modifier une question</h4>*/
/*         <br>*/
/* */
/*         <div class="card-panel grey lighten-4">*/
/* */
/*             <!-- Si il existe une erreur, on l'affiche -->*/
/*             {% if error is defined %}*/
/* */
/*                 <div class="red">*/
/*                     <br>*/
/*                     <h6 class="center black-text">{{ error }}</h6>*/
/*                     <br>*/
/*                 </div>*/
/*                 <br>*/
/* */
/*             {% endif %}*/
/* */
/* */
/*             {{ form_start(form) }}*/
/* */
/*             <br>*/
/*             <h6>Nom de la Question *</h6>*/
/*             {{ form_widget(form.nomQuestion) }}*/
/* */
/*             <div class="row">*/
/* */
/*                 <div class=" col s12 m6">*/
/*                     <h6>Réponse 1 *</h6>*/
/*                     {{ form_widget(form.rep1) }}*/
/*                 </div>*/
/* */
/*                 <div class=" col s12 m6">*/
/*                     <h6>Réponse 2 *</h6>*/
/*                     {{ form_widget(form.rep2) }}*/
/*                 </div>*/
/* */
/*                 <div class=" col s12 m6">*/
/*                     <h6>Réponse 3</h6>*/
/*                     {{ form_widget(form.rep3) }}*/
/*                 </div>*/
/* */
/*                 <div class=" col s12 m6">*/
/*                     <h6>Réponse 4</h6>*/
/*                     {{ form_widget(form.rep4) }}*/
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*             <div class="center">*/
/* */
/*                 <h6>Quel est la réponse correcte ? *</h6>*/
/*                 {{ form_widget(form.reponseCorrect) }}*/
/* */
/*             </div>*/
/*             <br>*/
/*             <h6 class="center thin">* : champs obligatoires</h6>*/
/* */
/*             <div class="center">*/
/* */
/*                 <br>{{ form_row(form.btnModifQuestion) }}<br>*/
/* */
/*             </div>*/
/* */
/* */
/*             {{ form_end(form) }}*/
/* */
/* */
/*         </div>*/
/* */
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */

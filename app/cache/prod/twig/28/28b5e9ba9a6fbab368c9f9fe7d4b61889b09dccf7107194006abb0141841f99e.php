<?php

/* MQQuiziBundle:AdminQuizs:adminAddQuizs.html.twig */
class __TwigTemplate_4c51abaadc466915924b0c6d33382741dedd15bffb5e090836b8bafb345646fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MQQuiziBundle:AdminQuizs:adminAddQuizs.html.twig", 1);
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
        echo "Nouveau Quiz";
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
        <h4 class=\"black-text\">Ajouter un quiz</h4>
        <br>


        <h6 class=\"center-align black-text thin\">
            Pour créer un quiz, il est nécessaire de créer une première question.
            <br>
            Vous pourrez ajouter d'autres questions à la page suivante.
        </h6>

        <div class=\"card-panel grey lighten-4\">

            <!-- Si il existe une erreur, on l'affiche -->


            ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

            <h6>Nom du Quiz *</h6>
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nomQuiz", array()), 'widget');
        echo "

            <h6>Type d'afichage de résultat *</h6>
            <div class=\"center\">
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "affichageFinal", array()), 'widget');
        echo "
            </div>

            <br>
            <h6>Nom de la Question *</h6>
            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nomQuestion", array()), 'widget');
        echo "

            <div class=\"row\">

                <div class=\" col s12 m6\">
                    <h6>Réponse 1 *</h6>
                    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "rep1", array()), 'widget');
        echo "
                </div>

                <div class=\" col s12 m6\">
                    <h6>Réponse 2 *</h6>
                    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "rep2", array()), 'widget');
        echo "
                </div>

                <div class=\" col s12 m6\">
                    <h6>Réponse 3</h6>
                    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "rep3", array()), 'widget');
        echo "
                </div>

                <div class=\" col s12 m6\">
                    <h6>Réponse 4</h6>
                    ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "rep4", array()), 'widget');
        echo "
                </div>

            </div>

            <div class=\"center\">

                <h6>Quel est la réponse correcte ? *</h6>
                ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "reponseCorrect", array()), 'widget');
        echo "

            </div>
            <br>
            <h6 class=\"center thin\">* : champs obligatoires</h6>


        </div>

        <div class=\"row center\">

            ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "btnCreer", array()), 'row');
        echo "<br>
            <a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("mq_quizi_admin_quizs");
        echo "\" class=\"btn waves-effect\">Annuler</a>

        </div>

        ";
        // line 91
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "


    </div>

";
    }

    public function getTemplateName()
    {
        return "MQQuiziBundle:AdminQuizs:adminAddQuizs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 91,  162 => 87,  158 => 86,  144 => 75,  133 => 67,  125 => 62,  117 => 57,  109 => 52,  100 => 46,  92 => 41,  85 => 37,  79 => 34,  56 => 14,  53 => 13,  50 => 12,  43 => 7,  40 => 6,  37 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}{{ parent() }}Nouveau Quiz{% endblock %}*/
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
/*         <h4 class="black-text">Ajouter un quiz</h4>*/
/*         <br>*/
/* */
/* */
/*         <h6 class="center-align black-text thin">*/
/*             Pour créer un quiz, il est nécessaire de créer une première question.*/
/*             <br>*/
/*             Vous pourrez ajouter d'autres questions à la page suivante.*/
/*         </h6>*/
/* */
/*         <div class="card-panel grey lighten-4">*/
/* */
/*             <!-- Si il existe une erreur, on l'affiche -->*/
/* */
/* */
/*             {{ form_start(form) }}*/
/* */
/*             <h6>Nom du Quiz *</h6>*/
/*             {{ form_widget(form.nomQuiz) }}*/
/* */
/*             <h6>Type d'afichage de résultat *</h6>*/
/*             <div class="center">*/
/*                 {{ form_widget(form.    affichageFinal) }}*/
/*             </div>*/
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
/* */
/*         </div>*/
/* */
/*         <div class="row center">*/
/* */
/*             {{ form_row(form.btnCreer) }}<br>*/
/*             <a href="{{ path('mq_quizi_admin_quizs') }}" class="btn waves-effect">Annuler</a>*/
/* */
/*         </div>*/
/* */
/*         {{ form_end(form) }}*/
/* */
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */

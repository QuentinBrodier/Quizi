<?php

/* MQQuiziBundle:AdminQuizs:adminQuizs.html.twig */
class __TwigTemplate_109cf7b2a4369975ef7c895770ff3de6b3ed9751fafb9e97ba1d8f272420b8e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MQQuiziBundle:AdminQuizs:adminQuizs.html.twig", 1);
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
        echo "Administration Quizs";
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

        ";
        // line 20
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 21
            echo "            <h4 class=\"black-text\">Administration des Quiz's</h4>
        ";
        } else {
            // line 23
            echo "            <h4 class=\"black-text\">Administration de mes Quiz's</h4>
        ";
        }
        // line 25
        echo "
        <div class=\"section\">

            <table>

                <thead>
                <tr>
                    <th data-field=\"date\">Date</th>
                    <th data-field=\"quiz\">Quiz</th>
                    ";
        // line 34
        if ( !$this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 35
            echo "                        <th data-field=\"modif\" class=\"center-align\">Modifier</th>
                    ";
        }
        // line 37
        echo "                    <th data-field=\"supr\" class=\"center-align\">Supprimer</th>

                </tr>
                </thead>

                <tbody>

                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listQuizs"]) ? $context["listQuizs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 45
            echo "
                    <tr>
                        <td><span class=\"thin\">";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["quiz"], "dateCreationQuiz", array()), "d/m/Y"), "html", null, true);
            echo "</span></td>
                        <td >";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["quiz"], "titreQuiz", array()), "html", null, true);
            echo "</td>
                        ";
            // line 49
            if ( !$this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 50
                echo "                            <td class=\"center-align\">
                                <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mq_quizi_modif_quizs", array("idQuiz" => $this->getAttribute($context["quiz"], "id", array()))), "html", null, true);
                echo "\" class=\"hide-on-large-only\">
                                    <i class=\"material-icons\">settings</i>
                                </a>
                            <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mq_quizi_modif_quizs", array("idQuiz" => $this->getAttribute($context["quiz"], "id", array()))), "html", null, true);
                echo "\" class=\"btn waves-effect hide-on-med-and-down\">Modifier</a></td>
                        ";
            }
            // line 56
            echo "                        <td class=\"center-align\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mq_quizi_suppr_quizs", array("idQuiz" => $this->getAttribute($context["quiz"], "id", array()))), "html", null, true);
            echo "\" class=\"hide-on-large-only\" onclick=\"return confirm('Etes vous sûr de vouloir supprimer ce quiz ?')\">
                                <i class=\"material-icons\">delete</i>
                            </a>
                            <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mq_quizi_suppr_quizs", array("idQuiz" => $this->getAttribute($context["quiz"], "id", array()))), "html", null, true);
            echo "\" class=\"btn waves-effect hide-on-med-and-down\" onclick=\"return confirm('Etes vous sûr de vouloir supprimer ce quiz ?')\">Supprimer</a></td>

                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
                </tbody>

            </table>

        </div>

        ";
        // line 71
        if ( !$this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 72
            echo "
            <div class=\"row center\">

                <a href=\"";
            // line 75
            echo $this->env->getExtension('routing')->getPath("mq_quizi_ajout_quizs");
            echo "\" class=\"waves-effect waves-circle waves-light btn-floating secondary-content\">
                    <i class=\"material-icons\">add</i>
                </a>

            </div>

        ";
        }
        // line 82
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "MQQuiziBundle:AdminQuizs:adminQuizs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 82,  167 => 75,  162 => 72,  160 => 71,  151 => 64,  140 => 59,  133 => 56,  128 => 54,  122 => 51,  119 => 50,  117 => 49,  113 => 48,  109 => 47,  105 => 45,  101 => 44,  92 => 37,  88 => 35,  86 => 34,  75 => 25,  71 => 23,  67 => 21,  65 => 20,  56 => 14,  53 => 13,  50 => 12,  43 => 7,  40 => 6,  37 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}{{ parent() }}Administration Quizs{% endblock %}*/
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
/* */
/*         {% if is_granted('ROLE_ADMIN') %}*/
/*             <h4 class="black-text">Administration des Quiz's</h4>*/
/*         {% else %}*/
/*             <h4 class="black-text">Administration de mes Quiz's</h4>*/
/*         {% endif %}*/
/* */
/*         <div class="section">*/
/* */
/*             <table>*/
/* */
/*                 <thead>*/
/*                 <tr>*/
/*                     <th data-field="date">Date</th>*/
/*                     <th data-field="quiz">Quiz</th>*/
/*                     {% if not is_granted('ROLE_ADMIN') %}*/
/*                         <th data-field="modif" class="center-align">Modifier</th>*/
/*                     {% endif %}*/
/*                     <th data-field="supr" class="center-align">Supprimer</th>*/
/* */
/*                 </tr>*/
/*                 </thead>*/
/* */
/*                 <tbody>*/
/* */
/*                 {% for quiz in listQuizs %}*/
/* */
/*                     <tr>*/
/*                         <td><span class="thin">{{ quiz.dateCreationQuiz|date('d/m/Y') }}</span></td>*/
/*                         <td >{{ quiz.titreQuiz }}</td>*/
/*                         {% if not is_granted('ROLE_ADMIN') %}*/
/*                             <td class="center-align">*/
/*                                 <a href="{{ path('mq_quizi_modif_quizs',{'idQuiz' : quiz.id } ) }}" class="hide-on-large-only">*/
/*                                     <i class="material-icons">settings</i>*/
/*                                 </a>*/
/*                             <a href="{{ path('mq_quizi_modif_quizs',{'idQuiz' : quiz.id } ) }}" class="btn waves-effect hide-on-med-and-down">Modifier</a></td>*/
/*                         {% endif %}*/
/*                         <td class="center-align"><a href="{{ path('mq_quizi_suppr_quizs',{'idQuiz' : quiz.id } ) }}" class="hide-on-large-only" onclick="return confirm('Etes vous sûr de vouloir supprimer ce quiz ?')">*/
/*                                 <i class="material-icons">delete</i>*/
/*                             </a>*/
/*                             <a href="{{ path('mq_quizi_suppr_quizs',{'idQuiz' : quiz.id } ) }}" class="btn waves-effect hide-on-med-and-down" onclick="return confirm('Etes vous sûr de vouloir supprimer ce quiz ?')">Supprimer</a></td>*/
/* */
/*                     </tr>*/
/* */
/*                 {% endfor %}*/
/* */
/*                 </tbody>*/
/* */
/*             </table>*/
/* */
/*         </div>*/
/* */
/*         {% if not is_granted('ROLE_ADMIN') %}*/
/* */
/*             <div class="row center">*/
/* */
/*                 <a href="{{ path('mq_quizi_ajout_quizs') }}" class="waves-effect waves-circle waves-light btn-floating secondary-content">*/
/*                     <i class="material-icons">add</i>*/
/*                 </a>*/
/* */
/*             </div>*/
/* */
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */

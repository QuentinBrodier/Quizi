<?php

/* MQQuiziBundle:Resultat:resultatQuizs.html.twig */
class __TwigTemplate_c492fd76e18a4e17220e6f2311f266aeda45d164383ca5a00ad9a830cd7eef59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MQQuiziBundle:Resultat:resultatQuizs.html.twig", 1);
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
        echo "Resultat";
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
        <h4 class=\"black-text center-align\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : null), "titreQuiz", array()), "html", null, true);
        echo "</h4>

        <br>

        <div class=\"row center\">
            <div class=\"col s12\">

                <div class=\"card-panel grey lighten-4\">

                    <h5>Votre score : ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["nbReponsesCorrect"]) ? $context["nbReponsesCorrect"] : null), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, (isset($context["nbQuestions"]) ? $context["nbQuestions"] : null), "html", null, true);
        echo "</h5><br>

                    ";
        // line 32
        if (((isset($context["pourcentageRes"]) ? $context["pourcentageRes"] : null) == 1)) {
            // line 33
            echo "
                        <h6 class=\"green-text\">100% !! Bravo, vous êtes doué !<br><br><i class=\"material-icons large\">thumb_up</i></h6>

                    ";
        } elseif ((        // line 36
(isset($context["pourcentageRes"]) ? $context["pourcentageRes"] : null) > 0.6)) {
            // line 37
            echo "
                        <h6 class=\"green-text text-darken-3\">Vous êtes officiellement bon, continuez comme ça !<br><br><i class=\"material-icons large\">tag_faces</i></h6>

                    ";
        } elseif ((        // line 40
(isset($context["pourcentageRes"]) ? $context["pourcentageRes"] : null) > 0.4)) {
            // line 41
            echo "
                        <h6 class=\"blue-text\">C'est pas mal, mais vous pouvez faire mieux !<br><br><i class=\"material-icons large\">wb_sunny</i></h6>

                    ";
        } elseif ((        // line 44
(isset($context["pourcentageRes"]) ? $context["pourcentageRes"] : null) > 0.15)) {
            // line 45
            echo "
                        <h6 class=\"red-text darken-3\">La, il va falloir se culturer !<br><br><i class=\"material-icons large\">mood_bad</i></h6>

                    ";
        } else {
            // line 49
            echo "
                        <h6 class=\"red-text\">Désolé, mais vous êtes officiellement mauvais !<br><br><i class=\"material-icons large\">thumb_down</i></h6>

                    ";
        }
        // line 53
        echo "

                    ";
        // line 55
        if (($this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : null), "affichageFinalQuiz", array()) != 1)) {
            // line 56
            echo "
                        <table>

                            <thead>
                            <tr>
                                <th data-field=\"que\">Question</th>
                                <th data-field=\"repU\">Votre réponse</th>
                                <th data-field=\"res\">Résultat</th>

                                ";
            // line 65
            if (($this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : null), "affichageFinalQuiz", array()) == 3)) {
                // line 66
                echo "                                    <th data-field=\"repC\">Réponse correct</th>
                                ";
            }
            // line 68
            echo "
                            </tr>
                            </thead>

                            <tbody>

                            ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tabResultats"]) ? $context["tabResultats"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                // line 75
                echo "
                                <tr>
                                    <td>";
                // line 77
                echo $this->getAttribute($context["res"], "titreQuestion", array());
                echo "</td>
                                    <td>";
                // line 78
                echo $this->getAttribute($context["res"], "reponseUtilisateur", array());
                echo "</td>

                                    ";
                // line 80
                if (($this->getAttribute($context["res"], "idReponseUtilisateur", array()) == $this->getAttribute($context["res"], "idReponseCorrect", array()))) {
                    // line 81
                    echo "                                        <td class=\"green-text\">Correct</td>
                                    ";
                } else {
                    // line 83
                    echo "                                        <td class=\"red-text\">Incorrect</td>
                                    ";
                }
                // line 85
                echo "
                                    ";
                // line 86
                if (($this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : null), "affichageFinalQuiz", array()) == 3)) {
                    // line 87
                    echo "                                        <td>";
                    echo $this->getAttribute($context["res"], "reponseCorrect", array());
                    echo "</td>
                                    ";
                }
                // line 89
                echo "
                                </tr>

                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "
                            </tbody>

                        </table>


                    ";
        }
        // line 100
        echo "
                </div>
            </div>

        </div>


    </div>

";
    }

    public function getTemplateName()
    {
        return "MQQuiziBundle:Resultat:resultatQuizs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 100,  198 => 93,  189 => 89,  183 => 87,  181 => 86,  178 => 85,  174 => 83,  170 => 81,  168 => 80,  163 => 78,  159 => 77,  155 => 75,  151 => 74,  143 => 68,  139 => 66,  137 => 65,  126 => 56,  124 => 55,  120 => 53,  114 => 49,  108 => 45,  106 => 44,  101 => 41,  99 => 40,  94 => 37,  92 => 36,  87 => 33,  85 => 32,  78 => 30,  66 => 21,  56 => 14,  53 => 13,  50 => 12,  43 => 7,  40 => 6,  37 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}{{ parent() }}Resultat{% endblock %}*/
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
/* */
/* */
/*     <div class="container">*/
/* */
/*         <br>*/
/*         <h4 class="black-text center-align">{{ quiz.titreQuiz }}</h4>*/
/* */
/*         <br>*/
/* */
/*         <div class="row center">*/
/*             <div class="col s12">*/
/* */
/*                 <div class="card-panel grey lighten-4">*/
/* */
/*                     <h5>Votre score : {{ nbReponsesCorrect }} / {{ nbQuestions }}</h5><br>*/
/* */
/*                     {% if pourcentageRes == 1 %}*/
/* */
/*                         <h6 class="green-text">100% !! Bravo, vous êtes doué !<br><br><i class="material-icons large">thumb_up</i></h6>*/
/* */
/*                     {% elseif pourcentageRes > 0.60 %}*/
/* */
/*                         <h6 class="green-text text-darken-3">Vous êtes officiellement bon, continuez comme ça !<br><br><i class="material-icons large">tag_faces</i></h6>*/
/* */
/*                     {% elseif pourcentageRes > 0.40 %}*/
/* */
/*                         <h6 class="blue-text">C'est pas mal, mais vous pouvez faire mieux !<br><br><i class="material-icons large">wb_sunny</i></h6>*/
/* */
/*                     {% elseif pourcentageRes > 0.15 %}*/
/* */
/*                         <h6 class="red-text darken-3">La, il va falloir se culturer !<br><br><i class="material-icons large">mood_bad</i></h6>*/
/* */
/*                     {% else %}*/
/* */
/*                         <h6 class="red-text">Désolé, mais vous êtes officiellement mauvais !<br><br><i class="material-icons large">thumb_down</i></h6>*/
/* */
/*                     {% endif %}*/
/* */
/* */
/*                     {% if quiz.affichageFinalQuiz != 1 %}*/
/* */
/*                         <table>*/
/* */
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th data-field="que">Question</th>*/
/*                                 <th data-field="repU">Votre réponse</th>*/
/*                                 <th data-field="res">Résultat</th>*/
/* */
/*                                 {% if quiz.affichageFinalQuiz == 3 %}*/
/*                                     <th data-field="repC">Réponse correct</th>*/
/*                                 {% endif %}*/
/* */
/*                             </tr>*/
/*                             </thead>*/
/* */
/*                             <tbody>*/
/* */
/*                             {% for res in tabResultats %}*/
/* */
/*                                 <tr>*/
/*                                     <td>{{ res.titreQuestion|raw }}</td>*/
/*                                     <td>{{ res.reponseUtilisateur|raw }}</td>*/
/* */
/*                                     {% if res.idReponseUtilisateur == res.idReponseCorrect %}*/
/*                                         <td class="green-text">Correct</td>*/
/*                                     {% else %}*/
/*                                         <td class="red-text">Incorrect</td>*/
/*                                     {% endif %}*/
/* */
/*                                     {% if quiz.affichageFinalQuiz == 3 %}*/
/*                                         <td>{{ res.reponseCorrect|raw }}</td>*/
/*                                     {% endif %}*/
/* */
/*                                 </tr>*/
/* */
/*                             {% endfor %}*/
/* */
/*                             </tbody>*/
/* */
/*                         </table>*/
/* */
/* */
/*                     {% endif %}*/
/* */
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/* */
/*     </div>*/
/* */
/* {% endblock %}*/

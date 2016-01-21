<?php

/* MQQuiziBundle:Reponse:repQuizs.html.twig */
class __TwigTemplate_4a40e40036a0599b970ba1c3f3e1a6af21eda427d50eed20e8fa5ae18653ebae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MQQuiziBundle:Reponse:repQuizs.html.twig", 1);
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

        <br>
        <h4 class=\"black-text\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : null), "titreQuiz", array()), "html", null, true);
        echo "</h4>
        <h6 class=\"thin\">Bonne chance :)</h6>

        <div class=\"section\">
            ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
            <!-- Liste des questions -->
            <ul class=\"collapsible\" data-collapsible=\"accordion\">

                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listQuestions"]) ? $context["listQuestions"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 30
            echo "
                    <li>
                        <div class=\"collapsible-header\"><i id=\"checkQuestion";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"material-icons\">check_circle</i>Question ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</div>
                        <div class=\"collapsible-body\">

                            <br>
                            <h5 class=\"center-align\">";
            // line 36
            echo $this->getAttribute($context["question"], "titreQuestion", array());
            echo "</h5>
                            <br>

                            ";
            // line 39
            $context["numQuestion"] = ("question" . $this->getAttribute($context["loop"], "index", array()));
            // line 40
            echo "                            <div class=\"row\">
                                ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["question"], "reponses", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                // line 42
                echo "
                                    ";
                // line 43
                if ((($this->getAttribute($context["loop"], "index", array()) % 2) == 0)) {
                    // line 44
                    echo "                                    <div class=\"row\">

                                        <div class=\"col s12 m6 l6\">
                                            <h6 class=\"center-align\">Reponse ";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "</h6>
                                            <div class=\"reponse center center-align\">";
                    // line 48
                    echo $this->getAttribute($context["reponse"], "titreReponse", array());
                    echo " </div>
                                        </div>
                                    </div>

                                    ";
                } else {
                    // line 53
                    echo "                                        <div class=\"col s12 m6 l6\">
                                            <h6 class=\"center-align\">Reponse ";
                    // line 54
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "</h6>
                                            <div class=\"reponse center center-align\">";
                    // line 55
                    echo $this->getAttribute($context["reponse"], "titreReponse", array());
                    echo " </div>
                                        </div>
                                    ";
                }
                // line 58
                echo "


                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "

                            </div>
                            <div class=\"divider\"></div><br>
                            <div class=\"row center\">
                                <div class=\"col s12\">
                                    ";
            // line 68
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["numQuestion"]) ? $context["numQuestion"] : null)), 'widget');
            echo "
                                </div>

                            </div>

                            <br>

                        </div>
                    </li>

                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
            </ul>

            <div class=\"center\">

                ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'row', array("label" => "Valider"));
        echo "

            </div>

            ";
        // line 88
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end', array("render_rest" => false));
        echo "

        </div>



    </div>

";
    }

    public function getTemplateName()
    {
        return "MQQuiziBundle:Reponse:repQuizs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 88,  230 => 84,  223 => 79,  198 => 68,  190 => 62,  173 => 58,  167 => 55,  163 => 54,  160 => 53,  152 => 48,  148 => 47,  143 => 44,  141 => 43,  138 => 42,  121 => 41,  118 => 40,  116 => 39,  110 => 36,  101 => 32,  97 => 30,  80 => 29,  73 => 25,  66 => 21,  56 => 14,  53 => 13,  50 => 12,  43 => 7,  40 => 6,  37 => 5,  30 => 3,  11 => 1,);
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
/* */
/* */
/*     <div class="container">*/
/* */
/*         <br>*/
/*         <h4 class="black-text">{{ quiz.titreQuiz }}</h4>*/
/*         <h6 class="thin">Bonne chance :)</h6>*/
/* */
/*         <div class="section">*/
/*             {{ form_start(form) }}*/
/*             <!-- Liste des questions -->*/
/*             <ul class="collapsible" data-collapsible="accordion">*/
/* */
/*                 {% for question in listQuestions %}*/
/* */
/*                     <li>*/
/*                         <div class="collapsible-header"><i id="checkQuestion{{ loop.index }}" class="material-icons">check_circle</i>Question {{ loop.index }}</div>*/
/*                         <div class="collapsible-body">*/
/* */
/*                             <br>*/
/*                             <h5 class="center-align">{{ question.titreQuestion|raw }}</h5>*/
/*                             <br>*/
/* */
/*                             {% set numQuestion = 'question' ~ loop.index %}*/
/*                             <div class="row">*/
/*                                 {% for reponse in question.reponses %}*/
/* */
/*                                     {% if (loop.index%2 == 0) %}*/
/*                                     <div class="row">*/
/* */
/*                                         <div class="col s12 m6 l6">*/
/*                                             <h6 class="center-align">Reponse {{ loop.index }}</h6>*/
/*                                             <div class="reponse center center-align">{{ reponse.titreReponse|raw }} </div>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     {% else %}*/
/*                                         <div class="col s12 m6 l6">*/
/*                                             <h6 class="center-align">Reponse {{ loop.index }}</h6>*/
/*                                             <div class="reponse center center-align">{{ reponse.titreReponse|raw }} </div>*/
/*                                         </div>*/
/*                                     {% endif %}*/
/* */
/* */
/* */
/*                                 {% endfor %}*/
/* */
/* */
/*                             </div>*/
/*                             <div class="divider"></div><br>*/
/*                             <div class="row center">*/
/*                                 <div class="col s12">*/
/*                                     {{ form_widget(attribute(form, numQuestion))|raw }}*/
/*                                 </div>*/
/* */
/*                             </div>*/
/* */
/*                             <br>*/
/* */
/*                         </div>*/
/*                     </li>*/
/* */
/*                 {% endfor %}*/
/* */
/*             </ul>*/
/* */
/*             <div class="center">*/
/* */
/*                 {{ form_row(form.save, { 'label': 'Valider' }) }}*/
/* */
/*             </div>*/
/* */
/*             {{ form_end(form, {'render_rest': false}) }}*/
/* */
/*         </div>*/
/* */
/* */
/* */
/*     </div>*/
/* */
/* {% endblock %}*/

<?php

/* MQUserBundle:Security:gestion.html.twig */
class __TwigTemplate_bbdcd75de3025e3c74fcb588cbd3b237f713a0be7a9c926c15f2590ea8571d4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MQUserBundle:Security:gestion.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
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

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
    ";
        // line 13
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div class=\"container\">

        <br>
        <h4 class=\"black-text\">Administration des User's</h4>
        <br>
        <div class=\"divider\"></div>

        <table>
            <thead>
            <tr>
                <th data-field=\"id\">ID</th>
                <th data-field=\"name\">Login</th>
                <th data-field=\"email\">Mail</th>
                <th data-field=\"role\">Role</th>
                <th data-field=\"supprimer\">Supprimer</th>
            </tr>
            </thead>


            <!-- Modal Structure -->

            <tbody>

            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 39
            echo "                ";
            if (($this->getAttribute($this->getAttribute($context["user"], "roles", array()), 0, array(), "array") == "ROLE_USER")) {
                // line 40
                echo "
                    <tr>
                        <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "mail", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "roles", array()), 0, array(), "array"), "html", null, true);
                echo "</td>
                        <td><a class=\"waves-effect waves-light btn modal-trigger\" href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_user", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\"
                               onclick=\"return confirm('Etes vous sûr de vouloir supprimer cet utilisateur')\" >Supprimer</a></td>
                    </tr>

                ";
            }
            // line 51
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "

            </tbody>

        </table>


    </div>

";
    }

    public function getTemplateName()
    {
        return "MQUserBundle:Security:gestion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 53,  119 => 51,  111 => 46,  107 => 45,  103 => 44,  99 => 43,  95 => 42,  91 => 40,  88 => 39,  84 => 38,  56 => 13,  53 => 12,  50 => 11,  43 => 7,  40 => 6,  37 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}{{ parent() }}Accueil{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/*     {{ parent() }}*/
/* */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     {{ parent() }}*/
/* */
/*     <div class="container">*/
/* */
/*         <br>*/
/*         <h4 class="black-text">Administration des User's</h4>*/
/*         <br>*/
/*         <div class="divider"></div>*/
/* */
/*         <table>*/
/*             <thead>*/
/*             <tr>*/
/*                 <th data-field="id">ID</th>*/
/*                 <th data-field="name">Login</th>*/
/*                 <th data-field="email">Mail</th>*/
/*                 <th data-field="role">Role</th>*/
/*                 <th data-field="supprimer">Supprimer</th>*/
/*             </tr>*/
/*             </thead>*/
/* */
/* */
/*             <!-- Modal Structure -->*/
/* */
/*             <tbody>*/
/* */
/*             {% for user in users %}*/
/*                 {% if user.roles[0] == "ROLE_USER"%}*/
/* */
/*                     <tr>*/
/*                         <td>{{ user.id }}</td>*/
/*                         <td>{{ user.username }}</td>*/
/*                         <td>{{ user.mail }}</td>*/
/*                         <td>{{ user.roles[0] }}</td>*/
/*                         <td><a class="waves-effect waves-light btn modal-trigger" href="{{ path('delete_user', {'id': user.id}) }}"*/
/*                                onclick="return confirm('Etes vous sûr de vouloir supprimer cet utilisateur')" >Supprimer</a></td>*/
/*                     </tr>*/
/* */
/*                 {% endif %}*/
/* */
/*             {% endfor %}*/
/* */
/* */
/*             </tbody>*/
/* */
/*         </table>*/
/* */
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */

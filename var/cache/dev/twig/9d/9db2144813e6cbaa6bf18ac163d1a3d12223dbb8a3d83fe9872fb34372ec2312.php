<?php

/* produto/view.html.twig */
class __TwigTemplate_1e53701750f29deb61fcc1223d72e1fa674b163df0967c5ca460acb4caa856fd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "produto/view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produto/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produto/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " 
    Visualização de produto - 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
    <h1>Visualização de produto - <small>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new Twig_Error_Runtime('Variable "produto" does not exist.', 8, $this->source); })()), "nome", array()), "html", null, true);
        echo "</small></h1>
    <hr>
    <table class=\"table table-striped\">
        <tbody>
            <tr>
                    <th>Cod.</th>
                    <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new Twig_Error_Runtime('Variable "produto" does not exist.', 14, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                    <th>Nome</th>
                    <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new Twig_Error_Runtime('Variable "produto" does not exist.', 18, $this->source); })()), "nome", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                    <th>Preço</th>
                    <td>R\$ ";
        // line 22
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new Twig_Error_Runtime('Variable "produto" does not exist.', 22, $this->source); })()), "preco", array()), 2, ",", "."), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                    <th>Descrição</th>
                    <td>";
        // line 26
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new Twig_Error_Runtime('Variable "produto" does not exist.', 26, $this->source); })()), "descricao", array()), "html", null, true));
        echo "</td>
            </tr>

        </tbody>

    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produto/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 26,  99 => 22,  92 => 18,  85 => 14,  76 => 8,  65 => 7,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %} 
    Visualização de produto - 
{% endblock %}

{% block body %} 
    <h1>Visualização de produto - <small>{{produto.nome}}</small></h1>
    <hr>
    <table class=\"table table-striped\">
        <tbody>
            <tr>
                    <th>Cod.</th>
                    <td>{{produto.id}}</td>
            </tr>
            <tr>
                    <th>Nome</th>
                    <td>{{produto.nome}}</td>
            </tr>
            <tr>
                    <th>Preço</th>
                    <td>R\$ {{produto.preco|number_format(2, \",\", \".\")}}</td>
            </tr>
            <tr>
                    <th>Descrição</th>
                    <td>{{ produto.descricao|nl2br }}</td>
            </tr>

        </tbody>

    </table>

{% endblock %}", "produto/view.html.twig", "/var/www/templates/produto/view.html.twig");
    }
}

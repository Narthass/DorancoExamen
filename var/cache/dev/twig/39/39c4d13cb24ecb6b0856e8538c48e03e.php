<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index/index.html.twig */
class __TwigTemplate_99d8c4c3804e30285f0212a995ce0be9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'meta' => [$this, 'block_meta'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue sur Interloc ! ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        echo "<meta name=\"description\" content=\"Interloc vous propose une nouvelle application à vous ,bailleurs,afin de gérer vos contrats de locations immobiliers gratuitement et simplement\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1 class='titre'>Bienvenue sur Interloc !</h1>
    <p class='paragraphe'>Gérez vos bails en toute simplicité avec notre tout nouveau Gestionnaire de location !
    Les différentes étapes de vos contrats seront suivis par notre application.
    De leurs créations à leur archivage.
    N'hésitez pas à créer un compte dès maintenant <a class=\"btn btn-success text-light\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" >en cliquant ici !</a>
    </p>
    <div class=\"d-flex flex-column flex-lg-row justify-content-center  w-100\"id=\"etapes\" >
        
        <figure class=\"figure \">
            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portrait.png "), "html", null, true);
        echo "\" class= \" figure-img border border-success rounded-circle border-3\"  alt=\"etape-client\">
            <figcaption class=\"figure-caption text-right rounded-5 border border-success rounded-pill  text-light p-3\">Commencez par créer votre client ...</figcaption>
        </figure>
        <figure class=\"figure\"> 
            <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/fleche.png"), "html", null, true);
        echo "\"class=\" figure-img\"  alt=\"fleche\">
            

        </figure>
        <figure class=\"figure\">
            <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/contracter.png"), "html", null, true);
        echo "\"class=\" figure-img border border-success rounded-circle border-3\"  alt=\"etape-contrat\">
            <figcaption class=\"figure-caption text-right rounded-5 border border-success rounded-pill  text-light p-3\">Puis liez lui un contrat ...</figcaption>       
        </figure>
         <figure class=\"figure\">
            <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/fleche.png"), "html", null, true);
        echo "\"class=\" figure-img\"  alt=\"fleche\">
            
         </figure>
        <figure class=\"figure\">
            <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/paiement.png"), "html", null, true);
        echo "\"class=\" figure-img border border-success rounded-circle border-3\"  alt=\"etape-paiement\">
            <figcaption class=\"figure-caption text-right rounded-5 border border-success rounded-pill text-light p-3\">Il ne vous reste plus qu'a gérer les paiements qui lui seront liés !</figcaption>
        </figure>
        

    </div>
    <br></br>
    <div></div>

    



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 34,  145 => 30,  138 => 26,  130 => 21,  123 => 17,  115 => 12,  109 => 8,  99 => 7,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bienvenue sur Interloc ! {% endblock %}
{% block meta %}<meta name=\"description\" content=\"Interloc vous propose une nouvelle application à vous ,bailleurs,afin de gérer vos contrats de locations immobiliers gratuitement et simplement\">
{% endblock
%}
{% block body %}
    <h1 class='titre'>Bienvenue sur Interloc !</h1>
    <p class='paragraphe'>Gérez vos bails en toute simplicité avec notre tout nouveau Gestionnaire de location !
    Les différentes étapes de vos contrats seront suivis par notre application.
    De leurs créations à leur archivage.
    N'hésitez pas à créer un compte dès maintenant <a class=\"btn btn-success text-light\" href=\"{{path('app_register')}}\" >en cliquant ici !</a>
    </p>
    <div class=\"d-flex flex-column flex-lg-row justify-content-center  w-100\"id=\"etapes\" >
        
        <figure class=\"figure \">
            <img src=\"{{asset('images/portrait.png ')}}\" class= \" figure-img border border-success rounded-circle border-3\"  alt=\"etape-client\">
            <figcaption class=\"figure-caption text-right rounded-5 border border-success rounded-pill  text-light p-3\">Commencez par créer votre client ...</figcaption>
        </figure>
        <figure class=\"figure\"> 
            <img src=\"{{asset('images/fleche.png')}}\"class=\" figure-img\"  alt=\"fleche\">
            

        </figure>
        <figure class=\"figure\">
            <img src=\"{{asset('images/contracter.png')}}\"class=\" figure-img border border-success rounded-circle border-3\"  alt=\"etape-contrat\">
            <figcaption class=\"figure-caption text-right rounded-5 border border-success rounded-pill  text-light p-3\">Puis liez lui un contrat ...</figcaption>       
        </figure>
         <figure class=\"figure\">
            <img src=\"{{asset('images/fleche.png')}}\"class=\" figure-img\"  alt=\"fleche\">
            
         </figure>
        <figure class=\"figure\">
            <img src=\"{{asset('images/paiement.png')}}\"class=\" figure-img border border-success rounded-circle border-3\"  alt=\"etape-paiement\">
            <figcaption class=\"figure-caption text-right rounded-5 border border-success rounded-pill text-light p-3\">Il ne vous reste plus qu'a gérer les paiements qui lui seront liés !</figcaption>
        </figure>
        

    </div>
    <br></br>
    <div></div>

    



{% endblock %}
", "index/index.html.twig", "C:\\xampp\\htdocs\\DorancoExamen\\templates\\index\\index.html.twig");
    }
}

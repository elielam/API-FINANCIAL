<?php

/* index.html.twig */
class __TwigTemplate_2a729238ae8cc47dd59a05b59b55883231f3f8f76485ca2fd773a7d7fb29daa4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <style>
        .entity {
            border-bottom: 0.1px solid lightgrey;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
        }

        .collapse-card {
            width: 100% !important;
            height: auto;
        }

        .collapse-card .collapse-card-body {
            width: 100% !important;
            display: flex;
            flex-direction: column;
            border: none !important;
        }

        .collapse-card .collapse-card-body .request-row {
            width: 100% !important;
            height: 50px;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid lightgray;
        }

        .collapse-card .collapse-card-body .request-row .left {
            width: 50% !important;
            height: 100% !important;
            display: flex;
            text-align: left;
            align-items: center;
            flex-direction: row;
        }

        .collapse-card .collapse-card-body .request-row .left .get {
            width: 50px !important;
            height: 50% !important;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px;
            font-size: 11px;
            font-weight: bold;
            color: white;
            background-color: #3a87ad;
        }

        .collapse-card .collapse-card-body .request-row .left .post {
            width: 50px !important;
            height: 50% !important;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px;
            font-size: 11px;
            font-weight: bold;
            color: white;
            background-color: #468847;
        }

        .collapse-card .collapse-card-body .request-row .left .put {
            width: 50px !important;
            height: 50% !important;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px;
            font-size: 11px;
            font-weight: bold;
            color: white;
            background-color: #f89406;
        }

        .collapse-card .collapse-card-body .request-row .left .delete {
            width: 50px !important;
            height: 50% !important;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px;
            font-size: 11px;
            font-weight: bold;
            color: white;
            background-color: #b94a48;
        }

        .collapse-card .collapse-card-body .request-row .right {
            width: 50% !important;
            height: 100% !important;
            display: flex;
            text-align: right;
            align-items: center;
            flex-direction: row;
        }

        .collapse-card .collapse-card-body .request-row .right>small {
            width: 100% !important;
            height: 100% !important;
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }
    </style>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 mt-5 entity\" data-toggle=\"collapse\" href=\"#collapseOperations\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseOperations\">
                <p style=\"font-weight: bold\">OPERATION</p>
                <small style=\"color: grey\">JSON</small>
            </div>
            <div class=\"collapse collapse-card\" id=\"collapseOperations\">
                <div class=\"card card-body collapse-card-body\">
                    <div class=\"request-row\">
                        <div class=\"left\">
                            <p class=\"m-0 mr-4 get\">GET</p>
                            <p class=\"m-0\" style=\"color: blue\">/operations/</p>
                        </div>
                        <div class=\"right\">
                            <small class=\"m-0\">Get all Operations</small>
                        </div>
                    </div>
                    <div class=\"request-row\" data-toggle=\"collapse\" href=\"#collapseparams2\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseparams2\">
                        <div class=\"left\">
                            <p class=\"m-0 mr-4 get\">GET</p>
                            <p class=\"m-0\" style=\"color: blue\">/operation/</p>
                        </div>
                        <div class=\"right\">
                            <small class=\"m-0\">Get Operation</small>
                        </div>
                    </div>
                    <div class=\"collapse collapse-card\" id=\"collapseparams2\">
                        <div class=\"card card-body collapse-card-body\" style=\"flex-direction: row !important; align-items: center !important; justify-content: center !important;\">
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">ID</span>
                        </div>
                    </div>
                    <div class=\"request-row\" data-toggle=\"collapse\" href=\"#collapseparams3\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseparams3\">
                        <div class=\"left\">
                            <p class=\"m-0 mr-4 post\">POST</p>
                            <p class=\"m-0\" style=\"color: blue\">/operation/</p>
                        </div>
                        <div class=\"right\">
                            <small class=\"m-0\">Post Operation</small>
                        </div>
                    </div>
                    <div class=\"collapse collapse-card\" id=\"collapseparams3\">
                        <div class=\"card card-body collapse-card-body\" style=\"flex-direction: row !important; align-items: center !important; justify-content: center !important;\">
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">LIBELLE</span>
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">TYPE</span>
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">DATE</span>
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">CATEGORY</span>
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">SUM</span>
                        </div>
                    </div>
                    <div class=\"request-row\" data-toggle=\"collapse\" href=\"#collapseparams4\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseparams4\">
                        <div class=\"left\">
                            <p class=\"m-0 mr-4 put\">PUT</p>
                            <p class=\"m-0\" style=\"color: blue\">/operation/</p>
                        </div>
                        <div class=\"right\">
                            <small class=\"m-0\">Put Operation</small>
                        </div>
                    </div>
                    <div class=\"collapse collapse-card\" id=\"collapseparams4\">
                        <div class=\"card card-body collapse-card-body\" style=\"flex-direction: row !important; align-items: center !important; justify-content: center !important;\">
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">ID</span>
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">LIBELLE</span>
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">TYPE</span>
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">DATE</span>
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">CATEGORY</span>
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">SUM</span>
                        </div>
                    </div>
                    <div class=\"request-row\" data-toggle=\"collapse\" href=\"#collapseparams5\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseparams5\">
                        <div class=\"left\">
                            <p class=\"m-0 mr-4 delete\">DEL</p>
                            <p class=\"m-0\" style=\"color: blue\">/operation/</p>
                        </div>
                        <div class=\"right\">
                            <small class=\"m-0\">Delete Operation</small>
                        </div>
                    </div>
                    <div class=\"collapse collapse-card\" id=\"collapseparams5\">
                        <div class=\"card card-body collapse-card-body\" style=\"flex-direction: row !important; align-items: center !important; justify-content: center !important;\">
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">ID</span>
                        </div>
                    </div>
                </div>
            </div><div class=\"col-12 mt-3 entity\" data-toggle=\"collapse\" href=\"#collapseCategories\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseCategories\">
                <p style=\"font-weight: bold\">CATEGORIES</p>
                <small style=\"color: grey\">JSON</small>
            </div>
            <div class=\"collapse collapse-card\" id=\"collapseCategories\">
                <div class=\"card card-body collapse-card-body\">
                    <div class=\"request-row\">
                        <div class=\"left\">
                            <p class=\"m-0 mr-4 get\">GET</p>
                            <p class=\"m-0\" style=\"color: blue\">/categories/</p>
                        </div>
                        <div class=\"right\">
                            <small class=\"m-0\">Get all Categories</small>
                        </div>
                    </div>
                    <div class=\"request-row\" data-toggle=\"collapse\" href=\"#collapseparams7\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseparams7\">
                        <div class=\"left\">
                            <p class=\"m-0 mr-4 get\">GET</p>
                            <p class=\"m-0\" style=\"color: blue\">/category/</p>
                        </div>
                        <div class=\"right\">
                            <small class=\"m-0\">Get Category</small>
                        </div>
                    </div>
                    <div class=\"collapse collapse-card\" id=\"collapseparams7\">
                        <div class=\"card card-body collapse-card-body\" style=\"flex-direction: row !important; align-items: center !important; justify-content: center !important;\">
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">ID</span>
                        </div>
                    </div>
                    <div class=\"request-row\" data-toggle=\"collapse\" href=\"#collapseparams8\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseparams8\">
                        <div class=\"left\">
                            <p class=\"m-0 mr-4 post\">POST</p>
                            <p class=\"m-0\" style=\"color: blue\">/category/</p>
                        </div>
                        <div class=\"right\">
                            <small class=\"m-0\">Post Category</small>
                        </div>
                    </div>
                    <div class=\"collapse collapse-card\" id=\"collapseparams8\">
                        <div class=\"card card-body collapse-card-body\" style=\"flex-direction: row !important; align-items: center !important; justify-content: center !important;\">
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">LIBELLE</span>
                        </div>
                    </div>
                    <div class=\"request-row\" data-toggle=\"collapse\" href=\"#collapseparams9\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseparams9\">
                        <div class=\"left\">
                            <p class=\"m-0 mr-4 put\">PUT</p>
                            <p class=\"m-0\" style=\"color: blue\">/category/</p>
                        </div>
                        <div class=\"right\">
                            <small class=\"m-0\">Put Category</small>
                        </div>
                    </div>
                    <div class=\"collapse collapse-card\" id=\"collapseparams9\">
                        <div class=\"card card-body collapse-card-body\" style=\"flex-direction: row !important; align-items: center !important; justify-content: center !important;\">
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">ID</span>
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">LIBELLE</span>
                        </div>
                    </div>
                    <div class=\"request-row\" data-toggle=\"collapse\" href=\"#collapseparams10\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseparams10\">
                        <div class=\"left\">
                            <p class=\"m-0 mr-4 delete\">DEL</p>
                            <p class=\"m-0\" style=\"color: blue\">/category/</p>
                        </div>
                        <div class=\"right\">
                            <small class=\"m-0\">Delete Category</small>
                        </div>
                    </div>
                    <div class=\"collapse collapse-card\" id=\"collapseparams10\">
                        <div class=\"card card-body collapse-card-body\" style=\"flex-direction: row !important; align-items: center !important; justify-content: center !important;\">
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">ID</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <style>
        .entity {
            border-bottom: 0.1px solid lightgrey;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
        }

        .collapse-card {
            width: 100% !important;
            height: auto;
        }

        .collapse-card .collapse-card-body {
            width: 100% !important;
            display: flex;
            flex-direction: column;
            border: none !important;
        }

        .collapse-card .collapse-card-body .request-row {
            width: 100% !important;
            height: 50px;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid lightgray;
        }

        .collapse-card .collapse-card-body .request-row .left {
            width: 50% !important;
            height: 100% !important;
            display: flex;
            text-align: left;
            align-items: center;
            flex-direction: row;
        }

        .collapse-card .collapse-card-body .request-row .left .get {
            width: 50px !important;
            height: 50% !important;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px;
            font-size: 11px;
            font-weight: bold;
            color: white;
            background-color: #3a87ad;
        }

        .collapse-card .collapse-card-body .request-row .left .post {
            width: 50px !important;
            height: 50% !important;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px;
            font-size: 11px;
            font-weight: bold;
            color: white;
            background-color: #468847;
        }

        .collapse-card .collapse-card-body .request-row .left .put {
            width: 50px !important;
            height: 50% !important;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px;
            font-size: 11px;
            font-weight: bold;
            color: white;
            background-color: #f89406;
        }

        .collapse-card .collapse-card-body .request-row .left .delete {
            width: 50px !important;
            height: 50% !important;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px;
            font-size: 11px;
            font-weight: bold;
            color: white;
            background-color: #b94a48;
        }

        .collapse-card .collapse-card-body .request-row .right {
            width: 50% !important;
            height: 100% !important;
            display: flex;
            text-align: right;
            align-items: center;
            flex-direction: row;
        }

        .collapse-card .collapse-card-body .request-row .right>small {
            width: 100% !important;
            height: 100% !important;
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }
    </style>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 mt-5 entity\" data-toggle=\"collapse\" href=\"#collapseOperations\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseOperations\">
                <p style=\"font-weight: bold\">OPERATION</p>
                <small style=\"color: grey\">JSON</small>
            </div>
            <div class=\"collapse collapse-card\" id=\"collapseOperations\">
                <div class=\"card card-body collapse-card-body\">
                    <div class=\"request-row\">
                        <div class=\"left\">
                            <p class=\"m-0 mr-4 get\">GET</p>
                            <p class=\"m-0\" style=\"color: blue\">/operations/</p>
                        </div>
                        <div class=\"right\">
                            <small class=\"m-0\">Get all Operations</small>
                        </div>
                    </div>
                    <div class=\"request-row\" data-toggle=\"collapse\" href=\"#collapseparams2\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseparams2\">
                        <div class=\"left\">
                            <p class=\"m-0 mr-4 get\">GET</p>
                            <p class=\"m-0\" style=\"color: blue\">/operation/</p>
                        </div>
                        <div class=\"right\">
                            <small class=\"m-0\">Get Operation</small>
                        </div>
                    </div>
                    <div class=\"collapse collapse-card\" id=\"collapseparams2\">
                        <div class=\"card card-body collapse-card-body\" style=\"flex-direction: row !important; align-items: center !important; justify-content: center !important;\">
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">ID</span>
                        </div>
                    </div>
                    <div class=\"request-row\" data-toggle=\"collapse\" href=\"#collapseparams3\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseparams3\">
                        <div class=\"left\">
                            <p class=\"m-0 mr-4 post\">POST</p>
                            <p class=\"m-0\" style=\"color: blue\">/operation/</p>
                        </div>
                        <div class=\"right\">
                            <small class=\"m-0\">Post Operation</small>
                        </div>
                    </div>
                    <div class=\"collapse collapse-card\" id=\"collapseparams3\">
                        <div class=\"card card-body collapse-card-body\" style=\"flex-direction: row !important; align-items: center !important; justify-content: center !important;\">
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">LIBELLE</span>
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">TYPE</span>
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">DATE</span>
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">CATEGORY</span>
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">SUM</span>
                        </div>
                    </div>
                    <div class=\"request-row\" data-toggle=\"collapse\" href=\"#collapseparams4\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseparams4\">
                        <div class=\"left\">
                            <p class=\"m-0 mr-4 put\">PUT</p>
                            <p class=\"m-0\" style=\"color: blue\">/operation/</p>
                        </div>
                        <div class=\"right\">
                            <small class=\"m-0\">Put Operation</small>
                        </div>
                    </div>
                    <div class=\"collapse collapse-card\" id=\"collapseparams4\">
                        <div class=\"card card-body collapse-card-body\" style=\"flex-direction: row !important; align-items: center !important; justify-content: center !important;\">
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">ID</span>
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">LIBELLE</span>
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">TYPE</span>
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">DATE</span>
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">CATEGORY</span>
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">SUM</span>
                        </div>
                    </div>
                    <div class=\"request-row\" data-toggle=\"collapse\" href=\"#collapseparams5\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseparams5\">
                        <div class=\"left\">
                            <p class=\"m-0 mr-4 delete\">DEL</p>
                            <p class=\"m-0\" style=\"color: blue\">/operation/</p>
                        </div>
                        <div class=\"right\">
                            <small class=\"m-0\">Delete Operation</small>
                        </div>
                    </div>
                    <div class=\"collapse collapse-card\" id=\"collapseparams5\">
                        <div class=\"card card-body collapse-card-body\" style=\"flex-direction: row !important; align-items: center !important; justify-content: center !important;\">
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">ID</span>
                        </div>
                    </div>
                </div>
            </div><div class=\"col-12 mt-3 entity\" data-toggle=\"collapse\" href=\"#collapseCategories\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseCategories\">
                <p style=\"font-weight: bold\">CATEGORIES</p>
                <small style=\"color: grey\">JSON</small>
            </div>
            <div class=\"collapse collapse-card\" id=\"collapseCategories\">
                <div class=\"card card-body collapse-card-body\">
                    <div class=\"request-row\">
                        <div class=\"left\">
                            <p class=\"m-0 mr-4 get\">GET</p>
                            <p class=\"m-0\" style=\"color: blue\">/categories/</p>
                        </div>
                        <div class=\"right\">
                            <small class=\"m-0\">Get all Categories</small>
                        </div>
                    </div>
                    <div class=\"request-row\" data-toggle=\"collapse\" href=\"#collapseparams7\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseparams7\">
                        <div class=\"left\">
                            <p class=\"m-0 mr-4 get\">GET</p>
                            <p class=\"m-0\" style=\"color: blue\">/category/</p>
                        </div>
                        <div class=\"right\">
                            <small class=\"m-0\">Get Category</small>
                        </div>
                    </div>
                    <div class=\"collapse collapse-card\" id=\"collapseparams7\">
                        <div class=\"card card-body collapse-card-body\" style=\"flex-direction: row !important; align-items: center !important; justify-content: center !important;\">
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">ID</span>
                        </div>
                    </div>
                    <div class=\"request-row\" data-toggle=\"collapse\" href=\"#collapseparams8\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseparams8\">
                        <div class=\"left\">
                            <p class=\"m-0 mr-4 post\">POST</p>
                            <p class=\"m-0\" style=\"color: blue\">/category/</p>
                        </div>
                        <div class=\"right\">
                            <small class=\"m-0\">Post Category</small>
                        </div>
                    </div>
                    <div class=\"collapse collapse-card\" id=\"collapseparams8\">
                        <div class=\"card card-body collapse-card-body\" style=\"flex-direction: row !important; align-items: center !important; justify-content: center !important;\">
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">LIBELLE</span>
                        </div>
                    </div>
                    <div class=\"request-row\" data-toggle=\"collapse\" href=\"#collapseparams9\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseparams9\">
                        <div class=\"left\">
                            <p class=\"m-0 mr-4 put\">PUT</p>
                            <p class=\"m-0\" style=\"color: blue\">/category/</p>
                        </div>
                        <div class=\"right\">
                            <small class=\"m-0\">Put Category</small>
                        </div>
                    </div>
                    <div class=\"collapse collapse-card\" id=\"collapseparams9\">
                        <div class=\"card card-body collapse-card-body\" style=\"flex-direction: row !important; align-items: center !important; justify-content: center !important;\">
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">ID</span>
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">LIBELLE</span>
                        </div>
                    </div>
                    <div class=\"request-row\" data-toggle=\"collapse\" href=\"#collapseparams10\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseparams10\">
                        <div class=\"left\">
                            <p class=\"m-0 mr-4 delete\">DEL</p>
                            <p class=\"m-0\" style=\"color: blue\">/category/</p>
                        </div>
                        <div class=\"right\">
                            <small class=\"m-0\">Delete Category</small>
                        </div>
                    </div>
                    <div class=\"collapse collapse-card\" id=\"collapseparams10\">
                        <div class=\"card card-body collapse-card-body\" style=\"flex-direction: row !important; align-items: center !important; justify-content: center !important;\">
                            <span class=\"badge badge-secondary ml-2\" style=\"display: flex; align-items: center; justify-content: center\">ID</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "index.html.twig", "C:\\Users\\Elie\\Documents\\Projets\\Web\\API-FINANCIAL\\templates\\index.html.twig");
    }
}

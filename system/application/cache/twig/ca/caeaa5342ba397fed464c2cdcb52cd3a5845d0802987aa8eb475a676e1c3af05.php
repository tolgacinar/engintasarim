<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* includes/header.twig */
class __TwigTemplate_0338a9444ea19ca4b943a4c50343d0f8defb01200bdd326cee26df859ce31ccd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel=\"stylesheet\" href=\"/assets/css/main.css\">
</head>
<body class=\"preload\">
  <aside class=\"leftbar fixed flex flex-col\">
   <div class=\"logo\">
    <a class=\"flex items-center\" href=\"/\">
     <div class=\"logo-figure\">
      <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\">
       <path d=\"M432 240a79.66 79.66 0 00-16.672 1.76C408.128 169.024 346.592 112 272 112c-8.832 0-16 7.168-16 16v256c0 8.832 7.168 16 16 16h160c44.128 0 80-35.872 80-80 0-44.096-35.872-80-80-80zM208 144c-8.832 0-16 7.168-16 16v224c0 8.832 7.168 16 16 16s16-7.168 16-16V160c0-8.832-7.168-16-16-16zM144 208c-8.832 0-16 7.168-16 16v160c0 8.832 7.168 16 16 16s16-7.168 16-16V224c0-8.832-7.168-16-16-16zM80 208c-8.832 0-16 7.168-16 16v160c0 8.832 7.168 16 16 16s16-7.168 16-16V224c0-8.832-7.168-16-16-16zM16 256c-8.832 0-16 7.168-16 16v96c0 8.832 7.168 16 16 16s16-7.168 16-16v-96c0-8.832-7.168-16-16-16z\"></path>
     </svg>
   </div>
   <div class=\"logo-text\"><span class=\"block\">Engin</span><span class=\"block\">Admin Panel</span></div>
 </a>
</div>
<div class=\"leftbar-nav\">
  <div class=\"leftbar-nav-box\">
   <span class=\"block\">Genel</span>
   <ul>
    <li class=\"active\">
     <a class=\"flex items-center\" href=\"javascript:void(0);\">
      <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
       <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
       <polygon points=\"16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76\"></polygon>
     </svg>
     Gösterge Paneli
   </a>
 </li>
 <li>
   <a class=\"flex items-center\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, base_url("admin/categories/"), "html", null, true);
        echo "\">
     <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
       <rect x=\"3\" y=\"3\" width=\"7\" height=\"7\"></rect>
       <rect x=\"14\" y=\"3\" width=\"7\" height=\"7\"></rect>
       <rect x=\"14\" y=\"14\" width=\"7\" height=\"7\"></rect>
       <rect x=\"3\" y=\"14\" width=\"7\" height=\"7\"></rect>
     </svg>
     Kategori Yönetimi
   </a>
 </li>
<li>
 <a class=\"flex items-center\" href=\"javascript:void(0);\">
  <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
   <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"></path>
   <circle cx=\"9\" cy=\"7\" r=\"4\"></circle>
   <path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"></path>
   <path d=\"M16 3.13a4 4 0 0 1 0 7.75\"></path>
 </svg>
 Kullanıcı Yönetimi
</a>
</li>
<li>
 <a class=\"flex items-center\" href=\"javascript:void(0);\">
  <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
   <path d=\"M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z\"></path>
   <polyline points=\"14 2 14 8 20 8\"></polyline>
   <line x1=\"16\" y1=\"13\" x2=\"8\" y2=\"13\"></line>
   <line x1=\"16\" y1=\"17\" x2=\"8\" y2=\"17\"></line>
   <polyline points=\"10 9 9 9 8 9\"></polyline>
 </svg>
 Sipariş Yönetimi
</a>
</li>
<li>
 <a class=\"flex items-center\" href=\"javascript:void(0);\">
  <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
   <path d=\"M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z\"></path>
   <line x1=\"7\" y1=\"7\" x2=\"7.01\" y2=\"7\"></line>
 </svg>
 Ürün Yönetimi
</a>
</li>
<li>
 <a class=\"flex items-center\" href=\"javascript:void(0);\">
  <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
   <rect x=\"2\" y=\"7\" width=\"20\" height=\"14\" rx=\"2\" ry=\"2\"></rect>
   <path d=\"M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16\"></path>
 </svg>
 Marka Yönetimi
</a>
</li>
<li>
 <a class=\"flex items-center\" href=\"javascript:void(0);\">
  <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
   <line x1=\"4\" y1=\"21\" x2=\"4\" y2=\"14\"></line>
   <line x1=\"4\" y1=\"10\" x2=\"4\" y2=\"3\"></line>
   <line x1=\"12\" y1=\"21\" x2=\"12\" y2=\"12\"></line>
   <line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"3\"></line>
   <line x1=\"20\" y1=\"21\" x2=\"20\" y2=\"16\"></line>
   <line x1=\"20\" y1=\"12\" x2=\"20\" y2=\"3\"></line>
   <line x1=\"1\" y1=\"14\" x2=\"7\" y2=\"14\"></line>
   <line x1=\"9\" y1=\"8\" x2=\"15\" y2=\"8\"></line>
   <line x1=\"17\" y1=\"16\" x2=\"23\" y2=\"16\"></line>
 </svg>
 Filtreleme Yönetimi
</a>
</li>
<li>
 <a class=\"flex items-center\" href=\"javascript:void(0);\">
  <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
   <line x1=\"18\" y1=\"20\" x2=\"18\" y2=\"10\"></line>
   <line x1=\"12\" y1=\"20\" x2=\"12\" y2=\"4\"></line>
   <line x1=\"6\" y1=\"20\" x2=\"6\" y2=\"14\"></line>
 </svg>
 İstatislik Yönetimi
</a>
</li>
<li>
 <a class=\"flex items-center\" href=\"javascript:void(0);\">
  <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
   <line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"></line>
   <path d=\"M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6\"></path>
 </svg>
 Banka Yönetimi
</a>
</li>
<li>
 <a class=\"flex items-center\" href=\"javascript:void(0);\">
  <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
   <line x1=\"16.5\" y1=\"9.4\" x2=\"7.5\" y2=\"4.21\"></line>
   <path d=\"M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z\"></path>
   <polyline points=\"3.27 6.96 12 12.01 20.73 6.96\"></polyline>
   <line x1=\"12\" y1=\"22.08\" x2=\"12\" y2=\"12\"></line>
 </svg>
 Kargo Yönetimi
</a>
</li>
<li>
 <a class=\"flex items-center\" href=\"javascript:void(0);\">
  <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
   <circle cx=\"12\" cy=\"12\" r=\"3\"></circle>
   <path d=\"M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z\"></path>
 </svg>
 Sistem Yönetimi
</a>
</li>
</ul>
</div>
</div>
<div class=\"user-profile\">
  <a class=\"flex items-center\" href=\"javascript:void(0);\">
   <div class=\"user-profile-image\"><img src=\"https://randomuser.me/api/portraits/men/1.jpg\" alt=\"\"></div>
   <div class=\"user-profile-text\">
    <span class=\"flex items-center\">
     Jack Reacher
     <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"3\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
      <polyline points=\"6 9 12 15 18 9\"></polyline>
    </svg>
  </span>
  <p>Normal Üye</p>
</div>
</a>
</div>
</aside>
<main class=\"content relative\">";
    }

    public function getTemplateName()
    {
        return "includes/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 33,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel=\"stylesheet\" href=\"/assets/css/main.css\">
</head>
<body class=\"preload\">
  <aside class=\"leftbar fixed flex flex-col\">
   <div class=\"logo\">
    <a class=\"flex items-center\" href=\"/\">
     <div class=\"logo-figure\">
      <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\">
       <path d=\"M432 240a79.66 79.66 0 00-16.672 1.76C408.128 169.024 346.592 112 272 112c-8.832 0-16 7.168-16 16v256c0 8.832 7.168 16 16 16h160c44.128 0 80-35.872 80-80 0-44.096-35.872-80-80-80zM208 144c-8.832 0-16 7.168-16 16v224c0 8.832 7.168 16 16 16s16-7.168 16-16V160c0-8.832-7.168-16-16-16zM144 208c-8.832 0-16 7.168-16 16v160c0 8.832 7.168 16 16 16s16-7.168 16-16V224c0-8.832-7.168-16-16-16zM80 208c-8.832 0-16 7.168-16 16v160c0 8.832 7.168 16 16 16s16-7.168 16-16V224c0-8.832-7.168-16-16-16zM16 256c-8.832 0-16 7.168-16 16v96c0 8.832 7.168 16 16 16s16-7.168 16-16v-96c0-8.832-7.168-16-16-16z\"></path>
     </svg>
   </div>
   <div class=\"logo-text\"><span class=\"block\">Engin</span><span class=\"block\">Admin Panel</span></div>
 </a>
</div>
<div class=\"leftbar-nav\">
  <div class=\"leftbar-nav-box\">
   <span class=\"block\">Genel</span>
   <ul>
    <li class=\"active\">
     <a class=\"flex items-center\" href=\"javascript:void(0);\">
      <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
       <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
       <polygon points=\"16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76\"></polygon>
     </svg>
     Gösterge Paneli
   </a>
 </li>
 <li>
   <a class=\"flex items-center\" href=\"{{ base_url('admin/categories/') }}\">
     <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
       <rect x=\"3\" y=\"3\" width=\"7\" height=\"7\"></rect>
       <rect x=\"14\" y=\"3\" width=\"7\" height=\"7\"></rect>
       <rect x=\"14\" y=\"14\" width=\"7\" height=\"7\"></rect>
       <rect x=\"3\" y=\"14\" width=\"7\" height=\"7\"></rect>
     </svg>
     Kategori Yönetimi
   </a>
 </li>
<li>
 <a class=\"flex items-center\" href=\"javascript:void(0);\">
  <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
   <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"></path>
   <circle cx=\"9\" cy=\"7\" r=\"4\"></circle>
   <path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"></path>
   <path d=\"M16 3.13a4 4 0 0 1 0 7.75\"></path>
 </svg>
 Kullanıcı Yönetimi
</a>
</li>
<li>
 <a class=\"flex items-center\" href=\"javascript:void(0);\">
  <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
   <path d=\"M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z\"></path>
   <polyline points=\"14 2 14 8 20 8\"></polyline>
   <line x1=\"16\" y1=\"13\" x2=\"8\" y2=\"13\"></line>
   <line x1=\"16\" y1=\"17\" x2=\"8\" y2=\"17\"></line>
   <polyline points=\"10 9 9 9 8 9\"></polyline>
 </svg>
 Sipariş Yönetimi
</a>
</li>
<li>
 <a class=\"flex items-center\" href=\"javascript:void(0);\">
  <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
   <path d=\"M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z\"></path>
   <line x1=\"7\" y1=\"7\" x2=\"7.01\" y2=\"7\"></line>
 </svg>
 Ürün Yönetimi
</a>
</li>
<li>
 <a class=\"flex items-center\" href=\"javascript:void(0);\">
  <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
   <rect x=\"2\" y=\"7\" width=\"20\" height=\"14\" rx=\"2\" ry=\"2\"></rect>
   <path d=\"M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16\"></path>
 </svg>
 Marka Yönetimi
</a>
</li>
<li>
 <a class=\"flex items-center\" href=\"javascript:void(0);\">
  <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
   <line x1=\"4\" y1=\"21\" x2=\"4\" y2=\"14\"></line>
   <line x1=\"4\" y1=\"10\" x2=\"4\" y2=\"3\"></line>
   <line x1=\"12\" y1=\"21\" x2=\"12\" y2=\"12\"></line>
   <line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"3\"></line>
   <line x1=\"20\" y1=\"21\" x2=\"20\" y2=\"16\"></line>
   <line x1=\"20\" y1=\"12\" x2=\"20\" y2=\"3\"></line>
   <line x1=\"1\" y1=\"14\" x2=\"7\" y2=\"14\"></line>
   <line x1=\"9\" y1=\"8\" x2=\"15\" y2=\"8\"></line>
   <line x1=\"17\" y1=\"16\" x2=\"23\" y2=\"16\"></line>
 </svg>
 Filtreleme Yönetimi
</a>
</li>
<li>
 <a class=\"flex items-center\" href=\"javascript:void(0);\">
  <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
   <line x1=\"18\" y1=\"20\" x2=\"18\" y2=\"10\"></line>
   <line x1=\"12\" y1=\"20\" x2=\"12\" y2=\"4\"></line>
   <line x1=\"6\" y1=\"20\" x2=\"6\" y2=\"14\"></line>
 </svg>
 İstatislik Yönetimi
</a>
</li>
<li>
 <a class=\"flex items-center\" href=\"javascript:void(0);\">
  <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
   <line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"></line>
   <path d=\"M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6\"></path>
 </svg>
 Banka Yönetimi
</a>
</li>
<li>
 <a class=\"flex items-center\" href=\"javascript:void(0);\">
  <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
   <line x1=\"16.5\" y1=\"9.4\" x2=\"7.5\" y2=\"4.21\"></line>
   <path d=\"M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z\"></path>
   <polyline points=\"3.27 6.96 12 12.01 20.73 6.96\"></polyline>
   <line x1=\"12\" y1=\"22.08\" x2=\"12\" y2=\"12\"></line>
 </svg>
 Kargo Yönetimi
</a>
</li>
<li>
 <a class=\"flex items-center\" href=\"javascript:void(0);\">
  <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
   <circle cx=\"12\" cy=\"12\" r=\"3\"></circle>
   <path d=\"M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z\"></path>
 </svg>
 Sistem Yönetimi
</a>
</li>
</ul>
</div>
</div>
<div class=\"user-profile\">
  <a class=\"flex items-center\" href=\"javascript:void(0);\">
   <div class=\"user-profile-image\"><img src=\"https://randomuser.me/api/portraits/men/1.jpg\" alt=\"\"></div>
   <div class=\"user-profile-text\">
    <span class=\"flex items-center\">
     Jack Reacher
     <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"3\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
      <polyline points=\"6 9 12 15 18 9\"></polyline>
    </svg>
  </span>
  <p>Normal Üye</p>
</div>
</a>
</div>
</aside>
<main class=\"content relative\">", "includes/header.twig", "D:\\xampp\\htdocs\\engintasarim\\admin\\views\\includes\\header.twig");
    }
}

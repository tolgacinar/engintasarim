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

/* dashboard.twig */
class __TwigTemplate_4501f89e7d6cca1149000157866542d8340fb0bab1541b88194d1fc84e805cdf extends \Twig\Template
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
        echo "<header class=\"header flex items-center justify-between mb-6\">
  <div class=\"header-left\">
    <div class=\"back-next\">
      <ul class=\"flex\">
        <li>
          <button class=\"focus:outline-none\">
            <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
              <polyline points=\"15 18 9 12 15 6\"></polyline>
            </svg>
          </button>
        </li>
        <li>
          <button class=\"focus:outline-none\">
            <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
              <polyline points=\"9 18 15 12 9 6\"></polyline>
            </svg>
          </button>
        </li>
      </ul>
    </div>
  </div>
  <div class=\"header-right\">
    <div class=\"user-action\">
      <ul class=\"flex items-center\">
        <li>
          <a class=\"block\" href=\"javascript:void(0);\">
            <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
              <path d=\"M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9\"></path>
              <path d=\"M13.73 21a2 2 0 0 1-3.46 0\"></path>
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </div>
</header>
<div class=\"dashboard\">
  <div class=\"dashboard-header flex items-start justify-between\">
    <div class=\"dashborad-header-text\">
      <h1>Gösterge Paneli</h1>
      <p>Engin Admin Panel'e Hoşgeldin</p>
    </div>
    <div class=\"dashboard-header-action\">
      <div class=\"dropdown\">
        <div class=\"dropdown-header flex items-center\">
          <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
            <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"></rect>
            <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"></line>
            <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"></line>
            <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"></line>
          </svg>
          <input type=\"text\" name=\"daterange\">
        </div>
      </div>
    </div>
  </div>
  <div class=\"general-info mt-6\">
    <ul class=\"flex\">
      <li class=\"w-1/5\">
        <div class=\"general-info-box\">
          <small class=\"block\">Günlük Ziyaretçi</small>
          <span class=\"block\">45,748</span>
          <div class=\"general-info-box-avarage flex items-center\">
            <span class=\"block\">
              <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"3\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                <polyline points=\"23 6 13.5 15.5 8.5 10.5 1 18\"></polyline>
                <polyline points=\"17 6 23 6 23 12\"></polyline>
              </svg>
            </span>+44.50%
          </div>
        </div>
      </li>
      <li class=\"w-1/5\">
        <div class=\"general-info-box\">
          <small class=\"block\">Toplam Sipariş</small>
          <span class=\"block\">21,553</span>
          <div class=\"general-info-box-avarage flex items-center\">
            <span class=\"block\">
              <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"3\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                <polyline points=\"23 6 13.5 15.5 8.5 10.5 1 18\"></polyline>
                <polyline points=\"17 6 23 6 23 12\"></polyline>
              </svg>
            </span>+31.33%
          </div>
        </div>
      </li>
      <li class=\"w-1/5\">
        <div class=\"general-info-box\">
          <small class=\"block\">Dönüşüm Oranı</small>
          <span class=\"block\">37,271</span>
          <div class=\"general-info-box-avarage flex items-center down\">
            <span class=\"block\">
              <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"3\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                <polyline points=\"23 18 13.5 8.5 8.5 13.5 1 6\"></polyline>
                <polyline points=\"17 18 23 18 23 12\"></polyline>
              </svg>
            </span>-27.38%
          </div>
        </div>
      </li>
      <li class=\"w-1/5\">
        <div class=\"general-info-box\">
          <small class=\"block\">Ort. Siparişler</small>
          <span class=\"block\">34,796</span>
          <div class=\"general-info-box-avarage flex items-center\">
            <span class=\"block\">
              <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"3\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                <polyline points=\"23 6 13.5 15.5 8.5 10.5 1 18\"></polyline>
                <polyline points=\"17 6 23 6 23 12\"></polyline>
              </svg>
            </span>+44.25%
          </div>
        </div>
      </li>
      <li class=\"w-1/5\">
        <div class=\"general-info-box\">
          <small class=\"block\">Müşteriler</small>
          <span class=\"block\">18,347</span>
          <div class=\"general-info-box-avarage flex items-center\">
            <span class=\"block\">
              <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"3\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                <polyline points=\"23 6 13.5 15.5 8.5 10.5 1 18\"></polyline>
                <polyline points=\"17 6 23 6 23 12\"></polyline>
              </svg>
            </span>+52.41%
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "dashboard.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header flex items-center justify-between mb-6\">
  <div class=\"header-left\">
    <div class=\"back-next\">
      <ul class=\"flex\">
        <li>
          <button class=\"focus:outline-none\">
            <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
              <polyline points=\"15 18 9 12 15 6\"></polyline>
            </svg>
          </button>
        </li>
        <li>
          <button class=\"focus:outline-none\">
            <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
              <polyline points=\"9 18 15 12 9 6\"></polyline>
            </svg>
          </button>
        </li>
      </ul>
    </div>
  </div>
  <div class=\"header-right\">
    <div class=\"user-action\">
      <ul class=\"flex items-center\">
        <li>
          <a class=\"block\" href=\"javascript:void(0);\">
            <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
              <path d=\"M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9\"></path>
              <path d=\"M13.73 21a2 2 0 0 1-3.46 0\"></path>
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </div>
</header>
<div class=\"dashboard\">
  <div class=\"dashboard-header flex items-start justify-between\">
    <div class=\"dashborad-header-text\">
      <h1>Gösterge Paneli</h1>
      <p>Engin Admin Panel'e Hoşgeldin</p>
    </div>
    <div class=\"dashboard-header-action\">
      <div class=\"dropdown\">
        <div class=\"dropdown-header flex items-center\">
          <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
            <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"></rect>
            <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"></line>
            <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"></line>
            <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"></line>
          </svg>
          <input type=\"text\" name=\"daterange\">
        </div>
      </div>
    </div>
  </div>
  <div class=\"general-info mt-6\">
    <ul class=\"flex\">
      <li class=\"w-1/5\">
        <div class=\"general-info-box\">
          <small class=\"block\">Günlük Ziyaretçi</small>
          <span class=\"block\">45,748</span>
          <div class=\"general-info-box-avarage flex items-center\">
            <span class=\"block\">
              <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"3\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                <polyline points=\"23 6 13.5 15.5 8.5 10.5 1 18\"></polyline>
                <polyline points=\"17 6 23 6 23 12\"></polyline>
              </svg>
            </span>+44.50%
          </div>
        </div>
      </li>
      <li class=\"w-1/5\">
        <div class=\"general-info-box\">
          <small class=\"block\">Toplam Sipariş</small>
          <span class=\"block\">21,553</span>
          <div class=\"general-info-box-avarage flex items-center\">
            <span class=\"block\">
              <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"3\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                <polyline points=\"23 6 13.5 15.5 8.5 10.5 1 18\"></polyline>
                <polyline points=\"17 6 23 6 23 12\"></polyline>
              </svg>
            </span>+31.33%
          </div>
        </div>
      </li>
      <li class=\"w-1/5\">
        <div class=\"general-info-box\">
          <small class=\"block\">Dönüşüm Oranı</small>
          <span class=\"block\">37,271</span>
          <div class=\"general-info-box-avarage flex items-center down\">
            <span class=\"block\">
              <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"3\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                <polyline points=\"23 18 13.5 8.5 8.5 13.5 1 6\"></polyline>
                <polyline points=\"17 18 23 18 23 12\"></polyline>
              </svg>
            </span>-27.38%
          </div>
        </div>
      </li>
      <li class=\"w-1/5\">
        <div class=\"general-info-box\">
          <small class=\"block\">Ort. Siparişler</small>
          <span class=\"block\">34,796</span>
          <div class=\"general-info-box-avarage flex items-center\">
            <span class=\"block\">
              <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"3\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                <polyline points=\"23 6 13.5 15.5 8.5 10.5 1 18\"></polyline>
                <polyline points=\"17 6 23 6 23 12\"></polyline>
              </svg>
            </span>+44.25%
          </div>
        </div>
      </li>
      <li class=\"w-1/5\">
        <div class=\"general-info-box\">
          <small class=\"block\">Müşteriler</small>
          <span class=\"block\">18,347</span>
          <div class=\"general-info-box-avarage flex items-center\">
            <span class=\"block\">
              <svg viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"3\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                <polyline points=\"23 6 13.5 15.5 8.5 10.5 1 18\"></polyline>
                <polyline points=\"17 6 23 6 23 12\"></polyline>
              </svg>
            </span>+52.41%
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>", "dashboard.twig", "D:\\xampp\\htdocs\\engintasarim\\admin\\views\\dashboard.twig");
    }
}

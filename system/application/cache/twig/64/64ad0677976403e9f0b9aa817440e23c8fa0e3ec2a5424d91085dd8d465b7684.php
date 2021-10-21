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

/* includes/footer.twig */
class __TwigTemplate_9bd25c4be198b4d57cda0ab30203885e768843b2d8ff50af3d798094001d5f8d extends \Twig\Template
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
        echo "</main>
    ";
        // line 3
        echo "    <script src=\"/assets/js/jquery.min.js\"></script>
    <script src=\"/assets/js/jquery-ui.min.js\"></script>
    <script src=\"/assets/js/datatables.min.js\"></script>
    <script src=\"/assets/js/select2.min.js\"></script>
    <script src=\"/assets/js/sweetalert2.min.js\"></script>
    <script src=\"/assets/js/moment.min.js\"></script>
    <script src=\"/assets/js/daterangepicker.min.js\"></script>
    <script src=\"/assets/js/index.js\"></script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "includes/footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("</main>
    {# <aside class=\"rightbar fixed\"></aside> #}
    <script src=\"/assets/js/jquery.min.js\"></script>
    <script src=\"/assets/js/jquery-ui.min.js\"></script>
    <script src=\"/assets/js/datatables.min.js\"></script>
    <script src=\"/assets/js/select2.min.js\"></script>
    <script src=\"/assets/js/sweetalert2.min.js\"></script>
    <script src=\"/assets/js/moment.min.js\"></script>
    <script src=\"/assets/js/daterangepicker.min.js\"></script>
    <script src=\"/assets/js/index.js\"></script>
  </body>
</html>", "includes/footer.twig", "D:\\xampp\\htdocs\\engintasarim\\admin\\views\\includes\\footer.twig");
    }
}

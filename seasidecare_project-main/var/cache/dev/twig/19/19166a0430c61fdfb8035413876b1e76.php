<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* checkout.html.twig */
class __TwigTemplate_3cfcaa6261bb68094b0dfa860d0ad947 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <title>parapharmacie</title>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta name=\"format-detection\" content=\"telephone=no\">
  <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
  <meta name=\"author\" content=\"\">
  <meta name=\"keywords\" content=\"\">
  <meta name=\"description\" content=\"\">
  <link href=\"https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500&display=swap\" rel=\"stylesheet\">

  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css\">
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css1/style.css"), "html", null, true);
        yield "\">


  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap\" rel=\"stylesheet\">
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\" rel=\"stylesheet\">


  <style>
    html,
    body{
      height: 100%;
      font-family: \"Nunito Sans\" , sans-serif;
      -webkit-font-smoothing: antialiased;
    }
    p{
      font-size: 15px;
      font-family: \"Nunito Sans\" , sans-serif ;
      color: #3d3d3d;
      font-weight: 400;
      line-height: 25px;
      margin: 0 0 15px 0;
    }
    img{
      max-width: 100%;
    }
    a{
      text-decoration: none;
    }
    ul{
      padding-left: 0;
    }

    input:focus{
      outline: none;
    }
    a:hover,
    a:focus{
      text-decoration: none;
      outline: none;
      color: #ffffff;
    }


    .footer{
      background: #00453c;
      padding-top: 70px;
    }
    .footer-about{
      margin-bottom: 30px;
    }
    .footer-about .footer-logo{
      margin-bottom: 30px;
    }
    .footer-about p{
      color: #b7b7b7;
      margin-bottom: 30px;
    }
    .footer-widget{
      margin-bottom: 30px;
    }
    .footer-widget h6{
      color:  #ffffff;
      font-size: 15px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 2px;
      margin-bottom: 20px;
    }
    .footer-widget ul li{
      line-height: 36px;
      list-style: none;
    }
    .footer-widget ul li a{
      color: #b7b7b7;
      font-size: 15px;
    }
    .footer-widget ul li a:hover{
      color: #e53637;
    }
    .footer-widget .footer-newslatter p{
      color: #b7b7b7;
    }
    .footer-widget .footer-newslatter form{
      position: relative;
    }
    .footer-widget .footer-newslatter form input{
      width: 100%;
      font-size: 15px;
      color: #ffffff;
      background: transparent;
      border: none;
      padding: 15px 0;
      border-bottom: 2px solid #ffffff;
    }
    .footer-widget .footer-newslatter form input::placeholder{
      color: #b7b7b7;
    }
    .footer-widget .footer-newslatter form button{
      color: #b7b7b7;
      font-size: 16px;
      position: absolute;
      right: 5px;
      top: 0;
      height: 100%;
      background: transparent;
      border: none;
    }
    .footer-copyright-text{
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      padding: 20px 0;
      margin-top: 40px;
    }
    .footer-copyright-text p{
      color: #b7b7b7;
      margin-bottom: 0;
    }
    .footer-copyright-text p i{
      color: #e53637;
    }
    .footer-copyright-text p a{
      color: #e53637;
    }




  </style>

</head>
<body>

<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
  <defs>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"link\" viewBox=\"0 0 24 24\">
      <path fill=\"currentColor\" d=\"M12 19a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0-4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm-5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm7-12h-1V2a1 1 0 0 0-2 0v1H8V2a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3Zm1 17a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-9h16Zm0-11H4V6a1 1 0 0 1 1-1h1v1a1 1 0 0 0 2 0V5h8v1a1 1 0 0 0 2 0V5h1a1 1 0 0 1 1 1ZM7 15a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0 4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Z\"/>
    </symbol>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"arrow-right\" viewBox=\"0 0 24 24\">
      <path fill=\"currentColor\" d=\"M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76Z\"/>
    </symbol>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"category\" viewBox=\"0 0 24 24\">
      <path fill=\"currentColor\" d=\"M19 5.5h-6.28l-.32-1a3 3 0 0 0-2.84-2H5a3 3 0 0 0-3 3v13a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-10a3 3 0 0 0-3-3Zm1 13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-13a1 1 0 0 1 1-1h4.56a1 1 0 0 1 .95.68l.54 1.64a1 1 0 0 0 .95.68h7a1 1 0 0 1 1 1Z\"/>
    </symbol>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"calendar\" viewBox=\"0 0 24 24\">
      <path fill=\"currentColor\" d=\"M19 4h-2V3a1 1 0 0 0-2 0v1H9V3a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3Zm1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7h16Zm0-9H4V7a1 1 0 0 1 1-1h2v1a1 1 0 0 0 2 0V6h6v1a1 1 0 0 0 2 0V6h2a1 1 0 0 1 1 1Z\"/>
    </symbol>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"heart\" viewBox=\"0 0 24 24\">
      <path fill=\"currentColor\" d=\"M20.16 4.61A6.27 6.27 0 0 0 12 4a6.27 6.27 0 0 0-8.16 9.48l7.45 7.45a1 1 0 0 0 1.42 0l7.45-7.45a6.27 6.27 0 0 0 0-8.87Zm-1.41 7.46L12 18.81l-6.75-6.74a4.28 4.28 0 0 1 3-7.3a4.25 4.25 0 0 1 3 1.25a1 1 0 0 0 1.42 0a4.27 4.27 0 0 1 6 6.05Z\"/>
    </symbol>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"plus\" viewBox=\"0 0 24 24\">
      <path fill=\"currentColor\" d=\"M19 11h-6V5a1 1 0 0 0-2 0v6H5a1 1 0 0 0 0 2h6v6a1 1 0 0 0 2 0v-6h6a1 1 0 0 0 0-2Z\"/>
    </symbol>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"minus\" viewBox=\"0 0 24 24\">
      <path fill=\"currentColor\" d=\"M19 11H5a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2Z\"/>
    </symbol>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"cart\" viewBox=\"0 0 24 24\">
      <path fill=\"currentColor\" d=\"M8.5 19a1.5 1.5 0 1 0 1.5 1.5A1.5 1.5 0 0 0 8.5 19ZM19 16H7a1 1 0 0 1 0-2h8.491a3.013 3.013 0 0 0 2.885-2.176l1.585-5.55A1 1 0 0 0 19 5H6.74a3.007 3.007 0 0 0-2.82-2H3a1 1 0 0 0 0 2h.921a1.005 1.005 0 0 1 .962.725l.155.545v.005l1.641 5.742A3 3 0 0 0 7 18h12a1 1 0 0 0 0-2Zm-1.326-9l-1.22 4.274a1.005 1.005 0 0 1-.963.726H8.754l-.255-.892L7.326 7ZM16.5 19a1.5 1.5 0 1 0 1.5 1.5a1.5 1.5 0 0 0-1.5-1.5Z\"/>
    </symbol>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"check\" viewBox=\"0 0 24 24\">
      <path fill=\"currentColor\" d=\"M18.71 7.21a1 1 0 0 0-1.42 0l-7.45 7.46l-3.13-3.14A1 1 0 1 0 5.29 13l3.84 3.84a1 1 0 0 0 1.42 0l8.16-8.16a1 1 0 0 0 0-1.47Z\"/>
    </symbol>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"trash\" viewBox=\"0 0 24 24\">
      <path fill=\"currentColor\" d=\"M10 18a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1ZM20 6h-4V5a3 3 0 0 0-3-3h-2a3 3 0 0 0-3 3v1H4a1 1 0 0 0 0 2h1v11a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8h1a1 1 0 0 0 0-2ZM10 5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v1h-4Zm7 14a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8h10Zm-3-1a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1Z\"/>
    </symbol>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"star-outline\" viewBox=\"0 0 15 15\">
      <path fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M7.5 9.804L5.337 11l.413-2.533L4 6.674l2.418-.37L7.5 4l1.082 2.304l2.418.37l-1.75 1.793L9.663 11L7.5 9.804Z\"/>
    </symbol>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"star-solid\" viewBox=\"0 0 15 15\">
      <path fill=\"currentColor\" d=\"M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z\"/>
    </symbol>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"search\" viewBox=\"0 0 24 24\">
      <path fill=\"currentColor\" d=\"M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z\"/>
    </symbol>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"user\" viewBox=\"0 0 24 24\">
      <path fill=\"currentColor\" d=\"M15.71 12.71a6 6 0 1 0-7.42 0a10 10 0 0 0-6.22 8.18a1 1 0 0 0 2 .22a8 8 0 0 1 15.9 0a1 1 0 0 0 1 .89h.11a1 1 0 0 0 .88-1.1a10 10 0 0 0-6.25-8.19ZM12 12a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z\"/>
    </symbol>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"close\" viewBox=\"0 0 15 15\">
      <path fill=\"currentColor\" d=\"M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z\"/>
    </symbol>
  </defs>
</svg>

<div class=\"preloader-wrapper\">
  <div class=\"preloader\">
  </div>
</div>

<div class=\"offcanvas offcanvas-end\" data-bs-scroll=\"true\" tabindex=\"-1\" id=\"offcanvasCart\" aria-labelledby=\"MyCart\">
  <div class=\"offcanvas-header justify-content-center border-bottom\">
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
  </div>

  <div class=\"offcanvas-body\">
    <!-- Cart Header with Icon -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
      <div class=\"loader\">
        <div class=\"truckWrapper\">
          <div class=\"truckBody\">
            <svg
                    xmlns=\"http://www.w3.org/2000/svg\"
                    fill=\"none\"
                    viewBox=\"0 0 198 93\"
                    class=\"trucksvg\"
            >
              <path
                      stroke-width=\"3\"
                      stroke=\"#282828\"
                      fill=\"#F83D3D\"
                      d=\"M135 22.5H177.264C178.295 22.5 179.22 23.133 179.594 24.0939L192.33 56.8443C192.442 57.1332 192.5 57.4404 192.5 57.7504V89C192.5 90.3807 191.381 91.5 190 91.5H135C133.619 91.5 132.5 90.3807 132.5 89V25C132.5 23.6193 133.619 22.5 135 22.5Z\"
              ></path>
              <path
                      stroke-width=\"3\"
                      stroke=\"#282828\"
                      fill=\"#7D7C7C\"
                      d=\"M146 33.5H181.741C182.779 33.5 183.709 34.1415 184.078 35.112L190.538 52.112C191.16 53.748 189.951 55.5 188.201 55.5H146C144.619 55.5 143.5 54.3807 143.5 53V36C143.5 34.6193 144.619 33.5 146 33.5Z\"
              ></path>
              <path
                      stroke-width=\"2\"
                      stroke=\"#282828\"
                      fill=\"#282828\"
                      d=\"M150 65C150 65.39 149.763 65.8656 149.127 66.2893C148.499 66.7083 147.573 67 146.5 67C145.427 67 144.501 66.7083 143.873 66.2893C143.237 65.8656 143 65.39 143 65C143 64.61 143.237 64.1344 143.873 63.7107C144.501 63.2917 145.427 63 146.5 63C147.573 63 148.499 63.2917 149.127 63.7107C149.763 64.1344 150 64.61 150 65Z\"
              ></path>
              <rect
                      stroke-width=\"2\"
                      stroke=\"#282828\"
                      fill=\"#FFFCAB\"
                      rx=\"1\"
                      height=\"7\"
                      width=\"5\"
                      y=\"63\"
                      x=\"187\"
              ></rect>
              <rect
                      stroke-width=\"2\"
                      stroke=\"#282828\"
                      fill=\"#282828\"
                      rx=\"1\"
                      height=\"11\"
                      width=\"4\"
                      y=\"81\"
                      x=\"193\"
              ></rect>
              <rect
                      stroke-width=\"3\"
                      stroke=\"#282828\"
                      fill=\"#DFDFDF\"
                      rx=\"2.5\"
                      height=\"90\"
                      width=\"121\"
                      y=\"1.5\"
                      x=\"6.5\"
              ></rect>
              <rect
                      stroke-width=\"2\"
                      stroke=\"#282828\"
                      fill=\"#DFDFDF\"
                      rx=\"2\"
                      height=\"4\"
                      width=\"6\"
                      y=\"84\"
                      x=\"1\"
              ></rect>
            </svg>
          </div>
          <div class=\"truckTires\">
            <svg
                    xmlns=\"http://www.w3.org/2000/svg\"
                    fill=\"none\"
                    viewBox=\"0 0 30 30\"
                    class=\"tiresvg\"
            >
              <circle
                      stroke-width=\"3\"
                      stroke=\"#282828\"
                      fill=\"#282828\"
                      r=\"13.5\"
                      cy=\"15\"
                      cx=\"15\"
              ></circle>
              <circle fill=\"#DFDFDF\" r=\"7\" cy=\"15\" cx=\"15\"></circle>
            </svg>
            <svg
                    xmlns=\"http://www.w3.org/2000/svg\"
                    fill=\"none\"
                    viewBox=\"0 0 30 30\"
                    class=\"tiresvg\"
            >
              <circle
                      stroke-width=\"3\"
                      stroke=\"#282828\"
                      fill=\"#282828\"
                      r=\"13.5\"
                      cy=\"15\"
                      cx=\"15\"
              ></circle>
              <circle fill=\"#DFDFDF\" r=\"7\" cy=\"15\" cx=\"15\"></circle>
            </svg>
          </div>
          <div class=\"road\"></div>

          <svg
                  xml:space=\"preserve\"
                  viewBox=\"0 0 453.459 453.459\"
                  xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                  xmlns=\"http://www.w3.org/2000/svg\"
                  id=\"Capa_1\"
                  version=\"1.1\"
                  fill=\"#000000\"
                  class=\"lampPost\"
          >
      <path
              d=\"M252.882,0c-37.781,0-68.686,29.953-70.245,67.358h-6.917v8.954c-26.109,2.163-45.463,10.011-45.463,19.366h9.993
c-1.65,5.146-2.507,10.54-2.507,16.017c0,28.956,23.558,52.514,52.514,52.514c28.956,0,52.514-23.558,52.514-52.514
c0-5.478-0.856-10.872-2.506-16.017h9.992c0-9.354-19.352-17.204-45.463-19.366v-8.954h-6.149C200.189,38.779,223.924,16,252.882,16
c29.952,0,54.32,24.368,54.32,54.32c0,28.774-11.078,37.009-25.105,47.437c-17.444,12.968-37.216,27.667-37.216,78.884v113.914
h-0.797c-5.068,0-9.174,4.108-9.174,9.177c0,2.844,1.293,5.383,3.321,7.066c-3.432,27.933-26.851,95.744-8.226,115.459v11.202h45.75
v-11.202c18.625-19.715-4.794-87.527-8.227-115.459c2.029-1.683,3.322-4.223,3.322-7.066c0-5.068-4.107-9.177-9.176-9.177h-0.795
V196.641c0-43.174,14.942-54.283,30.762-66.043c14.793-10.997,31.559-23.461,31.559-60.277C323.202,31.545,291.656,0,252.882,0z
M232.77,111.694c0,23.442-19.071,42.514-42.514,42.514c-23.442,0-42.514-19.072-42.514-42.514c0-5.531,1.078-10.957,3.141-16.017
h78.747C231.693,100.736,232.77,106.162,232.77,111.694z\"
      ></path>
    </svg>
        </div>
      </div>

      <span class=\"badge bg-primary rounded-pill\">0</span>

    </div>

    <!-- Optional Custom CSS for Animation -->



    <!-- Cart Items List -->
    <ul class=\"list-group mb-4\">
      <li class=\"list-group-item d-flex justify-content-between align-items-center border-0 rounded-3 shadow-sm bg-light\">
        <div class=\"d-flex align-items-center\">
          <!-- Product Image -->
          <span class=\"fw-bold text-uppercase text-dark\">Total</span>
        </div>

        <div class=\"d-flex align-items-center\">
          <strong class=\"display-6 text-primary ms-2\">0 TND</strong>
        </div>
      </li>
    </ul>


    <!-- Action Buttons -->
    <div class=\"d-grid gap-2 mb-4\">
      <button id=\"checkout-button\" class=\"btn btn-dark\">Voir le Panier</button>
    </div>

    <div class=\"d-grid gap-2\">
      <button class=\"btn btn-outline-danger\" id=\"clear-cart\">Vider le Panier</button>
    </div>

    <!-- Optional Footer for Cart -->
    <div class=\"offcanvas-footer mt-4 text-center\">
      <small>Une fois que vous êtes prêt, procédez au paiement.</small>
    </div>
  </div>
</div>

<!-- Optional Smooth Animations for Open/Close -->


<!-- Optional Custom CSS to refine the look -->


<!-- Bootstrap Icons (Ensure you have Bootstrap Icons CDN included in your project) -->
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css\" rel=\"stylesheet\">

<div class=\"offcanvas offcanvas-end\" data-bs-scroll=\"true\" tabindex=\"-1\" id=\"offcanvasSearch\" aria-labelledby=\"Search\">
  <div class=\"offcanvas-header justify-content-center\">
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
  </div>
  <div class=\"offcanvas-body\">
    <div class=\"order-md-last\">
      <h4 class=\"d-flex justify-content-between align-items-center mb-3\">
        <span class=\"text-primary\">Rechercher</span>
      </h4>
      <form role=\"search\" action=\"/home\" method=\"get\" class=\"d-flex mt-3 gap-0\">
        <input class=\"form-control rounded-start rounded-0 bg-light\" type=\"email\" placeholder=\"What are you looking for?\" aria-label=\"What are you looking for?\">
        <button class=\"btn btn-dark rounded-end rounded-0\" type=\"submit\">Search</button>
      </form>
    </div>
  </div>
</div>

<header>

  <div class=\"header_top d-none d-md-block\">
    <div class=\"container\">
      <div class=\"row align-items-center\">
        <!-- Contact Info -->
        <div class=\"col-md-4\">
          <ul class=\"list-unstyled m-0\">
            <li>
              <a href=\"#\" class=\"text-decoration-none text-white\">
                <i class=\"fas fa-phone me-1\"></i> 216-24-006-483
              </a>
            </li>
          </ul>
        </div>

        <!-- Promotion Message -->
        <div class=\"col-md-4 text-center\">
          <p class=\"promo_message m-0 small\">
            <i class=\"fas fa-truck me-1\"></i> Livraison gratuite dès 99 DT d'achat !
          </p>
        </div>

        <!-- Hours -->
        <div class=\"col-md-4 text-end\">
          <span class=\"time_o small\">🕒 8h00 - 18h00</span>
        </div>
      </div>
    </div>
  </div>


  <div class=\"container-fluid\">
    <div class=\"row py-3 border-bottom\">

      <div class=\"col-sm-4 col-lg-3 text-center text-sm-start\">
        <div class=\"main-logo\">
          <a href=\"";
        // line 447
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">
            <img src=\"";
        // line 448
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"logo\" class=\"img-fluid\" style=\"max-width: 78%; height: auto; object-fit: contain;\">
          </a>
        </div>
      </div>
      <div class=\"col-sm-6 offset-sm-2 offset-md-0 col-lg-5 d-none d-lg-block\">
        <div class=\"search-bar row bg-light p-2 my-1 rounded-3 shadow-sm align-items-center\">
          <div class=\"col-10\">
            <form id=\"search-form\" action=\"index.html\" method=\"post\">
              <input type=\"text\" class=\"form-control border-0 bg-transparent\" placeholder=\"Cherchez un produit\" style=\"font-size: 0.9rem; padding: 0.4rem;\">
            </form>
          </div>
          <div class=\"col-2 text-center\">
            <button type=\"submit\" form=\"search-form\" class=\"btn p-0\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" style=\"fill: #6c757d;\">
                <path d=\"M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z\"/>
              </svg>
            </button>
          </div>
        </div>
      </div>


      <div class=\"col-sm-8 col-lg-3 d-flex justify-content-end gap-5 align-items-center mt-4 mt-sm-0\">
        <ul class=\"d-flex justify-content-end list-unstyled m-0\">
          <!-- Trigger Button for Sign In -->
          <li>
            <div class=\"compte text-end d-none d-lg-block\">
              <button class=\"border-0 bg-transparent d-flex flex-column gap-2 lh-1\" type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#signInModal\">
    <span class=\"fs-6 text-muted\">
      <i class=\"bi bi-person fs-5\"></i> Compte
    </span>
              </button>
            </div>

            ";
        // line 482
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 482, $this->source); })()), "session", [], "any", false, false, false, 482), "get", ["username"], "method", false, false, false, 482)) {
            // line 483
            yield "              <div class=\"d-flex align-items-center mt-2\">
                <span class=\"fw-bold ms-2\">";
            // line 484
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 484, $this->source); })()), "session", [], "any", false, false, false, 484), "get", ["username"], "method", false, false, false, 484), "html", null, true);
            yield "</span>
                <a href=\"";
            // line 485
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"btn btn-danger ms-3\">Log Out</a>
              </div>
            ";
        }
        // line 488
        yield "          </li>

          <!-- Sign In Modal -->
          <div class=\"modal fade ";
        // line 491
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 491, $this->source); })()), "request", [], "any", false, false, false, 491), "get", ["showModal"], "method", false, false, false, 491)) {
            yield "show";
        }
        yield "\" id=\"signInModal\" tabindex=\"-1\" aria-labelledby=\"signInModalLabel\" ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 491, $this->source); })()), "request", [], "any", false, false, false, 491), "get", ["showModal"], "method", false, false, false, 491)) {
            yield "aria-hidden=\"false\" style=\"display: block;\"";
        } else {
            yield "aria-hidden=\"true\" style=\"display: none;\"";
        }
        yield ">
            <div class=\"modal-dialog\">
              <div class=\"modal-content\">
                <div class=\"modal-header\">
                  <h5 class=\"modal-title\" id=\"signInModalLabel\">Sign In</h5>
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                  ";
        // line 499
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 499, $this->source); })()), "request", [], "any", false, false, false, 499), "get", ["showModal"], "method", false, false, false, 499)) {
            // line 500
            yield "                    <div class=\"alert alert-danger\">
                      ";
            // line 501
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 501, $this->source); })()), "request", [], "any", false, false, false, 501), "get", ["showModal"], "method", false, false, false, 501), "html", null, true);
            yield "
                    </div>
                  ";
        }
        // line 504
        yield "                  <form action=\"/verif_log\" method=\"post\">
                    <div class=\"mb-3\">
                      <label for=\"emailOrPhone\" class=\"form-label\">E-mail Address</label>
                      <input type=\"text\" name=\"email\" class=\"form-control\" id=\"emailOrPhone\" placeholder=\"Enter your email\" required>
                    </div>
                    <div class=\"mb-3\">
                      <label for=\"password\" class=\"form-label\">Password</label>
                      <input type=\"password\" name=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Enter your password\" required>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary w-100\">Sign In</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <!-- Create Account Modal -->
          <div class=\"modal fade\" id=\"createAccountModal\" tabindex=\"-1\" aria-labelledby=\"createAccountModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
              <div class=\"modal-content\">
                <div class=\"modal-header\">
                  <h5 class=\"modal-title\" id=\"createAccountModalLabel\">Create Account</h5>
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                  <form>
                    <div class=\"mb-3\">
                      <label for=\"userName\" class=\"form-label fw-bold\">Your Name</label>
                      <input type=\"text\" class=\"form-control\" id=\"userName\" placeholder=\"First and last name\" required>
                    </div>
                    <div class=\"mb-3\">
                      <label for=\"newEmail\" class=\"form-label fw-bold\">E-mail Address</label>
                      <input type=\"email\" class=\"form-control\" id=\"newEmail\" placeholder=\"Enter your email\" required>
                    </div>
                    <div class=\"mb-3\">
                      <label for=\"Password\" class=\"form-label fw-bold\">Password</label>
                      <input type=\"password\" class=\"form-control\" id=\"Password\" placeholder=\"At least 6 characters\" minlength=\"6\" required>
                      <div class=\"form-text\">Passwords must be at least 6 characters long.</div>
                    </div>
                    <div class=\"mb-3\">
                      <label for=\"confirmPassword\" class=\"form-label fw-bold\">Confirm Password</label>
                      <input type=\"password\" class=\"form-control\" id=\"confirmPassword\" placeholder=\"\" required>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary w-100\">Create Account</button>
                  </form>
                  <div class=\"text-center mt-3\">
                    <p>Already have an account?
                      <a href=\"#\" class=\"text-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#signInModal\" data-bs-dismiss=\"modal\">Sign In</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Additional Buttons for Cart and Search (Mobile View) -->
          <li class=\"d-lg-none\">
            <a href=\"#\" class=\"rounded-circle bg-light p-2 mx-1\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasCart\" aria-controls=\"offcanvasCart\">
              <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><use xlink:href=\"#cart\"></use></svg>
            </a>
          </li>
          <li class=\"d-lg-none\">
            <a href=\"#\" class=\"rounded-circle bg-light p-2 mx-1\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasSearch\" aria-controls=\"offcanvasSearch\">
              <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><use xlink:href=\"#search\"></use></svg>
            </a>
          </li>
        </ul>

        <!-- Cart (Desktop View) -->
        <div class=\"cart text-end d-none d-lg-block\">
          <button class=\"border-0 bg-transparent d-flex flex-column gap-2 lh-1\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasCart\" aria-controls=\"offcanvasCart\">
    <span class=\"fs-6 text-muted position-relative\">
      <i class=\"bi bi-cart fs-5 position-relative\">
        <span class=\"cart-badge position-absolute top-0 start-100 translate-middle\">
          0
        </span>
      </i>
     &nbsp; Panier
    </span>
          </button>
        </div>




      </div>



      <!-- c la publicité -->
      <!-- From Uiverse.io by r0n-dev -->
      <div class=\"div\">
        <p id=\"h2\">Chez Seaside Care, nous mettons un point d'honneur à proposer des produits de qualité....<span id=\"lol\"></span></p>
      </div>


      <!-- ******************************************   -->





      <div class=\"container-fluid\">
        <div class=\"row py-3\">
          <div class=\"d-flex justify-content-center justify-content-sm-between align-items-center\">
            <nav class=\"main-menu d-flex navbar navbar-expand-lg\">
              <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasNavbar\" aria-controls=\"offcanvasNavbar\">
                <span class=\"navbar-toggler-icon\"></span>
              </button>

              <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasNavbar\" aria-labelledby=\"offcanvasNavbarLabel\">
                <div class=\"offcanvas-header justify-content-center\">
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
                </div>

                <div class=\"offcanvas-body\">


                  <ul class=\"navbar-nav justify-content-end menu-list list-unstyled d-flex gap-md-3 mb-0\">
                    <li class=\"nav-item dropdown\">
                      <a class=\"nav-link  fs-7\" href=\"#\" id=\"visageDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" >
                        Visage
                      </a>
                      <ul class=\"dropdown-menu shadow-lg bg-white border-0 rounded-3 p-4\" aria-labelledby=\"visageDropdown\" style=\"min-width: 1200px; border-radius: 10px;\">


                        <div class=\"row g-4\">
                          <!-- First Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Soins hydratants et nourrissants</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">Hydratants toutes peaux</li>
                                <li class=\"text-muted\">Hydratants peaux normales à mixtes</li>
                                <li class=\"text-muted\">Hydratants peaux sèches</li>
                                <li class=\"text-muted\">Hydratants peaux intolérantes</li>
                                <li class=\"text-muted\">Hydratants peaux atopiques</li>
                                <li class=\"text-muted\">Soins teintés, bonne mine</li>
                              </ul>
                            </div>
                            <div>
                              <span class=\"fw-semibold text-dark fs-6\">Soins anti-âge et anti-rides</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">Premières rides</li>
                                <li class=\"text-muted\">Rides installées</li>
                                <li class=\"text-muted\">Rides marquées, perte de fermeté</li>
                                <li class=\"text-muted\">Sérum Anti-âge</li>
                                <li class=\"text-muted\">Crème peau sèche</li>
                                <li class=\"text-muted\">Crème peau grasse</li>
                                <li class=\"text-muted\">Soin Liftant</li>
                              </ul>
                            </div>
                          </div>

                          <!-- Second Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Maquillage</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">Rouge à lèvres</li>
                                <li class=\"text-muted\">Vernis à ongles</li>
                                <li class=\"text-muted\">Mascara</li>
                                <li class=\"text-muted\">Crayon et feutre à yeux, eye liner</li>
                                <li class=\"text-muted\">Fard à paupières</li>
                                <li class=\"text-muted\">Fond de teint fluide</li>
                                <li class=\"text-muted\">Poudre teint et compact</li>
                                <li class=\"text-muted\">Correcteurs de teint</li>
                              </ul>
                            </div>
                            <div>
                              <span class=\"fw-semibold text-dark fs-6\">Yeux et lèvres</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">Soins anti-poches et cernes</li>
                                <li class=\"text-muted\">Contour des yeux</li>
                                <li class=\"text-muted\">Démaquillants yeux</li>
                                <li class=\"text-muted\">Sticks baumes lèvres et réparateurs</li>
                                <li class=\"text-muted\">Anti-âge yeux</li>
                              </ul>
                            </div>
                          </div>

                          <!-- Third Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Démaquillants, nettoyants visage</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">Lait, mousse, émulsion</li>
                                <li class=\"text-muted\">Gel, crème, huile</li>
                                <li class=\"text-muted\">Eau, tonique, lotion</li>
                                <li class=\"text-muted\">Cotons démaquillants, lingettes et éponges</li>
                              </ul>
                            </div>
                            <div>
                              <span class=\"fw-semibold text-dark fs-6\">Soins peau grasse, mixte et acné</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">Nettoyage</li>
                                <li class=\"text-muted\">Purifiants</li>
                                <li class=\"text-muted\">Matifiants</li>
                                <li class=\"text-muted\">Soins spécifiques</li>
                                <li class=\"text-muted\">Soins teintés</li>
                                <li class=\"text-muted\">Peaux à imperfections</li>
                              </ul>
                            </div>
                          </div>

                        </div>

                      </ul>

                    </li>


                    <!--*************************************************************************************************-->



                    <li class=\"nav-item dropdown\">
                      <a class=\"nav-link fs-7\" href=\"#\" id=\"visageDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" >
                        Cheveux
                      </a>
                      <ul class=\"dropdown-menu shadow-lg bg-white border-0 rounded-3 p-4\" aria-labelledby=\"visageDropdown\" style=\"min-width: 1200px; border-radius: 10px; left: -85px;\">


                        <div class=\"row g-4\">
                          <!-- First Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Shampoing</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">Shampoing doux et fréquent</li>
                                <li class=\"text-muted\">Shampoing antipelliculaire</li>
                                <li class=\"text-muted\">Shampoing cheveux gras</li>
                                <li class=\"text-muted\">Shampoing cheveux secs</li>
                                <li class=\"text-muted\">Shampoing cheveux colorés</li>
                                <li class=\"text-muted\">Shampoing cheveux fins, cassants</li>
                                <li class=\"text-muted\">Shampoing anti-poux</li>
                                <li class=\"text-muted\">Shampooing sec</li>
                              </ul>
                            </div>
                            <div>
                              <span class=\"fw-semibold text-dark fs-6\">Après-shampooing, soin des cheveux</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">Après-shampoing</li>
                                <li class=\"text-muted\">Masques, baumes</li>
                                <li class=\"text-muted\">Soins défrisant et lissant</li>
                                <li class=\"text-muted\">Soins capillaires</li>
                                <li class=\"text-muted\">Lotion anti-poux</li>
                              </ul>

                            </div>
                          </div>

                          <!-- Second Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Soins anti-chute</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">shampoing anti-chute</li>
                                <li class=\"text-muted\">ampoules et lotions anti-chute</li>

                              </ul>
                            </div>
                            <div>
                              <span class=\"fw-semibold text-dark fs-6\">Huiles et sérums</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">sérums et ampoules capillaires</li>
                                <li class=\"text-muted\">huiles capillaires</li>

                              </ul>
                            </div>
                          </div>

                          <!-- Third Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Kératine</span>
                              <ul class=\"list-unstyled ps-3\">

                              </ul>
                            </div>
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Capillaire solaire</span>
                              <ul class=\"list-unstyled ps-3\">

                              </ul>
                            </div>

                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Produits coiffants</span>

                            </div>

                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Coloration</span>

                            </div>
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Compléments cheveux et ongles</span>

                            </div>
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Proteine Capillaire</span>

                            </div>

                          </div>

                        </div>

                      </ul>

                    </li>

                    <!--*******************************************************************************************************************************************-->
                    <li class=\"nav-item dropdown\">
                      <a class=\"nav-link  fs-7\" href=\"#\" id=\"corpsDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        Corps
                      </a>
                      <ul class=\"dropdown-menu shadow-lg bg-white border-0 rounded-3 p-4\" aria-labelledby=\"corpsDropdown\" id=\"corpsDropdownMenu\" style=\"min-width: 1200px; border-radius: 10px; left: -180px;\">


                        <div class=\"row g-4\">
                          <!-- First Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Hydratation et nutrition corps</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">soins hydratation</li>
                                <li class=\"text-muted\">soins hydratation peaux sèches et atopiques</li>
                                <li class=\"text-muted\">soins hydratation anti-âge</li>
                                <li class=\"text-muted\">soins hydratation teintés, bonne mine</li>
                              </ul>
                            </div>
                            <div>
                              <span class=\"fw-semibold text-dark fs-6\">Epilation, dépilation, décoloration</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">crème et mousse dépilatoire</li>
                                <li class=\"text-muted\">cire et bandes dépilatoires</li>
                                <li class=\"text-muted\">epilateur électrique</li>
                                <li class=\"text-muted\">soins post-épilation</li>
                              </ul>
                            </div>
                          </div>

                          <!-- Second Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Soins spécifiques</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">soins apaisants</li>
                                <li class=\"text-muted\">peaux squameuses</li>
                                <li class=\"text-muted\">crème cicatrisante</li>
                                <li class=\"text-muted\">soins buste et seins</li>
                                <li class=\"text-muted\">anti cellulite</li>
                                <li class=\"text-muted\">éclaircissant corps</li>
                              </ul>
                            </div>
                            <div>
                              <span class=\"fw-semibold text-dark fs-6\">Soins des pieds</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">pieds secs et abîmés</li>
                                <li class=\"text-muted\">pansements pieds et coussinets</li>
                              </ul>
                            </div>
                          </div>

                          <!-- Third Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Soins des mains</span>
                            </div>

                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Gommage et exfoliant corps
          </span>

                            </div>

                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Jambes lourdes

          </span>

                            </div>
                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Articulations
          </span>
                            </div>
                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Parfum
          </span>
                            </div>
                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Massage
          </span>
                            </div>
                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Soins minceur
          </span>
                            </div>
                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Soins repigmentant
          </span>
                            </div>
                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Nettoyant
          </span>
                            </div>
                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Accessoires
          </span>
                            </div>



                          </div>

                        </div>

                      </ul>

                    </li>


                    <!--*************************************************************************************************-->

                    <li class=\"nav-item dropdown\">
                      <a class=\"nav-link  fs-7\" href=\"#\" id=\"corpsDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        Bébé et maman
                      </a>
                      <ul class=\"dropdown-menu shadow-lg bg-white border-0 rounded-3 p-4\" aria-labelledby=\"corpsDropdown\" id=\"corpsDropdownMenu\" style=\"min-width: 1200px; border-radius: 10px; left: -257px;\">


                        <div class=\"row g-4\">
                          <!-- First Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Puériculture</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">biberons</li>
                                <li class=\"text-muted\">tétines</li>
                                <li class=\"text-muted\">sucettes</li>
                                <li class=\"text-muted\">vaisselles de bébé</li>
                                <li class=\"text-muted\">anneaux de dentitions</li>
                                <li class=\"text-muted\">accessoires</li>
                                <li class=\"text-muted\">lunettes</li>
                              </ul>

                            </div>
                            <div>
          <span class=\"fw-semibold text-dark fs-6\">Toilette & soins bébé
          </span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">toilette & bain de bébé</li>
                                <li class=\"text-muted\">Hygiène et soins du bébé</li>
                                <li class=\"text-muted\">hydratation visage et corps</li>
                                <li class=\"text-muted\">croûtes de lait</li>
                                <li class=\"text-muted\">massage et colique</li>
                                <li class=\"text-muted\">protection solaire</li>
                              </ul>

                            </div>
                          </div>


                          <!-- Second Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Change de bébé</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">crème de change</li>
                                <li class=\"text-muted\">lingettes bébé</li>
                                <li class=\"text-muted\">couches</li>
                                <li class=\"text-muted\">soins du siège</li>
                              </ul>

                            </div>
                            <div>
                              <span class=\"fw-semibold text-dark fs-6\">Maman</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">tests de grossesse</li>
                                <li class=\"text-muted\">allaitement</li>
                                <li class=\"text-muted\">compléments alimentaires</li>
                                <li class=\"text-muted\">anti vergetures</li>
                              </ul>
                            </div>

                          </div>

                          <!-- Third Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Juvénile et jouets</span>
                            </div>

                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Trousseaux et cadeaux bébé

          </span>

                            </div>

                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Stérilisateurs


          </span>

                            </div>
                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Chauffe biberon

          </span>
                            </div>
                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Tire lait

          </span>
                            </div>
                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Compléments alimentaires bébé et enfant

          </span>
                            </div>
                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Soins spécifiques bébé et enfant

          </span>
                            </div>
                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Poux & lentes
          </span>
                            </div>
                          </div>

                        </div>

                      </ul>

                    </li>



                    <!--*****************************************************************************************************-->


                    <li class=\"nav-item dropdown\">
                      <a class=\"nav-link fs-7\" href=\"#\" id=\"santeDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        Compléments alimentaires
                      </a>
                      <ul class=\"dropdown-menu shadow-lg bg-white border-0 rounded-3 p-4\" aria-labelledby=\"santeDropdown\" id=\"santeDropdownMenu\" style=\"min-width: 1200px; border-radius: 10px; left: -414px;\">
                        <div class=\"row g-4\">
                          <!-- Row 1 -->
                          <div class=\"col-md-4\">
                            <span class=\"fw-semibold text-dark fs-6\">Santé</span>
                            <ul class=\"list-unstyled ps-3\">
                              <li class=\"text-muted\">mémoire et concentration</li>
                              <li class=\"text-muted\">circulation sanguine</li>
                              <li class=\"text-muted\">digestion et transit</li>
                              <li class=\"text-muted\">confort urinaire</li>
                              <li class=\"text-muted\">cholestérol et cardiovasculaire</li>
                              <li class=\"text-muted\">respiratoire</li>
                              <li class=\"text-muted\">état Grippal</li>
                              <li class=\"text-muted\">sphère ORL</li>
                              <li class=\"text-muted\">immunité</li>
                              <li class=\"text-muted\">anémie</li>
                            </ul>
                          </div>
                          <div class=\"col-md-4\">
                            <span class=\"fw-semibold text-dark fs-6\">Minceur</span>
                            <ul class=\"list-unstyled ps-3\">
                              <li class=\"text-muted\">ventre plat</li>
                              <li class=\"text-muted\">draineurs et détox</li>
                              <li class=\"text-muted\">coupe faim et satiété</li>
                              <li class=\"text-muted\">brûle graisse</li>
                            </ul>
                          </div>
                          <div class=\"col-md-4\">
                            <span class=\"fw-semibold text-dark fs-6\">Confort</span>
                            <ul class=\"list-unstyled ps-3\">
                              <li class=\"text-muted\">stress</li>
                              <li class=\"text-muted\">trouble de sommeil</li>
                              <li class=\"text-muted\">anxiété</li>
                              <li class=\"text-muted\">magnésium</li>
                              <li class=\"text-muted\">articulations</li>
                              <li class=\"text-muted\">fatigue</li>
                              <li class=\"text-muted\">anti-douleur</li>
                            </ul>
                          </div>
                        </div>

                        <div class=\"row g-4\">
                          <!-- Row 2 -->
                          <div class=\"col-md-4\">
                            <span class=\"fw-semibold text-dark fs-6\">Fertilité</span>
                            <ul class=\"list-unstyled ps-3\">
                              <li class=\"text-muted\">fertilité homme</li>
                              <li class=\"text-muted\">fertilité femme</li>
                            </ul>
                            <span class=\"fw-semibold text-dark fs-6 mt-4\">Anti-âge</span>
                            <ul class=\"list-unstyled ps-3\">
                              <li class=\"text-muted\">peau</li>
                              <li class=\"text-muted\">yeux</li>
                              <li class=\"text-muted\">anti Oxydant</li>
                            </ul>
                          </div>
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Ménopause</span>
                            </div>
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Stimulants sexuels</span>
                            </div>
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Prise de poids</span>
                            </div>
                          </div>
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Bébé et enfant</span>
                            </div>
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Beauté</span>
                            </div>
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Anti-cellulite</span>
                            </div>
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Mycoses Vaginales</span>
                            </div>
                          </div>
                        </div>
                      </ul>
                    </li>

                    <!--**************************************************************************************-->

                    <li class=\"nav-item dropdown\">
                      <a class=\"nav-link fs-7\" href=\"#\" id=\"corpsDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        Hygiène
                      </a>
                      <ul class=\"dropdown-menu shadow-lg bg-white border-0 rounded-3 p-4\" aria-labelledby=\"corpsDropdown\" id=\"corpsDropdownMenu\" style=\"min-width: 1200px; border-radius: 10px; left: -658px;\">
                        <div class=\"row g-4\">
                          <!-- First Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Puériculture</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">biberons</li>
                                <li class=\"text-muted\">tétines</li>
                                <li class=\"text-muted\">sucettes</li>
                                <li class=\"text-muted\">vaisselles de bébé</li>
                                <li class=\"text-muted\">anneaux de dentitions</li>
                                <li class=\"text-muted\">accessoires</li>
                                <li class=\"text-muted\">lunettes</li>
                              </ul>
                            </div>
                            <div>
                              <span class=\"fw-semibold text-dark fs-6\">Toilette & soins bébé</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">toilette & bain de bébé</li>
                                <li class=\"text-muted\">Hygiène et soins du bébé</li>
                                <li class=\"text-muted\">hydratation visage et corps</li>
                                <li class=\"text-muted\">croûtes de lait</li>
                                <li class=\"text-muted\">massage et colique</li>
                                <li class=\"text-muted\">protection solaire</li>
                              </ul>
                            </div>
                          </div>

                          <!-- Second Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Change de bébé</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">crème de change</li>
                                <li class=\"text-muted\">lingettes bébé</li>
                                <li class=\"text-muted\">couches</li>
                                <li class=\"text-muted\">soins du siège</li>
                              </ul>
                            </div>
                            <div>
                              <span class=\"fw-semibold text-dark fs-6\">Maman</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">tests de grossesse</li>
                                <li class=\"text-muted\">allaitement</li>
                                <li class=\"text-muted\">compléments alimentaires</li>
                                <li class=\"text-muted\">anti vergetures</li>
                              </ul>
                            </div>
                          </div>

                          <!-- Third Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Douche & bain</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">gel douche et savon liquide</li>
                                <li class=\"text-muted\">savon et pain</li>
                                <li class=\"text-muted\">bain (moussant, huile, sels, soins)</li>
                              </ul>
                            </div>

                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Soins buccodentaires</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">brosses à dents</li>
                                <li class=\"text-muted\">brosses à dents enfants</li>
                                <li class=\"text-muted\">brosses à dents électriques</li>
                                <li class=\"text-muted\">dentifrices</li>
                                <li class=\"text-muted\">bain de bouche et solution gingivale</li>
                                <li class=\"text-muted\">fil dentaire, brossette & accessoires</li>
                                <li class=\"text-muted\">haleine</li>
                              </ul>
                            </div>

                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Hygiène intime</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">toilette intime</li>
                                <li class=\"text-muted\">lingettes intimes</li>
                                <li class=\"text-muted\">serviettes hygiéniques et tampons</li>
                              </ul>
                            </div>

                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Déodorants et anti-transpirants</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">déodorant aisselles</li>
                                <li class=\"text-muted\">déodorant pieds</li>
                              </ul>
                            </div>

                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Nez et oreilles</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">hygiène nasale</li>
                                <li class=\"text-muted\">protection et nettoyage auriculaire</li>
                              </ul>
                            </div>

                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Sexualité</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">préservatif</li>
                                <li class=\"text-muted\">lubrifiant</li>
                              </ul>
                            </div>

                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Hygiène des mains</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">gels hydroalcooliques et antibactériens</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </ul>
                    </li>

                    <li class=\"nav-item dropdown\">
                      <a class=\"nav-link fs-7\" href=\"#\" id=\"corpsDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        Solaires
                      </a>
                      <ul class=\"dropdown-menu shadow-lg bg-white border-0 rounded-3 p-4\" aria-labelledby=\"corpsDropdown\" id=\"corpsDropdownMenu\" style=\"min-width: 1200px; border-radius: 10px; left: -658px;\">
                        <div class=\"row g-4\">
                          <!-- First Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Crèmes solaires</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">protection inférieure à spf 20</li>
                                <li class=\"text-muted\">protection de spf 20 à 49</li>
                                <li class=\"text-muted\">protection supérieure à spf 50+</li>
                              </ul>
                            </div>
                            <div>
                              <span class=\"fw-semibold text-dark fs-6\">Crèmes solaires enfant</span>

                            </div>
                          </div>

                          <!-- Second Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Soins après-soleil</span>
                            </div>
                            <div>
                              <span class=\"fw-semibold text-dark fs-6\">Stick lèvres solaire</span>
                            </div>
                          </div>

                          <!-- Third Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Préparateurs solaires et autobronzant</span>

                            </div>

                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Pack solaire</span>
                            </div>

                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Vichyanthelios</span>
                            </div>
                          </div>
                        </div>
                      </ul>
                    </li>


                    <li class=\"nav-item dropdown\">
                      <a class=\"nav-link fs-7\" href=\"#\" id=\"corpsDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        Bio & naturel
                      </a>
                      <ul class=\"dropdown-menu shadow-lg bg-white border-0 rounded-3 p-4\" aria-labelledby=\"corpsDropdown\" id=\"corpsDropdownMenu\" style=\"min-width: 1200px; border-radius: 10px; left: -920px;\">
                        <div class=\"row g-4\">
                          <!-- First Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Aromathéraphie</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">huiles essentielles</li>
                                <li class=\"text-muted\">huiles végétales</li>
                                <li class=\"text-muted\">sérum</li>
                                <li class=\"text-muted\">diffuseurs, parfums d_ambiance</li>
                                <li class=\"text-muted\">hydrolat</li>
                              </ul>
                            </div>
                            <div>
                              <span class=\"fw-semibold text-dark fs-6\">Thés et tisanes</span>

                            </div>
                          </div>
                        </div>
                      </ul>
                    </li>

                    <li class=\"nav-item dropdown\">
                      <a class=\"nav-link fs-7\" href=\"#\" id=\"santeDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        Matériel médical
                      </a>
                      <ul class=\"dropdown-menu shadow-lg bg-white border-0 rounded-3 p-4\" aria-labelledby=\"santeDropdown\" id=\"santeDropdownMenu\" style=\"min-width: 1200px; border-radius: 10px; left: -1114px;\">
                        <div class=\"row g-4\">
                          <!-- Row 1 -->
                          <div class=\"col-md-4\">
                            <span class=\"fw-semibold text-dark fs-6\">Alitement</span>
                            <ul class=\"list-unstyled ps-3\">
                              <li class=\"text-muted\">couches adulte</li>
                              <li class=\"text-muted\">matelas</li>
                              <li class=\"text-muted\">pansements</li>
                            </ul>
                          </div>
                          <div class=\"col-md-4\">
                            <span class=\"fw-semibold text-dark fs-6\">Appareils de mesure</span>
                            <ul class=\"list-unstyled ps-3\">
                              <li class=\"text-muted\">glucomètres</li>
                              <li class=\"text-muted\">oxymètres de pouls</li>
                              <li class=\"text-muted\">pèses personnes</li>
                              <li class=\"text-muted\">tensiomètres</li>
                              <li class=\"text-muted\">thermomètre</li>
                            </ul>
                          </div>
                          <div class=\"col-md-4\">
                            <span class=\"fw-semibold text-dark fs-6\">Mobilité</span>
                            <ul class=\"list-unstyled ps-3\">
                              <li class=\"text-muted\">cannes</li>
                              <li class=\"text-muted\">fauteuils roulants</li>
                            </ul>
                          </div>
                        </div>

                        <div class=\"row g-4\">
                          <!-- Row 2 -->
                          <div class=\"col-md-4\">
                            <span class=\"fw-semibold text-dark fs-6\">Aérosol</span>

                            <span class=\"fw-semibold text-dark fs-6 mt-4\">aide auditive</span>

                          </div>
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Appareil de massage</span>
                            </div>
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">orthopédie</span>
                            </div>
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">PROTECTION DE L’OREILLE</span>
                            </div>
                          </div>
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Sport</span>
                            </div>
                          </div>
                        </div>
                      </ul>
                    </li>


                    <li class=\"nav-item dropdown\">
                      <a class=\"nav-link fs-7\" href=\"#\" id=\"santeDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        Homme
                      </a>
                      <ul class=\"dropdown-menu shadow-lg bg-white border-0 rounded-3 p-4\" aria-labelledby=\"santeDropdown\" id=\"santeDropdownMenu\" style=\"min-width: 1200px; border-radius: 10px; left: -1214px;\">
                        <div class=\"row g-4\">
                          <!-- Row 1 -->
                          <div class=\"col-md-4\">
                            <span class=\"fw-semibold text-dark fs-6\">Cheveux homme</span>
                            <ul class=\"list-unstyled ps-3\">
                              <li class=\"text-muted\">anti-pelliculaire</li>
                              <li class=\"text-muted\">Fortifiant et anti-chute</li>
                            </ul>
                          </div>
                          <div class=\"col-md-4\">
                            <span class=\"fw-semibold text-dark fs-6\">Soin visage homme</span>
                            <ul class=\"list-unstyled ps-3\">
                              <li class=\"text-muted\">anti-âge et anti-fatigue homme</li>
                              <li class=\"text-muted\">nettoyants visage homme</li>
                              <li class=\"text-muted\">soins hydratants homme</li>
                            </ul>
                          </div>
                          <div class=\"col-md-4\">
                            <span class=\"fw-semibold text-dark fs-6\">Crèmes solaires</span>
                          </div>
                        </div>

                        <div class=\"row g-4\">
                          <!-- Row 2 -->
                          <div class=\"col-md-4\">
                            <span class=\"fw-semibold text-dark fs-6\">Déodorant homme</span>

                            <span class=\"fw-semibold text-dark fs-6 mt-4\">Douche et bain homme</span>

                          </div>
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">rasage _ après-rasage</span>
                            </div>
                          </div>

                        </div>
                      </ul>
                    </li>
                    <li>
                      <div class=\"paste-button\">
                        <button class=\"button\">   <i class=\"fa fa-bars\"></i>
                        </button>
                        <div class=\"dropdown-content\">
                          <a id=\"top\" href=\"#\"> Promos</a>
                          <a id=\"middle\" href=\"#\"> Nouveautés</a>
                          <a id=\"bottom\" href=\"#\">Bons Plans</a>
                          <a id=\"bottom\" href=\"#\">Nos coffrets</a>
                        </div>
                      </div>
                    </li>

                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>


      <!-- Checkout Section -->
      <section class=\"order-summary\" style=\"margin-top: -2em;\">
        <div class=\"checkout-area\">
          <div class=\"container\">
            <div class=\"row justify-content-center\">

              <!-- Order Summary Section -->
              <div class=\"col-12 col-md-6 col-lg-12 ml-lg-auto\">
                <div class=\"order-details-confirmation p-4\">
                  <div class=\"cart-page-heading text-center mb-5\">
                    <h5 class=\"text-dark\">Résumé de votre commande</h5>
                    <p class=\"text-muted\">Vérifiez les détails avant de passer la commande</p>
                  </div>

                  <!-- Order Details -->
                  <ul class=\"order-details-form\">
                    <li class=\"d-flex justify-content-between\">
                      <span class=\"product-name\">Produit</span>
                      <span class=\"product-price\">Prix</span>
                    </li>
                    <!-- Cart items will be dynamically added -->
                    <ul id=\"cart-items-list\">
                      <!-- Example cart item -->
                      <!-- <li class=\"d-flex justify-content-between\">
                          <span>Produit XYZ</span>
                          <span>\$10.00</span>
                      </li> -->
                    </ul>

                    <!-- Order Total Details -->
                    <li class=\"d-flex justify-content-between\">
                      <span>Total</span>
                      <span id=\"subtotal\">\$0.00</span>
                    </li>
                    <li class=\"d-flex justify-content-between\">
                      <span>Livraison</span>
                      <span>Gratuit</span>
                    </li>
                    <li class=\"d-flex justify-content-between font-weight-bold\">
                      <span>Total à payer</span>
                      <span id=\"total\">\$0.00</span>
                    </li>
                  </ul>

                  <!-- Place Order Button -->

                  <div>
                    <button class=\"btn1 btn-gradient btn-lg btn-block mt-4\" id=\"place-order-btn\"><i class=\"animation\"></i>Passer la commande<i class=\"animation\"></i>
                    </button>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>


      <style>
        .btn1 {
          outline: 0;
          display: inline-flex;
          align-items: center;
          justify-content: space-between;
          background: #40B3A2;
          min-width: 200px;
          border: 0;
          border-radius: 4px;
          box-shadow: 0 4px 12px rgba(0, 0, 0, .1);
          box-sizing: border-box;
          padding: 16px 20px;
          color: #fff;
          font-size: 12px;
          font-weight: 600;
          letter-spacing: 1.2px;
          text-transform: uppercase;
          overflow: hidden;
          cursor: pointer;
        }

        .btn1:hover {
          opacity: .95;
        }

        .btn1 .animation {
          border-radius: 100%;
          animation: ripple 0.6s linear infinite;
        }

        @keyframes ripple {
          0% {
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.1), 0 0 0 20px rgba(255, 255, 255, 0.1), 0 0 0 40px rgba(255, 255, 255, 0.1), 0 0 0 60px rgba(255, 255, 255, 0.1);
          }

          100% {
            box-shadow: 0 0 0 20px rgba(255, 255, 255, 0.1), 0 0 0 40px rgba(255, 255, 255, 0.1), 0 0 0 60px rgba(255, 255, 255, 0.1), 0 0 0 80px rgba(255, 255, 255, 0);
          }
        }
        /* Custom styles */
        .order-summary {
          padding: 60px 0;
        }

        .order-details-confirmation .order-details-form li{


          font-size:12px;

        }
        .checkout-area .container {
          max-width: 1600px;
        }

        .order-details-confirmation {
          background-color: #fff;
          border-radius: 12px;
          box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
          padding: 40px; /* Increased padding for more spacious content */
          transition: transform 0.3s ease-in-out;
          width: 100%; /* Make the card take up full width of the container */
          max-width: 900px; /* Max-width set for larger cards */
          margin: 0 auto; /* Center the card */
        }

        .order-details-confirmation:hover {
          transform: translateY(-5px);
        }

        .cart-page-heading h5 {
          font-size: 1.75rem;
          color: #333;
          font-weight: 600;
          margin-bottom: 5px;
        }

        .cart-page-heading p {
          font-size: 1rem;
          color: #7f8c8d;
          font-weight: 400;
        }

        .order-details-form {
          list-style: none;
          padding: 0;
          margin-bottom: 30px;
        }

        .order-details-form li {
          font-size: 1.1rem; /* Slightly larger font size for better readability */
          padding: 15px 0; /* Increased padding for spacing */
          border-bottom: 1px solid #f0f0f0;
        }

        .order-details-form .d-flex {
          justify-content: space-between;
        }

        .product-name {
          color: #555;
          font-weight: 500;
        }

        .product-price {
          color: #2ecc71;
          font-weight: 500;
        }

        .font-weight-bold {
          font-weight: 700;
        }

        /* Custom responsive styles */
        @media (max-width: 768px) {
          .order-details-confirmation {
            padding: 30px; /* Adjust padding for mobile */
            max-width: 100%; /* Make the card full-width on small screens */
          }

          .cart-page-heading h5 {
            font-size: 1.6rem; /* Adjust font size for small screens */
          }

          .order-details-form li {
            font-size: 1rem; /* Adjust font size for small screens */
          }
        }


      </style>

      <!-- Modal for Billing Address -->
      <!-- Modal for Billing Address -->
      <div id=\"billing-modal\" class=\"modal-m\" style=\"display: none;\">
        <div class=\"modal-c\">
          <span class=\"close-btn\">&times;</span>
          <div class=\"checkout_details_area mt-50 clearfix\">
            <div class=\"cart-page-heading mb-30 text-center\">
              <h5 style=\"font-weight: 600; color: #333;\">Adresse de Facturation</h5>
              <p style=\"color: #666;\">Veuillez remplir vos informations de facturation.</p>
            </div>

            <form action=\"#\" method=\"post\">
              <div class=\"modal-b\">
                <div class=\"row\">
                  <!-- First Name -->
                  <div class=\"col-md-6 mb-4\">
                    <label for=\"first_name\" class=\"form-label\">Prénom <span>*</span></label>
                    <input type=\"text\" class=\"form-control form-control-lg\" id=\"first_name\" value=\"\" required placeholder=\"Votre prénom\">
                  </div>
                  <!-- Last Name -->
                  <div class=\"col-md-6 mb-4\">
                    <label for=\"last_name\" class=\"form-label\">Nom de Famille <span>*</span></label>
                    <input type=\"text\" class=\"form-control form-control-lg\" id=\"last_name\" value=\"\" required placeholder=\"Votre nom de famille\">
                  </div>

                  <!-- Governorates Dropdown -->
                  <div class=\"col-12 mb-4\">
                    <label for=\"country\" class=\"form-label\">Gouvernorats <span>*</span></label>
                    <select class=\"form-select form-select-lg\" id=\"country\">
                      <option value=\"ariana\">Ariana</option>
                      <option value=\"beja\">Béja</option>
                      <option value=\"ben_arous\">Ben Arous</option>
                      <option value=\"bizerte\">Bizerte</option>
                      <option value=\"gabes\">Gabès</option>
                      <option value=\"gafsa\">Gafsa</option>
                      <option value=\"jendouba\">Jendouba</option>
                      <option value=\"kairouan\">Kairouan</option>
                      <option value=\"kasserine\">Kasserine</option>
                      <option value=\"kebili\">Kébili</option>
                      <option value=\"manouba\">La Manouba</option>
                      <option value=\"kef\">Le Kef</option>
                      <option value=\"mahdia\">Mahdia</option>
                      <option value=\"medenine\">Médenine</option>
                      <option value=\"monastir\">Monastir</option>
                      <option value=\"nabeul\">Nabeul</option>
                      <option value=\"sfax\">Sfax</option>
                      <option value=\"sidi_bouzid\">Sidi Bouzid</option>
                      <option value=\"siliana\">Siliana</option>
                      <option value=\"sousse\">Sousse</option>
                      <option value=\"tataouine\">Tataouine</option>
                      <option value=\"tozeur\">Tozeur</option>
                      <option value=\"tunis\">Tunis</option>
                      <option value=\"zaghouan\">Zaghouan</option>
                    </select>
                  </div>

                  <!-- Street Address -->
                  <div class=\"col-12 mb-4\">
                    <label for=\"street_address\" class=\"form-label\">Adresse <span>*</span></label>
                    <input type=\"text\" class=\"form-control form-control-lg\" id=\"street_address\" value=\"\" placeholder=\"Votre adresse complète\" required>
                  </div>

                  <!-- Postal Code -->
                  <div class=\"col-12 mb-4\">
                    <label for=\"postcode\" class=\"form-label\">Code Postal <span>*</span></label>
                    <input type=\"text\" class=\"form-control form-control-lg\" id=\"postcode\" value=\"\" placeholder=\"Votre code postal\" required>
                  </div>

                  <!-- City -->
                  <div class=\"col-12 mb-4\">
                    <label for=\"city\" class=\"form-label\">Ville <span>*</span></label>
                    <input type=\"text\" class=\"form-control form-control-lg\" id=\"city\" value=\"\" placeholder=\"Votre ville\" required>
                  </div>

                  <!-- Phone Number -->
                  <div class=\"col-12 mb-4\">
                    <label for=\"phone_number\" class=\"form-label\">Numéro de Téléphone <span>*</span></label>
                    <input type=\"number\" class=\"form-control form-control-lg\" id=\"phone_number\" min=\"0\" value=\"\" placeholder=\"Votre numéro de téléphone\" required>
                  </div>

                  <!-- Email Address -->
                  <div class=\"col-12 mb-4\">
                    <label for=\"email_address\" class=\"form-label\">Adresse Email <span>*</span></label>
                    <input type=\"email\" class=\"form-control form-control-lg\" id=\"email_address\" value=\"\" placeholder=\"Votre adresse email\" required>
                  </div>

                  <!-- Terms and Conditions Checkboxes -->
                  <div class=\"col-12 mb-4\">
                    <div class=\"form-check\">
                      <input class=\"form-check-input\" type=\"checkbox\" id=\"customCheck1\">
                      <label class=\"form-check-label\" for=\"customCheck1\">Accepter les termes et conditions</label>
                    </div>
                    <div class=\"form-check\">
                      <input class=\"form-check-input\" type=\"checkbox\" id=\"customCheck2\">
                      <label class=\"form-check-label\" for=\"customCheck2\">Créer un compte</label>
                    </div>
                    <div class=\"form-check\">
                      <input class=\"form-check-input\" type=\"checkbox\" id=\"customCheck3\">
                      <label class=\"form-check-label\" for=\"customCheck3\">S'abonner à notre newsletter</label>
                    </div>
                  </div>

                  <!-- Submit Button -->
                  <div class=\"col-12 text-center\">
                    <button  class=\"btn btn-primary btn-lg w-100\" id=\"send\">Envoyer</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Styles -->
      <style>
        /* Modal Style */
        .modal-m {
          display: none;
          position: fixed;
          z-index: 9999;
          left: 0;
          top: 0;
          width: 200%;
          height: 100%;
          overflow: auto;
          background-color: rgba(0, 0, 0, 0.7);
        }

        .modal-c {
          background-color: #fff;
          border-radius: 8px;
          margin: 5% auto;
          padding: 30px;
          max-width: 600px;
          box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
          animation: fadeIn 0.5s ease-in-out;
        }

        .modal-b {
          max-height: 400px;
          overflow-y: auto;
        }

        /* Smooth fade-in transition */
        @keyframes fadeIn {
          from { opacity: 0; }
          to { opacity: 1; }
        }

        .close-btn {
          color: #aaa;
          font-size: 28px;
          font-weight: bold;
          position: absolute;
          top: 10px;
          right: 20px;
          cursor: pointer;
        }

        .close-btn:hover,
        .close-btn:focus {
          color: #000;
        }

        /* Input fields and buttons */
        .form-control, .form-select {
          border-radius: 5px;
          font-size: 1rem;
        }

        .form-control-lg {
          font-size: 1rem;
        }

        .btn-primary {
          background-color: #007bff;
          border-color: #007bff;
          padding: 12px 20px;
          font-size: 1.1rem;
          border-radius: 5px;
        }

        .btn-primary:hover {
          background-color: #0056b3;
          border-color: #0056b3;
        }

        .form-check-label {
          font-size: 0.95rem;
        }

        /* Scrollbar customizations */
        .modal-b::-webkit-scrollbar {
          width: 8px;
        }

        .modal-b::-webkit-scrollbar-thumb {
          background-color: #888;
          border-radius: 10px;
        }

        .modal-b::-webkit-scrollbar-thumb:hover {
          background-color: #555;
        }

      </style>

      <!-- Modal Script -->
      <script>
        // Get the modal
        var modal = document.getElementById(\"billing-modal\");

        // Get the button that opens the modal
        var btn = document.getElementById(\"place-order-btn\");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName(\"close-btn\")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
          modal.style.display = \"block\";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = \"none\";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = \"none\";
          }
        }
      </script>

      <footer class=\"footer\">
        <div class=\"container\">
          <div class=\"row\">

            <div class=\"col-lg-3 col-md-6 col-sm-6\">
              <div class=\"footer-about\">
                <div class=\"footer-logo\">
                  <img src=\"";
        // line 1906
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/SEASIDECAREtest.png"), "html", null, true);
        yield "\" alt=\"post\"  style=\"width:250px ; height: auto\" >
                </div>
                <p>Seasidecare.shop.com est la parapharmacie en ligne numéro 1 en Tunisie. Découvrez une large gamme de produits parapharmaceutiques, allant de la beauté à la santé, en passant par le bien-être et la minceur, directement depuis chez vous.</p>
                <a href=\"#\"><img src=\"img/payment.png\" alt=\"\"></a>
              </div>
            </div>

            <div class=\"col-lg-2 offset-lg-1 col-md-3 col-sm-6\">
              <div class=\"footer-widget\">
                <h6>Informations</h6>
                <ul>
                  <li><a href=\"#\">Promotions</a></li>
                  <li><a href=\"#\">Nouveaux produits</a></li>
                  <li><a href=\"#\">Meilleures ventes</a></li>
                  <li><a href=\"#\">Contactez-nous</a></li>
                  <li><a href=\"#\">Conditions d'utilisation</a></li>
                  <li><a href=\"#\">A propos</a></li>
                </ul>
              </div>
            </div>

            <div class=\"col-lg-2 col-md-3 col-sm-6\">
              <div class=\"footer-widget\">
                <h6>Mon Compte</h6>
                <ul>
                  <li><a href=\"#\">Mes commandes</a></li>
                  <li><a href=\"#\">Mes avoirs</a></li>
                  <li><a href=\"#\">Mes adresses</a></li>
                  <li><a href=\"#\">Mes informations personnelles</a></li>
                  <li><a href=\"#\">Mes bons de réduction</a></li>
                </ul>
              </div>
            </div>

            <div class=\"col-lg-3 offset-lg-1 col-md-6 col-sm-6\">
              <div class=\"footer-widget\">
                <h6>Service Client</h6>
                <p style=\"color: white\" >Tél: <p style=\"color: white; font-size: 13px \"  > +216 24 006 483</p></p>
                <p style=\"color: white\" >Email: <a href=\"mailto:contact@seasidecare\" style=\"color: white; font-size: 13px \" >contact@seasidecare</a></p>
                <div class=\"footer-newslatter\">
                  <p>Be the first to know about new arrivals, look books, sales & promos!</p>
                  <form action=\"#\">
                    <input type=\"text\" placeholder=\"Your Email\">
                    <button type=\"submit\"><span><i class=\"fa fa-envelope\" arial-hidden=\"true\"></i></span></button>
                  </form>
                </div>
              </div>
            </div>

          </div>

          <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
              <div class=\"footer-copyright-text\">
                <p>Copyright &copy; 2025 All rights reserved <i class=\"fa fa-heart-o\" arial-hidden=\"true\"></i>
                  by <a href=\"#\">Dasinformatique</a></p>
              </div>
            </div>
          </div>

        </div>
      </footer>


</body>

<script src=\"";
        // line 1972
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-1.11.0.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 1975
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1976
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        yield "\"></script>

<script>
  document.addEventListener(\"DOMContentLoaded\", function () {
    const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
    const cartItemsList = document.getElementById('cart-items-list');
    let subtotal = 0;

    if (cartItemsList === null) {
      console.error(\"Élément avec l'ID 'cart-items-list' introuvable !\");
      return;
    }

    if (cartItems.length === 0) {
      cartItemsList.innerHTML = '<li>Aucun produit dans votre panier.</li>';
      document.getElementById('subtotal').textContent = \"0.00 TND\";
      document.getElementById('total').textContent = \"0.00 TND\";
      return;
    }

    // Affichage des articles du panier
    cartItems.forEach(item => {
      let listItem = document.createElement('li');
      listItem.innerHTML = `<span> <img src=\"\${item.image}\" width=\"50\"></span>
                            <span>\${item.title}</span>
                            <span>\${(item.quantity * item.price).toFixed(2)} TND</span>`;
      cartItemsList.appendChild(listItem);
      subtotal += item.quantity * item.price;
    });

    document.getElementById('subtotal').textContent = `\${subtotal.toFixed(2)} TND`;
    document.getElementById('total').textContent = `\${subtotal.toFixed(2)} TND`;

    // Gestion du bouton \"Commander\"


    // Fonction de calcul de la taxe
    function calculateTax(subtotal) {
      const taxRate = 0.1;
      return subtotal * taxRate;
    }
  });


  document.addEventListener(\"DOMContentLoaded\", function () {

    document.getElementById('send').addEventListener('click', function (e) {
      e.preventDefault();

      // Récupération des données du formulaire
      const firstName = document.getElementById('first_name').value.trim();
      const lastName = document.getElementById('last_name').value.trim();
      const country = document.getElementById('country').value;
      const address = document.getElementById('street_address').value.trim();
      const postcode = document.getElementById('postcode').value.trim();
      const city = document.getElementById('city').value.trim();
      const phoneNumber = document.getElementById('phone_number').value.trim();
      const email = document.getElementById('email_address').value.trim();
      const cartItemsd = JSON.parse(localStorage.getItem('cart')) || [];

      if (!firstName || !lastName || !country || !address || !postcode || !city || !phoneNumber || !email) {
        alert(\"Veuillez remplir tous les champs obligatoires.\");
        return;
      }

      if (!validateEmail(email)) {
        alert(\"Veuillez entrer une adresse e-mail valide.\");
        return;
      }

      if (!/^\\d{8}\$/.test(phoneNumber)) {
        alert(\"Veuillez entrer un numéro de téléphone valide (8 chiffres).\");
        return;
      }

      // Vérifier si cartItems est bien défini
      if (typeof cartItemsd === 'undefined' || !Array.isArray(cartItemsd) || cartItemsd.length === 0) {
        alert(\"Votre panier est vide !\");
        return;
      }

      // Calcul du sous-total
      let subtotal = 0;
      cartItemsd.forEach(item => {
        subtotal += item.quantity * parseFloat(item.price);
      });

      const tax = calculateTax(subtotal);
      const total = subtotal + tax;
      const requestData = {
        \"items\": cartItemsd.map(item => ({
          \"id\": item.id,
          \"image\": item.image,
          \"price\": item.price,
          \"quantity\": item.quantity,
          \"title\": item.title
        })),
        \"subtotal\": subtotal.toFixed(2),
        \"total\": total.toFixed(2),
        \"customer\": {
          \"firstName\": firstName,
          \"lastName\": lastName,
          \"country\": country,
          \"address\": address,
          \"postcode\": postcode,
          \"city\": city,
          \"phoneNumber\": phoneNumber,
          \"email\": email
        }
      };


// Afficher le JSON dans la console
      const jsonRequestData = JSON.stringify(requestData, null, 2);
      console.log(\"Données envoyées au serveur : \", jsonRequestData);
      console.log(\"Données envoyées au hhh : \", requestData);

// Vérifie si le JSON est valide avant de l'envoyer
      try {
        JSON.parse(jsonRequestData); // Tenter de parser le JSON pour vérifier qu'il est valide
      } catch (e) {
        console.error('Erreur de formatage JSON :', e.message);
        return;
      }

      fetch('/place_order', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: jsonRequestData,
      })
              .then(response => response.json())
              .then(data => {
                if (data.redirect) {
                  window.location.href = data.redirect;
                } else {
                  alert(data.message);
                }
              })
              .catch(error => console.error('Erreur :', error));

    });

    // Fonction de validation de l'email
    function validateEmail(email) {
      const re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}\$/;
      return re.test(email);
    }

    // Fonction de calcul de la taxe
    function calculateTax(subtotal) {
      const taxRate = 0.1;
      return subtotal * taxRate;
    }


    // Récupérer les articles du panier depuis localStorage
    let cartItems = JSON.parse(localStorage.getItem('cart')) || [];
    const cartItemsList = document.getElementById('cart-items-list-1');
    const totalPriceElement = document.getElementById('total-price');
    const cartBadge = document.getElementById('cart-badge');
    let totalPrice = 0;
    let totalQuantity = 0;

    // Calculer le prix total et ajouter les articles à la liste
    cartItems.forEach(item => {
      totalQuantity += item.quantity;
      totalPrice += item.quantity * parseFloat(item.price); // Convertir price en nombre

      let listItem = document.createElement('li');
      listItem.classList.add('list-group-item', 'd-flex', 'justify-content-between');
      listItem.innerHTML = `
    <div>
      <strong>\${item.title}</strong>
      <span class=\"d-block text-muted\">Quantité: \${item.quantity}</span>
    </div>
    <span>\${(item.quantity * item.price).toFixed(2)} TND</span>
  `;
      cartItemsList.appendChild(listItem);
    });


    // Afficher le prix total et la quantité totale
    totalPriceElement.textContent = `\${totalPrice.toFixed(2)} TND`;
    cartBadge.textContent = totalQuantity;

    // Gestion du bouton \"Vider le panier\"
    document.getElementById('clear-cart').addEventListener('click', function () {
      localStorage.removeItem('cart');
      cartItemsList.innerHTML = ''; // Vider la liste
      totalPriceElement.textContent = '0 TND'; // Réinitialiser le total
      cartBadge.textContent = '0'; // Réinitialiser le badge
    });


  });


</script>


<script>

  document.addEventListener(\"DOMContentLoaded\", function () {
    document.querySelectorAll(\".dropdown-menu li\").forEach(item => {
      item.addEventListener(\"click\", function () {
        let gamme = this.textContent.trim();
        window.location.href = `/products?gamme=\${encodeURIComponent(gamme)}`;
      });
    });
  });


</script>
<script>
</script>





</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "checkout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  2079 => 1976,  2075 => 1975,  2069 => 1972,  2000 => 1906,  596 => 504,  590 => 501,  587 => 500,  585 => 499,  566 => 491,  561 => 488,  555 => 485,  551 => 484,  548 => 483,  546 => 482,  509 => 448,  505 => 447,  74 => 19,  70 => 18,  66 => 17,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <title>parapharmacie</title>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta name=\"format-detection\" content=\"telephone=no\">
  <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
  <meta name=\"author\" content=\"\">
  <meta name=\"keywords\" content=\"\">
  <meta name=\"description\" content=\"\">
  <link href=\"https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500&display=swap\" rel=\"stylesheet\">

  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css\">
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/vendor.css') }}\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('style.css') }}\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css1/style.css') }}\">


  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap\" rel=\"stylesheet\">
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\" rel=\"stylesheet\">


  <style>
    html,
    body{
      height: 100%;
      font-family: \"Nunito Sans\" , sans-serif;
      -webkit-font-smoothing: antialiased;
    }
    p{
      font-size: 15px;
      font-family: \"Nunito Sans\" , sans-serif ;
      color: #3d3d3d;
      font-weight: 400;
      line-height: 25px;
      margin: 0 0 15px 0;
    }
    img{
      max-width: 100%;
    }
    a{
      text-decoration: none;
    }
    ul{
      padding-left: 0;
    }

    input:focus{
      outline: none;
    }
    a:hover,
    a:focus{
      text-decoration: none;
      outline: none;
      color: #ffffff;
    }


    .footer{
      background: #00453c;
      padding-top: 70px;
    }
    .footer-about{
      margin-bottom: 30px;
    }
    .footer-about .footer-logo{
      margin-bottom: 30px;
    }
    .footer-about p{
      color: #b7b7b7;
      margin-bottom: 30px;
    }
    .footer-widget{
      margin-bottom: 30px;
    }
    .footer-widget h6{
      color:  #ffffff;
      font-size: 15px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 2px;
      margin-bottom: 20px;
    }
    .footer-widget ul li{
      line-height: 36px;
      list-style: none;
    }
    .footer-widget ul li a{
      color: #b7b7b7;
      font-size: 15px;
    }
    .footer-widget ul li a:hover{
      color: #e53637;
    }
    .footer-widget .footer-newslatter p{
      color: #b7b7b7;
    }
    .footer-widget .footer-newslatter form{
      position: relative;
    }
    .footer-widget .footer-newslatter form input{
      width: 100%;
      font-size: 15px;
      color: #ffffff;
      background: transparent;
      border: none;
      padding: 15px 0;
      border-bottom: 2px solid #ffffff;
    }
    .footer-widget .footer-newslatter form input::placeholder{
      color: #b7b7b7;
    }
    .footer-widget .footer-newslatter form button{
      color: #b7b7b7;
      font-size: 16px;
      position: absolute;
      right: 5px;
      top: 0;
      height: 100%;
      background: transparent;
      border: none;
    }
    .footer-copyright-text{
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      padding: 20px 0;
      margin-top: 40px;
    }
    .footer-copyright-text p{
      color: #b7b7b7;
      margin-bottom: 0;
    }
    .footer-copyright-text p i{
      color: #e53637;
    }
    .footer-copyright-text p a{
      color: #e53637;
    }




  </style>

</head>
<body>

<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
  <defs>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"link\" viewBox=\"0 0 24 24\">
      <path fill=\"currentColor\" d=\"M12 19a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0-4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm-5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm7-12h-1V2a1 1 0 0 0-2 0v1H8V2a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3Zm1 17a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-9h16Zm0-11H4V6a1 1 0 0 1 1-1h1v1a1 1 0 0 0 2 0V5h8v1a1 1 0 0 0 2 0V5h1a1 1 0 0 1 1 1ZM7 15a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0 4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Z\"/>
    </symbol>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"arrow-right\" viewBox=\"0 0 24 24\">
      <path fill=\"currentColor\" d=\"M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76Z\"/>
    </symbol>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"category\" viewBox=\"0 0 24 24\">
      <path fill=\"currentColor\" d=\"M19 5.5h-6.28l-.32-1a3 3 0 0 0-2.84-2H5a3 3 0 0 0-3 3v13a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-10a3 3 0 0 0-3-3Zm1 13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-13a1 1 0 0 1 1-1h4.56a1 1 0 0 1 .95.68l.54 1.64a1 1 0 0 0 .95.68h7a1 1 0 0 1 1 1Z\"/>
    </symbol>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"calendar\" viewBox=\"0 0 24 24\">
      <path fill=\"currentColor\" d=\"M19 4h-2V3a1 1 0 0 0-2 0v1H9V3a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3Zm1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7h16Zm0-9H4V7a1 1 0 0 1 1-1h2v1a1 1 0 0 0 2 0V6h6v1a1 1 0 0 0 2 0V6h2a1 1 0 0 1 1 1Z\"/>
    </symbol>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"heart\" viewBox=\"0 0 24 24\">
      <path fill=\"currentColor\" d=\"M20.16 4.61A6.27 6.27 0 0 0 12 4a6.27 6.27 0 0 0-8.16 9.48l7.45 7.45a1 1 0 0 0 1.42 0l7.45-7.45a6.27 6.27 0 0 0 0-8.87Zm-1.41 7.46L12 18.81l-6.75-6.74a4.28 4.28 0 0 1 3-7.3a4.25 4.25 0 0 1 3 1.25a1 1 0 0 0 1.42 0a4.27 4.27 0 0 1 6 6.05Z\"/>
    </symbol>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"plus\" viewBox=\"0 0 24 24\">
      <path fill=\"currentColor\" d=\"M19 11h-6V5a1 1 0 0 0-2 0v6H5a1 1 0 0 0 0 2h6v6a1 1 0 0 0 2 0v-6h6a1 1 0 0 0 0-2Z\"/>
    </symbol>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"minus\" viewBox=\"0 0 24 24\">
      <path fill=\"currentColor\" d=\"M19 11H5a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2Z\"/>
    </symbol>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"cart\" viewBox=\"0 0 24 24\">
      <path fill=\"currentColor\" d=\"M8.5 19a1.5 1.5 0 1 0 1.5 1.5A1.5 1.5 0 0 0 8.5 19ZM19 16H7a1 1 0 0 1 0-2h8.491a3.013 3.013 0 0 0 2.885-2.176l1.585-5.55A1 1 0 0 0 19 5H6.74a3.007 3.007 0 0 0-2.82-2H3a1 1 0 0 0 0 2h.921a1.005 1.005 0 0 1 .962.725l.155.545v.005l1.641 5.742A3 3 0 0 0 7 18h12a1 1 0 0 0 0-2Zm-1.326-9l-1.22 4.274a1.005 1.005 0 0 1-.963.726H8.754l-.255-.892L7.326 7ZM16.5 19a1.5 1.5 0 1 0 1.5 1.5a1.5 1.5 0 0 0-1.5-1.5Z\"/>
    </symbol>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"check\" viewBox=\"0 0 24 24\">
      <path fill=\"currentColor\" d=\"M18.71 7.21a1 1 0 0 0-1.42 0l-7.45 7.46l-3.13-3.14A1 1 0 1 0 5.29 13l3.84 3.84a1 1 0 0 0 1.42 0l8.16-8.16a1 1 0 0 0 0-1.47Z\"/>
    </symbol>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"trash\" viewBox=\"0 0 24 24\">
      <path fill=\"currentColor\" d=\"M10 18a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1ZM20 6h-4V5a3 3 0 0 0-3-3h-2a3 3 0 0 0-3 3v1H4a1 1 0 0 0 0 2h1v11a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8h1a1 1 0 0 0 0-2ZM10 5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v1h-4Zm7 14a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8h10Zm-3-1a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1Z\"/>
    </symbol>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"star-outline\" viewBox=\"0 0 15 15\">
      <path fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M7.5 9.804L5.337 11l.413-2.533L4 6.674l2.418-.37L7.5 4l1.082 2.304l2.418.37l-1.75 1.793L9.663 11L7.5 9.804Z\"/>
    </symbol>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"star-solid\" viewBox=\"0 0 15 15\">
      <path fill=\"currentColor\" d=\"M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z\"/>
    </symbol>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"search\" viewBox=\"0 0 24 24\">
      <path fill=\"currentColor\" d=\"M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z\"/>
    </symbol>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"user\" viewBox=\"0 0 24 24\">
      <path fill=\"currentColor\" d=\"M15.71 12.71a6 6 0 1 0-7.42 0a10 10 0 0 0-6.22 8.18a1 1 0 0 0 2 .22a8 8 0 0 1 15.9 0a1 1 0 0 0 1 .89h.11a1 1 0 0 0 .88-1.1a10 10 0 0 0-6.25-8.19ZM12 12a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z\"/>
    </symbol>
    <symbol xmlns=\"http://www.w3.org/2000/svg\" id=\"close\" viewBox=\"0 0 15 15\">
      <path fill=\"currentColor\" d=\"M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z\"/>
    </symbol>
  </defs>
</svg>

<div class=\"preloader-wrapper\">
  <div class=\"preloader\">
  </div>
</div>

<div class=\"offcanvas offcanvas-end\" data-bs-scroll=\"true\" tabindex=\"-1\" id=\"offcanvasCart\" aria-labelledby=\"MyCart\">
  <div class=\"offcanvas-header justify-content-center border-bottom\">
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
  </div>

  <div class=\"offcanvas-body\">
    <!-- Cart Header with Icon -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
      <div class=\"loader\">
        <div class=\"truckWrapper\">
          <div class=\"truckBody\">
            <svg
                    xmlns=\"http://www.w3.org/2000/svg\"
                    fill=\"none\"
                    viewBox=\"0 0 198 93\"
                    class=\"trucksvg\"
            >
              <path
                      stroke-width=\"3\"
                      stroke=\"#282828\"
                      fill=\"#F83D3D\"
                      d=\"M135 22.5H177.264C178.295 22.5 179.22 23.133 179.594 24.0939L192.33 56.8443C192.442 57.1332 192.5 57.4404 192.5 57.7504V89C192.5 90.3807 191.381 91.5 190 91.5H135C133.619 91.5 132.5 90.3807 132.5 89V25C132.5 23.6193 133.619 22.5 135 22.5Z\"
              ></path>
              <path
                      stroke-width=\"3\"
                      stroke=\"#282828\"
                      fill=\"#7D7C7C\"
                      d=\"M146 33.5H181.741C182.779 33.5 183.709 34.1415 184.078 35.112L190.538 52.112C191.16 53.748 189.951 55.5 188.201 55.5H146C144.619 55.5 143.5 54.3807 143.5 53V36C143.5 34.6193 144.619 33.5 146 33.5Z\"
              ></path>
              <path
                      stroke-width=\"2\"
                      stroke=\"#282828\"
                      fill=\"#282828\"
                      d=\"M150 65C150 65.39 149.763 65.8656 149.127 66.2893C148.499 66.7083 147.573 67 146.5 67C145.427 67 144.501 66.7083 143.873 66.2893C143.237 65.8656 143 65.39 143 65C143 64.61 143.237 64.1344 143.873 63.7107C144.501 63.2917 145.427 63 146.5 63C147.573 63 148.499 63.2917 149.127 63.7107C149.763 64.1344 150 64.61 150 65Z\"
              ></path>
              <rect
                      stroke-width=\"2\"
                      stroke=\"#282828\"
                      fill=\"#FFFCAB\"
                      rx=\"1\"
                      height=\"7\"
                      width=\"5\"
                      y=\"63\"
                      x=\"187\"
              ></rect>
              <rect
                      stroke-width=\"2\"
                      stroke=\"#282828\"
                      fill=\"#282828\"
                      rx=\"1\"
                      height=\"11\"
                      width=\"4\"
                      y=\"81\"
                      x=\"193\"
              ></rect>
              <rect
                      stroke-width=\"3\"
                      stroke=\"#282828\"
                      fill=\"#DFDFDF\"
                      rx=\"2.5\"
                      height=\"90\"
                      width=\"121\"
                      y=\"1.5\"
                      x=\"6.5\"
              ></rect>
              <rect
                      stroke-width=\"2\"
                      stroke=\"#282828\"
                      fill=\"#DFDFDF\"
                      rx=\"2\"
                      height=\"4\"
                      width=\"6\"
                      y=\"84\"
                      x=\"1\"
              ></rect>
            </svg>
          </div>
          <div class=\"truckTires\">
            <svg
                    xmlns=\"http://www.w3.org/2000/svg\"
                    fill=\"none\"
                    viewBox=\"0 0 30 30\"
                    class=\"tiresvg\"
            >
              <circle
                      stroke-width=\"3\"
                      stroke=\"#282828\"
                      fill=\"#282828\"
                      r=\"13.5\"
                      cy=\"15\"
                      cx=\"15\"
              ></circle>
              <circle fill=\"#DFDFDF\" r=\"7\" cy=\"15\" cx=\"15\"></circle>
            </svg>
            <svg
                    xmlns=\"http://www.w3.org/2000/svg\"
                    fill=\"none\"
                    viewBox=\"0 0 30 30\"
                    class=\"tiresvg\"
            >
              <circle
                      stroke-width=\"3\"
                      stroke=\"#282828\"
                      fill=\"#282828\"
                      r=\"13.5\"
                      cy=\"15\"
                      cx=\"15\"
              ></circle>
              <circle fill=\"#DFDFDF\" r=\"7\" cy=\"15\" cx=\"15\"></circle>
            </svg>
          </div>
          <div class=\"road\"></div>

          <svg
                  xml:space=\"preserve\"
                  viewBox=\"0 0 453.459 453.459\"
                  xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                  xmlns=\"http://www.w3.org/2000/svg\"
                  id=\"Capa_1\"
                  version=\"1.1\"
                  fill=\"#000000\"
                  class=\"lampPost\"
          >
      <path
              d=\"M252.882,0c-37.781,0-68.686,29.953-70.245,67.358h-6.917v8.954c-26.109,2.163-45.463,10.011-45.463,19.366h9.993
c-1.65,5.146-2.507,10.54-2.507,16.017c0,28.956,23.558,52.514,52.514,52.514c28.956,0,52.514-23.558,52.514-52.514
c0-5.478-0.856-10.872-2.506-16.017h9.992c0-9.354-19.352-17.204-45.463-19.366v-8.954h-6.149C200.189,38.779,223.924,16,252.882,16
c29.952,0,54.32,24.368,54.32,54.32c0,28.774-11.078,37.009-25.105,47.437c-17.444,12.968-37.216,27.667-37.216,78.884v113.914
h-0.797c-5.068,0-9.174,4.108-9.174,9.177c0,2.844,1.293,5.383,3.321,7.066c-3.432,27.933-26.851,95.744-8.226,115.459v11.202h45.75
v-11.202c18.625-19.715-4.794-87.527-8.227-115.459c2.029-1.683,3.322-4.223,3.322-7.066c0-5.068-4.107-9.177-9.176-9.177h-0.795
V196.641c0-43.174,14.942-54.283,30.762-66.043c14.793-10.997,31.559-23.461,31.559-60.277C323.202,31.545,291.656,0,252.882,0z
M232.77,111.694c0,23.442-19.071,42.514-42.514,42.514c-23.442,0-42.514-19.072-42.514-42.514c0-5.531,1.078-10.957,3.141-16.017
h78.747C231.693,100.736,232.77,106.162,232.77,111.694z\"
      ></path>
    </svg>
        </div>
      </div>

      <span class=\"badge bg-primary rounded-pill\">0</span>

    </div>

    <!-- Optional Custom CSS for Animation -->



    <!-- Cart Items List -->
    <ul class=\"list-group mb-4\">
      <li class=\"list-group-item d-flex justify-content-between align-items-center border-0 rounded-3 shadow-sm bg-light\">
        <div class=\"d-flex align-items-center\">
          <!-- Product Image -->
          <span class=\"fw-bold text-uppercase text-dark\">Total</span>
        </div>

        <div class=\"d-flex align-items-center\">
          <strong class=\"display-6 text-primary ms-2\">0 TND</strong>
        </div>
      </li>
    </ul>


    <!-- Action Buttons -->
    <div class=\"d-grid gap-2 mb-4\">
      <button id=\"checkout-button\" class=\"btn btn-dark\">Voir le Panier</button>
    </div>

    <div class=\"d-grid gap-2\">
      <button class=\"btn btn-outline-danger\" id=\"clear-cart\">Vider le Panier</button>
    </div>

    <!-- Optional Footer for Cart -->
    <div class=\"offcanvas-footer mt-4 text-center\">
      <small>Une fois que vous êtes prêt, procédez au paiement.</small>
    </div>
  </div>
</div>

<!-- Optional Smooth Animations for Open/Close -->


<!-- Optional Custom CSS to refine the look -->


<!-- Bootstrap Icons (Ensure you have Bootstrap Icons CDN included in your project) -->
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css\" rel=\"stylesheet\">

<div class=\"offcanvas offcanvas-end\" data-bs-scroll=\"true\" tabindex=\"-1\" id=\"offcanvasSearch\" aria-labelledby=\"Search\">
  <div class=\"offcanvas-header justify-content-center\">
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
  </div>
  <div class=\"offcanvas-body\">
    <div class=\"order-md-last\">
      <h4 class=\"d-flex justify-content-between align-items-center mb-3\">
        <span class=\"text-primary\">Rechercher</span>
      </h4>
      <form role=\"search\" action=\"/home\" method=\"get\" class=\"d-flex mt-3 gap-0\">
        <input class=\"form-control rounded-start rounded-0 bg-light\" type=\"email\" placeholder=\"What are you looking for?\" aria-label=\"What are you looking for?\">
        <button class=\"btn btn-dark rounded-end rounded-0\" type=\"submit\">Search</button>
      </form>
    </div>
  </div>
</div>

<header>

  <div class=\"header_top d-none d-md-block\">
    <div class=\"container\">
      <div class=\"row align-items-center\">
        <!-- Contact Info -->
        <div class=\"col-md-4\">
          <ul class=\"list-unstyled m-0\">
            <li>
              <a href=\"#\" class=\"text-decoration-none text-white\">
                <i class=\"fas fa-phone me-1\"></i> 216-24-006-483
              </a>
            </li>
          </ul>
        </div>

        <!-- Promotion Message -->
        <div class=\"col-md-4 text-center\">
          <p class=\"promo_message m-0 small\">
            <i class=\"fas fa-truck me-1\"></i> Livraison gratuite dès 99 DT d'achat !
          </p>
        </div>

        <!-- Hours -->
        <div class=\"col-md-4 text-end\">
          <span class=\"time_o small\">🕒 8h00 - 18h00</span>
        </div>
      </div>
    </div>
  </div>


  <div class=\"container-fluid\">
    <div class=\"row py-3 border-bottom\">

      <div class=\"col-sm-4 col-lg-3 text-center text-sm-start\">
        <div class=\"main-logo\">
          <a href=\"{{path('home')}}\">
            <img src=\"{{ asset('images/logo.png') }}\" alt=\"logo\" class=\"img-fluid\" style=\"max-width: 78%; height: auto; object-fit: contain;\">
          </a>
        </div>
      </div>
      <div class=\"col-sm-6 offset-sm-2 offset-md-0 col-lg-5 d-none d-lg-block\">
        <div class=\"search-bar row bg-light p-2 my-1 rounded-3 shadow-sm align-items-center\">
          <div class=\"col-10\">
            <form id=\"search-form\" action=\"index.html\" method=\"post\">
              <input type=\"text\" class=\"form-control border-0 bg-transparent\" placeholder=\"Cherchez un produit\" style=\"font-size: 0.9rem; padding: 0.4rem;\">
            </form>
          </div>
          <div class=\"col-2 text-center\">
            <button type=\"submit\" form=\"search-form\" class=\"btn p-0\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" style=\"fill: #6c757d;\">
                <path d=\"M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z\"/>
              </svg>
            </button>
          </div>
        </div>
      </div>


      <div class=\"col-sm-8 col-lg-3 d-flex justify-content-end gap-5 align-items-center mt-4 mt-sm-0\">
        <ul class=\"d-flex justify-content-end list-unstyled m-0\">
          <!-- Trigger Button for Sign In -->
          <li>
            <div class=\"compte text-end d-none d-lg-block\">
              <button class=\"border-0 bg-transparent d-flex flex-column gap-2 lh-1\" type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#signInModal\">
    <span class=\"fs-6 text-muted\">
      <i class=\"bi bi-person fs-5\"></i> Compte
    </span>
              </button>
            </div>

            {% if app.session.get('username') %}
              <div class=\"d-flex align-items-center mt-2\">
                <span class=\"fw-bold ms-2\">{{ app.session.get('username') }}</span>
                <a href=\"{{ path('app_logout') }}\" class=\"btn btn-danger ms-3\">Log Out</a>
              </div>
            {% endif %}
          </li>

          <!-- Sign In Modal -->
          <div class=\"modal fade {% if app.request.get('showModal') %}show{% endif %}\" id=\"signInModal\" tabindex=\"-1\" aria-labelledby=\"signInModalLabel\" {% if app.request.get('showModal') %}aria-hidden=\"false\" style=\"display: block;\"{% else %}aria-hidden=\"true\" style=\"display: none;\"{% endif %}>
            <div class=\"modal-dialog\">
              <div class=\"modal-content\">
                <div class=\"modal-header\">
                  <h5 class=\"modal-title\" id=\"signInModalLabel\">Sign In</h5>
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                  {% if app.request.get('showModal') %}
                    <div class=\"alert alert-danger\">
                      {{ app.request.get('showModal') }}
                    </div>
                  {% endif %}
                  <form action=\"/verif_log\" method=\"post\">
                    <div class=\"mb-3\">
                      <label for=\"emailOrPhone\" class=\"form-label\">E-mail Address</label>
                      <input type=\"text\" name=\"email\" class=\"form-control\" id=\"emailOrPhone\" placeholder=\"Enter your email\" required>
                    </div>
                    <div class=\"mb-3\">
                      <label for=\"password\" class=\"form-label\">Password</label>
                      <input type=\"password\" name=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Enter your password\" required>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary w-100\">Sign In</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <!-- Create Account Modal -->
          <div class=\"modal fade\" id=\"createAccountModal\" tabindex=\"-1\" aria-labelledby=\"createAccountModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
              <div class=\"modal-content\">
                <div class=\"modal-header\">
                  <h5 class=\"modal-title\" id=\"createAccountModalLabel\">Create Account</h5>
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                  <form>
                    <div class=\"mb-3\">
                      <label for=\"userName\" class=\"form-label fw-bold\">Your Name</label>
                      <input type=\"text\" class=\"form-control\" id=\"userName\" placeholder=\"First and last name\" required>
                    </div>
                    <div class=\"mb-3\">
                      <label for=\"newEmail\" class=\"form-label fw-bold\">E-mail Address</label>
                      <input type=\"email\" class=\"form-control\" id=\"newEmail\" placeholder=\"Enter your email\" required>
                    </div>
                    <div class=\"mb-3\">
                      <label for=\"Password\" class=\"form-label fw-bold\">Password</label>
                      <input type=\"password\" class=\"form-control\" id=\"Password\" placeholder=\"At least 6 characters\" minlength=\"6\" required>
                      <div class=\"form-text\">Passwords must be at least 6 characters long.</div>
                    </div>
                    <div class=\"mb-3\">
                      <label for=\"confirmPassword\" class=\"form-label fw-bold\">Confirm Password</label>
                      <input type=\"password\" class=\"form-control\" id=\"confirmPassword\" placeholder=\"\" required>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary w-100\">Create Account</button>
                  </form>
                  <div class=\"text-center mt-3\">
                    <p>Already have an account?
                      <a href=\"#\" class=\"text-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#signInModal\" data-bs-dismiss=\"modal\">Sign In</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Additional Buttons for Cart and Search (Mobile View) -->
          <li class=\"d-lg-none\">
            <a href=\"#\" class=\"rounded-circle bg-light p-2 mx-1\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasCart\" aria-controls=\"offcanvasCart\">
              <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><use xlink:href=\"#cart\"></use></svg>
            </a>
          </li>
          <li class=\"d-lg-none\">
            <a href=\"#\" class=\"rounded-circle bg-light p-2 mx-1\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasSearch\" aria-controls=\"offcanvasSearch\">
              <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><use xlink:href=\"#search\"></use></svg>
            </a>
          </li>
        </ul>

        <!-- Cart (Desktop View) -->
        <div class=\"cart text-end d-none d-lg-block\">
          <button class=\"border-0 bg-transparent d-flex flex-column gap-2 lh-1\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasCart\" aria-controls=\"offcanvasCart\">
    <span class=\"fs-6 text-muted position-relative\">
      <i class=\"bi bi-cart fs-5 position-relative\">
        <span class=\"cart-badge position-absolute top-0 start-100 translate-middle\">
          0
        </span>
      </i>
     &nbsp; Panier
    </span>
          </button>
        </div>




      </div>



      <!-- c la publicité -->
      <!-- From Uiverse.io by r0n-dev -->
      <div class=\"div\">
        <p id=\"h2\">Chez Seaside Care, nous mettons un point d'honneur à proposer des produits de qualité....<span id=\"lol\"></span></p>
      </div>


      <!-- ******************************************   -->





      <div class=\"container-fluid\">
        <div class=\"row py-3\">
          <div class=\"d-flex justify-content-center justify-content-sm-between align-items-center\">
            <nav class=\"main-menu d-flex navbar navbar-expand-lg\">
              <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasNavbar\" aria-controls=\"offcanvasNavbar\">
                <span class=\"navbar-toggler-icon\"></span>
              </button>

              <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasNavbar\" aria-labelledby=\"offcanvasNavbarLabel\">
                <div class=\"offcanvas-header justify-content-center\">
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
                </div>

                <div class=\"offcanvas-body\">


                  <ul class=\"navbar-nav justify-content-end menu-list list-unstyled d-flex gap-md-3 mb-0\">
                    <li class=\"nav-item dropdown\">
                      <a class=\"nav-link  fs-7\" href=\"#\" id=\"visageDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" >
                        Visage
                      </a>
                      <ul class=\"dropdown-menu shadow-lg bg-white border-0 rounded-3 p-4\" aria-labelledby=\"visageDropdown\" style=\"min-width: 1200px; border-radius: 10px;\">


                        <div class=\"row g-4\">
                          <!-- First Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Soins hydratants et nourrissants</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">Hydratants toutes peaux</li>
                                <li class=\"text-muted\">Hydratants peaux normales à mixtes</li>
                                <li class=\"text-muted\">Hydratants peaux sèches</li>
                                <li class=\"text-muted\">Hydratants peaux intolérantes</li>
                                <li class=\"text-muted\">Hydratants peaux atopiques</li>
                                <li class=\"text-muted\">Soins teintés, bonne mine</li>
                              </ul>
                            </div>
                            <div>
                              <span class=\"fw-semibold text-dark fs-6\">Soins anti-âge et anti-rides</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">Premières rides</li>
                                <li class=\"text-muted\">Rides installées</li>
                                <li class=\"text-muted\">Rides marquées, perte de fermeté</li>
                                <li class=\"text-muted\">Sérum Anti-âge</li>
                                <li class=\"text-muted\">Crème peau sèche</li>
                                <li class=\"text-muted\">Crème peau grasse</li>
                                <li class=\"text-muted\">Soin Liftant</li>
                              </ul>
                            </div>
                          </div>

                          <!-- Second Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Maquillage</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">Rouge à lèvres</li>
                                <li class=\"text-muted\">Vernis à ongles</li>
                                <li class=\"text-muted\">Mascara</li>
                                <li class=\"text-muted\">Crayon et feutre à yeux, eye liner</li>
                                <li class=\"text-muted\">Fard à paupières</li>
                                <li class=\"text-muted\">Fond de teint fluide</li>
                                <li class=\"text-muted\">Poudre teint et compact</li>
                                <li class=\"text-muted\">Correcteurs de teint</li>
                              </ul>
                            </div>
                            <div>
                              <span class=\"fw-semibold text-dark fs-6\">Yeux et lèvres</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">Soins anti-poches et cernes</li>
                                <li class=\"text-muted\">Contour des yeux</li>
                                <li class=\"text-muted\">Démaquillants yeux</li>
                                <li class=\"text-muted\">Sticks baumes lèvres et réparateurs</li>
                                <li class=\"text-muted\">Anti-âge yeux</li>
                              </ul>
                            </div>
                          </div>

                          <!-- Third Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Démaquillants, nettoyants visage</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">Lait, mousse, émulsion</li>
                                <li class=\"text-muted\">Gel, crème, huile</li>
                                <li class=\"text-muted\">Eau, tonique, lotion</li>
                                <li class=\"text-muted\">Cotons démaquillants, lingettes et éponges</li>
                              </ul>
                            </div>
                            <div>
                              <span class=\"fw-semibold text-dark fs-6\">Soins peau grasse, mixte et acné</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">Nettoyage</li>
                                <li class=\"text-muted\">Purifiants</li>
                                <li class=\"text-muted\">Matifiants</li>
                                <li class=\"text-muted\">Soins spécifiques</li>
                                <li class=\"text-muted\">Soins teintés</li>
                                <li class=\"text-muted\">Peaux à imperfections</li>
                              </ul>
                            </div>
                          </div>

                        </div>

                      </ul>

                    </li>


                    <!--*************************************************************************************************-->



                    <li class=\"nav-item dropdown\">
                      <a class=\"nav-link fs-7\" href=\"#\" id=\"visageDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" >
                        Cheveux
                      </a>
                      <ul class=\"dropdown-menu shadow-lg bg-white border-0 rounded-3 p-4\" aria-labelledby=\"visageDropdown\" style=\"min-width: 1200px; border-radius: 10px; left: -85px;\">


                        <div class=\"row g-4\">
                          <!-- First Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Shampoing</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">Shampoing doux et fréquent</li>
                                <li class=\"text-muted\">Shampoing antipelliculaire</li>
                                <li class=\"text-muted\">Shampoing cheveux gras</li>
                                <li class=\"text-muted\">Shampoing cheveux secs</li>
                                <li class=\"text-muted\">Shampoing cheveux colorés</li>
                                <li class=\"text-muted\">Shampoing cheveux fins, cassants</li>
                                <li class=\"text-muted\">Shampoing anti-poux</li>
                                <li class=\"text-muted\">Shampooing sec</li>
                              </ul>
                            </div>
                            <div>
                              <span class=\"fw-semibold text-dark fs-6\">Après-shampooing, soin des cheveux</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">Après-shampoing</li>
                                <li class=\"text-muted\">Masques, baumes</li>
                                <li class=\"text-muted\">Soins défrisant et lissant</li>
                                <li class=\"text-muted\">Soins capillaires</li>
                                <li class=\"text-muted\">Lotion anti-poux</li>
                              </ul>

                            </div>
                          </div>

                          <!-- Second Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Soins anti-chute</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">shampoing anti-chute</li>
                                <li class=\"text-muted\">ampoules et lotions anti-chute</li>

                              </ul>
                            </div>
                            <div>
                              <span class=\"fw-semibold text-dark fs-6\">Huiles et sérums</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">sérums et ampoules capillaires</li>
                                <li class=\"text-muted\">huiles capillaires</li>

                              </ul>
                            </div>
                          </div>

                          <!-- Third Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Kératine</span>
                              <ul class=\"list-unstyled ps-3\">

                              </ul>
                            </div>
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Capillaire solaire</span>
                              <ul class=\"list-unstyled ps-3\">

                              </ul>
                            </div>

                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Produits coiffants</span>

                            </div>

                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Coloration</span>

                            </div>
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Compléments cheveux et ongles</span>

                            </div>
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Proteine Capillaire</span>

                            </div>

                          </div>

                        </div>

                      </ul>

                    </li>

                    <!--*******************************************************************************************************************************************-->
                    <li class=\"nav-item dropdown\">
                      <a class=\"nav-link  fs-7\" href=\"#\" id=\"corpsDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        Corps
                      </a>
                      <ul class=\"dropdown-menu shadow-lg bg-white border-0 rounded-3 p-4\" aria-labelledby=\"corpsDropdown\" id=\"corpsDropdownMenu\" style=\"min-width: 1200px; border-radius: 10px; left: -180px;\">


                        <div class=\"row g-4\">
                          <!-- First Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Hydratation et nutrition corps</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">soins hydratation</li>
                                <li class=\"text-muted\">soins hydratation peaux sèches et atopiques</li>
                                <li class=\"text-muted\">soins hydratation anti-âge</li>
                                <li class=\"text-muted\">soins hydratation teintés, bonne mine</li>
                              </ul>
                            </div>
                            <div>
                              <span class=\"fw-semibold text-dark fs-6\">Epilation, dépilation, décoloration</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">crème et mousse dépilatoire</li>
                                <li class=\"text-muted\">cire et bandes dépilatoires</li>
                                <li class=\"text-muted\">epilateur électrique</li>
                                <li class=\"text-muted\">soins post-épilation</li>
                              </ul>
                            </div>
                          </div>

                          <!-- Second Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Soins spécifiques</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">soins apaisants</li>
                                <li class=\"text-muted\">peaux squameuses</li>
                                <li class=\"text-muted\">crème cicatrisante</li>
                                <li class=\"text-muted\">soins buste et seins</li>
                                <li class=\"text-muted\">anti cellulite</li>
                                <li class=\"text-muted\">éclaircissant corps</li>
                              </ul>
                            </div>
                            <div>
                              <span class=\"fw-semibold text-dark fs-6\">Soins des pieds</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">pieds secs et abîmés</li>
                                <li class=\"text-muted\">pansements pieds et coussinets</li>
                              </ul>
                            </div>
                          </div>

                          <!-- Third Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Soins des mains</span>
                            </div>

                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Gommage et exfoliant corps
          </span>

                            </div>

                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Jambes lourdes

          </span>

                            </div>
                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Articulations
          </span>
                            </div>
                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Parfum
          </span>
                            </div>
                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Massage
          </span>
                            </div>
                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Soins minceur
          </span>
                            </div>
                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Soins repigmentant
          </span>
                            </div>
                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Nettoyant
          </span>
                            </div>
                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Accessoires
          </span>
                            </div>



                          </div>

                        </div>

                      </ul>

                    </li>


                    <!--*************************************************************************************************-->

                    <li class=\"nav-item dropdown\">
                      <a class=\"nav-link  fs-7\" href=\"#\" id=\"corpsDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        Bébé et maman
                      </a>
                      <ul class=\"dropdown-menu shadow-lg bg-white border-0 rounded-3 p-4\" aria-labelledby=\"corpsDropdown\" id=\"corpsDropdownMenu\" style=\"min-width: 1200px; border-radius: 10px; left: -257px;\">


                        <div class=\"row g-4\">
                          <!-- First Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Puériculture</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">biberons</li>
                                <li class=\"text-muted\">tétines</li>
                                <li class=\"text-muted\">sucettes</li>
                                <li class=\"text-muted\">vaisselles de bébé</li>
                                <li class=\"text-muted\">anneaux de dentitions</li>
                                <li class=\"text-muted\">accessoires</li>
                                <li class=\"text-muted\">lunettes</li>
                              </ul>

                            </div>
                            <div>
          <span class=\"fw-semibold text-dark fs-6\">Toilette & soins bébé
          </span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">toilette & bain de bébé</li>
                                <li class=\"text-muted\">Hygiène et soins du bébé</li>
                                <li class=\"text-muted\">hydratation visage et corps</li>
                                <li class=\"text-muted\">croûtes de lait</li>
                                <li class=\"text-muted\">massage et colique</li>
                                <li class=\"text-muted\">protection solaire</li>
                              </ul>

                            </div>
                          </div>


                          <!-- Second Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Change de bébé</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">crème de change</li>
                                <li class=\"text-muted\">lingettes bébé</li>
                                <li class=\"text-muted\">couches</li>
                                <li class=\"text-muted\">soins du siège</li>
                              </ul>

                            </div>
                            <div>
                              <span class=\"fw-semibold text-dark fs-6\">Maman</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">tests de grossesse</li>
                                <li class=\"text-muted\">allaitement</li>
                                <li class=\"text-muted\">compléments alimentaires</li>
                                <li class=\"text-muted\">anti vergetures</li>
                              </ul>
                            </div>

                          </div>

                          <!-- Third Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Juvénile et jouets</span>
                            </div>

                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Trousseaux et cadeaux bébé

          </span>

                            </div>

                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Stérilisateurs


          </span>

                            </div>
                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Chauffe biberon

          </span>
                            </div>
                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Tire lait

          </span>
                            </div>
                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Compléments alimentaires bébé et enfant

          </span>
                            </div>
                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Soins spécifiques bébé et enfant

          </span>
                            </div>
                            <div class=\"mb-4\">
          <span class=\"fw-semibold text-dark fs-6\">Poux & lentes
          </span>
                            </div>
                          </div>

                        </div>

                      </ul>

                    </li>



                    <!--*****************************************************************************************************-->


                    <li class=\"nav-item dropdown\">
                      <a class=\"nav-link fs-7\" href=\"#\" id=\"santeDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        Compléments alimentaires
                      </a>
                      <ul class=\"dropdown-menu shadow-lg bg-white border-0 rounded-3 p-4\" aria-labelledby=\"santeDropdown\" id=\"santeDropdownMenu\" style=\"min-width: 1200px; border-radius: 10px; left: -414px;\">
                        <div class=\"row g-4\">
                          <!-- Row 1 -->
                          <div class=\"col-md-4\">
                            <span class=\"fw-semibold text-dark fs-6\">Santé</span>
                            <ul class=\"list-unstyled ps-3\">
                              <li class=\"text-muted\">mémoire et concentration</li>
                              <li class=\"text-muted\">circulation sanguine</li>
                              <li class=\"text-muted\">digestion et transit</li>
                              <li class=\"text-muted\">confort urinaire</li>
                              <li class=\"text-muted\">cholestérol et cardiovasculaire</li>
                              <li class=\"text-muted\">respiratoire</li>
                              <li class=\"text-muted\">état Grippal</li>
                              <li class=\"text-muted\">sphère ORL</li>
                              <li class=\"text-muted\">immunité</li>
                              <li class=\"text-muted\">anémie</li>
                            </ul>
                          </div>
                          <div class=\"col-md-4\">
                            <span class=\"fw-semibold text-dark fs-6\">Minceur</span>
                            <ul class=\"list-unstyled ps-3\">
                              <li class=\"text-muted\">ventre plat</li>
                              <li class=\"text-muted\">draineurs et détox</li>
                              <li class=\"text-muted\">coupe faim et satiété</li>
                              <li class=\"text-muted\">brûle graisse</li>
                            </ul>
                          </div>
                          <div class=\"col-md-4\">
                            <span class=\"fw-semibold text-dark fs-6\">Confort</span>
                            <ul class=\"list-unstyled ps-3\">
                              <li class=\"text-muted\">stress</li>
                              <li class=\"text-muted\">trouble de sommeil</li>
                              <li class=\"text-muted\">anxiété</li>
                              <li class=\"text-muted\">magnésium</li>
                              <li class=\"text-muted\">articulations</li>
                              <li class=\"text-muted\">fatigue</li>
                              <li class=\"text-muted\">anti-douleur</li>
                            </ul>
                          </div>
                        </div>

                        <div class=\"row g-4\">
                          <!-- Row 2 -->
                          <div class=\"col-md-4\">
                            <span class=\"fw-semibold text-dark fs-6\">Fertilité</span>
                            <ul class=\"list-unstyled ps-3\">
                              <li class=\"text-muted\">fertilité homme</li>
                              <li class=\"text-muted\">fertilité femme</li>
                            </ul>
                            <span class=\"fw-semibold text-dark fs-6 mt-4\">Anti-âge</span>
                            <ul class=\"list-unstyled ps-3\">
                              <li class=\"text-muted\">peau</li>
                              <li class=\"text-muted\">yeux</li>
                              <li class=\"text-muted\">anti Oxydant</li>
                            </ul>
                          </div>
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Ménopause</span>
                            </div>
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Stimulants sexuels</span>
                            </div>
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Prise de poids</span>
                            </div>
                          </div>
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Bébé et enfant</span>
                            </div>
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Beauté</span>
                            </div>
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Anti-cellulite</span>
                            </div>
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Mycoses Vaginales</span>
                            </div>
                          </div>
                        </div>
                      </ul>
                    </li>

                    <!--**************************************************************************************-->

                    <li class=\"nav-item dropdown\">
                      <a class=\"nav-link fs-7\" href=\"#\" id=\"corpsDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        Hygiène
                      </a>
                      <ul class=\"dropdown-menu shadow-lg bg-white border-0 rounded-3 p-4\" aria-labelledby=\"corpsDropdown\" id=\"corpsDropdownMenu\" style=\"min-width: 1200px; border-radius: 10px; left: -658px;\">
                        <div class=\"row g-4\">
                          <!-- First Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Puériculture</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">biberons</li>
                                <li class=\"text-muted\">tétines</li>
                                <li class=\"text-muted\">sucettes</li>
                                <li class=\"text-muted\">vaisselles de bébé</li>
                                <li class=\"text-muted\">anneaux de dentitions</li>
                                <li class=\"text-muted\">accessoires</li>
                                <li class=\"text-muted\">lunettes</li>
                              </ul>
                            </div>
                            <div>
                              <span class=\"fw-semibold text-dark fs-6\">Toilette & soins bébé</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">toilette & bain de bébé</li>
                                <li class=\"text-muted\">Hygiène et soins du bébé</li>
                                <li class=\"text-muted\">hydratation visage et corps</li>
                                <li class=\"text-muted\">croûtes de lait</li>
                                <li class=\"text-muted\">massage et colique</li>
                                <li class=\"text-muted\">protection solaire</li>
                              </ul>
                            </div>
                          </div>

                          <!-- Second Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Change de bébé</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">crème de change</li>
                                <li class=\"text-muted\">lingettes bébé</li>
                                <li class=\"text-muted\">couches</li>
                                <li class=\"text-muted\">soins du siège</li>
                              </ul>
                            </div>
                            <div>
                              <span class=\"fw-semibold text-dark fs-6\">Maman</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">tests de grossesse</li>
                                <li class=\"text-muted\">allaitement</li>
                                <li class=\"text-muted\">compléments alimentaires</li>
                                <li class=\"text-muted\">anti vergetures</li>
                              </ul>
                            </div>
                          </div>

                          <!-- Third Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Douche & bain</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">gel douche et savon liquide</li>
                                <li class=\"text-muted\">savon et pain</li>
                                <li class=\"text-muted\">bain (moussant, huile, sels, soins)</li>
                              </ul>
                            </div>

                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Soins buccodentaires</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">brosses à dents</li>
                                <li class=\"text-muted\">brosses à dents enfants</li>
                                <li class=\"text-muted\">brosses à dents électriques</li>
                                <li class=\"text-muted\">dentifrices</li>
                                <li class=\"text-muted\">bain de bouche et solution gingivale</li>
                                <li class=\"text-muted\">fil dentaire, brossette & accessoires</li>
                                <li class=\"text-muted\">haleine</li>
                              </ul>
                            </div>

                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Hygiène intime</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">toilette intime</li>
                                <li class=\"text-muted\">lingettes intimes</li>
                                <li class=\"text-muted\">serviettes hygiéniques et tampons</li>
                              </ul>
                            </div>

                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Déodorants et anti-transpirants</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">déodorant aisselles</li>
                                <li class=\"text-muted\">déodorant pieds</li>
                              </ul>
                            </div>

                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Nez et oreilles</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">hygiène nasale</li>
                                <li class=\"text-muted\">protection et nettoyage auriculaire</li>
                              </ul>
                            </div>

                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Sexualité</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">préservatif</li>
                                <li class=\"text-muted\">lubrifiant</li>
                              </ul>
                            </div>

                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Hygiène des mains</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">gels hydroalcooliques et antibactériens</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </ul>
                    </li>

                    <li class=\"nav-item dropdown\">
                      <a class=\"nav-link fs-7\" href=\"#\" id=\"corpsDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        Solaires
                      </a>
                      <ul class=\"dropdown-menu shadow-lg bg-white border-0 rounded-3 p-4\" aria-labelledby=\"corpsDropdown\" id=\"corpsDropdownMenu\" style=\"min-width: 1200px; border-radius: 10px; left: -658px;\">
                        <div class=\"row g-4\">
                          <!-- First Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Crèmes solaires</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">protection inférieure à spf 20</li>
                                <li class=\"text-muted\">protection de spf 20 à 49</li>
                                <li class=\"text-muted\">protection supérieure à spf 50+</li>
                              </ul>
                            </div>
                            <div>
                              <span class=\"fw-semibold text-dark fs-6\">Crèmes solaires enfant</span>

                            </div>
                          </div>

                          <!-- Second Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Soins après-soleil</span>
                            </div>
                            <div>
                              <span class=\"fw-semibold text-dark fs-6\">Stick lèvres solaire</span>
                            </div>
                          </div>

                          <!-- Third Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Préparateurs solaires et autobronzant</span>

                            </div>

                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Pack solaire</span>
                            </div>

                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Vichyanthelios</span>
                            </div>
                          </div>
                        </div>
                      </ul>
                    </li>


                    <li class=\"nav-item dropdown\">
                      <a class=\"nav-link fs-7\" href=\"#\" id=\"corpsDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        Bio & naturel
                      </a>
                      <ul class=\"dropdown-menu shadow-lg bg-white border-0 rounded-3 p-4\" aria-labelledby=\"corpsDropdown\" id=\"corpsDropdownMenu\" style=\"min-width: 1200px; border-radius: 10px; left: -920px;\">
                        <div class=\"row g-4\">
                          <!-- First Column -->
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Aromathéraphie</span>
                              <ul class=\"list-unstyled ps-3\">
                                <li class=\"text-muted\">huiles essentielles</li>
                                <li class=\"text-muted\">huiles végétales</li>
                                <li class=\"text-muted\">sérum</li>
                                <li class=\"text-muted\">diffuseurs, parfums d_ambiance</li>
                                <li class=\"text-muted\">hydrolat</li>
                              </ul>
                            </div>
                            <div>
                              <span class=\"fw-semibold text-dark fs-6\">Thés et tisanes</span>

                            </div>
                          </div>
                        </div>
                      </ul>
                    </li>

                    <li class=\"nav-item dropdown\">
                      <a class=\"nav-link fs-7\" href=\"#\" id=\"santeDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        Matériel médical
                      </a>
                      <ul class=\"dropdown-menu shadow-lg bg-white border-0 rounded-3 p-4\" aria-labelledby=\"santeDropdown\" id=\"santeDropdownMenu\" style=\"min-width: 1200px; border-radius: 10px; left: -1114px;\">
                        <div class=\"row g-4\">
                          <!-- Row 1 -->
                          <div class=\"col-md-4\">
                            <span class=\"fw-semibold text-dark fs-6\">Alitement</span>
                            <ul class=\"list-unstyled ps-3\">
                              <li class=\"text-muted\">couches adulte</li>
                              <li class=\"text-muted\">matelas</li>
                              <li class=\"text-muted\">pansements</li>
                            </ul>
                          </div>
                          <div class=\"col-md-4\">
                            <span class=\"fw-semibold text-dark fs-6\">Appareils de mesure</span>
                            <ul class=\"list-unstyled ps-3\">
                              <li class=\"text-muted\">glucomètres</li>
                              <li class=\"text-muted\">oxymètres de pouls</li>
                              <li class=\"text-muted\">pèses personnes</li>
                              <li class=\"text-muted\">tensiomètres</li>
                              <li class=\"text-muted\">thermomètre</li>
                            </ul>
                          </div>
                          <div class=\"col-md-4\">
                            <span class=\"fw-semibold text-dark fs-6\">Mobilité</span>
                            <ul class=\"list-unstyled ps-3\">
                              <li class=\"text-muted\">cannes</li>
                              <li class=\"text-muted\">fauteuils roulants</li>
                            </ul>
                          </div>
                        </div>

                        <div class=\"row g-4\">
                          <!-- Row 2 -->
                          <div class=\"col-md-4\">
                            <span class=\"fw-semibold text-dark fs-6\">Aérosol</span>

                            <span class=\"fw-semibold text-dark fs-6 mt-4\">aide auditive</span>

                          </div>
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Appareil de massage</span>
                            </div>
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">orthopédie</span>
                            </div>
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">PROTECTION DE L’OREILLE</span>
                            </div>
                          </div>
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">Sport</span>
                            </div>
                          </div>
                        </div>
                      </ul>
                    </li>


                    <li class=\"nav-item dropdown\">
                      <a class=\"nav-link fs-7\" href=\"#\" id=\"santeDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        Homme
                      </a>
                      <ul class=\"dropdown-menu shadow-lg bg-white border-0 rounded-3 p-4\" aria-labelledby=\"santeDropdown\" id=\"santeDropdownMenu\" style=\"min-width: 1200px; border-radius: 10px; left: -1214px;\">
                        <div class=\"row g-4\">
                          <!-- Row 1 -->
                          <div class=\"col-md-4\">
                            <span class=\"fw-semibold text-dark fs-6\">Cheveux homme</span>
                            <ul class=\"list-unstyled ps-3\">
                              <li class=\"text-muted\">anti-pelliculaire</li>
                              <li class=\"text-muted\">Fortifiant et anti-chute</li>
                            </ul>
                          </div>
                          <div class=\"col-md-4\">
                            <span class=\"fw-semibold text-dark fs-6\">Soin visage homme</span>
                            <ul class=\"list-unstyled ps-3\">
                              <li class=\"text-muted\">anti-âge et anti-fatigue homme</li>
                              <li class=\"text-muted\">nettoyants visage homme</li>
                              <li class=\"text-muted\">soins hydratants homme</li>
                            </ul>
                          </div>
                          <div class=\"col-md-4\">
                            <span class=\"fw-semibold text-dark fs-6\">Crèmes solaires</span>
                          </div>
                        </div>

                        <div class=\"row g-4\">
                          <!-- Row 2 -->
                          <div class=\"col-md-4\">
                            <span class=\"fw-semibold text-dark fs-6\">Déodorant homme</span>

                            <span class=\"fw-semibold text-dark fs-6 mt-4\">Douche et bain homme</span>

                          </div>
                          <div class=\"col-md-4\">
                            <div class=\"mb-4\">
                              <span class=\"fw-semibold text-dark fs-6\">rasage _ après-rasage</span>
                            </div>
                          </div>

                        </div>
                      </ul>
                    </li>
                    <li>
                      <div class=\"paste-button\">
                        <button class=\"button\">   <i class=\"fa fa-bars\"></i>
                        </button>
                        <div class=\"dropdown-content\">
                          <a id=\"top\" href=\"#\"> Promos</a>
                          <a id=\"middle\" href=\"#\"> Nouveautés</a>
                          <a id=\"bottom\" href=\"#\">Bons Plans</a>
                          <a id=\"bottom\" href=\"#\">Nos coffrets</a>
                        </div>
                      </div>
                    </li>

                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>


      <!-- Checkout Section -->
      <section class=\"order-summary\" style=\"margin-top: -2em;\">
        <div class=\"checkout-area\">
          <div class=\"container\">
            <div class=\"row justify-content-center\">

              <!-- Order Summary Section -->
              <div class=\"col-12 col-md-6 col-lg-12 ml-lg-auto\">
                <div class=\"order-details-confirmation p-4\">
                  <div class=\"cart-page-heading text-center mb-5\">
                    <h5 class=\"text-dark\">Résumé de votre commande</h5>
                    <p class=\"text-muted\">Vérifiez les détails avant de passer la commande</p>
                  </div>

                  <!-- Order Details -->
                  <ul class=\"order-details-form\">
                    <li class=\"d-flex justify-content-between\">
                      <span class=\"product-name\">Produit</span>
                      <span class=\"product-price\">Prix</span>
                    </li>
                    <!-- Cart items will be dynamically added -->
                    <ul id=\"cart-items-list\">
                      <!-- Example cart item -->
                      <!-- <li class=\"d-flex justify-content-between\">
                          <span>Produit XYZ</span>
                          <span>\$10.00</span>
                      </li> -->
                    </ul>

                    <!-- Order Total Details -->
                    <li class=\"d-flex justify-content-between\">
                      <span>Total</span>
                      <span id=\"subtotal\">\$0.00</span>
                    </li>
                    <li class=\"d-flex justify-content-between\">
                      <span>Livraison</span>
                      <span>Gratuit</span>
                    </li>
                    <li class=\"d-flex justify-content-between font-weight-bold\">
                      <span>Total à payer</span>
                      <span id=\"total\">\$0.00</span>
                    </li>
                  </ul>

                  <!-- Place Order Button -->

                  <div>
                    <button class=\"btn1 btn-gradient btn-lg btn-block mt-4\" id=\"place-order-btn\"><i class=\"animation\"></i>Passer la commande<i class=\"animation\"></i>
                    </button>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>


      <style>
        .btn1 {
          outline: 0;
          display: inline-flex;
          align-items: center;
          justify-content: space-between;
          background: #40B3A2;
          min-width: 200px;
          border: 0;
          border-radius: 4px;
          box-shadow: 0 4px 12px rgba(0, 0, 0, .1);
          box-sizing: border-box;
          padding: 16px 20px;
          color: #fff;
          font-size: 12px;
          font-weight: 600;
          letter-spacing: 1.2px;
          text-transform: uppercase;
          overflow: hidden;
          cursor: pointer;
        }

        .btn1:hover {
          opacity: .95;
        }

        .btn1 .animation {
          border-radius: 100%;
          animation: ripple 0.6s linear infinite;
        }

        @keyframes ripple {
          0% {
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.1), 0 0 0 20px rgba(255, 255, 255, 0.1), 0 0 0 40px rgba(255, 255, 255, 0.1), 0 0 0 60px rgba(255, 255, 255, 0.1);
          }

          100% {
            box-shadow: 0 0 0 20px rgba(255, 255, 255, 0.1), 0 0 0 40px rgba(255, 255, 255, 0.1), 0 0 0 60px rgba(255, 255, 255, 0.1), 0 0 0 80px rgba(255, 255, 255, 0);
          }
        }
        /* Custom styles */
        .order-summary {
          padding: 60px 0;
        }

        .order-details-confirmation .order-details-form li{


          font-size:12px;

        }
        .checkout-area .container {
          max-width: 1600px;
        }

        .order-details-confirmation {
          background-color: #fff;
          border-radius: 12px;
          box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
          padding: 40px; /* Increased padding for more spacious content */
          transition: transform 0.3s ease-in-out;
          width: 100%; /* Make the card take up full width of the container */
          max-width: 900px; /* Max-width set for larger cards */
          margin: 0 auto; /* Center the card */
        }

        .order-details-confirmation:hover {
          transform: translateY(-5px);
        }

        .cart-page-heading h5 {
          font-size: 1.75rem;
          color: #333;
          font-weight: 600;
          margin-bottom: 5px;
        }

        .cart-page-heading p {
          font-size: 1rem;
          color: #7f8c8d;
          font-weight: 400;
        }

        .order-details-form {
          list-style: none;
          padding: 0;
          margin-bottom: 30px;
        }

        .order-details-form li {
          font-size: 1.1rem; /* Slightly larger font size for better readability */
          padding: 15px 0; /* Increased padding for spacing */
          border-bottom: 1px solid #f0f0f0;
        }

        .order-details-form .d-flex {
          justify-content: space-between;
        }

        .product-name {
          color: #555;
          font-weight: 500;
        }

        .product-price {
          color: #2ecc71;
          font-weight: 500;
        }

        .font-weight-bold {
          font-weight: 700;
        }

        /* Custom responsive styles */
        @media (max-width: 768px) {
          .order-details-confirmation {
            padding: 30px; /* Adjust padding for mobile */
            max-width: 100%; /* Make the card full-width on small screens */
          }

          .cart-page-heading h5 {
            font-size: 1.6rem; /* Adjust font size for small screens */
          }

          .order-details-form li {
            font-size: 1rem; /* Adjust font size for small screens */
          }
        }


      </style>

      <!-- Modal for Billing Address -->
      <!-- Modal for Billing Address -->
      <div id=\"billing-modal\" class=\"modal-m\" style=\"display: none;\">
        <div class=\"modal-c\">
          <span class=\"close-btn\">&times;</span>
          <div class=\"checkout_details_area mt-50 clearfix\">
            <div class=\"cart-page-heading mb-30 text-center\">
              <h5 style=\"font-weight: 600; color: #333;\">Adresse de Facturation</h5>
              <p style=\"color: #666;\">Veuillez remplir vos informations de facturation.</p>
            </div>

            <form action=\"#\" method=\"post\">
              <div class=\"modal-b\">
                <div class=\"row\">
                  <!-- First Name -->
                  <div class=\"col-md-6 mb-4\">
                    <label for=\"first_name\" class=\"form-label\">Prénom <span>*</span></label>
                    <input type=\"text\" class=\"form-control form-control-lg\" id=\"first_name\" value=\"\" required placeholder=\"Votre prénom\">
                  </div>
                  <!-- Last Name -->
                  <div class=\"col-md-6 mb-4\">
                    <label for=\"last_name\" class=\"form-label\">Nom de Famille <span>*</span></label>
                    <input type=\"text\" class=\"form-control form-control-lg\" id=\"last_name\" value=\"\" required placeholder=\"Votre nom de famille\">
                  </div>

                  <!-- Governorates Dropdown -->
                  <div class=\"col-12 mb-4\">
                    <label for=\"country\" class=\"form-label\">Gouvernorats <span>*</span></label>
                    <select class=\"form-select form-select-lg\" id=\"country\">
                      <option value=\"ariana\">Ariana</option>
                      <option value=\"beja\">Béja</option>
                      <option value=\"ben_arous\">Ben Arous</option>
                      <option value=\"bizerte\">Bizerte</option>
                      <option value=\"gabes\">Gabès</option>
                      <option value=\"gafsa\">Gafsa</option>
                      <option value=\"jendouba\">Jendouba</option>
                      <option value=\"kairouan\">Kairouan</option>
                      <option value=\"kasserine\">Kasserine</option>
                      <option value=\"kebili\">Kébili</option>
                      <option value=\"manouba\">La Manouba</option>
                      <option value=\"kef\">Le Kef</option>
                      <option value=\"mahdia\">Mahdia</option>
                      <option value=\"medenine\">Médenine</option>
                      <option value=\"monastir\">Monastir</option>
                      <option value=\"nabeul\">Nabeul</option>
                      <option value=\"sfax\">Sfax</option>
                      <option value=\"sidi_bouzid\">Sidi Bouzid</option>
                      <option value=\"siliana\">Siliana</option>
                      <option value=\"sousse\">Sousse</option>
                      <option value=\"tataouine\">Tataouine</option>
                      <option value=\"tozeur\">Tozeur</option>
                      <option value=\"tunis\">Tunis</option>
                      <option value=\"zaghouan\">Zaghouan</option>
                    </select>
                  </div>

                  <!-- Street Address -->
                  <div class=\"col-12 mb-4\">
                    <label for=\"street_address\" class=\"form-label\">Adresse <span>*</span></label>
                    <input type=\"text\" class=\"form-control form-control-lg\" id=\"street_address\" value=\"\" placeholder=\"Votre adresse complète\" required>
                  </div>

                  <!-- Postal Code -->
                  <div class=\"col-12 mb-4\">
                    <label for=\"postcode\" class=\"form-label\">Code Postal <span>*</span></label>
                    <input type=\"text\" class=\"form-control form-control-lg\" id=\"postcode\" value=\"\" placeholder=\"Votre code postal\" required>
                  </div>

                  <!-- City -->
                  <div class=\"col-12 mb-4\">
                    <label for=\"city\" class=\"form-label\">Ville <span>*</span></label>
                    <input type=\"text\" class=\"form-control form-control-lg\" id=\"city\" value=\"\" placeholder=\"Votre ville\" required>
                  </div>

                  <!-- Phone Number -->
                  <div class=\"col-12 mb-4\">
                    <label for=\"phone_number\" class=\"form-label\">Numéro de Téléphone <span>*</span></label>
                    <input type=\"number\" class=\"form-control form-control-lg\" id=\"phone_number\" min=\"0\" value=\"\" placeholder=\"Votre numéro de téléphone\" required>
                  </div>

                  <!-- Email Address -->
                  <div class=\"col-12 mb-4\">
                    <label for=\"email_address\" class=\"form-label\">Adresse Email <span>*</span></label>
                    <input type=\"email\" class=\"form-control form-control-lg\" id=\"email_address\" value=\"\" placeholder=\"Votre adresse email\" required>
                  </div>

                  <!-- Terms and Conditions Checkboxes -->
                  <div class=\"col-12 mb-4\">
                    <div class=\"form-check\">
                      <input class=\"form-check-input\" type=\"checkbox\" id=\"customCheck1\">
                      <label class=\"form-check-label\" for=\"customCheck1\">Accepter les termes et conditions</label>
                    </div>
                    <div class=\"form-check\">
                      <input class=\"form-check-input\" type=\"checkbox\" id=\"customCheck2\">
                      <label class=\"form-check-label\" for=\"customCheck2\">Créer un compte</label>
                    </div>
                    <div class=\"form-check\">
                      <input class=\"form-check-input\" type=\"checkbox\" id=\"customCheck3\">
                      <label class=\"form-check-label\" for=\"customCheck3\">S'abonner à notre newsletter</label>
                    </div>
                  </div>

                  <!-- Submit Button -->
                  <div class=\"col-12 text-center\">
                    <button  class=\"btn btn-primary btn-lg w-100\" id=\"send\">Envoyer</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Styles -->
      <style>
        /* Modal Style */
        .modal-m {
          display: none;
          position: fixed;
          z-index: 9999;
          left: 0;
          top: 0;
          width: 200%;
          height: 100%;
          overflow: auto;
          background-color: rgba(0, 0, 0, 0.7);
        }

        .modal-c {
          background-color: #fff;
          border-radius: 8px;
          margin: 5% auto;
          padding: 30px;
          max-width: 600px;
          box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
          animation: fadeIn 0.5s ease-in-out;
        }

        .modal-b {
          max-height: 400px;
          overflow-y: auto;
        }

        /* Smooth fade-in transition */
        @keyframes fadeIn {
          from { opacity: 0; }
          to { opacity: 1; }
        }

        .close-btn {
          color: #aaa;
          font-size: 28px;
          font-weight: bold;
          position: absolute;
          top: 10px;
          right: 20px;
          cursor: pointer;
        }

        .close-btn:hover,
        .close-btn:focus {
          color: #000;
        }

        /* Input fields and buttons */
        .form-control, .form-select {
          border-radius: 5px;
          font-size: 1rem;
        }

        .form-control-lg {
          font-size: 1rem;
        }

        .btn-primary {
          background-color: #007bff;
          border-color: #007bff;
          padding: 12px 20px;
          font-size: 1.1rem;
          border-radius: 5px;
        }

        .btn-primary:hover {
          background-color: #0056b3;
          border-color: #0056b3;
        }

        .form-check-label {
          font-size: 0.95rem;
        }

        /* Scrollbar customizations */
        .modal-b::-webkit-scrollbar {
          width: 8px;
        }

        .modal-b::-webkit-scrollbar-thumb {
          background-color: #888;
          border-radius: 10px;
        }

        .modal-b::-webkit-scrollbar-thumb:hover {
          background-color: #555;
        }

      </style>

      <!-- Modal Script -->
      <script>
        // Get the modal
        var modal = document.getElementById(\"billing-modal\");

        // Get the button that opens the modal
        var btn = document.getElementById(\"place-order-btn\");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName(\"close-btn\")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
          modal.style.display = \"block\";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = \"none\";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = \"none\";
          }
        }
      </script>

      <footer class=\"footer\">
        <div class=\"container\">
          <div class=\"row\">

            <div class=\"col-lg-3 col-md-6 col-sm-6\">
              <div class=\"footer-about\">
                <div class=\"footer-logo\">
                  <img src=\"{{ asset('images/SEASIDECAREtest.png') }}\" alt=\"post\"  style=\"width:250px ; height: auto\" >
                </div>
                <p>Seasidecare.shop.com est la parapharmacie en ligne numéro 1 en Tunisie. Découvrez une large gamme de produits parapharmaceutiques, allant de la beauté à la santé, en passant par le bien-être et la minceur, directement depuis chez vous.</p>
                <a href=\"#\"><img src=\"img/payment.png\" alt=\"\"></a>
              </div>
            </div>

            <div class=\"col-lg-2 offset-lg-1 col-md-3 col-sm-6\">
              <div class=\"footer-widget\">
                <h6>Informations</h6>
                <ul>
                  <li><a href=\"#\">Promotions</a></li>
                  <li><a href=\"#\">Nouveaux produits</a></li>
                  <li><a href=\"#\">Meilleures ventes</a></li>
                  <li><a href=\"#\">Contactez-nous</a></li>
                  <li><a href=\"#\">Conditions d'utilisation</a></li>
                  <li><a href=\"#\">A propos</a></li>
                </ul>
              </div>
            </div>

            <div class=\"col-lg-2 col-md-3 col-sm-6\">
              <div class=\"footer-widget\">
                <h6>Mon Compte</h6>
                <ul>
                  <li><a href=\"#\">Mes commandes</a></li>
                  <li><a href=\"#\">Mes avoirs</a></li>
                  <li><a href=\"#\">Mes adresses</a></li>
                  <li><a href=\"#\">Mes informations personnelles</a></li>
                  <li><a href=\"#\">Mes bons de réduction</a></li>
                </ul>
              </div>
            </div>

            <div class=\"col-lg-3 offset-lg-1 col-md-6 col-sm-6\">
              <div class=\"footer-widget\">
                <h6>Service Client</h6>
                <p style=\"color: white\" >Tél: <p style=\"color: white; font-size: 13px \"  > +216 24 006 483</p></p>
                <p style=\"color: white\" >Email: <a href=\"mailto:contact@seasidecare\" style=\"color: white; font-size: 13px \" >contact@seasidecare</a></p>
                <div class=\"footer-newslatter\">
                  <p>Be the first to know about new arrivals, look books, sales & promos!</p>
                  <form action=\"#\">
                    <input type=\"text\" placeholder=\"Your Email\">
                    <button type=\"submit\"><span><i class=\"fa fa-envelope\" arial-hidden=\"true\"></i></span></button>
                  </form>
                </div>
              </div>
            </div>

          </div>

          <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
              <div class=\"footer-copyright-text\">
                <p>Copyright &copy; 2025 All rights reserved <i class=\"fa fa-heart-o\" arial-hidden=\"true\"></i>
                  by <a href=\"#\">Dasinformatique</a></p>
              </div>
            </div>
          </div>

        </div>
      </footer>


</body>

<script src=\"{{ asset('js/jquery-1.11.0.min.js') }}\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe\" crossorigin=\"anonymous\"></script>
<script src=\"{{ asset('js/plugins.js') }}\"></script>
<script src=\"{{ asset('js/script.js') }}\"></script>

<script>
  document.addEventListener(\"DOMContentLoaded\", function () {
    const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
    const cartItemsList = document.getElementById('cart-items-list');
    let subtotal = 0;

    if (cartItemsList === null) {
      console.error(\"Élément avec l'ID 'cart-items-list' introuvable !\");
      return;
    }

    if (cartItems.length === 0) {
      cartItemsList.innerHTML = '<li>Aucun produit dans votre panier.</li>';
      document.getElementById('subtotal').textContent = \"0.00 TND\";
      document.getElementById('total').textContent = \"0.00 TND\";
      return;
    }

    // Affichage des articles du panier
    cartItems.forEach(item => {
      let listItem = document.createElement('li');
      listItem.innerHTML = `<span> <img src=\"\${item.image}\" width=\"50\"></span>
                            <span>\${item.title}</span>
                            <span>\${(item.quantity * item.price).toFixed(2)} TND</span>`;
      cartItemsList.appendChild(listItem);
      subtotal += item.quantity * item.price;
    });

    document.getElementById('subtotal').textContent = `\${subtotal.toFixed(2)} TND`;
    document.getElementById('total').textContent = `\${subtotal.toFixed(2)} TND`;

    // Gestion du bouton \"Commander\"


    // Fonction de calcul de la taxe
    function calculateTax(subtotal) {
      const taxRate = 0.1;
      return subtotal * taxRate;
    }
  });


  document.addEventListener(\"DOMContentLoaded\", function () {

    document.getElementById('send').addEventListener('click', function (e) {
      e.preventDefault();

      // Récupération des données du formulaire
      const firstName = document.getElementById('first_name').value.trim();
      const lastName = document.getElementById('last_name').value.trim();
      const country = document.getElementById('country').value;
      const address = document.getElementById('street_address').value.trim();
      const postcode = document.getElementById('postcode').value.trim();
      const city = document.getElementById('city').value.trim();
      const phoneNumber = document.getElementById('phone_number').value.trim();
      const email = document.getElementById('email_address').value.trim();
      const cartItemsd = JSON.parse(localStorage.getItem('cart')) || [];

      if (!firstName || !lastName || !country || !address || !postcode || !city || !phoneNumber || !email) {
        alert(\"Veuillez remplir tous les champs obligatoires.\");
        return;
      }

      if (!validateEmail(email)) {
        alert(\"Veuillez entrer une adresse e-mail valide.\");
        return;
      }

      if (!/^\\d{8}\$/.test(phoneNumber)) {
        alert(\"Veuillez entrer un numéro de téléphone valide (8 chiffres).\");
        return;
      }

      // Vérifier si cartItems est bien défini
      if (typeof cartItemsd === 'undefined' || !Array.isArray(cartItemsd) || cartItemsd.length === 0) {
        alert(\"Votre panier est vide !\");
        return;
      }

      // Calcul du sous-total
      let subtotal = 0;
      cartItemsd.forEach(item => {
        subtotal += item.quantity * parseFloat(item.price);
      });

      const tax = calculateTax(subtotal);
      const total = subtotal + tax;
      const requestData = {
        \"items\": cartItemsd.map(item => ({
          \"id\": item.id,
          \"image\": item.image,
          \"price\": item.price,
          \"quantity\": item.quantity,
          \"title\": item.title
        })),
        \"subtotal\": subtotal.toFixed(2),
        \"total\": total.toFixed(2),
        \"customer\": {
          \"firstName\": firstName,
          \"lastName\": lastName,
          \"country\": country,
          \"address\": address,
          \"postcode\": postcode,
          \"city\": city,
          \"phoneNumber\": phoneNumber,
          \"email\": email
        }
      };


// Afficher le JSON dans la console
      const jsonRequestData = JSON.stringify(requestData, null, 2);
      console.log(\"Données envoyées au serveur : \", jsonRequestData);
      console.log(\"Données envoyées au hhh : \", requestData);

// Vérifie si le JSON est valide avant de l'envoyer
      try {
        JSON.parse(jsonRequestData); // Tenter de parser le JSON pour vérifier qu'il est valide
      } catch (e) {
        console.error('Erreur de formatage JSON :', e.message);
        return;
      }

      fetch('/place_order', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: jsonRequestData,
      })
              .then(response => response.json())
              .then(data => {
                if (data.redirect) {
                  window.location.href = data.redirect;
                } else {
                  alert(data.message);
                }
              })
              .catch(error => console.error('Erreur :', error));

    });

    // Fonction de validation de l'email
    function validateEmail(email) {
      const re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}\$/;
      return re.test(email);
    }

    // Fonction de calcul de la taxe
    function calculateTax(subtotal) {
      const taxRate = 0.1;
      return subtotal * taxRate;
    }


    // Récupérer les articles du panier depuis localStorage
    let cartItems = JSON.parse(localStorage.getItem('cart')) || [];
    const cartItemsList = document.getElementById('cart-items-list-1');
    const totalPriceElement = document.getElementById('total-price');
    const cartBadge = document.getElementById('cart-badge');
    let totalPrice = 0;
    let totalQuantity = 0;

    // Calculer le prix total et ajouter les articles à la liste
    cartItems.forEach(item => {
      totalQuantity += item.quantity;
      totalPrice += item.quantity * parseFloat(item.price); // Convertir price en nombre

      let listItem = document.createElement('li');
      listItem.classList.add('list-group-item', 'd-flex', 'justify-content-between');
      listItem.innerHTML = `
    <div>
      <strong>\${item.title}</strong>
      <span class=\"d-block text-muted\">Quantité: \${item.quantity}</span>
    </div>
    <span>\${(item.quantity * item.price).toFixed(2)} TND</span>
  `;
      cartItemsList.appendChild(listItem);
    });


    // Afficher le prix total et la quantité totale
    totalPriceElement.textContent = `\${totalPrice.toFixed(2)} TND`;
    cartBadge.textContent = totalQuantity;

    // Gestion du bouton \"Vider le panier\"
    document.getElementById('clear-cart').addEventListener('click', function () {
      localStorage.removeItem('cart');
      cartItemsList.innerHTML = ''; // Vider la liste
      totalPriceElement.textContent = '0 TND'; // Réinitialiser le total
      cartBadge.textContent = '0'; // Réinitialiser le badge
    });


  });


</script>


<script>

  document.addEventListener(\"DOMContentLoaded\", function () {
    document.querySelectorAll(\".dropdown-menu li\").forEach(item => {
      item.addEventListener(\"click\", function () {
        let gamme = this.textContent.trim();
        window.location.href = `/products?gamme=\${encodeURIComponent(gamme)}`;
      });
    });
  });


</script>
<script>
</script>





</html>", "checkout.html.twig", "C:\\Users\\HP\\OneDrive\\Bureau\\seaside_care\\seasidecare_project-main\\templates\\checkout.html.twig");
    }
}

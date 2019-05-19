<?php

/* registration/ficheMembre.html.twig */
class __TwigTemplate_4fd6298577c366953311601cfeaff6e5cf77cb29a14de8337a96239d8bbe130e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/ficheMembre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/ficheMembre.html.twig"));

        // line 1
        echo "<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Fiche membre</title>
    </head>
    <body>
        <img src=\"Logo_Vika.png\" alt=\"Logo VIKA\" style=\"height: 50px; width: auto;\">
        <center><h1 style=\"border-style: solid;\">Villeneuve Karaté do Association</h1></center>
        <h2>Fiche d'inscription ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reg"]) || array_key_exists("reg", $context) ? $context["reg"] : (function () { throw new Twig_Error_Runtime('Variable "reg" does not exist.', 9, $this->source); })()), "vikaEvent", []), "startdate", []), "Y"), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reg"]) || array_key_exists("reg", $context) ? $context["reg"] : (function () { throw new Twig_Error_Runtime('Variable "reg" does not exist.', 9, $this->source); })()), "vikaEvent", []), "enddate", []), "Y"), "html", null, true);
        echo "</h2>
        <h4>Titre évènement: ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reg"]) || array_key_exists("reg", $context) ? $context["reg"] : (function () { throw new Twig_Error_Runtime('Variable "reg" does not exist.', 10, $this->source); })()), "vikaEvent", []), "title", []), "html", null, true);
        echo "</h4>
        <h4>Numéro dossier: ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reg"]) || array_key_exists("reg", $context) ? $context["reg"] : (function () { throw new Twig_Error_Runtime('Variable "reg" does not exist.', 11, $this->source); })()), "id", []), "html", null, true);
        echo "</h4>
        <hr>
        <center><h3 style=\"border-style: solid;\">Informations générales</h3></center>
        <h4>Nom: ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 14, $this->source); })()), "name", []), "html", null, true);
        echo "</h4>
        <h4>Prénom: ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 15, $this->source); })()), "firstName", []), "html", null, true);
        echo "</h4>
        <h4>Sexe: ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 16, $this->source); })()), "sex", []), "html", null, true);
        echo "</h4>
        <h4>Date de naissance: ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 17, $this->source); })()), "birthdate", []), "m/d/Y"), "html", null, true);
        echo "</h4>
        <h4>Adresse:
            <br>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 20, $this->source); })()), "userconnected", []), "user", []), "adress", []));
        foreach ($context['_seq'] as $context["_key"] => $context["adress"]) {
            // line 21
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "type", []), "html", null, true);
            echo ":
                ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "num", []), "html", null, true);
            echo "
                    ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, $context["adress"], "postBox", [])) {
                // line 24
                echo "                        BP";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "postBox", []), "html", null, true);
                echo "
                    ";
            }
            // line 26
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "streetName", []), "html", null, true);
            echo ",
                ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adress"], "city", []), "zip", [])) {
                // line 28
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adress"], "city", []), "zip", []), "html", null, true);
                echo "
                ";
            }
            // line 30
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adress"], "city", []), "cityName", []), "html", null, true);
            echo ",
                ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adress"], "city", []), "country", []), "countryName", []), "html", null, true);
            echo "
                <br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adress'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </h4>
        <h4>Téléphone (père-mère-tuteur)* (si mineur):
            <br>
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 37, $this->source); })()), "userconnected", []), "user", []), "phones", []));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 38
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phone"], "type", []), "html", null, true);
            echo ":
                ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phone"], "num", []), "html", null, true);
            echo "
                <br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </h4>
        <h4>Grade:  ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 43, $this->source); })()), "belt", []), "html", null, true);
        echo " </h4>
        <h4>Date de l'obtention:  ";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 44, $this->source); })()), "receiptDate", []), "m/d/Y"), "html", null, true);
        echo " </h4>
        <h4>Adresse email:  ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user1"]) || array_key_exists("user1", $context) ? $context["user1"] : (function () { throw new Twig_Error_Runtime('Variable "user1" does not exist.', 45, $this->source); })()), "email", []), "html", null, true);
        echo " </h4>
        <center style=\"border-style: dotted;\">
            <p>Représentant légal pour les mineurs(père-mère-tuteur)* (si mineur)</p>
            <h4>Nom: ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 48, $this->source); })()), "userconnected", []), "user", []), "name", []), "html", null, true);
        echo "</h4>
            <h4>Prénom: ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 49, $this->source); })()), "userconnected", []), "user", []), "firstName", []), "html", null, true);
        echo "</h4>
        </center>
        <h2>Veuillez nous informer en cas de changement d'adresse!</h2>
        <div style=\"border-style: dotted; padding: 10px;\">
        <p><strong>Prise en charge médicale:</strong> Autorise la prise en charge médicale pour tout accident survenant durant les cours ou les manifestations auxquelles participerait le club.</p>
                  ";
        // line 54
        if (("medicalCare" == true)) {
            // line 55
            echo "                      <b>OUI</b>
                  ";
        } else {
            // line 57
            echo "                      <b>NON</b>
                  ";
        }
        // line 59
        echo "                  <p>Personne à prévenir en cas d'accident: </p> <h4>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 59, $this->source); })()), "userconnected", []), "user", []), "name", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 59, $this->source); })()), "userconnected", []), "user", []), "firstName", []), "html", null, true);
        echo "</h4>
                  </div>
                  </br>
                  <p></p>
                  </br>
        <div style=\"border-style: dotted; padding: 10px;\">
        <p><strong>Droit à l'image:</strong> Autorise la publication non commerciale des photos prises lors des différentes
          activités organisées au sein du club ou auxquelles il participe.</p>
                  ";
        // line 67
        if (("ImageDiffusion" == true)) {
            // line 68
            echo "                      <b>OUI</b>
                  ";
        } else {
            // line 70
            echo "                      <b>NON</b>
                  ";
        }
        // line 72
        echo "                  </div>
                  </br>
                  <p></p>
                  </br>
        <div style=\"border-style: dotted; padding: 10px;\">
        <p><strong>Autorisation des parents ou du responsable légal pour les enfants mineurs:</strong> J’autorise l'enfant inscrit ci-dessus à pratiquer le karaté do au sein de Villeneuve Karaté do Association –
VIKA.</p>
        <p><strong>Inscription</strong><br> Je soussigné (prénom et nom)(père-mère-tuteur)* (si mineur) : ...........................................................................................................................................................
        <br>, reconnais avoir pris connaissance des conditions d’inscription, des horaires des cours et du règlement intérieur
        (ce dernier est disponible sur le site de VIKA et au bureau du Dojo)<br><br>
        ";
        // line 82
        if (("ConditionRegistration" == true)) {
            // line 83
            echo "        <b>OUI</b>
        ";
        } else {
            // line 85
            echo "        <b>NON</b>
        ";
        }
        // line 86
        echo "<br><br>
Veuillez écrire manuscritement et intégralement la phrase ci-dessous
« J'atteste avoir pris connaissance du règlement intérieur de l’association VIKA et en accepte les termes ».</p>
        <p>.......................................................................................................................................................................</p>
        <p>Fait à Villeneuve d'Ascq, le : .....................................<br>Signature : .....................................</p>
        </div>
        <p><strong>La présence de l’adhérent, accompagné de ses parents pour un mineur, est indispensable pour finaliser l’inscription (Photo et cotisation).</strong></p>
        <hr>
        <center><h3 style=\"border-style: solid;\">Compétitions</h3></center>
        <p>Je suis intéressé(e) par la compétition : <strong>Kata (oui/non)*</strong></p>
        <p>Je suis intéressé(e) par la compétition : <strong>Combat (oui/non)*</strong></p>
        <p><strong>Demande de passeport ........ euros (oui/non)*</strong></p>
        <hr>
        <center><h3 style=\"border-style: solid;\">A remplir par l'association</h3></center>
        <p><strong>Autorisation parentale pour les mineurs (oui)**</strong></p>
        <p><strong>Certificat médical (à fournir en septembre ........) (oui)**</strong></p>
        <p><strong>Une enveloppe timbrée (oui)**</strong></p>
        <p><strong>Licence Fédération ........ / ........ (Chèque/Espèce)* Montant ........ euros</strong></p>
        <p><strong>Montant de la cotisation annuelle : ........ Somme versée ........ (Chèque/Espèce(un seul règlement))* Montant ........ euros</strong></p>
        <hr>
        <p><strong>(Chèque vacances/ coupon sport)* Montant ........ euros</strong></p>
        <hr>
        <p>* rayer la(es) mention(s) inutile(s)</p>
        <p>** entourer la mention</p>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "registration/ficheMembre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 86,  225 => 85,  221 => 83,  219 => 82,  207 => 72,  203 => 70,  199 => 68,  197 => 67,  183 => 59,  179 => 57,  175 => 55,  173 => 54,  165 => 49,  161 => 48,  155 => 45,  151 => 44,  147 => 43,  144 => 42,  135 => 39,  130 => 38,  126 => 37,  121 => 34,  112 => 31,  107 => 30,  101 => 28,  99 => 27,  94 => 26,  88 => 24,  86 => 23,  82 => 22,  77 => 21,  73 => 20,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  49 => 11,  45 => 10,  39 => 9,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Fiche membre</title>
    </head>
    <body>
        <img src=\"Logo_Vika.png\" alt=\"Logo VIKA\" style=\"height: 50px; width: auto;\">
        <center><h1 style=\"border-style: solid;\">Villeneuve Karaté do Association</h1></center>
        <h2>Fiche d'inscription {{ reg.vikaEvent.startdate|date(\"Y\") }} / {{ reg.vikaEvent.enddate|date(\"Y\") }}</h2>
        <h4>Titre évènement: {{ reg.vikaEvent.title }}</h4>
        <h4>Numéro dossier: {{ reg.id }}</h4>
        <hr>
        <center><h3 style=\"border-style: solid;\">Informations générales</h3></center>
        <h4>Nom: {{ user.name }}</h4>
        <h4>Prénom: {{ user.firstName }}</h4>
        <h4>Sexe: {{ user.sex }}</h4>
        <h4>Date de naissance: {{ user.birthdate|date(\"m/d/Y\") }}</h4>
        <h4>Adresse:
            <br>
            {% for adress in user.userconnected.user.adress %}
                {{ adress.type }}:
                {{ adress.num }}
                    {% if adress.postBox %}
                        BP{{ adress.postBox }}
                    {% endif %}
                {{ adress.streetName }},
                {% if adress.city.zip %}
                    {{ adress.city.zip }}
                {% endif %}
                {{ adress.city.cityName }},
                {{ adress.city.country.countryName }}
                <br>
            {% endfor %}
        </h4>
        <h4>Téléphone (père-mère-tuteur)* (si mineur):
            <br>
            {% for phone in user.userconnected.user.phones %}
                {{ phone.type }}:
                {{ phone.num }}
                <br>
            {% endfor %}
        </h4>
        <h4>Grade:  {{ user.belt }} </h4>
        <h4>Date de l'obtention:  {{ user.receiptDate|date(\"m/d/Y\") }} </h4>
        <h4>Adresse email:  {{ user1.email }} </h4>
        <center style=\"border-style: dotted;\">
            <p>Représentant légal pour les mineurs(père-mère-tuteur)* (si mineur)</p>
            <h4>Nom: {{ user.userconnected.user.name }}</h4>
            <h4>Prénom: {{ user.userconnected.user.firstName }}</h4>
        </center>
        <h2>Veuillez nous informer en cas de changement d'adresse!</h2>
        <div style=\"border-style: dotted; padding: 10px;\">
        <p><strong>Prise en charge médicale:</strong> Autorise la prise en charge médicale pour tout accident survenant durant les cours ou les manifestations auxquelles participerait le club.</p>
                  {% if 'medicalCare' == true %}
                      <b>OUI</b>
                  {% else %}
                      <b>NON</b>
                  {% endif %}
                  <p>Personne à prévenir en cas d'accident: </p> <h4>{{ user.userconnected.user.name }} {{ user.userconnected.user.firstName }}</h4>
                  </div>
                  </br>
                  <p></p>
                  </br>
        <div style=\"border-style: dotted; padding: 10px;\">
        <p><strong>Droit à l'image:</strong> Autorise la publication non commerciale des photos prises lors des différentes
          activités organisées au sein du club ou auxquelles il participe.</p>
                  {% if 'ImageDiffusion' == true %}
                      <b>OUI</b>
                  {% else %}
                      <b>NON</b>
                  {% endif %}
                  </div>
                  </br>
                  <p></p>
                  </br>
        <div style=\"border-style: dotted; padding: 10px;\">
        <p><strong>Autorisation des parents ou du responsable légal pour les enfants mineurs:</strong> J’autorise l'enfant inscrit ci-dessus à pratiquer le karaté do au sein de Villeneuve Karaté do Association –
VIKA.</p>
        <p><strong>Inscription</strong><br> Je soussigné (prénom et nom)(père-mère-tuteur)* (si mineur) : ...........................................................................................................................................................
        <br>, reconnais avoir pris connaissance des conditions d’inscription, des horaires des cours et du règlement intérieur
        (ce dernier est disponible sur le site de VIKA et au bureau du Dojo)<br><br>
        {% if 'ConditionRegistration' == true %}
        <b>OUI</b>
        {% else %}
        <b>NON</b>
        {% endif %}<br><br>
Veuillez écrire manuscritement et intégralement la phrase ci-dessous
« J'atteste avoir pris connaissance du règlement intérieur de l’association VIKA et en accepte les termes ».</p>
        <p>.......................................................................................................................................................................</p>
        <p>Fait à Villeneuve d'Ascq, le : .....................................<br>Signature : .....................................</p>
        </div>
        <p><strong>La présence de l’adhérent, accompagné de ses parents pour un mineur, est indispensable pour finaliser l’inscription (Photo et cotisation).</strong></p>
        <hr>
        <center><h3 style=\"border-style: solid;\">Compétitions</h3></center>
        <p>Je suis intéressé(e) par la compétition : <strong>Kata (oui/non)*</strong></p>
        <p>Je suis intéressé(e) par la compétition : <strong>Combat (oui/non)*</strong></p>
        <p><strong>Demande de passeport ........ euros (oui/non)*</strong></p>
        <hr>
        <center><h3 style=\"border-style: solid;\">A remplir par l'association</h3></center>
        <p><strong>Autorisation parentale pour les mineurs (oui)**</strong></p>
        <p><strong>Certificat médical (à fournir en septembre ........) (oui)**</strong></p>
        <p><strong>Une enveloppe timbrée (oui)**</strong></p>
        <p><strong>Licence Fédération ........ / ........ (Chèque/Espèce)* Montant ........ euros</strong></p>
        <p><strong>Montant de la cotisation annuelle : ........ Somme versée ........ (Chèque/Espèce(un seul règlement))* Montant ........ euros</strong></p>
        <hr>
        <p><strong>(Chèque vacances/ coupon sport)* Montant ........ euros</strong></p>
        <hr>
        <p>* rayer la(es) mention(s) inutile(s)</p>
        <p>** entourer la mention</p>
    </body>
</html>
", "registration/ficheMembre.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\registration\\ficheMembre.html.twig");
    }
}

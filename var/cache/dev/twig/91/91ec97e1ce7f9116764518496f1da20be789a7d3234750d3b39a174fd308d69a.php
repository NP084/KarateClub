<?php

/* @Diagram/Default/old__sample.html.twig */
class __TwigTemplate_6ac3f23664a4304154e731cce94c6fb97e8a9decff6e062ef7d7b4f198a593a1 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Diagram/Default/old__sample.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Diagram/Default/old__sample.html.twig"));

        // line 1
        echo "entity Region {
    regionName String
    BenMacha String
}

entity Country {
countryName String
}

// an ignored comment
/** not an ignored comment */
entity Location {
streetAddress String,
postalCode String,
city String,
stateProvince String
}

entity Department {
departmentName String required
}

/**
* Task entity.
* @author The JHipster team.
*/
entity Task {
title String,
description String
}

/**
* The Employee entity.
*/
entity Employee {
/**
* The firstname attribute.
*/
firstName String,
lastName String,
email String,
phoneNumber String,
hireDate ZonedDateTime,
salary Long,
commissionPct Long
}

entity Job {
jobTitle String,
minSalary Long,
maxSalary Long
}

entity JobHistory {
startDate ZonedDateTime,
endDate ZonedDateTime,
language Language
}

enum Language {
FRENCH, ENGLISH, SPANISH
}

relationship OneToOne {
Country{region} to Region
}

relationship OneToOne {
Location{country} to Country
}

relationship OneToOne {
Department{location} to Location
}

relationship ManyToMany {
Job{task(title)} to Task{job}
}

// defining multiple OneToMany relationships with comments
relationship OneToMany {
Employee{job} to Job,
/**
* A relationship
*/
Department{employee} to
/**
* Another side of the same relationship
*/
Employee
}

relationship ManyToOne {
Employee{manager} to Employee
}

// defining multiple oneToOne relationships
relationship OneToOne {
JobHistory{job} to Job,
JobHistory{department} to Department,
JobHistory{employee} to Employee
}

// Set pagination options
paginate JobHistory, Employee with infinite-scroll
paginate Job with pagination

dto * with mapstruct

// Set service options to all except few
service all with serviceImpl except Employee, Job
// Set an angular suffix
angularSuffix * with mySuffix
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Diagram/Default/old__sample.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("entity Region {
    regionName String
    BenMacha String
}

entity Country {
countryName String
}

// an ignored comment
/** not an ignored comment */
entity Location {
streetAddress String,
postalCode String,
city String,
stateProvince String
}

entity Department {
departmentName String required
}

/**
* Task entity.
* @author The JHipster team.
*/
entity Task {
title String,
description String
}

/**
* The Employee entity.
*/
entity Employee {
/**
* The firstname attribute.
*/
firstName String,
lastName String,
email String,
phoneNumber String,
hireDate ZonedDateTime,
salary Long,
commissionPct Long
}

entity Job {
jobTitle String,
minSalary Long,
maxSalary Long
}

entity JobHistory {
startDate ZonedDateTime,
endDate ZonedDateTime,
language Language
}

enum Language {
FRENCH, ENGLISH, SPANISH
}

relationship OneToOne {
Country{region} to Region
}

relationship OneToOne {
Location{country} to Country
}

relationship OneToOne {
Department{location} to Location
}

relationship ManyToMany {
Job{task(title)} to Task{job}
}

// defining multiple OneToMany relationships with comments
relationship OneToMany {
Employee{job} to Job,
/**
* A relationship
*/
Department{employee} to
/**
* Another side of the same relationship
*/
Employee
}

relationship ManyToOne {
Employee{manager} to Employee
}

// defining multiple oneToOne relationships
relationship OneToOne {
JobHistory{job} to Job,
JobHistory{department} to Department,
JobHistory{employee} to Employee
}

// Set pagination options
paginate JobHistory, Employee with infinite-scroll
paginate Job with pagination

dto * with mapstruct

// Set service options to all except few
service all with serviceImpl except Employee, Job
// Set an angular suffix
angularSuffix * with mySuffix
", "@Diagram/Default/old__sample.html.twig", "C:\\wamp64\\www\\KarateClub\\vendor\\benmacha\\diagram-bundle\\Resources\\views\\Default\\old__sample.html.twig");
    }
}

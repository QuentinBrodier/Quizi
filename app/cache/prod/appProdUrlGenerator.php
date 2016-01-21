<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'mq_quizi_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MQ\\QuiziBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mq_quizi_admin_quizs' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MQ\\QuiziBundle\\Controller\\AdminQuizsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/adminQuizs/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mq_quizi_ajout_quizs' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MQ\\QuiziBundle\\Controller\\AdminQuizsController::ajoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/adminQuizs/ajout/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mq_quizi_modif_quizs' => array (  0 =>   array (    0 => 'idQuiz',  ),  1 =>   array (    '_controller' => 'MQ\\QuiziBundle\\Controller\\AdminQuizsController::modifQuizAction',  ),  2 =>   array (    'idQuiz' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idQuiz',    ),    1 =>     array (      0 => 'text',      1 => '/adminQuizs/modif',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mq_quizi_suppr_quizs' => array (  0 =>   array (    0 => 'idQuiz',  ),  1 =>   array (    '_controller' => 'MQ\\QuiziBundle\\Controller\\AdminQuizsController::supprimerQuizAction',  ),  2 =>   array (    'idQuiz' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idQuiz',    ),    1 =>     array (      0 => 'text',      1 => '/adminQuizs/suppr',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mq_quizi_modif_questions_quizs' => array (  0 =>   array (    0 => 'idQuiz',    1 => 'idQuestion',  ),  1 =>   array (    '_controller' => 'MQ\\QuiziBundle\\Controller\\AdminQuizsController::modifierQuestionsAction',  ),  2 =>   array (    'idQuiz' => '\\d+',    'idQuestion' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idQuestion',    ),    1 =>     array (      0 => 'text',      1 => '/que',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idQuiz',    ),    3 =>     array (      0 => 'text',      1 => '/adminQuizs/modif',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mq_quizi_suppr_questions_quizs' => array (  0 =>   array (    0 => 'idQuiz',    1 => 'idQuestion',  ),  1 =>   array (    '_controller' => 'MQ\\QuiziBundle\\Controller\\AdminQuizsController::supprimerQuestionsAction',  ),  2 =>   array (    'idQuiz' => '\\d+',    'idQuestion' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idQuestion',    ),    1 =>     array (      0 => 'text',      1 => '/supr',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idQuiz',    ),    3 =>     array (      0 => 'text',      1 => '/adminQuizs/modif',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mq_quizi_quizs' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MQ\\QuiziBundle\\Controller\\QuizsController::indexQuizAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/quizs/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mq_quizi_view_quizs' => array (  0 =>   array (    0 => 'idQuiz',  ),  1 =>   array (    '_controller' => 'MQ\\QuiziBundle\\Controller\\QuizsController::viewQuizAction',  ),  2 =>   array (    'idQuiz' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idQuiz',    ),    1 =>     array (      0 => 'text',      1 => '/quizs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mq_quizi_rep_quizs' => array (  0 =>   array (    0 => 'idQuiz',  ),  1 =>   array (    '_controller' => 'MQ\\QuiziBundle\\Controller\\ReponseController::repQuizAction',  ),  2 =>   array (    'idQuiz' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idQuiz',    ),    1 =>     array (      0 => 'text',      1 => '/quizs/rep',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mq_quizi_resultat_quizs' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MQQuiziBundle:Resultat:resultatQuiz',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/quizs/res',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MQ\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inscription' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MQ\\UserBundle\\Controller\\SecurityController::inscriptionAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestion_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MQ\\UserBundle\\Controller\\SecurityController::gestionUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestion_utilisateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_user' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MQ\\UserBundle\\Controller\\SecurityController::deleteUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete_utilisateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pageNotFound' => array (  0 =>   array (    0 => 'path',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PageNotFoundController::pageNotFoundAction',    'path' => '',  ),  2 =>   array (    'path' => '.*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '.*',      3 => 'path',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}

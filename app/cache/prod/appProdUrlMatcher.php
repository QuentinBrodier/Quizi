<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // mq_quizi_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mq_quizi_homepage');
            }

            return array (  '_controller' => 'MQ\\QuiziBundle\\Controller\\DefaultController::indexAction',  '_route' => 'mq_quizi_homepage',);
        }

        if (0 === strpos($pathinfo, '/adminQuizs')) {
            // mq_quizi_admin_quizs
            if (rtrim($pathinfo, '/') === '/adminQuizs') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'mq_quizi_admin_quizs');
                }

                return array (  '_controller' => 'MQ\\QuiziBundle\\Controller\\AdminQuizsController::indexAction',  '_route' => 'mq_quizi_admin_quizs',);
            }

            // mq_quizi_ajout_quizs
            if (rtrim($pathinfo, '/') === '/adminQuizs/ajout') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'mq_quizi_ajout_quizs');
                }

                return array (  '_controller' => 'MQ\\QuiziBundle\\Controller\\AdminQuizsController::ajoutAction',  '_route' => 'mq_quizi_ajout_quizs',);
            }

            // mq_quizi_modif_quizs
            if (0 === strpos($pathinfo, '/adminQuizs/modif') && preg_match('#^/adminQuizs/modif/(?P<idQuiz>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mq_quizi_modif_quizs')), array (  '_controller' => 'MQ\\QuiziBundle\\Controller\\AdminQuizsController::modifQuizAction',));
            }

            // mq_quizi_suppr_quizs
            if (0 === strpos($pathinfo, '/adminQuizs/suppr') && preg_match('#^/adminQuizs/suppr/(?P<idQuiz>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mq_quizi_suppr_quizs')), array (  '_controller' => 'MQ\\QuiziBundle\\Controller\\AdminQuizsController::supprimerQuizAction',));
            }

            if (0 === strpos($pathinfo, '/adminQuizs/modif')) {
                // mq_quizi_modif_questions_quizs
                if (preg_match('#^/adminQuizs/modif/(?P<idQuiz>\\d+)/que/(?P<idQuestion>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mq_quizi_modif_questions_quizs')), array (  '_controller' => 'MQ\\QuiziBundle\\Controller\\AdminQuizsController::modifierQuestionsAction',));
                }

                // mq_quizi_suppr_questions_quizs
                if (preg_match('#^/adminQuizs/modif/(?P<idQuiz>\\d+)/supr/(?P<idQuestion>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mq_quizi_suppr_questions_quizs')), array (  '_controller' => 'MQ\\QuiziBundle\\Controller\\AdminQuizsController::supprimerQuestionsAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/quizs')) {
            // mq_quizi_quizs
            if (rtrim($pathinfo, '/') === '/quizs') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'mq_quizi_quizs');
                }

                return array (  '_controller' => 'MQ\\QuiziBundle\\Controller\\QuizsController::indexQuizAction',  '_route' => 'mq_quizi_quizs',);
            }

            // mq_quizi_view_quizs
            if (preg_match('#^/quizs/(?P<idQuiz>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mq_quizi_view_quizs')), array (  '_controller' => 'MQ\\QuiziBundle\\Controller\\QuizsController::viewQuizAction',));
            }

            if (0 === strpos($pathinfo, '/quizs/re')) {
                // mq_quizi_rep_quizs
                if (0 === strpos($pathinfo, '/quizs/rep') && preg_match('#^/quizs/rep/(?P<idQuiz>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mq_quizi_rep_quizs')), array (  '_controller' => 'MQ\\QuiziBundle\\Controller\\ReponseController::repQuizAction',));
                }

                // mq_quizi_resultat_quizs
                if ($pathinfo === '/quizs/res') {
                    return array (  '_controller' => 'MQQuiziBundle:Resultat:resultatQuiz',  '_route' => 'mq_quizi_resultat_quizs',);
                }

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'MQ\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // inscription
        if ($pathinfo === '/inscription') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_inscription;
            }

            return array (  '_controller' => 'MQ\\UserBundle\\Controller\\SecurityController::inscriptionAction',  '_route' => 'inscription',);
        }
        not_inscription:

        // gestion_user
        if ($pathinfo === '/gestion_utilisateur') {
            return array (  '_controller' => 'MQ\\UserBundle\\Controller\\SecurityController::gestionUserAction',  '_route' => 'gestion_user',);
        }

        // delete_user
        if (0 === strpos($pathinfo, '/delete_utilisateur') && preg_match('#^/delete_utilisateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_user')), array (  '_controller' => 'MQ\\UserBundle\\Controller\\SecurityController::deleteUserAction',));
        }

        // pageNotFound
        if (preg_match('#^/(?P<path>.*)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pageNotFound')), array (  '_controller' => 'AppBundle\\Controller\\PageNotFoundController::pageNotFoundAction',  'path' => '',));
        }

        // _twig_error_test
        if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

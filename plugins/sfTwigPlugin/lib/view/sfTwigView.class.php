<?php

/*
 * This file is part of the sfTwigPlugin package.
 *
 * (c) Henrik Bjornskov <henrik@bearwoods.dk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * A view that uses Twig as the templating engine.
 *
 * @package    sfTwigPlugin
 * @subpackage view
 * @author     Henrik Bjornskov <henrik@bearwoods.dk>
 */
class sfTwigView extends sfPHPView {

   /**
    * @var Twig_Environment
    */
   protected $twig = null;

   /**
    * @var Twig_Loader_Filesystem
    */
   protected $loader = null;

   /**
    * @var sfApplicationConfiguration
    */
   protected $configuration = null;

   /**
    * @var string Extension used by twig templates. which is .html
    */
   protected $extension = '.html';

   /**
    * Loads the Twig instance and registers the autoloader.
    */
   public function configure() {
      parent::configure();

      $this->configuration = $this->context->getConfiguration();



      // empty array becuase it changes based on the rendering context
      $this->loader = new Twig_Loader_Filesystem(array());


      $this->twig = new sfTwigEnvironment($this->loader, array(
          'cache' => sfConfig::get('sf_cache_dir') . '/' . sfConfig::get('sf_app') . '/' . sfConfig::get('sf_environment') . '/template',
          'debug' => sfConfig::get('sf_environment') == 'dev',
          'sf_context' => $this->context,
      ));

      //if ($this->twig->isDebug())
      {
         $this->twig->enableAutoReload();
      }

      $this->loadExtensions();
   }

   /**
    * Returns the Twig_Environment
    *
    * @return Twig_Environment
    */
   public function getEngine() {
      return $this->twig;
   }

   /**
    * Loads standard extensions for Symfony into the view.
    */
   protected function loadExtensions() {
      // should be replaced with sf_twig_standard_extensions
      $prefixes = array_merge(array('Helper', 'Url', 'Asset', 'Tag', 'Escaping', 'Partial', 'I18N'), sfConfig::get('sf_standard_helpers'));

      foreach ($prefixes as $prefix) {
         $class_name = $prefix . '_Twig_Extension';
         if (class_exists($class_name)) {
            $class = new $class_name();
            foreach ($class->getFilters() as $function => $filter) {
               $this->twig->addFunction($function, new Twig_Function_Function($function));
            }
         }
      }
      // dung de goi cac method static
      $statics = array('StaticCall','sc', 'translate');
      foreach ($statics as $static) {
         $this->twig->addFunction($static, new Twig_Function_Function($static));

         $prefixes [] = $static;
      }
      // for now the extensions needs the original helpers so lets load thoose.
      sfLoader::loadHelpers($prefixes);
   }

   /* protected function loadExtensions()
     {
     // should be replaced with sf_twig_standard_extensions
     $prefixes = array_merge(array('Helper', 'Url', 'Asset', 'Tag', 'Escaping', 'Partial', 'I18N'), sfConfig::get('sf_standard_helpers'));

     foreach ($prefixes as $prefix)
     {
     $class_name = $prefix.'_Twig_Extension';
     if (class_exists($class_name))
     {
     $this->twig->addExtension(new $class_name());
     }
     }

     // for now the extensions needs the original helpers so lets load thoose.
     $this->configuration->loadHelpers($prefixes);

     // makes it possible to load custom twig extensions.
     foreach (sfConfig::get('sf_twig_extensions', array()) as $extension)
     {
     if (!class_exists($extension))
     {
     throw new InvalidArgumentException(sprintf('Unable to load "%s" as an Twig_Extension into Twig_Environment', $extension));
     }

     $this->twig->addExtension(new $extension());
     }
     } */

   /**
    * This renders a file based on the $file and sf_type.
    *
    * @param string $file the fullpath to the template file
    *
    * @return string
    */
   protected function renderFile($file) {
      if (sfConfig::get('sf_logging_enabled', false)) {
         $this->dispatcher->notify(new sfEvent($this, 'application.log', array(sprintf('Render "%s"', $file))));
      }


      $layoutTemplate = sfConfig::get('sf_app_dir') . '/templates';

      $this->loader->setPaths(array($layoutTemplate, realpath(dirname($file))));

      $event = $this->dispatcher->filter(new sfEvent($this, 'template.filter_parameters'), $this->attributeHolder->getAll());

      $content = $this->twig->loadTemplate(basename($file))->render($event->getReturnValue());

      /*
        $lc = myUtil::getLang();

        if($lc == 'en'){

        //$content = strtolower($content); // ky tu dac biet thi se bi loi
        $c = new Criteria;
        $c->addDescendingOrderByColumn('length('.LangPeer::VN.')');
        $rs = Langpeer::doSelect($c);

        foreach($rs as $r){

        $content = str_replace($r->getVn(), $r->getEn(), $content);
        }
        }
       */
      return $content;
   }

}

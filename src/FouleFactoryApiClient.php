<?php
/*
 * FouleFactoryApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ) on 09/14/2016
 */

namespace FouleFactoryApiLib;

use FouleFactoryApiLib\Controllers;

/**
 * FouleFactoryApiLib client class
 */
class FouleFactoryApiClient
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct($basicAuthUserName = NULL, $basicAuthPassword = NULL)
    {
        Configuration::$basicAuthUserName = $basicAuthUserName ? $basicAuthUserName : Configuration::$basicAuthUserName;
        Configuration::$basicAuthPassword = $basicAuthPassword ? $basicAuthPassword : Configuration::$basicAuthPassword;
    }
 
    /**
     * Singleton access to TaskAnswerTexts controller
     * @return Controllers\TaskAnswerTextsController The *Singleton* instance
     */
    public function getTaskAnswerTexts()
    {
        return Controllers\TaskAnswerTextsController::getInstance();
    }
 
    /**
     * Singleton access to TaskAnswerChoices controller
     * @return Controllers\TaskAnswerChoicesController The *Singleton* instance
     */
    public function getTaskAnswerChoices()
    {
        return Controllers\TaskAnswerChoicesController::getInstance();
    }
 
    /**
     * Singleton access to Projects controller
     * @return Controllers\ProjectsController The *Singleton* instance
     */
    public function getProjects()
    {
        return Controllers\ProjectsController::getInstance();
    }
 
    /**
     * Singleton access to CsvFiles controller
     * @return Controllers\CsvFilesController The *Singleton* instance
     */
    public function getCsvFiles()
    {
        return Controllers\CsvFilesController::getInstance();
    }
 
    /**
     * Singleton access to Account controller
     * @return Controllers\AccountController The *Singleton* instance
     */
    public function getAccount()
    {
        return Controllers\AccountController::getInstance();
    }
 
    /**
     * Singleton access to Templates controller
     * @return Controllers\TemplatesController The *Singleton* instance
     */
    public function getTemplates()
    {
        return Controllers\TemplatesController::getInstance();
    }
 
    /**
     * Singleton access to Tasks controller
     * @return Controllers\TasksController The *Singleton* instance
     */
    public function getTasks()
    {
        return Controllers\TasksController::getInstance();
    }
 
    /**
     * Singleton access to TaskLines controller
     * @return Controllers\TaskLinesController The *Singleton* instance
     */
    public function getTaskLines()
    {
        return Controllers\TaskLinesController::getInstance();
    }
}
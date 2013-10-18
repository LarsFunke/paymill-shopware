<?php
/**
 * Paymill Logging
 *
 * @category   Shopware
 * @package    Shopware_Plugins
 * @subpackage Paymill
 * @author     PayIntelligent
 */
class Shopware_Controllers_Backend_PaymillLogging extends Shopware_Controllers_Backend_ExtJs
{
    /**
     * index action is called if no other action is triggered
     *
     * @return void
     */
    public function indexAction()
    {
        $this->View()->loadTemplate("backend/paymill_logging/app.js");
        $this->View()->assign("title", "Paymill-Logging");
    }

    /**
     * This Action loads the logging data from the database into the backend view
     */
    public function loadStoreAction()
    {
        $start = intval($this->Request()->getParam("start"));
        $limit = intval($this->Request()->getParam("limit"));
        $loggingManager = new Shopware_Plugins_Frontend_PaymPaymentCreditcard_Components_LoggingManager();
        $store = $loggingManager->read($start, ($limit));
        $total = $loggingManager->getTotal();
        $this->View()->assign(array("data" => $store, "total" => $total, "success" => true));
    }

    /**
     * Returns the path to image resources used by the log view
     */
    public function getImagePathAction()
    {
        return "";
        throw new Exception(__CLASS__." ".__FUNCTION__." not implemented.");
    }
}

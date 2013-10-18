/**
 * list
 *
 * @category   Shopware
 * @package    Shopware_Plugins
 * @copyright  Copyright (c) 2013 PayIntelligent GmbH (http://payintelligent.de)
 */

Ext.define('Shopware.apps.PaymillLogging.store.List', {
    extend:   'Ext.data.Store',
    autoLoad: true,
    pageSize: 32,
    model:    'Shopware.apps.PaymillLogging.model.Main'
});
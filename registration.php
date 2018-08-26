<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

use \Magento\Framework\Component\ComponentRegistrar;

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_Inventory',
    __DIR__.'/src/Inventory'
);

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventoryAdminUi',
    __DIR__.'/src/InventoryAdminUi'
);

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventoryApi',
    __DIR__.'/src/InventoryApi'
);

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventoryBundleProduct',
    __DIR__.'/src/InventoryBundleProduct'
);


\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventoryCache',
    __DIR__.'/src/InventoryCache'
);


\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventoryCatalog',
    __DIR__.'/src/InventoryCatalog'
);

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventoryCatalogAdminUi',
    __DIR__.'/src/InventoryCatalogAdminUi'
);

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventoryCatalogApi',
    __DIR__.'/src/InventoryCatalogApi'
);


\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventoryCatalogSearch',
    __DIR__.'/src/InventoryCatalogSearch'
);


\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventoryConfigurableProduct',
    __DIR__.'/src/InventoryConfigurableProduct'
);


\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventoryConfigurableProductAdminUi',
    __DIR__.'/src/InventoryConfigurableProductAdminUi'
);


\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventoryConfigurableProductIndexer',
    __DIR__.'/src/InventoryConfigurableProductIndexer'
);


\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventoryConfiguration',
    __DIR__.'/src/InventoryConfiguration'
);


\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventoryConfigurationApi',
    __DIR__.'/src/InventoryConfigurationApi'
);


\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventoryGroupedProduct',
    __DIR__.'/src/InventoryGroupedProduct'
);


\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventoryImportExport',
    __DIR__.'/src/InventoryImportExport'
);


\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventoryIndexer',
    __DIR__.'/src/InventoryIndexer'
);


\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventoryLowQuantityNotification',
    __DIR__.'/src/InventoryLowQuantityNotification'
);


\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventoryLowQuantityNotificationAdminUi',
    __DIR__.'/src/InventoryLowQuantityNotificationAdminUi'
);

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventoryLowQuantityNotificationApi',
    __DIR__.'/src/InventoryLowQuantityNotificationApi'
);
\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventoryMultiDimensionalIndexerApi',
    __DIR__.'/src/InventoryMultiDimensionalIndexerApi'
);

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventoryProductAlert',
    __DIR__.'/src/InventoryProductAlert'
);

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventoryReservations',
    __DIR__.'/src/InventoryReservations'
);

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventoryReservationsApi',
    __DIR__.'/src/InventoryReservationsApi'
);

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventorySales',
    __DIR__.'/src/InventorySales'
);

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventorySalesAdminUi',
    __DIR__.'/src/InventorySalesAdminUi'
);

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventorySalesApi',
    __DIR__.'/src/InventorySalesApi'
);

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventorySalesFrontendUi',
    __DIR__.'/src/InventorySalesFrontendUi'
);

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventoryShipping',
    __DIR__.'/src/InventoryShipping'
);

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventoryShippingAdminUi',
    __DIR__.'/src/InventoryShippingAdminUi'
);

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventorySourceDeductionApi',
    __DIR__.'/src/InventorySourceDeductionApi'
);

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventorySourceSelection',
    __DIR__.'/src/InventorySourceSelection'
);

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magento_InventorySourceSelectionApi',
    __DIR__.'/src/InventorySourceSelectionApi'
);

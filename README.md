# msi-module

Installation for development 

1. ```git clone https://github.com/magento/magento2 magento2```
2. ```git clone https://github.com/magento-engcom/msi-module msi-module```
3. Edit magento2/composer.json, add lines:
   ```
   "repositories": [
        {
            "type": "path",
            "url": "FULL_PATH_TO/msi-module"
        }
    ]
    ```
4. ```cd magento2; composer require magento/module-msi```


Note: composer will create symlinks to vendor folder with msi modules.

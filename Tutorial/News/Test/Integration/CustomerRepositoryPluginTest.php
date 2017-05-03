<?php
/**
 * Created by PhpStorm.
 * User: dev01
 * Date: 26.04.17
 * Time: 16:24
 */
use \Tutorial\News\Plugin\PricePlugin;
use \Tutorial\News\Plugin\NewpricePlugin;
use \Tutorial\News\Plugin\ChangecopyrightPlugin;
use \Tutorial\News\Plugin\ChangebreadcrumbPlugin;
use Magento\Customer\Api\CustomerRepositoryInterface;
use Magento\Framework\App\Area;
use Magento\TestFramework\App\State as AppState;
use Magento\TestFramework\Interception\PluginList;
use Magento\TestFramework\ObjectManager;

class PricePluginTest extends \PHPUnit_Framework_TestCase {


    public function testPricePluginIsRegistered() {

        $objectManager = ObjectManager::getInstance();

        $applicationState = $objectManager->get(AppState::class);
        $applicationState->setAreaCode(Area::AREA_WEBAPI_REST);

        $pluginList = $objectManager->create(PluginList::class);

        $pluginInfo = $pluginList->get(CustomerRepositoryInterface::class, []);

        $this->assertSame(PricePlugin::class, $pluginInfo['tutorial_news_priceplugin']['instance']);
    }

    public function testNewPricePluginIsRegistered() {

        $objectManager = ObjectManager::getInstance();

        $applicationState = $objectManager->get(AppState::class);
        $applicationState->setAreaCode(Area::AREA_FRONTEND);

        $pluginList = $objectManager->create(PluginList::class);

        $pluginInfo = $pluginList->get(Magento\Catalog\Model\Product::class, []);

        var_dump($pluginInfo);

        $this->assertSame(NewpricePlugin::class, $pluginInfo['tutorial_news_newpriceplugin']['instance']);
    }

    public function testChangeCopyrightPluginIsRegistered() {

        $objectManager = ObjectManager::getInstance();

        $applicationState = $objectManager->get(AppState::class);
        $applicationState->setAreaCode(Area::AREA_FRONTEND);

        $pluginList = $objectManager->create(PluginList::class);

        $pluginInfo = $pluginList->get(Magento\Theme\Block\Html\Footer::class, []);

        $this->assertSame(ChangecopyrightPlugin::class, $pluginInfo['tutorial_news_copyrightplugin']['instance']);
    }
    public function testChangeBreadcrumbPluginIsRegistered() {

        $objectManager = ObjectManager::getInstance();

        $applicationState = $objectManager->get(AppState::class);
        $applicationState->setAreaCode(Area::AREA_FRONTEND);

        $pluginList = $objectManager->create(PluginList::class);

        $pluginInfo = $pluginList->get(Magento\Theme\Block\Html\Breadcrumbs::class, []);

        $this->assertSame(ChangebreadcrumbPlugin::class, $pluginInfo['tutorial_news_crumbplugin']['instance']);
    }
}
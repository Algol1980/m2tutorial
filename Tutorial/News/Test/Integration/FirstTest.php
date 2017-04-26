<?php
/**
 * Created by PhpStorm.
 * User: dev01
 * Date: 26.04.17
 * Time: 15:00
 */


namespace Tutorial\News;

use Magento\Customer\Api\CustomerRepositoryInterface;
use Magento\Framework\App\DeploymentConfig;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\Component\ComponentRegistrar;
use Magento\Framework\Module\ModuleList;

class FirstTest extends \PHPUnit_Framework_TestCase
{

    private $moduleName = 'Tutorial_News';

    private $objectManager;



    protected function setUp()
    {
        $this->objectManager = ObjectManager::getInstance();
    }

    public function testModuleIsRegistered()
    {
        $registrar = new ComponentRegistrar();

        $paths = $registrar->getPaths(ComponentRegistrar::MODULE);

        $this->assertArrayHasKey($this->moduleName, $paths);
    }

    public function testTheModuleIsKnownAndEnabled()
    {

        /** @var ModuleList $moduleList */
        $moduleList = $this->objectManager->create(ModuleList::class);

        $message = sprintf('The module "%s" is not enabled in the test environment', $this->moduleName);
        $this->assertTrue($moduleList->has($this->moduleName), $message);
    }


    public function testTheModuleIsKnownAndEnabledInTheRealEnvironment()
    {
        $directoryList = $this->objectManager->create(DirectoryList::class, ['root' => BP]);
        $configReader = $this->objectManager->create(DeploymentConfig\Reader::class, ['dirList' => $directoryList]);
        $deploymentConfig = $this->objectManager->create(DeploymentConfig::class, ['reader' => $configReader]);

        $moduleList = $this->objectManager->create(ModuleList::class, ['config' => $deploymentConfig]);
        $message = sprintf('The module "%s" is not enabled in the test environment', $this->moduleName);
        $this->assertTrue($moduleList->has($this->moduleName), $message);


    }


}
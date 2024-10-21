<?php
namespace Lukasbableck\ContaoSelectPlaceholderBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Lukasbableck\ContaoSelectPlaceholderBundle\ContaoSelectPlaceholderBundle;

class Plugin implements BundlePluginInterface {
	public function getBundles(ParserInterface $parser): array {
		return [BundleConfig::create(ContaoSelectPlaceholderBundle::class)->setLoadAfter([ContaoCoreBundle::class])];
	}
}

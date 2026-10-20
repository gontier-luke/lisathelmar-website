<?php

namespace Override;

use Classes\ControllerCore;
use Classes\Router;
use Repositories\Configuration;
use Services\AssetsService;
use Override;

/**
 * Override de la classe ControllerCore pour les cas spécifiques au site
 */
class ControllerOverride extends ControllerCore
{
    /**
     * Liens du menu
     * 
     * @return array<string, string>
     */
    protected function setMenuLinks(): array
    {
        $this->setMenuLinksSeparates();
        return [
            'Accueil' => Router::generateUrl(name: 'app_index'), // Accueil du site
            'Mes créations' => Router::generateUrl('app_creations'), // Page des créations
            'Collaborations' => Router::generateUrl('app_collaborations'), // Page des collaborations
        ];
    }

    /**
     * Liens du menu séparés
     * 
     * @return bool
     */
    protected function setMenuLinksSeparates(): bool
    {
        return $this->addExtraVariables([
            'menuLinksSeparates' => [
                'À propos' => Router::generateUrl('app_a_propos'), // Page À propos
                'Contact' => Router::generateUrl('app_contact'), // Page de contact
            ],
        ]);
    }

    protected function getSocials(): array
    {
        return [
            'social_instagram' => [
                'link' => Configuration::get('social_instagram'),
                'icon' => AssetsService::getImageContent('picto-socials/instagram', 'svg'),
                'title' => 'Instagram',
                'type' => 'url',
                'iconExtension' => 'svg',
            ],
            'social_discord' => [
                'link' => Configuration::get('social_discord'),
                'icon' => AssetsService::getImageContent('picto-socials/discord', 'svg'),
                'title' => 'discord',
                'type' => 'copy',
                'iconExtension' => 'svg',
                'copy_message' => '<p>Mon identifiant Discord a été copié dans votre presse-papier.</p><p>Vous pouvez maintenant me contacter sur Discord après une demande d\'ajout d\'ami.</p><p> Si l\'identifiant n\'a pas été copié, vous pouvez le copier manuellement ici :</p>' . Configuration::get('social_discord'),
            ],
            'social_wattpad' => [
                'link' => Configuration::get('social_wattpad'),
                'icon' => AssetsService::getImageContent('picto-socials/wattpad', 'svg'),
                'title' => 'Wattpad',
                'type' => 'url',
                'iconExtension' => 'svg',
            ],
        ];
    }
}
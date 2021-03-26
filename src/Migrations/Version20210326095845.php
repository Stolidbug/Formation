<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210326095845 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sylius_product ADD storagelocation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sylius_product ADD CONSTRAINT FK_677B9B74F551D778 FOREIGN KEY (storagelocation_id) REFERENCES app_storagelocation (id)');
        $this->addSql('CREATE INDEX IDX_677B9B74F551D778 ON sylius_product (storagelocation_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sylius_product DROP FOREIGN KEY FK_677B9B74F551D778');
        $this->addSql('DROP INDEX IDX_677B9B74F551D778 ON sylius_product');
        $this->addSql('ALTER TABLE sylius_product DROP storagelocation_id');
    }
}

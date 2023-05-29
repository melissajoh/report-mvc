<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230524103814 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE items ADD COLUMN hidden_under VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__items AS SELECT item_id, item_name, description, use_desc, room_id, grab, lift FROM items');
        $this->addSql('DROP TABLE items');
        $this->addSql('CREATE TABLE items (item_id VARCHAR(255) NOT NULL, item_name VARCHAR(255) NOT NULL, description CLOB NOT NULL, use_desc CLOB NOT NULL, room_id INTEGER NOT NULL, grab VARCHAR(255) DEFAULT NULL, lift VARCHAR(255) DEFAULT NULL, PRIMARY KEY(item_id))');
        $this->addSql('INSERT INTO items (item_id, item_name, description, use_desc, room_id, grab, lift) SELECT item_id, item_name, description, use_desc, room_id, grab, lift FROM __temp__items');
        $this->addSql('DROP TABLE __temp__items');
    }
}

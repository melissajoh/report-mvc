<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230524073043 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__items AS SELECT item_name, description, use_desc, room_id FROM items');
        $this->addSql('DROP TABLE items');
        $this->addSql('CREATE TABLE items (item_id VARCHAR(255) NOT NULL, item_name VARCHAR(255) NOT NULL, description CLOB NOT NULL, use_desc CLOB NOT NULL, room_id INTEGER NOT NULL, PRIMARY KEY(item_id))');
        $this->addSql('INSERT INTO items (item_name, description, use_desc, room_id) SELECT item_name, description, use_desc, room_id FROM __temp__items');
        $this->addSql('DROP TABLE __temp__items');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__items AS SELECT item_name, description, use_desc, room_id FROM items');
        $this->addSql('DROP TABLE items');
        $this->addSql('CREATE TABLE items (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, item_name VARCHAR(255) NOT NULL, description CLOB NOT NULL, use_desc CLOB NOT NULL, room_id INTEGER NOT NULL)');
        $this->addSql('INSERT INTO items (item_name, description, use_desc, room_id) SELECT item_name, description, use_desc, room_id FROM __temp__items');
        $this->addSql('DROP TABLE __temp__items');
    }
}

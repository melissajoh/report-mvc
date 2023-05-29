<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230525084854 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE items ADD COLUMN usable VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE items ADD COLUMN locked VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE rooms ADD COLUMN s_lock VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE rooms ADD COLUMN w_lock VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__items AS SELECT item_id, item_name, description, use_desc, room_id, grab, lift, hidden_under FROM items');
        $this->addSql('DROP TABLE items');
        $this->addSql('CREATE TABLE items (item_id VARCHAR(255) NOT NULL, item_name VARCHAR(255) NOT NULL, description CLOB NOT NULL, use_desc CLOB NOT NULL, room_id INTEGER NOT NULL, grab VARCHAR(255) DEFAULT NULL, lift VARCHAR(255) DEFAULT NULL, hidden_under VARCHAR(255) DEFAULT NULL, PRIMARY KEY(item_id))');
        $this->addSql('INSERT INTO items (item_id, item_name, description, use_desc, room_id, grab, lift, hidden_under) SELECT item_id, item_name, description, use_desc, room_id, grab, lift, hidden_under FROM __temp__items');
        $this->addSql('DROP TABLE __temp__items');
        $this->addSql('CREATE TEMPORARY TABLE __temp__rooms AS SELECT room_id, room_name, description, north, east, south, west, image, n_lock, e_lock FROM rooms');
        $this->addSql('DROP TABLE rooms');
        $this->addSql('CREATE TABLE rooms (room_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, room_name VARCHAR(255) NOT NULL, description CLOB NOT NULL, north INTEGER DEFAULT NULL, east INTEGER DEFAULT NULL, south INTEGER DEFAULT NULL, west INTEGER DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, n_lock VARCHAR(255) DEFAULT NULL, e_lock VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO rooms (room_id, room_name, description, north, east, south, west, image, n_lock, e_lock) SELECT room_id, room_name, description, north, east, south, west, image, n_lock, e_lock FROM __temp__rooms');
        $this->addSql('DROP TABLE __temp__rooms');
    }
}

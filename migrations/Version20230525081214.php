<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230525081214 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rooms ADD COLUMN n_lock VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE rooms ADD COLUMN e_lock VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__rooms AS SELECT room_id, room_name, description, north, east, south, west, image FROM rooms');
        $this->addSql('DROP TABLE rooms');
        $this->addSql('CREATE TABLE rooms (room_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, room_name VARCHAR(255) NOT NULL, description CLOB NOT NULL, north INTEGER DEFAULT NULL, east INTEGER DEFAULT NULL, south INTEGER DEFAULT NULL, west INTEGER DEFAULT NULL, image VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO rooms (room_id, room_name, description, north, east, south, west, image) SELECT room_id, room_name, description, north, east, south, west, image FROM __temp__rooms');
        $this->addSql('DROP TABLE __temp__rooms');
    }
}

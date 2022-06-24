<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220618095308 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql(
            'create table users
            (
                id          serial constraint id primary key,
                email       varchar,
                user_name   varchar,
                first_name  varchar,
                last_name   varchar,
                description varchar,
                password    varchar,
                last_login  timestamp,
                created_at  timestamp default now(),
                updated_at  timestamp default now()
            );'
        );

        $this->addSql(
            'create unique index users_email_uindex on users (email);'
        );
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE users');
    }
}

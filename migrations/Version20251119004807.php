<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251119004807 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agent_activity CHANGE agent_name agent_name VARCHAR(255) DEFAULT NULL, CHANGE customer_name customer_name VARCHAR(255) DEFAULT NULL, CHANGE thread_type thread_type VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE announcement CHANGE tag_color tag_color VARCHAR(255) DEFAULT NULL, CHANGE link_text link_text VARCHAR(255) DEFAULT NULL, CHANGE link_url link_url VARCHAR(255) DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE marketing_module CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL, CHANGE image image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE recaptcha CHANGE site_key site_key VARCHAR(255) DEFAULT NULL, CHANGE secret_key secret_key VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE uv_article CHANGE slug slug VARCHAR(255) DEFAULT NULL, CHANGE keywords keywords VARCHAR(255) DEFAULT NULL, CHANGE meta_title meta_title VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE uv_email_templates CHANGE template_type template_type VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE uv_prepared_responses CHANGE type type VARCHAR(255) DEFAULT \'public\'');
        $this->addSql('ALTER TABLE uv_saved_filters CHANGE route route VARCHAR(190) DEFAULT NULL');
        $this->addSql('ALTER TABLE uv_saved_replies CHANGE subject subject VARCHAR(255) DEFAULT NULL, CHANGE template_for template_for VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE uv_solution_category CHANGE description description VARCHAR(100) DEFAULT NULL, CHANGE sorting sorting VARCHAR(255) DEFAULT \'ascending\'');
        $this->addSql('ALTER TABLE uv_solutions CHANGE solution_image solution_image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE uv_support_label CHANGE color_code color_code VARCHAR(191) DEFAULT NULL');
        $this->addSql('ALTER TABLE uv_support_privilege CHANGE privileges privileges LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', CHANGE created_at created_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE uv_support_role CHANGE description description VARCHAR(191) DEFAULT NULL');
        $this->addSql('ALTER TABLE uv_thread CHANGE cc cc LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', CHANGE bcc bcc LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', CHANGE reply_to reply_to LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', CHANGE delivery_status delivery_status VARCHAR(255) DEFAULT NULL, CHANGE agent_viewed_at agent_viewed_at DATETIME DEFAULT NULL, CHANGE customer_viewed_at customer_viewed_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE uv_ticket CHANGE mailbox_email mailbox_email VARCHAR(191) DEFAULT NULL, CHANGE customer_replied_at customer_replied_at DATETIME DEFAULT NULL, CHANGE country country VARCHAR(255) DEFAULT NULL, CHANGE skip_updated_at skip_updated_at VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE uv_ticket_attachments CHANGE content_type content_type VARCHAR(255) DEFAULT NULL, CHANGE content_id content_id VARCHAR(255) DEFAULT NULL, CHANGE file_system file_system VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE uv_ticket_priority CHANGE color_code color_code VARCHAR(191) DEFAULT NULL');
        $this->addSql('ALTER TABLE uv_ticket_status CHANGE color_code color_code VARCHAR(191) DEFAULT NULL');
        $this->addSql('ALTER TABLE uv_user CHANGE email email VARCHAR(191) DEFAULT NULL, CHANGE proxy_id proxy_id VARCHAR(191) DEFAULT NULL, CHANGE password password VARCHAR(191) DEFAULT NULL, CHANGE last_name last_name VARCHAR(191) DEFAULT NULL, CHANGE verification_code verification_code VARCHAR(191) DEFAULT NULL, CHANGE timezone timezone VARCHAR(191) DEFAULT NULL, CHANGE timeformat timeformat VARCHAR(191) DEFAULT NULL, CHANGE last_otp_generated_at last_otp_generated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE uv_user_instance CHANGE skype_id skype_id VARCHAR(191) DEFAULT NULL, CHANGE contact_number contact_number VARCHAR(191) DEFAULT NULL, CHANGE designation designation VARCHAR(191) DEFAULT NULL, CHANGE last_login last_login DATETIME DEFAULT NULL, CHANGE ticket_access_level ticket_access_level VARCHAR(32) DEFAULT NULL');
        $this->addSql('ALTER TABLE uv_website CHANGE logo logo VARCHAR(191) DEFAULT NULL, CHANGE favicon favicon VARCHAR(191) DEFAULT NULL, CHANGE timezone timezone VARCHAR(191) DEFAULT NULL, CHANGE webhook_url webhook_url VARCHAR(191) DEFAULT NULL, CHANGE timeformat timeformat VARCHAR(191) DEFAULT NULL, CHANGE business_hour business_hour LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE uv_website_knowledgebase CHANGE header_background_color header_background_color VARCHAR(255) DEFAULT NULL, CHANGE link_color link_color VARCHAR(255) DEFAULT NULL, CHANGE article_text_color article_text_color VARCHAR(255) DEFAULT NULL, CHANGE site_description site_description VARCHAR(1000) DEFAULT NULL, CHANGE homepage_content homepage_content VARCHAR(255) DEFAULT NULL, CHANGE header_links header_links LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', CHANGE footer_links footer_links LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', CHANGE banner_background_color banner_background_color VARCHAR(255) DEFAULT NULL, CHANGE link_hover_color link_hover_color VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agent_activity CHANGE agent_name agent_name VARCHAR(255) DEFAULT \'NULL\', CHANGE customer_name customer_name VARCHAR(255) DEFAULT \'NULL\', CHANGE thread_type thread_type VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE announcement CHANGE tag_color tag_color VARCHAR(255) DEFAULT \'NULL\', CHANGE link_text link_text VARCHAR(255) DEFAULT \'NULL\', CHANGE link_url link_url VARCHAR(255) DEFAULT \'NULL\', CHANGE created_at created_at DATETIME DEFAULT \'NULL\', CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE marketing_module CHANGE created_at created_at DATETIME DEFAULT \'NULL\', CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\', CHANGE image image VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE recaptcha CHANGE site_key site_key VARCHAR(255) DEFAULT \'NULL\', CHANGE secret_key secret_key VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE uv_article CHANGE slug slug VARCHAR(255) DEFAULT \'NULL\', CHANGE keywords keywords VARCHAR(255) DEFAULT \'NULL\', CHANGE meta_title meta_title VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE uv_email_templates CHANGE template_type template_type VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE uv_prepared_responses CHANGE type type VARCHAR(255) DEFAULT \'\'\'public\'\'\'');
        $this->addSql('ALTER TABLE uv_saved_filters CHANGE route route VARCHAR(190) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE uv_saved_replies CHANGE subject subject VARCHAR(255) DEFAULT \'NULL\', CHANGE template_for template_for VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE uv_solutions CHANGE solution_image solution_image VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE uv_solution_category CHANGE description description VARCHAR(100) DEFAULT \'NULL\', CHANGE sorting sorting VARCHAR(255) DEFAULT \'\'\'ascending\'\'\'');
        $this->addSql('ALTER TABLE uv_support_label CHANGE color_code color_code VARCHAR(191) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE uv_support_privilege CHANGE privileges privileges LONGTEXT DEFAULT \'NULL\' COMMENT \'(DC2Type:array)\', CHANGE created_at created_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE uv_support_role CHANGE description description VARCHAR(191) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE uv_thread CHANGE cc cc LONGTEXT DEFAULT \'NULL\' COMMENT \'(DC2Type:array)\', CHANGE bcc bcc LONGTEXT DEFAULT \'NULL\' COMMENT \'(DC2Type:array)\', CHANGE reply_to reply_to LONGTEXT DEFAULT \'NULL\' COMMENT \'(DC2Type:array)\', CHANGE delivery_status delivery_status VARCHAR(255) DEFAULT \'NULL\', CHANGE agent_viewed_at agent_viewed_at DATETIME DEFAULT \'NULL\', CHANGE customer_viewed_at customer_viewed_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE uv_ticket CHANGE mailbox_email mailbox_email VARCHAR(191) DEFAULT \'NULL\', CHANGE customer_replied_at customer_replied_at DATETIME DEFAULT \'NULL\', CHANGE country country VARCHAR(255) DEFAULT \'NULL\', CHANGE skip_updated_at skip_updated_at VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE uv_ticket_attachments CHANGE content_type content_type VARCHAR(255) DEFAULT \'NULL\', CHANGE content_id content_id VARCHAR(255) DEFAULT \'NULL\', CHANGE file_system file_system VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE uv_ticket_priority CHANGE color_code color_code VARCHAR(191) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE uv_ticket_status CHANGE color_code color_code VARCHAR(191) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE uv_user CHANGE email email VARCHAR(191) DEFAULT \'NULL\', CHANGE proxy_id proxy_id VARCHAR(191) DEFAULT \'NULL\', CHANGE password password VARCHAR(191) DEFAULT \'NULL\', CHANGE last_name last_name VARCHAR(191) DEFAULT \'NULL\', CHANGE verification_code verification_code VARCHAR(191) DEFAULT \'NULL\', CHANGE timezone timezone VARCHAR(191) DEFAULT \'NULL\', CHANGE timeformat timeformat VARCHAR(191) DEFAULT \'NULL\', CHANGE last_otp_generated_at last_otp_generated_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE uv_user_instance CHANGE skype_id skype_id VARCHAR(191) DEFAULT \'NULL\', CHANGE contact_number contact_number VARCHAR(191) DEFAULT \'NULL\', CHANGE designation designation VARCHAR(191) DEFAULT \'NULL\', CHANGE last_login last_login DATETIME DEFAULT \'NULL\', CHANGE ticket_access_level ticket_access_level VARCHAR(32) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE uv_website CHANGE logo logo VARCHAR(191) DEFAULT \'NULL\', CHANGE favicon favicon VARCHAR(191) DEFAULT \'NULL\', CHANGE timezone timezone VARCHAR(191) DEFAULT \'NULL\', CHANGE webhook_url webhook_url VARCHAR(191) DEFAULT \'NULL\', CHANGE timeformat timeformat VARCHAR(191) DEFAULT \'NULL\', CHANGE business_hour business_hour LONGTEXT DEFAULT \'NULL\' COMMENT \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE uv_website_knowledgebase CHANGE header_background_color header_background_color VARCHAR(255) DEFAULT \'NULL\', CHANGE link_color link_color VARCHAR(255) DEFAULT \'NULL\', CHANGE article_text_color article_text_color VARCHAR(255) DEFAULT \'NULL\', CHANGE site_description site_description VARCHAR(1000) DEFAULT \'NULL\', CHANGE homepage_content homepage_content VARCHAR(255) DEFAULT \'NULL\', CHANGE header_links header_links LONGTEXT DEFAULT \'NULL\' COMMENT \'(DC2Type:array)\', CHANGE footer_links footer_links LONGTEXT DEFAULT \'NULL\' COMMENT \'(DC2Type:array)\', CHANGE banner_background_color banner_background_color VARCHAR(255) DEFAULT \'NULL\', CHANGE link_hover_color link_hover_color VARCHAR(255) DEFAULT \'NULL\'');
    }
}

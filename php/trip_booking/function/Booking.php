<?php
require_once('Model.php');
class Booking extends Model {
    // プロパティ
    protected $table = 'bookings';
    protected $table_us = 'us_bookings';
    protected $table_uk = 'uk_bookings';
    protected $table_ita= 'italy_bookings';
    protected $table_fra = 'france_bookings';

    public function createBookingTable($data) {
        $stmt = $this->db_manager->dbh->prepare('INSERT INTO ' . $this->table . ' (sum, created) VALUES (?, ?)');
        $stmt->execute($data);
    }
    public function createUsaBookingTable($data_us) {
        $stmt = $this->db_manager->dbh->prepare('INSERT INTO ' . $this->table_us . ' (number, total_price, created) VALUES (?, ?, ?)');
        $stmt->execute($data_us);
    }
    public function createUkBookingTable($data_uk) {
        $stmt = $this->db_manager->dbh->prepare('INSERT INTO ' . $this->table_uk . ' (number, total_price, created) VALUES (?, ?, ?)');
        $stmt->execute($data_uk);
    }
    public function createItalyBookingTable($data_ita) {
        $stmt = $this->db_manager->dbh->prepare('INSERT INTO ' . $this->table_ita . ' (number, total_price, created) VALUES (?, ?, ?)');
        $stmt->execute($data_ita);
    }
    public function createFranceBookingTable($data_fra) {
        $stmt = $this->db_manager->dbh->prepare('INSERT INTO ' . $this->table_fra . ' (number, total_price, created) VALUES (?, ?, ?)');
        $stmt->execute($data_fra);
    }
    

}    
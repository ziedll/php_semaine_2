<?php 
class Contact {
    public int $id;
    public string $nom;
    public string $email;
    public ?string $telephone;

    public function __construct(int $id, string $nom, string $email, ?string $telephone = null) {
        $this->id = $id;
        $this->nom = $nom;
        $this->email = $email;
        $this->telephone = $telephone;
    }
}

class ContactManager {
    public PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    /**
     * Récupère tous les contacts
     * @return Contact[] Tableau d'objets Contact
     */
    public function getAllContacts(): array {
        $stmt = $this->db->query("SELECT * FROM contacts");
        
        $contacts = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $contacts[] = new Contact(
                $row['id'],
                $row['nom'],
                $row['email'],
                $row['telephone'] ?? null
            );
        }
        
        return $contacts;
    }
}
?>
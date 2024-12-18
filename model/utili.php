<?php

class utilisateur {
    private ?int $id;
    private ?string $prenom;
    private ?string $nom;
    private ?int $tel;
    private ?string $email;
    private ?string $psw;
    private ?string $tyype;
    private ?DateTime $date_nai;
    private ?DateTime $date_entre;
    private ?DateTime $date_insc;
    private ?DateTime $date_mise;
    private ?string $photo;

    // Constructor
    public function __construct(?int $id, ?string $prenom,  ?string $nom, ?int $tel, ?string $email, ?string $psw, ?string $tyype, ?DateTime $date_nai, ?DateTime $date_entre, ?DateTime $date_insc, ?DateTime $date_mise, ?string $photo) {
        $this->id = $id;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->tel = $tel;
        $this->email = $email;
        $this->psw = $psw;
        $this->tyype = $tyype;
        $this->date_nai = $date_nai;
        $this->date_entre = $date_entre;
        $this->date_insc = $date_insc;
        $this->date_mise = $date_mise;
        $this->photo = $photo;
    }

    // Getters and Setters

    public function getId(): ?int {
        return $this->id;//tekhou ml classe 'un enregistrement ) , khatrou private matnjmch takhou direcet lazmek getter
    }

    public function setId(?int $id): void {
        $this->id = $id;// setter methode taabi be champ be champ
    }

    public function getPrenom(): ?string {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): void {
        $this->prenom = $prenom;
    }

    public function getNom(): ?string {
        return $this->nom;
    }

    public function setNom(?string $nom): void {
        $this->nom = $nom;
    }

    public function getTel(): ?int {
        return $this->tel;//tekhou ml classe 'un enregistrement ) , khatrou private matnjmch takhou direcet lazmek getter
    }

    public function setTel(?int $tel): void {
        $this->tel = $tel;// setter methode taabi be champ be champ
    }

    public function getEmail(): ?string {
        return $this->email;
    }

    public function setEmail(?string $email): void {
        $this->email = $email;
    }

    public function getPsw(): ?string {
        return $this->psw;
    }

    public function setPsw(?string $psw): void {
        $this->psw = $psw;
    }

    public function gettyype(): string {
        return $this->tyype;
    }

    public function settyype(string $tyype): void {
        $this->tyype = $tyype;
    }

    public function getDate_nai(): ?DateTime {
        return $this->date_nai;
    }

    public function setDate_nai(?DateTime $date_nai): void {
        $this->date_nai = $date_nai;
    }

    public function getDate_entre(): ?DateTime {
        return $this->date_entre;
    }

    public function setDate_entre(?DateTime $date_entre): void {
        $this->date_entre = $date_entre;
    }

    public function getDate_insc(): ?DateTime {
        return $this->date_insc;
    }

    public function setDate_insc(?DateTime $date_insc): void {
        $this->date_insc = $date_insc;
    }

    public function getDate_mise(): ?DateTime {
        return $this->date_mise;
    }

    public function setDate_mise(?DateTime $date_mise): void {
        $this->date_mise = $date_mise;
    }

    public function getPhoto(): ?string {
        return $this->photo;
    }

    public function setPhoto(?string $photo): void {
        $this->photo = $photo;
    }
}

class user_activity {
    private ?int $id;
    private ?int $user_id;
    private ?string $action;
    private ?DateTime $timestamp;
    private ?string $status;

    // Constructor
    public function __construct(?int $id, ?int $user_id, ?string $action, ?DateTime $timestamp = null, ?string $status = 'active') {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->action = $action;
        $this->timestamp = $timestamp ?? new DateTime();
        $this->status = $status;
    }

    // Getters and Setters
    public function getId(): ?int {
        return $this->id;
    }

    public function setId(?int $id): void {
        $this->id = $id;
    }

    public function getUserId(): ?int {
        return $this->user_id;
    }

    public function setUserId(?int $user_id): void {
        $this->user_id = $user_id;
    }

    public function getAction(): ?string {
        return $this->action;
    }

    public function setAction(?string $action): void {
        $this->action = $action;
    }

    public function getTimestamp(): ?DateTime {
        return $this->timestamp;
    }

    public function setTimestamp(?DateTime $timestamp): void {
        $this->timestamp = $timestamp;
    }

    public function getStatus(): ?string {
        return $this->status;
    }

    public function setStatus(?string $status): void {
        $this->status = $status;
    }
}
?>



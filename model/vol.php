<?php 
class Vol {
    private string $ref;
    private string $compagnie;
    private string $destination;
    private string $date;
    private string $heureD;
    private string $heureA;

    public function __construct(string $ref, string $compagnie, string $destination, string $date, string $heureD, string $heureA)
    {
        $this->ref = $ref;
        $this->compagnie = $compagnie;
        $this->destination = $destination;
        $this->date = $date;
        $this->heureD = $heureD;
        $this->heureA = $heureA;
    }

    public function getRef(): string
    {
        return $this->ref;
    }
    public function getCompagnie(): string
    {
        return $this->compagnie;
    }
    public function getDestination(): string
    {
        return $this->destination;
    }
    public function getDate(): string
    {
        return $this->date;
    }
    public function getHeureD(): string
    {
        return $this->heureD;
    }
    public function getHeureA(): string
    {
        return $this->heureA;
    }
    public function setRef(string $ref): void
    {
        $this->ref = $ref;
    }
    public function setCompagnie(string $compagnie): void
    {
        $this->compagnie = $compagnie;
    }
    public function setDestination(string $destination): void
    {
        $this->destination = $destination;
    }
    public function setDate(string $date): void
    {
        $this->date = $date;
    }
    public function setHeureD(string $heureD): void
    {
        $this->heureD = $heureD;
    }
    public function setHeureA(string $heureA): void
    {
        $this->heureA = $heureA;
    }

}
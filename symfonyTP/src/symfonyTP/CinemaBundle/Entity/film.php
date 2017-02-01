<?php

namespace symfonyTP\CinemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * film
 *
 * @ORM\Table(name="film")
 * @ORM\Entity(repositoryClass="symfonyTP\CinemaBundle\Repository\filmRepository")
 */
class film
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="film", type="string", length=255)
     */
    private $film;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=255)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="personne", type="string", length=255)
     */
    private $personne;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set film
     *
     * @param string $film
     *
     * @return film
     */
    public function setFilm($film)
    {
        $this->film = $film;

        return $this;
    }

    /**
     * Get film
     *
     * @return string
     */
    public function getFilm()
    {
        return $this->film;
    }

    /**
     * Set genre
     *
     * @param string $genre
     *
     * @return film
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set personne
     *
     * @param string $personne
     *
     * @return film
     */
    public function setPersonne($personne)
    {
        $this->personne = $personne;

        return $this;
    }

    /**
     * Get personne
     *
     * @return string
     */
    public function getPersonne()
    {
        return $this->personne;
    }
}


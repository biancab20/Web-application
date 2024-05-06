<?php

namespace App\Services;

use App\Repositories\DanceRepository;
use App\Models\Dance_event\ImageHomePage;
use App\Models\Dance_event\CareerHighlights;
use App\Models\Dance_event\Artist;
use App\Models\Dance_event\ArtistSpotifyLink;
use App\Models\Dance_event\ClubLocation;

class DanceService
{
    private $danceRepository;

    public function __construct()
    {
        $this->danceRepository = new DanceRepository();
    }

    public function getArtistById($artistID): Artist
    {
        return $this->danceRepository->getArtistById($artistID);
    }

    public function getAllArtists(): array
    {
        return $this->danceRepository->getAllArtists();
    }

    public function getArtistSpotifyLinks($artistID): array
    {
        return $this->danceRepository->getArtistSpotifyLinks($artistID);
    }

    public function getImageHomePage(): ImageHomePage
    {
        return $this->danceRepository->getImageHomePage();
    }
    public function getCareerHighlightsByArtistID($artistID): CareerHighlights
    {
        return $this->danceRepository->getCareerHighlightsByArtistID($artistID);
    }
    public function getAllClubLocations(): array
    {
        return $this->danceRepository->getAllClubLocations();
    }

    // -----------++++++++++++++ delete methods ++++++++++++++----------------

    public function deleteArtist($artistID): void
    {
        $this->danceRepository->deleteArtist($artistID);
    }

    public function deleteArtistSpotifyLinks($id): void
    {
        $this->danceRepository->deleteArtistSpotifyLinks($id);
    }
    public function deleteCareerHighlights($id): void
    {
        $this->danceRepository->deleteCareerHighlights($id);
    }
    public function deleteClubLocation($id): void
    {
        $this->danceRepository->deleteClubLocation($id);
    }
    // -----------++++++++++++++ update methods ++++++++++++++----------------
    public function updateArtist($artist): void
    {
        $this->danceRepository->updateArtist($artist);
    }
    public function updateImageHomePage($id): void
    {
        $this->danceRepository->updateImageHomePage($id);
    }
    public function updateClubLocation($id, $name, $location): void
    {
        $this->danceRepository->updateClubLocation($id, $name, $location);
    }

    // -----------++++++++++++++ create methods ++++++++++++++----------------


}

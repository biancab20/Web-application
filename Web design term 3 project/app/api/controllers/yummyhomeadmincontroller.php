<?php

namespace App\Api\Controllers;

use App\Services\YummyService;

class YummyHomeAdminController
{
    private $yummyService;

    public function __construct()
    {
        $this->yummyService = new YummyService();
    }

    public function updateTopPartInformation()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = json_decode(file_get_contents('php://input'), true);

            if (isset ($input['pageID'], $input['subheader'], $input['description'])) {
                $id = $input['pageID'];
                $subheader = $input['subheader'];
                $description = $input['description'];

                $this->yummyService->editHomepageDataRestaurant($id, $subheader, $description);

                echo json_encode(['message' => 'Top part updated successfully']);
            } else {
                http_response_code(400); // Bad Request
                echo json_encode(['message' => 'Missing required fields']);
            }
        }
    }

    public function updateHomePageImages()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset ($_FILES['image'], $_POST['id'], $_POST['columnName'])) {
            $image = $_FILES['image'];
            $id = $_POST['id'];
            $columnName = $_POST['columnName'];

            $projectRoot = realpath(__DIR__ . '/../../..');
            $uploadsDir = $projectRoot . '/app/public/assets/images/yummy_event/home_page_top';
            if (!file_exists($uploadsDir)) {
                mkdir($uploadsDir, 0777, true);
            }
            $allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/webp'];

            if ($image['error'] === UPLOAD_ERR_OK && in_array($image['type'], $allowedTypes)) {
                $currentImage = $this->yummyService->getCurrentHomepageDataRestaurantImagePath($id, $columnName);
                $tmpName = $image['tmp_name'];
                $name = uniqid() . '-' . basename($image['name']);
                $destination = $uploadsDir . '/' . $name;

                if (move_uploaded_file($tmpName, $destination)) {
                    $imageUrl = "assets/images/yummy_event/home_page_top/$name";
                    $this->yummyService->editImagePathHomepageDataRestaurant($id, $columnName, $imageUrl);

                    if ($currentImage && $currentImage != $imageUrl) {
                        @unlink($projectRoot . '/app/public/' . $currentImage);
                    }
                    echo json_encode(['success' => true, 'imageUrl' => $imageUrl]);
                } else {
                    echo json_encode(['success' => false, 'error' => 'Failed to save the file.']);
                }
            } else {
                echo json_encode(['success' => false, 'error' => 'Invalid file or upload error.']);
            }
        } else {
            echo json_encode(['success' => false, 'error' => 'No file uploaded or missing ID.']);
        }
    }

    public function updateReservation()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = json_decode(file_get_contents('php://input'), true);

            if (isset ($input['reservationId'], $input['firstName'], $input['lastName'], $input['email'], $input['phoneNumber'], $input['session'], $input['date'], $input['numberOfAdults'], $input['numberOfChildren'], $input['comment'], $input['active'])) {
                $id = $input['reservationId'];
                $firstName = $input['firstName'];
                $lastName = $input['lastName'];
                $email = $input['email'];
                $phoneNumber = $input['phoneNumber'];
                $session = $input['session'];
                $date = $input['date'];
                $numberOfAdults = (int) $input['numberOfAdults'];
                $numberOfChildren = (int) $input['numberOfChildren'];
                $comment = $input['comment'];
                $active = $input['active'];

                $this->yummyService->editReservation($id, $firstName, $lastName, $email, $phoneNumber, $session, $date, $numberOfAdults, $numberOfChildren, $comment, $active);

                echo json_encode(['message' => 'Reservation updated successfully $numberOfAdults' . $numberOfAdults . ' $numberOfChildren' . $numberOfChildren]);
            } else {
                http_response_code(400); // Bad Request
                echo json_encode(['message' => 'Missing required fields']);
            }
        }
    }

    public function createReservation()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = json_decode(file_get_contents('php://input'), true);

            if (isset ($input['restaurantId'], $input['firstName'], $input['lastName'], $input['email'], $input['phoneNumber'], $input['session'], $input['date'], $input['numberOfAdults'], $input['numberOfChildren'], $input['comment'], $input['active'])) {
                $restaurantId = $input['restaurantId'];
                $firstName = $input['firstName'];
                $lastName = $input['lastName'];
                $email = $input['email'];
                $phoneNumber = $input['phoneNumber'];
                $session = $input['session'];
                $date = $input['date'];
                $numberOfAdults = (int) $input['numberOfAdults'];
                $numberOfChildren = (int) $input['numberOfChildren'];
                $comment = $input['comment'];
                $active = $input['active'];

                $this->yummyService->addReservation($restaurantId, $firstName, $lastName, $email, $phoneNumber, $session, $date, $numberOfAdults, $numberOfChildren, $comment, $active);

                echo json_encode(['message' => 'Reservation updated successfully $numberOfAdults' . $numberOfAdults . ' $numberOfChildren' . $numberOfChildren]);
            } else {
                http_response_code(400); // Bad Request
                echo json_encode(['message' => 'Missing required fields']);
            }
        }

    }
}